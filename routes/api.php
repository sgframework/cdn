<?php

use Illuminate\Http\Request;

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
