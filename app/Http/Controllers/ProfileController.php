<?php 

namespace cdn\Http\Controllers;

use Auth;
use cdn\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getProfile($user)
    {
    	$user = User::where('user', $user)->first();
    	
    	if (!$user) {
    		abort(404);
    	}
    	   	
    	return view ('profile.index')->with('user', $user)->with('statuses', $statuses)->with('authUserIsFriend', Auth::user()->isFriendsWith($user));
    }
    public function getEdit()
    {
    return view ('profile.edit');
    }
    public function postEdit(Request $request)
    {
    	$this->validate($request, [
    		'first_name' => 'alpha|max:50',
    		'last_name' => 'alpha|max:50',
    		'location' => 'max:20',
    	]);
    	
    	Auth::user()->update([
    		'first_name' => $request->input('first_name'),
    		'last_name' => $request->input('last_name'),
    		'location' => $request->input('location'),
    	]);
    	
    	return redirect()->route('profile.edit')->with('info', 'Your profile has been updated.');
    	
    }
    
}
