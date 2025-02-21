<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\BikesController;
use App\Http\Controllers\AccesoriesController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/sale', [SaleController::class, 'index']);

Route::get('/accesories', [AccesoriesController::class, 'index']);

Route::get('/bikes', [BikesController::class, 'index']);
