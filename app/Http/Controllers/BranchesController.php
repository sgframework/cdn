<?php

namespace cdn\Http\Controllers;
use cdn\User;
use cdn\Models\Branch;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;



class BranchesController extends Controller
{
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '{{ rout(branches.index)}}';

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
    protected function validator(array $request)
    {
        return Validator::make($request, [
            'branchnumber' => ['required', 'string', 'max:255'],
            'branchname' => ['required', 'string', 'max:255'],

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $request
     * @return \cdn\Branch
     */
    protected function InsertBranches(Request $request)
    {
        Branch::create([
            'branchnumber' => $request['branchnumber'],
            'branchname' => $request['branchname'],

        ]);
        return view('branches.index', ['branchname' => $request['branchname']]);
    }
    	

        public function getBranches(Request $request)
        {
            $branches = Branch::select('branchname', 'branchnumber')->get();       
            return view('branches.index')->with('branches', $branches);
        }


        
        public function addBranch()
        {
            return view ('branches.add');
        }

}
