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

Auth::routes();
Auth::routes(['verify' => true]);



Route::get('test0', function(){
    return "<pre>" . print_r(Order::all(), true) . "</pre>";
});



Route::get('test1', function(){
    return "<p style='color:red'>" . Order::get("ordernumber")->where('ponumber', "99088543") . "</p><br /><hr />";
});




//Route::get('home', ['as'=>'home','uses'=>'HomeController@index']);


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

Route::get('/root/readme', [
    'uses' => '\cdn\Http\Controllers\RootController@getReadMe',
'as' => 'root.readme',
]);


/** Orders Routes */
Route::post('/root/orders/{idnumber}/{slug}/success', [
    'uses' => '\cdn\Http\Controllers\RootController@completeOrder',
    'as' => 'orders.complete']);

Route::get('/orders/order/{slug}/success', [
    'uses' => '\cdn\Http\Controllers\OrdersController@successOrder',
    'as' => 'orders.success']);

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

//Route::get('/home', 'HomeController@index')->name('home');
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

Route::post('/orders/order/{slug}/destroy/', [
    'uses' => '\cdn\Http\Controllers\OrdersController@tableDestroy',
    'as' => 'orders.destroy']);
    
        
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
    $todaysorders = Order::whereDate('created_at', $today )->get();
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


    foreach($todaysorders as $row) {
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

    return Response::download($filename, date("Y-m-d") . '-orders.csv', $headers);
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

    return Response::download($filename,  date("Y-m-d") . '-orders+items.csv', $headers);
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



/* Export All Todays Submitted Orders With Items Copy & Paste => Excel -> Change to Completed*/

Route::get('/export-orders-orderitems-csv/submitted/to/completed' , function() {

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

    Order::where('status', '=', 'Submitted')->update(['updated_at' => now(), 'status' => 'Completed']);
    OrderItems::where('orderstatus', '=', 'Submitted')->update(['updated_at' => now(), 'orderstatus' => 'Completed']);
    
    return Response::download($filename, 'submitted-' . date("Y-m-d") . '-orders+items.csv', $headers);
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
    $todaysorders = Order::whereDate('created_at', $today )->where('status', '=', 'Completed' )->where('staffid', '=', $idnumber)->get();
    $todaysorderitems = OrderItems::whereNotNull('orderitems')->whereDate('created_at', $today )->where('orderstatus', '=', 'Completed' )->where('staffid', '=', $idnumber)->get();
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

    /*Order::where('status', '=', 'Submitted')->update(['updated_at' => now(), 'status' => 'Completed']);
    OrderItems::where('orderstatus', '=', 'Submitted')->update(['updated_at' => now(), 'orderstatus' => 'Completed']);
    */
    return Response::download($filename, $today . '-' . $idnumber . '-completed-orders-report.csv', $headers);
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






