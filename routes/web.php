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
    return view('welcome');
});

Route::group(['prefix' => 'admin'], function(){

    Route::resource('users','UsersController');
    Route::get('admin/users/{id}',[

        'uses' => 'UsersController@destroy',
        'as' => 'admin.users.destroy'

    ]);
   Route::get('admin/users/{id}/edit',[
        'uses' => 'UsersController@edit',
        'as' => 'admin.users.edit'
   ]);
   /*Route::get('admin/users/{id}',[
        'uses' => 'UsersController@update',
        'as' => 'admin.users.update'
   ]);*/
   
   //=============CATEGORIA============================

   Route::resource('categorias', 'CategoriasController');
   Route::get('admin/categorias/{id}',[
    'uses' => 'CategoriasController@destroy',
    'as' => 'admin.categorias.destroy'
   ]);

    //===================ARTICULOS=======================
   Route::resource('articulos', 'ArticulosController');

});
//Auth::routes();

//Route::get('/home', 'HomeController@index');
Route::get('auth/login', [
    'uses' => 'Auth\RegisterController@getLogin',
    'as' => 'admin.auth.login'
]);


Route::post('auth/login', [
    
    'uses' => 'Auth\RegisterController@postLogin',
    'as' => 'admin.auth.login'
    
]);

Route::get('auth/logout', [
    
    'uses' => 'Auth\RegisterController@getLogout',
    'as' => 'admin.auth.logout'
    
]);


