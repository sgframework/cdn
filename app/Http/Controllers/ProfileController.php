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
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

//2147483647
class ProfileController extends Controller
{
    public function getProfile($idnumber)
    {

				$currentuser = \Auth::user();

		$slug = OrderItems::select('slug')->where('staffid', '=', $currentuser->idnumber)->get();   $currentuser = \Auth::user();
		$items = Item::select('itemnumber', 'itemname', 'itemprice', 'itemsku', 'plant', 'instock', 'link', 'type')->orderBy('created_at', 'desc')->paginate(2);
    $branches = Branch::select('branchname', 'branchnumber')->orderBy('updated_at', 'desc')->paginate(10);
		$orders = Order::select()->where('staffid', '=', $currentuser->idnumber)->orderBy('created_at', 'desc')->paginate(14);
		$orderscount = Order::select('ordernumber')->where('staffid', '=', $currentuser->idnumber)->get();
		$justcreatedorderscount = Order::select('status')->where('staffid', '=', $currentuser->idnumber)->where('status', '=', 'JustCreated');
		$editingorderscount = Order::select('status')->where('staffid', '=', $currentuser->idnumber)->where('status', '=', 'Editing');
		$reviewingorderscount = Order::select('status')->where('staffid', '=', $currentuser->idnumber)->where('status', '=', 'Reviewing');
		$submittedorderscount = Order::select('status')->where('staffid', '=', $currentuser->idnumber)->where('status', '=', 'Submitted');
		$completedorderscount = Order::select('status')->where('staffid', '=', $currentuser->idnumber)->where('status', '=', 'Completed');
		$belongordernumber = Order::where('staffid', '=', $idnumber)->where('slug', '=', $slug)->first();
                    

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
		$sumthisdayorderitems = $thisdayorders->sum('totalitems');
		$sumthisdayfreeorders = $thisdayorders->sum('totalfree');
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
		//dump($today);

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
		/*dump([ 
			$currentuser->name => $idnumber,
			'Todays Total Sales' => number_format($sumthisdayorders) . '.00 SAR',
			'Yesterdays Total Sales' => number_format($sumyesterdaysales) . '.00 SAR',
			'Total Sales' => number_format($sumallorders) . '.00 SAR',
			'Account Created' => $currentuser->created_at->diffForHumans()
		]);*/
		$branches_list = DB::table('branches')
		->where('salesgroup', '=', $currentuser->idnumber)
		->get();

		$firstcustomer =  
		DB::table('branches')->select('branchnumber')
		->where('salesgroup', '=', $currentuser->idnumber)
		->get();


		$orderscustomernumber = Order::select('branchnumber')->where('staffid', '=', $idnumber)->orderBy('updated_at', 'asc')->get();
		



		$orders = Order::select()->where('staffid', '=', $idnumber)->orderBy('updated_at', 'asc')->first();
		$customers = Branch::select()->orderBy('updated_at', 'asc')->first();

		$relation = $orders->where('ponumber', '=', 'test0')->first('branchnumber');
		$relatedcustomer = $customers;
		$relatedcustomer =  $customers->where('branchnumber', '=', $customers->branchnumber)->get();
		$relatedorder =  $orders->where('branchnumber', '=', $orderscustomernumber)->get();
		
		$customerorders =  $customers->where('branchnumber', '=', $customers->branchnumber)->get();
		$customerbysalegroup =  $orders->where('branchnumber', '=', $firstcustomer);
		
		$combined = $orderscustomernumber;

			

		$sumallcustomerorders = $relatedorder->sum('totalprice');



		//dump($sumallcustomerorders);

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
				->with('belongordernumber', $belongordernumber)
				->with('slug', $slug)
				->with('relatedorder', $relatedorder)
				
				
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
		public function getManager(Order $slug, $idnumber)
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
			//dump($today);
	
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
			$branches_list = DB::table('branches')
			->where('salesgroup', '=', $currentuser->idnumber)
			->get();		
			//dump($usersales);

			$salesbycustomer = 

			$retailtree = User::select()->where('dc',  'like', '00102%')->get();


			$suaccesslevel = User::select()->where('is_permission',  '=', '2')->get();
			$adminsaccesslevel = User::select()->where('is_permission',  '=', '1')->get();
			$usersaccesslevel = User::select()->where('is_permission',  '=', '0')->get();
				/* Head Manager */
				$hasanrabah = User::select()->where('id',  '=', '6')->get();
					/* KA MANAGER */
					$bashar =  User::select()->where('dc',  '=', '001010')->get();
					$basharteam = 
						/* KA SUPERVISOR  CSZ */
						//$firas = User::select('dc')->where('dc',  '=', '001020')->get();
							$firasteam = User::select()->where('dc',  '>=', '001021')->where('dc', '<', '001029')->get();
								$sumfirasteamsales = $firasteam->sum('totalgrand');
						/* KA SUPERVISOR  CSL */
						//$hazem = User::select()->where('dc',  '=', '001030')->get();
							$hazemteam =  User::select()->where('dc',  '>=', '001031')->where('dc', '<', '001039')->get();
								$sumhazemteamsales = $hazemteam->sum('totalgrand');
						/* KA SUPERVISOR CTK */
						//$awaden = User::select()->where('dc',  '=', '001040')->get();
							$awadenteam = User::select()->where('dc',  '>=', '001041')->where('dc', '<', '001049')->get();
								$sumawadenteamsales = $awadenteam->sum('totalgrand');
							/* WS MANAGER */ 
						//$odeh = User::select()->where('dc',  '=', '002010')->get();
							//$odehteam = User::select()->where('dc',  '>=', '002011')->where('dc', '<', '002019')->get();
								//$sumodehteamsales = $odehteam->sum('totalgrand');
							$retailmngr = User::select()->where('dc',  'like', '001040')->get();




				




                
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
			
							$sumallordersprocessedbyahmedsulaimani = 
							//dump($sumoasapo);
							//dump($sumttaspop);
			
							/** GET Averages */
			
							
			
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
			
			
			
			
											$order = Order::where('slug', '=', $slug)->first();
											$items = Item::all();
											$branches = Branch::all();
											//$orders = Order::all()->where('ordernumber', '=', $ordernumber)->first();
											$jcorders = Order::select()->where('status', '=', 'JustCreated')->where('staffid', '=', $currentuser->idnumber)->orderBy('updated_at', 'asc')->get();
											$editingorders = Order::select()->where('status', '=', 'Editing')->where('staffid', '=', $currentuser->idnumber)->orderBy('updated_at', 'asc')->get();
											$orders = Order::select()->where('status', '=', 'Editing')->where('staffid', '=', $currentuser->idnumber)->orderBy('updated_at', 'asc')->get();
											$processingorders = OrderItems::select()->where('orderstatus', '=', 'Processing')->where('staffid', '=', $currentuser->idnumber)->orderBy('updated_at', 'asc')->get();
											//$completedorders = Order::select()->where('status', '=', 'Completed')->where('staffid', '=', $currentuser->idnumber)->orderBy('updated_at', 'desc')->paginate(20);
											$reviewingdorders = Order::select()->where('status', '=', 'Reviewing')->where('staffid', '=', $currentuser->idnumber)->orderBy('updated_at', 'asc')->get();
											$orderitems = OrderItems::select('itemnumber')->where('slug', '=', $slug)->get();
											$processedorders = Order::where('status', '=', 'Submitted')->where('staffid', '=', $currentuser->idnumber)->orderBy('updated_at', 'asc')->get();
											$ordernumber = Order::where('ordernumber', '=', $currentuser->idnumber)->get();
											//dump($orders);
											//dump($orderitems);
											//dump($ordernumber);
											$currentuser = \Auth::user();
											/* Todays Orders*/
											$date = \Carbon\Carbon::today()->subDays(0);
											$thisdayorders = Order::where('created_at', '>=', $date)->where('staffid', '=', $currentuser->idnumber)->where('status', '=', 'Submitted')->orderBy('updated_at', 'asc')->get();
											$thisdaycompletedorders = Order::where('created_at', '>=', $date)->where('staffid', '=', $currentuser->idnumber)->where('status', '=', 'Completed')->orderBy('updated_at', 'asc')->get();
											$sumthisdayorders = $thisdayorders->sum('totalprice');
											$today = date("Y-m-d", strtotime( '0 days' ) );
											/* Yesterdays Orders*/
											$yesterday = date("Y-m-d", strtotime( '-1 days' ) );
											$yesterdaysorders = Order::whereDate('created_at', $yesterday )->where('staffid', '=', $currentuser->idnumber)->orderBy('updated_at', 'asc')->get();
											$sumyesterdaysales = $yesterdaysorders->sum('totalprice');
											/* Two Days Ago Orders*/
											$twodaysago = date("Y-m-d", strtotime( '-2 days' ) );
											$twodaysagoorders = Order::whereDate('created_at', $twodaysago )->where('staffid', '=', $currentuser->idnumber)->orderBy('updated_at', 'asc')->get();
											/* All Orders*/
											$date1 = \Carbon\Carbon::yesterday()->subDays(1);
											$allorders = Order::where('created_at', '>=', $date1)->where('staffid', '=', $currentuser->idnumber)->orderBy('updated_at', 'asc')->get();
											$sumallorders = $allorders->sum('totalprice');
											$currentuser = \Auth::user();
											$currentusername = $currentuser->name;
											$currentuseridnumber = \Auth::user()->select('idnumber')->where('idnumber', '=', $currentuser->idnumber)->first();
											$submittedorders = Order::select()->where('staffid', '=', $currentuser->idnumber)->where('status', '=', 'Submitted')->whereNotNull('ponumber')->orderBy('updated_at', 'asc')->groupBy('slug')->get();
											
											$date = \Carbon\Carbon::today()->subDays(0);
											$thisdayorders = Order::where('created_at', '>=', $date)->where('staffid', '=', \Auth::user()->idnumber)->where('status', '=', 'Completed')->orderBy('updated_at', 'asc')->get();
											$completedorders = $thisdayorders
											->where('status', '=', 'Completed');
			
											$sumsubmittedorders = $submittedorders->sum('totalprice');
											$sumcompletedorders = $completedorders->sum('totalprice');
											$users = User::all();
			/*
											dump([ 
													'Total Submitted Orders' => $submittedorders->count(),
													'Total Completed Orders' => $completedorders->count(),
													'All Orders' => $submittedorders->count() + $completedorders->count(),
													'Total Submitted Sales' => number_format($sumsubmittedorders) . '.00 SAR',
													'Total Completed Sales' => number_format($sumcompletedorders) . '.00 SAR',
													'All Sales Sum' => number_format($sumallorders) . '.00 SAR',
													/*'Yesterdays Total Sales' => number_format($sumyesterdaysales) . '.00 SAR',
													'Total Sales' => number_format($sumallorders) . '.00 SAR',
													'This Month All Users Total Sales' => number_format($sumthismonthorders) . '.00 SAR',
							
											]);*/
			
						 /** FIRAS TEAM STATS START */
							
						 $michael = User::select()->where('idnumber', '=', '1275')->first();
						 $mohammedsayed = User::select()->where('idnumber', '=', '5275')->first();
						 $fahaddahasy = User::select()->where('idnumber', '=', '2745')->first();
						 $abdullahnaser = User::select()->where('idnumber', '=', '2409')->first();
						 $ahmedmedhat = User::select()->where('idnumber', '=', '4688')->first();
			
						 $wail = User::select()->where('idnumber', '=', '1110')->first();
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
			
			
			
						 /* Get Firas Team Averages */
						 $averageftaoi = $sumftaoi / $countftao;
						 $averageftaoq = $sumftaoq / $countftao;
						 $averageftaof = $sumftaof / $countftao;
						 $averageftaod = $sumftaod / $countftao;
						 $averageftaop = $sumftaop / $countftao;
			
			
			
			
			
						 /** MICHAEL STATS */
						 $michael = User::select()->where('idnumber', '=', '1275')->first();
						 $countmichaelorders = Order::where('staffid', '=', $michael->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
						 $countmichaelfp = OrderItems::where('staffid', '=', $michael->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
						 $michaelorders = Order::where('staffid', '=', $michael->idnumber)->get();
			
						 
						 $michaelto = $michaelorders->where('created_at',  '>=', $thisday );
						 $countmichaelto = $michaelto->count();
						 $summichaeltoi = $michaelto->sum('totalitems');
						 $summichaeltoq = $michaelto->sum('totalqty');
						 $summichaeltof = $michaelto->sum('totalfree');
						 $summichaeltod = $michaelto->sum('discount');
						 $summichaeltop = $michaelto->sum('totalprice');
						 $onedayago = date("Y-m-d", strtotime( '-1 day' ) );
						 $yesterday = Carbon::today()->subDays(1);
						 //dump($date);
						 $michaelyo = $michaelorders->where('created_at', '>=', $yesterday   )->where('created_at', '<', $thisday   );
						 $countmichaelyo = $michaelyo->count();
						 $summichaelyoi = $michaelyo->sum('totalitems');
						 $summichaelyoq = $michaelyo->sum('totalqty');
						 $summichaelyof = $michaelyo->sum('totalfree');
						 $summichaelyod = $michaelyo->sum('discount');
						 $summichaelyop = $michaelyo->sum('totalprice');
						 $beforeyesterday = Carbon::yesterday()->subDays(1);
						 $michaelbyo = $michaelorders->where('created_at', '>', $beforeyesterday   )->where('created_at', '<', $yesterday   );
						 $countmichaelbyo = $michaelbyo->count();
						 $summichaelbyoi = $michaelbyo->sum('totalitems');
						 $summichaelbyoq = $michaelbyo->sum('totalqty');
						 $summichaelbyof = $michaelbyo->sum('totalfree');
						 $summichaelbyod = $michaelbyo->sum('discount');
						 $summichaelbyop = $michaelbyo->sum('totalprice');
						 $beforethreedays = Carbon::yesterday()->subDays(2);
						 $thismonth = Carbon::today()->subDays(30);
						 $michaelbtdo = $michaelorders->where('created_at', '>', $beforethreedays   )->where('created_at', '<', $beforeyesterday   );
						 $countmichaelbtdo = $michaelbtdo->count();
						 $summichaelbtdoi = $michaelbtdo->sum('totalitems');
						 $summichaelbtdoq = $michaelbtdo->sum('totalqty');
						 $summichaelbtdof = $michaelbtdo->sum('totalfree');
						 $summichaelbtdod = $michaelbtdo->sum('discount');
						 $summichaelbtdop = $michaelbtdo->sum('totalprice');
						 $michaelao = $michaelorders->where('created_at', '>=', $thismonth);
						 $countmichaelao = $michaelao->count();
						 $summichaelaoi = $michaelao->sum('totalitems');
						 $summichaelaoq = $michaelao->sum('totalqty');
						 $summichaelaof = $michaelao->sum('totalfree');
						 $summichaelaod = $michaelao->sum('discount');
						 $summichaelaop = $michaelao->sum('totalprice');
			
						 /** MICHAEL STATS END */
			
														 /** mohammedsayed STATS */
														 
														 $mohammedsayed = User::select()->where('idnumber', '=', '5275')->first();
														 $countmohammedsayedorders = Order::where('staffid', '=', $mohammedsayed->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
														 $countmohammedsayedfp = OrderItems::where('staffid', '=', $mohammedsayed->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
														 $mohammedsayedorders = Order::where('staffid', '=', $mohammedsayed->idnumber)->get();
						 
										 
														 $mohammedsayedto = $mohammedsayedorders->where('created_at',  '>=', $thisday );
														 $countmohammedsayedto = $mohammedsayedto->count();
														 $summohammedsayedtoi = $mohammedsayedto->sum('totalitems');
														 $summohammedsayedtoq = $mohammedsayedto->sum('totalqty');
														 $summohammedsayedtof = $mohammedsayedto->sum('totalfree');
														 $summohammedsayedtod = $mohammedsayedto->sum('discount');
														 $summohammedsayedtop = $mohammedsayedto->sum('totalprice');
														 $onedayago = date("Y-m-d", strtotime( '-1 day' ) );
														 $yesterday = Carbon::today()->subDays(1);
														 //dump($date);
														 $mohammedsayedyo = $mohammedsayedorders->where('created_at', '>=', $yesterday   )->where('created_at', '<', $thisday   );
														 $countmohammedsayedyo = $mohammedsayedyo->count();
														 $summohammedsayedyoi = $mohammedsayedyo->sum('totalitems');
														 $summohammedsayedyoq = $mohammedsayedyo->sum('totalqty');
														 $summohammedsayedyof = $mohammedsayedyo->sum('totalfree');
														 $summohammedsayedyod = $mohammedsayedyo->sum('discount');
														 $summohammedsayedyop = $mohammedsayedyo->sum('totalprice');
														 $beforeyesterday = Carbon::yesterday()->subDays(1);
														 $mohammedsayedbyo = $mohammedsayedorders->where('created_at', '>', $beforeyesterday   )->where('created_at', '<', $yesterday   );
														 $countmohammedsayedbyo = $mohammedsayedbyo->count();
														 $summohammedsayedbyoi = $mohammedsayedbyo->sum('totalitems');
														 $summohammedsayedbyoq = $mohammedsayedbyo->sum('totalqty');
														 $summohammedsayedbyof = $mohammedsayedbyo->sum('totalfree');
														 $summohammedsayedbyod = $mohammedsayedbyo->sum('discount');
														 $summohammedsayedbyop = $mohammedsayedbyo->sum('totalprice');
														 $beforethreedays = Carbon::yesterday()->subDays(2);
														 $thismonth = Carbon::today()->subDays(30);
														 $mohammedsayedbtdo = $mohammedsayedorders->where('created_at', '>', $beforethreedays   )->where('created_at', '<', $beforeyesterday   );
														 $countmohammedsayedbtdo = $mohammedsayedbtdo->count();
														 $summohammedsayedbtdoi = $mohammedsayedbtdo->sum('totalitems');
														 $summohammedsayedbtdoq = $mohammedsayedbtdo->sum('totalqty');
														 $summohammedsayedbtdof = $mohammedsayedbtdo->sum('totalfree');
														 $summohammedsayedbtdod = $mohammedsayedbtdo->sum('discount');
														 $summohammedsayedbtdop = $mohammedsayedbtdo->sum('totalprice');
														 $mohammedsayedao = $mohammedsayedorders->where('created_at', '>=', $thismonth);
														 $countmohammedsayedao = $mohammedsayedao->count();
														 $summohammedsayedaoi = $mohammedsayedao->sum('totalitems');
														 $summohammedsayedaoq = $mohammedsayedao->sum('totalqty');
														 $summohammedsayedaof = $mohammedsayedao->sum('totalfree');
														 $summohammedsayedaod = $mohammedsayedao->sum('discount');
														 $summohammedsayedaop = $mohammedsayedao->sum('totalprice');
										 
														 /** mohammedsayed STATS END */
			
										 /** fahaddahasy STATS */
														 
										 $fahaddahasy = User::select()->where('idnumber', '=', '2745')->first();
										 $countfahaddahasyorders = Order::where('staffid', '=', $fahaddahasy->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
										 $countfahaddahasyfp = OrderItems::where('staffid', '=', $fahaddahasy->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
										 $fahaddahasyorders = Order::where('staffid', '=', $fahaddahasy->idnumber)->get();
			
						 
										 $fahaddahasyto = $fahaddahasyorders->where('created_at',  '>=', $thisday );
										 $countfahaddahasyto = $fahaddahasyto->count();
										 $sumfahaddahasytoi = $fahaddahasyto->sum('totalitems');
										 $sumfahaddahasytoq = $fahaddahasyto->sum('totalqty');
										 $sumfahaddahasytof = $fahaddahasyto->sum('totalfree');
										 $sumfahaddahasytod = $fahaddahasyto->sum('discount');
										 $sumfahaddahasytop = $fahaddahasyto->sum('totalprice');
										 $onedayago = date("Y-m-d", strtotime( '-1 day' ) );
										 $yesterday = Carbon::today()->subDays(1);
										 //dump($date);
										 $fahaddahasyyo = $fahaddahasyorders->where('created_at', '>=', $yesterday   )->where('created_at', '<', $thisday   );
										 $countfahaddahasyyo = $fahaddahasyyo->count();
										 $sumfahaddahasyyoi = $fahaddahasyyo->sum('totalitems');
										 $sumfahaddahasyyoq = $fahaddahasyyo->sum('totalqty');
										 $sumfahaddahasyyof = $fahaddahasyyo->sum('totalfree');
										 $sumfahaddahasyyod = $fahaddahasyyo->sum('discount');
										 $sumfahaddahasyyop = $fahaddahasyyo->sum('totalprice');
										 $beforeyesterday = Carbon::yesterday()->subDays(1);
										 $fahaddahasybyo = $fahaddahasyorders->where('created_at', '>', $beforeyesterday   )->where('created_at', '<', $yesterday   );
										 $countfahaddahasybyo = $fahaddahasybyo->count();
										 $sumfahaddahasybyoi = $fahaddahasybyo->sum('totalitems');
										 $sumfahaddahasybyoq = $fahaddahasybyo->sum('totalqty');
										 $sumfahaddahasybyof = $fahaddahasybyo->sum('totalfree');
										 $sumfahaddahasybyod = $fahaddahasybyo->sum('discount');
										 $sumfahaddahasybyop = $fahaddahasybyo->sum('totalprice');
										 $beforethreedays = Carbon::yesterday()->subDays(2);
										 $thismonth = Carbon::today()->subDays(30);
										 $fahaddahasybtdo = $fahaddahasyorders->where('created_at', '>', $beforethreedays   )->where('created_at', '<', $beforeyesterday   );
										 $countfahaddahasybtdo = $fahaddahasybtdo->count();
										 $sumfahaddahasybtdoi = $fahaddahasybtdo->sum('totalitems');
										 $sumfahaddahasybtdoq = $fahaddahasybtdo->sum('totalqty');
										 $sumfahaddahasybtdof = $fahaddahasybtdo->sum('totalfree');
										 $sumfahaddahasybtdod = $fahaddahasybtdo->sum('discount');
										 $sumfahaddahasybtdop = $fahaddahasybtdo->sum('totalprice');
										 $fahaddahasyao = $fahaddahasyorders->where('created_at', '>=', $thismonth);
										 $countfahaddahasyao = $fahaddahasyao->count();
										 $sumfahaddahasyaoi = $fahaddahasyao->sum('totalitems');
										 $sumfahaddahasyaoq = $fahaddahasyao->sum('totalqty');
										 $sumfahaddahasyaof = $fahaddahasyao->sum('totalfree');
										 $sumfahaddahasyaod = $fahaddahasyao->sum('discount');
										 $sumfahaddahasyaop = $fahaddahasyao->sum('totalprice');
						 
										 /** fahaddahasy STATS END */
			
										 /** abdullahnaser STATS */
														 
										 $abdullahnaser = User::select()->where('idnumber', '=', '2409')->first();
										 $countabdullahnaserorders = Order::where('staffid', '=', $abdullahnaser->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
										 $countabdullahnaserfp = OrderItems::where('staffid', '=', $abdullahnaser->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
										 $abdullahnaserorders = Order::where('staffid', '=', $abdullahnaser->idnumber)->get();
			
						 
										 $abdullahnaserto = $abdullahnaserorders->where('created_at',  '>=', $thisday );
										 $countabdullahnaserto = $abdullahnaserto->count();
										 $sumabdullahnasertoi = $abdullahnaserto->sum('totalitems');
										 $sumabdullahnasertoq = $abdullahnaserto->sum('totalqty');
										 $sumabdullahnasertof = $abdullahnaserto->sum('totalfree');
										 $sumabdullahnasertod = $abdullahnaserto->sum('discount');
										 $sumabdullahnasertop = $abdullahnaserto->sum('totalprice');
										 $onedayago = date("Y-m-d", strtotime( '-1 day' ) );
										 $yesterday = Carbon::today()->subDays(1);
										 //dump($date);
										 $abdullahnaseryo = $abdullahnaserorders->where('created_at', '>=', $yesterday   )->where('created_at', '<', $thisday   );
										 $countabdullahnaseryo = $abdullahnaseryo->count();
										 $sumabdullahnaseryoi = $abdullahnaseryo->sum('totalitems');
										 $sumabdullahnaseryoq = $abdullahnaseryo->sum('totalqty');
										 $sumabdullahnaseryof = $abdullahnaseryo->sum('totalfree');
										 $sumabdullahnaseryod = $abdullahnaseryo->sum('discount');
										 $sumabdullahnaseryop = $abdullahnaseryo->sum('totalprice');
										 $beforeyesterday = Carbon::yesterday()->subDays(1);
										 $abdullahnaserbyo = $abdullahnaserorders->where('created_at', '>', $beforeyesterday   )->where('created_at', '<', $yesterday   );
										 $countabdullahnaserbyo = $abdullahnaserbyo->count();
										 $sumabdullahnaserbyoi = $abdullahnaserbyo->sum('totalitems');
										 $sumabdullahnaserbyoq = $abdullahnaserbyo->sum('totalqty');
										 $sumabdullahnaserbyof = $abdullahnaserbyo->sum('totalfree');
										 $sumabdullahnaserbyod = $abdullahnaserbyo->sum('discount');
										 $sumabdullahnaserbyop = $abdullahnaserbyo->sum('totalprice');
										 $beforethreedays = Carbon::yesterday()->subDays(2);
										 $thismonth = Carbon::today()->subDays(30);
										 $abdullahnaserbtdo = $abdullahnaserorders->where('created_at', '>', $beforethreedays   )->where('created_at', '<', $beforeyesterday   );
										 $countabdullahnaserbtdo = $abdullahnaserbtdo->count();
										 $sumabdullahnaserbtdoi = $abdullahnaserbtdo->sum('totalitems');
										 $sumabdullahnaserbtdoq = $abdullahnaserbtdo->sum('totalqty');
										 $sumabdullahnaserbtdof = $abdullahnaserbtdo->sum('totalfree');
										 $sumabdullahnaserbtdod = $abdullahnaserbtdo->sum('discount');
										 $sumabdullahnaserbtdop = $abdullahnaserbtdo->sum('totalprice');
										 $abdullahnaserao = $abdullahnaserorders->where('created_at', '>=', $thismonth);
										 $countabdullahnaserao = $abdullahnaserao->count();
										 $sumabdullahnaseraoi = $abdullahnaserao->sum('totalitems');
										 $sumabdullahnaseraoq = $abdullahnaserao->sum('totalqty');
										 $sumabdullahnaseraof = $abdullahnaserao->sum('totalfree');
										 $sumabdullahnaseraod = $abdullahnaserao->sum('discount');
										 $sumabdullahnaseraop = $abdullahnaserao->sum('totalprice');
						 
										 /** abdullahnaser STATS END */
			
										 
										 /** ahmedmedhat STATS */
														 
										 $ahmedmedhat = User::select()->where('idnumber', '=', '4688')->first();
										 $countahmedmedhatorders = Order::where('staffid', '=', $ahmedmedhat->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
										 $countahmedmedhatfp = OrderItems::where('staffid', '=', $ahmedmedhat->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
										 $ahmedmedhatorders = Order::where('staffid', '=', $ahmedmedhat->idnumber)->get();
			
						 
										 $ahmedmedhatto = $ahmedmedhatorders->where('created_at',  '>=', $thisday );
										 $countahmedmedhatto = $ahmedmedhatto->count();
										 $sumahmedmedhattoi = $ahmedmedhatto->sum('totalitems');
										 $sumahmedmedhattoq = $ahmedmedhatto->sum('totalqty');
										 $sumahmedmedhattof = $ahmedmedhatto->sum('totalfree');
										 $sumahmedmedhattod = $ahmedmedhatto->sum('discount');
										 $sumahmedmedhattop = $ahmedmedhatto->sum('totalprice');
										 $onedayago = date("Y-m-d", strtotime( '-1 day' ) );
										 $yesterday = Carbon::today()->subDays(1);
										 //dump($date);
										 $ahmedmedhatyo = $ahmedmedhatorders->where('created_at', '>=', $yesterday   )->where('created_at', '<', $thisday   );
										 $countahmedmedhatyo = $ahmedmedhatyo->count();
										 $sumahmedmedhatyoi = $ahmedmedhatyo->sum('totalitems');
										 $sumahmedmedhatyoq = $ahmedmedhatyo->sum('totalqty');
										 $sumahmedmedhatyof = $ahmedmedhatyo->sum('totalfree');
										 $sumahmedmedhatyod = $ahmedmedhatyo->sum('discount');
										 $sumahmedmedhatyop = $ahmedmedhatyo->sum('totalprice');
										 $beforeyesterday = Carbon::yesterday()->subDays(1);
										 $ahmedmedhatbyo = $ahmedmedhatorders->where('created_at', '>', $beforeyesterday   )->where('created_at', '<', $yesterday   );
										 $countahmedmedhatbyo = $ahmedmedhatbyo->count();
										 $sumahmedmedhatbyoi = $ahmedmedhatbyo->sum('totalitems');
										 $sumahmedmedhatbyoq = $ahmedmedhatbyo->sum('totalqty');
										 $sumahmedmedhatbyof = $ahmedmedhatbyo->sum('totalfree');
										 $sumahmedmedhatbyod = $ahmedmedhatbyo->sum('discount');
										 $sumahmedmedhatbyop = $ahmedmedhatbyo->sum('totalprice');
										 $beforethreedays = Carbon::yesterday()->subDays(2);
										 $thismonth = Carbon::today()->subDays(30);
										 $ahmedmedhatbtdo = $ahmedmedhatorders->where('created_at', '>', $beforethreedays   )->where('created_at', '<', $beforeyesterday   );
										 $countahmedmedhatbtdo = $ahmedmedhatbtdo->count();
										 $sumahmedmedhatbtdoi = $ahmedmedhatbtdo->sum('totalitems');
										 $sumahmedmedhatbtdoq = $ahmedmedhatbtdo->sum('totalqty');
										 $sumahmedmedhatbtdof = $ahmedmedhatbtdo->sum('totalfree');
										 $sumahmedmedhatbtdod = $ahmedmedhatbtdo->sum('discount');
										 $sumahmedmedhatbtdop = $ahmedmedhatbtdo->sum('totalprice');
										 $ahmedmedhatao = $ahmedmedhatorders->where('created_at', '>=', $thismonth);
										 $countahmedmedhatao = $ahmedmedhatao->count();
										 $sumahmedmedhataoi = $ahmedmedhatao->sum('totalitems');
										 $sumahmedmedhataoq = $ahmedmedhatao->sum('totalqty');
										 $sumahmedmedhataof = $ahmedmedhatao->sum('totalfree');
										 $sumahmedmedhataod = $ahmedmedhatao->sum('discount');
										 $sumahmedmedhataop = $ahmedmedhatao->sum('totalprice');
						 
										 /** ahmedmedhat STATS END */
			
						 /** FIRAS TEAM STATS END */
						 
						 
							
							/** HAZIM TEAM STATS START */
							
							$noufal = User::select()->where('idnumber', '=', '2076')->first();
			
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
											
			
			
											/* Get Hazim Team Averages */
											$averagehtaoi = $sumhtaoi / $counthtao;
											$averagehtaoq = $sumhtaoq / $counthtao;
											$averagehtaof = $sumhtaof / $counthtao;
											$averagehtaod = $sumhtaod / $counthtao;
											$averagehtaop = $sumhtaop / $counthtao;
			
			
																			
											/** noufal STATS */
															
											$noufal = User::select()->where('idnumber', '=', '2076')->first();
											$countnoufalorders = Order::where('staffid', '=', $noufal->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
											$countnoufalfp = OrderItems::where('staffid', '=', $noufal->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
											$noufalorders = Order::where('staffid', '=', $noufal->idnumber)->get();
			
							
											$noufalto = $noufalorders->where('created_at',  '>=', $thisday );
											$countnoufalto = $noufalto->count();
											$sumnoufaltoi = $noufalto->sum('totalitems');
											$sumnoufaltoq = $noufalto->sum('totalqty');
											$sumnoufaltof = $noufalto->sum('totalfree');
											$sumnoufaltod = $noufalto->sum('discount');
											$sumnoufaltop = $noufalto->sum('totalprice');
											$onedayago = date("Y-m-d", strtotime( '-1 day' ) );
											$yesterday = Carbon::today()->subDays(1);
											//dump($date);
											$noufalyo = $noufalorders->where('created_at', '>=', $yesterday   )->where('created_at', '<', $thisday   );
											$countnoufalyo = $noufalyo->count();
											$sumnoufalyoi = $noufalyo->sum('totalitems');
											$sumnoufalyoq = $noufalyo->sum('totalqty');
											$sumnoufalyof = $noufalyo->sum('totalfree');
											$sumnoufalyod = $noufalyo->sum('discount');
											$sumnoufalyop = $noufalyo->sum('totalprice');
											$beforeyesterday = Carbon::yesterday()->subDays(1);
											$noufalbyo = $noufalorders->where('created_at', '>', $beforeyesterday   )->where('created_at', '<', $yesterday   );
											$countnoufalbyo = $noufalbyo->count();
											$sumnoufalbyoi = $noufalbyo->sum('totalitems');
											$sumnoufalbyoq = $noufalbyo->sum('totalqty');
											$sumnoufalbyof = $noufalbyo->sum('totalfree');
											$sumnoufalbyod = $noufalbyo->sum('discount');
											$sumnoufalbyop = $noufalbyo->sum('totalprice');
											$beforethreedays = Carbon::yesterday()->subDays(2);
											$thismonth = Carbon::today()->subDays(30);
											$noufalbtdo = $noufalorders->where('created_at', '>', $beforethreedays   )->where('created_at', '<', $beforeyesterday   );
											$countnoufalbtdo = $noufalbtdo->count();
											$sumnoufalbtdoi = $noufalbtdo->sum('totalitems');
											$sumnoufalbtdoq = $noufalbtdo->sum('totalqty');
											$sumnoufalbtdof = $noufalbtdo->sum('totalfree');
											$sumnoufalbtdod = $noufalbtdo->sum('discount');
											$sumnoufalbtdop = $noufalbtdo->sum('totalprice');
											$noufalao = $noufalorders->where('created_at', '>=', $thismonth);
											$countnoufalao = $noufalao->count();
											$sumnoufalaoi = $noufalao->sum('totalitems');
											$sumnoufalaoq = $noufalao->sum('totalqty');
											$sumnoufalaof = $noufalao->sum('totalfree');
											$sumnoufalaod = $noufalao->sum('discount');
											$sumnoufalaop = $noufalao->sum('totalprice');
											
											/** noufal STATS END  */
			
											
																			
											/** ruben STATS */
															
											$ruben = User::select()->where('idnumber', '=', '1555')->first();
											$countrubenorders = Order::where('staffid', '=', $ruben->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
											$countrubenfp = OrderItems::where('staffid', '=', $ruben->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
											$rubenorders = Order::where('staffid', '=', $ruben->idnumber)->get();
			
							
											$rubento = $rubenorders->where('created_at',  '>=', $thisday );
											$countrubento = $rubento->count();
											$sumrubentoi = $rubento->sum('totalitems');
											$sumrubentoq = $rubento->sum('totalqty');
											$sumrubentof = $rubento->sum('totalfree');
											$sumrubentod = $rubento->sum('discount');
											$sumrubentop = $rubento->sum('totalprice');
											$onedayago = date("Y-m-d", strtotime( '-1 day' ) );
											$yesterday = Carbon::today()->subDays(1);
											//dump($date);
											$rubenyo = $rubenorders->where('created_at', '>=', $yesterday   )->where('created_at', '<', $thisday   );
											$countrubenyo = $rubenyo->count();
											$sumrubenyoi = $rubenyo->sum('totalitems');
											$sumrubenyoq = $rubenyo->sum('totalqty');
											$sumrubenyof = $rubenyo->sum('totalfree');
											$sumrubenyod = $rubenyo->sum('discount');
											$sumrubenyop = $rubenyo->sum('totalprice');
											$beforeyesterday = Carbon::yesterday()->subDays(1);
											$rubenbyo = $rubenorders->where('created_at', '>', $beforeyesterday   )->where('created_at', '<', $yesterday   );
											$countrubenbyo = $rubenbyo->count();
											$sumrubenbyoi = $rubenbyo->sum('totalitems');
											$sumrubenbyoq = $rubenbyo->sum('totalqty');
											$sumrubenbyof = $rubenbyo->sum('totalfree');
											$sumrubenbyod = $rubenbyo->sum('discount');
											$sumrubenbyop = $rubenbyo->sum('totalprice');
											$beforethreedays = Carbon::yesterday()->subDays(2);
											$thismonth = Carbon::today()->subDays(30);
											$rubenbtdo = $rubenorders->where('created_at', '>', $beforethreedays   )->where('created_at', '<', $beforeyesterday   );
											$countrubenbtdo = $rubenbtdo->count();
											$sumrubenbtdoi = $rubenbtdo->sum('totalitems');
											$sumrubenbtdoq = $rubenbtdo->sum('totalqty');
											$sumrubenbtdof = $rubenbtdo->sum('totalfree');
											$sumrubenbtdod = $rubenbtdo->sum('discount');
											$sumrubenbtdop = $rubenbtdo->sum('totalprice');
											$rubenao = $rubenorders->where('created_at', '>=', $thismonth);
											$countrubenao = $rubenao->count();
											$sumrubenaoi = $rubenao->sum('totalitems');
											$sumrubenaoq = $rubenao->sum('totalqty');
											$sumrubenaof = $rubenao->sum('totalfree');
											$sumrubenaod = $rubenao->sum('discount');
											$sumrubenaop = $rubenao->sum('totalprice');
											
											/** ruben STATS END  */
			
			
																		
																			
											/** samsudin STATS */
															
											$samsudin = User::select()->where('idnumber', '=', '1171')->first();
											$countsamsudinorders = Order::where('staffid', '=', $samsudin->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
											$countsamsudinfp = OrderItems::where('staffid', '=', $samsudin->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
											$samsudinorders = Order::where('staffid', '=', $samsudin->idnumber)->get();
			
							
											$samsudinto = $samsudinorders->where('created_at',  '>=', $thisday );
											$countsamsudinto = $samsudinto->count();
											$sumsamsudintoi = $samsudinto->sum('totalitems');
											$sumsamsudintoq = $samsudinto->sum('totalqty');
											$sumsamsudintof = $samsudinto->sum('totalfree');
											$sumsamsudintod = $samsudinto->sum('discount');
											$sumsamsudintop = $samsudinto->sum('totalprice');
											$onedayago = date("Y-m-d", strtotime( '-1 day' ) );
											$yesterday = Carbon::today()->subDays(1);
											//dump($date);
											$samsudinyo = $samsudinorders->where('created_at', '>=', $yesterday   )->where('created_at', '<', $thisday   );
											$countsamsudinyo = $samsudinyo->count();
											$sumsamsudinyoi = $samsudinyo->sum('totalitems');
											$sumsamsudinyoq = $samsudinyo->sum('totalqty');
											$sumsamsudinyof = $samsudinyo->sum('totalfree');
											$sumsamsudinyod = $samsudinyo->sum('discount');
											$sumsamsudinyop = $samsudinyo->sum('totalprice');
											$beforeyesterday = Carbon::yesterday()->subDays(1);
											$samsudinbyo = $samsudinorders->where('created_at', '>', $beforeyesterday   )->where('created_at', '<', $yesterday   );
											$countsamsudinbyo = $samsudinbyo->count();
											$sumsamsudinbyoi = $samsudinbyo->sum('totalitems');
											$sumsamsudinbyoq = $samsudinbyo->sum('totalqty');
											$sumsamsudinbyof = $samsudinbyo->sum('totalfree');
											$sumsamsudinbyod = $samsudinbyo->sum('discount');
											$sumsamsudinbyop = $samsudinbyo->sum('totalprice');
											$beforethreedays = Carbon::yesterday()->subDays(2);
											$thismonth = Carbon::today()->subDays(30);
											$samsudinbtdo = $samsudinorders->where('created_at', '>', $beforethreedays   )->where('created_at', '<', $beforeyesterday   );
											$countsamsudinbtdo = $samsudinbtdo->count();
											$sumsamsudinbtdoi = $samsudinbtdo->sum('totalitems');
											$sumsamsudinbtdoq = $samsudinbtdo->sum('totalqty');
											$sumsamsudinbtdof = $samsudinbtdo->sum('totalfree');
											$sumsamsudinbtdod = $samsudinbtdo->sum('discount');
											$sumsamsudinbtdop = $samsudinbtdo->sum('totalprice');
											$samsudinao = $samsudinorders->where('created_at', '>=', $thismonth);
											$countsamsudinao = $samsudinao->count();
											$sumsamsudinaoi = $samsudinao->sum('totalitems');
											$sumsamsudinaoq = $samsudinao->sum('totalqty');
											$sumsamsudinaof = $samsudinao->sum('totalfree');
											$sumsamsudinaod = $samsudinao->sum('discount');
											$sumsamsudinaop = $samsudinao->sum('totalprice');
											
											/** samsudin STATS END  */
			
			
																		
																			
											/** osama STATS */
															
											$osama = User::select()->where('idnumber', '=', '1141')->first();
											$countosamaorders = Order::where('staffid', '=', $osama->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
											$countosamafp = OrderItems::where('staffid', '=', $osama->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
											$osamaorders = Order::where('staffid', '=', $osama->idnumber)->get();
			
							
											$osamato = $osamaorders->where('created_at',  '>=', $thisday );
											$countosamato = $osamato->count();
											$sumosamatoi = $osamato->sum('totalitems');
											$sumosamatoq = $osamato->sum('totalqty');
											$sumosamatof = $osamato->sum('totalfree');
											$sumosamatod = $osamato->sum('discount');
											$sumosamatop = $osamato->sum('totalprice');
											$onedayago = date("Y-m-d", strtotime( '-1 day' ) );
											$yesterday = Carbon::today()->subDays(1);
											//dump($date);
											$osamayo = $osamaorders->where('created_at', '>=', $yesterday   )->where('created_at', '<', $thisday   );
											$countosamayo = $osamayo->count();
											$sumosamayoi = $osamayo->sum('totalitems');
											$sumosamayoq = $osamayo->sum('totalqty');
											$sumosamayof = $osamayo->sum('totalfree');
											$sumosamayod = $osamayo->sum('discount');
											$sumosamayop = $osamayo->sum('totalprice');
											$beforeyesterday = Carbon::yesterday()->subDays(1);
											$osamabyo = $osamaorders->where('created_at', '>', $beforeyesterday   )->where('created_at', '<', $yesterday   );
											$countosamabyo = $osamabyo->count();
											$sumosamabyoi = $osamabyo->sum('totalitems');
											$sumosamabyoq = $osamabyo->sum('totalqty');
											$sumosamabyof = $osamabyo->sum('totalfree');
											$sumosamabyod = $osamabyo->sum('discount');
											$sumosamabyop = $osamabyo->sum('totalprice');
											$beforethreedays = Carbon::yesterday()->subDays(2);
											$thismonth = Carbon::today()->subDays(30);
											$osamabtdo = $osamaorders->where('created_at', '>', $beforethreedays   )->where('created_at', '<', $beforeyesterday   );
											$countosamabtdo = $osamabtdo->count();
											$sumosamabtdoi = $osamabtdo->sum('totalitems');
											$sumosamabtdoq = $osamabtdo->sum('totalqty');
											$sumosamabtdof = $osamabtdo->sum('totalfree');
											$sumosamabtdod = $osamabtdo->sum('discount');
											$sumosamabtdop = $osamabtdo->sum('totalprice');
											$osamaao = $osamaorders->where('created_at', '>=', $thismonth);
											$countosamaao = $osamaao->count();
											$sumosamaaoi = $osamaao->sum('totalitems');
											$sumosamaaoq = $osamaao->sum('totalqty');
											$sumosamaaof = $osamaao->sum('totalfree');
											$sumosamaaod = $osamaao->sum('discount');
											$sumosamaaop = $osamaao->sum('totalprice');
											
											/** osama STATS END  */
			
			
			
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
											
			
											/* Get Awaden Team Averages */
											$averageataoi = $sumataoi / $countatao;
											$averageataoq = $sumataoq / $countatao;
											$averageataof = $sumataof / $countatao;
											$averageataod = $sumataod / $countatao;
											$averageataop = $sumataop / $countatao;
			
			
																			
											/** ahmedshawqy STATS */
															
											$ahmedshawqy = User::select()->where('idnumber', '=', '1869')->first();
											$countahmedshawqyorders = Order::where('staffid', '=', $ahmedshawqy->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
											$countahmedshawqyfp = OrderItems::where('staffid', '=', $ahmedshawqy->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
											$ahmedshawqyorders = Order::where('staffid', '=', $ahmedshawqy->idnumber)->get();
			
							
											$ahmedshawqyto = $ahmedshawqyorders->where('created_at',  '>=', $thisday );
											$countahmedshawqyto = $ahmedshawqyto->count();
											$sumahmedshawqytoi = $ahmedshawqyto->sum('totalitems');
											$sumahmedshawqytoq = $ahmedshawqyto->sum('totalqty');
											$sumahmedshawqytof = $ahmedshawqyto->sum('totalfree');
											$sumahmedshawqytod = $ahmedshawqyto->sum('discount');
											$sumahmedshawqytop = $ahmedshawqyto->sum('totalprice');
											$onedayago = date("Y-m-d", strtotime( '-1 day' ) );
											$yesterday = Carbon::today()->subDays(1);
											//dump($date);
											$ahmedshawqyyo = $ahmedshawqyorders->where('created_at', '>=', $yesterday   )->where('created_at', '<', $thisday   );
											$countahmedshawqyyo = $ahmedshawqyyo->count();
											$sumahmedshawqyyoi = $ahmedshawqyyo->sum('totalitems');
											$sumahmedshawqyyoq = $ahmedshawqyyo->sum('totalqty');
											$sumahmedshawqyyof = $ahmedshawqyyo->sum('totalfree');
											$sumahmedshawqyyod = $ahmedshawqyyo->sum('discount');
											$sumahmedshawqyyop = $ahmedshawqyyo->sum('totalprice');
											$beforeyesterday = Carbon::yesterday()->subDays(1);
											$ahmedshawqybyo = $ahmedshawqyorders->where('created_at', '>', $beforeyesterday   )->where('created_at', '<', $yesterday   );
											$countahmedshawqybyo = $ahmedshawqybyo->count();
											$sumahmedshawqybyoi = $ahmedshawqybyo->sum('totalitems');
											$sumahmedshawqybyoq = $ahmedshawqybyo->sum('totalqty');
											$sumahmedshawqybyof = $ahmedshawqybyo->sum('totalfree');
											$sumahmedshawqybyod = $ahmedshawqybyo->sum('discount');
											$sumahmedshawqybyop = $ahmedshawqybyo->sum('totalprice');
											$beforethreedays = Carbon::yesterday()->subDays(2);
											$thismonth = Carbon::today()->subDays(30);
											$ahmedshawqybtdo = $ahmedshawqyorders->where('created_at', '>', $beforethreedays   )->where('created_at', '<', $beforeyesterday   );
											$countahmedshawqybtdo = $ahmedshawqybtdo->count();
											$sumahmedshawqybtdoi = $ahmedshawqybtdo->sum('totalitems');
											$sumahmedshawqybtdoq = $ahmedshawqybtdo->sum('totalqty');
											$sumahmedshawqybtdof = $ahmedshawqybtdo->sum('totalfree');
											$sumahmedshawqybtdod = $ahmedshawqybtdo->sum('discount');
											$sumahmedshawqybtdop = $ahmedshawqybtdo->sum('totalprice');
											$ahmedshawqyao = $ahmedshawqyorders->where('created_at', '>=', $thismonth);
											$countahmedshawqyao = $ahmedshawqyao->count();
											$sumahmedshawqyaoi = $ahmedshawqyao->sum('totalitems');
											$sumahmedshawqyaoq = $ahmedshawqyao->sum('totalqty');
											$sumahmedshawqyaof = $ahmedshawqyao->sum('totalfree');
											$sumahmedshawqyaod = $ahmedshawqyao->sum('discount');
											$sumahmedshawqyaop = $ahmedshawqyao->sum('totalprice');
											
											/** ahmedshawqy STATS END  */
			
			
						 
											/** hassanfathi STATS */
															
											$hassanfathi = User::select()->where('idnumber', '=', '4401')->first();
											$counthassanfathiorders = Order::where('staffid', '=', $hassanfathi->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
											$counthassanfathifp = OrderItems::where('staffid', '=', $hassanfathi->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
											$hassanfathiorders = Order::where('staffid', '=', $hassanfathi->idnumber)->get();
			
							
											$hassanfathito = $hassanfathiorders->where('created_at',  '>=', $thisday );
											$counthassanfathito = $hassanfathito->count();
											$sumhassanfathitoi = $hassanfathito->sum('totalitems');
											$sumhassanfathitoq = $hassanfathito->sum('totalqty');
											$sumhassanfathitof = $hassanfathito->sum('totalfree');
											$sumhassanfathitod = $hassanfathito->sum('discount');
											$sumhassanfathitop = $hassanfathito->sum('totalprice');
											$onedayago = date("Y-m-d", strtotime( '-1 day' ) );
											$yesterday = Carbon::today()->subDays(1);
											//dump($date);
											$hassanfathiyo = $hassanfathiorders->where('created_at', '>=', $yesterday   )->where('created_at', '<', $thisday   );
											$counthassanfathiyo = $hassanfathiyo->count();
											$sumhassanfathiyoi = $hassanfathiyo->sum('totalitems');
											$sumhassanfathiyoq = $hassanfathiyo->sum('totalqty');
											$sumhassanfathiyof = $hassanfathiyo->sum('totalfree');
											$sumhassanfathiyod = $hassanfathiyo->sum('discount');
											$sumhassanfathiyop = $hassanfathiyo->sum('totalprice');
											$beforeyesterday = Carbon::yesterday()->subDays(1);
											$hassanfathibyo = $hassanfathiorders->where('created_at', '>', $beforeyesterday   )->where('created_at', '<', $yesterday   );
											$counthassanfathibyo = $hassanfathibyo->count();
											$sumhassanfathibyoi = $hassanfathibyo->sum('totalitems');
											$sumhassanfathibyoq = $hassanfathibyo->sum('totalqty');
											$sumhassanfathibyof = $hassanfathibyo->sum('totalfree');
											$sumhassanfathibyod = $hassanfathibyo->sum('discount');
											$sumhassanfathibyop = $hassanfathibyo->sum('totalprice');
											$beforethreedays = Carbon::yesterday()->subDays(2);
											$thismonth = Carbon::today()->subDays(30);
											$hassanfathibtdo = $hassanfathiorders->where('created_at', '>', $beforethreedays   )->where('created_at', '<', $beforeyesterday   );
											$counthassanfathibtdo = $hassanfathibtdo->count();
											$sumhassanfathibtdoi = $hassanfathibtdo->sum('totalitems');
											$sumhassanfathibtdoq = $hassanfathibtdo->sum('totalqty');
											$sumhassanfathibtdof = $hassanfathibtdo->sum('totalfree');
											$sumhassanfathibtdod = $hassanfathibtdo->sum('discount');
											$sumhassanfathibtdop = $hassanfathibtdo->sum('totalprice');
											$hassanfathiao = $hassanfathiorders->where('created_at', '>=', $thismonth);
											$counthassanfathiao = $hassanfathiao->count();
											$sumhassanfathiaoi = $hassanfathiao->sum('totalitems');
											$sumhassanfathiaoq = $hassanfathiao->sum('totalqty');
											$sumhassanfathiaof = $hassanfathiao->sum('totalfree');
											$sumhassanfathiaod = $hassanfathiao->sum('discount');
											$sumhassanfathiaop = $hassanfathiao->sum('totalprice');
											
											/** hassanfathi STATS END  */
			
			
						 
											/** hashem STATS */
															
											$hashem = User::select()->where('idnumber', '=', '3761')->first();
											$counthashemorders = Order::where('staffid', '=', $hashem->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
											$counthashemfp = OrderItems::where('staffid', '=', $hashem->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
											$hashemorders = Order::where('staffid', '=', $hashem->idnumber)->get();
			
							
											$hashemto = $hashemorders->where('created_at',  '>=', $thisday );
											$counthashemto = $hashemto->count();
											$sumhashemtoi = $hashemto->sum('totalitems');
											$sumhashemtoq = $hashemto->sum('totalqty');
											$sumhashemtof = $hashemto->sum('totalfree');
											$sumhashemtod = $hashemto->sum('discount');
											$sumhashemtop = $hashemto->sum('totalprice');
											$onedayago = date("Y-m-d", strtotime( '-1 day' ) );
											$yesterday = Carbon::today()->subDays(1);
											//dump($date);
											$hashemyo = $hashemorders->where('created_at', '>=', $yesterday   )->where('created_at', '<', $thisday   );
											$counthashemyo = $hashemyo->count();
											$sumhashemyoi = $hashemyo->sum('totalitems');
											$sumhashemyoq = $hashemyo->sum('totalqty');
											$sumhashemyof = $hashemyo->sum('totalfree');
											$sumhashemyod = $hashemyo->sum('discount');
											$sumhashemyop = $hashemyo->sum('totalprice');
											$beforeyesterday = Carbon::yesterday()->subDays(1);
											$hashembyo = $hashemorders->where('created_at', '>', $beforeyesterday   )->where('created_at', '<', $yesterday   );
											$counthashembyo = $hashembyo->count();
											$sumhashembyoi = $hashembyo->sum('totalitems');
											$sumhashembyoq = $hashembyo->sum('totalqty');
											$sumhashembyof = $hashembyo->sum('totalfree');
											$sumhashembyod = $hashembyo->sum('discount');
											$sumhashembyop = $hashembyo->sum('totalprice');
											$beforethreedays = Carbon::yesterday()->subDays(2);
											$thismonth = Carbon::today()->subDays(30);
											$hashembtdo = $hashemorders->where('created_at', '>', $beforethreedays   )->where('created_at', '<', $beforeyesterday   );
											$counthashembtdo = $hashembtdo->count();
											$sumhashembtdoi = $hashembtdo->sum('totalitems');
											$sumhashembtdoq = $hashembtdo->sum('totalqty');
											$sumhashembtdof = $hashembtdo->sum('totalfree');
											$sumhashembtdod = $hashembtdo->sum('discount');
											$sumhashembtdop = $hashembtdo->sum('totalprice');
											$hashemao = $hashemorders->where('created_at', '>=', $thismonth);
											$counthashemao = $hashemao->count();
											$sumhashemaoi = $hashemao->sum('totalitems');
											$sumhashemaoq = $hashemao->sum('totalqty');
											$sumhashemaof = $hashemao->sum('totalfree');
											$sumhashemaod = $hashemao->sum('discount');
											$sumhashemaop = $hashemao->sum('totalprice');
											
											/** hashem STATS END  */
						 
											/** medhathassan STATS */
															
											$medhathassan = User::select()->where('idnumber', '=', '4417')->first();
											$countmedhathassanorders = Order::where('staffid', '=', $medhathassan->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
											$countmedhathassanfp = OrderItems::where('staffid', '=', $medhathassan->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
											$medhathassanorders = Order::where('staffid', '=', $medhathassan->idnumber)->get();
			
							
											$medhathassanto = $medhathassanorders->where('created_at',  '>=', $thisday );
											$countmedhathassanto = $medhathassanto->count();
											$summedhathassantoi = $medhathassanto->sum('totalitems');
											$summedhathassantoq = $medhathassanto->sum('totalqty');
											$summedhathassantof = $medhathassanto->sum('totalfree');
											$summedhathassantod = $medhathassanto->sum('discount');
											$summedhathassantop = $medhathassanto->sum('totalprice');
											$onedayago = date("Y-m-d", strtotime( '-1 day' ) );
											$yesterday = Carbon::today()->subDays(1);
											//dump($date);
											$medhathassanyo = $medhathassanorders->where('created_at', '>=', $yesterday   )->where('created_at', '<', $thisday   );
											$countmedhathassanyo = $medhathassanyo->count();
											$summedhathassanyoi = $medhathassanyo->sum('totalitems');
											$summedhathassanyoq = $medhathassanyo->sum('totalqty');
											$summedhathassanyof = $medhathassanyo->sum('totalfree');
											$summedhathassanyod = $medhathassanyo->sum('discount');
											$summedhathassanyop = $medhathassanyo->sum('totalprice');
											$beforeyesterday = Carbon::yesterday()->subDays(1);
											$medhathassanbyo = $medhathassanorders->where('created_at', '>', $beforeyesterday   )->where('created_at', '<', $yesterday   );
											$countmedhathassanbyo = $medhathassanbyo->count();
											$summedhathassanbyoi = $medhathassanbyo->sum('totalitems');
											$summedhathassanbyoq = $medhathassanbyo->sum('totalqty');
											$summedhathassanbyof = $medhathassanbyo->sum('totalfree');
											$summedhathassanbyod = $medhathassanbyo->sum('discount');
											$summedhathassanbyop = $medhathassanbyo->sum('totalprice');
											$beforethreedays = Carbon::yesterday()->subDays(2);
											$thismonth = Carbon::today()->subDays(30);
											$medhathassanbtdo = $medhathassanorders->where('created_at', '>', $beforethreedays   )->where('created_at', '<', $beforeyesterday   );
											$countmedhathassanbtdo = $medhathassanbtdo->count();
											$summedhathassanbtdoi = $medhathassanbtdo->sum('totalitems');
											$summedhathassanbtdoq = $medhathassanbtdo->sum('totalqty');
											$summedhathassanbtdof = $medhathassanbtdo->sum('totalfree');
											$summedhathassanbtdod = $medhathassanbtdo->sum('discount');
											$summedhathassanbtdop = $medhathassanbtdo->sum('totalprice');
											$medhathassanao = $medhathassanorders->where('created_at', '>=', $thismonth);
											$countmedhathassanao = $medhathassanao->count();
											$summedhathassanaoi = $medhathassanao->sum('totalitems');
											$summedhathassanaoq = $medhathassanao->sum('totalqty');
											$summedhathassanaof = $medhathassanao->sum('totalfree');
											$summedhathassanaod = $medhathassanao->sum('discount');
											$summedhathassanaop = $medhathassanao->sum('totalprice');
											
											/** medhathassan STATS END  */
			
			
			
											/** AWADEN TEAM STATS END */
			
			
			
							//dump($ftbyo);
			
				 
			
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
			
			
							/* Get Hazim Team Averages */
							$averageqtaoi = $sumqtaoi / $countqtao;
							$averageqtaoq = $sumqtaoq / $countqtao;
							$averageqtaof = $sumqtaof / $countqtao;
							$averageqtaod = $sumqtaod / $countqtao;
							$averageqtaop = $sumqtaop / $countqtao;
			
			
			
			
			
			
			
						 
											/** suneer STATS */
															
											$suneer = User::select()->where('idnumber', '=', '466')->first();
											$countsuneerorders = Order::where('staffid', '=', $suneer->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
											$countsuneerfp = OrderItems::where('staffid', '=', $suneer->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
											$suneerorders = Order::where('staffid', '=', $suneer->idnumber)->get();
			
							
											$suneerto = $suneerorders->where('created_at',  '>=', $thisday );
											$countsuneerto = $suneerto->count();
											$sumsuneertoi = $suneerto->sum('totalitems');
											$sumsuneertoq = $suneerto->sum('totalqty');
											$sumsuneertof = $suneerto->sum('totalfree');
											$sumsuneertod = $suneerto->sum('discount');
											$sumsuneertop = $suneerto->sum('totalprice');
											$onedayago = date("Y-m-d", strtotime( '-1 day' ) );
											$yesterday = Carbon::today()->subDays(1);
											//dump($date);
											$suneeryo = $suneerorders->where('created_at', '>=', $yesterday   )->where('created_at', '<', $thisday   );
											$countsuneeryo = $suneeryo->count();
											$sumsuneeryoi = $suneeryo->sum('totalitems');
											$sumsuneeryoq = $suneeryo->sum('totalqty');
											$sumsuneeryof = $suneeryo->sum('totalfree');
											$sumsuneeryod = $suneeryo->sum('discount');
											$sumsuneeryop = $suneeryo->sum('totalprice');
											$beforeyesterday = Carbon::yesterday()->subDays(1);
											$suneerbyo = $suneerorders->where('created_at', '>', $beforeyesterday   )->where('created_at', '<', $yesterday   );
											$countsuneerbyo = $suneerbyo->count();
											$sumsuneerbyoi = $suneerbyo->sum('totalitems');
											$sumsuneerbyoq = $suneerbyo->sum('totalqty');
											$sumsuneerbyof = $suneerbyo->sum('totalfree');
											$sumsuneerbyod = $suneerbyo->sum('discount');
											$sumsuneerbyop = $suneerbyo->sum('totalprice');
											$beforethreedays = Carbon::yesterday()->subDays(2);
											$thismonth = Carbon::today()->subDays(30);
											$suneerbtdo = $suneerorders->where('created_at', '>', $beforethreedays   )->where('created_at', '<', $beforeyesterday   );
											$countsuneerbtdo = $suneerbtdo->count();
											$sumsuneerbtdoi = $suneerbtdo->sum('totalitems');
											$sumsuneerbtdoq = $suneerbtdo->sum('totalqty');
											$sumsuneerbtdof = $suneerbtdo->sum('totalfree');
											$sumsuneerbtdod = $suneerbtdo->sum('discount');
											$sumsuneerbtdop = $suneerbtdo->sum('totalprice');
											$suneerao = $suneerorders->where('created_at', '>=', $thismonth);
											$countsuneerao = $suneerao->count();
											$sumsuneeraoi = $suneerao->sum('totalitems');
											$sumsuneeraoq = $suneerao->sum('totalqty');
											$sumsuneeraof = $suneerao->sum('totalfree');
											$sumsuneeraod = $suneerao->sum('discount');
											$sumsuneeraop = $suneerao->sum('totalprice');
											
											/** suneer STATS END  */
						 
			
			
						 
											/** fahadhussein STATS */
															
											$fahadhussein = User::select()->where('idnumber', '=', '2508')->first();
											$countfahadhusseinorders = Order::where('staffid', '=', $fahadhussein->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
											$countfahadhusseinfp = OrderItems::where('staffid', '=', $fahadhussein->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
											$fahadhusseinorders = Order::where('staffid', '=', $fahadhussein->idnumber)->get();
			
							
											$fahadhusseinto = $fahadhusseinorders->where('created_at',  '>=', $thisday );
											$countfahadhusseinto = $fahadhusseinto->count();
											$sumfahadhusseintoi = $fahadhusseinto->sum('totalitems');
											$sumfahadhusseintoq = $fahadhusseinto->sum('totalqty');
											$sumfahadhusseintof = $fahadhusseinto->sum('totalfree');
											$sumfahadhusseintod = $fahadhusseinto->sum('discount');
											$sumfahadhusseintop = $fahadhusseinto->sum('totalprice');
											$onedayago = date("Y-m-d", strtotime( '-1 day' ) );
											$yesterday = Carbon::today()->subDays(1);
											//dump($date);
											$fahadhusseinyo = $fahadhusseinorders->where('created_at', '>=', $yesterday   )->where('created_at', '<', $thisday   );
											$countfahadhusseinyo = $fahadhusseinyo->count();
											$sumfahadhusseinyoi = $fahadhusseinyo->sum('totalitems');
											$sumfahadhusseinyoq = $fahadhusseinyo->sum('totalqty');
											$sumfahadhusseinyof = $fahadhusseinyo->sum('totalfree');
											$sumfahadhusseinyod = $fahadhusseinyo->sum('discount');
											$sumfahadhusseinyop = $fahadhusseinyo->sum('totalprice');
											$beforeyesterday = Carbon::yesterday()->subDays(1);
											$fahadhusseinbyo = $fahadhusseinorders->where('created_at', '>', $beforeyesterday   )->where('created_at', '<', $yesterday   );
											$countfahadhusseinbyo = $fahadhusseinbyo->count();
											$sumfahadhusseinbyoi = $fahadhusseinbyo->sum('totalitems');
											$sumfahadhusseinbyoq = $fahadhusseinbyo->sum('totalqty');
											$sumfahadhusseinbyof = $fahadhusseinbyo->sum('totalfree');
											$sumfahadhusseinbyod = $fahadhusseinbyo->sum('discount');
											$sumfahadhusseinbyop = $fahadhusseinbyo->sum('totalprice');
											$beforethreedays = Carbon::yesterday()->subDays(2);
											$thismonth = Carbon::today()->subDays(30);
											$fahadhusseinbtdo = $fahadhusseinorders->where('created_at', '>', $beforethreedays   )->where('created_at', '<', $beforeyesterday   );
											$countfahadhusseinbtdo = $fahadhusseinbtdo->count();
											$sumfahadhusseinbtdoi = $fahadhusseinbtdo->sum('totalitems');
											$sumfahadhusseinbtdoq = $fahadhusseinbtdo->sum('totalqty');
											$sumfahadhusseinbtdof = $fahadhusseinbtdo->sum('totalfree');
											$sumfahadhusseinbtdod = $fahadhusseinbtdo->sum('discount');
											$sumfahadhusseinbtdop = $fahadhusseinbtdo->sum('totalprice');
											$fahadhusseinao = $fahadhusseinorders->where('created_at', '>=', $thismonth);
											$countfahadhusseinao = $fahadhusseinao->count();
											$sumfahadhusseinaoi = $fahadhusseinao->sum('totalitems');
											$sumfahadhusseinaoq = $fahadhusseinao->sum('totalqty');
											$sumfahadhusseinaof = $fahadhusseinao->sum('totalfree');
											$sumfahadhusseinaod = $fahadhusseinao->sum('discount');
											$sumfahadhusseinaop = $fahadhusseinao->sum('totalprice');
											
											/** fahadhussein STATS END  */
						 
			
			
			
											/** sultansalman STATS */
															
											$sultansalman = User::select()->where('idnumber', '=', '1621')->first();
											$countsultansalmanorders = Order::where('staffid', '=', $sultansalman->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
											$countsultansalmanfp = OrderItems::where('staffid', '=', $sultansalman->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
											$sultansalmanorders = Order::where('staffid', '=', $sultansalman->idnumber)->get();
			
							
											$sultansalmanto = $sultansalmanorders->where('created_at',  '>=', $thisday );
											$countsultansalmanto = $sultansalmanto->count();
											$sumsultansalmantoi = $sultansalmanto->sum('totalitems');
											$sumsultansalmantoq = $sultansalmanto->sum('totalqty');
											$sumsultansalmantof = $sultansalmanto->sum('totalfree');
											$sumsultansalmantod = $sultansalmanto->sum('discount');
											$sumsultansalmantop = $sultansalmanto->sum('totalprice');
											$onedayago = date("Y-m-d", strtotime( '-1 day' ) );
											$yesterday = Carbon::today()->subDays(1);
											//dump($date);
											$sultansalmanyo = $sultansalmanorders->where('created_at', '>=', $yesterday   )->where('created_at', '<', $thisday   );
											$countsultansalmanyo = $sultansalmanyo->count();
											$sumsultansalmanyoi = $sultansalmanyo->sum('totalitems');
											$sumsultansalmanyoq = $sultansalmanyo->sum('totalqty');
											$sumsultansalmanyof = $sultansalmanyo->sum('totalfree');
											$sumsultansalmanyod = $sultansalmanyo->sum('discount');
											$sumsultansalmanyop = $sultansalmanyo->sum('totalprice');
											$beforeyesterday = Carbon::yesterday()->subDays(1);
											$sultansalmanbyo = $sultansalmanorders->where('created_at', '>', $beforeyesterday   )->where('created_at', '<', $yesterday   );
											$countsultansalmanbyo = $sultansalmanbyo->count();
											$sumsultansalmanbyoi = $sultansalmanbyo->sum('totalitems');
											$sumsultansalmanbyoq = $sultansalmanbyo->sum('totalqty');
											$sumsultansalmanbyof = $sultansalmanbyo->sum('totalfree');
											$sumsultansalmanbyod = $sultansalmanbyo->sum('discount');
											$sumsultansalmanbyop = $sultansalmanbyo->sum('totalprice');
											$beforethreedays = Carbon::yesterday()->subDays(2);
											$thismonth = Carbon::today()->subDays(30);
											$sultansalmanbtdo = $sultansalmanorders->where('created_at', '>', $beforethreedays   )->where('created_at', '<', $beforeyesterday   );
											$countsultansalmanbtdo = $sultansalmanbtdo->count();
											$sumsultansalmanbtdoi = $sultansalmanbtdo->sum('totalitems');
											$sumsultansalmanbtdoq = $sultansalmanbtdo->sum('totalqty');
											$sumsultansalmanbtdof = $sultansalmanbtdo->sum('totalfree');
											$sumsultansalmanbtdod = $sultansalmanbtdo->sum('discount');
											$sumsultansalmanbtdop = $sultansalmanbtdo->sum('totalprice');
											$sultansalmanao = $sultansalmanorders->where('created_at', '>=', $thismonth);
											$countsultansalmanao = $sultansalmanao->count();
											$sumsultansalmanaoi = $sultansalmanao->sum('totalitems');
											$sumsultansalmanaoq = $sultansalmanao->sum('totalqty');
											$sumsultansalmanaof = $sultansalmanao->sum('totalfree');
											$sumsultansalmanaod = $sultansalmanao->sum('discount');
											$sumsultansalmanaop = $sultansalmanao->sum('totalprice');
											
											/** sultansalman STATS END  */
						 
			
			
			
											/** medhat STATS */
															
											$medhat = User::select()->where('idnumber', '=', '4241')->first();
											$countmedhatorders = Order::where('staffid', '=', $medhat->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
											$countmedhatfp = OrderItems::where('staffid', '=', $medhat->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();
											$medhatorders = Order::where('staffid', '=', $medhat->idnumber)->get();
			
							
											$medhatto = $medhatorders->where('created_at',  '>=', $thisday );
											$countmedhatto = $medhatto->count();
											$summedhattoi = $medhatto->sum('totalitems');
											$summedhattoq = $medhatto->sum('totalqty');
											$summedhattof = $medhatto->sum('totalfree');
											$summedhattod = $medhatto->sum('discount');
											$summedhattop = $medhatto->sum('totalprice');
											$onedayago = date("Y-m-d", strtotime( '-1 day' ) );
											$yesterday = Carbon::today()->subDays(1);
											//dump($date);
											$medhatyo = $medhatorders->where('created_at', '>=', $yesterday   )->where('created_at', '<', $thisday   );
											$countmedhatyo = $medhatyo->count();
											$summedhatyoi = $medhatyo->sum('totalitems');
											$summedhatyoq = $medhatyo->sum('totalqty');
											$summedhatyof = $medhatyo->sum('totalfree');
											$summedhatyod = $medhatyo->sum('discount');
											$summedhatyop = $medhatyo->sum('totalprice');
											$beforeyesterday = Carbon::yesterday()->subDays(1);
											$medhatbyo = $medhatorders->where('created_at', '>', $beforeyesterday   )->where('created_at', '<', $yesterday   );
											$countmedhatbyo = $medhatbyo->count();
											$summedhatbyoi = $medhatbyo->sum('totalitems');
											$summedhatbyoq = $medhatbyo->sum('totalqty');
											$summedhatbyof = $medhatbyo->sum('totalfree');
											$summedhatbyod = $medhatbyo->sum('discount');
											$summedhatbyop = $medhatbyo->sum('totalprice');
											$beforethreedays = Carbon::yesterday()->subDays(2);
											$thismonth = Carbon::today()->subDays(30);
											$medhatbtdo = $medhatorders->where('created_at', '>', $beforethreedays   )->where('created_at', '<', $beforeyesterday   );
											$countmedhatbtdo = $medhatbtdo->count();
											$summedhatbtdoi = $medhatbtdo->sum('totalitems');
											$summedhatbtdoq = $medhatbtdo->sum('totalqty');
											$summedhatbtdof = $medhatbtdo->sum('totalfree');
											$summedhatbtdod = $medhatbtdo->sum('discount');
											$summedhatbtdop = $medhatbtdo->sum('totalprice');
											$medhatao = $medhatorders->where('created_at', '>=', $thismonth);
											$countmedhatao = $medhatao->count();
											$summedhataoi = $medhatao->sum('totalitems');
											$summedhataoq = $medhatao->sum('totalqty');
											$summedhataof = $medhatao->sum('totalfree');
											$summedhataod = $medhatao->sum('discount');
											$summedhataop = $medhatao->sum('totalprice');
											
											/** medhat STATS END  */
						 
			
			
			
			
			
			
			
							/** QASSIM TEAM STATS END */
			
							/** QAAIM END */
			
			
			
			
			
							$sumtodaydiscounts = $sumfttod + $sumhttod + $sumattod + $sumqttod;
							$sumtodaytotalprice = $sumfttop + $sumhttop + $sumattop + $sumqttop;
							$sumyestedaydiscounts = $sumftyod + $sumhtyod + $sumatyod + $sumqtyod;
							$sumyestedaytotalprice = $sumftyop + $sumhtyop + $sumatyop + $sumqtyop;
							$sumalldiscounts = $sumftaod + $sumhtaod + $sumataod + $sumqtaod;
							$sumalltotalprice = $sumftaop + $sumhtaop + $sumataop + $sumqtaop;
			
			

			/*dump([ 
				$currentuser->name => $idnumber,
				'Todays Team Total Sales' => number_format($sumthisdayorders) . '.00 SAR',
				'Yesterdays Team Total Sales' => number_format($sumyesterdaysales) . '.00 SAR',
				'Total Team Sales' => number_format($sumawadenteamsales) . '.00 SAR',
				'Account Created' => $currentuser->created_at->diffForHumans()
			]);*/	
//dump($hazemteam);
		return view ('dashboard.manager')
		->withOrder($order)
		->with('hasanrabah', $hasanrabah)
		->with('bashar', $bashar)

		->with('sumfirasteamsales', $sumfirasteamsales)

		->with('sumhazemteamsales', $sumhazemteamsales)
		->with('sumawadenteamsales', $sumawadenteamsales)

		->with('firasteam', $firasteam)

		->with('hazemteam', $hazemteam)

		->with('awadenteam', $awadenteam)


		
		->with('sumtodaydiscounts', $sumtodaydiscounts )
		->with('sumtodaytotalprice', $sumtodaytotalprice )
		->with('sumyestedaydiscounts', $sumyestedaydiscounts )
		->with('sumyestedaytotalprice', $sumyestedaytotalprice )
		->with('sumalldiscounts', $sumalldiscounts )
		->with('sumalltotalprice', $sumalltotalprice )

		
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
		->with('averageftaoi', $averageftaoi)
		->with('averageftaoq', $averageftaoq)
		->with('averageftaof', $averageftaof)
		->with('averageftaod', $averageftaod)
		->with('averageftaop', $averageftaop)
		
		
		
		
		
		->with('michael', $michael)
		->with('countmichaelorders', $countmichaelorders)
		->with('countmichaelfp', $countmichaelfp) 
		->with('michaelto', $michaelto)
		->with('countmichaelto', $countmichaelto)
		->with('summichaeltoi', $summichaeltoi)
		->with('summichaeltoq', $summichaeltoq)
		->with('summichaeltof', $summichaeltof)
		->with('summichaeltod', $summichaeltod)
		->with('summichaeltop', $summichaeltop)
		->with('michaelyo', $michaelyo)
		->with('countmichaelyo', $countmichaelyo)
		->with('summichaelyoi', $summichaelyoi)
		->with('summichaelyoq', $summichaelyoq)
		->with('summichaelyof', $summichaelyof)
		->with('summichaelyod', $summichaelyod)
		->with('summichaelyop', $summichaelyop)
		->with('michaelbyo', $michaelbyo)
		->with('countmichaelbyo', $countmichaelbyo)
		->with('summichaelbyoi', $summichaelbyoi)
		->with('summichaelbyoq', $summichaelbyoq)
		->with('summichaelbyof', $summichaelbyof)
		->with('summichaelbyod', $summichaelbyod)
		->with('summichaelbyop', $summichaelbyop)
		->with('michaelbtdo', $michaelbtdo)
		->with('countmichaelbtdo', $countmichaelbtdo)
		->with('summichaelbtdoi', $summichaelbtdoi)
		->with('summichaelbtdoq', $summichaelbtdoq)
		->with('summichaelbtdof', $summichaelbtdof)
		->with('summichaelbtdod', $summichaelbtdod)
		->with('summichaelbtdop', $summichaelbtdop)
		->with('michaelao', $michaelao)
		->with('countmichaelao', $countmichaelao)
		->with('summichaelaoi', $summichaelaoi)
		->with('summichaelaoq', $summichaelaoq)
		->with('summichaelaof', $summichaelaof)
		->with('summichaelaod', $summichaelaod)
		->with('summichaelaop', $summichaelaop)

		
		->with('fahaddahasy', $fahaddahasy)
		->with('countfahaddahasyorders', $countfahaddahasyorders)
		->with('countfahaddahasyfp', $countfahaddahasyfp) 
		->with('fahaddahasyto', $fahaddahasyto)
		->with('countfahaddahasyto', $countfahaddahasyto)
		->with('sumfahaddahasytoi', $sumfahaddahasytoi)
		->with('sumfahaddahasytoq', $sumfahaddahasytoq)
		->with('sumfahaddahasytof', $sumfahaddahasytof)
		->with('sumfahaddahasytod', $sumfahaddahasytod)
		->with('sumfahaddahasytop', $sumfahaddahasytop)
		->with('fahaddahasyyo', $fahaddahasyyo)
		->with('countfahaddahasyyo', $countfahaddahasyyo)
		->with('sumfahaddahasyyoi', $sumfahaddahasyyoi)
		->with('sumfahaddahasyyoq', $sumfahaddahasyyoq)
		->with('sumfahaddahasyyof', $sumfahaddahasyyof)
		->with('sumfahaddahasyyod', $sumfahaddahasyyod)
		->with('sumfahaddahasyyop', $sumfahaddahasyyop)
		->with('fahaddahasybyo', $fahaddahasybyo)
		->with('countfahaddahasybyo', $countfahaddahasybyo)
		->with('sumfahaddahasybyoi', $sumfahaddahasybyoi)
		->with('sumfahaddahasybyoq', $sumfahaddahasybyoq)
		->with('sumfahaddahasybyof', $sumfahaddahasybyof)
		->with('sumfahaddahasybyod', $sumfahaddahasybyod)
		->with('sumfahaddahasybyop', $sumfahaddahasybyop)
		->with('fahaddahasybtdo', $fahaddahasybtdo)
		->with('countfahaddahasybtdo', $countfahaddahasybtdo)
		->with('sumfahaddahasybtdoi', $sumfahaddahasybtdoi)
		->with('sumfahaddahasybtdoq', $sumfahaddahasybtdoq)
		->with('sumfahaddahasybtdof', $sumfahaddahasybtdof)
		->with('sumfahaddahasybtdod', $sumfahaddahasybtdod)
		->with('sumfahaddahasybtdop', $sumfahaddahasybtdop)
		->with('fahaddahasyao', $fahaddahasyao)
		->with('countfahaddahasyao', $countfahaddahasyao)
		->with('sumfahaddahasyaoi', $sumfahaddahasyaoi)
		->with('sumfahaddahasyaoq', $sumfahaddahasyaoq)
		->with('sumfahaddahasyaof', $sumfahaddahasyaof)
		->with('sumfahaddahasyaod', $sumfahaddahasyaod)
		->with('sumfahaddahasyaop', $sumfahaddahasyaop)
		
		->with('abdullahnaser', $abdullahnaser)
		->with('countabdullahnaserorders', $countabdullahnaserorders)
		->with('countabdullahnaserfp', $countabdullahnaserfp) 
		->with('abdullahnaserto', $abdullahnaserto)
		->with('countabdullahnaserto', $countabdullahnaserto)
		->with('sumabdullahnasertoi', $sumabdullahnasertoi)
		->with('sumabdullahnasertoq', $sumabdullahnasertoq)
		->with('sumabdullahnasertof', $sumabdullahnasertof)
		->with('sumabdullahnasertod', $sumabdullahnasertod)
		->with('sumabdullahnasertop', $sumabdullahnasertop)
		->with('abdullahnaseryo', $abdullahnaseryo)
		->with('countabdullahnaseryo', $countabdullahnaseryo)
		->with('sumabdullahnaseryoi', $sumabdullahnaseryoi)
		->with('sumabdullahnaseryoq', $sumabdullahnaseryoq)
		->with('sumabdullahnaseryof', $sumabdullahnaseryof)
		->with('sumabdullahnaseryod', $sumabdullahnaseryod)
		->with('sumabdullahnaseryop', $sumabdullahnaseryop)
		->with('abdullahnaserbyo', $abdullahnaserbyo)
		->with('countabdullahnaserbyo', $countabdullahnaserbyo)
		->with('sumabdullahnaserbyoi', $sumabdullahnaserbyoi)
		->with('sumabdullahnaserbyoq', $sumabdullahnaserbyoq)
		->with('sumabdullahnaserbyof', $sumabdullahnaserbyof)
		->with('sumabdullahnaserbyod', $sumabdullahnaserbyod)
		->with('sumabdullahnaserbyop', $sumabdullahnaserbyop)
		->with('abdullahnaserbtdo', $abdullahnaserbtdo)
		->with('countabdullahnaserbtdo', $countabdullahnaserbtdo)
		->with('sumabdullahnaserbtdoi', $sumabdullahnaserbtdoi)
		->with('sumabdullahnaserbtdoq', $sumabdullahnaserbtdoq)
		->with('sumabdullahnaserbtdof', $sumabdullahnaserbtdof)
		->with('sumabdullahnaserbtdod', $sumabdullahnaserbtdod)
		->with('sumabdullahnaserbtdop', $sumabdullahnaserbtdop)
		->with('abdullahnaserao', $abdullahnaserao)
		->with('countabdullahnaserao', $countabdullahnaserao)
		->with('sumabdullahnaseraoi', $sumabdullahnaseraoi)
		->with('sumabdullahnaseraoq', $sumabdullahnaseraoq)
		->with('sumabdullahnaseraof', $sumabdullahnaseraof)
		->with('sumabdullahnaseraod', $sumabdullahnaseraod)
		->with('sumabdullahnaseraop', $sumabdullahnaseraop)

		
		->with('ahmedmedhat', $ahmedmedhat)
		->with('countahmedmedhatorders', $countahmedmedhatorders)
		->with('countahmedmedhatfp', $countahmedmedhatfp) 
		->with('ahmedmedhatto', $ahmedmedhatto)
		->with('countahmedmedhatto', $countahmedmedhatto)
		->with('sumahmedmedhattoi', $sumahmedmedhattoi)
		->with('sumahmedmedhattoq', $sumahmedmedhattoq)
		->with('sumahmedmedhattof', $sumahmedmedhattof)
		->with('sumahmedmedhattod', $sumahmedmedhattod)
		->with('sumahmedmedhattop', $sumahmedmedhattop)
		->with('ahmedmedhatyo', $ahmedmedhatyo)
		->with('countahmedmedhatyo', $countahmedmedhatyo)
		->with('sumahmedmedhatyoi', $sumahmedmedhatyoi)
		->with('sumahmedmedhatyoq', $sumahmedmedhatyoq)
		->with('sumahmedmedhatyof', $sumahmedmedhatyof)
		->with('sumahmedmedhatyod', $sumahmedmedhatyod)
		->with('sumahmedmedhatyop', $sumahmedmedhatyop)
		->with('ahmedmedhatbyo', $ahmedmedhatbyo)
		->with('countahmedmedhatbyo', $countahmedmedhatbyo)
		->with('sumahmedmedhatbyoi', $sumahmedmedhatbyoi)
		->with('sumahmedmedhatbyoq', $sumahmedmedhatbyoq)
		->with('sumahmedmedhatbyof', $sumahmedmedhatbyof)
		->with('sumahmedmedhatbyod', $sumahmedmedhatbyod)
		->with('sumahmedmedhatbyop', $sumahmedmedhatbyop)
		->with('ahmedmedhatbtdo', $ahmedmedhatbtdo)
		->with('countahmedmedhatbtdo', $countahmedmedhatbtdo)
		->with('sumahmedmedhatbtdoi', $sumahmedmedhatbtdoi)
		->with('sumahmedmedhatbtdoq', $sumahmedmedhatbtdoq)
		->with('sumahmedmedhatbtdof', $sumahmedmedhatbtdof)
		->with('sumahmedmedhatbtdod', $sumahmedmedhatbtdod)
		->with('sumahmedmedhatbtdop', $sumahmedmedhatbtdop)
		->with('ahmedmedhatao', $ahmedmedhatao)
		->with('countahmedmedhatao', $countahmedmedhatao)
		->with('sumahmedmedhataoi', $sumahmedmedhataoi)
		->with('sumahmedmedhataoq', $sumahmedmedhataoq)
		->with('sumahmedmedhataof', $sumahmedmedhataof)
		->with('sumahmedmedhataod', $sumahmedmedhataod)
		->with('sumahmedmedhataop', $sumahmedmedhataop)





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
		

		->with('averagehtaoi', $averagehtaoi)
		->with('averagehtaoq', $averagehtaoq)
		->with('averagehtaof', $averagehtaof)
		->with('averagehtaod', $averagehtaod)
		->with('averagehtaop', $averagehtaop)
		
		
		->with('noufal', $noufal)
		->with('countnoufalorders', $countnoufalorders)
		->with('countnoufalfp', $countnoufalfp) 
		->with('noufalto', $noufalto)
		->with('countnoufalto', $countnoufalto)
		->with('sumnoufaltoi', $sumnoufaltoi)
		->with('sumnoufaltoq', $sumnoufaltoq)
		->with('sumnoufaltof', $sumnoufaltof)
		->with('sumnoufaltod', $sumnoufaltod)
		->with('sumnoufaltop', $sumnoufaltop)
		->with('noufalyo', $noufalyo)
		->with('countnoufalyo', $countnoufalyo)
		->with('sumnoufalyoi', $sumnoufalyoi)
		->with('sumnoufalyoq', $sumnoufalyoq)
		->with('sumnoufalyof', $sumnoufalyof)
		->with('sumnoufalyod', $sumnoufalyod)
		->with('sumnoufalyop', $sumnoufalyop)
		->with('noufalbyo', $noufalbyo)
		->with('countnoufalbyo', $countnoufalbyo)
		->with('sumnoufalbyoi', $sumnoufalbyoi)
		->with('sumnoufalbyoq', $sumnoufalbyoq)
		->with('sumnoufalbyof', $sumnoufalbyof)
		->with('sumnoufalbyod', $sumnoufalbyod)
		->with('sumnoufalbyop', $sumnoufalbyop)
		->with('noufalbtdo', $noufalbtdo)
		->with('countnoufalbtdo', $countnoufalbtdo)
		->with('sumnoufalbtdoi', $sumnoufalbtdoi)
		->with('sumnoufalbtdoq', $sumnoufalbtdoq)
		->with('sumnoufalbtdof', $sumnoufalbtdof)
		->with('sumnoufalbtdod', $sumnoufalbtdod)
		->with('sumnoufalbtdop', $sumnoufalbtdop)
		->with('noufalao', $noufalao)
		->with('countnoufalao', $countnoufalao)
		->with('sumnoufalaoi', $sumnoufalaoi)
		->with('sumnoufalaoq', $sumnoufalaoq)
		->with('sumnoufalaof', $sumnoufalaof)
		->with('sumnoufalaod', $sumnoufalaod)
		->with('sumnoufalaop', $sumnoufalaop)

		->with('ruben', $ruben)
		->with('countrubenorders', $countrubenorders)
		->with('countrubenfp', $countrubenfp) 
		->with('rubento', $rubento)
		->with('countrubento', $countrubento)
		->with('sumrubentoi', $sumrubentoi)
		->with('sumrubentoq', $sumrubentoq)
		->with('sumrubentof', $sumrubentof)
		->with('sumrubentod', $sumrubentod)
		->with('sumrubentop', $sumrubentop)
		->with('rubenyo', $rubenyo)
		->with('countrubenyo', $countrubenyo)
		->with('sumrubenyoi', $sumrubenyoi)
		->with('sumrubenyoq', $sumrubenyoq)
		->with('sumrubenyof', $sumrubenyof)
		->with('sumrubenyod', $sumrubenyod)
		->with('sumrubenyop', $sumrubenyop)
		->with('rubenbyo', $rubenbyo)
		->with('countrubenbyo', $countrubenbyo)
		->with('sumrubenbyoi', $sumrubenbyoi)
		->with('sumrubenbyoq', $sumrubenbyoq)
		->with('sumrubenbyof', $sumrubenbyof)
		->with('sumrubenbyod', $sumrubenbyod)
		->with('sumrubenbyop', $sumrubenbyop)
		->with('rubenbtdo', $rubenbtdo)
		->with('countrubenbtdo', $countrubenbtdo)
		->with('sumrubenbtdoi', $sumrubenbtdoi)
		->with('sumrubenbtdoq', $sumrubenbtdoq)
		->with('sumrubenbtdof', $sumrubenbtdof)
		->with('sumrubenbtdod', $sumrubenbtdod)
		->with('sumrubenbtdop', $sumrubenbtdop)
		->with('rubenao', $rubenao)
		->with('countrubenao', $countrubenao)
		->with('sumrubenaoi', $sumrubenaoi)
		->with('sumrubenaoq', $sumrubenaoq)
		->with('sumrubenaof', $sumrubenaof)
		->with('sumrubenaod', $sumrubenaod)
		->with('sumrubenaop', $sumrubenaop)

		
		->with('samsudin', $samsudin)
		->with('countsamsudinorders', $countsamsudinorders)
		->with('countsamsudinfp', $countsamsudinfp) 
		->with('samsudinto', $samsudinto)
		->with('countsamsudinto', $countsamsudinto)
		->with('sumsamsudintoi', $sumsamsudintoi)
		->with('sumsamsudintoq', $sumsamsudintoq)
		->with('sumsamsudintof', $sumsamsudintof)
		->with('sumsamsudintod', $sumsamsudintod)
		->with('sumsamsudintop', $sumsamsudintop)
		->with('samsudinyo', $samsudinyo)
		->with('countsamsudinyo', $countsamsudinyo)
		->with('sumsamsudinyoi', $sumsamsudinyoi)
		->with('sumsamsudinyoq', $sumsamsudinyoq)
		->with('sumsamsudinyof', $sumsamsudinyof)
		->with('sumsamsudinyod', $sumsamsudinyod)
		->with('sumsamsudinyop', $sumsamsudinyop)
		->with('samsudinbyo', $samsudinbyo)
		->with('countsamsudinbyo', $countsamsudinbyo)
		->with('sumsamsudinbyoi', $sumsamsudinbyoi)
		->with('sumsamsudinbyoq', $sumsamsudinbyoq)
		->with('sumsamsudinbyof', $sumsamsudinbyof)
		->with('sumsamsudinbyod', $sumsamsudinbyod)
		->with('sumsamsudinbyop', $sumsamsudinbyop)
		->with('samsudinbtdo', $samsudinbtdo)
		->with('countsamsudinbtdo', $countsamsudinbtdo)
		->with('sumsamsudinbtdoi', $sumsamsudinbtdoi)
		->with('sumsamsudinbtdoq', $sumsamsudinbtdoq)
		->with('sumsamsudinbtdof', $sumsamsudinbtdof)
		->with('sumsamsudinbtdod', $sumsamsudinbtdod)
		->with('sumsamsudinbtdop', $sumsamsudinbtdop)
		->with('samsudinao', $samsudinao)
		->with('countsamsudinao', $countsamsudinao)
		->with('sumsamsudinaoi', $sumsamsudinaoi)
		->with('sumsamsudinaoq', $sumsamsudinaoq)
		->with('sumsamsudinaof', $sumsamsudinaof)
		->with('sumsamsudinaod', $sumsamsudinaod)
		->with('sumsamsudinaop', $sumsamsudinaop)


		
		->with('osama', $osama)
		->with('countosamaorders', $countosamaorders)
		->with('countosamafp', $countosamafp) 
		->with('osamato', $osamato)
		->with('countosamato', $countosamato)
		->with('sumosamatoi', $sumosamatoi)
		->with('sumosamatoq', $sumosamatoq)
		->with('sumosamatof', $sumosamatof)
		->with('sumosamatod', $sumosamatod)
		->with('sumosamatop', $sumosamatop)
		->with('osamayo', $osamayo)
		->with('countosamayo', $countosamayo)
		->with('sumosamayoi', $sumosamayoi)
		->with('sumosamayoq', $sumosamayoq)
		->with('sumosamayof', $sumosamayof)
		->with('sumosamayod', $sumosamayod)
		->with('sumosamayop', $sumosamayop)
		->with('osamabyo', $osamabyo)
		->with('countosamabyo', $countosamabyo)
		->with('sumosamabyoi', $sumosamabyoi)
		->with('sumosamabyoq', $sumosamabyoq)
		->with('sumosamabyof', $sumosamabyof)
		->with('sumosamabyod', $sumosamabyod)
		->with('sumosamabyop', $sumosamabyop)
		->with('osamabtdo', $osamabtdo)
		->with('countosamabtdo', $countosamabtdo)
		->with('sumosamabtdoi', $sumosamabtdoi)
		->with('sumosamabtdoq', $sumosamabtdoq)
		->with('sumosamabtdof', $sumosamabtdof)
		->with('sumosamabtdod', $sumosamabtdod)
		->with('sumosamabtdop', $sumosamabtdop)
		->with('osamaao', $osamaao)
		->with('countosamaao', $countosamaao)
		->with('sumosamaaoi', $sumosamaaoi)
		->with('sumosamaaoq', $sumosamaaoq)
		->with('sumosamaaof', $sumosamaaof)
		->with('sumosamaaod', $sumosamaaod)
		->with('sumosamaaop', $sumosamaaop)
 
		







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
		
		
		->with('averageataoi', $averageataoi)
		->with('averageataoq', $averageataoq)
		->with('averageataof', $averageataof)
		->with('averageataod', $averageataod)
		->with('averageataop', $averageataop)

		
		->with('ahmedshawqy', $ahmedshawqy)
		->with('countahmedshawqyorders', $countahmedshawqyorders)
		->with('countahmedshawqyfp', $countahmedshawqyfp) 
		->with('ahmedshawqyto', $ahmedshawqyto)
		->with('countahmedshawqyto', $countahmedshawqyto)
		->with('sumahmedshawqytoi', $sumahmedshawqytoi)
		->with('sumahmedshawqytoq', $sumahmedshawqytoq)
		->with('sumahmedshawqytof', $sumahmedshawqytof)
		->with('sumahmedshawqytod', $sumahmedshawqytod)
		->with('sumahmedshawqytop', $sumahmedshawqytop)
		->with('ahmedshawqyyo', $ahmedshawqyyo)
		->with('countahmedshawqyyo', $countahmedshawqyyo)
		->with('sumahmedshawqyyoi', $sumahmedshawqyyoi)
		->with('sumahmedshawqyyoq', $sumahmedshawqyyoq)
		->with('sumahmedshawqyyof', $sumahmedshawqyyof)
		->with('sumahmedshawqyyod', $sumahmedshawqyyod)
		->with('sumahmedshawqyyop', $sumahmedshawqyyop)
		->with('ahmedshawqybyo', $ahmedshawqybyo)
		->with('countahmedshawqybyo', $countahmedshawqybyo)
		->with('sumahmedshawqybyoi', $sumahmedshawqybyoi)
		->with('sumahmedshawqybyoq', $sumahmedshawqybyoq)
		->with('sumahmedshawqybyof', $sumahmedshawqybyof)
		->with('sumahmedshawqybyod', $sumahmedshawqybyod)
		->with('sumahmedshawqybyop', $sumahmedshawqybyop)
		->with('ahmedshawqybtdo', $ahmedshawqybtdo)
		->with('countahmedshawqybtdo', $countahmedshawqybtdo)
		->with('sumahmedshawqybtdoi', $sumahmedshawqybtdoi)
		->with('sumahmedshawqybtdoq', $sumahmedshawqybtdoq)
		->with('sumahmedshawqybtdof', $sumahmedshawqybtdof)
		->with('sumahmedshawqybtdod', $sumahmedshawqybtdod)
		->with('sumahmedshawqybtdop', $sumahmedshawqybtdop)
		->with('ahmedshawqyao', $ahmedshawqyao)
		->with('countahmedshawqyao', $countahmedshawqyao)
		->with('sumahmedshawqyaoi', $sumahmedshawqyaoi)
		->with('sumahmedshawqyaoq', $sumahmedshawqyaoq)
		->with('sumahmedshawqyaof', $sumahmedshawqyaof)
		->with('sumahmedshawqyaod', $sumahmedshawqyaod)
		->with('sumahmedshawqyaop', $sumahmedshawqyaop)
	

		
		->with('hassanfathi', $hassanfathi)
		->with('counthassanfathiorders', $counthassanfathiorders)
		->with('counthassanfathifp', $counthassanfathifp) 
		->with('hassanfathito', $hassanfathito)
		->with('counthassanfathito', $counthassanfathito)
		->with('sumhassanfathitoi', $sumhassanfathitoi)
		->with('sumhassanfathitoq', $sumhassanfathitoq)
		->with('sumhassanfathitof', $sumhassanfathitof)
		->with('sumhassanfathitod', $sumhassanfathitod)
		->with('sumhassanfathitop', $sumhassanfathitop)
		->with('hassanfathiyo', $hassanfathiyo)
		->with('counthassanfathiyo', $counthassanfathiyo)
		->with('sumhassanfathiyoi', $sumhassanfathiyoi)
		->with('sumhassanfathiyoq', $sumhassanfathiyoq)
		->with('sumhassanfathiyof', $sumhassanfathiyof)
		->with('sumhassanfathiyod', $sumhassanfathiyod)
		->with('sumhassanfathiyop', $sumhassanfathiyop)
		->with('hassanfathibyo', $hassanfathibyo)
		->with('counthassanfathibyo', $counthassanfathibyo)
		->with('sumhassanfathibyoi', $sumhassanfathibyoi)
		->with('sumhassanfathibyoq', $sumhassanfathibyoq)
		->with('sumhassanfathibyof', $sumhassanfathibyof)
		->with('sumhassanfathibyod', $sumhassanfathibyod)
		->with('sumhassanfathibyop', $sumhassanfathibyop)
		->with('hassanfathibtdo', $hassanfathibtdo)
		->with('counthassanfathibtdo', $counthassanfathibtdo)
		->with('sumhassanfathibtdoi', $sumhassanfathibtdoi)
		->with('sumhassanfathibtdoq', $sumhassanfathibtdoq)
		->with('sumhassanfathibtdof', $sumhassanfathibtdof)
		->with('sumhassanfathibtdod', $sumhassanfathibtdod)
		->with('sumhassanfathibtdop', $sumhassanfathibtdop)
		->with('hassanfathiao', $hassanfathiao)
		->with('counthassanfathiao', $counthassanfathiao)
		->with('sumhassanfathiaoi', $sumhassanfathiaoi)
		->with('sumhassanfathiaoq', $sumhassanfathiaoq)
		->with('sumhassanfathiaof', $sumhassanfathiaof)
		->with('sumhassanfathiaod', $sumhassanfathiaod)
		->with('sumhassanfathiaop', $sumhassanfathiaop)
	



		
		->with('hashem', $hashem)
		->with('counthashemorders', $counthashemorders)
		->with('counthashemfp', $counthashemfp) 
		->with('hashemto', $hashemto)
		->with('counthashemto', $counthashemto)
		->with('sumhashemtoi', $sumhashemtoi)
		->with('sumhashemtoq', $sumhashemtoq)
		->with('sumhashemtof', $sumhashemtof)
		->with('sumhashemtod', $sumhashemtod)
		->with('sumhashemtop', $sumhashemtop)
		->with('hashemyo', $hashemyo)
		->with('counthashemyo', $counthashemyo)
		->with('sumhashemyoi', $sumhashemyoi)
		->with('sumhashemyoq', $sumhashemyoq)
		->with('sumhashemyof', $sumhashemyof)
		->with('sumhashemyod', $sumhashemyod)
		->with('sumhashemyop', $sumhashemyop)
		->with('hashembyo', $hashembyo)
		->with('counthashembyo', $counthashembyo)
		->with('sumhashembyoi', $sumhashembyoi)
		->with('sumhashembyoq', $sumhashembyoq)
		->with('sumhashembyof', $sumhashembyof)
		->with('sumhashembyod', $sumhashembyod)
		->with('sumhashembyop', $sumhashembyop)
		->with('hashembtdo', $hashembtdo)
		->with('counthashembtdo', $counthashembtdo)
		->with('sumhashembtdoi', $sumhashembtdoi)
		->with('sumhashembtdoq', $sumhashembtdoq)
		->with('sumhashembtdof', $sumhashembtdof)
		->with('sumhashembtdod', $sumhashembtdod)
		->with('sumhashembtdop', $sumhashembtdop)
		->with('hashemao', $hashemao)
		->with('counthashemao', $counthashemao)
		->with('sumhashemaoi', $sumhashemaoi)
		->with('sumhashemaoq', $sumhashemaoq)
		->with('sumhashemaof', $sumhashemaof)
		->with('sumhashemaod', $sumhashemaod)
		->with('sumhashemaop', $sumhashemaop)
	



		
		->with('medhathassan', $medhathassan)
		->with('countmedhathassanorders', $countmedhathassanorders)
		->with('countmedhathassanfp', $countmedhathassanfp) 
		->with('medhathassanto', $medhathassanto)
		->with('countmedhathassanto', $countmedhathassanto)
		->with('summedhathassantoi', $summedhathassantoi)
		->with('summedhathassantoq', $summedhathassantoq)
		->with('summedhathassantof', $summedhathassantof)
		->with('summedhathassantod', $summedhathassantod)
		->with('summedhathassantop', $summedhathassantop)
		->with('medhathassanyo', $medhathassanyo)
		->with('countmedhathassanyo', $countmedhathassanyo)
		->with('summedhathassanyoi', $summedhathassanyoi)
		->with('summedhathassanyoq', $summedhathassanyoq)
		->with('summedhathassanyof', $summedhathassanyof)
		->with('summedhathassanyod', $summedhathassanyod)
		->with('summedhathassanyop', $summedhathassanyop)
		->with('medhathassanbyo', $medhathassanbyo)
		->with('countmedhathassanbyo', $countmedhathassanbyo)
		->with('summedhathassanbyoi', $summedhathassanbyoi)
		->with('summedhathassanbyoq', $summedhathassanbyoq)
		->with('summedhathassanbyof', $summedhathassanbyof)
		->with('summedhathassanbyod', $summedhathassanbyod)
		->with('summedhathassanbyop', $summedhathassanbyop)
		->with('medhathassanbtdo', $medhathassanbtdo)
		->with('countmedhathassanbtdo', $countmedhathassanbtdo)
		->with('summedhathassanbtdoi', $summedhathassanbtdoi)
		->with('summedhathassanbtdoq', $summedhathassanbtdoq)
		->with('summedhathassanbtdof', $summedhathassanbtdof)
		->with('summedhathassanbtdod', $summedhathassanbtdod)
		->with('summedhathassanbtdop', $summedhathassanbtdop)
		->with('medhathassanao', $medhathassanao)
		->with('countmedhathassanao', $countmedhathassanao)
		->with('summedhathassanaoi', $summedhathassanaoi)
		->with('summedhathassanaoq', $summedhathassanaoq)
		->with('summedhathassanaof', $summedhathassanaof)
		->with('summedhathassanaod', $summedhathassanaod)
		->with('summedhathassanaop', $summedhathassanaop)
	












		->with('mohammedsayed', $mohammedsayed)
		->with('countmohammedsayedorders', $countmohammedsayedorders)
		->with('countmohammedsayedfp', $countmohammedsayedfp) 
		->with('mohammedsayedto', $mohammedsayedto)
		->with('countmohammedsayedto', $countmohammedsayedto)
		->with('summohammedsayedtoi', $summohammedsayedtoi)
		->with('summohammedsayedtoq', $summohammedsayedtoq)
		->with('summohammedsayedtof', $summohammedsayedtof)
		->with('summohammedsayedtod', $summohammedsayedtod)
		->with('summohammedsayedtop', $summohammedsayedtop)
		->with('mohammedsayedyo', $mohammedsayedyo)
		->with('countmohammedsayedyo', $countmohammedsayedyo)
		->with('summohammedsayedyoi', $summohammedsayedyoi)
		->with('summohammedsayedyoq', $summohammedsayedyoq)
		->with('summohammedsayedyof', $summohammedsayedyof)
		->with('summohammedsayedyod', $summohammedsayedyod)
		->with('summohammedsayedyop', $summohammedsayedyop)
		->with('mohammedsayedbyo', $mohammedsayedbyo)
		->with('countmohammedsayedbyo', $countmohammedsayedbyo)
		->with('summohammedsayedbyoi', $summohammedsayedbyoi)
		->with('summohammedsayedbyoq', $summohammedsayedbyoq)
		->with('summohammedsayedbyof', $summohammedsayedbyof)
		->with('summohammedsayedbyod', $summohammedsayedbyod)
		->with('summohammedsayedbyop', $summohammedsayedbyop)
		->with('mohammedsayedbtdo', $mohammedsayedbtdo)
		->with('countmohammedsayedbtdo', $countmohammedsayedbtdo)
		->with('summohammedsayedbtdoi', $summohammedsayedbtdoi)
		->with('summohammedsayedbtdoq', $summohammedsayedbtdoq)
		->with('summohammedsayedbtdof', $summohammedsayedbtdof)
		->with('summohammedsayedbtdod', $summohammedsayedbtdod)
		->with('summohammedsayedbtdop', $summohammedsayedbtdop)
		->with('mohammedsayedao', $mohammedsayedao)
		->with('countmohammedsayedao', $countmohammedsayedao)
		->with('summohammedsayedaoi', $summohammedsayedaoi)
		->with('summohammedsayedaoq', $summohammedsayedaoq)
		->with('summohammedsayedaof', $summohammedsayedaof)
		->with('summohammedsayedaod', $summohammedsayedaod)
		->with('summohammedsayedaop', $summohammedsayedaop)

		

		

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


		->with('averageqtaoi', $averageqtaoi)
		->with('averageqtaoq', $averageqtaoq)
		->with('averageqtaof', $averageqtaof)
		->with('averageqtaod', $averageqtaod)
		->with('averageqtaop', $averageqtaop)


		
		->with('suneer', $suneer)
		->with('countsuneerorders', $countsuneerorders)
		->with('countsuneerfp', $countsuneerfp) 
		->with('suneerto', $suneerto)
		->with('countsuneerto', $countsuneerto)
		->with('sumsuneertoi', $sumsuneertoi)
		->with('sumsuneertoq', $sumsuneertoq)
		->with('sumsuneertof', $sumsuneertof)
		->with('sumsuneertod', $sumsuneertod)
		->with('sumsuneertop', $sumsuneertop)
		->with('suneeryo', $suneeryo)
		->with('countsuneeryo', $countsuneeryo)
		->with('sumsuneeryoi', $sumsuneeryoi)
		->with('sumsuneeryoq', $sumsuneeryoq)
		->with('sumsuneeryof', $sumsuneeryof)
		->with('sumsuneeryod', $sumsuneeryod)
		->with('sumsuneeryop', $sumsuneeryop)
		->with('suneerbyo', $suneerbyo)
		->with('countsuneerbyo', $countsuneerbyo)
		->with('sumsuneerbyoi', $sumsuneerbyoi)
		->with('sumsuneerbyoq', $sumsuneerbyoq)
		->with('sumsuneerbyof', $sumsuneerbyof)
		->with('sumsuneerbyod', $sumsuneerbyod)
		->with('sumsuneerbyop', $sumsuneerbyop)
		->with('suneerbtdo', $suneerbtdo)
		->with('countsuneerbtdo', $countsuneerbtdo)
		->with('sumsuneerbtdoi', $sumsuneerbtdoi)
		->with('sumsuneerbtdoq', $sumsuneerbtdoq)
		->with('sumsuneerbtdof', $sumsuneerbtdof)
		->with('sumsuneerbtdod', $sumsuneerbtdod)
		->with('sumsuneerbtdop', $sumsuneerbtdop)
		->with('suneerao', $suneerao)
		->with('countsuneerao', $countsuneerao)
		->with('sumsuneeraoi', $sumsuneeraoi)
		->with('sumsuneeraoq', $sumsuneeraoq)
		->with('sumsuneeraof', $sumsuneeraof)
		->with('sumsuneeraod', $sumsuneeraod)
		->with('sumsuneeraop', $sumsuneeraop)
	



		
		->with('fahadhussein', $fahadhussein)
		->with('countfahadhusseinorders', $countfahadhusseinorders)
		->with('countfahadhusseinfp', $countfahadhusseinfp) 
		->with('fahadhusseinto', $fahadhusseinto)
		->with('countfahadhusseinto', $countfahadhusseinto)
		->with('sumfahadhusseintoi', $sumfahadhusseintoi)
		->with('sumfahadhusseintoq', $sumfahadhusseintoq)
		->with('sumfahadhusseintof', $sumfahadhusseintof)
		->with('sumfahadhusseintod', $sumfahadhusseintod)
		->with('sumfahadhusseintop', $sumfahadhusseintop)
		->with('fahadhusseinyo', $fahadhusseinyo)
		->with('countfahadhusseinyo', $countfahadhusseinyo)
		->with('sumfahadhusseinyoi', $sumfahadhusseinyoi)
		->with('sumfahadhusseinyoq', $sumfahadhusseinyoq)
		->with('sumfahadhusseinyof', $sumfahadhusseinyof)
		->with('sumfahadhusseinyod', $sumfahadhusseinyod)
		->with('sumfahadhusseinyop', $sumfahadhusseinyop)
		->with('fahadhusseinbyo', $fahadhusseinbyo)
		->with('countfahadhusseinbyo', $countfahadhusseinbyo)
		->with('sumfahadhusseinbyoi', $sumfahadhusseinbyoi)
		->with('sumfahadhusseinbyoq', $sumfahadhusseinbyoq)
		->with('sumfahadhusseinbyof', $sumfahadhusseinbyof)
		->with('sumfahadhusseinbyod', $sumfahadhusseinbyod)
		->with('sumfahadhusseinbyop', $sumfahadhusseinbyop)
		->with('fahadhusseinbtdo', $fahadhusseinbtdo)
		->with('countfahadhusseinbtdo', $countfahadhusseinbtdo)
		->with('sumfahadhusseinbtdoi', $sumfahadhusseinbtdoi)
		->with('sumfahadhusseinbtdoq', $sumfahadhusseinbtdoq)
		->with('sumfahadhusseinbtdof', $sumfahadhusseinbtdof)
		->with('sumfahadhusseinbtdod', $sumfahadhusseinbtdod)
		->with('sumfahadhusseinbtdop', $sumfahadhusseinbtdop)
		->with('fahadhusseinao', $fahadhusseinao)
		->with('countfahadhusseinao', $countfahadhusseinao)
		->with('sumfahadhusseinaoi', $sumfahadhusseinaoi)
		->with('sumfahadhusseinaoq', $sumfahadhusseinaoq)
		->with('sumfahadhusseinaof', $sumfahadhusseinaof)
		->with('sumfahadhusseinaod', $sumfahadhusseinaod)
		->with('sumfahadhusseinaop', $sumfahadhusseinaop)
	




		
		->with('sultansalman', $sultansalman)
		->with('countsultansalmanorders', $countsultansalmanorders)
		->with('countsultansalmanfp', $countsultansalmanfp) 
		->with('sultansalmanto', $sultansalmanto)
		->with('countsultansalmanto', $countsultansalmanto)
		->with('sumsultansalmantoi', $sumsultansalmantoi)
		->with('sumsultansalmantoq', $sumsultansalmantoq)
		->with('sumsultansalmantof', $sumsultansalmantof)
		->with('sumsultansalmantod', $sumsultansalmantod)
		->with('sumsultansalmantop', $sumsultansalmantop)
		->with('sultansalmanyo', $sultansalmanyo)
		->with('countsultansalmanyo', $countsultansalmanyo)
		->with('sumsultansalmanyoi', $sumsultansalmanyoi)
		->with('sumsultansalmanyoq', $sumsultansalmanyoq)
		->with('sumsultansalmanyof', $sumsultansalmanyof)
		->with('sumsultansalmanyod', $sumsultansalmanyod)
		->with('sumsultansalmanyop', $sumsultansalmanyop)
		->with('sultansalmanbyo', $sultansalmanbyo)
		->with('countsultansalmanbyo', $countsultansalmanbyo)
		->with('sumsultansalmanbyoi', $sumsultansalmanbyoi)
		->with('sumsultansalmanbyoq', $sumsultansalmanbyoq)
		->with('sumsultansalmanbyof', $sumsultansalmanbyof)
		->with('sumsultansalmanbyod', $sumsultansalmanbyod)
		->with('sumsultansalmanbyop', $sumsultansalmanbyop)
		->with('sultansalmanbtdo', $sultansalmanbtdo)
		->with('countsultansalmanbtdo', $countsultansalmanbtdo)
		->with('sumsultansalmanbtdoi', $sumsultansalmanbtdoi)
		->with('sumsultansalmanbtdoq', $sumsultansalmanbtdoq)
		->with('sumsultansalmanbtdof', $sumsultansalmanbtdof)
		->with('sumsultansalmanbtdod', $sumsultansalmanbtdod)
		->with('sumsultansalmanbtdop', $sumsultansalmanbtdop)
		->with('sultansalmanao', $sultansalmanao)
		->with('countsultansalmanao', $countsultansalmanao)
		->with('sumsultansalmanaoi', $sumsultansalmanaoi)
		->with('sumsultansalmanaoq', $sumsultansalmanaoq)
		->with('sumsultansalmanaof', $sumsultansalmanaof)
		->with('sumsultansalmanaod', $sumsultansalmanaod)
		->with('sumsultansalmanaop', $sumsultansalmanaop)
	



		
		->with('medhat', $medhat)
		->with('countmedhatorders', $countmedhatorders)
		->with('countmedhatfp', $countmedhatfp) 
		->with('medhatto', $medhatto)
		->with('countmedhatto', $countmedhatto)
		->with('summedhattoi', $summedhattoi)
		->with('summedhattoq', $summedhattoq)
		->with('summedhattof', $summedhattof)
		->with('summedhattod', $summedhattod)
		->with('summedhattop', $summedhattop)
		->with('medhatyo', $medhatyo)
		->with('countmedhatyo', $countmedhatyo)
		->with('summedhatyoi', $summedhatyoi)
		->with('summedhatyoq', $summedhatyoq)
		->with('summedhatyof', $summedhatyof)
		->with('summedhatyod', $summedhatyod)
		->with('summedhatyop', $summedhatyop)
		->with('medhatbyo', $medhatbyo)
		->with('countmedhatbyo', $countmedhatbyo)
		->with('summedhatbyoi', $summedhatbyoi)
		->with('summedhatbyoq', $summedhatbyoq)
		->with('summedhatbyof', $summedhatbyof)
		->with('summedhatbyod', $summedhatbyod)
		->with('summedhatbyop', $summedhatbyop)
		->with('medhatbtdo', $medhatbtdo)
		->with('countmedhatbtdo', $countmedhatbtdo)
		->with('summedhatbtdoi', $summedhatbtdoi)
		->with('summedhatbtdoq', $summedhatbtdoq)
		->with('summedhatbtdof', $summedhatbtdof)
		->with('summedhatbtdod', $summedhatbtdod)
		->with('summedhatbtdop', $summedhatbtdop)
		->with('medhatao', $medhatao)
		->with('countmedhatao', $countmedhatao)
		->with('summedhataoi', $summedhataoi)
		->with('summedhataoq', $summedhataoq)
		->with('summedhataof', $summedhataof)
		->with('summedhataod', $summedhataod)
		->with('summedhataop', $summedhataop)
	














		->with('countwailorders', $countwailorders)
		




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
		public function getAdmin()
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
			//dump($today);
	
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
			/*dump([ 
				$currentuser->name => $idnumber,
				'Todays Total Sales' => number_format($sumthisdayorders) . '.00 SAR',
				'Yesterdays Total Sales' => number_format($sumyesterdaysales) . '.00 SAR',
				'Total Sales' => number_format($sumallorders) . '.00 SAR',
				'Account Created' => $currentuser->created_at->diffForHumans()
			]);*/
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
			'photo' => Hash::make($request->input('photo')),

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

		/*dump([ 
			$currentuser->name => $idnumber, 
			'Todays Total Sales' => number_format($sumthisdayorders) . '.00 SAR',
			'Yesterdays Total Sales' => number_format($sumyesterdaysales) . '.00 SAR',
			'Total Sales' => number_format($sumallorders) . '.00 SAR'
			]);*/

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