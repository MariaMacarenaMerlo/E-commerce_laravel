<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\QuienessomosController;


Route::get('/',[\App\Http\Controllers\HomeController::class, 'home']) ->name('home');
Route::get('/contacto',[\App\Http\Controllers\ContactoController::class, 'contacto']) ->name('contacto');
Route::get('/productos',[\App\Http\Controllers\ProductosController::class, 'productos']) ->name('productos');
/*Route::get('/error',[\App\Http\Controllers\ErrorController::class, 'error']) ->name('error'); */
Route::get('/quienes-somos',[\App\Http\Controllers\QuienessomosController::class, 'quienessomos']) ->name('quienessomos');
Route::get('/login',[\App\Http\Controllers\LoginController::class, 'login']) ->name('login');
