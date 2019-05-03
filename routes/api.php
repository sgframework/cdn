<?php

use Illuminate\Http\Request;
use cdn\Models\Order;
use cdn\Models\OrderItems;
use cdn\User;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
Route::middleware('auth:api')->get('/order', function (Request $request) {
    return "ok"; 
});

*/


Route::get('/test', function (Request $request) {
    $arr = array([
        'api' => 'test', 'api1' => 'test1', 'api2' => 'test2', 'api3' => 'test4' ]);

    
    return response($arr, 200)
                  ->header('Content-Type', 'application/json');
});



Route::get('/order/{ordernumber}', function (Request $request) {
    $arr = cdn\Models\Order::all();

    $arr1 = array([
        $arr
    ]);

    
    return response($arr1, 200)
                  ->header('Content-Type', 'application/json');
});

Route::get('/orderitems/{ordernumber}', function (Request $request, $ordernumber) {
    $arr = cdn\Models\OrderItems::where('ordernumber', '=', $ordernumber)->get();


    
    return response($arr, 200)
                  ->header('Content-Type', 'text/xml');
});



Route::get('/echo/xml', function () {

$data = User::where('id', '=', "1")->get('idnumber');
$arr = '<?xml version="1.0" encoding="UTF-8"?>
<orderstree>
  <order ordernumber="00008888">
    <title lang="en">Everyday Italian</title>
    <author>Giada De Laurentiis</author>
    <year>2005</year>
    <price>30.00</price>
  </order>
  <order category="children">
    <title lang="en">Harry Potter</title>
    <author>J K. Rowling</author>
    <year>2005</year>
    <price>29.99</price>
  </order>
  <order category="web">
    <title lang="en">Learning XML</title>
    <author>Erik T. Ray</author>
    <year>2003</year>
    <price>39.95</price>
  </order>' .
  '<o>' . $data . 'o</o>' . '
</orderstree>';


    
    return response($arr, 200)
                  ->header('Content-Type', 'text/xml');
});



Route::get('/echo/xml/{ordernumber}', function ($ordernumber) {

    $order = Order::where('ordernumber', '=', $ordernumber)->first();
    $orderitems = OrderItems::where('ordernumber', '=', $ordernumber)->get();
    $data = User::where('id', '=', "1")->get('idnumber');
    $arr = '<?xml version="1.0" encoding="UTF-8"?>
    <orderstree>
      <order ordernumber=" ' . $order->ordernumber .  ' ">
        <title lang="en">Everyday Italian</title>
        <author>Giada De Laurentiis</author>
        <createdby>' . $order->staffname  . '#' .  $order->staffid  . '</createdby>
        <items>2005</items>
        <totalprice> ' . $order->totalprice .  ' </totalprice>
      </order>
    </orderstree>';
    
    
        
        return response($arr, 200)
                      ->header('Content-Type', 'text/xml');
    });
    
    



//Route::get('test', function(){
//   return "<h1>" . Order::get("color") . "</h1>";
//});



Route::get('test', function(){
    return "<pre>" . print_r(User::all(), true) . "</pre>";
});


Route::get('/dashboard/orders/{slug}', function($slug){
    $slug = Order::where('slug', '=', $slug)->first();
    return $slug;

});





Route::get('/orders/user/{slug}', function($slug){
        
    $order = \cdn\Models\Order::where('slug', $slug)->firstOrFail(); 
    return $order;
});






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






