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

//Route::get('/', function () {
// return view('global.index');
//   });

    Route::get('/', [
        'uses' => '\cdn\Http\Controllers\GlobalController@getIndex',
    'as' => 'global.index',
    ]);

Auth::routes();





//Route::get('home', ['as'=>'home','uses'=>'HomeController@index']);


Route::group(['middleware' => 'is-admin'], function () {     

 
    Route::get('admins', ['as'=>'admins','uses'=>'HomeController@admins']); 
});


Route::get('/root', [
    'uses' => '\cdn\Http\Controllers\RootController@getIndex',
'as' => 'root.index',
]);

Route::get('/tests', [
    'uses' => '\cdn\Http\Controllers\RootController@getTest',
'as' => 'tests.index',
]);

Route::get('/tests/review', [
    'uses' => '\cdn\Http\Controllers\RootController@getReview',
'as' => 'orders.review',
]);



/*
* External Services.
*/

Route::get('/mail', [
    'uses' => '\cdn\Http\Controllers\MailController@getMail',
'as' => 'mail.index',
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

Route::get('/dashboard', [
    'uses' => '\cdn\Http\Controllers\ProfileController@getProfile',
'as' => 'dashboard.index',
]);


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

Route::get('/{$user}/orders', [
    'uses' => '\cdn\Http\Controllers\OrdersController@getOrdersbyUser
    user',
'as' => 'orders.user',

]);


Route::post('/order/insert', [
    'uses' => '\cdn\Http\Controllers\OrdersController@InsertOrders',
'as' => 'orders.insert',

]);



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
'as' => 'orders.insert.step2',

]);



//{{ route('dashboard.orders') }}

Route::get('/myorders', [
    'uses' => '\cdn\Http\Controllers\OrdersController@getMyOrders',
'as' => 'dashboard.orders',

]);



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
    return redirect()->route('home')->with('info', 'You have been signed up');
});



/*
* Search
*/

//Route::get('/search', [
//   'uses' => '\cdn\Http\Controllers\SearchController@getResults',
//  'as' => 'search.results'
//]);








/*
* Friends


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
*/

/*
* Statuses


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


*/