<?php
namespace cdn\Http\Controllers;
use cdn\User;
use cdn\Models\Item;
use cdn\Models\Itemv2;
use cdn\Models\Branch;
use DB;
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
            'logo' => ['string', 'max:255'],
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
            'logo' => $request['logo'],
        ]);
        $branches = Branch::select('branchname', 'branchnumber', 'logo')->orderBy('created_at', 'desc')->paginate(50);       
        return redirect()->back()->with('msg', 'You`ve just added a new branch successfully.');
    }
    	
    public function getBranches(Request $request)
    {
        $branches = Branch::select()->orderBy('salesgroup', 'asc')->paginate(600);       
        return view('branches.index')->with('branches', $branches);
    }
    
    public function addBranch()
    {
        return view ('branches.add');
    }


    public function dynDD()
    {
        $branches_list = DB::table('branches')
                        ->groupBy('branchname')
                        ->get();
        return view('orders.add')->with('branches_list', $branches_list);
    }
}