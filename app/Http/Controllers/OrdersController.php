<?php

namespace cdn\Http\Controllers;
use cdn\Models\Branch;
use cdn\Models\Order;
use cdn\Models\OrderItems;
use cdn\Models\Item;
use cdn\Mail\OrderSubmitted;
use cdn\User;
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
            $branches_list = DB::table('branches')
            ->where('salesgroup', '=', $currentuser->idnumber)
            ->get();
            //dump($branches_list);
            /*$branches_list1 = DB::table('branches')
            ->where('dc', '=', '24')
            ->get();*/
            return view ('orders.add')->with('branch', $branch)->with('branches_list', $branches_list)->with('lastorder', $lastorder);
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
            return view ('orders.partials.step2')->with('items', $items)->with('branches', $branches);
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
               return redirect()->route('home');
           }
           
                   if (!Auth::user()->isFriendsWith($status->user) && Auth::user()->id !== $status->user->idnumber) {
               return redirect()->route('home');
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
                'itemprice' => 'max:20',
                'totalqtyprice' => 'max:20',
                'orderstatus' => 'max:255',
                'askedprice' => 'max:20',
            ]);
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
            $items = Item::all();
            $reviewitems = OrderItems::select('itemnumber')->where('slug', '=', $slug)->get();
            //$itemprice = Item::select('itemprice')->where('itemnumber', '=', $request['itemnumber'])->get();
            $belongstaffid = Order::where('slug', '=', $slug)->first();
            //dump(['By', $belongstaffid->staffname, 'ID', $belongstaffid->staffid]);
            $belongbranch = Order::where('slug', '=', $slug)->first();
            //dump(['Branch#Name', $belongbranch->branchname]);
            $orderitemslist = OrderItems::select('itemnumber')->where('slug', '=', $slug)->orderBy('created_at', 'desc')->whereNotNull('itemnumber')->first();
            $orderitemnumber = $orderitemslist;
            //dump(['Order Item#', $orderitemnumber]);
            $items = Item::select()->whereNotNull('itemname')->orderBy('itemname', 'asc')->get();
            $belongorderitems = OrderItems::where('orderitems', '=', $items)->get();
            $belongitem = Item::where('itemnumber', '=', $request['itemnumber'])->whereNotNull('itemnumber')->first();
            $belongprice = $belongitem->itemprice;
            //$totalqtyprice = $belongitem->itemprice * $request['itemqty'];
            $totalqtyprice = $belongitem->itemprice * $request['itemqty'];
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
            'itemprice' => $belongprice,
            'totalqtyprice' => $totalqtyprice,
            'orderstatus' => 'Editing',
            'slug' => $slug,
            'askedprice' =>  $askedprice

            ]);
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
            $itemprice = Item::select()->where('itemnumber', '=', $orderitems)->get();
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
            $target_dir = "../public/attachments/pos/";
            $target_file = $target_dir . $slug . '-' .  basename($_FILES["fileToUpload"]["name"]);
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
            return redirect()->back()->with('success', 'Your PO has been attached to this order => You can submit now.');
                    
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
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
                'totalqtyprice' => 'max:255'
            ]);
            Order::where('slug', $slug)->update(['orderid' => $request['orderid'], 'totalitems' => $request['totalitems'], 'totalqty' => $request['totalqty'],  'totalfree' => $request['totalfree'],  'discount' => $request['discount'], 'totalprice' => $request['totalqtyprice'], 'updated_at' => now(), 'status' => 'Submitted']);
            OrderItems::where('slug', $slug)->update(['orderid' => $request['orderid'], 'ponumber' => $request['ponumber'], 'branchname' => $request['branchname'], 'totalqtyprice' => $request['totalqtyprice'], 'updated_at' => now(), 'orderstatus' => 'Submitted']);
            $currentuser = \Auth::user();
            $allorders = Order::where('staffid', '=', $currentuser->idnumber)->where('status', '=', 'Completed')->get();
            $sumallorders = $allorders->sum('totalprice');
            User::where('idnumber', '=', $currentuser->idnumber)->update(['updated_at' => now(), 'totalgrand' => $sumallorders]);
            return redirect()->route('orders.add', '#Success!&create_new_order')->with('alert', 'Congratulations! Your order have been submitted successfully.');
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
        public function successOrder($slug) 
        {
            
        }
}
