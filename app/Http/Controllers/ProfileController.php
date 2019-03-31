<?php 

namespace cdn\Http\Controllers;

use Auth;
use cdn\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function getProfile($name)
    {
    	$user = User::where('name', $name)->first();
    	
    	if (!$name) {
    		abort(404);
    	}
    	   	
    	return view ('dashboard.index')->with('name', $name);
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
