<?php

use Illuminate\Http\Request;
use cdn\Models\Order;
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
    $arr = cdn\Models\Order::select('ponumber')->where('id')->$name;

    $arr1 = array([
        $arr
    ]);

    
    return response($arr1, 200)
                  ->header('Content-Type', 'application/json');
});




//Route::get('test', function(){
//   return "<h1>" . Order::get("color") . "</h1>";
//});



Route::get('test', function(){
    return "<pre>" . print_r(User::all(), true) . "</pre>";
});


Route::get('/dashboard/orders/{slug}', function(){
    return $slug;

});





Route::get('/orders/user/{slug}', function(){
        
    $order = \cdn\Models\Order::where('slug', $slug)->firstOrFail(); 
});
