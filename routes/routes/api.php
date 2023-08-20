<?php

use Illuminate\Http\Request;
use Illuminate\Routing\Router;

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
Route::get('immobile-all' , 'ImmobileController@all');
Route::get('immobileCode/{code}', 'ImmobileController@getImmobileByCode');
Route::prefix('v1')->group(function () {
    Route::get('immobile-id/{id}' , 'ImmobileController@show');
});

$router->post('newsletters/attachments', [
    'uses' => 'AttachmentsController@store',
    'as' => 'attachments.store',
]);
