<?php 

namespace cdn\Http\Controllers;
use Auth;
use cdn\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getSignup()
    {
        return view('auth.signup');
    }
    

    public function postSignup(Request $request)
    {
    	$this->validate($request, [
    	'email' => 'required|unique:users|email|max:255',
    	'username' => 'required|unique:users|alpha_dash|max:20',
    	'password' => 'required|min:6',
    	'salt' => 'max:100',
    	'ipaddr' => 'max:100',
    	
    	]);
    	

    	User::create([
    	'email' => $request->input('email'),
    	'username' => $request->input('username'),
    	'password' => bcrypt($request->input('password')),
    	'salt' => base64_encode($request->input('salt')),
    	'ipaddr' => $request->input('ipaddr'),
    	
    	
    	]);
    	return redirect()->route('index')->with('info', 'Your account has been created');
    }
    
    public function getSignin()
    {
    	return view('auth.signin');
    }
    
    public function postSignin(Request $request)
    {
    	$this->validate($request, [
    	'username' => 'required',
    	'password' => 'required',
    	]);
    	if (!Auth::attempt($request->only(['username', 'password']), $request->has('remember'))) {
   	return redirect()->back()->with('info', 'Couldn`t sign you in with provided credentials');
    	}   
    	 return redirect()->route('dashboard')->with('info', 'Welcome back, your are now signed in');   	
    }
    
    public function getSignout()
    {
    	Auth::logout();
    	return redirect()->route('index');
    }
}