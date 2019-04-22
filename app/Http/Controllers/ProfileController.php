<?php 

namespace cdn\Http\Controllers;

use Auth;
use DB;
use cdn\User;
use cdn\Models\Branch;
use cdn\Models\Item;
use cdn\Models\Order;
use cdn\Models\OrderItems;
use Illuminate\Http\Request;
//2147483647
class ProfileController extends Controller
{
    public function getProfile($idnumber)
    {
		$currentuser = \Auth::user();
		$items = Item::select('itemnumber', 'itemname', 'itemprice', 'itemsku', 'plant', 'instock', 'link', 'type')->orderBy('created_at', 'desc')->paginate(2);
    $branches = Branch::select('branchname', 'branchnumber')->orderBy('updated_at', 'desc')->paginate(10);
		$orders = Order::select()->where('staffid', '=', $currentuser->idnumber)->orderBy('created_at', 'desc')->paginate(14);
		$orderscount = Order::select('ordernumber')->where('staffid', '=', $currentuser->idnumber)->get();
		$justcreatedorderscount = Order::select('status')->where('staffid', '=', $currentuser->idnumber)->where('status', '=', 'JustCreated');
		$editingorderscount = Order::select('status')->where('staffid', '=', $currentuser->idnumber)->where('status', '=', 'Editing');
		$reviewingorderscount = Order::select('status')->where('staffid', '=', $currentuser->idnumber)->where('status', '=', 'Reviewing');
		$submittedorderscount = Order::select('status')->where('staffid', '=', $currentuser->idnumber)->where('status', '=', 'Submitted');
		$completedorderscount = Order::select('status')->where('staffid', '=', $currentuser->idnumber)->where('status', '=', 'Completed');
		//$ordersbydate = Order::orderBy('created_at', 'ASC')->get();
		/* Todays Orders*/
		$date = \Carbon\Carbon::today()->subDays(0);
		$thisdayorders = Order::where('created_at', '>=', $date)->where('staffid', '=', $currentuser->idnumber)->orderBy('updated_at', 'asc')->get();
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
		$yesterdaysorders = Order::whereDate('created_at', $yesterday )->where('staffid', '=', $currentuser->idnumber)->get();
		$sumyesterdaysales = $yesterdaysorders->sum('totalprice');
		/* Two Days Ago Orders*/
		$twodaysago = date("Y-m-d", strtotime( '-2 days' ) );
		$twodaysagoorders = Order::whereDate('created_at', $twodaysago )->where('staffid', '=', $currentuser->idnumber)->get();
		/* All Orders*/
		dump($today);

		$allorders = Order::where('staffid', '=', $currentuser->idnumber)->get();
		$sumallorders = $allorders->sum('totalprice');
		//dump($today);
		//dump($thisdayorders);
		//dump($yesterdaysorders);
		//dump($sumyesterdaysales);
		//dump($twodaysagoorders);
		//dump($allorders);
		$id = User::where('idnumber', '=', $idnumber)->first();
		$orderitems = OrderItems::where('staffid', '=', $currentuser->idnumber)->get();
		$order = Order::where('staffid', '=', $currentuser->idnumber)->first();
		$idnumber = \Auth::user()->idnumber;
		//dump($idnumber);
		//dump($orderitems);
		dump([ 
			$currentuser->name => $idnumber,
			'Todays Total Sales' => number_format($sumthisdayorders) . '.00 SAR',
			'Yesterdays Total Sales' => number_format($sumyesterdaysales) . '.00 SAR',
			'Total Sales' => number_format($sumallorders) . '.00 SAR',
			'Account Created' => $currentuser->created_at->diffForHumans()
		]);
		$branches_list = DB::table('branches')
		->where('salesgroup', '=', $currentuser->idnumber)
		->get();
		return view('dashboard.index')
				->withOrder($order)
				->with('justcreatedorderscount', $justcreatedorderscount)
				->with('editingorderscount', $editingorderscount)
				->with('reviewingorderscount', $reviewingorderscount)
				->with('submittedorderscount', $submittedorderscount)
				->with('completedorderscount', $completedorderscount)
				->with('branches_list', $branches_list)
				->with('orderscount', $orderscount)
				->with('orderitems', $orderitems)
				->with('orders', $orders)
				->with('items', $items)
				->with('branches', $branches)
				->with('thisdayorders', $thisdayorders)
				->with('sumthisdayorders', $sumthisdayorders)
				->with('sumthisdayfreeorders', $sumthisdayfreeorders)
				->with('sumthisdayordersqty', $sumthisdayordersqty)
				->with('sumallorders', $sumallorders)
				->with('yesterdaysorders', $yesterdaysorders)
				->with('sumyesterdaysales', $sumyesterdaysales)
				->with('todaysjustcreatedorders', $todaysjustcreatedorders)
				->with('todayseditingorders', $todayseditingorders)
				->with('todaysreviewingorders', $todaysreviewingorders)
				->with('todayssubmittedorders', $todayssubmittedorders)
				->with('todayscompletedorders', $todayscompletedorders)
				->with('id', $id);
		
		}
		public function getManager($idnumber)
    {
			$currentuser = \Auth::user();
			$items = Item::select('itemnumber', 'itemname', 'itemprice', 'itemsku', 'plant', 'instock', 'link', 'type')->orderBy('created_at', 'desc')->paginate(2);
			$branches = Branch::select('branchname', 'branchnumber')->orderBy('updated_at', 'desc')->paginate(10);
			$orders = Order::select()->where('staffid', '=', $currentuser->idnumber)->orderBy('created_at', 'desc')->paginate(14);
			$orderscount = Order::select('ordernumber')->where('staffid', '=', $currentuser->idnumber)->get();
			$justcreatedorderscount = Order::select('status')->where('staffid', '=', $currentuser->idnumber)->where('status', '=', 'JustCreated');
			$editingorderscount = Order::select('status')->where('staffid', '=', $currentuser->idnumber)->where('status', '=', 'Editing');
			$reviewingorderscount = Order::select('status')->where('staffid', '=', $currentuser->idnumber)->where('status', '=', 'Reviewing');
			$submittedorderscount = Order::select('status')->where('staffid', '=', $currentuser->idnumber)->where('status', '=', 'Submitted');
			$completedorderscount = Order::select('status')->where('staffid', '=', $currentuser->idnumber)->where('status', '=', 'Completed');
			//$ordersbydate = Order::orderBy('created_at', 'ASC')->get();
			/* Todays Orders*/
			$date = \Carbon\Carbon::today()->subDays(0);
			$thisdayorders = Order::where('created_at', '>=', $date)->where('staffid', '=', $currentuser->idnumber)->orderBy('updated_at', 'asc')->get();
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
			$yesterdaysorders = Order::whereDate('created_at', $yesterday )->where('staffid', '=', $currentuser->idnumber)->get();
			$sumyesterdaysales = $yesterdaysorders->sum('totalprice');
			/* Two Days Ago Orders*/
			$twodaysago = date("Y-m-d", strtotime( '-2 days' ) );
			$twodaysagoorders = Order::whereDate('created_at', $twodaysago )->where('staffid', '=', $currentuser->idnumber)->get();
			/* All Orders*/
			dump($today);
	
			$allorders = Order::where('staffid', '=', $currentuser->idnumber)->get();
			$sumallorders = $allorders->sum('totalprice');

			$users = User::select()->orderBy('idnumber', 'asc')->get();
			$usersales = Order::where('staffid', '=', $users)->sum('totalprice');


			//dump($today);
			//dump($thisdayorders);
			//dump($yesterdaysorders);
			//dump($sumyesterdaysales);
			//dump($twodaysagoorders);
			//dump($allorders);
			$id = User::where('idnumber', '=', $idnumber)->first();
			$orderitems = OrderItems::where('staffid', '=', $currentuser->idnumber)->get();
			$order = Order::where('staffid', '=', $currentuser->idnumber)->first();
			$idnumber = \Auth::user()->idnumber;
			//dump($idnumber);
			//dump($orderitems);
			dump([ 
				$currentuser->name => $idnumber,
				'Todays Total Sales' => number_format($sumthisdayorders) . '.00 SAR',
				'Yesterdays Total Sales' => number_format($sumyesterdaysales) . '.00 SAR',
				'Total Sales' => number_format($sumallorders) . '.00 SAR',
				'Account Created' => $currentuser->created_at->diffForHumans()
			]);
			$branches_list = DB::table('branches')
			->where('salesgroup', '=', $currentuser->idnumber)
			->get();		

			
	
		return view ('dashboard.manager')
		->withOrder($order)
		->with('justcreatedorderscount', $justcreatedorderscount)
		->with('editingorderscount', $editingorderscount)
		->with('reviewingorderscount', $reviewingorderscount)
		->with('submittedorderscount', $submittedorderscount)
		->with('completedorderscount', $completedorderscount)
		->with('branches_list', $branches_list)
		->with('orderscount', $orderscount)
		->with('orderitems', $orderitems)
		->with('orders', $orders)
		->with('items', $items)
		->with('branches', $branches)
		->with('thisdayorders', $thisdayorders)
		->with('sumthisdayorders', $sumthisdayorders)
		->with('sumthisdayfreeorders', $sumthisdayfreeorders)
		->with('sumthisdayordersqty', $sumthisdayordersqty)
		->with('sumallorders', $sumallorders)
		->with('yesterdaysorders', $yesterdaysorders)
		->with('sumyesterdaysales', $sumyesterdaysales)
		->with('todaysjustcreatedorders', $todaysjustcreatedorders)
		->with('todayseditingorders', $todayseditingorders)
		->with('todaysreviewingorders', $todaysreviewingorders)
		->with('todayssubmittedorders', $todayssubmittedorders)
		->with('todayscompletedorders', $todayscompletedorders)
		->with('id', $id)
		->with('users', $users);
		}
		public function getAdmin($idnumber)
    {
			$currentuser = \Auth::user();
			$items = Item::select('itemnumber', 'itemname', 'itemprice', 'itemsku', 'plant', 'instock', 'link', 'type')->orderBy('created_at', 'desc')->paginate(2);
			$branches = Branch::select('branchname', 'branchnumber')->orderBy('updated_at', 'desc')->paginate(10);
			$orders = Order::select()->where('staffid', '=', $currentuser->idnumber)->orderBy('created_at', 'desc')->paginate(14);
			$orderscount = Order::select('ordernumber')->where('staffid', '=', $currentuser->idnumber)->get();
			$justcreatedorderscount = Order::select('status')->where('staffid', '=', $currentuser->idnumber)->where('status', '=', 'JustCreated');
			$editingorderscount = Order::select('status')->where('staffid', '=', $currentuser->idnumber)->where('status', '=', 'Editing');
			$reviewingorderscount = Order::select('status')->where('staffid', '=', $currentuser->idnumber)->where('status', '=', 'Reviewing');
			$submittedorderscount = Order::select('status')->where('staffid', '=', $currentuser->idnumber)->where('status', '=', 'Submitted');
			$completedorderscount = Order::select('status')->where('staffid', '=', $currentuser->idnumber)->where('status', '=', 'Completed');
			//$ordersbydate = Order::orderBy('created_at', 'ASC')->get();
			/* Todays Orders*/
			$date = \Carbon\Carbon::today()->subDays(0);
			$thisdayorders = Order::where('created_at', '>=', $date)->where('staffid', '=', $currentuser->idnumber)->orderBy('updated_at', 'asc')->get();
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
			$yesterdaysorders = Order::whereDate('created_at', $yesterday )->where('staffid', '=', $currentuser->idnumber)->get();
			$sumyesterdaysales = $yesterdaysorders->sum('totalprice');
			/* Two Days Ago Orders*/
			$twodaysago = date("Y-m-d", strtotime( '-2 days' ) );
			$twodaysagoorders = Order::whereDate('created_at', $twodaysago )->where('staffid', '=', $currentuser->idnumber)->get();
			/* All Orders*/
			dump($today);
	
			$allorders = Order::where('staffid', '=', $currentuser->idnumber)->get();
			$sumallorders = $allorders->sum('totalprice');
			//dump($today);
			//dump($thisdayorders);
			//dump($yesterdaysorders);
			//dump($sumyesterdaysales);
			//dump($twodaysagoorders);
			//dump($allorders);
			$id = User::where('idnumber', '=', $idnumber)->first();
			$orderitems = OrderItems::where('staffid', '=', $currentuser->idnumber)->get();
			$order = Order::where('staffid', '=', $currentuser->idnumber)->first();
			$idnumber = \Auth::user()->idnumber;
			//dump($idnumber);
			//dump($orderitems);
			dump([ 
				$currentuser->name => $idnumber,
				'Todays Total Sales' => number_format($sumthisdayorders) . '.00 SAR',
				'Yesterdays Total Sales' => number_format($sumyesterdaysales) . '.00 SAR',
				'Total Sales' => number_format($sumallorders) . '.00 SAR',
				'Account Created' => $currentuser->created_at->diffForHumans()
			]);
			$branches_list = DB::table('branches')
			->where('salesgroup', '=', $currentuser->idnumber)
			->get();
			$users = User::all();
		return view ('dashboard.admin')
		->withOrder($order)
		->with('justcreatedorderscount', $justcreatedorderscount)
		->with('editingorderscount', $editingorderscount)
		->with('reviewingorderscount', $reviewingorderscount)
		->with('submittedorderscount', $submittedorderscount)
		->with('completedorderscount', $completedorderscount)
		->with('branches_list', $branches_list)
		->with('orderscount', $orderscount)
		->with('orderitems', $orderitems)
		->with('orders', $orders)
		->with('items', $items)
		->with('branches', $branches)
		->with('thisdayorders', $thisdayorders)
		->with('sumthisdayorders', $sumthisdayorders)
		->with('sumthisdayfreeorders', $sumthisdayfreeorders)
		->with('sumthisdayordersqty', $sumthisdayordersqty)
		->with('sumallorders', $sumallorders)
		->with('yesterdaysorders', $yesterdaysorders)
		->with('sumyesterdaysales', $sumyesterdaysales)
		->with('todaysjustcreatedorders', $todaysjustcreatedorders)
		->with('todayseditingorders', $todayseditingorders)
		->with('todaysreviewingorders', $todaysreviewingorders)
		->with('todayssubmittedorders', $todayssubmittedorders)
		->with('todayscompletedorders', $todayscompletedorders)
		->with('id', $id)
		->with('users', $users);
    }
    public function getEdit()
    {
    return view ('profile.edit');
    }
    public function profileEdit(Request $request)
    {
    	$this->validate($request, [
    		'name' => 'max:50',
    		'email' => 'email|max:50',
    		'phonenumber' => 'max:10',
    	]);
    	
    	Auth::user()->update([
    		'name' => $request->input('name'),
    		'email' => $request->input('email'),
    		'phonenumber' => $request->input('phonenumber'),
    	]);
    	
    	return redirect()->route('profile.edit')->with('info', 'Your profile has been updated.');
    	
	}
	public function photoEdit(Request $request)
    {
    	$this->validate($request, [
    		'photo' => 'max:255',
    	]);
    	
    	Auth::user()->update([
			'photo' => $request->input('photo'),

    	]);
    	
    	return redirect()->route('profile.edit')->with('info', 'Your photo has been updated.');
    	
		}
	public function getArchive($idnumber)
	{
		$currentuser = \Auth::user();
		$items = Item::select('itemnumber', 'itemname', 'itemprice', 'itemsku', 'plant', 'instock', 'link', 'type')->orderBy('created_at', 'desc')->paginate(2);
    $branches = Branch::select('branchname', 'branchnumber')->orderBy('updated_at', 'desc')->paginate(10);
		$orders = Order::select()->where('staffid', '=', $currentuser->idnumber)->orderBy('created_at', 'desc')->paginate(14);
		$orderscount = Order::select('ordernumber')->where('staffid', '=', $currentuser->idnumber)->get();
		
		$justcreatedorderscount = Order::select('status')->where('staffid', '=', $currentuser->idnumber)->where('status', '=', 'JustCreated');
		$editingorderscount = Order::select('status')->where('staffid', '=', $currentuser->idnumber)->where('status', '=', 'Editing');
		$reviewingorderscount = Order::select('status')->where('staffid', '=', $currentuser->idnumber)->where('status', '=', 'Reviewing');
		$submittedorderscount = Order::select('status')->where('staffid', '=', $currentuser->idnumber)->where('status', '=', 'Submitted');
		$completedorderscount = Order::select('status')->where('staffid', '=', $currentuser->idnumber)->where('status', '=', 'Completed');
		//$ordersbydate = Order::orderBy('created_at', 'ASC')->get();
		
		/* Todays Orders*/
		$date = \Carbon\Carbon::today()->subDays(0);
		$thisdayorders = Order::where('created_at', '>=', $date)->where('staffid', '=', $currentuser->idnumber)->get();
		$sumthisdayorders = $thisdayorders->sum('totalprice');

		$today = date("Y-m-d", strtotime( '0 days' ) );
		
		/* Yesterdays Orders*/

		$yesterday = date("Y-m-d", strtotime( '-1 days' ) );
		$yesterdaysorders = Order::whereDate('created_at', $yesterday )->where('staffid', '=', $currentuser->idnumber)->get();
		$sumyesterdaysales = $yesterdaysorders->sum('totalprice');

		/* Two Days Ago Orders*/
		$twodaysago = date("Y-m-d", strtotime( '-2 days' ) );
		$twodaysagoorders = Order::whereDate('created_at', $twodaysago )->where('staffid', '=', $currentuser->idnumber)->get();

		/* All Orders*/
		$date1 = \Carbon\Carbon::yesterday()->subDays(1);
		$allorders = Order::where('created_at', '>=', $date1)->where('staffid', '=', $currentuser->idnumber)->get();
		$sumallorders = $allorders->sum('totalprice');

		dump([ 
			$currentuser->name => $idnumber, 
			'Todays Total Sales' => number_format($sumthisdayorders) . '.00 SAR',
			'Yesterdays Total Sales' => number_format($sumyesterdaysales) . '.00 SAR',
			'Total Sales' => number_format($sumallorders) . '.00 SAR'
			]);

		//dump($thisdayorders);
		//dump($yesterdaysorders);
		//dump($sumyesterdaysales);
		//dump($twodaysagoorders);
		//dump($allorders);
		$id = User::where('idnumber', '=', $idnumber)->first();
		$orderitems = OrderItems::where('staffid', '=', $currentuser->idnumber)->get();
		$order = Order::where('staffid', '=', $currentuser->idnumber)->first();
		$idnumber = \Auth::user()->idnumber;
		return view('dashboard.archive')
		->withOrder($order)
		->with('justcreatedorderscount', $justcreatedorderscount)
		->with('editingorderscount', $editingorderscount)
		->with('reviewingorderscount', $reviewingorderscount)
		->with('submittedorderscount', $submittedorderscount)
		->with('completedorderscount', $completedorderscount)
		->with('orderscount', $orderscount)
		->with('orderitems', $orderitems)
		->with('orders', $orders)
		->with('items', $items)
		->with('branches', $branches)
		->with('thisdayorders', $thisdayorders)
		->with('sumthisdayorders', $sumthisdayorders)
		->with('sumallorders', $sumallorders)
		->with('yesterdaysorders', $yesterdaysorders)
		->with('sumyesterdaysales', $sumyesterdaysales)
		->with('id', $id);
	}

}
