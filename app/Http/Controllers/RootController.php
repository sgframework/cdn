<?php

namespace cdn\Http\Controllers;

use Illuminate\Http\Request;
use cdn\Models\Order;
use cdn\Models\Item;
use cdn\Models\Branch;

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
        return view('root.index');
    }
    public function getTest()
    {
        $items = Item::select('itemnumber', 'itemname', 'itemprice', 'itemsku', 'plant', 'instock', 'link', 'type')->orderBy('created_at', 'desc')->paginate(10);

        $orders = Order::select('ordernumber', 'staffname', 'staffid', 'ponumber', 'branchnumber', 'branchname', 'orderitems', 'itemnumber', 'itemqty', 'freeitem', 'itemprice', 'urgent', 'created_at', 'updated_at')->orderBy('updated_at', 'desc')->paginate(10);
        return view('tests.index')->with('orders', $orders)->with('items', $items);
    }
    
}
