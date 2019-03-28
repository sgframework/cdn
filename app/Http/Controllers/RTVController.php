<?php

namespace cdn\Http\Controllers;

use Illuminate\Http\Request;

class RTVController extends Controller
{
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
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('rtv.index');
    }    
    public function add()
    {
        return view('');
    }

}
