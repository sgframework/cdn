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
		$currentuser = \Auth::user();
		$items = Item::select('itemnumber', 'itemname', 'itemprice', 'itemsku', 'plant', 'instock', 'link', 'type')->orderBy('created_at', 'desc')->paginate(2);
    $branches = Branch::select('branchname', 'branchnumber')->orderBy('updated_at', 'desc')->paginate(10);
		$orders = Order::select()->where('staffid', '=', $currentuser->idnumber)->orderBy('created_at', 'desc')->paginate(14);
		$orderscount = Order::select('ordernumber')->where('staffid', '=', $currentuser->idnumber)->get();
		
		$justcreatedorderscount = Order::select('status')->where('staffid', '=', $currentuser->idnumber)->where('status', '=', 'JustCreated');
		$editingorderscount = Order::select('status')->where('staffid', '=', $currentuser->idnumber)->where('status', '=', 'Editing');
		$reviewingorderscount = Order::select('status')->where('staffid', '=', $currentuser->idnumber)->where('status', '=', 'Reviewing');
		$submittedorderscount = Order::select('status')->where('staffid', '=', $currentuser->idnumber)->where('status', '=', 'Submitted');
		$completedorderscount = Order::select('status')->where('staffid', '=', $currentuser->idnumber)->where('status', '=', 'Completed');
		$orderitems = OrderItems::where('staffid', '=', $currentuser->idnumber)->get();
		//dump($orderitems);
		return view('dashboard.index')->with('justcreatedorderscount', $justcreatedorderscount)->with('editingorderscount', $editingorderscount)->with('reviewingorderscount', $reviewingorderscount)->with('submittedorderscount', $submittedorderscount)->with('completedorderscount', $completedorderscount)->with('orderscount', $orderscount)->with('orderitems', $orderitems)->with('orders', $orders)->with('items', $items)->with('branches', $branches);
		
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
