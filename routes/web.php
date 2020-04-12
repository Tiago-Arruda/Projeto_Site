<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Criar um grupo de rotas de usuarios 
Route::get('users/down','FilesDownController@index')->name('users.downloads.down');
Route::post('users/down','FilesDownController@show')->name('users.downloads.baixar');

//Route::get('users/down/{id}','FilesDownController@show')->name('dowloadfile');

//Rotas para Upar arquivos
//Route::get('upload', 'HomeController@upload')->name('upload');



//rotas reutilizadas, para acesso de administrador.
Route::group(['middleware' => ['auth','admin.auth'],'namespace' => 'Admin', 'prefix'=> 'admin'], function () {
    //usuarios
    Route::get('cadastro','CadastroController@index')->name('admin.cadastro.cadindex');
    Route::post('cadastro','CadastroController@buscar')->name('admin.cadastro.cadindex');
    //arquivos
    Route::get('upload','FilesController@index')->name('admin.Upload.upload');
    Route::post('upload','FilesController@uploads')->name('admin.Upload.upload');
    Route::post('upload','FilesController@buscar')->name('admin.Upload.busca');
    Route::any('uploadatualiza','FilesController@atualizadoc')->name('uploadatualiza');
         
    //Route:get('cadastro','CadastroController@index')->name('admin.cadastro.cadindex');
    //$this->post('cadastro','CadastroController@buscar')->name('admin.cadastro.cadindex');
    Route::any('cadastroup','CadastroController@atualiza')->name('cadastroup');
    Route::any('cadastrodown','CadastroController@excluir')->name('cadastrodown');

});



  