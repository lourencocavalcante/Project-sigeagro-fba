<?php

use App\Fazenda;
//use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request;
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

Route::post('/salvar-cadastro-fazenda', function (Request $request){
   // dd($request->all());
    //echo 'Ola';
    Fazenda::create([
        'faz_proprietario_id' => $request->fazend_proprietario,
        'faz_nome' => $request->fazend_nome,
        'faz_endereco' => $request->fazend_endereco,
        'faz_cidade' => $request->fazend_cidade,
        'faz_cnpj_cpf' => $request->fazend_cnpj_cpf

    ]);
});

Route::get('/cadastro', 'CadastrosController@insert')->name('cadastrar-fazenda');

Route::get('/profile', 'ProfileController@index')->name('profile');

Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', function () {
    return view('about');
})->name('about');

