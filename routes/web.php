<?php

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

Route::get('/', function () {
   return view('index');
    });




Auth::routes();



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






Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/process', 'ProcessController@index')->name('process');
Route::get('/items', 'ItemsController@index')->name('items');
Route::get('/add-item', 'ItemsController@add')->name('add');
Route::post('/post-item', 'ItemsController@post')->name('post');
Route::get('/submit-rtv', 'RtvController@index')->name('rtv');


/*
* User Profile
*/

Route::get('/user/{username}', [
    'uses' => '\cdn\Http\Controllers\ProfileController@getProfile',
    'as' => 'profile.index'
]);

Route::get('/profile/edit', [
	    'uses' => '\cdn\Http\Controllers\ProfileController@getEdit',
    'as' => 'profile.edit',
    'middleware' => ['auth'],
]);

Route::post('/profile/edit', [
	    'uses' => '\cdn\Http\Controllers\ProfileController@postEdit',
    	'middleware' => ['auth'],
]);



Route::post('/profile/imgupdate', [
	    'uses' => '\cdn\Http\Controllers\UploadController@postUpdate',
    	'middleware' => ['auth'],
    	'as' => 'update.post',
]);






/*
* Alert-Test
*/

Route::get('/alert', function () {
    return redirect()->route('home')->with('info', 'You have been signed up');
});



/*
* Search
*/

Route::get('/search', [
    'uses' => '\cdn\Http\Controllers\SearchController@getResults',
    'as' => 'search.results'
]);








/*
* Friends
*/

Route::get('/friends', [
    'uses' => '\cdn\Http\Controllers\FriendController@getIndex',
'as' => 'friend.index',
'middleware' => ['auth'],
]);

Route::get('/friends/add/{username}', [
    'uses' => '\cdn\Http\Controllers\FriendController@getAdd',
'as' => 'friend.add',
'middleware' => ['auth'],
]);


Route::get('/friends/accept/{username}', [
    'uses' => '\cdn\Http\Controllers\FriendController@getAccept',
'as' => 'friend.accept',
'middleware' => ['auth'],
]);

Route::post('/friends/delete/{username}', [
    'uses' => '\cdn\Http\Controllers\FriendController@postDelete',
'as' => 'friend.delete',
'middleware' => ['auth'],
]);


/*
* Statuses
*/

Route::get('/status/{slug}', [
'uses' => '\cdn\Http\Controllers\StatusController@getShow',
'as' => 'status-show'
]);



Route::post('/status', [
    'uses' => '\cdn\Http\Controllers\StatusController@postStatus',
    'as' => 'status.post',
    'middleware' => ['auth'],
]);

Route::get('/{username}/{statusId}', [
'uses' => '\cdn\Http\Controllers\StatusController@getStatusId',
'as' => 'status.byid'
]);

Route::get('/{username}/status/{slug}', [
'uses' => '\cdn\Http\Controllers\StatusController@getSShow',
'as' => 'status-sshow'
]);




Route::post('/status/{statusId}/reply', [
    'uses' => '\cdn\Http\Controllers\StatusController@postReply',
    'as' => 'status.reply',
    'middleware' => ['auth'],
]);

Route::get('/status/{statusId}/like', [
    'uses' => '\cdn\Http\Controllers\StatusController@getLike',
    'as' => 'status.like',
    'middleware' => ['auth'],
]);


