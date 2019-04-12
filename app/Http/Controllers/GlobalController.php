<?php

namespace cdn\Http\Controllers;

use cdn\Models\Branch;
use cdn\Models\Order;
use cdn\Models\OrderItems;
use cdn\Models\Item;
use DB;
use Auth;

use Illuminate\Http\Request;

class GlobalController extends Controller
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
    public function getIndex(Request $request, Order $slug)
    {

                   
        /*
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
                    return view('global.index')->withOrder($order)->with('slug', $slug)->with('status', $status)->with('items', $items)->with('branchname', $branchname)->with('orderitems', $orderitems)->with('orderitemslug', $orderitemslug);
                */

    
                /*
                $orderid = DB::table('orders')
                ->where('staffid', '=', $currentuser->idnumber)
                ->get();
                //dump($orderid);
                
                $orders = Order::where('staffid', '=', $currentuser->idnumber)
                ->get();
                $ordernumber = OrderItems::select()->where('staffid', '=', $currentuser->idnumber)->get();
                //dump($ordernumber);
                $ponumber = OrderItems::select('ponumber')->where('staffid', '=', $currentuser->idnumber)->get();
                //dump($ponumber);
                $slug = OrderItems::select('slug')->where('staffid', '=', $currentuser->idnumber)->get();
                //dump($slug);
    
                           
                $orderitems = OrderItems::where('staffid', '=', $currentuser->idnumber)
                ->get();
                //$order = Order::where('slug', '=', $slug)->get();            
                //dump($order);
                dump($orders);
                return view('global.index')->withOrder($orderid)->with('orders', $orders)->with('orderitems', $orderitems)->with('items', $items)->with('branches', $branches)->with('ordernumber', $ordernumber)->with('ponumber', $ponumber)->with('slug', $slug); 
                */
                $currentuser = \Auth::user();
                //$orderitems = Order::where('staffid', '=', $currentuser->idnumber)->get();
                
                // ** MAIN DUMP ** //
                //dump($orderitems);               
                // ** MAIN DUMP ** //
                
                $order = Order::where('slug', '=', $slug)->first();
                $items = Item::all();
                $branches = Branch::all();
                //$orders = Order::all()->where('ordernumber', '=', $ordernumber)->first();
                $jcorders = Order::select()->where('status', '=', 'JustCreated')->where('staffid', '=', $currentuser->idnumber)->orderBy('updated_at', 'desc')->paginate(7);
                $orders = Order::select()->where('status', '=', 'Editing')->where('staffid', '=', $currentuser->idnumber)->orderBy('updated_at', 'desc')->paginate(7);
                $processingorders = OrderItems::select()->where('orderstatus', '=', 'Processing')->where('staffid', '=', $currentuser->idnumber)->orderBy('updated_at', 'desc')->paginate(7);
                $completedorders = Order::select()->where('status', '=', 'Completed')->where('staffid', '=', $currentuser->idnumber)->orderBy('updated_at', 'desc')->paginate(7);
                $reviewingdorders = Order::select()->where('status', '=', 'Reviewing')->where('staffid', '=', $currentuser->idnumber)->orderBy('updated_at', 'desc')->paginate(7);
                $orderitems = OrderItems::select('itemnumber')->where('slug', '=', $slug)->get();
                $processedorders = Order::where('status', '=', 'Submitted')->where('staffid', '=', $currentuser->idnumber)->orderBy('updated_at', 'desc')->paginate(7);
                $ordernumber = Order::where('ordernumber', '=', $currentuser->idnumber)->get();
                //dump($orders);
                dump($orderitems);
                //dump($ordernumber);
                return view('global.index')->with('reviewingdorders', $reviewingdorders)->with('completedorders', $completedorders)->with('processingorders', $processingorders)->with('jcorders', $jcorders)->with('processedorders', $processedorders)->with('ordernumber', $ordernumber)->with('orderitems', $orderitems)->with('orders', $orders)->with('branches', $branches);

    }
}
