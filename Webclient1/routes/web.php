<?php



/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It is a breeze. Simply tell Lumen the URIs it should respond to
  | and give it the Closure to call when that URI is requested.
  |
 */
//client URLS
Route::get('/', 'HomeController@gethome');
Route::get('/home', 'HomeController@gethome');
Route::get('/clientregistration', 'ClientController@getregistration');
Route::post('/clientregistration', 'ClientController@postregistration');
Route::get('/clientlogin', 'ClientController@getlogin');
Route::post('/clientlogin', 'ClientController@postlogin');
Route::get('/clientprofile', 'ClientController@getprofile');
Route::post('/clientprofile', 'ClientController@postprofile');
Route::get('/clientpassword', 'ClientController@getpassword');
Route::get('/clientverification', 'ClientController@getverification');
Route::get('/clientconfirmation', 'ClientController@getconfirmation');
Route::post('/clientverification', 'ClientController@postverification');
Route::post('/clientconfirmation', 'ClientController@postconfirmation');
Route::post('/clientpassword', 'ClientController@postpasssword');
Route::get('/clientlogout', 'SessionController@clientlogout');
Route::get('/clientactivation', 'ActivationController@clientactivation');
Route::get('/clienthome', 'ClientController@gethome');

//User URLS
//Route::get('/home', 'LoginController@gethome');
Route::get('/userregistration', 'UserController@getregistration');
Route::post('/userregistration', 'UserController@postregistration');
Route::get('/userlogin', 'UserController@getlogin');
Route::post('/userlogin', 'UserController@postlogin');
Route::get('/useractivation', 'ActivationController@useractivation');
Route::get('/userprofile', 'UserController@getprofile');
Route::post('/userprofile', 'UserController@postprofile');
Route::get('/userpassword', 'UserController@getpassword');
Route::get('/userverification', 'UserController@getverification');
Route::get('/userconfirmation', 'UserController@getconfirmation');
Route::post('/userverification', 'UserController@postverification');
Route::post('/userconfirmation', 'UserController@postconfirmation');
Route::post('/userpassword', 'UserController@postpasssword');
Route::get('/userlogout', 'SessionController@userlogout');



//Advertisement URLS
Route::get('/advertisement', 'AdvertisementController@getadvertisement');
Route::post('/advertisement', 'AdvertisementController@postadvertisement');
Route::get('/advertisementedit', 'AdvertisementController@edit');
Route::post('/advertisementedit', 'AdvertisementController@postedit');
Route::get('/advertisementshow', 'AdvertisementController@show');
Route::get('/advertisementdelete', 'AdvertisementController@delete');



//Event URLS
