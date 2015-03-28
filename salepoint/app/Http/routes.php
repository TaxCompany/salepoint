<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::get('/settings', ['middleware' => 'auth',function()
{
    return view('settings.index');
}]);

Route::group(['prefix'=>'settings', 'namespace'=>'Settings\Users', 'middleware' => 'auth'], function(){
    Route::resource('users', 'UsersController');
});


Route::group(['prefix'=>'settings','namespace'=>'Settings\Companys', 'middleware'=>'auth'],function(){
    Route::resource('company','CompanysController');
});

Route::group(['prefix'=>'settings','namespace'=>'Settings\Currencys','middleware'=>'auth'],function(){
    Route::resource('currency','CurrencysController');
});

Route::group(['prefix'=>'settings','namespace'=>'Settings\FiscalRegimens','middleware'=>'auth'],function(){
    Route::resource('fiscalRegimen','FiscalRegimensController');
});


Route::group(['prefix'=>'settings', 'namespace'=>'Settings\Uoms', 'middleware' => 'auth'], function(){
    Route::resource('uoms', 'UomsController');
});

Route::resource('partners', 'Partners\PartnersController');

Route::resource('taxs', 'Taxs\TaxsController');


//Language

Route::get('languageEn', ['as' => 'languageen', 'uses' => 'GeneralController@setLangEn']);
Route::get('languageEs', ['as' => 'languagees', 'uses' => 'GeneralController@setLangEs']);


