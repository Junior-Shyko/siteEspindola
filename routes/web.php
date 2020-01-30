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
Route::get('teste'   , 'SiteController@teste');
Route::get('search' , 'SiteController@searchList');
//Route::post('search' , 'SiteController@searchList');
Route::get('imovel/{id}' , 'SiteController@show');
Route::get('showmaps' , 'SiteController@allMaps');
Route::get('searchCode' , 'SiteController@searchCode');
Route::get('nao-encontrado' , 'SiteController@notImmobiles');
Route::get('district-city' , 'SiteController@getDistrictCity');
Route::get('todos-bairros' , 'SiteController@getDistrict');
Route::get('404' , 'SiteController@notfound')->name('404');
Route::get('busca-avancada' , 'SiteController@immobileAdvanced');
Route::post('enviar-mensagem' , 'SiteController@sendContact');
Route::get('search-key/{code}' , 'SiteController@searchKey');
Route::post('reservar-chave' , 'SiteController@reserveKey');
Route::get('confirmacao-reserva-chave' , 'SiteController@confirmReserve');
Route::get('todos-os-tipos/{type}' , 'SiteController@allType');
/*NEWSLETTER*/
Route::post('newsletter-create' , 'NewsletterController@store')->name('create-news');
Route::get('sucesso-newsletter' , 'NewsletterController@success');

Route::resource('newsletter' , 'NewsletterController');

Route::get('maps' , function(){
	return view('maps');
});
Route::post('searchadvance' , 'SiteController@searchAdvance');
Route::get('ip' , 'SiteController@getIp');
Route::post('adicionar-ip' , 'SiteController@setIpLocation');
Route::resource('/'  , 'SiteController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('calculos-imobiliarios' , 'CalculationController@index');

/* REDIRECIONAMENTO DE ERROS */
Route::get('/pagenotfound', 'HomeController@padenotfound');
/** SINCRONIZAR */
Route::get('xml' , 'SiteController@sync');

Route::get('espindola', 'SiteController@espindola');
Route::get('servicos', 'SiteController@services');
Route::get('equipe', 'SiteController@team');
Route::get('cliente', 'SiteController@client');
Route::get('contato' , 'SiteController@contact');

