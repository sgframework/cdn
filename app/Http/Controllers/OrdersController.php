<?php

namespace cdn\Http\Controllers;
use cdn\Models\Order;
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
            'itemprice' => ['decimal', 'max:255']        ]);
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
        return redirect()->route('orders.index')->with('info', 'Your order has been created');
    }
    	

        public function getOrders(Request $request)
        {
            $orders = Order::select('ordernumber', 'staffname', 'staffid', 'ponumber', 'branchnumber', 'branchname', 'orderitems', 'itemnumber', 'itemqty', 'freeitem', 'itemprice')->get();
            return view('orders.index')->with('orders', $orders);
        }


        
        public function addUrgentOrder()
        {
            return view ('orders.urgent');
        }

        public function addOrder()
        {
            return view ('orders.add');
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
