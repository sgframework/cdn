<?php

namespace cdn\Http\Controllers;
use cdn\Models\Item;
use cdn\Models\Itemv2;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;



class ItemsController extends Controller
{
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  Request  $request
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(Request $request)
    {
        return Validator::make($request, [
            'itemnumber' => ['required', 'string', 'max:255'],
            'itemname' => ['required', 'string', 'max:255'],
            'itemprice' => ['required', 'decimal', 'max:255'],
            'itemsku' => ['required', 'string', 'max:255'],
            'plant' => ['required'],
            'instock' => ['required', 'string', 'max:255'],
            'link' => ['string', 'max:255'],
            'type' => ['string'],
            'itempic' => ['string']
  
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $request
     * @return \cdn\Item
     */
    protected function InsertItems(Request $request)
    {
        Item::create([
            'itemnumber' => $request['itemnumber'],
            'itemname' => $request['itemname'],
            'itemprice' => $request['itemprice'],
            'itemsku' => $request['itemsku'],
            'plant' => $request['plant'],
            'instock' => $request['instock'],
            'link' => $request['link'],
            'type' => $request['type'],
            'group' => $request['group'],
            'itempic' => $request['itempic']
        ]);
        $items = Item::select('itemnumber', 'itemname', 'itemprice', 'itemsku', 'plant', 'instock', 'link', 'type', 'group', 'itempic')->orderBy('created_at', 'desc')->paginate(10);
        return redirect()->route('items.index')->with('info', 'Your item has been created')->with('items', $items);
    }
    	

        public function getItems(Request $request)
        {
            $items = Item::select()->orderBy('itemnumber', 'asc')->paginate(600);
            //dump($items);

            return view('items.index')->with('items', $items);
        }

        public function addItem()
        {
            return view ('items.add');
        }

}
