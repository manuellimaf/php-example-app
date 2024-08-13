<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PortfolioController;
use App\Http\Middleware\WorkInProgress;

Route::get('wip', function () {
    return view('wip');
});

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

//    d. Mostrar el resumen de la cartera 
Route::get('/portfolio', [PortfolioController::class, 'getSummary']);

//    e. Mostrar las operaciones abiertas y cerradas
Route::get('/portfolio/operations', [PortfolioController::class, 'getOperations']);


//    c. (TODO) Registrar compras y ventas de activos en la base de datos



