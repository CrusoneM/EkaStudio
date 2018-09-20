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
    return view('index');
});
// Steps
Route::get('/paso-1', function () {
    return view('steps/paso-1');
});
Route::get('/paso-2', function () {
    return view('steps/paso-2');
});
Route::get('/paso-3', function () {
    return view('steps/paso-3');
});
// Servicios
Route::get('/servicio/diseño/logotipo', function () {
    return view('servicios/diseño/logotipo');
});