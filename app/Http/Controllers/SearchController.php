<?php 

namespace cdn\Http\Controllers;

use DB;
use cdn\Models\Item;
use cdn\Models\Branch;
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
    	->orWhere('itemsku', 'LIKE', "%{$query}%")->get();
    	
    	
        return view('search.items')->with('items', $items);
	}
	public function getBranches(Request $request)
    {
    	$query = $request->input('query');
    	
    	if (!$query) {
    		return redirect()->route('global.index');
    	}
    	
		$branches = Branch::where(DB::raw("CONCAT(branchname, '', 'branchnumber')"), 'LIKE', "%{$query}%")
		->orWhere('branchnumber', 'LIKE', "%{$query}%")
    	->get();
    	
    	
        return view('search.branches')->with('branches', $branches);
    }
}