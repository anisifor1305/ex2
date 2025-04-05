<?php

use Illuminate\Support\Facades\Route;
use App\Models\Employee;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/firstproject', \App\Http\Controllers\FirstProjectController::class);
Route::get('/userform', [\App\Http\Controllers\FormProcessor::class, 'getForm']);
Route::post('/store_form', [\App\Http\Controllers\FormProcessor::class, 'authed']);
Route::get('/test_database', function () {
    $employee = new Employee();
    $employee -> save();
    });