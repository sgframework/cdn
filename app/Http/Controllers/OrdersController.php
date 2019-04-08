<?php

namespace cdn\Http\Controllers;
use cdn\Models\Branch;
use cdn\Models\Order;
use cdn\Models\OrderItems;
use cdn\Models\Item;
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
            'slug' => $request['slug']
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
            $items = Item::select('itemnumber', 'itemname', 'itemprice', 'itemsku', 'plant', 'instock', 'link', 'type')->orderBy('created_at', 'desc')->paginate(10);
            //$branches = Branch::select('branchname', 'branchnumber')->get();

            $branches_list = DB::table('branches')
            ->where('dc', '=', '24')
            ->get();
            dump($branches_list);

            /*$branches_list1 = DB::table('branches')
            ->where('dc', '=', '24')
            ->get();*/
            return view ('orders.add')->with('items', $items)->with('branches_list', $branches_list);
        }

        public function listOthiam()
        {

            $branches = Branch::select('branchname')->where('branchname', 'LIKE', 'Othaim ')->get();

            /*$branches = DB::table('branches')
            ->where('branchname', 'LIKE', 'Othaim ')
            ->get(['branchname', 'branchnumber', 'dc']);*/
            dump($branches);

            $branches_list1 = DB::table('branches')
            ->where('dc', '=', '24')
            ->get();
            dump($branches_list1);
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
        
            
            
            //$string = "123,456,78,000";  
            $split = preg_split("/\-/", $request['branchnumber'], -1);  
            $branchname = implode("-",$split);
            $branchnumber = implode("-",$split);
            
        

            Order::create([
                'ordernumber' => $request['ordernumber'],
                'staffname' => $request['staffname'],
                'staffid' => $request['staffid'],
                'ponumber' => $request['ponumber'],
                'branchnumber' => $branchnumber,
                'branchname' => $branchname,
                'urgent' => $request['urgent'],
                'slug' => $slug,
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
                'orderstatus' => $request['orderstatus'],
                'slug' => $slug,

            ]);

            

            session_reset();
            $request->session()->put('ordernumber', $request->ordernumber);
            $request->session()->put('staffid', $request->staffid);
            $request->session()->put('ponumber', $request->ponumber);
            $request->session()->put('branchnumber', $request->branchnumber);
            $request->session()->put('branchname', $request->branchname);
            $request->session()->put('created_at', $request->created_at);

            


            $order = Order::where('slug', '=', $slug)->first();
            $slug = $request['ordernumber'] . "-" . $request['ponumber'];
            Mail::send('orders.partials.step2',['ordernumber' => $request['ordernumber'],'ponumber' => $request['ponumber'],], function($message) {
                $message
                ->to('root@ipool.remotewebaccess.com')
                ->subject('New Order Just Created');
            });

            $branch =  Branch::where('branchnumber', '=', 'branchname')->get(['branchname']);
            $slug = $request['ordernumber'] . "-" . $request['ponumber'];

            //$items = Item::select('itemnumber', 'itemname', 'itemprice', 'itemsku', 'plant', 'instock', 'link', 'type');
            //$branches = Branch::select('logo');
            
            return redirect()->route('orders.partials.step2')->with('slug', $slug)->with('branch', $branch)->with('alert', 'Success. An email has been sent to sales processing team. you can add items to yor order now. ');
        }
        public function addOrderStep2()
        {
            $items = Item::select('itemnumber', 'itemname', 'itemprice', 'itemsku', 'plant', 'instock', 'link', 'type')->orderBy('created_at', 'desc')->paginate(10);
            $branches = Branch::select('branchname', 'branchnumber')->orderBy('created_at', 'desc');
            $slug = Session::get('ordernumber') . "-" . Session::get('ponumber');
            $order = Order::where('slug', '=', $slug)->first(); 
            dump($order);
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


        public function getOrdersbyUser()
        {

            $items = Item::all();
            $branches = Branch::all();
            //$orders = Order::all()->where('ordernumber', '=', $ordernumber)->first();
            $currentuser = \Auth::user();

            
            $orderid = DB::table('orders')
            ->where('staffid', '=', $currentuser->idnumber)
            ->get();
            dump($orderid);
            
            $orders = Order::where('staffid', '=', $currentuser->idnumber)
            ->get();
            $ordernumber = OrderItems::select()->where('staffid', '=', $currentuser->idnumber)->get();
            dump($ordernumber);
            $ponumber = OrderItems::select('ponumber')->where('staffid', '=', $currentuser->idnumber)->get();
            dump($ponumber);
            $slug = OrderItems::select('slug')->where('staffid', '=', $currentuser->idnumber)->get();
            dump($slug);

                       
            $orderitems = OrderItems::where('staffid', '=', $currentuser->idnumber)
            ->get();
            //$order = Order::where('slug', '=', $slug)->get();            
            //dump($order);
            dump($orders);
            return view('dashboard.orders')->withOrder($orderid)->with('orders', $orders)->with('orderitems', $orderitems)->with('items', $items)->with('branches', $branches)->with('ordernumber', $ordernumber)->with('ponumber', $ponumber)->with('slug', $slug);
            
        }


        public function getOrderNumber($slug)
        {
            $order = Order::where('slug', '=', $slug)->first();
            dump($order);
            //$orders = Order::where('slug', '=', $slug)->get('ordernumber');

            return view('orders.order')->withOrder($order);
        }
        public function editOrderNumber($slug)
        {
            //$currentuser = \Auth::user();
            $order = OrderItems::where('slug', '=', $slug)->first();
            $orderitems = OrderItems::where('slug', '=', $slug)->get();
            //$split = preg_split("/\-/", $order, -1);  
            $ordernumber = $order;
            $orderitemslug = OrderItems::where('slug', $slug)->first(); 
            //$orderitems = OrderItems::whereNotNull('orderitems')->get();
            dump($order);
            //dump($orders);
            //dump($split);
            //dump($ordernumber);
            //dump($orderitemslug);
            dump($orderitems);
            $order = OrderItems::where('slug', $slug)->first();           
            //$staffid = \Auth::user()->idnumber;
            //$staffname = \Auth::user()->name;
            //$branchnumber = Order::select('branchnumber')->where('slug', '=', $slug)->first();
            //dump($branchnumber);

            $branchname = Order::select('branchname')->where('slug', '=', $slug)->get();
            dump($branchname);
            $status = Order::select('status')->where('slug', '=', $slug)->get();
            dump($status);
            $items = Item::select('itemnumber', 'itemname', 'itemprice', 'itemsku', 'plant', 'instock', 'link', 'type')->orderBy('created_at', 'desc')->paginate(10);
            //dump($items);
            return view('orders.edit')->withOrder($order)->with('status', $status)->with('items', $items)->with('branchname', $branchname)->with('orderitems', $orderitems)->with('orderitemslug', $orderitemslug);
        }

        public function insertOrderItems(Request $request, $slug)
        {
            $this->validate($request, [
                'orderitems' => 'max:255',
                'itemnumber' => 'max:255',
                'itemqty' => 'max:20',
                'freeitem' => 'max:20',
                'itemprice' => 'max:20',
                'orderstatus' => 'max:255',

            ]);


            //$inputData = $request->all();
            //$orderitems = OrderItems::find($slug); 
            //$orderitems->update($inputData);

        $order = OrderItems::where('slug', $slug)->first();           

        $split = preg_split("/\-/", $request['itemnumber'], -1);  
        $orderitems = implode("-",$split);
        $itemnumber = implode("-",$split);
        $staffid = \Auth::user()->idnumber;
        $staffname = \Auth::user()->name;
        $branchnumber = Order::select('branchnumber')->where('slug', '=', $slug)->get();
        $branchname = Order::select('branchname')->where('slug', '=', $slug)->get();
        OrderItems::create([
        'staffid' => $staffid,
        'staffname' => $staffname,
        'branchnumber' => $branchnumber,
        'branchname' => $branchname,
        'itemnumber' => $itemnumber,
        'orderitems' => $orderitems,
        'itemqty' => $request['itemqty'],
        'freeitem' => $request['freeitem'],
        'itemprice' => $request['itemprice'],
        'orderstatus' => 'Inserting Items',
        'slug' => $slug,

        ]);

        Order::where('slug', $slug)->update(['updated_at' => now(), 'status' => 'Editing']);
        
        //Response::json( $order );
        $items = Item::all();
        $orders = Order::all();
        $orderitems = OrderItems::all();
        return redirect()->back()->with('alert', 'Your item have been inserted successfully.');
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
            $order = OrderItems::where('slug', $slug)->get();           

            $status = Order::select('status')->where('slug', '=', $slug)->get();
            $split = preg_split("/\-/", $request['itemnumber'], -1);  
            $slug = implode("-",$split);
            $orderitems = OrderItems::all();
            $itemnumber = implode("-",$split);
            $staffid = \Auth::user()->idnumber;
            $staffname = \Auth::user()->name;
            $ordernumber = OrderItems::select('ordernumber')->where('slug', '=', $slug)->firstOrFail();
            $ponumber = OrderItems::select('ponumber')->where('slug', '=', $slug)->firstOrFail();
            $branchnumber = OrderItems::select('branchnumber')->where('slug', '=', $slug)->firstOrFail();
            $branchname = OrderItems::select('branchname')->where('slug', '=', $slug)->firstOrFail();
            $table = OrderItems::select()->where('slug', '=', $slug)->firstOrFail();

            return view ('orders.review')->withOrder($order)->with('slug', $slug)->with('table', $table)->with('status', $status)->with('branchname', $branchname)->with('orderitems', $orderitems)->with('ordernumber', $ordernumber)->with('ponumber', $ponumber);
        }
        public function  submitOrder($slug)
        {
            $order = OrderItems::select('slug')->where('slug', $slug)->get();           

            Mail::send('orders.review',[$staffid, $staffname, $ordernumber], function($message) {
                $message
                ->to('root@ipool.remotewebaccess.com')
                ->subject('New Order Just Submitted');
            });
            return redirect()->back()->with('order', $order)->with('alert', 'Your order have been submitted successfully.');
        }

}
