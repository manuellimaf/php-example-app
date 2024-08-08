<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PortfolioController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/user-id/{id}', function ($id) {
    return "User $id will be loaded";
});

Route::get('/phpinfo', function () {
    return view('phpinfo');
});


Route::get('/user/{id}', [UserController::class, 'getUser']);

Route::get('/portfolio', [PortfolioController::class, 'getSummary']);
Route::get('/portfolio/operations', [PortfolioController::class, 'getOperations']);

//    a. Tomar vía API cotizaciones de activos -> UpdateStocks.php
//    b. Almacenar cotizaciones en una base de datos

//    c. Registrar compras y ventas de activos en la base de datos
//    d. Mostrar el resumen de la cartera 
//    e. Mostrar las operaciones abiertas y cerradas


