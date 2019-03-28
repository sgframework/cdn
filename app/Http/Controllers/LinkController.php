<?php 

namespace cdn\Http\Controllers;

use cdn\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{	


 
    
    
        public function makeUrl()
    {
		$validator = Validator::make(Input::all(), array(
			'url' => 'required|url|max:255'
		));
		
		if($validator->fails())
		 {
			return Redirect::action('home')->withInput()->withErrors($validator);	 
		 } else {
		 	$url = Input::get('url');
		 	$code = null;
		 	
		 	$exists = Link::where('url', '=', $url);
		 	if($exists->count() === 1) {
		 		echo 'Exists';
		 	} else {
		 		echo 'Dosn`t Exists';
		 	}
		 }
		 
     }
    
    
        public function getUrl($code)
    {
        
        dd($code);
    }
    
    
    
    
}