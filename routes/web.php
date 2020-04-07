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

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');


Route::get('upload', 'HomeController@upload')->name('upload');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//rotas reutilizadas, para acesso de administrador.
Route::group(['middleware' => ['auth','admin.auth'],'namespace' => 'Admin', 'prefix'=> 'admin'], function () {
    Route::get('cadastro','CadastroController@index')->name('admin.cadastro.cadindex');
    Route::post('cadastro','CadastroController@buscar')->name('admin.cadastro.cadindex');
         
    //Route:get('cadastro','CadastroController@index')->name('admin.cadastro.cadindex');
    //$this->post('cadastro','CadastroController@buscar')->name('admin.cadastro.cadindex');
    Route::any('cadastroup','CadastroController@atualiza')->name('cadastroup');
    Route::any('cadastrodown','CadastroController@excluir')->name('cadastrodown');

});



/*$this->group(['middleware' => ['auth','admin.auth'], 'namespace' => 'Admin', 'prefix'=> 'admin'], function(){
        
    $this->get('cadastro','CadastroController@index')->name('admin.cadastro.cadindex');
    $this->post('cadastro','CadastroController@buscar')->name('admin.cadastro.cadindex');
    Route::any('cadastroup','CadastroController@atualiza')->name('cadastroup');
    Route::any('cadastrodown','CadastroController@excluir')->name('cadastrodown');
   
    });*/
