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
        $branches = Branch::select('branchname', 'branchnumber')->orderBy('created_at', 'desc')->paginate(10);       
        return view('branches.index')->with('branches', $branches);
    }
    	
        public function getBranches(Request $request)
        {
            $branches = Branch::select('branchname', 'branchnumber')->orderBy('created_at', 'desc')->paginate(10);       
            return view('branches.index')->with('branches', $branches)->with('msg', 'You`ve just added a new branch successfully.');
        }
        
        public function addBranch()
        {
            return view ('branches.add');
        }
}