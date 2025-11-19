<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
return view('index');
});

use App\Http\Controllers\MenuController;

Route::get('/', [MenuController::class, 'index']);
