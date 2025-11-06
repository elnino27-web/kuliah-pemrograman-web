<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
return view('index');
});
Route::get('/halo', function () {
return '<strong style="color: blue">Halo Laravel!</strong>';
});
