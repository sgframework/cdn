<?php 

namespace cdn\Http\Controllers;

use Auth;
use cdn\User;
use cdn\Models\Branch;
use cdn\Models\Item;
use cdn\Models\Order;
use cdn\Models\OrderItems;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getProfile()
    {
		$items = Item::select('itemnumber', 'itemname', 'itemprice', 'itemsku', 'plant', 'instock', 'link', 'type')->orderBy('created_at', 'desc')->paginate(10);
        $branches = Branch::select('branchname', 'branchnumber')->orderBy('updated_at', 'desc')->paginate(10);
		$orders = Order::select('ordernumber', 'orderid', 'staffname', 'staffid', 'ponumber', 'branchnumber', 'branchname', 'urgent', 'created_at', 'updated_at')->orderBy('updated_at', 'desc')->paginate(10);
		$currentuser = \Auth::user();
		$orderitems = OrderItems::where('staffid', '=', $currentuser->idnumber)->get();
		dump($orderitems);
		return view('dashboard.index')->with('orderitems', $orderitems)->with('orders', $orders)->with('items', $items)->with('branches', $branches);
		
    }
    public function getEdit()
    {
    return view ('profile.edit');
    }
    public function profileEdit(Request $request)
    {
    	$this->validate($request, [
    		'name' => 'max:50',
    		'email' => 'email|max:50',
    		'phonenumber' => 'max:10',
    	]);
    	
    	Auth::user()->update([
    		'name' => $request->input('name'),
    		'email' => $request->input('email'),
    		'phonenumber' => $request->input('phonenumber'),
    	]);
    	
    	return redirect()->route('profile.edit')->with('info', 'Your profile has been updated.');
    	
	}
	public function photoEdit(Request $request)
    {
    	$this->validate($request, [
    		'photo' => 'max:255',
    	]);
    	
    	Auth::user()->update([
			'photo' => $request->input('photo'),

    	]);
    	
    	return redirect()->route('profile.edit')->with('info', 'Your photo has been updated.');
    	
	}

}
