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
            'branchname' => ['required', 'string', 'max:255'],
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
            ->groupBy('id')
            ->get();

            return view ('orders.add')->with('items', $items)->with('branches_list', $branches_list);
        }
        public function addOrderStep1()
        {
            return view ('orders.partials.step1');
        }
        public function insertOrderStep1(Request $request)
        {
            
        $slug = $request['ordernumber'] . "-" . $request['ponumber'];
            Order::create([
                'ordernumber' => $request['ordernumber'],
                'staffname' => $request['staffname'],
                'staffid' => $request['staffid'],
                'ponumber' => $request['ponumber'],
                'branchnumber' => $request['branchnumber'],
                'branchname' => $request['branchname'],
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
                'orderstatus' => $request['orderstatus']
            ]);

            

            session_reset();
            $request->session()->put('ordernumber', $request->ordernumber);
            $request->session()->put('staffid', $request->staffid);
            $request->session()->put('ponumber', $request->ponumber);
            $request->session()->put('branchnumber', $request->branchnumber);
            $request->session()->put('created_at', $request->created_at);




            $order = Order::where('slug', '=', $slug)->first();
            $slug = $request['ordernumber'] . "-" . $request['ponumber'];
            Mail::send('orders.partials.step2',['ordernumber' => $request['ordernumber'],'ponumber' => $request['ponumber'],], function($message) {
                $message
                ->to('root@ies.com')
                ->subject('New Order#');
            });
            //$items = Item::select('itemnumber', 'itemname', 'itemprice', 'itemsku', 'plant', 'instock', 'link', 'type');
            //$branches = Branch::select('logo');
            return redirect()->route('orders.partials.step2')->with('slug', $slug)->with('alert', 'Your order status changed to Just Created. you can add items now. ');
        }
        public function addOrderStep2()
        {
            $items = Item::select('itemnumber', 'itemname', 'itemprice', 'itemsku', 'plant', 'instock', 'link', 'type')->orderBy('created_at', 'desc')->paginate(10);
            $branches = Branch::select('branchname', 'branchnumber')->orderBy('created_at', 'desc');
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


        public function getOrdersbyUser(Request $ordernumber)
        {

            $items = Item::all();
            $branches = Branch::all();
            dump($branches);
            //$orders = Order::all()->where('ordernumber', '=', $ordernumber)->first();

            $currentuser = \Auth::user();
            dump($currentuser);

            $orders = Order::where('staffid', '=', $currentuser->idnumber)
                       ->get(['ordernumber', 'ponumber', 'urgent']);
            dump($orders);
            return view('dashboard.orders')->with('orders', $orders)->with('items', $items)->with('branches', $branches);
            
        }


        public function getOrderNumber($slug)
        {
            $order = Order::where('slug', '=', $slug)->first();

            //$orders = Order::where('slug', '=', $slug)->get('ordernumber');

            return view('orders.order')->withOrder($order);
        }
        public function editOrderNumber($slug)
        {
            $order = Order::where('slug', '=', $slug)->first();
            $items = Item::all();
            return view('orders.edit')->withOrder($order)->with('items', $items);
        }

        public function updateOrderItems($slug)
        {
            $order = Order::where('slug', '=', $slug)->first();

            OrderItems::update([
            
            'itemnumber' => $request['itemnumber'],
            'itemqty' => $request['itemqty'],
            'freeitem' => $request['freeitem'],
            'itemprice' => $request['itemprice'],
        ]);



        $items = Item::all();
        $orderitems = OrderItems::all();
        return redirect()->back()->withOrder($order)->with('items', $items)->with('orderitems', $orderitems);
        }

        


        public function addOrderUrgent()
        {
            return view ('urgent.add');
        }
        public function addRtvOrder()
        {
            return view ('rtvs.add');
        }
        public function orderReview()
        {
            return view ('get.order');
        }
        public function  submitOrder()
        {
            return view ('order.add');
        }

}
