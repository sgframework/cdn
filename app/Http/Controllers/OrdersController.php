<?php

namespace cdn\Http\Controllers;
use cdn\Models\Branch;
use cdn\Models\Order;
use cdn\Models\OrderItems;
use cdn\Models\Item;
use cdn\Models\Itemv2;
use cdn\Mail\OrderSubmitted;
use cdn\User;
use ZipArchive;
use DB;
use Mail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Auth;
use Maatwebsite\Excel\Facades\Excel;
use Exportable;
use Paginate;
use Session;
use Illuminate\Support\Facades\Cache;


class OrdersController extends Controller
{
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

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
     * Get a validator for an incoming registration request.
     *
     * @param  Request  $request
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(Request $request)
    {
        return Validator::make($request, [
            'ordernumber' => ['required', 'string', 'max:255'],
            'staffname' => ['required', 'string', 'max:255'],
            'staffid' => ['required', 'decimal', 'max:255'],
            'ponumber' => ['required', 'string', 'max:255'],
            'branchnumber' => ['required'],
            'branchname' => ['required'],
            'itemnumber' => ['integer', 'max:255'],
            'orderitems' => ['string', 'max:255'],
            'itemqty' => ['integer', 'max:255'],
            'freeitem' => ['integer', 'max:255'],
            'itemprice' => ['decimal', 'max:255'],
            'urgent' => ['string', 'max:255'],
            'orderstatus' => ['string', 'max:255'],
            'slug' => ['string', 'max:255']
        ]);
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $request
     * @return \cdn\Order
     */
    protected function InsertOrders(Request $request)
    {
        Order::create([
            'ordernumber' => $request['ordernumber'],
            'staffname' => $request['staffname'],
            'staffid' => $request['staffid'],
            'ponumber' => $request['ponumber'],
            'branchnumber' => $request['branchnumber'],
            'branchname' => $request['branchname'],
            'itemnumber' => $request['itemnumber'],
            'orderitems' => $request['orderitems'],
            'itemqty' => $request['itemqty'],
            'freeitem' => $request['freeitem'],
            'itemprice' => $request['itemprice'],
            'urgent' => $request['urgent'],
            'orderstatus' => $request['orderstatus'],
            'slug' => $request['slug'],
        ]);
        $orders = Order::select('ordernumber', 'staffname', 'staffid', 'ponumber', 'branchnumber', 'branchname', 'urgent')->orderBy('updated_at', 'desc')->paginate(10);

        return redirect()->route('orders.index')->with('orders', $orders)->with('info', 'Your order has been created');
    }    	

        public function getOrders(Request $orderstatus)
        {
            $orders = Order::select('ordernumber', 'staffname', 'staffid', 'ponumber', 'branchnumber', 'branchname', 'urgent', 'slug', 'created_at', 'updated_at')->orderBy('updated_at', 'desc')->paginate(10);
            $orderitems = OrderItems::select('ordernumber', 'orderstatus', 'created_at', 'updated_at')->get();
            $branches = Branch::select('branchname', 'branchnumber')->get();
            return view('orders.index')->with('orderitems', $orderitems)->with('orders', $orders)->with('branches', $branches);
        }
        public function addUrgentOrder()
        {
            return view ('orders.urgent');
        }
        public function addOrder()
        {
            //$items = Item::select('itemnumber', 'itemname', 'itemprice', 'itemsku', 'plant', 'instock', 'link', 'type')->orderBy('created_at', 'desc')->paginate(10);
            //$branches = Branch::select('branchname', 'branchnumber')->get();
            $branch = Branch::select('branchname', 'branchnumber')->first();
            $currentuser = \Auth::user();
            $lastorder = Order::select()->where('staffid', '=', $currentuser->idnumber)->orderBy('created_at', 'desc')->first();
            $sequence = $currentuser->dc;
            $branches_list = DB::table('branches')
            ->where('salesgroup', '=', $currentuser->idnumber)
            ->get();
            //dump($branches_list);
            /*$branches_list1 = DB::table('branches')
            ->where('dc', '=', '24')
            ->get();*/
            return view ('orders.add')->with('branch', $branch)->with('sequence', $sequence)->with('branches_list', $branches_list)->with('lastorder', $lastorder);
        }
        public function listOthiam()
        {
            $branches = Branch::select('branchname')->where('branchname', 'LIKE', 'Othaim ')->get();
            /*$branches = DB::table('branches')
            ->where('branchname', 'LIKE', 'Othaim ')
            ->get(['branchname', 'branchnumber', 'dc']);*/
            //dump($branches);
            $branches_list1 = DB::table('branches')
            ->where('dc', '=', '24')
            ->get();
            //dump($branches_list1);
            $items = Item::select('itemnumber', 'itemname', 'itemprice', 'itemsku', 'plant', 'instock', 'link', 'type')->orderBy('created_at', 'desc')->paginate(10);
            return view ('tests.index')->with('items', $items)->with('branches', $branches)->with('branches_list1', $branches_list1);
        }
        public function addOrderStep1()
        {
            return view ('orders.partials.step1');
        }
        public function insertOrderStep1(Request $request)
        {
        $slug = $request['ordernumber'] . "-" . $request['ponumber'];
        $this->validate($request, [
            'orderid' => 'max:255',
            'ponumber' => 'required|max:20|unique:orders',
            'branchnumber' => 'required|max:255',
            'branchname' => 'max:255',
        ]);
            //$string = "123,456,78,000";  
            $split = preg_split("/\-/", $request['branchnumber'], 1);  
            $branchnumber = implode("-",$split);
            $branchname = implode("-",$split);
            $status = 'JustCreated';
            //dump($branchname);
            //dump($branchnumber);
            Order::create([
                'ordernumber' => $request['ordernumber'],
                'staffname' => $request['staffname'],
                'staffid' => $request['staffid'],
                'ponumber' => $request['ponumber'],
                'branchnumber' => $branchnumber,
                'branchname' => $branchname,
                'urgent' => $request['urgent'],
                'slug' => $slug,
                'status' => $status,
                'created_at' => $request['created_at'],
                
                ]);
            OrderItems::create([
                'ordernumber' => $request['ordernumber'],
                'staffname' => $request['staffname'],
                'staffid' => $request['staffid'],
                'ponumber' => $request['ponumber'],
                'branchnumber' => $request['branchnumber'],
                'itemnumber' => $request['itemnumber'],
                'orderitems' => $request['orderitems'],
                'itemqty' => $request['itemqty'],
                'freeitem' => $request['freeitem'],
                'itemprice' => $request['itemprice'],
                'orderstatus' => $status,
                'slug' => $slug,
            ]);
            $slug = $request['ordernumber'] . "-" . $request['ponumber'];
            session_reset();
            $request->session()->put('ordernumber', $request->ordernumber);
            $request->session()->put('staffid', $request->staffid);
            $request->session()->put('ponumber', $request->ponumber);
            $request->session()->put('branchnumber', $request->branchnumber);
            $request->session()->put('branchname', $request->branchname);
            $request->session()->put('status', $status);
            $request->session()->put('slug', $slug);
            $request->session()->put('created_at', $request->created_at);
            $order = Order::where('slug', '=', $slug)->first();
            /*Mail::send('orders.partials.step2',['ordernumber' => $request['ordernumber'],'ponumber' => $request['ponumber'],], function($message) {
                $message
                ->to('root@ipool.remotewebaccess.com')
                ->subject('New Order Just Created');
            });*/
            $branch =  Branch::where('branchnumber', '=', 'branchname')->get(['branchname']);
            $slug = $request['ordernumber'] . "-" . $request['ponumber'];
            //$items = Item::select('itemnumber', 'itemname', 'itemprice', 'itemsku', 'plant', 'instock', 'link', 'type');
            //$branches = Branch::select('logo');
            return redirect()->route('orders.partials.step2')->with('slug', $slug)->with('branch', $branch)->with('alert', 'Success. An email has been sent to sales processing team. you can add items to yor order now. ')->with('info', 'Your order has been created successfully, you can proceed adding items to your order.');
        }
        public function addOrderStep2()
        {
            $items = Item::select('itemnumber', 'itemname', 'itemprice', 'itemsku', 'plant', 'instock', 'link', 'type')->orderBy('created_at', 'desc')->paginate(10);
            $branches = Branch::select('branchname', 'branchnumber')->orderBy('created_at', 'desc');
            $slug = Session::get('ordernumber') . "-" . Session::get('ponumber');
            $order = Order::where('slug', '=', $slug)->first(); 
            //dump($order);
            return view ('orders.partials.step2')->with('order', $order)->with('items', $items)->with('branches', $branches);
        }
        public function insertOrderStep2(Request $request)
        {      
            return view('dashboard.orders');
        }
        public function postReply(Request $request, $orderid)
        {
            $this->validate($request, [
               "order-{$orderid}" => 'required|max:10000',
           ], [
               'required' => 'The reply body is required.'
           
           ]);
           
            $order = Order::notReply()->find($orderid);
           
           if (!$order) {
               return redirect()->route('global.index');
           }
           
                   if (!Auth::user()->isFriendsWith($status->user) && Auth::user()->id !== $status->user->idnumber) {
               return redirect()->route('global.index');
           }
            $item = Order::create([
                'body' => $request->input("order-{$orderid}"),
            ])->user()->associate(Auth::user());           
            $order->items()->save($item);
            return redirect()->back();           
        }


        public function getOrdersbyUser($idnumber)
        {
            $id = User::where('idnumber', '=', $idnumber)->first();
            $items = Item::all();
            $branches = Branch::all();
            //$orders = Order::all()->where('ordernumber', '=', $ordernumber)->first();
            $currentuser = \Auth::user();
            $orderid = DB::table('orders')
            ->where('staffid', '=', $currentuser->idnumber)
            ->get();           
            $orders = Order::where('staffid', '=', $currentuser->idnumber)
            ->get();
            $ordernumber = OrderItems::select()->where('staffid', '=', $currentuser->idnumber)->get();
            $ponumber = OrderItems::select('ponumber')->where('staffid', '=', $currentuser->idnumber)->get();
            //dump($ponumber);
            $slug = OrderItems::select('slug')->where('staffid', '=', $currentuser->idnumber)->get();                       
            $orderitems = OrderItems::where('staffid', '=', $currentuser->idnumber)
            ->get();
            $currentuser = \Auth::user();
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

            return view('dashboard.orders')
                    ->withOrder($orderid)
                    ->with('orders', $orders)
                    ->with('orderitems', $orderitems)
                    ->with('items', $items)
                    ->with('branches', $branches)
                    ->with('ordernumber', $ordernumber)
                    ->with('ponumber', $ponumber)
                    ->with('slug', $slug)         
                    ->with('id', $id);            
        }

        public function getOrderNumber($slug)
        {
            $order = Order::where('slug', '=', $slug)->first();
            //dump($order);
            $orderitems = OrderItems::where('slug', '=', $slug)->orderBy('created_at', 'desc')->get();
            $ordernumber = $order;
            $orderitemslug = OrderItems::where('slug', $slug)->first(); 
            // ** MAIN DUMP **//
            //dump($orderitems);
            // ** MAIN DUMP **//
            $completedorders = Order::select()->where('staffid', '=', \Auth::user()->idnumber)->where('status', '=', 'Completed')->orderBy('updated_at', 'asc')->get();

            $branchname = Order::select('branchname')->where('slug', '=', $slug)->get();
            $branchnumber = Order::select('branchnumber')->where('slug', '=', $slug)->get();
            $status = Order::select('status')->where('slug', '=', $slug)->get();
            $items = Item::select('itemnumber', 'itemname', 'itemprice', 'itemsku', 'plant', 'instock', 'link', 'type')->whereNotNull('itemname')->orderBy('itemname', 'asc')->get();
            return view('orders.order')
                    ->withOrder($order)
                    ->with('status', $status)
                    ->with('items', $items)
                    ->with('branchnumber', $branchnumber)
                    ->with('branchname', $branchname)
                    ->with('orderitems', $orderitems)
                    ->with('orderitemslug', $orderitemslug)
                    ->with('completedorders', $completedorders)
                    ->with('submitted', 'Your order is in view mood only, you can`t make no changes !');
        }
        public function editOrderNumber($slug)
        {
            $order = Order::where('slug', '=', $slug)->first();
            $orderitems = OrderItems::where('slug', '=', $slug)->orderBy('created_at', 'desc')->get();
            $ordernumber = $order;
            $orderitemslug = OrderItems::where('slug', $slug)->first(); 
            // ** MAIN DUMP **//
            //dump(['Order Items#', $orderitems]);
            // ** MAIN DUMP **//
            $items = Item::select()->whereNotNull('itemname')->orderBy('itemname', 'asc')->get();
            //dump(['Order Items#', $items]);
            $currentuser = \Auth::user();
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
            //dump(['Todays Total Sales', $sumthisdayorders . '.00 SAR']);
            //dump(['Yesterdays Total Sales', $sumyesterdaysales . '.00 SAR']);
            //dump(['Total Sales', $sumallorders . '.00 SAR']);
            $branchname = Order::select('branchname')->where('slug', '=', $slug)->get();
            $branchnumber = Order::select('branchnumber')->where('slug', '=', $slug)->get();
            $status = Order::select('status')->where('slug', '=', $slug)->get();
            return view('orders.edit')
                ->withOrder($order)
                ->with('status', $status)
                ->with('items', $items)
                ->with('branchnumber', $branchnumber)
                ->with('branchname', $branchname)
                ->with('orderitems', $orderitems)
                ->with('orderitemslug', $orderitemslug);
        }
        public function insertOrderItems(Request $request, $slug)
        {
            $this->validate($request, [
                'orderid' => 'max:255',
                'orderitems' => 'max:255',
                'ponumber' => 'max:255',
                'itemnumber' => 'required|max:255',
                'itemqty' => 'required|max:20',
                'freeitem' => 'max:20',
                'itemoldprice' => 'max:20',
                'itemnewprice' => 'max:20',
                'totalqtyprice' => 'max:20',
                'orderstatus' => 'max:255',
                'askedprice' => 'max:20',
            ]);

            $remeberitems = Cache::rememberForever('itemsv2', function () {
                return DB::table('itemsv2')->get();
            });
            //$inputData = $request->all();
            //$orderitems = OrderItems::find($slug); 
            //$orderitems->update($inputData);
            $order = OrderItems::where('slug', $slug)->first();           
            $split = preg_split("/\-/", $request['itemnumber'], -1);  
            $orderitems = implode("-",$split);
            $itemnumber = implode("-",$split);
            //$orderitems =  OrderItems::select('itemnumber')->where('slug', '=', $slug)->orderBy('created_at', 'desc')->get();
            //dump($orderitems);
            //$query = $request->input('itemnumber');
            //$itemnumber1 = Item::where(DB::raw("CONCAT(itemnumber, '', 'orderitems')"), 'LIKE', "%{$query}%")
            //->orWhere('itemnumber', 'LIKE', "%{$query}%")->get();
            $staffid = \Auth::user()->idnumber;
            $staffname = \Auth::user()->name;
            $branchnumber = Order::select('branchnumber')->where('slug', '=', $slug)->get();
            $branchname = Order::select('branchname')->where('slug', '=', $slug)->get();
            $ponumber = Order::select('ponumber')->where('slug', '=', $slug)->get();
            //$itemnumber = Item::select('itemnumber')->where('itemnumber', '=', $request['itemnumber'])->get();
            $items = Itemv2::all();
            $reviewitems = OrderItems::select('itemnumber')->where('slug', '=', $slug)->get();
            //$itemprice = Item::select('itemprice')->where('itemnumber', '=', $request['itemnumber'])->get();
            $belongstaffid = Order::where('slug', '=', $slug)->first();
            //dump(['By', $belongstaffid->staffname, 'ID', $belongstaffid->staffid]);
            $belongbranch = Order::select('branchname')->where('slug', '=', $slug)->first();
            
            $othaimorpanda = $belongbranch->where('', 'LIKE', 'Othaim')->orWhere('', 'LIKE', 'Panda');
            $allnewpricelist = 
            //dump(['Branch#Name', $belongbranch->branchname]);
            $orderitemslist = OrderItems::select('itemnumber')->where('slug', '=', $slug)->orderBy('created_at', 'desc')->whereNotNull('itemnumber')->first();
            $orderitemnumber = $orderitemslist;
            //dump(['Order Item#', $orderitemnumber]);
            $belongorderitems = OrderItems::where('orderitems', '=', $items)->get();
            $belongitem = Itemv2::where('itemnumber', '=', $request['itemnumber'])->whereNotNull('itemnumber')->first();

            $belongoldprice = $belongitem->itemoldprice;
            $belongnewprice = $belongitem->itemnewprice;
            //$totalqtyprice = $belongitem->itemprice * $request['itemqty'];
            $totalqtyprice = $belongitem->itemnewprice * $request['itemqty'];
            //dump(['Order Name', $belongorderitems]);
            //dump(['Item Data', $belongitem]);
            //dump(['Item Price', $belongprice]);
            //dump($itemprice);

            $askedprice = $request['askedprice'];

            OrderItems::create([
            'staffid' => $staffid,
            'staffname' => $staffname,
            'ponumber' => $ponumber,
            /*'branchnumber' => $branchnumber,
            'branchname' => $branchname,*/
            'itemnumber' => $itemnumber,
            'orderitems' => $orderitems,
            'itemqty' => $request['itemqty'],
            'freeitem' => $request['freeitem'],
            'itemoldprice' => $belongoldprice,
            'itemnewprice' => $belongnewprice,
            'totalqtyprice' => $totalqtyprice,
            'orderstatus' => 'Editing',
            'slug' => $slug,
            'askedprice' =>  $askedprice

            ]);
            $remeberitems = Cache::rememberForever('orderitems', function () {
                return DB::table('orderitems')->get();
            });
            Order::where('slug', $slug)->update(['updated_at' => now(), 'status' => 'Editing']);
            //Response::json( $order );
            $orders = Order::all();
            $orderitems = OrderItems::all();
            return redirect()->back()->with('required', 'This field is required')->with('alert', 'Your item have been inserted successfully.');
        }
        public function addOrderUrgent()
        {
            return view ('urgent.add');
        }
        public function addRtvOrder()
        {
            return view ('rtvs.add');
        }
        public function reviewOrderItems(Request $request, $slug)
        {

            Order::where('slug', $slug)->update(['updated_at' => now(), 'status' => 'Reviewing']);
            $currentuser = \Auth::user();
            $status = Order::select('status')->where('slug', '=', $slug)->get();
            $order = Order::where('slug', '=', $slug)->first();
            $getOnlySlug = OrderItems::select('slug')->where('slug', '=', $order)->first();
            //dump($slug);         
            $orderitems =  OrderItems::where('slug', '=', $slug)->orderBy('created_at', 'desc')->get();
            //dump($orderitems);
            $itemnumber = $slug;
            $staffid = \Auth::user()->idnumber;
            $staffname = \Auth::user()->name;
            $ordernumber = OrderItems::select('ordernumber')->where('staffid', '=', $currentuser->idnumber)->first();
            $branchnumber = Order::select('branchnumber')->where('slug', '=', $slug)->first();
            $branchname = Order::select('branchname')->where('slug', '=', $slug)->first();
            $table = OrderItems::all()->where('slug', '=', $slug);
            $reviewitems = OrderItems::select()->where('slug', '=', $slug)->whereNull('branchnumber')->whereNotNull('ponumber')->orderBy('created_at', 'desc')->get();
            //dump($reviewitems);
            $orderitems =  OrderItems::select('itemnumber')->where('slug', '=', $slug)->get();
            $itemprice = Itemv2::select()->where('itemnumber', '=', $orderitems)->get();
            /*
            $prices = Item::notNull()->where(function($query) {
            $currentuser = \Auth::user();
            $slug = OrderItems::select('slug')->where('staffid', '=', $currentuser->idnumber)->get();
            $orderitems =  OrderItems::select('itemnumber')->where('slug', '=', $slug)->first();
            $orderitem =  Item::where('itemnumber', 'LIKE', $orderitems)->get();
            $itemprice = Item::select('itemnumber')->where('itemnumber', '=', $orderitem)->get();
            return $query->where('itemnumber', 'LIKE', $orderitem);    
            });
            */
            //$orderitems = OrderItems::where('slug', '=', $slug)->orderBy('created_at', 'desc')->get();
            $data = OrderItems::all();
            //dump($data);   
            //dump($prices);
            //dump($orderitems);
            //dump($itemprice);
            $split = preg_split("/\ -\ /", $slug);  
            $orders = OrderItems::where('staffid', '=', $currentuser->idnumber)->get();
            $slug = OrderItems::select('slug')->where('staffid', '=', $currentuser->idnumber)->get();
            return view ('orders.review')->with('split', $split)->with('reviewitems', $reviewitems)->with('order', $order)->with('slug', $slug)->with('table', $table)->with('status', $status)->with('branchname', $branchname)->with('orderitems', $orderitems);
        }
        public function backEditOrderItems(Request $request, $slug)
        {
            Order::where('slug', '=', $slug)->update(['updated_at' => now(), 'status' => 'Editing']);
            $order = Order::where('slug', '=', $slug)->first();
            $orderitems = OrderItems::where('slug', '=', $slug)->orderBy('created_at', 'asc')->get();
            $ordernumber = $order;
            $orderitemslug = OrderItems::where('slug', $slug)->first();            
            // ** MAIN DUMP **//
            //dump($orderitems);
            // ** MAIN DUMP **//   
            $branchname = Order::select('branchname')->where('slug', '=', $slug)->get();
            $branchnumber = Order::select('branchnumber')->where('slug', '=', $slug)->get();
            $status = Order::select('status')->where('slug', '=', $slug)->get();
            $items = Item::select('itemnumber', 'itemname', 'itemprice', 'itemsku', 'plant', 'instock', 'link', 'type')->whereNotNull('itemname')->orderBy('itemname', 'asc')->get();
            return view('orders.backedit')->withOrder($order)->with('status', $status)->with('items', $items)->with('branchnumber', $branchnumber)->with('branchname', $branchname)->with('orderitems', $orderitems)->with('orderitemslug', $orderitemslug);
        }
        public function attachPo(Request $request, $slug)
        {
            $idnumber = Order::where('slug', '=', $slug)->first();

            $target_dir = "attachments/pos/" . $idnumber->staffid . "/";
            $target_file = $target_dir  . $slug . "-" .  basename($_FILES["fileToUpload"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));




            // Check if image file is a actual image or fake image
            if(isset($_POST["fileToUpload"])) {



                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }
            // Check if file already exists
            //if (file_exists($target_file)) {
            //  echo "Sorry, file already exists.";
            // $uploadOk = 0;
            //}
            // Check file size
            if ($_FILES["fileToUpload"]["size"] > 500000000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "pdf" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG, GIF and PDF files are allowed.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            // if everything is ok, try to upload file
            } else {

                if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {


                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
                Order::where('slug', '=', $slug)->update([
                'attachedpo' => basename( $_FILES["fileToUpload"]["name"]),
            ]);


            $idnumber = Order::where('slug', '=', $slug)->first();
            $zip = new ZipArchive();
            $filename = "attachments/zip/" . $idnumber->staffid . '-' . now()->format('dmy')  . ".zip";
            $zippedfolder = $idnumber->staffid . '-' . now()->format('dmy') . '/attachments/pos/'  . $slug . "-" .  basename($_FILES["fileToUpload"]["name"]);
            $zip->open($filename, ZipArchive::CREATE);
            
            $zip->addFile($target_file,$zippedfolder);


            $zip->close();


            
            

            return 
            redirect()->back()->with('success', 'Your PO has been attached to this order => You can submit now.');
                    
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
        }



        public function promoOrder(Request $request)
        {
            
            if ($request->input('submit') != null ){

                $file = $request->file('file');
        
                // File Details 
                $filename = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $tempPath = $file->getRealPath();
                $fileSize = $file->getSize();
                $mimeType = $file->getMimeType();
        
                // Valid File Extensions
                $valid_extension = array("csv");
        
                // 2MB in Bytes
                $maxFileSize = 2097152; 
        
                // Check file extension
                if(in_array(strtolower($extension),$valid_extension)){
        
                // Check file size
                if($fileSize <= $maxFileSize){
        
                    // File upload location
                    $location = 'attachments/promo_orders';
        
                    // Upload file

                    $file->move($location,$filename);
        
                    // Import CSV to Database
                    $filepath = public_path($location."/".$filename);
        
                    // Reading file
                    $file = fopen($filepath,"r");
        
                    $importData_arr = array();



                    
                    $i = 0;
        
                    while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
                    $num = count($filedata );
                    
                    // Skip first row (Remove below comment if you want to skip the first row)
                    if($i == 0){
                        $i++;
                        continue; 
                    }
                    for ($c=0; $c < $num; $c++) {
                        $importData_arr[$i][] = $filedata [$c];
                    }
                    $i++;
                    }
                    fclose($file);
        
                    // Insert to MySQL database


                    foreach($importData_arr as $importData){
        
                    $insertData = array(
                        "ponumber"=>$importData[1],        
                        "branchnumber"=>$importData[2],
                        "branchname"=>$importData[3],
                        "itemnumber"=> $importData[4],
                        "itemqty"=> $importData[5],
                        "itemprice"=> $importData[6],
                        'updated_at'=> now(),

                        
                    );
                    OrderItems::insert($insertData);
        
                    }
        
                    Session::flash('message','Import Successful.');
                }else{
                    Session::flash('message','File too large. File must be less than 2MB.');
                }
        
                }else{
                Session::flash('message','Invalid File Extension.');
                }
        
            }
        
            // Redirect to index
            return redirect()->route('global.index')->with('message', 'Your promo orders have been uploaded succesfully.');
            }
        
        public function submitOrder(Request $request, $slug)
        {
            $this->validate($request, [
                'orderid' => 'max:255',
                'ponumber' => 'max:255',
                'branchname' => 'max:255',
                'branchnumber' => 'max:255',
                'totalqty' => 'max:255',
                'totalfree' => 'max:255',
                'discount' => 'max:255',
                'totalprice' => 'max:255',
                'totalqtyprice' => 'max:255',
                'totaloriginal' => 'max:255'
                ]);
                
                
                Order::where('slug', $slug)->update(['orderid' => $request['orderid'], 'totalitems' => $request['totalitems'], 'totalqty' => $request['totalqty'],  'totalfree' => $request['totalfree'],  'discount' => $request['discount'], 'totalprice' => $request['totalqtyprice'],  'totaloriginal' => $request['totaloriginal'], 'updated_at' => now(), 'status' => 'Submitted']);
                OrderItems::where('slug', $slug)->update(['orderid' => $request['orderid'], 'ponumber' => $request['ponumber'], 'branchname' => $request['branchname'], 'totalprice' => $request['totalqtyprice'], 'totalqtyprice' => $request['totalqtyprice'], 'updated_at' => now(), 'orderstatus' => 'Submitted']);

            /** Create CSV REPORT */

            $idnumber = Order::where('slug', '=', $slug)->first();

            $today = date("Y-m-d", strtotime( '0 days' ) );	
            $date = \Carbon\Carbon::today()->subDays(0);
            $thisdayorders = OrderItems::where('created_at', '>=', $date)->where('staffid', '=', $idnumber->staffid)->get();
            $todaysorders = Order::where('created_at', '>=', $date )->where('staffid', '=', $idnumber->staffid)->get();
            $totalurgent = $todaysorders->where('urgent', '=', 'on')->count();
            $totalregular = $todaysorders->where('urgent', '=', NULL)->count();
            $totalitems = $todaysorders->sum('totalitems');
            $totalqtys = $todaysorders->sum('totalqty');
            $totalpos = $todaysorders->count('ponumber');
            $allorders = Order::where('staffid', '=', $idnumber->staffid)->get();
            $sumalltodaysorders = $todaysorders->sum('totalprice');
            $sumallusergrand = $allorders->sum('totalprice');
            $target_dir = "orders/" . $idnumber->staffid . "/";
            
            $filename = $target_dir . '/' . now()->format('dmy')  .  "-orders.csv";

            $handle = fopen($filename, 'w+');
            fputcsv($handle, array(
                'Orders of', 
                'Date',
                'Total PO`s',
                'Urgent # Regular',
                'Total Items',
                'Total Qtys',
                'Total Sales',
                'Total Grand'
            ));
            fputcsv($handle, array(
                \Auth::user()->name . '#' .\Auth::user()->idnumber,
                $today,
                $totalpos,
                $totalurgent . ' # ' . $totalregular,
                $totalitems,
                $totalqtys,
                number_format($sumalltodaysorders),
                number_format($sumallusergrand)
            ));
            /** Empty Cells */ 
            fputcsv($handle, array(
                '',
                '',
                '',
                '',
            ));    
            fputcsv($handle, array(
                '',
                '',
                '',
                '',
            ));
            /** End Empte Cells */

            fputcsv($handle, array(
                'PO#',
                'Customer#',
                'Total Items',
                'Total Qtys',
                'Total Sales',
                'Currency',
                'Completed',
            ));
            foreach($todaysorders as $row) {
                fputcsv($handle,array(
                    $row['ponumber'],
                    $row['branchname'],
                    $row['totalitems'],
                    $row['totalqty'],
                    number_format($row['totalprice']),
                    ' SAR',
                    $row['updated_at']->format("d/m/y g:iA"),
            ));
            }
                /** Empty Cells */ 
                fputcsv($handle, array(
                    '',
                    '',
                    '',
                    '',
                ));
                fputcsv($handle, array(
                    '',
                    '',
                    '',
                    '',
                ));
                /** End Empte Cells */

            fputcsv($handle, array(
                'By',
                'PO#',
                'Customer',
                'Items',
                'Item Number',
                'Total Cases',
                'Free Cases',
                'Asked Price',
                'Item Price',
                'Original Total Price',
                'Total Discount',
                'Total Price',
                'SUM',
                'SUM' => number_format($sumalltodaysorders) . ' SAR',
            ));
            foreach($thisdayorders as $row) {
                fputcsv($handle,array(
                    $row['staffname'],
                    $row['ponumber'],
                    $row['branchname'],
                    $row['orderitems'],
                    
                    $row['itemnumber'],
                    $row['itemqty'],
                    $row['freeitem'],
                    number_format($row['askedprice']) . '.00',
                    number_format($row['itemnewprice']). '.00',
                    number_format($row['itemnewprice'] * $row['itemqty']) . '.00',
                    number_format(-($row['itemnewprice'] - $row['askedprice']) * $row['itemqty']) . '.00',
                    number_format($row['askedprice']) * $row['itemqty'] . '.00',
            ));



            }
            fclose($handle);
            $headers = array(
                'Content-Type' => 'text/csv',
            );



            /** Create ZIPPED ARCHIVE */

            $idnumber = Order::where('slug', '=', $slug)->first();
            $zipordertargetpath = "orders/";

            $zip = new ZipArchive();
            $zipfilename = "attachments/zip/" . $idnumber->staffid . '-' . now()->format('dmy')  . ".zip";
            $orderspath = $idnumber->staffid . '-' . now()->format('dmy') . '/orders';
            $reportspath = $idnumber->staffid . '-' . now()->format('dmy') . '/reports';
            $zip->open($zipfilename, ZipArchive::CREATE);
            
            $zip->addFile($filename,$idnumber->staffid . '-' . now()->format('dmy')  . '/' . $zipordertargetpath . now()->format('dmy')  . "-orders.csv");
            $zip->addFile($filename,$idnumber->staffid . '-' . now()->format('dmy')  . '/' . $zipordertargetpath . now()->format('dmy')  . "-orders.csv");

            $zip->close();



            $currentuser = \Auth::user();
            $allorders = Order::where('staffid', '=', $currentuser->idnumber)->where('status', '=', 'Completed')->get();
            $sumallorders = $allorders->sum('totalprice');
            User::where('idnumber', '=', $currentuser->idnumber)->update(['updated_at' => now(), 'totalgrand' => $sumallorders]);
            
            return redirect()->route('orders.add', '#Success!')->with('alert', 'Congratulations! Your order have been submitted successfully.');
        }
        public function removeOrderItem($slug, $itemnumber)
        {   
            $delitemnumber  = OrderItems::where('slug', '=', $slug)->where('itemnumber', '=', $itemnumber);
            $delitemnumber->delete();            
            return redirect()->back()->with('warning', 'Item removed successfully.');
        }
        public function tableDestroy($slug)
        {
            $delitemnumber  = OrderItems::select($slug)->where('slug', '=', $slug);
            $delitemnumber->delete();            
            return redirect()->back()->with('danger', 'Table Flushed Successfully.');
        }
        public function updatePo(Request $request, $slug)
        {
            $this->validate($request, [
                'ponumber' => 'max:255'

            ]);
            Order::where('slug', $slug)->update([ 'ponumber' => $request['ponumber'], 'updated_at' => now(), 'status' => 'Editing']);
            OrderItems::where('slug', $slug)->update([ 'ponumber' => $request['ponumber'], 'updated_at' => now(), 'orderstatus' => 'Editing']);
            return redirect()->back()->with('success', 'Your Po# has been changed successfully.');

        }
        public function deletePo($slug)
        {
            $deleteorder  = Order::where('slug', '=', $slug);
            $deleteprderitems  = OrderItems::where('slug', '=', $slug);
            $deleteorder->delete();     
            $deleteprderitems->delete();     

            return redirect()->route('orders.add')->with('deleted', 'Your Po# has been deleted successfully.');


        }
        public function successOrder($slug) 
        {
            
        }
}
