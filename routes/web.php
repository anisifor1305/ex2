<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/firstproject', \App\Http\Controllers\FirstProjectController::class);
Route::get('/userform', [\App\Http\Controllers\FormProcessor::class, 'getForm']);
Route::post('/store_form', [\App\Http\Controllers\FormProcessor::class, 'authed']);