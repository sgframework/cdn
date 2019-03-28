<?php 

namespace cdn\Http\Controllers;

use Auth;
use cdn\Models\User;
use cdn\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{

	public function getIndex($slug)
    	{
    	$status = Status::where('draft', '=', 1)->get();
    	
	return view('status.index')->with('status', $status);
    	}
    	
    	public function getShow($slug)
    	{
    	    	$status = Status::where('slug', '=', $slug)->firstOrFail();

 		return view('status.show')->with('status', $status);
    	}
    	
    	    	public function getSShow($slug)
    	{
    	    	$slug = Status::where('slug', '=', $slug)->firstOrFail();
    	    	$user = User::where('username', $username)->first();
    	    	
 		return view('status.show')->with('slug', $slug)->with('user', $user);
    	}


	public function setTitle($title)
	{
	    $this->attributes['title'] = $title;
	    $this->attributes['slug'] = Str::slug($title);
	}


    public function postStatus(Request $request)
    {
    	$this->validate($request, [
    	    	'title' => 'max:1000',
    		'status' => 'required|max:10000',
    		
    	]);
    	
    	Auth::user()->statuses()->create([
	    	'title' => $request->input('title'),
    		'body' => $request->input('status'),
    		'slug' => $request->input('title'),
    		
    	]);
    	
    	return redirect()->route('home')->with('info', 'Your status has been posted.');
    	
    }
     public function postReply(Request $request, $statusId)
     {
     	$this->validate($request, [
    		"reply-{$statusId}" => 'required|max:10000',
    	], [
    		'required' => 'The reply body is required.'
    	
    	]);
    	
    	$status = Status::notReply()->find($statusId);
    	
    	if (!$status) {
    		return redirect()->route('home');
    	}
    	
    	    	if (!Auth::user()->isFriendsWith($status->user) && Auth::user()->id !== $status->user->id) {
    		return redirect()->route('home');
    	}
    	
    		$reply = Status::create([
    			'body' => $request->input("reply-{$statusId}"),
    		])->user()->associate(Auth::user());
    		
    		$status->replies()->save($reply);
    		return redirect()->back();
    		
    	
     }
     
     
     
     
       public function getLike($statusId)
     {
     	$status = Status::find($statusId);
     	
     	if (!$status) {
     		return redirect()->route('home');     		
     	}
     	
     	if (!Auth::user()->isFriendsWith($status->user)) {
     		return redirect()->route('home');    
     	}
     	
     	if (Auth::user()->hasLikedStatus($status)) {
     		return redirect()->back();
     	}
     	
     	$like = $status->likes()->create([]);
     	Auth::user()->likes()->save($like);
     	return redirect()->back();
     	
     }
     
     
     
 
     public function getStatusId($statusId)
    	{
    	$status = Status::find($statusId);
    	$user = User::where('username', $username)->first();
	return view('status.index'); 
	
	
	$statusId = Auth::user()->statuses();
	return view('status.byid')->with('statusId', $statusId);
    	}
     

     
	
    
    
    
    
    
}