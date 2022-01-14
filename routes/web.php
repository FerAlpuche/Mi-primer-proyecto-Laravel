<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Se definen las rutas de nuestra aplicación
/*Route::get('/', function () {
    $nombre = "Alpuche";

    return view('home', compact('nombre'));

})->name('home');

//Enviar un parametro dentro de la ruta
// Definir parametros obligatorios
Route::get('saludo/{nombre}', function($nombre){
    return "Saludos" . $nombre;
});

/* 
/ Parametros opcionales
Route::get('saludo/{nombre?}', function($nombre = "Invitado"){
    return "Saludos" . $nombre;
});


Route::get('contactame', function () {
    // Retornar vistas
    return "Modulo de contactos";
})->name('contactos'); // Se agrega un nombre a la ruta

Route::get('/', function(){
    echo "<a href='". route('contactos') ."'> Contacto 1 </a><br>";
    echo "<a href='". route('contactos') ."'> Contacto 2 </a><br>";
    echo "<a href='". route('contactos') ."'> Contacto 3 </a><br>";
    echo "<a href='". route('contactos') ."'> Contacto 4 </a><br>";
});

/* '". route('contactos') ."'
Recibe como parametro el nombre de la ruta y este nos devuelve 
la URL correcta.
*/
Auth::routes(['register' => true]);

Route::view('/', 'home')->name('home');

Route::view('/about', 'about')->name('about');
Route::resource('portafolio', 'ProjectController')
                ->parameters(['portafolio' => 'project'])
                ->names('projects');

//Es muy importante el orden de las rutas
/*Route::get('/portafolio', 'ProjectController@index')->name('projects.index'); 
//CREATE
Route::get('/portafolio/crear', 'ProjectController@create')->name('projects.create');
//EDIT
Route::get('/portafolio/{project}/editar', 'ProjectController@edit')->name('projects.edit');
//UPDATE
Route::patch('/portafolio/{project}', 'ProjectController@update')->name('projects.update');
//REGISTER
Route::post('/portafolio', 'ProjectController@store')->name('projects.store'); 
//SHOW
Route::get('/portafolio/{project}', 'ProjectController@show')->name('projects.show');
//DESTROY
Route::delete('/portafolio/{project}', 'ProjectController@destroy')->name('projects.destroy');//Es muy importante el orden de las rutas
Route::get('/portafolio', 'ProjectController@index')->name('projects.index'); 
//CREATE
Route::get('/portafolio/crear', 'ProjectController@create')->name('projects.create');
//EDIT
Route::get('/portafolio/{project}/editar', 'ProjectController@edit')->name('projects.edit');
//UPDATE
Route::patch('/portafolio/{project}', 'ProjectController@update')->name('projects.update');
//REGISTER
Route::post('/portafolio', 'ProjectController@store')->name('projects.store'); 
//SHOW
Route::get('/portafolio/{project}', 'ProjectController@show')->name('projects.show');
//DESTROY
Route::delete('/portafolio/{project}', 'ProjectController@destroy')->name('projects.destroy');*/

Route::view('/contact', 'contact')->name('contact');

Route::post('contact', 'MessagesController@store');

