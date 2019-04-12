<?php

namespace cdn\Http\Controllers;

use Session;





use cdn\Models\Branch;
use cdn\Models\Order;
use cdn\Models\OrderItems;
use cdn\Models\Item;
use cdn\Models\Root;
use DB;
use Auth;
use cdn\User;

use Illuminate\Http\Request;

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

        Session::flash('message','Empty input not accepted');
        $items = Item::select('itemnumber', 'itemname', 'itemprice', 'itemsku', 'plant', 'instock', 'link', 'type')->orderBy('created_at', 'asc')->paginate(10);
        $branches = Branch::select('branchname', 'branchnumber')->get();
        $orders = Order::select('ordernumber', 'staffname', 'staffid', 'ponumber', 'branchnumber', 'branchname', 'urgent', 'created_at', 'updated_at')->orderBy('updated_at', 'asc')->paginate(10);
        return view('tests.index')->with('orders', $orders)->with('items', $items)->with('branches', $branches);
    }
    public function getReview()
    {
        
        $items = Item::select('itemnumber', 'itemname', 'itemprice', 'itemsku', 'plant', 'instock', 'link', 'type')->orderBy('created_at', 'asc')->paginate(10);
        $branches = Branch::select('branchname', 'branchnumber')->get();
        $orders = Order::select('ordernumber', 'staffname', 'staffid', 'ponumber', 'branchnumber', 'branchname', 'orderitems', 'itemnumber', 'itemqty', 'freeitem', 'itemprice', 'urgent', 'created_at', 'updated_at')->orderBy('updated_at', 'asc')->paginate(10);
        return view('orders.review')->with('orders', $orders)->with('items', $items)->with('branches', $branches);
    }

    
    public function getAllOrders(Order $slug, User $idnumber)
    {
        $order = Order::where('slug', '=', $slug)->first();
        $id = User::where('idnumber', '=', $idnumber)->first();
        //dump($order);               
        //dump($id);               

                $currentuser = \Auth::user();
                $orderitems = Order::where('staffid', '=', $currentuser->idnumber)->first();
                
                // ** MAIN DUMP ** //
                //dump($orderitems);               
                // ** MAIN DUMP ** //
                
                $items = Item::all();
                $branches = Branch::all();
                //$orders = Order::all()->where('ordernumber', '=', $ordernumber)->first();
                $jcorders = Order::select()->where('status', '=', 'JustCreated')->orderBy('updated_at', 'asc')->paginate(7);
                $editingorders = Order::select()->where('status', '=', 'Editing')->orderBy('updated_at', 'asc')->paginate(7);
                $processingorders = OrderItems::select()->where('orderstatus', '=', 'Processing')->orderBy('updated_at', 'asc')->paginate(7);
                $completedorders = Order::select()->where('status', '=', 'Completed')->orderBy('updated_at', 'asc')->paginate(7);
                $reviewingorders = Order::select()->where('status', '=', 'Reviewing')->orderBy('updated_at', 'asc')->paginate(7);
                $orderitems = OrderItems::where('staffid', '=', $currentuser->idnumber)
                ->get();
                $processedorders = Order::where('status', '=', 'Submitted')->orderBy('updated_at', 'asc')->paginate(7);
                $ordernumber = Order::where('status', '=', 'Submitted')->get();
                $stafforders = OrderItems::select()->where('orderstatus', '=', 'Submitted')->whereNotNull('ponumber')->groupBy('staffid')->get();
                $submittedorders = Order::select()->where('status', '=', 'Submitted')->whereNotNull('ponumber')->groupBy('slug')->get();
                $orders = OrderItems::select()->where('staffid', '=', $submittedorders)->orderBy('updated_at', 'asc')->paginate(7);
                $stafforderitems = OrderItems::select()->where('orderstatus', '=', 'Submitted')->whereNotNull('itemprice')->groupBy('staffid')->get();

                $itemprice = $items;
                $root = Root::select()->get();
                //dump($root);
                //dump($currentuser);
                $profiles = OrderItems::where('orderstatus', '=', 'Submitted')->where('slug', '=', $slug)->whereNotNull('itemnumber')->get();
                $header = Order::where('status', '=', 'Submitted')->get();
                //dump($slug);
                //dump($idnumber);
                //dump($stafforderitems);
                //dump($header);
                //dump($profiles);
                return view('root.orders.all')
                ->withOrder($order)
                ->withId($id)
                ->with('submittedorders', $submittedorders)
                    ->with('reviewingorders', $reviewingorders)
                    ->with('completedorders', $completedorders)
                    ->with('processingorders', $processingorders)
                    ->with('jcorders', $jcorders)
                    ->with('processedorders', $processedorders)
                    ->with('ordernumber', $ordernumber)
                    ->with('orderitems', $orderitems)
                    ->with('editingorders', $editingorders)
                    ->with('orders', $orders)
                    ->with('header', $header)
                    ->with('profiles', $profiles)
                    ->with('stafforders', $stafforders)
                    ->with('stafforderitems', $stafforderitems)
                    ->with('branches', $branches);

    }

    public function getOrdersByIdAndSlug($idnumber, $slug)
    {
        
        $order = Order::where('slug', '=', $slug)->first();
        $id = User::where('idnumber', '=', $idnumber)->first();
        //dump($order);               
        //dump($id);               

        //$user = Order::findorfail(4);
        //dump($user->branchname);
        //$root = Root::findorfail(1);
        //dump($root->orderItems);
        
        $belongstaffid = Order::where('staffid', '=', $idnumber)->where('slug', '=', $slug)->first();
        dump(['By', $belongstaffid->staffname, 'ID', $belongstaffid->staffid]);
        $belongbranch = Order::where('staffid', '=', $idnumber)->where('slug', '=', $slug)->first();
        dump(['Branch#Name', $belongbranch->branchname]);



        $belongordernumber = Order::where('staffid', '=', $idnumber)->where('slug', '=', $slug)->first();
        dump(['Order#', $belongordernumber->ordernumber, 'PO#', $belongordernumber->ponumber, 'slug', $belongordernumber->slug]);
        //$belongponumber = Order::where('staffid', '=', $idnumber)->where('slug', '=', $slug)->first();
        //dump(['PO#', $belongponumber->ponumber]);
        $belongcreateddate = Order::where('staffid', '=', $idnumber)->where('slug', '=', $slug)->first();
        dump(['Created@', $belongcreateddate->created_at, 'Updated@', $belongcreateddate->updated_at]);
        //$belongupdateddate = Order::where('staffid', '=', $idnumber)->where('slug', '=', $slug)->first();
        //dump(['Updated@', $belongupdateddate->updated_at]);
                $currentuser = \Auth::user();
                $orderitems = Order::where('staffid', '=', $currentuser->idnumber)->first();
                
                // ** MAIN DUMP ** //
                //dump($orderitems);               
                // ** MAIN DUMP ** //
                
                $items = Item::all();
                $branches = Branch::all();
                //$orders = Order::all()->where('ordernumber', '=', $ordernumber)->first();
                $jcorders = Order::select()->where('status', '=', 'JustCreated')->orderBy('updated_at', 'asc')->paginate(7);
                $editingorders = Order::select()->where('status', '=', 'Editing')->orderBy('updated_at', 'asc')->paginate(7);
                $processingorders = OrderItems::select()->where('orderstatus', '=', 'Processing')->orderBy('updated_at', 'asc')->paginate(7);
                $completedorders = Order::select()->where('status', '=', 'Completed')->orderBy('updated_at', 'asc')->paginate(7);
                $reviewingorders = Order::select()->where('status', '=', 'Reviewing')->orderBy('updated_at', 'asc')->paginate(7);
                $orderitems = OrderItems::where('staffid', '=', $currentuser->idnumber)
                ->get();
                $processedorders = Order::where('status', '=', 'Submitted')->orderBy('updated_at', 'asc')->paginate(7);
                $ordernumber = Order::where('status', '=', 'Submitted')->get();
                $stafforders = OrderItems::select()->where('orderstatus', '=', 'Submitted')->whereNotNull('ponumber')->groupBy('staffid')->get();
                $submittedorders = Order::select()->where('status', '=', 'Submitted')->whereNotNull('ponumber')->groupBy('slug')->get();
                $orders = OrderItems::select()->where('staffid', '=', $submittedorders)->orderBy('updated_at', 'asc')->paginate(7);
                $stafforderitems = OrderItems::select()->where('orderstatus', '=', 'Submitted')->whereNotNull('itemprice')->groupBy('staffid')->get();

                $itemprice = $items;

                //dump($currentuser);
                $profiles = OrderItems::where('orderstatus', '=', 'Submitted')->where('slug', '=', $slug)->whereNotNull('itemnumber')->get();
                $header = Order::where('status', '=', 'Submitted')->get();
                //dump($slug);
                //dump($idnumber);
                //dump($stafforderitems);
                //dump($header);
                //dump($profiles);
                return view('root.orders.index')
                ->withOrder($order)
                ->withId($id)
                ->with('submittedorders', $submittedorders)
                    ->with('reviewingorders', $reviewingorders)
                    ->with('completedorders', $completedorders)
                    ->with('processingorders', $processingorders)
                    ->with('jcorders', $jcorders)
                    ->with('processedorders', $processedorders)
                    ->with('ordernumber', $ordernumber)
                    ->with('orderitems', $orderitems)
                    ->with('editingorders', $editingorders)
                    ->with('orders', $orders)
                    ->with('header', $header)
                    ->with('profiles', $profiles)
                    ->with('stafforders', $stafforders)
                    ->with('stafforderitems', $stafforderitems)
                    ->with('branches', $branches);

    }
    
    public function getOrdersByUserId( $idnumber)
    {

        $order = Order::where('staffid', '=', $idnumber)->first();

        $id = User::where('idnumber', '=', $idnumber)->first();
        dump($id);      
        $currentuser = \Auth::user();
        $orderitems = Order::where('staffid', '=', $currentuser->idnumber)->first();
        
        // ** MAIN DUMP ** //
        //dump($orderitems);               
        // ** MAIN DUMP ** //
        
        $items = Item::all();
        $branches = Branch::all();
        //$orders = Order::all()->where('ordernumber', '=', $ordernumber)->first();
        $jcorders = Order::select()->where('status', '=', 'JustCreated')->orderBy('updated_at', 'asc')->paginate(7);
        $editingorders = Order::select()->where('status', '=', 'Editing')->orderBy('updated_at', 'asc')->paginate(7);
        $processingorders = OrderItems::select()->where('orderstatus', '=', 'Processing')->orderBy('updated_at', 'asc')->paginate(7);
        $completedorders = Order::select()->where('status', '=', 'Completed')->orderBy('updated_at', 'asc')->paginate(7);
        $reviewingorders = Order::select()->where('status', '=', 'Reviewing')->orderBy('updated_at', 'asc')->paginate(7);
        $orderitems = OrderItems::where('staffid', '=', $currentuser->idnumber)
        ->get();
        $processedorders = Order::where('status', '=', 'Submitted')->orderBy('updated_at', 'asc')->paginate(7);
        $ordernumber = Order::where('status', '=', 'Submitted')->get();
        $stafforders = OrderItems::select()->where('orderstatus', '=', 'Submitted')->whereNotNull('ponumber')->groupBy('staffid')->get();
        $submittedorders = Order::select()->where('status', '=', 'Submitted')->whereNotNull('ponumber')->groupBy('slug')->get();
        $orders = OrderItems::select()->where('staffid', '=', $submittedorders)->orderBy('updated_at', 'asc')->paginate(7);
        $stafforderitems = OrderItems::select()->where('orderstatus', '=', 'Submitted')->whereNotNull('itemprice')->groupBy('staffid')->get();

        $itemprice = $items;
        $root = Root::select()->get();
        dump($root);
        //dump($currentuser);
        $profiles = OrderItems::where('orderstatus', '=', 'Submitted')->where('staffid', '=', $idnumber)->whereNotNull('itemnumber')->get();
        $header = Order::where('status', '=', 'Submitted')->get();
        //dump($slug);
        dump($idnumber);
        //dump($stafforderitems);
        //dump($header);
        //dump($profiles);
        return view('root.orders.index')
        ->withOrder($order)
        ->withId($id)
        ->with('submittedorders', $submittedorders)
            ->with('reviewingorders', $reviewingorders)
            ->with('completedorders', $completedorders)
            ->with('processingorders', $processingorders)
            ->with('jcorders', $jcorders)
            ->with('processedorders', $processedorders)
            ->with('ordernumber', $ordernumber)
            ->with('orderitems', $orderitems)
            ->with('editingorders', $editingorders)
            ->with('orders', $orders)
            ->with('header', $header)
            ->with('profiles', $profiles)
            ->with('stafforders', $stafforders)
            ->with('stafforderitems', $stafforderitems)
            ->with('branches', $branches);
    }

    public function getMd()
    {
        
        $items = Item::select('itemnumber', 'itemname', 'itemprice', 'itemsku', 'plant', 'instock', 'link', 'type')->orderBy('created_at', 'asc')->paginate(10);
        $branches = Branch::select('branchname', 'branchnumber')->get();
        $orders = Order::select('ordernumber', 'staffname', 'staffid', 'ponumber', 'branchnumber', 'branchname', 'urgent', 'created_at', 'updated_at')->orderBy('updated_at', 'asc')->paginate(10);
        return view('tests.markdown')->with('orders', $orders)->with('items', $items)->with('branches', $branches);
    }

    public function getMail()
    {
        return $this->view('tests.mail');
    }
    
    
}
