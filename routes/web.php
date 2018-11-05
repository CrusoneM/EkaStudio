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
use Illuminate\Http\Request;
use App\Mail\SendMail;

Route::get('/', function () {
    return view('index');
});
// old
Route::get('/about', function () {
    return view('old/about/indexn');
});
Route::get('/contact', function () {
    return view('old/contact/indexn');
});
Route::get('/thanks', function () {
    return view('old/thanks/indexn');
});
//======= Steps =========
Route::get('/paso-1', function () {
    return view('steps/paso-1');
});

Route::get('/paso-2', 'Services@ShowAll');

Route::get('/paso-3', 'Services@ShowServices');

// Crear proceso
Route::post('/start-process', 'Services@StartProcess');
// Editar proceso
Route::post('/update-process', 'Services@UpdateProcess');
// Enviar email
Route::post('/send-mail-process', 'Services@SendProccesMail');
// Finalizar proceso
Route::post('/end-process', 'Services@EndProcess');

//======= Servicios =======
Route::get('/servicio/diseno/logotipo', function () {
    return view('servicios/diseno/logotipo');
});