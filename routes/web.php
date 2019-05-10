<?php

use cdn\User;
use cdn\Models\Order;
use cdn\Models\OrderItems;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your cdnlication. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
// return view('global.index');
//   });

    Route::get('/', [
        'uses' => '\cdn\Http\Controllers\GlobalController@getIndex',
    'as' => 'global.index',
    ]);

    Route::get('/manager', [
        'uses' => '\cdn\Http\Controllers\GlobalController@getManager',
    'as' => 'global.manager',
    ]);

    
Auth::routes();
Auth::routes(['verify' => true]);



Route::get('test0', function(){
    return "<pre>" . print_r(Order::all(), true) . "</pre>";
});



Route::get('test1', function(){
    return "<p style='color:red'>" . Order::get("ordernumber")->where('ponumber', "99088543") . "</p><br /><hr />";
});




//Route::get('global.index', ['as'=>'global.index','uses'=>'HomeController@index']);


Route::group(['middleware' => 'is-admin'], function () {     

 
    Route::get('admins', ['as'=>'admins','uses'=>'HomeController@admins']); 
});



/** Root Routes */

Route::get('/root', [
    'uses' => '\cdn\Http\Controllers\RootController@getIndex',
'as' => 'root.index',
]);

/*
Route::get('/root/orders/{slug}', [
    'uses' => '\cdn\Http\Controllers\RootController@getOrdersByUserId',
'as' => 'root.orders',
]);

*/
Route::get('/root/orders/{idnumber}', [
    'uses' => '\cdn\Http\Controllers\RootController@getOrdersByUserId',
'as' => 'root.user.orders',
]);

Route::get('/root/orders/{idnumber}/{slug}', [
    'uses' => '\cdn\Http\Controllers\RootController@getOrdersByIdAndSlug',
'as' => 'root.userorder.orders',
]);

Route::get('/root/users/orders/all', [
    'uses' => '\cdn\Http\Controllers\RootController@getAllOrders',
'as' => 'root.orders.all',
]);

Route::get('/root/users/orders/stats', [
    'uses' => '\cdn\Http\Controllers\RootController@getStats',
'as' => 'root.stats.totals',
]);

Route::get('/root/readme', [
    'uses' => '\cdn\Http\Controllers\RootController@getReadMe',
'as' => 'root.readme',
]);


Route::get('/root/readme-v0.02', [
    'uses' => '\cdn\Http\Controllers\RootController@getRM',
'as' => 'root.md',
]);

Route::get('/root/readme-v0.03', [
    'uses' => '\cdn\Http\Controllers\RootController@getRMindex',
'as' => 'root.md.index',
]);

/** /root/mysql/sgdb0 */
Route::get('/root/mysql/sgdb0', [
    'uses' => '\cdn\Http\Controllers\RootController@getDB',
'as' => 'root.mysql',
]);

/** /root/mysql/sgdb0 */
Route::post('/root/mysql/sgdb0/post', [
    'uses' => '\cdn\Http\Controllers\RootController@postCommand',
'as' => 'root.mysql.post',
]);



/** Orders Routes */
Route::post('/root/orders/{idnumber}/{slug}/success', [
    'uses' => '\cdn\Http\Controllers\RootController@completeOrder',
    'as' => 'orders.complete']);

Route::get('/orders/order/{slug}/success', [
    'uses' => '\cdn\Http\Controllers\OrdersController@successOrder',
    'as' => 'orders.success']);

Route::get('/root/orders/{idnumber}/submitted/to/completed', [
    'uses' => '\cdn\Http\Controllers\OrdersController@exportReport',
    'as' => 'root.orderexport']);

/* {{ route('root.tree') }} */

Route::get('root/tree', [
    'uses' => '\cdn\Http\Controllers\RootController@getTree',
    'as' => 'root.tree']);    





/*
http://ipool.remotewebaccess.com/root/orders/5303/00007230991-42002222
http://ipool.remotewebaccess.com/root/orders/00007230991-42002222
http://ipool.remotewebaccess.com/root/orders/5303
*/

Route::get('/tests', [
    'uses' => '\cdn\Http\Controllers\RootController@getTest',
'as' => 'tests.index',
]);

Route::get('/tests-csv', [
    'uses' => '\cdn\Http\Controllers\RootController@getCsv',
'as' => 'tests.index',
]);

Route::get('/tests/othaim', [
    'uses' => '\cdn\Http\Controllers\OrdersController@listOthiam',
'as' => 'tests.othaim',
]);


Route::get('/tests/review', [
    'uses' => '\cdn\Http\Controllers\RootController@getReview',
'as' => 'orders.review',
]);



/*
* External Services.
*/

Route::get('/mail', [
    'uses' => '\cdn\Http\Controllers\RootController@getMail',
'as' => 'tests.email',
]);


Route::get('/md', [
    'uses' => '\cdn\Http\Controllers\RootController@getMd',
'as' => 'tests.markdown',
]);


/*
* User Profile
*/

Route::get('/user/{id}', [
    'uses' => '\cdn\Http\Controllers\ProfileController@getProfile',
    'as' => 'dashboard.index'
]);

Route::get('/manager/{id}', [
    'uses' => '\cdn\Http\Controllers\ProfileController@getManager',
    'as' => 'dashboard.manager'
]);

Route::get('/admin/{id}', [
    'uses' => '\cdn\Http\Controllers\ProfileController@getAdmin',
    'as' => 'dashboard.admin'
]);

Route::get('/user/{id}/orders/archive', [
    'uses' => '\cdn\Http\Controllers\ProfileController@getArchive',
    'as' => 'dashboard.archive'
]);

//{{ route('dashboard.orders') }}

Route::get('/user/{id}/orders/', [
    'uses' => '\cdn\Http\Controllers\OrdersController@getOrdersbyUser',
'as' => 'dashboard.orders',

]);



Route::get('/profile/edit', [
	    'uses' => '\cdn\Http\Controllers\ProfileController@getEdit',
    'as' => 'profile.get',
]);

Route::post('/profile/edit', [
        'uses' => '\cdn\Http\Controllers\ProfileController@profileEdit',
        'as' => 'profile.edit',

]);



Route::post('/profile/imgupdate', [
	    'uses' => '\cdn\Http\Controllers\UploadController@photoEdit',
    	'as' => 'photo.edit',
]);




/*
* Authintication


Route::get('/signup', [
    'uses' => '\App\Http\Controllers\AuthController@getSignup',
    'as' => 'auth.signup',
    'middleware' => ['guest'],
]);


Route::post('/signup', [
    'uses' => '\App\Http\Controllers\AuthController@postSignup',
    'middleware' => ['guest'],
]);



Route::get('/signin', [
    'uses' => '\App\Http\Controllers\AuthController@getSignin',
    'as' => 'auth.signin',
    'middleware' => ['guest'],
]);


Route::post('/signin', [
    'uses' => '\App\Http\Controllers\AuthController@postSignin',
    'middleware' => ['guest'],
]);

Route::get('/signout', [
    'uses' => '\App\Http\Controllers\AuthController@getSignout',
    'as' => 'auth.signout'
]);


*/

//Route::get('/home', 'HomeController@index')->name('global.index');
//Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
//Route::get('/process', 'ProcessController@index')->name('process');
//Route::get('/items', 'ItemsController@index')->name('items');
//Route::get('/add-item', 'ItemsController@add')->name('add');
//Route::post('/post-item', 'ItemsController@post')->name('post');
//Route::get('/submit-rtv', 'RtvController@index')->name('rtv');


//{{ route('dashboard.index') }}

/*Route::get('/dashboard', [
    'uses' => '\cdn\Http\Controllers\ProfileController@getProfile',
'as' => 'dashboard.index',
]);

*/
//{{ route('branches.index') }}

Route::post('/branch/insert', [
    'uses' => '\cdn\Http\Controllers\BranchesController@InsertBranches',
'as' => 'branches.insert',
]);


//{{ route('branchs.insert') }}
Route::get('/branches', [
    'uses' => '\cdn\Http\Controllers\BranchesController@getBranches',
'as' => 'branches.index',
]);

Route::get('/branch/add', [
    'uses' => '\cdn\Http\Controllers\BranchesController@addBranch',
'as' => 'branches.add',

]);


//{{ route('orders.index') }}


Route::get('/orders', [
    'uses' => '\cdn\Http\Controllers\OrdersController@getOrders',
'as' => 'orders.index',

]);



/*
Route::post('/order/insert', [
    'uses' => '\cdn\Http\Controllers\OrdersController@InsertOrders',
'as' => 'orders.insert',

]);

*/

Route::get('/order/add', [
    'uses' => '\cdn\Http\Controllers\OrdersController@addOrder',
'as' => 'orders.add',

]);

Route::post('/promo/mass/upload', [
'uses' => '\cdn\Http\Controllers\OrdersController@promoOrder',
'as' => 'promo.order'
]);

Route::get('/order/add/urgent', [
    'uses' => '\cdn\Http\Controllers\OrdersController@addUrgentOrder',
'as' => 'orders.urgent',

]);


Route::get('/order/add/step1', [
    'uses' => '\cdn\Http\Controllers\OrdersController@addOrderStep1',
'as' => 'orders.partials.step1',

]);

Route::post('/order/insert/step1', [
    'uses' => '\cdn\Http\Controllers\OrdersController@insertOrderStep1',
'as' => 'orders.insert.step1',

]);


Route::get('/order/add/step2', [
    'uses' => '\cdn\Http\Controllers\OrdersController@addOrderStep2',
'as' => 'orders.partials.step2',

]);

Route::post('/order/insert/step2', [
    'uses' => '\cdn\Http\Controllers\OrdersController@insertOrderStep2',

]);








Route::get('/orders/order/{slug}', [
    'uses' => '\cdn\Http\Controllers\OrdersController@getOrderNumber',
    'as' => 'orders.order'])/*->where('slug', '[\d\-]+')*/;


Route::get('/orders/order/{slug}/edit', [
    'uses' => '\cdn\Http\Controllers\OrdersController@editOrderNumber',
    'as' => 'orders.edit'])/*->where('slug', '[\d\-]+')*/;
  

Route::post('/orders/order/{slug}/remove/{itemnumber}', [
    'uses' => '\cdn\Http\Controllers\OrdersController@removeOrderItem',
    'as' => 'orders.remove']);

Route::post('/orders/order/{slug}/change', [
    'uses' => '\cdn\Http\Controllers\OrdersController@updatePo',
    'as' => 'update.po']);

Route::post('/orders/order/{slug}/delete', [
'uses' => '\cdn\Http\Controllers\OrdersController@deletePo',
'as' => 'delete.po']);
    
Route::post('/orders/order/{slug}/remove/{ponumber}', [
    'uses' => '\cdn\Http\Controllers\OrdersController@removeOrder',
    'as' => 'orders.destroy']);

/*Route::post('/orders/order/{slug}/destroy/', [
    'uses' => '\cdn\Http\Controllers\OrdersController@tableDestroy',
    'as' => 'orders.destroy']);
*/    
        
Route::post('/orders/order/{slug}/insert', [
    'uses' => '\cdn\Http\Controllers\OrdersController@insertOrderItems',
    'as' => 'orders.insert'])/*->where('slug', '[\d\-]+')*/;
    
    
        
Route::get('/orders/order/{slug}/review', [
    'uses' => '\cdn\Http\Controllers\OrdersController@reviewOrderItems',
    'as' => 'orders.review']);


Route::post('/orders/order/{slug}/backedit', [
    'uses' => '\cdn\Http\Controllers\OrdersController@backEditOrderItems',
    'as' => 'orders.backedit']);

Route::post('/orders/order/{slug}/attachpo', [
    'uses' => '\cdn\Http\Controllers\OrdersController@attachPo',
    'as' => 'orders.attachpo']);

Route::post('/orders/order/{slug}/submit', [
    'uses' => '\cdn\Http\Controllers\OrdersController@submitOrder',
    'as' => 'orders.submit']);


  /*  
Route::post('/orders/order/submit', function (\Illuminate\Http\Request $request, \Illuminate\Mail\Mailer $mailer) {
    $mailer
        ->to('root@ies.com')
        ->send(new \cdn\Mail\OrderSubmitted);
    return redirect()->back();
    
})->name('orders.submit');

*/

/*
* Search
*/

Route::get('/search/items', [
    'uses' => '\cdn\Http\Controllers\SearchController@getItems',
    'as' => 'search.items'
]);

Route::get('/search/branches', [
    'uses' => '\cdn\Http\Controllers\SearchController@getBranches',
    'as' => 'search.branches'
]);


/**{{ route('search.pos') }} */

Route::get('/search/pos', [
    'uses' => '\cdn\Http\Controllers\SearchController@getPos',
    'as' => 'search.pos'
]);


Route::get('/root/search/orders', [
    'uses' => '\cdn\Http\Controllers\SearchController@getOrder',
    'as' => 'search.orders'
]);


Route::get('/submit-rtv', [
    'uses' => '\cdn\Http\Controllers\RtvController@getIndex',
'as' => 'rtv.index',
]);

Route::post('/item/insert', [
    'uses' => '\cdn\Http\Controllers\ItemsController@InsertItems',
'as' => 'items.insert',
]);

Route::get('/items', [
    'uses' => '\cdn\Http\Controllers\ItemsController@getItems',
    'as' => 'items.index'
]);

Route::get('/item/add', [
    'uses' => '\cdn\Http\Controllers\ItemsController@addItem',
'as' => 'items.add',

]);









/*
* Alert-Test
*/

Route::get('/alert', function () {
    return redirect()->route('global.index')->with('alert', 'Congratulations! Your order have been submitted successfully.');
});



/*
* Search
*/

//Route::get('/search', [
//   'uses' => '\cdn\Http\Controllers\SearchController@getResults',
//  'as' => 'search.results'
//]);





//****
//EXPORT CSV REPORTS
/**/


/* Export All Orders CSV */

Route::get('/export-orders-csv' , function() {

    $table = Order::all();
    $filename = "orders.csv";
    $handle = fopen($filename, 'w+');
    fputcsv($handle, array('ordernumber', 'By#ID',  'PO#', 'Branch#Name', 'Created'));

    foreach($table as $row) {
        fputcsv($handle, array($row['ordernumber'], $row['staffid'], $row['ponumber'], $row['created_at']));
    }

    fclose($handle);

    $headers = array(
        'Content-Type' => 'text/csv',
    );

    return Response::download($filename, 'orders.csv', $headers);
});


/* Export All Orderitems CSV */

Route::get('/export-orderitems-csv' , function() {

    $table = OrderItems::all();
    $filename = "orders.csv";
    $handle = fopen($filename, 'w+');
    fputcsv($handle, array(
        'By',
        'PO#',
        'Customer',
        'Items',
        'Qty',
        'Price',
    ));

    foreach($table as $row) {
        fputcsv($handle,array(
            $row['staffname'],
            $row['ponumber'],
            $row['branchname'],
            $row['orderitems'],
            $row['itemqty'],
            $row['itemprice']
    ));
    }

    fclose($handle);

    $headers = array(
        'Content-Type' => 'text/csv',
    );

    return Response::download($filename, 'orders.csv', $headers);
});

/* Export Todays Orders CSV */
Route::get('/export-orders-csv/today' , function() {
    $today = date("Y-m-d", strtotime( '0 days' ) );	
    $date = \Carbon\Carbon::today()->subDays(0);
    $thisdayorders = Order::where('created_at', '>=', $date)->get();
    $todaysorders = Order::whereDate('created_at', '=', $thisdayorders )->where('status', '=', 'Completed')->get();
    $sumalltodaysorders = $todaysorders->sum('totalprice');
    $filename = "orders.csv";
    $handle = fopen($filename, 'w+');
    fputcsv($handle, array(
        'By',
        'PO#',
        'Customer',
        'Items',
        'Total Qtys',
        'Total Price',
        'Status',
        'SUM',
        'SUM' => number_format($sumalltodaysorders) . ' SAR',
    ));
    foreach($thisdayorders as $row) {
        fputcsv($handle,array(
            $row['staffname'],
            $row['ponumber'],
            $row['branchname'],
            $row['orderitems'],
            $row['totalqty'],
            number_format($row['totalprice']) . '.00',
            $row['status'],
    ));
    }
    fclose($handle);
    $headers = array(
        'Content-Type' => 'text/csv',
    );
    return Response::download($filename, date("d-m-Y") . '-orders.csv', $headers);
});

/* Export All Todays Orders With Items CSV */
Route::get('/export-orders-orderitems-csv/today' , function() {
    $today = date("Y-m-d", strtotime( '0 days' ) );	
    $yesterday = date("Y-m-d", strtotime( '1 days' ) );	
    //$todaysorders = Order::whereDate('created_at', $today )->get();
    $todaysorderitems = OrderItems::whereBetween('created_at', array($today, $yesterday))->get();
    $sumalltodaysorders = $todaysorderitems->sum('totalprice');
    $filename = "orders-orderitems-today.csv";
    $handle = fopen($filename, 'w+');
    fputcsv($handle, array(
        'By-ID',
        'PO#',
        'Customer',
        'Items',
        'Total Qtys',
        'Item Price',
        'Total Price',
    ));
    foreach($todaysorderitems as $row) {
        fputcsv($handle,array(
            $row['staffname'] . '-' . $row['staffid'],
            $row['ponumber'],
            $row['branchname'],
            $row['orderitems'],
            $row['itemqty'],
            number_format($row['itemprice']) . '.00',
            $row['itemqty'] * $row['itemprice']
    ));
    }
    fclose($handle);
    $headers = array(
        'Content-Type' => 'text/csv',
    );
    return Response::download($filename,  date("d-m-Y") . '-orders+items.csv', $headers);
});
/* Export All Todays Orders With Items Copy & Paste => Excel */
Route::get('/export-orders-orderitems-csv/excel' , function() {
    $today = date("Y-m-d", strtotime( '0 days' ) );	
    $todaysorders = Order::whereDate('created_at', $today )->get();
    $todaysorderitems = OrderItems::whereDate('created_at', $today )->get();
    $sumalltodaysorders = $todaysorders->sum('totalprice');
    $filename = "orders-orderitems-today.csv";
    $handle = fopen($filename, 'w+');
    fputcsv($handle, array(
        'row identification', 
        'Distribution Channe',
        'PO#',
        ' ',
        'Customer#',
        'Item#',
        ' ',
        ' ',
        'Qty',
    ));
    foreach($todaysorderitems as $row) {
        fputcsv($handle,array(
            'H',
            '24',
            $row['ponumber'],
            ' ',
            $row['branchnumber'],
            $row['itemnumber'],
            ' ',
            ' ',
            $row['itemqty'],
    ));
    }
    fclose($handle);
    $headers = array(
        'Content-Type' => 'text/csv',
    );
    return Response::download($filename,  date("Y-m-d") . '-orders+items.csv', $headers);
});






 # We will use this function to generate a CSV
 Route::get('/export-orders-orderitems-csv/function', function() {
    $filename = "orders-orderitems-today.csv";
    $headers = array(
        'Content-Type' => 'text/csv',
    );
    function exportCSV($headings=false, $rows=false, $filename=false)
 {
     # Ensure that we have data to be able to export the CSV
     if ((!empty($headings)) AND (!empty($rows)))
     {
         # modify the name somewhat
         $name = ($filename !== false) ? $filename . ".csv" : "export.csv";

         # Set the headers we need for this to work
         header('Content-Type: text/csv; charset=utf-8');
         header('Content-Disposition: attachment; filename=' . $name);

         # Start the ouput
         $output = fopen('php://output', 'w');

         # Create the headers
         fputcsv($output, $headings);

         # Then loop through the rows
         foreach($rows as $row)
         {
             # Add the rows to the body
             fputcsv($output, $row);
         }

         # Exit to close the stream off
         exit();
     }

     # Default to a failure
     return false;
    }
 return Response::download($filename, 'submitted-' . date("Y-m-d") . '-orders+items.csv', $headers);
});



/* Export All Todays Submitted Orders With Items Copy & Paste => Excel -> Change to Completed*/
Route::get('/export-orders-orderitems-csv/submitted/to/completed' , function() {
    $today = date("Y-m-d", strtotime( '0 days' ) );	
    $todaysorders = Order::whereDate('created_at', $today )->where('status', '=', 'Submitted' )->get();
    $todaysorderitems = OrderItems::whereDate('created_at', $today )->where('orderstatus', '=', 'Submitted' )->orderBy('created_at', 'asc')->get();
    $sumalltodaysorders = $todaysorders->sum('totalprice');
    $filename = "orders-orderitems-today.csv";
    $handle = fopen($filename, 'w+');
    fputcsv($handle, array(
        'row identification', 
        'Distribution Channe',
        'PO#',
        ' ',
        'Customer#',
        'Item#',
        ' ',
        ' ',
        'Qty',
        'asked price',
        'Free',
    ));

        foreach($todaysorderitems as $row) {
            if ($row->sum('freeitem') > 0){
                $todaysorderitems   .= "\n".trim(@$row['itemnumber'])."\n";
                fputcsv($handle,
                  array(       
                    'H', '24', $row['ponumber'], ' ', $row['branchnumber'],
                    $row['itemnumber'],
                    ' ',
                    ' ',
                    $row['itemqty'],
                    $row['itemprice'] - $row['askedprice'],
                    $row['freeitem'],
                    ));
                    }else{
                        $itemCode   .= "\n".trim(@$repairDetailData['ItemMaster']->Item_Code)."\n";
                    fputcsv($handle,
                    array(              
                    'H',
                    '24',
                    $row['ponumber'],
                    'with free items',           

            ));
        }

    }
    fclose($handle);
    $headers = array(
        'Content-Type' => 'text/csv',
    );


    $out = fopen('php://output', 'w');
fclose($out);
//dump($out);
    

   

    $currentuser = \Auth::user();
    $allorders = Order::where('staffid', '=', $currentuser->idnumber)->where('status', '=', 'Completed')->get();
    $sumallorders = $allorders->sum('totalprice');
    User::where('idnumber', '=', $currentuser->idnumber)->update(['updated_at' => now(), 'totalgrand' => $sumallorders]);
    Order::where('status', '=', 'Submitted')->update(['updated_at' => now(), 'status' => 'Completed', 'processedby' => \Auth::user()->idnumber]);
    OrderItems::where('orderstatus', '=', 'Submitted')->update(['updated_at' => now(), 'orderstatus' => 'Completed']);
  
    return Response::download($filename, 'submitted-' . date("Y-m-d") . '-orders+items.csv', $headers);
});



/* Export All Todays Submitted Orders With Items BY USER Copy & Paste => Excel -> Change to Completed*/
Route::get('/export-orders-orderitems-csv/{idnumber}/submitted/to/completed' , function($idnumber) {
    $today = date("Y-m-d", strtotime( '0 days' ) );	
    $todaysorders = Order::whereDate('created_at', $today )->where('staffid', '=', $idnumber)->where('status', '=', 'Submitted' )->get();
    $todaysorderitems = OrderItems::whereDate('created_at', $today )->where('staffid', '=', $idnumber)->where('orderstatus', '=', 'Submitted' )->orderBy('created_at', 'asc');
    $header =  OrderItems::whereDate('created_at', $today )->where('staffid', '=', $idnumber)->where('orderstatus', '=', 'Submitted' )->whereNotNull('ordernumber')->orderBy('created_at', 'asc')->get();
    $body = OrderItems::whereDate('created_at', $today )->where('staffid', '=', $idnumber)->where('orderstatus', '=', 'Submitted' )->whereNull('ordernumber')->orderBy('created_at', 'asc')->get();
    $user = User::all();    
    $firas = $user->where('email', '=', 'foz@sunbulahgroup.com')->first();
    $hazim = $user->where('email', '=', 'hhz@sunbulahgroup.com')->first();
    $awaden = $user->where('email', '=', 'mwd@sunbulahgroup.com')->first();
    
    
    $michael = $user->where('idnumber', '=', '1275')->first();
    $countmichaelorders = Order::where('staffid', '=', $michael->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
    $countmichaelfp = OrderItems::where('staffid', '=', $michael->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('created_at', 'asc')->get();
    $mohammedsayed = $user->where('idnumber', '=', '5275')->first();
    $countmohammedsayedorders = Order::where('staffid', '=', $mohammedsayed->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
    $countmohammedsayedfp = OrderItems::where('staffid', '=', $mohammedsayed->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('created_at', 'asc')->get();
    $fahaddahasy = $user->where('idnumber', '=', '2745')->first();
    $countfahaddahasyorders = OrderItems::where('staffid', '=', $fahaddahasy->idnumber)->where('orderstatus', '=', 'Submitted')->groupBy('slug')->get();
    $countfahaddahasyfp = OrderItems::where('staffid', '=', $fahaddahasy->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('created_at', 'asc')->get();
    $abdullahnaser = $user->where('idnumber', '=', '2409')->first();
    $countabdullahnaserorders = OrderItems::where('staffid', '=', $abdullahnaser->idnumber)->where('orderstatus', '=', 'Submitted')->groupBy('slug')->get();
    $countabdullahnaserfp = OrderItems::where('staffid', '=', $abdullahnaser->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('created_at', 'asc')->get();
    $hassanfathi = $user->where('idnumber', '=', '4401')->first();
    $counthassanfathiorders = OrderItems::where('staffid', '=', $hassanfathi->idnumber)->where('orderstatus', '=', 'Submitted')->groupBy('slug')->get();
    $counthassanfathifp = OrderItems::where('staffid', '=', $hassanfathi->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('created_at', 'asc')->get();
    $samsudin = $user->where('idnumber', '=', '1171')->first();
    $countsamsudinorders = OrderItems::where('staffid', '=', $samsudin->idnumber)->where('orderstatus', '=', 'Submitted')->groupBy('slug')->get();
    $countsamsudinfp = OrderItems::where('staffid', '=', $samsudin->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('created_at', 'asc')->get();
    $ahmedmedhat = $user->where('idnumber', '=', '4688')->first();
    $countahmedmedhatorders = OrderItems::where('staffid', '=', $ahmedmedhat->idnumber)->where('orderstatus', '=', 'Submitted')->groupBy('slug')->get();
    $countahmedmedhatfp = OrderItems::where('staffid', '=', $ahmedmedhat->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('created_at', 'asc')->get();
    $hashem = $user->where('idnumber', '=', '3761')->first();
    $counthashemorders = OrderItems::where('staffid', '=', $hashem->idnumber)->where('orderstatus', '=', 'Submitted')->groupBy('slug')->get();
    $counthashemfp = OrderItems::where('staffid', '=', $hashem->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('created_at', 'asc')->get();
    $wail = $user->where('idnumber', '=', '2469')->first();
    $countwailorders = OrderItems::where('staffid', '=', $wail->idnumber)->where('orderstatus', '=', 'Submitted')->groupBy('slug')->get();
    $countwailfp = OrderItems::where('staffid', '=', $wail->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('created_at', 'asc')->get();
    $noufal = $user->where('idnumber', '=', '2076')->first();
    $countnoufalorders = OrderItems::where('staffid', '=', $noufal->idnumber)->where('orderstatus', '=', 'Submitted')->groupBy('slug')->get();
    $countnoufalfp = OrderItems::where('staffid', '=', $noufal->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('created_at', 'asc')->get();
    $ruben = $user->where('idnumber', '=', '1555')->first();
    $countrubenorders = OrderItems::where('staffid', '=', $ruben->idnumber)->where('orderstatus', '=', 'Submitted')->groupBy('slug')->get();
    $countrubenfp = OrderItems::where('staffid', '=', $ruben->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('created_at', 'asc')->get();
    $osama = $user->where('idnumber', '=', '1141')->first();
    $countosamaorders = OrderItems::where('staffid', '=', $osama->idnumber)->where('orderstatus', '=', 'Submitted')->groupBy('slug')->get();
    $countosamafp = OrderItems::where('staffid', '=', $osama->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('created_at', 'asc')->get();
    $ahmedshawqy = $user->where('idnumber', '=', '1869')->first();
    $countahmedshawqyorders = OrderItems::where('staffid', '=', $ahmedshawqy->idnumber)->where('orderstatus', '=', 'Submitted')->groupBy('slug')->get();
    $countahmedshawqyfp = OrderItems::where('staffid', '=', $ahmedshawqy->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('created_at', 'asc')->get();
    $medhathassan = $user->where('idnumber', '=', '4417')->first();
    $countmedhathassanorders = OrderItems::where('staffid', '=', $medhathassan->idnumber)->where('orderstatus', '=', 'Submitted')->groupBy('slug')->get();
    $countmedhathassanfp = OrderItems::where('staffid', '=', $medhathassan->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('created_at', 'asc')->get();
    
    


        /** QASSIM TREE */

        /** Suneer */
        $suneer = User::select()->where('idnumber', '=', '466')->first();
        $countsuneerorders = Order::where('staffid', '=', $suneer->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $countsuneerfp = OrderItems::where('staffid', '=', $suneer->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();

        /** Fahad Hussein -> fahadhussein */
        $fahadhussein = User::select()->where('idnumber', '=', '2508')->first();
        $countfahadhusseinorders = Order::where('staffid', '=', $fahadhussein->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $countfahadhusseinfp = OrderItems::where('staffid', '=', $fahadhussein->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();

        /** Sultan Salman */
        $sultansalman = User::select()->where('idnumber', '=', '1621')->first();
        $countsultansalmanorders = Order::where('staffid', '=', $sultansalman->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $countsultansalmanfp = OrderItems::where('staffid', '=', $sultansalman->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();

        /** Medhat */
        $medhat = User::select()->where('idnumber', '=', '4241')->first();
        $countmedhatorders = Order::where('staffid', '=', $medhat->idnumber)->where('status', '=', 'Submitted')->orderBy('created_at', 'asc')->groupBy('slug')->get();
        $countmedhatfp = OrderItems::where('staffid', '=', $medhat->idnumber)->where('orderstatus', '=', 'Submitted')->orderBy('ponumber', 'asc')->get();



    /** Michael Lanes DATA */
    if ($idnumber == $michael->idnumber) {
    $sumalltodaysorders = $todaysorders->sum('totalprice');
    $filename = "orders-orderitems-today.csv";
    $handle = fopen($filename, 'w+');
    fputcsv($handle, array(
        'row identification', 
        'Distribution Channe',
        'PO#',
        ' ',
        'Customer#',
        'Item#',
        ' ',
        ' ',
        'Qty',
        'asked price',
        'Free',

    ));

    foreach($countmichaelfp as $row) {
        fputcsv($handle,array(
            'H',
            '24',
            $row['ponumber'],
            ' ',
            $row['branchnumber'],

            
            $row['itemnumber'],
            ' ',
            ' ',
            $row['itemqty'],
            $row['itemprice'] - $row['askedprice'],
            $row['freeitem'],
    ));
    }
    fclose($handle);
    $headers = array(
        'Content-Type' => 'text/csv',
    );

    $allorders = Order::where('staffid', '=', $michael->idnumber)->where('status', '=', 'Completed')->get();
    $sumallorders = $allorders->sum('totalprice');
    User::where('idnumber', '=', $michael->idnumber)->update(['updated_at' => now(), 'totalgrand' => $sumallorders]);
    Order::where('staffid', '=', $michael->idnumber)->where('status', '=', 'Submitted')->update(['updated_at' => now(), 'status' => 'Completed', 'processedby' => \Auth::user()->idnumber]);
    OrderItems::where('staffid', '=', $michael->idnumber)->where('orderstatus', '=', 'Submitted')->update(['updated_at' => now(), 'orderstatus' => 'Completed']);
 /** Mohammed Sayed Orders */
    } elseif ($idnumber == $mohammedsayed->idnumber) {
        $sumalltodaysorders = $todaysorders->sum('totalprice');
        $filename = "orders-orderitems-today.csv";
        $handle = fopen($filename, 'w+');
        fputcsv($handle, array(
            'row identification', 
            'Distribution Channe',
            'PO#',
            ' ',
            'Customer#',
            'Item#',
            ' ',
            ' ',
            'Qty',
            'asked price',
            'Free',
        ));
    
        foreach($countmohammedsayedfp as $row) {
            fputcsv($handle,array(
                'H',
                '24',
                $row['ponumber'],
                ' ',
                $row['branchnumber'],
    
                
                $row['itemnumber'],
                ' ',
                ' ',
                $row['itemqty'],
                $row['itemprice'] - $row['askedprice'],
                $row['freeitem'],
        ));
        }
        fclose($handle);
        $headers = array(
            'Content-Type' => 'text/csv',
        );
        $allorders = Order::where('staffid', '=', $mohammedsayed->idnumber)->where('status', '=', 'Completed')->get();
        $sumallorders = $allorders->sum('totalprice');
        User::where('idnumber', '=', $mohammedsayed->idnumber)->update(['updated_at' => now(), 'totalgrand' => $sumallorders]);
        Order::where('staffid', '=', $mohammedsayed->idnumber)->where('status', '=', 'Submitted')->update(['updated_at' => now(), 'status' => 'Completed', 'processedby' => \Auth::user()->idnumber]);
        OrderItems::where('staffid', '=', $mohammedsayed->idnumber)->where('orderstatus', '=', 'Submitted')->update(['updated_at' => now(), 'orderstatus' => 'Completed']);
    }
                /** Fahad Dahasy Orders */
    elseif($idnumber == $fahaddahasy->idnumber) {
       $sumalltodaysorders = $todaysorders->sum('totalprice');
       $filename = "orders-orderitems-today.csv";
       $handle = fopen($filename, 'w+');
       fputcsv($handle, array(
        'row identification', 
        'Distribution Channe',
        'PO#',
        ' ',
        'Customer#',
        'Item#',
        ' ',
        ' ',
        'Qty',
        'asked price',
        'Free',
       ));
   
       foreach($countfahaddahasyfp as $row) {
           fputcsv($handle,array(
               'H',
               '24',
               $row['ponumber'],
               ' ',
               $row['branchnumber'],
   
               
               $row['itemnumber'],
               ' ',
               ' ',
               $row['itemqty'],
               $row['itemprice'] - $row['askedprice'],
               $row['freeitem'],
       ));
       }
        fclose($handle);
        $headers = array(
            'Content-Type' => 'text/csv',
        );
    
        $allorders = Order::where('staffid', '=', $fahaddahasy->idnumber)->where('status', '=', 'Completed')->get();
        $sumallorders = $allorders->sum('totalprice');
        User::where('idnumber', '=', $fahaddahasy->idnumber)->update(['updated_at' => now(), 'totalgrand' => $sumallorders]);
        Order::where('staffid', '=', $fahaddahasy->idnumber)->where('status', '=', 'Submitted')->update(['updated_at' => now(), 'status' => 'Completed', 'processedby' => \Auth::user()->idnumber]);
        OrderItems::where('staffid', '=', $fahaddahasy->idnumber)->where('orderstatus', '=', 'Submitted')->update(['updated_at' => now(), 'orderstatus' => 'Completed']);
    }

        /** Abdullah Nasser Orders */
        
        elseif($idnumber == $abdullahnaser->idnumber) {

            $sumalltodaysorders = $todaysorders->sum('totalprice');
            $filename = "orders-orderitems-today.csv";
            $handle = fopen($filename, 'w+');
            fputcsv($handle, array(
             'row identification', 
             'Distribution Channe',
             'PO#',
             ' ',
             'Customer#',
             'Item#',
             ' ',
             ' ',
             'Qty',
             'asked price',
             'Free',
            ));
        
            foreach($countabdullahnaserfp as $row) {
                fputcsv($handle,array(
                    'H',
                    '24',
                    $row['ponumber'],
                    ' ',
                    $row['branchnumber'],
        
                    
                    $row['itemnumber'],
                    ' ',
                    ' ',
                    $row['itemqty'],
                    $row['itemprice'] - $row['askedprice'],
                    $row['freeitem'],
            ));
            }
             fclose($handle);
             $headers = array(
                 'Content-Type' => 'text/csv',
             );
         
             $allorders = Order::where('staffid', '=', $abdullahnaser->idnumber)->where('status', '=', 'Completed')->get();
             $sumallorders = $allorders->sum('totalprice');
             User::where('idnumber', '=', $abdullahnaser->idnumber)->update(['updated_at' => now(), 'totalgrand' => $sumallorders]);
             Order::where('staffid', '=', $abdullahnaser->idnumber)->where('status', '=', 'Submitted')->update(['updated_at' => now(), 'status' => 'Completed', 'processedby' => \Auth::user()->idnumber]);
             OrderItems::where('staffid', '=', $abdullahnaser->idnumber)->where('orderstatus', '=', 'Submitted')->update(['updated_at' => now(), 'orderstatus' => 'Completed']);
         }
     
        /** Ahmed Medhat Orders */
    elseif ($idnumber == $ahmedmedhat->idnumber) {
       $sumalltodaysorders = $todaysorders->sum('totalprice');
       $filename = "orders-orderitems-today.csv";
       $handle = fopen($filename, 'w+');
       fputcsv($handle, array(
        'row identification', 
        'Distribution Channe',
        'PO#',
        ' ',
        'Customer#',
        'Item#',
        ' ',
        ' ',
        'Qty',
        'asked price',
        'Free',
       ));
   
       foreach($countahmedmedhatfp as $row) {
           fputcsv($handle,array(
               'H',
               '24',
               $row['ponumber'],
               ' ',
               $row['branchnumber'],
   
               
               $row['itemnumber'],
               ' ',
               ' ',
               $row['itemqty'],
               $row['itemprice'] - $row['askedprice'],
               $row['freeitem'],
       ));
       }

        fclose($handle);
        $headers = array(
            'Content-Type' => 'text/csv',
        );
    
        $allorders = Order::where('staffid', '=', $ahmedmedhat->idnumber)->where('status', '=', 'Completed')->get();
        $sumallorders = $allorders->sum('totalprice');
        User::where('idnumber', '=', $ahmedmedhat->idnumber)->update(['updated_at' => now(), 'totalgrand' => $sumallorders]);
        Order::where('staffid', '=', $ahmedmedhat->idnumber)->where('status', '=', 'Submitted')->update(['updated_at' => now(), 'status' => 'Completed', 'processedby' => \Auth::user()->idnumber]);
        OrderItems::where('staffid', '=', $ahmedmedhat->idnumber)->where('orderstatus', '=', 'Submitted')->update(['updated_at' => now(), 'orderstatus' => 'Completed']);
        
    }  
    /** Wail Orders */
    
    elseif($idnumber == $wail->idnumber) {

        $sumalltodaysorders = $todaysorders->sum('totalprice');
        $filename = "orders-orderitems-today.csv";
        $handle = fopen($filename, 'w+');
        fputcsv($handle, array(
         'row identification', 
         'Distribution Channe',
         'PO#',
         ' ',
         'Customer#',
         'Item#',
         ' ',
         ' ',
         'Qty',
         'asked price',
         'Free',
        ));
    
        foreach($countwailfp as $row) {
            fputcsv($handle,array(
                'H',
                '24',
                $row['ponumber'],
                ' ',
                $row['branchnumber'],
    
                
                $row['itemnumber'],
                ' ',
                ' ',
                $row['itemqty'],
                $row['itemprice'] - $row['askedprice'],
                $row['freeitem'],
        ));
        }
         fclose($handle);
         $headers = array(
             'Content-Type' => 'text/csv',
         );
     
         $allorders = Order::where('staffid', '=', $wail->idnumber)->where('status', '=', 'Completed')->get();
         $sumallorders = $allorders->sum('totalprice');
         User::where('idnumber', '=', $wail->idnumber)->update(['updated_at' => now(), 'totalgrand' => $sumallorders]);
         Order::where('staffid', '=', $wail->idnumber)->where('status', '=', 'Submitted')->update(['updated_at' => now(), 'status' => 'Completed', 'processedby' => \Auth::user()->idnumber]);
         OrderItems::where('staffid', '=', $wail->idnumber)->where('orderstatus', '=', 'Submitted')->update(['updated_at' => now(), 'orderstatus' => 'Completed']);
     }
     
     /** END OF FIRAS TEAM DATA */
     
          /** SATRT OF HAZIM TEAM DATA */

         /** Noufal Orders */
    
    elseif($idnumber == $noufal->idnumber) {

        $sumalltodaysorders = $todaysorders->sum('totalprice');
        $filename = "orders-orderitems-today.csv";
        $handle = fopen($filename, 'w+');
        fputcsv($handle, array(
         'row identification', 
         'Distribution Channe',
         'PO#',
         ' ',
         'Customer#',
         'Item#',
         ' ',
         ' ',
         'Qty',
         'asked price',
         'Free',
        ));
    
        foreach($countnoufalfp as $row) {
            fputcsv($handle,array(
                'H',
                '24',
                $row['ponumber'],
                ' ',
                $row['branchnumber'],
    
                
                $row['itemnumber'],
                ' ',
                ' ',
                $row['itemqty'],
                $row['itemprice'] - $row['askedprice'],
                $row['freeitem'],
        ));
        }
         fclose($handle);
         $headers = array(
             'Content-Type' => 'text/csv',
         );
     
         $allorders = Order::where('staffid', '=', $noufal->idnumber)->where('status', '=', 'Completed')->get();
         $sumallorders = $allorders->sum('totalprice');
         User::where('idnumber', '=', $noufal->idnumber)->update(['updated_at' => now(), 'totalgrand' => $sumallorders]);
         Order::where('staffid', '=', $noufal->idnumber)->where('status', '=', 'Submitted')->update(['updated_at' => now(), 'status' => 'Completed', 'processedby' => \Auth::user()->idnumber]);
         OrderItems::where('staffid', '=', $noufal->idnumber)->where('orderstatus', '=', 'Submitted')->update(['updated_at' => now(), 'orderstatus' => 'Completed']);
     }
     
     
         /** Ruben M. Orders */
    
    elseif($idnumber == $ruben->idnumber) {

        $sumalltodaysorders = $todaysorders->sum('totalprice');
        $filename = "orders-orderitems-today.csv";
        $handle = fopen($filename, 'w+');
        fputcsv($handle, array(
         'row identification', 
         'Distribution Channe',
         'PO#',
         ' ',
         'Customer#',
         'Item#',
         ' ',
         ' ',
         'Qty',
         'asked price',
         'Free',
        ));
    
        foreach($countrubenfp as $row) {
            fputcsv($handle,array(
                'H',
                '24',
                $row['ponumber'],
                ' ',
                $row['branchnumber'],
    
                
                $row['itemnumber'],
                ' ',
                ' ',
                $row['itemqty'],
                $row['itemprice'] - $row['askedprice'],
                $row['freeitem'],
        ));
        }
         fclose($handle);
         $headers = array(
             'Content-Type' => 'text/csv',
         );
     
         $allorders = Order::where('staffid', '=', $ruben->idnumber)->where('status', '=', 'Completed')->get();
         $sumallorders = $allorders->sum('totalprice');
         User::where('idnumber', '=', $ruben->idnumber)->update(['updated_at' => now(), 'totalgrand' => $sumallorders]);
         Order::where('staffid', '=', $ruben->idnumber)->where('status', '=', 'Submitted')->update(['updated_at' => now(), 'status' => 'Completed', 'processedby' => \Auth::user()->idnumber]);
         OrderItems::where('staffid', '=', $ruben->idnumber)->where('orderstatus', '=', 'Submitted')->update(['updated_at' => now(), 'orderstatus' => 'Completed']);
     }
     
          
         /** Samsudin Orders */
    
    elseif($idnumber == $samsudin->idnumber) {

        $sumalltodaysorders = $todaysorders->sum('totalprice');
        $filename = "orders-orderitems-today.csv";
        $handle = fopen($filename, 'w+');
        fputcsv($handle, array(
         'row identification', 
         'Distribution Channe',
         'PO#',
         ' ',
         'Customer#',
         'Item#',
         ' ',
         ' ',
         'Qty',
         'asked price',
         'Free',
        ));
    
        foreach($countsamsudinfp as $row) {
            fputcsv($handle,array(
                'H',
                '24',
                $row['ponumber'],
                ' ',
                $row['branchnumber'],
    
                
                $row['itemnumber'],
                ' ',
                ' ',
                $row['itemqty'],
                $row['itemprice'] - $row['askedprice'],
                $row['freeitem'],
        ));
        }
         fclose($handle);
         $headers = array(
             'Content-Type' => 'text/csv',
         );
     
         $allorders = Order::where('staffid', '=', $samsudin->idnumber)->where('status', '=', 'Completed')->get();
         $sumallorders = $allorders->sum('totalprice');
         User::where('idnumber', '=', $samsudin->idnumber)->update(['updated_at' => now(), 'totalgrand' => $sumallorders]);
         Order::where('staffid', '=', $samsudin->idnumber)->where('status', '=', 'Submitted')->update(['updated_at' => now(), 'status' => 'Completed', 'processedby' => \Auth::user()->idnumber]);
         OrderItems::where('staffid', '=', $samsudin->idnumber)->where('orderstatus', '=', 'Submitted')->update(['updated_at' => now(), 'orderstatus' => 'Completed']);
     }
               
         /** Osama M.R. Orders */
    
    elseif($idnumber == $osama->idnumber) {

        $sumalltodaysorders = $todaysorders->sum('totalprice');
        $filename = "orders-orderitems-today.csv";
        $handle = fopen($filename, 'w+');
        fputcsv($handle, array(
         'row identification', 
         'Distribution Channe',
         'PO#',
         ' ',
         'Customer#',
         'Item#',
         ' ',
         ' ',
         'Qty',
         'asked price',
         'Free',
        ));
    
        foreach($countosamafp as $row) {
            fputcsv($handle,array(
                'H',
                '24',
                $row['ponumber'],
                ' ',
                $row['branchnumber'],
    
                
                $row['itemnumber'],
                ' ',
                ' ',
                $row['itemqty'],
                $row['itemprice'] - $row['askedprice'],
                $row['freeitem'],
        ));
        }
         fclose($handle);
         $headers = array(
             'Content-Type' => 'text/csv',
         );
     
         $allorders = Order::where('staffid', '=', $osama->idnumber)->where('status', '=', 'Completed')->get();
         $sumallorders = $allorders->sum('totalprice');
         User::where('idnumber', '=', $osama->idnumber)->update(['updated_at' => now(), 'totalgrand' => $sumallorders]);
         Order::where('staffid', '=', $osama->idnumber)->where('status', '=', 'Submitted')->update(['updated_at' => now(), 'status' => 'Completed', 'processedby' => \Auth::user()->idnumber]);
         OrderItems::where('staffid', '=', $osama->idnumber)->where('orderstatus', '=', 'Submitted')->update(['updated_at' => now(), 'orderstatus' => 'Completed']);
     }

          /** END OF HAZIM TEAM DATA */
     
          /** SATRT OF AWADEN TEAM DATA */

     
              /** A. Shawky Orders */
    
    elseif($idnumber == $ahmedshawqy->idnumber) {

        $sumalltodaysorders = $todaysorders->sum('totalprice');
        $filename = "orders-orderitems-today.csv";
        $handle = fopen($filename, 'w+');
        fputcsv($handle, array(
         'row identification', 
         'Distribution Channe',
         'PO#',
         ' ',
         'Customer#',
         'Item#',
         ' ',
         ' ',
         'Qty',
         'asked price',
         'Free',
        ));
    
        foreach($countahmedshawqyfp as $row) {
            fputcsv($handle,array(
                'H',
                '24',
                $row['ponumber'],
                ' ',
                $row['branchnumber'],
    
                
                $row['itemnumber'],
                ' ',
                ' ',
                $row['itemqty'],
                $row['itemprice'] - $row['askedprice'],
                $row['freeitem'],
        ));
        }
         fclose($handle);
         $headers = array(
             'Content-Type' => 'text/csv',
         );
     
         $allorders = Order::where('staffid', '=', $ahmedshawqy->idnumber)->where('status', '=', 'Completed')->get();
         $sumallorders = $allorders->sum('totalprice');
         User::where('idnumber', '=', $ahmedshawqy->idnumber)->update(['updated_at' => now(), 'totalgrand' => $sumallorders]);
         Order::where('staffid', '=', $ahmedshawqy->idnumber)->where('status', '=', 'Submitted')->update(['updated_at' => now(), 'status' => 'Completed', 'processedby' => \Auth::user()->idnumber]);
         OrderItems::where('staffid', '=', $ahmedshawqy->idnumber)->where('orderstatus', '=', 'Submitted')->update(['updated_at' => now(), 'orderstatus' => 'Completed']);
     }
          
              /** Hassan Fathi Orders */
    
    elseif($idnumber == $hassanfathi->idnumber) {

        $sumalltodaysorders = $todaysorders->sum('totalprice');
        $filename = "orders-orderitems-today.csv";
        $handle = fopen($filename, 'w+');
        fputcsv($handle, array(
         'row identification', 
         'Distribution Channe',
         'PO#',
         ' ',
         'Customer#',
         'Item#',
         ' ',
         ' ',
         'Qty',
         'asked price',
         'Free',
        ));
    
        foreach($counthassanfathifp as $row) {
            fputcsv($handle,array(
                'H',
                '24',
                $row['ponumber'],
                ' ',
                $row['branchnumber'],
    
                
                $row['itemnumber'],
                ' ',
                ' ',
                $row['itemqty'],
                $row['itemprice'] - $row['askedprice'],
                $row['freeitem'],
        ));
        }
         fclose($handle);
         $headers = array(
             'Content-Type' => 'text/csv',
         );
     
         $allorders = Order::where('staffid', '=', $hassanfathi->idnumber)->where('status', '=', 'Completed')->get();
         $sumallorders = $allorders->sum('totalprice');
         User::where('idnumber', '=', $hassanfathi->idnumber)->update(['updated_at' => now(), 'totalgrand' => $sumallorders]);
         Order::where('staffid', '=', $hassanfathi->idnumber)->where('status', '=', 'Submitted')->update(['updated_at' => now(), 'status' => 'Completed', 'processedby' => \Auth::user()->idnumber]);
         OrderItems::where('staffid', '=', $hassanfathi->idnumber)->where('orderstatus', '=', 'Submitted')->update(['updated_at' => now(), 'orderstatus' => 'Completed']);
     }
        
            /** @Hashem Orders */

            elseif($idnumber == $hashem->idnumber) {

            $sumalltodaysorders = $todaysorders->sum('totalprice');
            $filename = "orders-orderitems-today.csv";
            $handle = fopen($filename, 'w+');
            fputcsv($handle, array(
                'row identification', 
                'Distribution Channe',
                'PO#',
                ' ',
                'Customer#',
                'Item#',
                ' ',
                ' ',
                'Qty',
                'asked price',
                'Free',
            ));
        
            foreach($counthashemfp as $row) {
                fputcsv($handle,array(
                    'H',
                    '24',
                    $row['ponumber'],
                    ' ',
                    $row['branchnumber'],
        
                    
                    $row['itemnumber'],
                    ' ',
                    ' ',
                    $row['itemqty'],
                    $row['itemprice'] - $row['askedprice'],
                    $row['freeitem'],
            ));
            }
                fclose($handle);
                $headers = array(
                    'Content-Type' => 'text/csv',
                );
            
                $allorders = Order::where('staffid', '=', $hashem->idnumber)->where('status', '=', 'Completed')->get();
                $sumallorders = $allorders->sum('totalprice');
                User::where('idnumber', '=', $hashem->idnumber)->update(['updated_at' => now(), 'totalgrand' => $sumallorders]);
                Order::where('staffid', '=', $hashem->idnumber)->where('status', '=', 'Submitted')->update(['updated_at' => now(), 'status' => 'Completed', 'processedby' => \Auth::user()->idnumber]);
                OrderItems::where('staffid', '=', $hashem->idnumber)->where('orderstatus', '=', 'Submitted')->update(['updated_at' => now(), 'orderstatus' => 'Completed']);
            }
            
        /** @M. Hassan Orders */

        elseif($idnumber == $medhathassan->idnumber) {

            $sumalltodaysorders = $todaysorders->sum('totalprice');
            $filename = "orders-orderitems-today.csv";
            $handle = fopen($filename, 'w+');
            fputcsv($handle, array(
                'row identification', 
                'Distribution Channe',
                'PO#',
                ' ',
                'Customer#',
                'Item#',
                ' ',
                ' ',
                'Qty',
                'asked price',
                'Free',
            ));
        
            foreach($countmedhathassanfp as $row) {
                fputcsv($handle,array(
                    'H',
                    '24',
                    $row['ponumber'],
                    ' ',
                    $row['branchnumber'],
        
                    
                    $row['itemnumber'],
                    ' ',
                    ' ',
                    $row['itemqty'],
                    $row['itemprice'] - $row['askedprice'],
                    $row['freeitem'],
            ));
            }
                fclose($handle);
                $headers = array(
                    'Content-Type' => 'text/csv',
                );
            
                $allorders = Order::where('staffid', '=', $medhathassan->idnumber)->where('status', '=', 'Completed')->get();
                $sumallorders = $allorders->sum('totalprice');
                User::where('idnumber', '=', $medhathassan->idnumber)->update(['updated_at' => now(), 'totalgrand' => $sumallorders]);
                Order::where('staffid', '=', $medhathassan->idnumber)->where('status', '=', 'Submitted')->update(['updated_at' => now(), 'status' => 'Completed', 'processedby' => \Auth::user()->idnumber]);
                OrderItems::where('staffid', '=', $medhathassan->idnumber)->where('orderstatus', '=', 'Submitted')->update(['updated_at' => now(), 'orderstatus' => 'Completed']);
            }
    

            
            /** END RUH START QAS */
        /** @Suneer Orders */

        elseif($idnumber == $suneer->idnumber) {

            $sumalltodaysorders = $todaysorders->sum('totalprice');
            $filename = "orders-orderitems-today.csv";
            $handle = fopen($filename, 'w+');
            fputcsv($handle, array(
                'row identification', 
                'Distribution Channe',
                'PO#',
                ' ',
                'Customer#',
                'Item#',
                ' ',
                ' ',
                'Qty',
                'asked price',
                'Free',
            ));
        
            foreach($countsuneerfp as $row) {
                fputcsv($handle,array(
                    'H',
                    '24',
                    $row['ponumber'],
                    ' ',
                    $row['branchnumber'],
        
                    
                    $row['itemnumber'],
                    ' ',
                    ' ',
                    $row['itemqty'],
                    $row['itemprice'] - $row['askedprice'],
                    $row['freeitem'],
            ));
            }
                fclose($handle);
                $headers = array(
                    'Content-Type' => 'text/csv',
                );
            
                $allorders = Order::where('staffid', '=', $suneer->idnumber)->where('status', '=', 'Completed')->get();
                $sumallorders = $allorders->sum('totalprice');
                User::where('idnumber', '=', $suneer->idnumber)->update(['updated_at' => now(), 'totalgrand' => $sumallorders]);
                Order::where('staffid', '=', $suneer->idnumber)->where('status', '=', 'Submitted')->update(['updated_at' => now(), 'status' => 'Completed', 'processedby' => \Auth::user()->idnumber]);
                OrderItems::where('staffid', '=', $suneer->idnumber)->where('orderstatus', '=', 'Submitted')->update(['updated_at' => now(), 'orderstatus' => 'Completed']);
            }
    
             /** @Fahad Hussein Orders -> fahadhussein */

        elseif($idnumber == $fahadhussein->idnumber) {

            $sumalltodaysorders = $todaysorders->sum('totalprice');
            $filename = "orders-orderitems-today.csv";
            $handle = fopen($filename, 'w+');
            fputcsv($handle, array(
                'row identification', 
                'Distribution Channe',
                'PO#',
                ' ',
                'Customer#',
                'Item#',
                ' ',
                ' ',
                'Qty',
                'asked price',
                'Free',
            ));
        
            foreach($countfahadhusseinfp as $row) {
                fputcsv($handle,array(
                    'H',
                    '24',
                    $row['ponumber'],
                    ' ',
                    $row['branchnumber'],
        
                    
                    $row['itemnumber'],
                    ' ',
                    ' ',
                    $row['itemqty'],
                    $row['itemprice'] - $row['askedprice'],
                    $row['freeitem'],
            ));
            }
                fclose($handle);
                $headers = array(
                    'Content-Type' => 'text/csv',
                );
            
                $allorders = Order::where('staffid', '=', $fahadhussein->idnumber)->where('status', '=', 'Completed')->get();
                $sumallorders = $allorders->sum('totalprice');
                User::where('idnumber', '=', $fahadhussein->idnumber)->update(['updated_at' => now(), 'totalgrand' => $sumallorders]);
                Order::where('staffid', '=', $fahadhussein->idnumber)->where('status', '=', 'Submitted')->update(['updated_at' => now(), 'status' => 'Completed', 'processedby' => \Auth::user()->idnumber]);
                OrderItems::where('staffid', '=', $fahadhussein->idnumber)->where('orderstatus', '=', 'Submitted')->update(['updated_at' => now(), 'orderstatus' => 'Completed']);
            }
    
    
             /** @Sultan Salman Orders */

             elseif($idnumber == $sultansalman->idnumber) {

                $sumalltodaysorders = $todaysorders->sum('totalprice');
                $filename = "orders-orderitems-today.csv";
                $handle = fopen($filename, 'w+');
                fputcsv($handle, array(
                    'row identification', 
                    'Distribution Channe',
                    'PO#',
                    ' ',
                    'Customer#',
                    'Item#',
                    ' ',
                    ' ',
                    'Qty',
                    'asked price',
                    'Free',
                ));
            
                foreach($countsultansalmanfp as $row) {
                    fputcsv($handle,array(
                        'H',
                        '24',
                        $row['ponumber'],
                        ' ',
                        $row['branchnumber'],
            
                        
                        $row['itemnumber'],
                        ' ',
                        ' ',
                        $row['itemqty'],
                        $row['itemprice'] - $row['askedprice'],
                        $row['freeitem'],
                ));
                }
                    fclose($handle);
                    $headers = array(
                        'Content-Type' => 'text/csv',
                    );
                
                    $allorders = Order::where('staffid', '=', $sultansalman->idnumber)->where('status', '=', 'Completed')->get();
                    $sumallorders = $allorders->sum('totalprice');
                    User::where('idnumber', '=', $sultansalman->idnumber)->update(['updated_at' => now(), 'totalgrand' => $sumallorders]);
                    Order::where('staffid', '=', $sultansalman->idnumber)->where('status', '=', 'Submitted')->update(['updated_at' => now(), 'status' => 'Completed', 'processedby' => \Auth::user()->idnumber]);
                    OrderItems::where('staffid', '=', $sultansalman->idnumber)->where('orderstatus', '=', 'Submitted')->update(['updated_at' => now(), 'orderstatus' => 'Completed']);
                }
        
                /** @Medhat Orders */

             elseif($idnumber == $medhat->idnumber) {

                $sumalltodaysorders = $todaysorders->sum('totalprice');
                $filename = "orders-orderitems-today.csv";
                $handle = fopen($filename, 'w+');
                fputcsv($handle, array(
                    'row identification', 
                    'Distribution Channe',
                    'PO#',
                    ' ',
                    'Customer#',
                    'Item#',
                    ' ',
                    ' ',
                    'Qty',
                    'asked price',
                    'Free',
                ));
            
                foreach($countmedhatfp as $row) {
                    fputcsv($handle,array(
                        'H',
                        '24',
                        $row['ponumber'],
                        ' ',
                        $row['branchnumber'],
            
                        
                        $row['itemnumber'],
                        ' ',
                        ' ',
                        $row['itemqty'],
                        $row['itemprice'] - $row['askedprice'],
                        $row['freeitem'],
                ));
                }
                    fclose($handle);
                    $headers = array(
                        'Content-Type' => 'text/csv',
                    );
                
                    $allorders = Order::where('staffid', '=', $medhat->idnumber)->where('status', '=', 'Completed')->get();
                    $sumallorders = $allorders->sum('totalprice');
                    User::where('idnumber', '=', $medhat->idnumber)->update(['updated_at' => now(), 'totalgrand' => $sumallorders]);
                    Order::where('staffid', '=', $medhat->idnumber)->where('status', '=', 'Submitted')->update(['updated_at' => now(), 'status' => 'Completed', 'processedby' => \Auth::user()->idnumber]);
                    OrderItems::where('staffid', '=', $medhat->idnumber)->where('orderstatus', '=', 'Submitted')->update(['updated_at' => now(), 'orderstatus' => 'Completed']);
                }
        
     else {
            exit();
    }

    return Response::download($filename,  $idnumber . '-submitted-' .date("Y-m-d") . '-orders+items.csv', $headers);

});


/*
Route::get('user/{id}', function ($id) {
    return 'User '.$id;
});
*/

/** Export Report By UserId */
Route::get('/export-orders-csv/{idnumber}/completed' , function($idnumber) {
    //$currentuser = \Auth::user()->idnumber;
    $today = date("Y-m-d", strtotime( '0 days' ) );	
    $todaysorders = Order::whereDate('created_at', $today )->where('status', '=', 'Completed' )->where('staffid', '=', $idnumber)->orderBy('created_at', 'asc')->get();
    $todaysorderitems = OrderItems::whereNotNull('orderitems')->whereDate('created_at', $today )->where('orderstatus', '=', 'Completed' )->where('staffid', '=', $idnumber)->orderBy('created_at', 'asc')->get();
    $totalurgent = $todaysorders->where('urgent', '=', 'on')->count();
    $totalregular = $todaysorders->where('urgent', '=', NULL)->count();
    $totalitems = $todaysorders->sum('totalitems');
    $totalqtys = $todaysorders->sum('totalqty');
    $totalpos = $todaysorders->count('ponumber');
    $allorders = Order::where('status', '=', 'Completed' )->where('staffid', '=', $idnumber)->get();
    $sumalltodaysorders = $todaysorders->sum('totalprice');
    $sumallusergrand = $allorders->sum('totalprice');
    $filename = "orders-orderitems-today.csv";
    $handle = fopen($filename, 'w+');
    fputcsv($handle, array(
        'Orders of', 
        'Date',
        'Total PO`s',
        'Urgent # Regular',
        'Total Items',
        'Total Qtys',
        'Total Sales',
        'Total Grand'
    ));
    fputcsv($handle, array(
        \Auth::user()->name . '#' .\Auth::user()->idnumber,
        $today,
        $totalpos,
        $totalurgent . ' # ' . $totalregular,
        $totalitems,
        $totalqtys,
        number_format($sumalltodaysorders),
        number_format($sumallusergrand)
    ));
    /** Empty Cells */ 
    fputcsv($handle, array(
        '',
        '',
        '',
        '',
    ));    
    fputcsv($handle, array(
        '',
        '',
        '',
        '',
    ));
    /** End Empte Cells */
    fputcsv($handle, array(
        'PO#',
        'Customer#',
        'Total Items',
        'Total Qtys',
        'Total Sales',
        'Currency',
        'Completed',
    ));
    foreach($todaysorders as $row) {
        fputcsv($handle,array(
            $row['ponumber'],
            $row['branchname'],
            $row['totalitems'],
            $row['totalqty'],
            number_format($row['totalprice']),
            ' SAR',
            $row['updated_at']->format("d/m/y g:iA"),
    ));
    }
        /** Empty Cells */ 
        fputcsv($handle, array(
            '',
            '',
            '',
            '',
        ));
        fputcsv($handle, array(
            '',
            '',
            '',
            '',
        ));
        /** End Empte Cells */
    fputcsv($handle, array(
        'PO#',
        'Customer',
        'Items',
        'Qty',
        'Price',
    ));
    foreach($todaysorderitems as $row) {
        fputcsv($handle,array(
            $row['ponumber'],
            $row['branchname'],
            $row['orderitems'],
            $row['itemqty'],
            number_format($row['itemprice']),
    ));
    }
    fclose($handle);
    $headers = array(
        'Content-Type' => 'text/csv',
    );
    /*Order::where('status', '=', 'Submitted')->update(['updated_at' => now(), 'status' => 'Completed', 'processedby' => \Auth::user()->idnumber]);
    OrderItems::where('orderstatus', '=', 'Submitted')->update(['updated_at' => now(), 'orderstatus' => 'Completed']);
    */
    return Response::download($filename, $today . '-' . $idnumber . '-completed-orders-report.csv', $headers);
});












/* -----------------------------CSV-END--------------------------------------------------XML-START----------------------------------- */






/** Export Report By Just Submited Order by User */
Route::get('/export-orders-csv/submitted/to/completed/now' , function() {

        $today = date("Y-m-d", strtotime( '0 days' ) );	
        $todaysorders = Order::whereDate('created_at', $today )->where('status', '=', 'Submitted' )->get();
        $todaysorderitems = OrderItems::whereDate('created_at', $today )->where('orderstatus', '=', 'Submitted' )->get();
        $sumalltodaysorders = $todaysorders->sum('totalprice');
        $filename = "orders-orderitems-today.csv";
        $handle = fopen($filename, 'w+');
        
        fputcsv($handle, array(
            'row identification', 
            'Distribution Channe',
            'PO#',
            ' ',
            'Customer#',
            'Item#',
            ' ',
            ' ',
            'Qty',
            'Free',    
            'Asked Price',
        ));    
        foreach($todaysorderitems as $row) {
            fputcsv($handle,array(
                'H',
                '24',
                $row['ponumber'],
                ' ',
                $row['branchnumber'],
                $row['itemnumber'],
                ' ',
                ' ',
                $row['itemqty'],
                $row['freeitem'],
                $row['askedprice'],

        ));    
        }
        fclose($handle);
        $headers = array(
            'Content-Type' => 'text/csv',
        );
        $orders = Order::where('status', '=', 'Submitted');
        $orders->update(['updated_at' => now(), 'status' => 'Completed', 'processedby' => \Auth::user()->idnumber, 'processedby' => \Auth::user()->idnumber]);
        $orderitems = OrderItems::where('orderstatus', '=', 'Submitted');
        $orderitems->update(['updated_at' => now(), 'orderstatus' => 'Completed']);
        $michaelorders = $orders->where('staffid', '=', '1275')->get();
        return Response::download($filename, 'submitted-' . date("Y-m-d") . '-orders+items.csv', $headers);
    });

/** Export Report By Just Submited Order by User */
Route::get('/export-orders-csv/submitted/to/completed/{idnumber}/all' , function($idnumber) {
    $allorders = Order::where('status', '=', 'Completed' )->where('staffid', '=', $idnumber)->get();
    $today = date("Y-m-d", strtotime( '0 days' ) );	
    $todaysorders = Order::whereDate('created_at', $today )->where('status', '=', 'Submitted' )->get();
    //$todaysorderscount = Order::whereDate('created_at', $today )->where('status', '=', 'Submitted' )->get();
    $todaysorderitems = OrderItems::whereDate('created_at', $today )->where('orderstatus', '=', 'Submitted' )->get();
    $sumalltodaysorders = $todaysorders->sum('totalprice');
    $filename = "orders-orderitems-today.csv";
    $handle = fopen($filename, 'w+');
    
    fputcsv($handle, array(
        'row identification', 
        'Distribution Channe',
        'PO#',
        ' ',
        'Customer#',
        'Item#',
        ' ',
        ' ',
        'Qty',
    ));
    foreach($todaysorderitems as $row) {
        fputcsv($handle,array(
            'H',
            '24',
            $row['ponumber'],
            ' ',
            $row['branchnumber'],
            $row['itemnumber'],
            ' ',
            ' ',
            $row['itemqty'],
    ));
    }
    fclose($handle);
    $headers = array(
        'Content-Type' => 'text/csv',
    );
    $currentuser = \Auth::user();
    $allorders = Order::where('staffid', '=', $currentuser->$idnumber)->where('status', '=', 'Completed')->get();
    $sumallorders = $allorders->sum('totalprice');
    User::where('idnumber', '=', $currentuser->$idnumber)->update(['updated_at' => now(), 'totalgrand' => $sumallorders]);
    Order::where('status', '=', 'Submitted')->update(['updated_at' => now(), 'status' => 'Completed', 'processedby' => \Auth::user()->idnumber, 'processedby' => \Auth::user()->idnumber]);
    OrderItems::where('orderstatus', '=', 'Submitted')->update(['updated_at' => now(), 'orderstatus' => 'Completed']);
    return Response::download($filename, 'submitted-' . date("Y-m-d") . '-orders+items.csv', $headers);
});

/* EXPORT CSV REPORTS */










































/* Generate XML File test.xml */

Route::get('/export-orders-orderitems-xml' , function() {

    $today = date("Y-m-d", strtotime( '0 days' ) );	
    $todaysorders = Order::whereDate('created_at', $today )->get();
    $todaysorderitems = OrderItems::where('orderstatus', '=', 'Submitted' )->get();
    $sumalltodaysorders = $todaysorders->sum('totalprice');
    $filename = "orders-orderitems-today.csv";
    $handle = fopen($filename, 'w+');
    

    $xml = new SimpleXMLElement('<?xml version="1.0" encoding="utf-8"?><mydoc></mydoc>');

    $xml->addAttribute('version', '1.0');
    $xml->addChild('datetime', date('Y-m-d H:i:s'));

    $person = $xml->addChild('person');
    $person->addChild('firstname', 'Someone');
    $person->addChild('secondname', 'Something');
    $person->addChild('telephone', '123456789');
    $person->addChild('email', 'me@something.com');

    $address = $person->addchild('address');
    $address->addchild('homeaddress', 'Andersgatan 2, 432 10 Göteborg');
    $address->addChild('workaddress', 'Andersgatan 3, 432 10 Göteborg');

    $xml->saveXML('test.xml');

    $response = Response::make($xml->asXML(), 200);
    $response->header('Content-Type', 'text/xml');

    


    fputcsv($handle, array(
        'PO#',
        ' ',
        'Customer#',
        'Item#',
        ' ',
        ' ',
        'Qty',


    ));


    foreach($todaysorderitems as $row) {
        fputcsv($handle,array(
            $row['ponumber'],
            ' ',
            $row['branchnumber'],
            $row['itemnumber'],
            ' ',
            ' ',
            $row['itemqty'],

    ));


    }

    fclose($handle);

    $headers = array(
        'Content-Type' => 'text/xml',
        'Content-Transfer-Encoding' => 'binary',
        'Content-Disposition' => 'attachment; filename=test.xml',
        'Content-Description' => 'File Transfer',
        'Cache-Control' => 'public'
    );

    return Response::download($filename, date("Y-m-d") . '-orders+items.xml', $headers);

});














