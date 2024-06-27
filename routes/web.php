<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LipController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('lippies', LipController::class);
