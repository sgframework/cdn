<?php 

namespace cdn\Http\Controllers;

use DB;
use cdn\Models\Item;
use cdn\Models\Itemv2;
use cdn\Models\Branch;
use cdn\Models\Order;
use cdn\Models\OrderItems;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function getItems(Request $request)
    {
    	$query = $request->input('query');
    	
    	if (!$query) {
    		return redirect()->route('global.index');
    	}
    	
    	$items = Item::where(DB::raw("CONCAT(itemname, '', 'itemnumber')"), 'LIKE', "%{$query}%")
		->orWhere('itemnumber', 'LIKE', "%{$query}%")
		->orWhere('type', 'LIKE', "%{$query}%")
		->orWhere('group', 'LIKE', "%{$query}%")
		->orWhere('itemsku', 'LIKE', "%{$query}%")
		->get();
    	
    	
        return view('search.items')->with('items', $items);
	}
	public function getBranches(Request $request)
    {
    	$query = $request->input('query');
    	
    	if (!$query) {
    		return redirect()->route('global.index');
    	}
    	
		$branches = Branch::where(DB::raw("CONCAT(branchname, '', 'branchnumber')"), 'LIKE', "%{$query}%")
		->orWhere('branchnumber', 'LIKE', "%{$query}%")->orWhere('salesgroup', 'LIKE', "%{$query}%")
    	->get();
    	
    	
        return view('search.branches')->with('branches', $branches);
	}
	

    public function getPos(Request $request)
    {
    	$query = $request->input('query');
    	
    	if (!$query) {
    		return redirect()->route('dashboard.index', ['id' => Auth::user()->idnumber])->with('alert', 'Nothing Found !');
    	}
    	
    	$pos = Order::where(DB::raw("CONCAT(ponumber, '', 'branchnumber')"), 'LIKE', "%{$query}%")
		->orWhere('ponumber', 'LIKE', "%{$query}%")
		->orWhere('slug', 'LIKE', "%{$query}%")
		->get();
    	$poitems = OrderItems::where('slug', 'LIKE', "%{$query}%")
		->orWhere('ponumber', 'LIKE', "%{$query}%")
		->get();
    	
    	
        return view('search.pos')->with('pos', $pos)->with('poitems', $poitems);
	}


public function getOrder(Request $request)
{
	$query = $request->input('query');
    	
	if (!$query) {
		return redirect()->route('search.orders')->with('alert', 'Nothing Found !');
	}
	
	$pos = Order::where(DB::raw("CONCAT(ponumber, '', 'branchnumber')"), 'LIKE', "%{$query}%")
	->orWhere('staffname', 'LIKE', "%{$query}%")
	->orWhere('staffid', 'LIKE', "%{$query}%")
	->orWhere('branchnumber', 'LIKE', "%{$query}%")
	->orWhere('branchname', 'LIKE', "%{$query}%")
	->orWhere('ponumber', 'LIKE', "%{$query}%")
	->orWhere('slug', 'LIKE', "%{$query}%")
	->orWhere('created_at', 'LIKE', "%{$query}%")
	->orWhere('processedby', 'created_at', 'LIKE', "%{$query}%")
	->orWhere('status', 'LIKE', "%{$query}%")
	->get();
	$poitems = OrderItems::where('slug', 'LIKE', "%{$query}%")
	->orWhere('ponumber', 'LIKE', "%{$query}%")
	->get();
	
	
	return view('search.orders')->with('pos', $pos)->with('poitems', $poitems);
}
}