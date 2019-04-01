<?php

namespace cdn\Http\Controllers;
use cdn\Models\Branch;
use cdn\Models\Order;
use cdn\Models\Item;
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
            'itemprice' => ['decimal', 'max:255']
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
        $orders = Order::select('ordernumber', 'staffname', 'staffid', 'ponumber', 'branchnumber', 'branchname', 'orderitems', 'itemnumber', 'itemqty', 'freeitem', 'itemprice', 'urgent')->orderBy('updated_at', 'desc')->paginate(10);

        return redirect()->route('orders.index')->with('orders', $orders)->with('info', 'Your order has been created');
    }
    	

        public function getOrders(Request $request)
        {
            $orders = Order::select('ordernumber', 'staffname', 'staffid', 'ponumber', 'branchnumber', 'branchname', 'orderitems', 'itemnumber', 'itemqty', 'freeitem', 'itemprice', 'urgent', 'created_at', 'updated_at')->orderBy('updated_at', 'desc')->paginate(10);
            $branches = Branch::select(' ranchname', 'bfanchnumber')->get();
            return view('orders.index')->with('orders', $orders)->with('branches', $branches);
        }

        public function addUrgentOrder()
        {
            return view ('orders.urgent');
        }

        public function addOrder()
        {
            return view ('orders.add');
        }
        public function addOrderStep1()
        {
            return view ('orders.partials.step1');
        }
        public function postOrderStep1()
        {
            
            Order::create([
                'ordernumber' => $request['ordernumber'],
                'staffname' => $request['staffname'],
                'staffid' => $request['staffid'],
                'ponumber' => $request['ponumber'],
                'branchnumber' => $request['branchnumber'],
                'branchname' => $request['branchname'],
                ]);


                $step1data = Order::select('ordernumber', 'staffname', 'staffid', 'ponumber', 'branchnumber', 'branchname')->get();
                Session::flash('message', 'Hold on tight. Your order is being processed');
                return Redirect::to(route('orders.partials.step2'))->with('step1data', $step1data);

        }
        public function addOrderStep2()
        {
            return view ('orders.partials.step2')->with(postOrderStep1());
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
