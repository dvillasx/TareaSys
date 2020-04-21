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

// Route::get('tareas/{nombre?}', function ($nombre = "Usuario"){
// // Route::get('tareas',function (){
//     $nombre = strtoupper($nombre);
//     // return view('tareas/tareasIndex'); Otra manera de entrar en directorios
//     // return view('tareas.tareasIndex');
//     return view('tareas.tareasIndex')->with(['nombre' => $nombre]);

// });

// Auth::routes();

Auth::routes(['verify' => true]);

Route::get('profile', function () {
    // Only verified users may enter...
})->middleware('verified');

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('tarea','TareaController')->middleware('auth');

Route::resource('equipo','EquipoController');

