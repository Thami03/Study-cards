<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('layout.layout');
});

Route::get('/welcome/login', function () {
    return view('usuario.login');
});
Route::get('/login/welcome', function () {
  //criar rota
      return view('welcome');

});

//Route::post('/login/salvar', function () {
	//processar alguma coisa
	//enviar pro bd

//});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
