<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


/*
1 ruta
*/


Route::get('lugares.blade.php', function () {
    return view('lugares');
});

/*
2 ruta
*/


Route::get('visitantes.blade.php', function () {
    return view('visitantes');
});

/*
3 ruta
*/


Route::get('reservaciones.blade.php', function () {
    return view('reservaciones');
});

/*
4 ruta
*/


Route::get('guia.blade.php', function () {
    return view('guia');
});
