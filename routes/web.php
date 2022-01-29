<?php

use Illuminate\Support\Facades\Route;

//Route::get('/',  function(){
  // return view('index');
//})->name('index');

//Route::get('/index',  function(){
//})->name('index');
//


Route::get('/criarcards', function () {
    return view('criarcards');
})->middleware(['auth']);


Route::group(['middleware'=>['auth']], function(){

Route::get('/matematica', function () {
    return view('paginas.matematica');
});

Route::get('/cienciasnatureza', function () {
    return view('paginas.cienciasnatureza');
});

Route::get('/cienciashumana', function () {
    return view('paginas.cienciashumana');
});

Route::get('/linguagens', function () {
    return view('paginas.linguagens');
});


});

//Route::get('/register', function () {
  //  return view('auth.register');
//});
//Route::get('/welcome/disciplinas', function () {
  // return view('disciplinas.blade.php');
//});
//Route::get('/login/welcome', function () {
  //criar rota
   //   return view('welcome');

//});


//Route::post('/logout', function () {
	//  return view('password.login');

//});

Route::get('/',  function(){
   return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

