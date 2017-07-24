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

$app->get('/', function () use ($app) {
    return $app->version();
});
$app->post('authservice/api/v1/users','UsersController@store');
$app->get('authservice/api/v1/users','UsersController@index');
$app->get('authservice/api/v1/userfind','UsersController@finduser');
$app->put('authservice/api/v1/users/{username}','UsersController@update');
$app->delete('authservice/api/v1/users/{username}','UsersController@destroy');
$app->get('authservice/api/v1/useractivation','UsersController@useractivation');
$app->post('authservice/api/v1/userpasswordupdate','UsersController@passwordupdation');
$app->post('authservice/api/v1/userprofileupdate','UsersController@profileupdate');
$app->post('authservice/api/v1/clients','ClientsController@store');
$app->get('authservice/api/v1/clients','ClientsController@index');
$app->get('authservice/api/v1/clientfind','ClientsController@finduser');
$app->get('authservice/api/v1/organizationfind','ClientsController@findorganization');
$app->put('authservice/api/v1/clients/{username}','ClientsController@update');
$app->delete('authservice/api/v1/clients/{username}','ClientsController@destroy');
$app->get('authservice/api/v1/clientactivation','ClientsController@clientactivation');
$app->post('authservice/api/v1/clientpasswordupdate','ClientsController@passwordupdation');
$app->post('authservice/api/v1/clientprofileupdate','ClientsController@profileupdate');
