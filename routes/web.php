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


Route::view('/', 'home')->name('home');
Route::view('/about', 'about')->name('about');

//Route::view('/portafolio', 'portafolio', compact('portafolio'))->name('portafolio');

Route::get('/portafolio', 'PortafolioController')->name('portafolio');

Route::view('/contact', 'contact')->name('contact');