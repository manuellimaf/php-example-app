<?php 

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\PortfolioAPIController;
use App\Http\Controllers\api\OperationAPIController;

Route::apiResource('portfolio', PortfolioAPIController::class);
Route::apiResource('operation', OperationAPIController::class);