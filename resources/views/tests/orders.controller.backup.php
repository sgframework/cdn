<?php

namespace cdn\Http\Controllers;
use cdn\Models\Branch;
use cdn\Models\Order;
use cdn\Models\OrderItems;
use cdn\Models\Item;
use cdn\Models\Status;
use cdn\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;



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
            'itemprice' => $request['itemprice']
        ]);
        $orders = Order::select('ordernumber', 'staffname', 'staffid', 'ponumber', 'branchnumber', 'branchname', 'urgent')->orderBy('updated_at', 'desc')->paginate(10);

        return redirect()->route('orders.index')->with('orders', $orders)->with('info', 'Your order has been created');
    }    	

        public function getOrders(Request $request)
        {
            $orders = Order::select('ordernumber', 'staffname', 'staffid', 'ponumber', 'branchnumber', 'branchname', 'urgent', 'created_at', 'updated_at')->orderBy('updated_at', 'desc')->paginate(10);
            $branches = Branch::select('branchname', 'branchnumber')->get();
            return view('orders.index')->with('orders', $orders)->with('branches', $branches);
        }

        public function addUrgentOrder()
        {
            return view ('orders.urgent');
        }

        public function addOrder()
        {
            $items = Item::select('itemnumber', 'itemname', 'itemprice', 'itemsku', 'plant', 'instock', 'link', 'type')->orderBy('created_at', 'desc')->paginate(10);
            $branches = Branch::select('branchname', 'branchnumber')->get();
            return view ('orders.add')->with('items', $items)->with('branches', $branches);
        }
        public function addOrderStep1()
        {
            return view ('orders.partials.step1');
        }
        public function insertOrderStep1(Request $request)
        {
            
            Order::create([
                'ordernumber' => mt_rand(7000, 8000),
                'staffname' => $request['staffname'],
                'staffid' => $request['staffid'],
                'ponumber' => $request['ponumber'],
                'branchnumber' => $request['branchnumber'],
                'branchname' => 'branchname',
                'urgent' => $request['urgent'],
                'slug' => $request['slug'],
                ]);


                OrderItems::create([
                    'ordernumber' => mt_rand(7000, 8000),
                    'staffname' => $request['staffname'],
                    'staffid' => $request['staffid'],
                    'ponumber' => $request['ponumber'],
                    'branchnumber' => $request['branchnumber'],
                    'urgent' => $request['urgent'],
                    ]);
                        
                    return view('orders.partials.step2');
                        }
        public function addOrderStep2()
        {
            $orders = Order::select('id', 'ordernumber', 'staffname', 'staffid', 'ponumber', 'branchnumber', 'branchname', 'urgent', 'slug')->get();
            $items = Item::select('itemnumber', 'itemname', 'itemprice', 'itemsku', 'plant', 'instock', 'link', 'type')->orderBy('created_at', 'desc')->paginate(10);
            $branches = Branch::select('branchname', 'branchnumber')->get();
            return view ('orders.partials.step2')->with('orders', $orders)->with('items', $items)->with('branches', $branches);
        }

        
        public function setOrderNumber($ordernumber)
        {
            $this->attributes['ordernumber'] = $ordernumber;
            $this->attributes['slug'] = Str::slug($ordernumber);
        }
        
        public function getShow($slug)
        {
            $ordernumber = Order::where('slug', '=', $slug)->firstOrFail();
            return view('status.show')->with('ordernumber', $ordernumber);
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
