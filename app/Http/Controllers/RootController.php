<?php

namespace cdn\Http\Controllers;

use Session;

use cdn\Models\Branch;
use cdn\Models\Order;
use cdn\Models\OrderItems;
use cdn\Models\Item;
use cdn\Models\Root;
use DB;
use Auth;
use cdn\User;

use Illuminate\Http\Request;

class RootController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getIndex()
    {
        return view('root.index');
    }
    public function getTest()
    {
        Session::flash('message','Empty input not accepted');
        $items = Item::select('itemnumber', 'itemname', 'itemprice', 'itemsku', 'plant', 'instock', 'link', 'type')->orderBy('created_at', 'asc')->paginate(10);
        $branches = Branch::select('branchname', 'branchnumber')->paginate(10);
        $orders = Order::select('ordernumber', 'staffname', 'staffid', 'ponumber', 'branchnumber', 'branchname', 'urgent', 'created_at', 'updated_at')->orderBy('updated_at', 'asc')->paginate(10);        
        return view('tests.index')->with('orders', $orders)->with('items', $items)->with('branches', $branches);
    }
    public function getReview()
    {    
        $items = Item::select('itemnumber', 'itemname', 'itemprice', 'itemsku', 'plant', 'instock', 'link', 'type')->orderBy('created_at', 'asc')->paginate(10);
        $branches = Branch::select('branchname', 'branchnumber')->get();
        $orders = Order::select('ordernumber', 'staffname', 'staffid', 'ponumber', 'branchnumber', 'branchname', 'orderitems', 'itemnumber', 'itemqty', 'freeitem', 'itemprice', 'urgent', 'created_at', 'updated_at')->orderBy('updated_at', 'asc')->paginate(10);
        return view('orders.review')->with('orders', $orders)->with('items', $items)->with('branches', $branches);
    }
    function getAllMonths(){
		$month_array = array();
		$posts_dates = Post::orderBy( 'created_at', 'ASC' )->pluck( 'created_at' );
		$posts_dates = json_decode( $posts_dates );
		if ( ! empty( $posts_dates ) ) {
			foreach ( $posts_dates as $unformatted_date ) {
				$date = new \DateTime( $unformatted_date->date );
				$month_no = $date->format( 'm' );
				$month_name = $date->format( 'M' );
				$month_array[ $month_no ] = $month_name;
			}
		}
		return $month_array;
	}
	function getMonthlyPostCount( $month ) {
		$monthly_post_count = Post::whereMonth( 'created_at', $month )->get()->count();
		return $monthly_post_count;
	}
	function getMonthlyPostData() {
		$monthly_post_count_array = array();
		$month_array = $this->getAllMonths();
		$month_name_array = array();
		if ( ! empty( $month_array ) ) {
			foreach ( $month_array as $month_no => $month_name ){
				$monthly_post_count = $this->getMonthlyPostCount( $month_no );
				array_push( $monthly_post_count_array, $monthly_post_count );
				array_push( $month_name_array, $month_name );
			}
		}
		$max_no = max( $monthly_post_count_array );
		$max = round(( $max_no + 10/2 ) / 10 ) * 10;
		$monthly_post_data_array = array(
			'months' => $month_name_array,
			'post_count_data' => $monthly_post_count_array,
			'max' => $max,
		);
		return $monthly_post_data_array;
    }   
    public function getAllOrders(Order $slug, User $idnumber)
    {
        $order = Order::where('slug', '=', $slug)->first();
        $id = User::where('idnumber', '=', $idnumber)->first();
        //dump($order);               
        //dump($id);               
        $currentuser = \Auth::user();
        $orderitems = Order::all();
        // ** MAIN DUMP ** //
        //dump($orderitems);               
        // ** MAIN DUMP ** //         
        $items = Item::all();
        $branches = Branch::all();
        //$orders = Order::all()->where('ordernumber', '=', $ordernumber)->first();
        $jcorders = Order::select()->where('status', '=', 'JustCreated')->orderBy('updated_at', 'asc')->paginate(20);
        $editingorders = Order::select()->where('status', '=', 'Editing')->orderBy('updated_at', 'asc')->paginate(20);
        $processingorders = OrderItems::select()->where('orderstatus', '=', 'Processing')->orderBy('updated_at', 'asc')->paginate(20);
        $completedorders = Order::select()->where('status', '=', 'Completed')->orderBy('updated_at', 'asc')->paginate(20);
        $reviewingorders = Order::select()->where('status', '=', 'Reviewing')->orderBy('updated_at', 'asc')->paginate(20);
        $orderitems = OrderItems::all();
        $processedorders = Order::where('status', '=', 'Submitted')->orderBy('updated_at', 'asc')->paginate(7);
        $ordernumber = Order::where('status', '=', 'Submitted')->get();
        $stafforders = OrderItems::select()->where('orderstatus', '=', 'Submitted')->whereNotNull('ponumber')->groupBy('staffid')->get();
        $submittedorders = Order::select()->where('status', '=', 'Submitted')->whereNotNull('ponumber')->orderBy('updated_at', 'desc')->groupBy('slug')->get();
        $orders = OrderItems::select()->orderBy('updated_at', 'asc')->get();
        $stafforderitems = OrderItems::select()->where('orderstatus', '=', 'Submitted')->whereNotNull('itemprice')->orderBy('updated_at', 'asc')->groupBy('staffid')->get();
        $completedorders = Order::select()->where('status', '=', 'Completed')->whereNotNull('ponumber')->groupBy('slug')->orderBy('updated_at', 'desc')->get();
        /* Todays Orders*/
        $date = \Carbon\Carbon::today()->subDays(0);
        $thisdayorders = Order::where('created_at', '>=', $date)->where('status', '=', 'Completed')->orderBy('updated_at', 'asc')->groupBy('staffid')->get();
        $thisdaycompletedorders = Order::where('created_at', '>=', $date)->where('status', '=', 'Completed')->orderBy('updated_at', 'asc')->groupBy('staffid')->get();
        $todaysjustcreatedorders = $thisdayorders
		->where('status', '=', 'JustCreated');
		$todayseditingorders = $thisdayorders
		->where('status', '=', 'Editing');
		$todaysreviewingorders = $thisdayorders
		->where('status', '=', 'Reviewing');
		$todayssubmittedorders = $thisdayorders
		->where('status', '=', 'Submitted');
		$todayscompletedorders = $thisdayorders
		->where('status', '=', 'Completed');
        //dump($todayssubmittedorders);	
		$sumthisdayorders = $thisdayorders->sum('totalprice');
		$sumthisdayfreeorders = $thisdayorders->sum('totalitems');
		$sumthisdayordersqty = $thisdayorders->sum('totalqty');
		$today = date("Y-m-d", strtotime( '0 days' ) );	
		/* Yesterdays Orders*/
		$yesterday = date("Y-m-d", strtotime( '-1 days' ) );
		$yesterdaysorders = Order::whereDate('created_at', $yesterday )->get();
		$sumyesterdaysales = $yesterdaysorders->sum('totalprice');
		/* Two Days Ago Orders*/
		$twodaysago = date("Y-m-d", strtotime( '-2 days' ) );
		$twodaysagoorders = Order::whereDate('created_at', $twodaysago )->get();
		/* This Month Sales*/
		$thismonth = date("Y-m-d", strtotime( '0 days' ) );
        $thismonthorders = Order::whereDate('created_at', $thismonth )->get();
        $sumthismonthorders = $thismonthorders->sum('totalprice');
		/* All Orders*/
		$date1 = \Carbon\Carbon::today()->subDays();
		$allorders = Order::where('created_at', '>=', $date1)->get();
		$sumallorders = $allorders->sum('totalprice');
        //$completedorders =  OrderItems::select()->where('orderstatus', '=', 'Completed')->whereNotNull('itemprice')->groupBy('staffid')->get();
        $itemprice = $items;
        $root = Root::select()->get();
        //dump($root);
        //dump($currentuser);
        $profiles = OrderItems::where('orderstatus', '=', 'Submitted')->where('slug', '=', $slug)->whereNotNull('itemnumber')->get();
        $header = Order::where('status', '=', 'Submitted')->get();
        //dump($slug);
        //dump($idnumber);
        //dump($stafforderitems);
        //dump($header);
        //dump($profiles);

        /** SUM By Status */

        $sumsubmittedorders = $submittedorders->sum('totalprice');
        $sumcompletedorders = $completedorders->sum('totalprice');

        dump([ 
            'Total Submitted Orders' => $submittedorders->count(),
			'Total Completed Orders' => $completedorders->count(),
			'All Orders' => $submittedorders->count() + $completedorders->count(),
			'Total Submitted Sales' => number_format($sumsubmittedorders) . '.00 SAR',
			'Total Completed Sales' => number_format($sumcompletedorders) . '.00 SAR',
			'Todays All Sales' => number_format($sumallorders) . '.00 SAR',
			/*'Yesterdays Total Sales' => number_format($sumyesterdaysales) . '.00 SAR',
            'Total Sales' => number_format($sumallorders) . '.00 SAR',
            'This Month All Users Total Sales' => number_format($sumthismonthorders) . '.00 SAR',*/

		]);
        return view('root.orders.all')
                ->withOrder($order)
                ->withId($id)
                ->with('submittedorders', $submittedorders)
                ->with('completedorders', $completedorders)
                ->with('reviewingorders', $reviewingorders)
                ->with('completedorders', $completedorders)
                ->with('processingorders', $processingorders)
                ->with('jcorders', $jcorders)
                ->with('processedorders', $processedorders)
                ->with('ordernumber', $ordernumber)
                ->with('orderitems', $orderitems)
                ->with('editingorders', $editingorders)
                ->with('orders', $orders)
                ->with('header', $header)
                ->with('profiles', $profiles)
                ->with('stafforders', $stafforders)
                ->with('stafforderitems', $stafforderitems)
                ->with('branches', $branches)
                ->with('thisdayorders', $thisdayorders)
                ->with('sumthisdayorders', $sumthisdayorders)
                ->with('sumallorders', $sumallorders)
                ->with('yesterdaysorders', $yesterdaysorders)
                ->with('sumyesterdaysales', $sumyesterdaysales)
                ->with('sumthisdayfreeorders', $sumthisdayfreeorders)
                ->with('sumthisdayordersqty', $sumthisdayordersqty)
                ->with('thisdaycompletedorders', $thisdaycompletedorders)
                ->with('todaysjustcreatedorders', $todaysjustcreatedorders)
				->with('todayseditingorders', $todayseditingorders)
				->with('todaysreviewingorders', $todaysreviewingorders)
				->with('todayssubmittedorders', $todayssubmittedorders)
				->with('todayscompletedorders', $todayscompletedorders);
    }
    public function getOrdersByIdAndSlug($idnumber, $slug)
    {   
        $order = Order::where('slug', '=', $slug)->first();
        $id = User::where('idnumber', '=', $idnumber)->first();
        //dump($order);               
        //dump($id);               
        //$user = Order::findorfail(4);
        //dump($user->branchname);
        //$root = Root::findorfail(1);
        //dump($root->orderItems);
        $belongstaffid = Order::where('staffid', '=', $idnumber)->where('slug', '=', $slug)->first();
        //dump(['By', $belongstaffid->staffname, 'ID', $belongstaffid->staffid]);
        $belongbranch = Order::where('staffid', '=', $idnumber)->where('slug', '=', $slug)->first();
        //dump(['Branch#Name', $belongbranch->branchname]);
        $belongordernumber = Order::where('staffid', '=', $idnumber)->where('slug', '=', $slug)->first();
        //dump(['Order#', $belongordernumber->ordernumber, 'PO#', $belongordernumber->ponumber, 'slug', $belongordernumber->slug]);
        //$belongponumber = Order::where('staffid', '=', $idnumber)->where('slug', '=', $slug)->first();
        //dump(['PO#', $belongponumber->ponumber]);
        $belongcreateddate = Order::where('staffid', '=', $idnumber)->where('slug', '=', $slug)->first();
        //dump(['Created@', $belongcreateddate->created_at, 'Updated@', $belongcreateddate->updated_at]);
        //$belongupdateddate = Order::where('staffid', '=', $idnumber)->where('slug', '=', $slug)->first();
        //dump(['Updated@', $belongupdateddate->updated_at]);
        $currentuser = \Auth::user();
        $orderitems = Order::where('staffid', '=', $currentuser->idnumber)->first();
        // ** MAIN DUMP ** //
        //dump($orderitems);               
        // ** MAIN DUMP ** // 
        $items = Item::all();
        $branches = Branch::all();
        //$orders = Order::all()->where('ordernumber', '=', $ordernumber)->first();
        $jcorders = Order::select()->where('slug', '=', $slug)->where('status', '=', 'JustCreated')->orderBy('updated_at', 'asc')->paginate(7);
        $editingorders = Order::select()->where('status', '=', 'Editing')->orderBy('updated_at', 'asc')->paginate(7);
        $processingorders = OrderItems::select()->where('orderstatus', '=', 'Processing')->orderBy('updated_at', 'asc')->paginate(7);
        $completedorders = Order::select()->where('status', '=', 'Completed')->orderBy('updated_at', 'asc')->paginate(7);
        $reviewingorders = Order::select()->where('status', '=', 'Reviewing')->orderBy('updated_at', 'asc')->paginate(7);
        $orderitems = OrderItems::where('staffid', '=', $currentuser->idnumber)
        ->get();
        $processedorders = Order::where('status', '=', 'Submitted')->orderBy('updated_at', 'asc')->paginate(7);
        $ordernumber = Order::where('status', '=', 'Submitted')->get();
        $stafforders = OrderItems::select()->where('orderstatus', '=', 'Submitted')->whereNotNull('ponumber')->groupBy('staffid')->get();
        $submittedorders = Order::select()->where('status', '=', 'Submitted')->whereNotNull('ponumber')->groupBy('slug')->get();
        $orders = OrderItems::select()->where('staffid', '=', $submittedorders)->orderBy('updated_at', 'asc')->paginate(7);
        $stafforderitems = OrderItems::select()->where('orderstatus', '=', 'Submitted')->whereNotNull('itemprice')->groupBy('staffid')->get();
        $itemprice = $items;
        //dump($currentuser);
        $profiles = OrderItems::where('orderstatus', '=', 'Submitted')->where('slug', '=', $slug)->whereNotNull('itemnumber')->get();
        $completedprofiles = OrderItems::where('orderstatus', '=', 'Completed')->where('slug', '=', $slug)->whereNotNull('itemnumber')->get();
        $header = Order::where('status', '=', 'Submitted')->get();
        $completedheader = Order::where('status', '=', 'Completed')->get();
        //dump($slug);
        //dump($idnumber);
        //dump($stafforderitems);
        //dump($header);
        //dump($profiles);
        return view('root.orders.index')
                ->withOrder($order)
                ->withId($id)
                ->with('completed', 'This order is completed, CONNOT be modefied.')
                ->with('submittedorders', $submittedorders)
                ->with('reviewingorders', $reviewingorders)
                ->with('completedorders', $completedorders)
                ->with('processingorders', $processingorders)
                ->with('jcorders', $jcorders)
                ->with('processedorders', $processedorders)
                ->with('ordernumber', $ordernumber)
                ->with('orderitems', $orderitems)
                ->with('editingorders', $editingorders)
                ->with('orders', $orders)
                ->with('header', $header)
                ->with('completedheader', $completedheader)
                ->with('profiles', $profiles)
                ->with('completedprofiles', $completedprofiles)
                ->with('belongstaffid', $belongstaffid)
                ->with('belongbranch', $belongbranch)
                ->with('belongordernumber', $belongordernumber)
                ->with('belongcreateddate', $belongcreateddate)
                ->with('stafforders', $stafforders)
                ->with('stafforderitems', $stafforderitems)
                ->with('branches', $branches);

    }
    
    public function getOrdersByUserId( $idnumber)
    {
        $order = Order::where('staffid', '=', $idnumber)->first();
        $id = User::where('idnumber', '=', $idnumber)->first();
        dump($id);      
        $currentuser = \Auth::user();
        $orderitems = Order::where('staffid', '=', $currentuser->idnumber)->first();
        // ** MAIN DUMP ** //
        //dump($orderitems);               
        // ** MAIN DUMP ** //
        $items = Item::all();
        $branches = Branch::all();
        //$orders = Order::all()->where('ordernumber', '=', $ordernumber)->first();
        $jcorders = Order::select()->where('status', '=', 'JustCreated')->orderBy('updated_at', 'asc')->paginate(7);
        $editingorders = Order::select()->where('status', '=', 'Editing')->orderBy('updated_at', 'asc')->paginate(7);
        $processingorders = OrderItems::select()->where('orderstatus', '=', 'Processing')->orderBy('updated_at', 'asc')->paginate(7);
        $completedorders = Order::select()->where('status', '=', 'Completed')->orderBy('updated_at', 'asc')->paginate(7);
        $reviewingorders = Order::select()->where('status', '=', 'Reviewing')->orderBy('updated_at', 'asc')->paginate(7);
        $orderitems = OrderItems::where('staffid', '=', $currentuser->idnumber)
        ->get();
        $processedorders = Order::where('status', '=', 'Submitted')->orderBy('updated_at', 'asc')->paginate(7);
        $ordernumber = Order::where('status', '=', 'Submitted')->get();
        $stafforders = OrderItems::select()->where('orderstatus', '=', 'Submitted')->whereNotNull('ponumber')->groupBy('staffid')->get();
        $submittedorders = Order::select()->where('status', '=', 'Submitted')->whereNotNull('ponumber')->groupBy('slug')->get();
        $orders = OrderItems::select()->where('staffid', '=', $submittedorders)->orderBy('updated_at', 'asc')->paginate(7);
        $stafforderitems = OrderItems::select()->where('orderstatus', '=', 'Submitted')->whereNotNull('itemprice')->groupBy('staffid')->get();
        $itemprice = $items;
        $root = Root::select()->get();
        dump($root);
        //dump($currentuser);
        $profiles = OrderItems::where('orderstatus', '=', 'Submitted')->where('staffid', '=', $idnumber)->whereNotNull('itemnumber')->get();
        $header = Order::where('status', '=', 'Submitted')->get();
        //dump($slug);
        dump($idnumber);
        //dump($stafforderitems);
        //dump($header);
        //dump($profiles);
        return view('root.orders.index')
        ->withOrder($order)
        ->withId($id)
        ->with('completed', 'This order is completed, CONNOT be modefied.')
        ->with('submittedorders', $submittedorders)
            ->with('reviewingorders', $reviewingorders)
            ->with('completedorders', $completedorders)
            ->with('processingorders', $processingorders)
            ->with('jcorders', $jcorders)
            ->with('processedorders', $processedorders)
            ->with('ordernumber', $ordernumber)
            ->with('orderitems', $orderitems)
            ->with('editingorders', $editingorders)
            ->with('orders', $orders)
            ->with('header', $header)
            ->with('profiles', $profiles)
            ->with('stafforders', $stafforders)
            ->with('stafforderitems', $stafforderitems)
            ->with('branches', $branches);
    }
    public function completeOrder($idnumber, $slug)
    {   
        Order::where('slug', $slug)->update(['updated_at' => now(), 'status' => 'Completed']);
        OrderItems::where('slug', $slug)->update(['updated_at' => now(), 'orderstatus' => 'Completed']);
        return redirect()->route('root.orders.all', 'Order_Have_Been_Marked_As#completed')->with('success', 'Success! Order has beem marked as completed');
    }
    public function getMd()
    {
        $items = Item::select('itemnumber', 'itemname', 'itemprice', 'itemsku', 'plant', 'instock', 'link', 'type')->orderBy('created_at', 'asc')->paginate(10);
        $branches = Branch::select('branchname', 'branchnumber')->get();
        $orders = Order::select('ordernumber', 'staffname', 'staffid', 'ponumber', 'branchnumber', 'branchname', 'urgent', 'created_at', 'updated_at')->orderBy('updated_at', 'asc')->paginate(10);
        return view('tests.markdown')->with('orders', $orders)->with('items', $items)->with('branches', $branches);
    }
    public function getMail()
    {
        return $this->view('tests.mail');
    }    
}
