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
use Mail;
use cdn\User;
use Carbon\Carbon;


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
        $thisdayorders = Order::where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->get();
        $userorders = Order::where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('staffid')->get();
        $todayssubmittedorders = $thisdayorders->where('status', '=', 'Submitted');
        return view('root.index')->with('todayssubmittedorders', $todayssubmittedorders )->with('userorders', $userorders);
    }
    public function getTest()
    {





        Session::flash('message','Empty input not accepted');
        $items = Item::select('itemnumber', 'itemname', 'itemprice', 'itemsku', 'plant', 'instock', 'link', 'type')->orderBy('created_at', 'asc')->paginate(10);
        $branches = Branch::select('branchname', 'branchnumber')->paginate(10);
        $orders = Order::select('ordernumber', 'staffname', 'staffid', 'ponumber', 'branchnumber', 'branchname', 'urgent', 'created_at', 'updated_at')->orderBy('created_at', 'asc')->paginate(10);        
        return view('tests.index')->with('orders', $orders)->with('items', $items)->with('branches', $branches);
    }




    public function getCsv()
    {

    }


    
    public function getReview()
    {    
        $items = Item::select('itemnumber', 'itemname', 'itemprice', 'itemsku', 'plant', 'instock', 'link', 'type')->orderBy('created_at', 'asc')->paginate(10);
        $branches = Branch::select('branchname', 'branchnumber')->get();
        $orders = Order::select('ordernumber', 'staffname', 'staffid', 'ponumber', 'branchnumber', 'branchname', 'orderitems', 'itemnumber', 'itemqty', 'freeitem', 'itemprice', 'urgent', 'created_at', 'updated_at')->orderBy('created_at', 'asc')->paginate(10);
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

        $today = date("Y-m-d", strtotime( '0 days' ) );	
        $todaysorders = Order::select()->whereDate('created_at', $today )->where('staffid', '=', $idnumber)->where('status', '=', 'Submitted' )->get();
        $todaysorderitems = OrderItems::whereDate('created_at', $today )->where('orderstatus', '=', 'Submitted' )->get();
        $header =  OrderItems::whereDate('created_at', $today )->where('orderstatus', '=', 'Submitted' )->whereNotNull('ordernumber')->orderBy('ponumber', 'asc');
        $body = OrderItems::whereDate('created_at', $today )->where('orderstatus', '=', 'Submitted' )->whereNull('ordernumber')->orderBy('ponumber', 'asc')->get();



       $arr = array(
        'label' => 'Assign to user',
        'desc' => 'Choose a user',
        'id' => $body    . 'client',
        'type' => 'radio',
        'options' => array()
    );

    $arr1 = array(
        'label' => 'Assign to user',
        'desc' => 'Choose a user',
        'id' => $header,'client',
        'type' => 'radio',
        'options' => array()
    );
    
    
    foreach ($header as $head) {
        $arr['options'][] = array (  

        );
    }


        //dump($header);
        //dump($body);
        //dump($arr);
        //dump($arr1);

        $today = date("Y-m-d", strtotime( '0 days' ) );	
        $todaysorders = Order::whereDate('created_at', $today )->get();
		$sumtodaysales = $todaysorders->sum('totalprice');
		/* Yesterdays Orders*/
		$yesterday = date("Y-m-d", strtotime( '-1 days' ) );
		$yesterdaysorders = Order::whereDate('created_at', $yesterday )->get();
		$sumyesterdaysales = $yesterdaysorders->sum('totalprice');

        $date = \Carbon\Carbon::today()->subDays(0);
        $thisdayorders = Order::where('created_at', '>=', $date)->where('status', '=', 'Completed')->orderBy('created_at', 'asc')->groupBy('staffid')->get();
        $todayscompletedorders = $thisdayorders
        ->where('status', '=', 'Completed');
        
        /** This Day Orders */
        $thisday = date("Y-m-d", strtotime( '0 days' ) );
        $thisdayorders = Order::whereDate('created_at',  '>=', $thisday )->get();
        $thisdayorderitems = OrderItems::whereDate('created_at', $thisday )->get();
        $sumthisdayorderssales = $thisdayorders->sum('totalprice');
        $sumthisdayorderitemssales = $thisdayorderitems->sum('totalprice');
        
        /** One Day Ago Orders */
        $onedayago = date("Y-m-d", strtotime( '-1 days' ) );
        $onedayagoorders = Order::whereDate('created_at',  '>', $onedayago )->get();
        $onedayagoorderitems = OrderItems::whereDate('created_at', $onedayago )->get();
        $sumonedayagoorderssales = $onedayagoorders->sum('totalprice');
        $sumonedayagoorderitemssales = $onedayagoorderitems->sum('totalprice');
        
        /** Tow Days Ago Orders */
        $towdaysago = date("Y-m-d", strtotime( '-2 days' ) );
		$towdaysagoorders = Order::whereDate('created_at',  '>', $towdaysago )->get();
        $towdaysagoorderitems = OrderItems::whereDate('created_at', $towdaysago )->get();
        $sumtowdaysagoordersonly = Order::whereDate('created_at',  '=', $towdaysago )->get();
		$sumtowdaysagoorderssales = $towdaysagoorders->sum('totalprice');
		$sumtowdaysagoorderitemssales = $towdaysagoorderitems->sum('totalprice');

        /** Three Days Ago Orders */
        $threedaysago = date("Y-m-d", strtotime( '-5 days' ) );
		$threedaysagoorders = Order::whereDate('created_at', '>', $threedaysago )->get();
        $threedaysagoorderitems = OrderItems::whereDate('created_at', $threedaysago )->get();
        $sumthreedaysagoordersonly = Order::whereDate('created_at',  '=', $threedaysago )->get();
		$sumthreedaysagoorderssales = $threedaysagoorders->sum('totalprice');
		$sumthreedaysagoorderitemssales = $threedaysagoorderitems->sum('totalprice');




        /** Tow Days Ago Only */

        $towdaysagoordersonly = $sumtowdaysagoordersonly->sum('totalprice');

        /** Three Days Ago Only */

        $threedaysagoordersonly = $sumthreedaysagoordersonly->sum('totalprice');

        /** This Day Sales */

        $thisdaysales = $thisdayorders->sum('totalprice');

        /** The Past Day Sales */

        $thepastdaysales = $onedayagoorders->sum('totalprice');

        /** The Past Tow Days Sales */

        $thepasttowdayssales = $towdaysagoorders->sum('totalprice');

        /** The Past Three Days Sales */

        $thepastthreedayssales = $threedaysagoorders->sum('totalprice');
        //dump(number_format($threedaysagoordersonly));
        $uptotowdaysorders = 


        /** Ahmed Sulaimani's Controller START */
        $ahmedsulaimani = User::select()->where('idnumber', '=', '5303')->first();
        $processedbyahmedsulaimani = Order::where('created_at', '>=', $date)->where('processedby', '=', $ahmedsulaimani->idnumber)->where('status', '=', 'Completed')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $todaysahmedsulaimaniprocessedorders = Order::where('created_at', '>=', $date)
                                                    ->where('processedby', '=', $ahmedsulaimani->idnumber)
                                                    ->where('status', '=', 'Completed')
                                                    ->orderBy('created_at', 'asc')
                                                    ->get();
        
        $allordersprocessedbyahmedsulaimani = Order::select()->where('processedby', '=', $ahmedsulaimani->idnumber)->where('status', '=', 'Completed')->whereNotNull('ponumber')->groupBy('slug')->orderBy('created_at', 'asc')->get();


        /** Sum Today's Total Ahmed Sulaimani's Processed Orders
         *  --i -> Items, --q -> Qty, --f -> free, --d -> discount */

        $sumttaspo = $todaysahmedsulaimaniprocessedorders->count();
        //dump($sumttaspo);
        $sumttaspoi = $todaysahmedsulaimaniprocessedorders->sum('totalitems');
        //dump($sumttaspoi);
        $sumttaspoq = $todaysahmedsulaimaniprocessedorders->sum('totalqty');
        //dump($sumttaspoq);
        $sumttaspof = $todaysahmedsulaimaniprocessedorders->sum('totalfree');
        //dump($sumttaspof);
        $sumttaspod = $todaysahmedsulaimaniprocessedorders->sum('discount');
        //dump($sumttaspod);        
        $sumttaspop = $todaysahmedsulaimaniprocessedorders->sum('totalprice');
        
        /** Sum Of Ahmed Sulaimani's All Processed Orders 
        *  --i -> Items, --q -> Qty, --f -> free, --d -> discount */
        $sumoasapo = $allordersprocessedbyahmedsulaimani->count();
        $sumoasapoi = $allordersprocessedbyahmedsulaimani->sum('totalitems');
        $sumoasapoq = $allordersprocessedbyahmedsulaimani->sum('totalqty');
        $sumoasapof = $allordersprocessedbyahmedsulaimani->sum('totalfree');
        $sumoasapod = $allordersprocessedbyahmedsulaimani->sum('discount');
        $sumoasapop = $allordersprocessedbyahmedsulaimani->sum('totalprice');

        $sumallprocessedordersbyahmedsulaimani = 
        //dump($sumoasapo);
        //dump($sumttaspop);

        /** GET Averages */

        $avragepersecond = 
        $avrageperminute = 
        $avrageperhour = 
        $avrageperday = 
        $avragepermonth = 
        $avrageperyear = 

        /** Ahmed Sulaimani's Controller END */


                /** Makki's Controller START */
                $makki = User::select()->where('idnumber', '=', '1255')->first();
                $processedbymakki = Order::where('created_at', '>=', $date)->where('processedby', '=', $makki->idnumber)->where('status', '=', 'Completed')->orderBy('created_at', 'asc')->groupBy('slug')->get();
                $todaysmakkiprocessedorders = Order::where('created_at', '>=', $date)
                                                            ->where('processedby', '=', $makki->idnumber)
                                                            ->where('status', '=', 'Completed')
                                                            ->orderBy('created_at', 'asc')
                                                            ->get();

                $allordersprocessedbymakki = Order::select()->where('processedby', '=', $makki->idnumber)->where('status', '=', 'Completed')->orderBy('created_at', 'asc')->groupBy('slug')->get();
                                                            
                $sumttaspo = $todaysmakkiprocessedorders->count();
                //dump($sumttaspo);
                $sumttaspoi = $todaysmakkiprocessedorders->sum('totalitems');
                //dump($sumttaspoi);
                $sumttaspoq = $todaysmakkiprocessedorders->sum('totalqty');
                //dump($sumttaspoq);
                $sumttaspof = $todaysmakkiprocessedorders->sum('totalfree');
                //dump($sumttaspof);
                $sumttaspod = $todaysmakkiprocessedorders->sum('discount');
                //dump($sumttaspod);        
                $sumttaspop = $todaysmakkiprocessedorders->sum('totalprice');
                //dump($sumttaspop);
                /** Sum Of Makki's All Processed Orders 
                *  --i -> Items, --q -> Qty, --f -> free, --d -> discount */
                $sumomapo = $allordersprocessedbymakki->count();
                $sumomapoi = $allordersprocessedbymakki->sum('totalitems');
                $sumomapoq = $allordersprocessedbymakki->sum('totalqty');
                $sumomapof = $allordersprocessedbymakki->sum('totalfree');
                $sumomapod = $allordersprocessedbymakki->sum('discount');
                $sumomapop = $allordersprocessedbymakki->sum('totalprice');
        /** Makki's Controller END */






        $hasanrabah = User::select()->where('idnumber', '=', '9090')->first();
 
        $ahmedsulaimanitpo = Order::where('processedby', '=', $ahmedsulaimani->idnumber)->where('status', '=', 'Completed')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $firas = User::select()->where('email', '=', 'foz@sunbulahgroup.com')->first();
        $hazim = User::select()->where('email', '=', 'hhz@sunbulahgroup.com')->first();
        $awaden = User::select()->where('email', '=', 'mwd@sunbulahgroup.com')->first();
        

        $michael = User::select()->where('idnumber', '=', '1275')->first();
        $countmichaelorders = Order::where('staffid', '=', $michael->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $countmichaelfp = OrderItems::where('staffid', '=', $michael->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
        $abdullahnaser = User::select()->where('idnumber', '=', '2409')->first();
        $countabdullahnaserorders = Order::where('staffid', '=', $abdullahnaser->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $countabdullahnaserfp = OrderItems::where('staffid', '=', $abdullahnaser->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
        $mohammedsayed = User::select()->where('idnumber', '=', '5275')->first();
        $countmohammedsayedorders = Order::where('staffid', '=', $mohammedsayed->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $fahaddahasy = User::select()->where('idnumber', '=', '2745')->first();
        $countfahaddahasyorders = Order::where('staffid', '=', $fahaddahasy->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $countfahaddahasyfp = OrderItems::where('staffid', '=', $fahaddahasy->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
        $hassanfathi = User::select()->where('idnumber', '=', '4401')->first();
        $counthassanfathiorders = Order::where('staffid', '=', $hassanfathi->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $counthassanfathifp = OrderItems::where('staffid', '=', $hassanfathi->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
        $samsudin = User::select()->where('idnumber', '=', '1171')->first();
        $countsamsudinorders = Order::where('staffid', '=', $samsudin->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $countsamsudinfp = OrderItems::where('staffid', '=', $samsudin->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
        $ahmedmedhat = User::select()->where('idnumber', '=', '4688')->first();
        $countahmedmedhatorders = Order::where('staffid', '=', $ahmedmedhat->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $countahmedmedhatfp = OrderItems::where('staffid', '=', $ahmedmedhat->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
        $hashem = User::select()->where('idnumber', '=', '3761')->first();
        $counthashemorders = Order::where('staffid', '=', $hashem->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $counthashemfp = OrderItems::where('staffid', '=', $hashem->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
        $wail = User::select()->where('idnumber', '=', '2469')->first();
        $countwailorders = Order::where('staffid', '=', $wail->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $countwailfp = OrderItems::where('staffid', '=', $wail->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
        $noufal = User::select()->where('idnumber', '=', '2076')->first();
        $countnoufalorders = Order::where('staffid', '=', $noufal->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $countnoufalfp = OrderItems::where('staffid', '=', $noufal->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
        $ruben = User::select()->where('idnumber', '=', '1555')->first();
        $countrubenorders = Order::where('staffid', '=', $ruben->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $countrubenfp = OrderItems::where('staffid', '=', $ruben->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
        $osama = User::select()->where('idnumber', '=', '1141')->first();
        $countosamaorders = Order::where('staffid', '=', $osama->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $countosamafp = OrderItems::where('staffid', '=', $osama->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
        
        $ahmedshawqy = User::select()->where('idnumber', '=', '1869')->first();
        $countahmedshawqyorders = Order::where('staffid', '=', $ahmedshawqy->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $countahmedshawqyfp = OrderItems::where('staffid', '=', $ahmedshawqy->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
        $sultansalman = User::select()->where('idnumber', '=', '1621')->first();
        $countsultansalmanorders = Order::where('staffid', '=', $sultansalman->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $countsultansalmanfp = OrderItems::where('staffid', '=', $sultansalman->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
        $medhathassan = User::select()->where('idnumber', '=', '4417')->first();
        $countmedhathassanorders = Order::where('staffid', '=', $medhathassan->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $countmedhathassanfp = OrderItems::where('staffid', '=', $medhathassan->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
        $order = Order::where('slug', '=', $slug)->first();
        $id = User::where('idnumber', '=', $idnumber)->first();
        //dump($order);               
        //dump($michael->idnumber);               
        //dump($id);               
        $currentuser = \Auth::user();
        $orderitems = Order::all();
        // ** MAIN DUMP ** //
        //dump($orderitems);               
        // ** MAIN DUMP ** //         
        $items = Item::all();
        $branches = Branch::all();
        //$orders = Order::all()->where('ordernumber', '=', $ordernumber)->first();
        $jcorders = Order::select()->where('status', '=', 'JustCreated')->orderBy('updated_at', 'asc')->get();
        $editingorders = Order::select()->where('status', '=', 'Editing')->orderBy('updated_at', 'asc')->get();
        $processingorders = OrderItems::select()->where('orderstatus', '=', 'Processing')->orderBy('updated_at', 'asc')->get();
        //$completedorders = Order::select()->where('status', '=', 'Completed')->orderBy('updated_at', 'asc')->get();
        $reviewingorders = Order::select()->where('status', '=', 'Reviewing')->orderBy('updated_at', 'asc')->get();
        $orderitems = OrderItems::all();
        $processedorders = Order::where('status', '=', 'Submitted')->orderBy('updated_at', 'asc')->get();
        $ordernumber = Order::where('status', '=', 'Submitted')->get();
        $stafforders = OrderItems::select()->where('orderstatus', '=', 'Submitted')->whereNotNull('ponumber')->groupBy('staffid')->get();
        $submittedorders = Order::select()->where('status', '=', 'Submitted')->whereNotNull('ponumber')->orderBy('updated_at', 'asc')->groupBy('slug')->get();
        $orders = OrderItems::select()->orderBy('updated_at', 'asc')->get();
        $stafforderitems = OrderItems::select()->where('orderstatus', '=', 'Submitted')->whereNotNull('itemprice')->orderBy('updated_at', 'asc')->groupBy('staffid')->get();
        $completedorders = Order::select()->where('status', '=', 'Completed')->whereNotNull('ponumber')->groupBy('slug')->orderBy('updated_at', 'asc')->get();
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
        $bystaffidsubmittedorders = $thisdayorders
        ->where('status', '=', 'Submitted')->groupBy('staffid');
        
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
		$towdaysago = date("Y-m-d", strtotime( '-2 days' ) );
		$towdaysagoorders = Order::whereDate('created_at', $towdaysago )->get();
		/* This Month Sales*/
		$thismonth = date("Y-m-d", strtotime( '0 days' ) );
        $thismonthorders = Order::whereDate('created_at', $thismonth )->get();
        $sumthismonthorders = $thismonthorders->sum('totalprice');






            

            /** QASSIM TREE */

            /** Suneer */
            $suneer = User::select()->where('idnumber', '=', '466')->first();
            $countsuneerorders = Order::where('staffid', '=', $suneer->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
            $countsuneerfp = OrderItems::where('staffid', '=', $suneer->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();

            /** Fahad Hussein -> fahadhussein */
            $fahadhussein = User::select()->where('idnumber', '=', '2508')->first();
            $countfahadhusseinorders = Order::where('staffid', '=', $fahadhussein->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
            $countfahadhusseinfp = OrderItems::where('staffid', '=', $fahadhussein->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();

            /** Sultan Salman */
            $sultansalman = User::select()->where('idnumber', '=', '1621')->first();
            $countsultansalmanorders = Order::where('staffid', '=', $sultansalman->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
            $countsultansalmanfp = OrderItems::where('staffid', '=', $sultansalman->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();

            /** Medhat */
            $medhat = User::select()->where('idnumber', '=', '4241')->first();
            $countmedhatorders = Order::where('staffid', '=', $medhat->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
            $countmedhatfp = OrderItems::where('staffid', '=', $medhat->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();

        /** QASSIM TEAM STATS START */
        $qassimteamorderitems = OrderItems::where('staffid', '=', $suneer->idnumber)
        ->orWhere('staffid', '=', $fahadhussein->idnumber)
        ->orWhere('staffid', '=', $sultansalman->idnumber)
        ->orWhere('staffid', '=', $medhat->idnumber)
        ->get();

        $qassimteamorders = Order::where('staffid', '=', $suneer->idnumber)
                ->orWhere('staffid', '=', $fahadhussein->idnumber)
                ->orWhere('staffid', '=', $sultansalman->idnumber)
                ->orWhere('staffid', '=', $medhat->idnumber)
                ->get();

        $qassimteam = User::where('idnumber', '=', $suneer->idnumber)
                ->orWhere('idnumber', '=', $fahadhussein->idnumber)
                ->orWhere('idnumber', '=', $sultansalman->idnumber)
                ->orWhere('idnumber', '=', $medhat->idnumber)
                ->get();
        $sumallqassimteamorders = $qassimteamorders->count();
        $countallqassimteamorderitems = $qassimteamorders->sum('askedprice');
        /** Get Orders of Firas Team This Day */
        /** qtto = Qassim Team Today's Orders 
        *  qtyo = Qassim Team Yesterday's Orders 
        *  --i -> Items, --q -> Qty, --f -> free, --d -> discount */
        $qtto = $qassimteamorders->where('created_at',  '>=', $thisday );
        $countqtto = $qtto->count();
        $sumqttoi = $qtto->sum('totalitems');
        $sumqttoq = $qtto->sum('totalqty');
        $sumqttof = $qtto->sum('totalfree');
        $sumqttod = $qtto->sum('discount');
        $sumqttop = $qtto->sum('totalprice');
        $onedayago = date("Y-m-d", strtotime( '-1 day' ) );
        $date = Carbon::yesterday();
        //dump($date);
        $yesterday = Carbon::today()->subDays(1);
        $qtyo = $qassimteamorders->where('created_at', '>=', $yesterday   )->where('created_at', '<', $thisday)  ;
        $countqtyo = $qtyo->count();
        $sumqtyoi = $qtyo->sum('totalitems');
        $sumqtyoq = $qtyo->sum('totalqty');
        $sumqtyof = $qtyo->sum('totalfree');
        $sumqtyod = $qtyo->sum('discount');
        $sumqtyop = $qtyo->sum('totalprice');
        $beforeyesterday = Carbon::yesterday()->subDays(1);
        $qtbyo = $qassimteamorders->where('created_at', '>', $beforeyesterday   )->where('created_at', '<', $yesterday   );
        $countqtbyo = $qtbyo->count();
        $sumqtbyoi = $qtbyo->sum('totalitems');
        $sumqtbyoq = $qtbyo->sum('totalqty');
        $sumqtbyof = $qtbyo->sum('totalfree');
        $sumqtbyod = $qtbyo->sum('discount');
        $sumqtbyop = $qtbyo->sum('totalprice');
        $beforethreedays = Carbon::yesterday()->subDays(2);
        $thisyear = Carbon::today()->subDays(365);
        $qtbtdo = $qassimteamorders->where('created_at', '>', $beforethreedays   )->where('created_at', '<', $beforeyesterday   );
        $countqtbtdo = $qtbtdo->count();
        $sumqtbtdoi = $qtbtdo->sum('totalitems');
        $sumqtbtdoq = $qtbtdo->sum('totalqty');
        $sumqtbtdof = $qtbtdo->sum('totalfree');
        $sumqtbtdod = $qtbtdo->sum('discount');
        $sumqtbtdop = $qtbtdo->sum('totalprice');
        $qtao = $qassimteamorders->where('created_at', '>=', $thisyear);
        $countqtao = $qtao->count();
        $sumqtaoi = $qtao->sum('totalitems');
        $sumqtaoq = $qtao->sum('totalqty');
        $sumqtaof = $qtao->sum('totalfree');
        $sumqtaod = $qtao->sum('discount');
        $sumqtaop = $qtao->sum('totalprice');

        /** QASSIM TEAM STATS END */

        /** QAAIM END */





		/* All Orders*/
		$date1 = \Carbon\Carbon::today()->subDays();
		//$allorders = Order::where('created_at', '>=', $today)->get();
		//$sumallorders = $allorders->sum('totalprice');
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

        $todaysorders = Order::whereDate('created_at', $yesterday )->where('staffid', '=', $idnumber)->where('status', '=', 'Submitted' )->get();
        /** SUM By Status */

        $sumsubmittedorders = $submittedorders->sum('totalprice');
        $sumcompletedorders = $completedorders->sum('totalprice');
        $sumallorders = $sumcompletedorders + $sumsubmittedorders;
        //dump($michael);

        return view('root.orders.all')
                ->withOrder($order)
                ->withId($id)
                ->with('hasanrabah', $hasanrabah)
                ->with('ahmedsulaimani', $ahmedsulaimani)
                ->with('processedbyahmedsulaimani', $processedbyahmedsulaimani)
                ->with('todaysahmedsulaimaniprocessedorders', $todaysahmedsulaimaniprocessedorders)
                ->with('sumoasapo', $sumoasapo)
                ->with('sumoasapoi', $sumoasapoi)
                ->with('sumoasapoq', $sumoasapoq)
                ->with('sumoasapof', $sumoasapof)
                ->with('sumoasapod', $sumoasapod)
                ->with('sumoasapop', $sumoasapop)
                                
                
                ->with('makki', $makki)
                ->with('processedbymakki', $processedbymakki)
                ->with('todaysmakkiprocessedorders', $todaysmakkiprocessedorders)
                ->with('sumomapo', $sumomapo)
                ->with('sumomapoi', $sumomapoi)
                ->with('sumomapoq', $sumomapo)
                ->with('sumomapof', $sumomapof)
                ->with('sumomapod', $sumomapod)
                ->with('sumomapop', $sumomapop)

                ->with('firas', $firas)
                ->with('hazim', $hazim)
                ->with('awaden', $awaden)
                
                ->with('michael', $michael)
                ->with('countmichaelorders', $countmichaelorders)
                ->with('countmichaelfp', $countmichaelfp) 
                               
                ->with('abdullahnaser', $abdullahnaser)
                ->with('countabdullahnaserorders', $countabdullahnaserorders)
                ->with('mohammedsayed', $mohammedsayed)
                ->with('countmohammedsayedorders', $countmohammedsayedorders)
                ->with('fahaddahasy', $fahaddahasy)
                ->with('countfahaddahasyorders', $countfahaddahasyorders)
                ->with('hassanfathi', $hassanfathi)
                ->with('counthassanfathiorders', $counthassanfathiorders)
                
                ->with('samsudin', $samsudin)
                ->with('countsamsudinorders', $countsamsudinorders)
                ->with('ahmedmedhat', $ahmedmedhat)
                ->with('countahmedmedhatorders', $countahmedmedhatorders)

                ->with('hashem', $hashem)
                ->with('counthashemorders', $counthashemorders)
                


                ->with('wail', $wail)

                ->with('suneer', $suneer)
                ->with('countsuneerorders', $countsuneerorders)
                
                ->with('fahadhussein', $fahadhussein)
                ->with('countfahadhusseinorders', $countfahadhusseinorders)
                
                ->with('sultansalman', $sultansalman)
                ->with('countsultansalmanorders', $countsultansalmanorders)
                
                ->with('medhat', $medhat)
                ->with('countmedhatorders', $countmedhatorders)
                
                ->with('qtto', $qtto)
                ->with('countqtto', $countqtto)
                ->with('sumqttoi', $sumqttoi)
                ->with('sumqttoq', $sumqttoq)
                ->with('sumqttof', $sumqttof)
                ->with('sumqttod', $sumqttod)
                ->with('sumqttop', $sumqttop)
                ->with('qtyo', $qtyo)
                ->with('countqtyo', $countqtyo)
                ->with('sumqtyoi', $sumqtyoi)
                ->with('sumqtyoq', $sumqtyoq)
                ->with('sumqtyof', $sumqtyof)
                ->with('sumqtyod', $sumqtyod)
                ->with('sumqtyop', $sumqtyop)
                ->with('qtbyo', $qtbyo)
                ->with('countqtbyo', $countqtbyo)
                ->with('sumqtbyoi', $sumqtbyoi)
                ->with('sumqtbyoq', $sumqtbyoq)
                ->with('sumqtbyof', $sumqtbyof)
                ->with('sumqtbyod', $sumqtbyod)
                ->with('sumqtbyop', $sumqtbyop)
                ->with('qtbtdo', $qtbtdo)
                ->with('countqtbtdo', $countqtbtdo)
                ->with('sumqtbtdoi', $sumqtbtdoi)
                ->with('sumqtbtdoq', $sumqtbtdoq)
                ->with('sumqtbtdof', $sumqtbtdof)
                ->with('sumqtbtdod', $sumqtbtdod)
                ->with('sumqtbtdop', $sumqtbtdop)
                ->with('qtao', $qtao)
                ->with('countqtao', $countqtao)
                ->with('sumqtaoi', $sumqtaoi)
                ->with('sumqtaoq', $sumqtaoq)
                ->with('sumqtaof', $sumqtaof)
                ->with('sumqtaod', $sumqtaod)
                ->with('sumqtaop', $sumqtaop)


                ->with('countwailorders', $countwailorders)


                ->with('noufal', $noufal)
                ->with('countnoufalorders', $countnoufalorders)
                
                ->with('ruben', $ruben)
                ->with('countrubenorders', $countrubenorders)
                ->with('ahmedshawqy', $ahmedshawqy)
                ->with('countahmedshawqyorders', $countahmedshawqyorders)
                ->with('medhathassan', $medhathassan)
                ->with('countmedhathassanorders', $countmedhathassanorders)
                ->with('sultansalman', $sultansalman)
                ->with('countsultansalmanorders', $countsultansalmanorders)
                ->with('osama', $osama)
                ->with('countosamaorders', $countosamaorders)
                
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
				->with('todayscompletedorders', $todayscompletedorders)
				->with('bystaffidsubmittedorders', $bystaffidsubmittedorders);
    }







    public function getStats(Order $slug, User $idnumber)
    {

        $today = date("Y-m-d", strtotime( '0 days' ) );	
        $todaysorders = Order::select()->whereDate('created_at', $today )->where('staffid', '=', $idnumber)->where('status', '=', 'Submitted' )->get();
        $todaysorderitems = OrderItems::whereDate('created_at', $today )->where('orderstatus', '=', 'Submitted' )->get();
        $header =  OrderItems::whereDate('created_at', $today )->where('orderstatus', '=', 'Submitted' )->whereNotNull('ordernumber')->orderBy('ponumber', 'asc');
        $body = OrderItems::whereDate('created_at', $today )->where('orderstatus', '=', 'Submitted' )->whereNull('ordernumber')->orderBy('ponumber', 'asc')->get();


        $today = date("Y-m-d", strtotime( '0 days' ) );	
        $todaysorders = Order::whereDate('created_at', $today )->get();
		$sumtodaysales = $todaysorders->sum('totalprice');
		/* Yesterdays Orders
		$yesterday = date("Y-m-d", strtotime( '-1 days' ) );
		$yesterdaysorders = Order::whereDate('created_at', $yesterday )->get();
		$sumyesterdaysales = $yesterdaysorders->sum('totalprice');
*/
        $date = \Carbon\Carbon::today()->subDays(0);
        $thisdayorders = Order::where('created_at', '>=', $date)->where('status', '=', 'Completed')->orderBy('created_at', 'asc')->groupBy('staffid')->get();
        $todayscompletedorders = $thisdayorders
        ->where('status', '=', 'Completed');
        
        /** This Day Orders */
        $thisday = date("Y-m-d", strtotime( '0 days' ) );
        $thisdayorders = Order::whereDate('created_at',  '>=', $thisday )->get();
        $thisdayorderitems = OrderItems::whereDate('created_at', $thisday )->get();
        $sumthisdayorderssales = $thisdayorders->sum('totalprice');
        $sumthisdayorderitemssales = $thisdayorderitems->sum('totalprice');
        
        /** One Day Ago Orders */
        $onedayago = date("Y-m-d", strtotime( '-1 days' ) );
        $onedayagoorders = Order::whereDate('created_at',  '>', $onedayago )->get();
        $onedayagoorderitems = OrderItems::whereDate('created_at', $onedayago )->get();
        $sumonedayagoorderssales = $onedayagoorders->sum('totalprice');
        $sumonedayagoorderitemssales = $onedayagoorderitems->sum('totalprice');
        
        /** Tow Days Ago Orders */
        $towdaysago = date("Y-m-d", strtotime( '-2 days' ) );
		$towdaysagoorders = Order::whereDate('created_at',  '>', $towdaysago )->get();
        $towdaysagoorderitems = OrderItems::whereDate('created_at', $towdaysago )->get();
        $sumtowdaysagoordersonly = Order::whereDate('created_at',  '=', $towdaysago )->get();
		$sumtowdaysagoorderssales = $towdaysagoorders->sum('totalprice');
		$sumtowdaysagoorderitemssales = $towdaysagoorderitems->sum('totalprice');

        /** Three Days Ago Orders */
        $threedaysago = date("Y-m-d", strtotime( '-5 days' ) );
		$threedaysagoorders = Order::whereDate('created_at', '>', $threedaysago )->get();
        $threedaysagoorderitems = OrderItems::whereDate('created_at', $threedaysago )->get();
        $sumthreedaysagoordersonly = Order::whereDate('created_at',  '=', $threedaysago )->get();
		$sumthreedaysagoorderssales = $threedaysagoorders->sum('totalprice');
		$sumthreedaysagoorderitemssales = $threedaysagoorderitems->sum('totalprice');




        /** Tow Days Ago Only */

        $towdaysagoordersonly = $sumtowdaysagoordersonly->sum('totalprice');

        /** Three Days Ago Only */

        $threedaysagoordersonly = $sumthreedaysagoordersonly->sum('totalprice');

        /** This Day Sales */

        $thisdaysales = $thisdayorders->sum('totalprice');

        /** The Past Day Sales */

        $thepastdaysales = $onedayagoorders->sum('totalprice');

        /** The Past Tow Days Sales */

        $thepasttowdayssales = $towdaysagoorders->sum('totalprice');

        /** The Past Three Days Sales */

        $thepastthreedayssales = $threedaysagoorders->sum('totalprice');
        //dump(number_format($threedaysagoordersonly));
        $uptotowdaysorders = 


        /** Ahmed Sulaimani's Controller START */
        $ahmedsulaimani = User::select()->where('idnumber', '=', '5303')->first();
        $processedbyahmedsulaimani = Order::where('created_at', '>=', $date)->where('processedby', '=', $ahmedsulaimani->idnumber)->where('status', '=', 'Completed')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $todaysahmedsulaimaniprocessedorders = Order::where('created_at', '>=', $date)
                                                    ->where('processedby', '=', $ahmedsulaimani->idnumber)
                                                    ->where('status', '=', 'Completed')
                                                    ->orderBy('created_at', 'asc')
                                                    ->get();
        
        $allordersprocessedbyahmedsulaimani = Order::select()->where('processedby', '=', $ahmedsulaimani->idnumber)->where('status', '=', 'Completed')->whereNotNull('ponumber')->groupBy('slug')->orderBy('created_at', 'asc')->get();


        /** Sum Today's Total Ahmed Sulaimani's Processed Orders
         *  --i -> Items, --q -> Qty, --f -> free, --d -> discount */

        $sumttaspo = $todaysahmedsulaimaniprocessedorders->count();
        //dump($sumttaspo);
        $sumttaspoi = $todaysahmedsulaimaniprocessedorders->sum('totalitems');
        //dump($sumttaspoi);
        $sumttaspoq = $todaysahmedsulaimaniprocessedorders->sum('totalqty');
        //dump($sumttaspoq);
        $sumttaspof = $todaysahmedsulaimaniprocessedorders->sum('totalfree');
        //dump($sumttaspof);
        $sumttaspod = $todaysahmedsulaimaniprocessedorders->sum('discount');
        //dump($sumttaspod);        
        $sumttaspop = $todaysahmedsulaimaniprocessedorders->sum('totalprice');
        
        /** Sum Of Ahmed Sulaimani's All Processed Orders 
        *  --i -> Items, --q -> Qty, --f -> free, --d -> discount */
        $sumoasapo = $allordersprocessedbyahmedsulaimani->count();
        $sumoasapoi = $allordersprocessedbyahmedsulaimani->sum('totalitems');
        $sumoasapoq = $allordersprocessedbyahmedsulaimani->sum('totalqty');
        $sumoasapof = $allordersprocessedbyahmedsulaimani->sum('totalfree');
        $sumoasapod = $allordersprocessedbyahmedsulaimani->sum('discount');
        $sumoasapop = $allordersprocessedbyahmedsulaimani->sum('totalprice');

        $sumallprocessedordersbyahmedsulaimani = 
        //dump($sumoasapo);
        //dump($sumttaspop);

        /** GET Averages */

        $avragepersecond = 
        $avrageperminute = 
        $avrageperhour = 
        $avrageperday = 
        $avragepermonth = 
        $avrageperyear = 

        /** Ahmed Sulaimani's Controller END */


                /** Makki's Controller START */
                $makki = User::select()->where('idnumber', '=', '1255')->first();
                $processedbymakki = Order::where('created_at', '>=', $date)->where('processedby', '=', $makki->idnumber)->where('status', '=', 'Completed')->orderBy('created_at', 'asc')->groupBy('slug')->get();
                $todaysmakkiprocessedorders = Order::where('created_at', '>=', $date)
                                                            ->where('processedby', '=', $makki->idnumber)
                                                            ->where('status', '=', 'Completed')
                                                            ->orderBy('created_at', 'asc')
                                                            ->get();

                $allordersprocessedbymakki = Order::select()->where('processedby', '=', $makki->idnumber)->where('status', '=', 'Completed')->orderBy('created_at', 'asc')->groupBy('slug')->get();
                                                            
                $sumttaspo = $todaysmakkiprocessedorders->count();
                //dump($sumttaspo);
                $sumttaspoi = $todaysmakkiprocessedorders->sum('totalitems');
                //dump($sumttaspoi);
                $sumttaspoq = $todaysmakkiprocessedorders->sum('totalqty');
                //dump($sumttaspoq);
                $sumttaspof = $todaysmakkiprocessedorders->sum('totalfree');
                //dump($sumttaspof);
                $sumttaspod = $todaysmakkiprocessedorders->sum('discount');
                //dump($sumttaspod);        
                $sumttaspop = $todaysmakkiprocessedorders->sum('totalprice');
                //dump($sumttaspop);
                /** Sum Of Makki's All Processed Orders 
                *  --i -> Items, --q -> Qty, --f -> free, --d -> discount */
                $sumomapo = $allordersprocessedbymakki->count();
                $sumomapoi = $allordersprocessedbymakki->sum('totalitems');
                $sumomapoq = $allordersprocessedbymakki->sum('totalqty');
                $sumomapof = $allordersprocessedbymakki->sum('totalfree');
                $sumomapod = $allordersprocessedbymakki->sum('discount');
                $sumomapop = $allordersprocessedbymakki->sum('totalprice');
        /** Makki's Controller END */



        $hasanrabah = User::select()->where('idnumber', '=', '9090')->first();
 
        $ahmedsulaimanitpo = Order::where('processedby', '=', $ahmedsulaimani->idnumber)->where('status', '=', 'Completed')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $firas = User::select()->where('email', '=', 'foz@sunbulahgroup.com')->first();
        $hazim = User::select()->where('email', '=', 'hhz@sunbulahgroup.com')->first();
        $awaden = User::select()->where('email', '=', 'mwd@sunbulahgroup.com')->first();
        












                /** This Day Orders */
                $thisday = date("Y-m-d", strtotime( '0 days' ) );
                $thisdayorders = Order::whereDate('created_at',  '>=', $thisday )->get();
                $thisdayorderitems = OrderItems::whereDate('created_at', $thisday )->get();
                $sumthisdayorderssales = $thisdayorders->sum('totalprice');
                $sumthisdayorderitemssales = $thisdayorderitems->sum('totalprice');
                
                /** One Day Ago Orders */
                $onedayago = date("Y-m-d", strtotime( '-1 day' ) );
                $onedayagoorders = Order::whereDate('created_at',  '>', $onedayago )->get();
                $onedayagoorderitems = OrderItems::whereDate('created_at', $onedayago )->get();
                $sumonedayagoorderssales = $onedayagoorders->sum('totalprice');
                $sumonedayagoorderitemssales = $onedayagoorderitems->sum('totalprice');
                
                /** Tow Days Ago Orders */
                $towdaysago = date("Y-m-d", strtotime( '-2 days' ) );
                $towdaysagoorders = Order::whereDate('created_at',  '>', $towdaysago )->get();
                $towdaysagoorderitems = OrderItems::whereDate('created_at', $towdaysago )->get();
                $sumtowdaysagoordersonly = Order::whereDate('created_at',  '=', $towdaysago )->get();
                $sumtowdaysagoorderssales = $towdaysagoorders->sum('totalprice');
                $sumtowdaysagoorderitemssales = $towdaysagoorderitems->sum('totalprice');
        
                /** Three Days Ago Orders */
                $threedaysago = date("Y-m-d", strtotime( '-5 days' ) );
                $threedaysagoorders = Order::whereDate('created_at', '>', $threedaysago )->get();
                $threedaysagoorderitems = OrderItems::whereDate('created_at', $threedaysago )->get();
                $sumthreedaysagoordersonly = Order::whereDate('created_at',  '=', $threedaysago )->get();
                $sumthreedaysagoorderssales = $threedaysagoorders->sum('totalprice');
                $sumthreedaysagoorderitemssales = $threedaysagoorderitems->sum('totalprice');
           
        /** FIRAS TEAM STATS START */
        
        $michael = User::select()->where('idnumber', '=', '1275')->first();
        $countmichaelorders = Order::where('staffid', '=', $michael->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $countmichaelfp = OrderItems::where('staffid', '=', $michael->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
        $abdullahnaser = User::select()->where('idnumber', '=', '2409')->first();
        $countabdullahnaserorders = Order::where('staffid', '=', $abdullahnaser->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $countabdullahnaserfp = OrderItems::where('staffid', '=', $abdullahnaser->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
        $mohammedsayed = User::select()->where('idnumber', '=', '5275')->first();
        $countmohammedsayedorders = Order::where('staffid', '=', $mohammedsayed->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $ahmedmedhat = User::select()->where('idnumber', '=', '4688')->first();
        $countahmedmedhatorders = Order::where('staffid', '=', $ahmedmedhat->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $countahmedmedhatfp = OrderItems::where('staffid', '=', $ahmedmedhat->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
        $fahaddahasy = User::select()->where('idnumber', '=', '2745')->first();
        $countfahaddahasyorders = Order::where('staffid', '=', $fahaddahasy->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $countfahaddahasyfp = OrderItems::where('staffid', '=', $fahaddahasy->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
        $wail = User::select()->where('idnumber', '=', '2469')->first();
        $countwailorders = Order::where('staffid', '=', $wail->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $countwailfp = OrderItems::where('staffid', '=', $wail->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
        $firasteamorderitems = OrderItems::where('staffid', '=', $michael->idnumber)
                                                ->orWhere('staffid', '=', $abdullahnaser->idnumber)
                                                ->orWhere('staffid', '=', $mohammedsayed->idnumber)
                                                ->orWhere('staffid', '=', $ahmedmedhat->idnumber)
                                                ->orWhere('staffid', '=', $fahaddahasy->idnumber)
                                                ->orWhere('staffid', '=', $wail->idnumber)->get();
        
        $firasteamorders = Order::where('staffid', '=', $michael->idnumber)
                                                ->orWhere('staffid', '=', $abdullahnaser->idnumber)
                                                ->orWhere('staffid', '=', $mohammedsayed->idnumber)
                                                ->orWhere('staffid', '=', $ahmedmedhat->idnumber)
                                                ->orWhere('staffid', '=', $fahaddahasy->idnumber)
                                                ->orWhere('staffid', '=', $wail->idnumber)->get();

        $firasteam = User::where('idnumber', '=', $michael->idnumber)
                                                ->orWhere('idnumber', '=', $abdullahnaser->idnumber)
                                                ->orWhere('idnumber', '=', $mohammedsayed->idnumber)
                                                ->orWhere('idnumber', '=', $ahmedmedhat->idnumber)
                                                ->orWhere('idnumber', '=', $fahaddahasy->idnumber)
                                                ->orWhere('idnumber', '=', $wail->idnumber)->get();
        $sumallfirasteamorders = $firasteamorders->count();
        $countallfirasteamorderitems = $firasteamorders->sum('askedprice');
        /** Get Orders of Firas Team This Day */
        /** ftto = Firas Team Today's Orders 
         *  ftyo = Firas Team Yesterday's Orders 
         *  --i -> Items, --q -> Qty, --f -> free, --d -> discount */
        $ftto = $firasteamorders->where('created_at',  '>=', $thisday );
        $countftto = $ftto->count();
        $sumfttoi = $ftto->sum('totalitems');
        $sumfttoq = $ftto->sum('totalqty');
        $sumfttof = $ftto->sum('totalfree');
        $sumfttod = $ftto->sum('discount');
        $sumfttop = $ftto->sum('totalprice');
        $onedayago = date("Y-m-d", strtotime( '-1 day' ) );
        $yesterday = Carbon::today()->subDays(1);
        //dump($date);
        $ftyo = $firasteamorders->where('created_at', '>=', $yesterday   )->where('created_at', '<', $thisday   );
        $countftyo = $ftyo->count();
        $sumftyoi = $ftyo->sum('totalitems');
        $sumftyoq = $ftyo->sum('totalqty');
        $sumftyof = $ftyo->sum('totalfree');
        $sumftyod = $ftyo->sum('discount');
        $sumftyop = $ftyo->sum('totalprice');
        $beforeyesterday = Carbon::yesterday()->subDays(1);
        $ftbyo = $firasteamorders->where('created_at', '>', $beforeyesterday   )->where('created_at', '<', $yesterday   );
        $countftbyo = $ftbyo->count();
        $sumftbyoi = $ftbyo->sum('totalitems');
        $sumftbyoq = $ftbyo->sum('totalqty');
        $sumftbyof = $ftbyo->sum('totalfree');
        $sumftbyod = $ftbyo->sum('discount');
        $sumftbyop = $ftbyo->sum('totalprice');
        $beforethreedays = Carbon::yesterday()->subDays(2);
        $thismonth = Carbon::today()->subDays(30);
        $ftbtdo = $firasteamorders->where('created_at', '>', $beforethreedays   )->where('created_at', '<', $beforeyesterday   );
        $countftbtdo = $ftbtdo->count();
        $sumftbtdoi = $ftbtdo->sum('totalitems');
        $sumftbtdoq = $ftbtdo->sum('totalqty');
        $sumftbtdof = $ftbtdo->sum('totalfree');
        $sumftbtdod = $ftbtdo->sum('discount');
        $sumftbtdop = $ftbtdo->sum('totalprice');
        $ftao = $firasteamorders->where('created_at', '>=', $thismonth);
        $countftao = $ftao->count();
        $sumftaoi = $ftao->sum('totalitems');
        $sumftaoq = $ftao->sum('totalqty');
        $sumftaof = $ftao->sum('totalfree');
        $sumftaod = $ftao->sum('discount');
        $sumftaop = $ftao->sum('totalprice');
        
        /** FIRAS TEAM STATS END */
        
        
        
        /** HAZIM TEAM STATS START */
        
        $noufal = User::select()->where('idnumber', '=', '2076')->first();
        $countnoufalorders = Order::where('staffid', '=', $noufal->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $countnoufalfp = OrderItems::where('staffid', '=', $noufal->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
        $ruben = User::select()->where('idnumber', '=', '1555')->first();
        $countrubenorders = Order::where('staffid', '=', $ruben->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $countrubenfp = OrderItems::where('staffid', '=', $ruben->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
        $osama = User::select()->where('idnumber', '=', '1141')->first();
        $countosamaorders = Order::where('staffid', '=', $osama->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $countosamafp = OrderItems::where('staffid', '=', $osama->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
        $samsudin = User::select()->where('idnumber', '=', '1171')->first();
        $countsamsudinorders = Order::where('staffid', '=', $samsudin->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $countsamsudinfp = OrderItems::where('staffid', '=', $samsudin->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();

                $hazimteamorderitems = OrderItems::where('staffid', '=', $noufal->idnumber)
                                                ->orWhere('staffid', '=', $ruben->idnumber)
                                                ->orWhere('staffid', '=', $osama->idnumber)
                                                ->orWhere('staffid', '=', $samsudin->idnumber)
                                                ->get();
                
                $hazimteamorders = Order::where('staffid', '=', $noufal->idnumber)
                                                ->orWhere('staffid', '=', $ruben->idnumber)
                                                ->orWhere('staffid', '=', $osama->idnumber)
                                                ->orWhere('staffid', '=', $samsudin->idnumber)
                                                ->get();
        
                $hazimteam = User::where('idnumber', '=', $noufal->idnumber)
                                                ->orWhere('idnumber', '=', $ruben->idnumber)
                                                ->orWhere('idnumber', '=', $osama->idnumber)
                                                ->orWhere('idnumber', '=', $samsudin->idnumber)
                                                ->get();
                $sumallhazimteamorders = $hazimteamorders->count();
                $countallhazimteamorderitems = $hazimteamorders->sum('askedprice');
                /** Get Orders of Firas Team This Day */
                /** htto = Hazim Team Today's Orders 
                 *  htyo = Hazim Team Yesterday's Orders 
                 *  --i -> Items, --q -> Qty, --f -> free, --d -> discount */
                $htto = $hazimteamorders->where('created_at',  '>=', $thisday );
                $counthtto = $htto->count();
                $sumhttoi = $htto->sum('totalitems');
                $sumhttoq = $htto->sum('totalqty');
                $sumhttof = $htto->sum('totalfree');
                $sumhttod = $htto->sum('discount');
                $sumhttop = $htto->sum('totalprice');
                $onedayago = date("Y-m-d", strtotime( '-1 day' ) );
                $yesterday = Carbon::today()->subDays(1);
                //dump($date);
                $htyo = $hazimteamorders->where('created_at', '>=', $yesterday   )->where('created_at', '<', $thisday   );
                $counthtyo = $htyo->count();
                $sumhtyoi = $htyo->sum('totalitems');
                $sumhtyoq = $htyo->sum('totalqty');
                $sumhtyof = $htyo->sum('totalfree');
                $sumhtyod = $htyo->sum('discount');
                $sumhtyop = $htyo->sum('totalprice');
                $beforeyesterday = Carbon::yesterday()->subDays(1);
                $htbyo = $hazimteamorders->where('created_at', '>', $beforeyesterday   )->where('created_at', '<', $yesterday   );
                $counthtbyo = $htbyo->count();
                $sumhtbyoi = $htbyo->sum('totalitems');
                $sumhtbyoq = $htbyo->sum('totalqty');
                $sumhtbyof = $htbyo->sum('totalfree');
                $sumhtbyod = $htbyo->sum('discount');
                $sumhtbyop = $htbyo->sum('totalprice');
                $beforethreedays = Carbon::yesterday()->subDays(2);
                $thisyear = Carbon::today()->subDays(365);
                $htbtdo = $hazimteamorders->where('created_at', '>', $beforethreedays   )->where('created_at', '<', $beforeyesterday   );
                $counthtbtdo = $htbtdo->count();
                $sumhtbtdoi = $htbtdo->sum('totalitems');
                $sumhtbtdoq = $htbtdo->sum('totalqty');
                $sumhtbtdof = $htbtdo->sum('totalfree');
                $sumhtbtdod = $htbtdo->sum('discount');
                $sumhtbtdop = $htbtdo->sum('totalprice');
                $htao = $hazimteamorders->where('created_at', '>=', $thisyear);
                $counthtao = $htao->count();
                $sumhtaoi = $htao->sum('totalitems');
                $sumhtaoq = $htao->sum('totalqty');
                $sumhtaof = $htao->sum('totalfree');
                $sumhtaod = $htao->sum('discount');
                $sumhtaop = $htao->sum('totalprice');
                
                /** HAZIM TEAM STATS END */
                
        /** AWADEN TEAM STATS START */
        
        $ahmedshawqy = User::select()->where('idnumber', '=', '1869')->first();
        $countahmedshawqyorders = Order::where('staffid', '=', $ahmedshawqy->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $countahmedshawqyfp = OrderItems::where('staffid', '=', $ahmedshawqy->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
        $hassanfathi = User::select()->where('idnumber', '=', '4401')->first();
        $counthassanfathiorders = Order::where('staffid', '=', $hassanfathi->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $counthassanfathifp = OrderItems::where('staffid', '=', $hassanfathi->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
        $hashem = User::select()->where('idnumber', '=', '3761')->first();
        $counthashemorders = Order::where('staffid', '=', $hashem->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $counthashemfp = OrderItems::where('staffid', '=', $hashem->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
        $medhathassan = User::select()->where('idnumber', '=', '4417')->first();
        $countmedhathassanorders = Order::where('staffid', '=', $medhathassan->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $countmedhathassanfp = OrderItems::where('staffid', '=', $medhathassan->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();


                $awadenteamorderitems = OrderItems::where('staffid', '=', $ahmedshawqy->idnumber)
                                                ->orWhere('staffid', '=', $hassanfathi->idnumber)
                                                ->orWhere('staffid', '=', $hashem->idnumber)
                                                ->orWhere('staffid', '=', $medhathassan->idnumber)
                                                ->get();
                
                $awadenteamorders = Order::where('staffid', '=', $ahmedshawqy->idnumber)
                                                ->orWhere('staffid', '=', $hassanfathi->idnumber)
                                                ->orWhere('staffid', '=', $hashem->idnumber)
                                                ->orWhere('staffid', '=', $medhathassan->idnumber)
                                                ->get();
        
                $awadenteam = User::where('idnumber', '=', $ahmedshawqy->idnumber)
                                                ->orWhere('idnumber', '=', $hassanfathi->idnumber)
                                                ->orWhere('idnumber', '=', $hashem->idnumber)
                                                ->orWhere('idnumber', '=', $medhathassan->idnumber)
                                                ->get();
                $sumallawadenteamorders = $awadenteamorders->count();
                $countallawadenteamorderitems = $awadenteamorders->sum('askedprice');
                /** Get Orders of Firas Team This Day */
                /** atto = AWADEN Team Today's Orders 
                 *  atyo = AWADEN Team Yesterday's Orders 
                 *  --i -> Items, --q -> Qty, --f -> free, --d -> discount */
                $atto = $awadenteamorders->where('created_at',  '>=', $thisday );
                $countatto = $atto->count();
                $sumattoi = $atto->sum('totalitems');
                $sumattoq = $atto->sum('totalqty');
                $sumattof = $atto->sum('totalfree');
                $sumattod = $atto->sum('discount');
                $sumattop = $atto->sum('totalprice');
                $onedayago = date("Y-m-d", strtotime( '-1 day' ) );
                $date = Carbon::yesterday();
                //dump($date);
                $yesterday = Carbon::today()->subDays(1);
                $atyo = $awadenteamorders->where('created_at', '>=', $yesterday   )->where('created_at', '<', $thisday)  ;
                $countatyo = $atyo->count();
                $sumatyoi = $atyo->sum('totalitems');
                $sumatyoq = $atyo->sum('totalqty');
                $sumatyof = $atyo->sum('totalfree');
                $sumatyod = $atyo->sum('discount');
                $sumatyop = $atyo->sum('totalprice');
                $beforeyesterday = Carbon::yesterday()->subDays(1);
                $atbyo = $awadenteamorders->where('created_at', '>', $beforeyesterday   )->where('created_at', '<', $yesterday   );
                $countatbyo = $atbyo->count();
                $sumatbyoi = $atbyo->sum('totalitems');
                $sumatbyoq = $atbyo->sum('totalqty');
                $sumatbyof = $atbyo->sum('totalfree');
                $sumatbyod = $atbyo->sum('discount');
                $sumatbyop = $atbyo->sum('totalprice');
                $beforethreedays = Carbon::yesterday()->subDays(2);
                $thisyear = Carbon::today()->subDays(365);
                $atbtdo = $awadenteamorders->where('created_at', '>', $beforethreedays   )->where('created_at', '<', $beforeyesterday   );
                $countatbtdo = $atbtdo->count();
                $sumatbtdoi = $atbtdo->sum('totalitems');
                $sumatbtdoq = $atbtdo->sum('totalqty');
                $sumatbtdof = $atbtdo->sum('totalfree');
                $sumatbtdod = $atbtdo->sum('discount');
                $sumatbtdop = $atbtdo->sum('totalprice');
                $atao = $awadenteamorders->where('created_at', '>=', $thisyear);
                $countatao = $atao->count();
                $sumataoi = $atao->sum('totalitems');
                $sumataoq = $atao->sum('totalqty');
                $sumataof = $atao->sum('totalfree');
                $sumataod = $atao->sum('discount');
                $sumataop = $atao->sum('totalprice');
                
                /** AWADEN TEAM STATS END */



        //dump($ftbyo);


        /** QASSIM TREE */

        /** Suneer */
        $suneer = User::select()->where('idnumber', '=', '466')->first();
        $countsuneerorders = Order::where('staffid', '=', $suneer->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $countsuneerfp = OrderItems::where('staffid', '=', $suneer->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();

        /** Fahad Hussein -> fahadhussein */
        $fahadhussein = User::select()->where('idnumber', '=', '1621')->first();
        $countfahadhusseinorders = Order::where('staffid', '=', $fahadhussein->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $countfahadhusseinfp = OrderItems::where('staffid', '=', $fahadhussein->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();

        /** Sultan Salman */
        $sultansalman = User::select()->where('idnumber', '=', '1621')->first();
        $countsultansalmanorders = Order::where('staffid', '=', $sultansalman->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $countsultansalmanfp = OrderItems::where('staffid', '=', $sultansalman->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();

        /** Medhat */
        $medhat = User::select()->where('idnumber', '=', '1621')->first();
        $countmedhatorders = Order::where('staffid', '=', $medhat->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $countmedhatfp = OrderItems::where('staffid', '=', $medhat->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();

        /** QASSIM TEAM STATS START */
        $qassimteamorderitems = OrderItems::where('staffid', '=', $ahmedshawqy->idnumber)
        ->orWhere('staffid', '=', $hassanfathi->idnumber)
        ->orWhere('staffid', '=', $hashem->idnumber)
        ->orWhere('staffid', '=', $medhathassan->idnumber)
        ->get();

        $qassimteamorders = Order::where('staffid', '=', $ahmedshawqy->idnumber)
                ->orWhere('staffid', '=', $hassanfathi->idnumber)
                ->orWhere('staffid', '=', $hashem->idnumber)
                ->orWhere('staffid', '=', $medhathassan->idnumber)
                ->get();

        $qassimteam = User::where('idnumber', '=', $ahmedshawqy->idnumber)
                ->orWhere('idnumber', '=', $hassanfathi->idnumber)
                ->orWhere('idnumber', '=', $hashem->idnumber)
                ->orWhere('idnumber', '=', $medhathassan->idnumber)
                ->get();
        $sumallqassimteamorders = $qassimteamorders->count();
        $countallqassimteamorderitems = $qassimteamorders->sum('askedprice');
        /** Get Orders of Firas Team This Day */
        /** qtto = Qassim Team Today's Orders 
        *  qtyo = Qassim Team Yesterday's Orders 
        *  --i -> Items, --q -> Qty, --f -> free, --d -> discount */
        $qtto = $qassimteamorders->where('created_at',  '>=', $thisday );
        $countqtto = $qtto->count();
        $sumqttoi = $qtto->sum('totalitems');
        $sumqttoq = $qtto->sum('totalqty');
        $sumqttof = $qtto->sum('totalfree');
        $sumqttod = $qtto->sum('discount');
        $sumqttop = $qtto->sum('totalprice');
        $onedayago = date("Y-m-d", strtotime( '-1 day' ) );
        $date = Carbon::yesterday();
        //dump($date);
        $yesterday = Carbon::today()->subDays(1);
        $qtyo = $qassimteamorders->where('created_at', '>=', $yesterday   )->where('created_at', '<', $thisday)  ;
        $countqtyo = $qtyo->count();
        $sumqtyoi = $qtyo->sum('totalitems');
        $sumqtyoq = $qtyo->sum('totalqty');
        $sumqtyof = $qtyo->sum('totalfree');
        $sumqtyod = $qtyo->sum('discount');
        $sumqtyop = $qtyo->sum('totalprice');
        $beforeyesterday = Carbon::yesterday()->subDays(1);
        $qtbyo = $qassimteamorders->where('created_at', '>', $beforeyesterday   )->where('created_at', '<', $yesterday   );
        $countqtbyo = $qtbyo->count();
        $sumqtbyoi = $qtbyo->sum('totalitems');
        $sumqtbyoq = $qtbyo->sum('totalqty');
        $sumqtbyof = $qtbyo->sum('totalfree');
        $sumqtbyod = $qtbyo->sum('discount');
        $sumqtbyop = $qtbyo->sum('totalprice');
        $beforethreedays = Carbon::yesterday()->subDays(2);
        $thisyear = Carbon::today()->subDays(365);
        $qtbtdo = $qassimteamorders->where('created_at', '>', $beforethreedays   )->where('created_at', '<', $beforeyesterday   );
        $countqtbtdo = $qtbtdo->count();
        $sumqtbtdoi = $qtbtdo->sum('totalitems');
        $sumqtbtdoq = $qtbtdo->sum('totalqty');
        $sumqtbtdof = $qtbtdo->sum('totalfree');
        $sumqtbtdod = $qtbtdo->sum('discount');
        $sumqtbtdop = $qtbtdo->sum('totalprice');
        $qtao = $qassimteamorders->where('created_at', '>=', $thisyear);
        $countqtao = $qtao->count();
        $sumqtaoi = $qtao->sum('totalitems');
        $sumqtaoq = $qtao->sum('totalqty');
        $sumqtaof = $qtao->sum('totalfree');
        $sumqtaod = $qtao->sum('discount');
        $sumqtaop = $qtao->sum('totalprice');

        /** QASSIM TEAM STATS END */

        /** QAAIM END */





        $order = Order::where('slug', '=', $slug)->first();
        $id = User::where('idnumber', '=', $idnumber)->first();
        //dump($order);               
        //dump($michael->idnumber);               
        //dump($id);               
        $currentuser = \Auth::user();
        $orderitems = Order::all();
        // ** MAIN DUMP ** //
        //dump($orderitems);               
        // ** MAIN DUMP ** //         
        $items = Item::all();
        $branches = Branch::all();
        //$orders = Order::all()->where('ordernumber', '=', $ordernumber)->first();
        $jcorders = Order::select()->where('status', '=', 'JustCreated')->orderBy('updated_at', 'asc')->get();
        $editingorders = Order::select()->where('status', '=', 'Editing')->orderBy('updated_at', 'asc')->get();
        $processingorders = OrderItems::select()->where('orderstatus', '=', 'Processing')->orderBy('updated_at', 'asc')->get();
        //$completedorders = Order::select()->where('status', '=', 'Completed')->orderBy('updated_at', 'asc')->get();
        $reviewingorders = Order::select()->where('status', '=', 'Reviewing')->orderBy('updated_at', 'asc')->get();
        $orderitems = OrderItems::all();
        $processedorders = Order::where('status', '=', 'Submitted')->orderBy('updated_at', 'asc')->get();
        $ordernumber = Order::where('status', '=', 'Submitted')->get();
        $stafforders = OrderItems::select()->where('orderstatus', '=', 'Submitted')->whereNotNull('ponumber')->groupBy('staffid')->get();
        $submittedorders = Order::select()->where('status', '=', 'Submitted')->whereNotNull('ponumber')->orderBy('updated_at', 'asc')->groupBy('slug')->get();
        $orders = OrderItems::select()->orderBy('updated_at', 'asc')->get();
        $stafforderitems = OrderItems::select()->where('orderstatus', '=', 'Submitted')->whereNotNull('itemprice')->orderBy('updated_at', 'asc')->groupBy('staffid')->get();
        $completedorders = Order::select()->where('status', '=', 'Completed')->whereNotNull('ponumber')->groupBy('slug')->orderBy('updated_at', 'asc')->get();
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
        $bystaffidsubmittedorders = $thisdayorders
        ->where('status', '=', 'Submitted')->groupBy('staffid');
        
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
		$towdaysago = date("Y-m-d", strtotime( '-2 days' ) );
		$towdaysagoorders = Order::whereDate('created_at', $towdaysago )->get();
		/* This Month Sales*/
		$thismonth = date("Y-m-d", strtotime( '0 days' ) );
        $thismonthorders = Order::whereDate('created_at', $thismonth )->get();
        $sumthismonthorders = $thismonthorders->sum('totalprice');
		/* All Orders*/
		$date1 = \Carbon\Carbon::today()->subDays();
		//$allorders = Order::where('created_at', '>=', $today)->get();
		//$sumallorders = $allorders->sum('totalprice');
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

        $todaysorders = Order::whereDate('created_at', $yesterday )->where('staffid', '=', $idnumber)->where('status', '=', 'Submitted' )->get();
        /** SUM By Status */

        $sumsubmittedorders = $submittedorders->sum('totalprice');
        $sumcompletedorders = $completedorders->sum('totalprice');
        $sumallorders = $sumcompletedorders + $sumsubmittedorders;
        //dump($michael);

        $april1 = "2019-04-01";
        $april30 = "2019-04-30";
        $getallaprilorders = Order::where('created_at', '>', $april1   )->where('created_at', '<', $april30)->get();
        $countaapro = $getallaprilorders->count();
        $sumaaproi = $getallaprilorders->sum('totalitems');
        $sumaaproq = $getallaprilorders->sum('totalqty');
        $sumaaprof = $getallaprilorders->sum('totalfree');
        $sumaaprod = $getallaprilorders->sum('discount');
        $sumaaprop = $getallaprilorders->sum('totalprice');
        $may1 = "2019-05-01";
        $may31 = "2019-05-31";
        $getallmayorders = Order::where('created_at', '>', $may1   )->where('created_at', '<', $may31);
        $countamo = $getallmayorders->count();
        $sumamoi = $getallmayorders->sum('totalitems');
        $sumamoq = $getallmayorders->sum('totalqty');
        $sumamof = $getallmayorders->sum('totalfree');
        $sumamod = $getallmayorders->sum('discount');
        $sumamop = $getallmayorders->sum('totalprice');
        $june1 = "2019-06-01";
        $june31 = "2019-06-30";
        $getalljuneorders = Order::where('created_at', '>', $june1   )->where('created_at', '<', $june31);
        $countajuneo = $getalljuneorders->count();
        $sumajuneoi = $getalljuneorders->sum('totalitems');
        $sumajuneoq = $getalljuneorders->sum('totalqty');
        $sumajuneof = $getalljuneorders->sum('totalfree');
        $sumajuneod = $getalljuneorders->sum('discount');
        $sumajuneop = $getalljuneorders->sum('totalprice');
        //dump($sumajuneop);
        return view('root.stats.totals')
                ->withOrder($order)
                ->withId($id)

                ->with('countaapro', $countaapro)
                ->with('sumaaproi', $sumaaproi)
                ->with('sumaaproq', $sumaaproq)
                ->with('sumaaprof', $sumaaprof)
                ->with('sumaaprod', $sumaaprod)
                ->with('sumaaprop', $sumaaprop)
                ->with('countamo', $countamo)
                ->with('sumamoi', $sumamoi)
                ->with('sumamoq', $sumamoq)
                ->with('sumamof', $sumamof)
                ->with('sumamod', $sumamod)
                ->with('sumamop', $sumamop)

                ->with('countajuneo', $countajuneo)
                ->with('sumajuneoi', $sumajuneoi)
                ->with('sumajuneoq', $sumajuneoq)
                ->with('sumajuneof', $sumajuneof)
                ->with('sumajuneod', $sumajuneod)
                ->with('sumajuneop', $sumajuneop)
                
                ->with('hasanrabah', $hasanrabah)
                ->with('ahmedsulaimani', $ahmedsulaimani)
                ->with('processedbyahmedsulaimani', $processedbyahmedsulaimani)
                ->with('todaysahmedsulaimaniprocessedorders', $todaysahmedsulaimaniprocessedorders)
                ->with('sumoasapo', $sumoasapo)
                ->with('sumoasapoi', $sumoasapoi)
                ->with('sumoasapoq', $sumoasapoq)
                ->with('sumoasapof', $sumoasapof)
                ->with('sumoasapod', $sumoasapod)
                ->with('sumoasapop', $sumoasapop)
                                
                
                ->with('makki', $makki)
                ->with('processedbymakki', $processedbymakki)
                ->with('todaysmakkiprocessedorders', $todaysmakkiprocessedorders)
                ->with('sumomapo', $sumomapo)
                ->with('sumomapoi', $sumomapoi)
                ->with('sumomapoq', $sumomapo)
                ->with('sumomapof', $sumomapof)
                ->with('sumomapod', $sumomapod)
                ->with('sumomapop', $sumomapop)

                ->with('firas', $firas)
                ->with('ftto', $ftto)
                ->with('countftto', $countftto)
                ->with('sumfttoi', $sumfttoi)
                ->with('sumfttoq', $sumfttoq)
                ->with('sumfttof', $sumfttof)
                ->with('sumfttod', $sumfttod)
                ->with('sumfttop', $sumfttop)
                ->with('ftyo', $ftyo)
                ->with('countftyo', $countftyo)
                ->with('sumftyoi', $sumftyoi)
                ->with('sumftyoq', $sumftyoq)
                ->with('sumftyof', $sumftyof)
                ->with('sumftyod', $sumftyod)
                ->with('sumftyop', $sumftyop)
                ->with('ftbyo', $ftbyo)
                ->with('countftbyo', $countftbyo)
                ->with('sumftbyoi', $sumftbyoi)
                ->with('sumftbyoq', $sumftbyoq)
                ->with('sumftbyof', $sumftbyof)
                ->with('sumftbyod', $sumftbyod)
                ->with('sumftbyop', $sumftbyop)
                ->with('ftbtdo', $ftbtdo)
                ->with('countftbtdo', $countftbtdo)
                ->with('sumftbtdoi', $sumftbtdoi)
                ->with('sumftbtdoq', $sumftbtdoq)
                ->with('sumftbtdof', $sumftbtdof)
                ->with('sumftbtdod', $sumftbtdod)
                ->with('sumftbtdop', $sumftbtdop)
                ->with('ftao', $ftao)
                ->with('countftao', $countftao)
                ->with('sumftaoi', $sumftaoi)
                ->with('sumftaoq', $sumftaoq)
                ->with('sumftaof', $sumftaof)
                ->with('sumftaod', $sumftaod)
                ->with('sumftaop', $sumftaop)
                


                

                ->with('hazim', $hazim)
                ->with('htto', $htto)
                ->with('counthtto', $counthtto)
                ->with('sumhttoi', $sumhttoi)
                ->with('sumhttoq', $sumhttoq)
                ->with('sumhttof', $sumhttof)
                ->with('sumhttod', $sumhttod)
                ->with('sumhttop', $sumhttop)
                ->with('htyo', $htyo)
                ->with('counthtyo', $counthtyo)
                ->with('sumhtyoi', $sumhtyoi)
                ->with('sumhtyoq', $sumhtyoq)
                ->with('sumhtyof', $sumhtyof)
                ->with('sumhtyod', $sumhtyod)
                ->with('sumhtyop', $sumhtyop)
                ->with('htbyo', $htbyo)
                ->with('counthtbyo', $counthtbyo)
                ->with('sumhtbyoi', $sumhtbyoi)
                ->with('sumhtbyoq', $sumhtbyoq)
                ->with('sumhtbyof', $sumhtbyof)
                ->with('sumhtbyod', $sumhtbyod)
                ->with('sumhtbyop', $sumhtbyop)
                ->with('htbtdo', $htbtdo)
                ->with('counthtbtdo', $counthtbtdo)
                ->with('sumhtbtdoi', $sumhtbtdoi)
                ->with('sumhtbtdoq', $sumhtbtdoq)
                ->with('sumhtbtdof', $sumhtbtdof)
                ->with('sumhtbtdod', $sumhtbtdod)
                ->with('sumhtbtdop', $sumhtbtdop)
                ->with('htao', $htao)
                ->with('counthtao', $counthtao)
                ->with('sumhtaoi', $sumhtaoi)
                ->with('sumhtaoq', $sumhtaoq)
                ->with('sumhtaof', $sumhtaof)
                ->with('sumhtaod', $sumhtaod)
                ->with('sumhtaop', $sumhtaop)
                

                ->with('awaden', $awaden)
                ->with('atto', $atto)
                ->with('countatto', $countatto)
                ->with('sumattoi', $sumattoi)
                ->with('sumattoq', $sumattoq)
                ->with('sumattof', $sumattof)
                ->with('sumattod', $sumattod)
                ->with('sumattop', $sumattop)
                ->with('atyo', $atyo)
                ->with('countatyo', $countatyo)
                ->with('sumatyoi', $sumatyoi)
                ->with('sumatyoq', $sumatyoq)
                ->with('sumatyof', $sumatyof)
                ->with('sumatyod', $sumatyod)
                ->with('sumatyop', $sumatyop)
                ->with('atbyo', $atbyo)
                ->with('countatbyo', $countatbyo)
                ->with('sumatbyoi', $sumatbyoi)
                ->with('sumatbyoq', $sumatbyoq)
                ->with('sumatbyof', $sumatbyof)
                ->with('sumatbyod', $sumatbyod)
                ->with('sumatbyop', $sumatbyop)
                ->with('atbtdo', $atbtdo)
                ->with('countatbtdo', $countatbtdo)
                ->with('sumatbtdoi', $sumatbtdoi)
                ->with('sumatbtdoq', $sumatbtdoq)
                ->with('sumatbtdof', $sumatbtdof)
                ->with('sumatbtdod', $sumatbtdod)
                ->with('sumatbtdop', $sumatbtdop)
                ->with('atao', $atao)
                ->with('countatao', $countatao)
                ->with('sumataoi', $sumataoi)
                ->with('sumataoq', $sumataoq)
                ->with('sumataof', $sumataof)
                ->with('sumataod', $sumataod)
                ->with('sumataop', $sumataop)
                
                ->with('wail', $wail)

                ->with('suneer', $suneer)
                ->with('countsuneerorders', $countsuneerorders)
                
                ->with('fahadhussein', $fahadhussein)
                ->with('countfahadhusseinorders', $countfahadhusseinorders)
                
                ->with('sultansalman', $sultansalman)
                ->with('countsultansalmanorders', $countsultansalmanorders)
                
                ->with('medhat', $medhat)
                ->with('countmedhatorders', $countmedhatorders)
                
                ->with('qtto', $qtto)
                ->with('countqtto', $countqtto)
                ->with('sumqttoi', $sumqttoi)
                ->with('sumqttoq', $sumqttoq)
                ->with('sumqttof', $sumqttof)
                ->with('sumqttod', $sumqttod)
                ->with('sumqttop', $sumqttop)
                ->with('qtyo', $qtyo)
                ->with('countqtyo', $countqtyo)
                ->with('sumqtyoi', $sumqtyoi)
                ->with('sumqtyoq', $sumqtyoq)
                ->with('sumqtyof', $sumqtyof)
                ->with('sumqtyod', $sumqtyod)
                ->with('sumqtyop', $sumqtyop)
                ->with('qtbyo', $qtbyo)
                ->with('countqtbyo', $countqtbyo)
                ->with('sumqtbyoi', $sumqtbyoi)
                ->with('sumqtbyoq', $sumqtbyoq)
                ->with('sumqtbyof', $sumqtbyof)
                ->with('sumqtbyod', $sumqtbyod)
                ->with('sumqtbyop', $sumqtbyop)
                ->with('qtbtdo', $qtbtdo)
                ->with('countqtbtdo', $countqtbtdo)
                ->with('sumqtbtdoi', $sumqtbtdoi)
                ->with('sumqtbtdoq', $sumqtbtdoq)
                ->with('sumqtbtdof', $sumqtbtdof)
                ->with('sumqtbtdod', $sumqtbtdod)
                ->with('sumqtbtdop', $sumqtbtdop)
                ->with('qtao', $qtao)
                ->with('countqtao', $countqtao)
                ->with('sumqtaoi', $sumqtaoi)
                ->with('sumqtaoq', $sumqtaoq)
                ->with('sumqtaof', $sumqtaof)
                ->with('sumqtaod', $sumqtaod)
                ->with('sumqtaop', $sumqtaop)


                ->with('countwailorders', $countwailorders)
                
                ->with('michael', $michael)
                ->with('countmichaelorders', $countmichaelorders)
                ->with('countmichaelfp', $countmichaelfp) 
                               
                ->with('abdullahnaser', $abdullahnaser)
                ->with('countabdullahnaserorders', $countabdullahnaserorders)
                ->with('mohammedsayed', $mohammedsayed)
                ->with('countmohammedsayedorders', $countmohammedsayedorders)
                ->with('fahaddahasy', $fahaddahasy)
                ->with('countfahaddahasyorders', $countfahaddahasyorders)
                ->with('hassanfathi', $hassanfathi)
                ->with('counthassanfathiorders', $counthassanfathiorders)
                
                ->with('samsudin', $samsudin)
                ->with('countsamsudinorders', $countsamsudinorders)
                ->with('ahmedmedhat', $ahmedmedhat)
                ->with('countahmedmedhatorders', $countahmedmedhatorders)

                ->with('hashem', $hashem)
                ->with('counthashemorders', $counthashemorders)
                
                ->with('noufal', $noufal)
                ->with('countnoufalorders', $countnoufalorders)
                
                ->with('ruben', $ruben)
                ->with('countrubenorders', $countrubenorders)
                ->with('ahmedshawqy', $ahmedshawqy)
                ->with('countahmedshawqyorders', $countahmedshawqyorders)
                ->with('medhathassan', $medhathassan)
                ->with('countmedhathassanorders', $countmedhathassanorders)
                ->with('osama', $osama)
                ->with('countosamaorders', $countosamaorders)
                
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
				->with('todayscompletedorders', $todayscompletedorders)
				->with('bystaffidsubmittedorders', $bystaffidsubmittedorders);
        
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
        $jcorders = Order::select()->where('slug', '=', $slug)->where('status', '=', 'JustCreated')->orderBy('created_at', 'asc')->paginate(7);
        $editingorders = Order::select()->where('status', '=', 'Editing')->orderBy('created_at', 'asc')->paginate(7);
        $processingorders = OrderItems::select()->where('orderstatus', '=', 'Processing')->orderBy('created_at', 'asc')->paginate(7);
        $completedorders = Order::select()->where('status', '=', 'Completed')->orderBy('created_at', 'asc')->paginate(7);
        $reviewingorders = Order::select()->where('status', '=', 'Reviewing')->orderBy('created_at', 'asc')->paginate(7);
        $orderitems = OrderItems::where('staffid', '=', $currentuser->idnumber)
        ->get();
        $processedorders = Order::where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->paginate(7);
        $ordernumber = Order::where('status', '=', 'Submitted')->get();
        $stafforders = OrderItems::select()->where('orderstatus', '=', 'Submitted')->whereNotNull('ponumber')->groupBy('staffid')->get();
        $submittedorders = Order::select()->where('status', '=', 'Submitted')->whereNotNull('ponumber')->groupBy('slug')->get();
        //dump($submittedorders);
        $orders = OrderItems::select()->where('staffid', '=', $currentuser->idnumber)->orderBy('created_at', 'asc')->paginate(7);
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
        //dump($id);      
        $currentuser = \Auth::user();
        $orderitems = Order::where('staffid', '=', $currentuser->idnumber)->first();
        // ** MAIN DUMP ** //
        //dump($orderitems);               
        // ** MAIN DUMP ** //
        $items = Item::all();
        $branches = Branch::all();
        //$orders = Order::all()->where('ordernumber', '=', $ordernumber)->first();
        $jcorders = Order::select()->where('status', '=', 'JustCreated')->orderBy('created_at', 'asc')->paginate(7);
        $editingorders = Order::select()->where('status', '=', 'Editing')->orderBy('created_at', 'asc')->paginate(7);
        $processingorders = OrderItems::select()->where('orderstatus', '=', 'Processing')->orderBy('created_at', 'asc')->paginate(7);
        $completedorders = Order::select()->where('status', '=', 'Completed')->orderBy('created_at', 'asc')->paginate(7);
        $reviewingorders = Order::select()->where('status', '=', 'Reviewing')->orderBy('created_at', 'asc')->paginate(7);
        $orderitems = OrderItems::where('staffid', '=', $currentuser->idnumber)
        ->get();
        $processedorders = Order::where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->paginate(7);
        $ordernumber = Order::where('status', '=', 'Submitted')->get();
        $stafforders = OrderItems::select()->where('orderstatus', '=', 'Submitted')->whereNotNull('ponumber')->groupBy('staffid')->get();
        $submittedorders = Order::select()->where('status', '=', 'Submitted')->whereNotNull('ponumber')->groupBy('slug')->get();
        $orders = OrderItems::select()->where('staffid', '=', $submittedorders)->orderBy('created_at', 'asc')->paginate(7);
        $stafforderitems = OrderItems::select()->where('orderstatus', '=', 'Submitted')->whereNotNull('itemprice')->groupBy('staffid')->get();
        $itemprice = $items;
        $root = Root::select()->get();
        //dump($root);
        //dump($currentuser);
        $profiles = OrderItems::where('orderstatus', '=', 'Submitted')->where('staffid', '=', $idnumber)->whereNotNull('itemnumber')->get();
        $header = Order::where('status', '=', 'Submitted')->get();
        //dump($slug);
        //dump($idnumber);
        //dump($stafforderitems);
        //dump($header);
        //dump($profiles);
        //http://ipool.remotewebaccess.com/root/orders/1869/00008351647-19012461%20f
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
    public function completeOrder(Request $request, $idnumber, $slug)
    {   
        $currentuser = \Auth::user();
        $allorders = Order::where('staffid', '=', $idnumber)->where('status', '=', 'Completed')->get();
        $sumallorders = $allorders->sum('totalprice');
        User::where('idnumber', '=', $idnumber)->update(['updated_at' => now(), 'totalgrand' => $sumallorders]);
        Order::where('slug', $slug)->update(['updated_at' => now(), 'status' => 'Completed', 'processedby' => \Auth::user()->idnumber]);
        OrderItems::where('slug', $slug)->update(['updated_at' => now(), 'orderstatus' => 'Completed']);
        
        $order = Order::where('slug', '=', $slug)->where('staffid', '=', $idnumber)->get();
        $reviewitems = OrderItems::select('itemnumber')->where('slug', '=', $slug)->get();
        /*Mail::send(url('/export-orders-csv' . '/'. Auth::user()->idnumber . '/completed'), function($message) {
                $message
                ->to('root@ipool.remotewebaccess.com')
                ->subject('Your order is completed');
            });*/


        /*Mail::send('orders.review',
        array(
            'ponumber' => $order->ponumber,
            'Customer' => $order->branchname,
            'Tot. Price' => $order->totalprice,
            'Completed@' => $order->updated_at
        ), function($message)
    {
        $message->from('root@ies.com');
        $message->to('root@ies.com')->subject('Order Completed');
    });*/
        return redirect()->route('root.orders.all', 'Order_Have_Been_Marked_As#completed')->with('success', 'Success! Order has beem marked as completed');
    }


    public function exportReport($idnumber)
    {
            $today = date("Y-m-d", strtotime( '0 days' ) );	
            $todaysorders = Order::whereDate('created_at', $today )->where('staffid', '=', $idnumber)->where('status', '=', 'Submitted' )->get();
            $todaysorderitems = OrderItems::whereDate('created_at', $today )->where('staffid', '=', $idnumber)->where('orderstatus', '=', 'Submitted' )->orderBy('ponumber', 'asc');
            $header =  OrderItems::whereDate('created_at', $today )->where('staffid', '=', $idnumber)->where('orderstatus', '=', 'Submitted' )->whereNotNull('ordernumber')->orderBy('ponumber', 'asc')->get();
            $body = OrderItems::whereDate('created_at', $today )->where('staffid', '=', $idnumber)->where('orderstatus', '=', 'Submitted' )->whereNull('ordernumber')->orderBy('ponumber', 'asc')->get();
            
        
            $mohammedsayed = User::select()->where('idnumber', '=', '5275')->first();
            $countmohammedsayedorders = OrderItems::where('staffid', '=', $mohammedsayed->idnumber)->where('orderstatus', '=', 'Submitted')->get();
            
        
            $sumalltodaysorders = $todaysorders->sum('totalprice');
            $filename = "orders-orderitems-today.csv";
            $handle = fopen($filename, 'w+');
            fputcsv($handle, array(
                'row identification', 
                'Distribution Channe',
                'PO#',
                ' ',
                'Customer#',
                'Item#',
                ' ',
                ' ',
                'Qty',
                'Free',
                'Asked Price',
            ));
        
            foreach($countmohammedsayedorders as $row) {
                fputcsv($handle,array(
                    'H',
                    '24',
                    $row['ponumber'],
                    ' ',
                    $row['branchnumber'],
        
                    
                    $row['itemnumber'],
                    ' ',
                    ' ',
                    $row['itemqty'],
                    $row['freeitem'],
                    $row['askedprice'],
            ));
            }
            fclose($handle);
            $headers = array(
                'Content-Type' => 'text/csv',
            );
        /*
            $currentuser = \Auth::user();
            $allorders = Order::where('staffid', '=', $currentuser->idnumber)->where('status', '=', 'Completed')->get();
            $sumallorders = $allorders->sum('totalprice');
            User::where('idnumber', '=', $mohammedsayed->idnumber)->update(['created_at' => now(), 'totalgrand' => $sumallorders]);
            Order::where('staffid', '=', $mohammedsayed->idnumber)->where('status', '=', 'Submitted')->update(['created_at' => now(), 'status' => 'Completed']);
            OrderItems::where('staffid', '=', $mohammedsayed->idnumber)->where('orderstatus', '=', 'Submitted')->update(['created_at' => now(), 'orderstatus' => 'Completed']);
        */
        
            return Response::download($filename,  $idnumber . '-submitted-' .date("Y-m-d") . '-orders+items.csv', $headers);
        
        
    }

    

    public function getTree()
    {
        $users = User::all();
        $links = Order::select()->where('status', '=', 'Completed')->orderBy('created_at', 'asc')->get();
        return view('root.tree')->with('links', $links)->with('users', $users);
    }    


    public function getReadMe()
    {
        $users = User::all();
        $links = Order::select()->where('status', '=', 'Completed')->orderBy('updated_at', 'asc')->get();

        return view('root.readme')->with('links', $links)->with('users', $users);
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
        return view('tests.mail');
    }    
}
