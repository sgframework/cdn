<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});


//Route::get('/home', function () {
//    return view('home');
//});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




/*
* User Profile
*/

Route::get('/user/{username}', [
    'uses' => '\App\Http\Controllers\ProfileController@getProfile',
    'as' => 'profile.index'
]);



Route::get('/profile/edit', [
	    'uses' => '\App\Http\Controllers\ProfileController@getEdit',
    'as' => 'profile.edit',
    'middleware' => ['auth'],
]);

Route::post('/profile/edit', [
	    'uses' => '\App\Http\Controllers\ProfileController@postEdit',
    	'middleware' => ['auth'],
]);



Route::post('/profile/imgupdate', [
	    'uses' => '\App\Http\Controllers\UploadController@postUpdate',
    	'middleware' => ['auth'],
    	'as' => 'update.post',
]);





/*
* Search
*/

Route::get('/search', [
    'uses' => '\App\Http\Controllers\SearchController@getResults',
    'as' => 'search.results'
]);






/*
* Items
*/

Route::get('/items', [
    'uses' => '\App\Http\Controllers\ItemsController@getResults',
    'as' => 'items.results'
]);

