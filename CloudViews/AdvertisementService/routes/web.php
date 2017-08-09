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
$app->post('advertisementservice/api/v1/advertisements','AdvertisementsController@store');
$app->get('advertisementservice/api/v1/advertisements','AdvertisementsController@index');
$app->get('advertisementservice/api/v1/advertisementsfind','AdvertisementsController@findadvertisements');
$app->put('advertisementservice/api/v1/advertisements/{username}','AdvertisementsController@update');
$app->delete('advertisementservice/api/v1/advertisements/{username}','AdvertisementsController@destroy');
$app->delete('advertisementservice/api/v1/advertisementdelete','AdvertisementsController@advertisementdelete');
$app->post('advertisementservice/api/v1/advertisementupdate','AdvertisementsController@advertisementupdate');
$app->get('advertisementservice/api/v1/advertisementsfinduseradds','AdvertisementsController@finduseradds');
$app->post('advertisementservice/api/v1/imageupdate','AdvertisementsController@imageupdate');
$app->post('advertisementservice/api/v1/logoupdate','AdvertisementsController@logoupdate');
$app->post('advertisementservice/api/v1/videoupdate','AdvertisementsController@videoupdate');
