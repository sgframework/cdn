<?php 

namespace cdn\Http\Controllers;

use Auth;
use cdn\Models\User;
use Illuminate\Http\Request;

class FriendController extends Controller
{
    public function getIndex()
    {
    	$friends = Auth::user()->friends();
    	$requests = Auth::user()->friendRequests();
	return view('friends.index')->with('friends', $friends)->with('requests', $requests);
    }
    
     public function getAdd($username)
    {
    	$user = User::where('username', $username)->first();
    	if (!$user) {
    		return redirect()->route('global.index')->with('info', 'That user could not be found!');
    	}
    	
    	if (Auth::user()->id === $user->id) {
	    	return redirect()->route('global.index');
    	}
    	
    	if (Auth::user()->hasFriendRequestsPending($user) || $user->hasFriendRequestsPending(Auth::user())) {
    		return redirect()
    		->route('profile.index', ['username' => $user-> $username])
    		->with('info', 'Friend request already been sent waiting for your friend response.');
    	}
    	
    	if (Auth::user()->isFriendsWith($user)) {
    		return redirect()
    		->route('profile.index', ['username' => $user-> $username])
    		->with('info', 'You are already friends.');
    	}
    	
    	Auth::user()->addFriend($user);
    	return redirect()
    		->route('profile.index', ['username' => $username])
    		->with('info', 'Friend request sent.');
    	
    	
    }
    
    public function getAccept($username)
    {
    	$user = User::where('username', $username)->first();
    	if (!$user) {
    		return redirect()->route('global.index')->with('info', 'That user could not be found!');
    	}
    	
    	if (!Auth::user()->hasFriendRequestsReceived($user)) {
    		return redirect()->route('global.index');
    	}
    	
    	Auth::user()->acceptFriendRequest($user);
    	return redirect()
    		->route('profile.index', ['username' => $username])
    		->with('info', 'Friend request accepted.');
    }
    
    public function postDelete($username)
    {
    	$user = User::where('username', $username)->first();
    	    	if (!Auth::user()->isFriendsWith($user)) {
    		return redirect()->back();
    	}
    	
    	Auth::user()->deleteFriend($user);
    	return redirect()->back()->with('info', 'Frined deleted');
    	
    	
    }
    
}