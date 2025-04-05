<?php

use Illuminate\Support\Facades\Route;
use App\Models\Employee;

Route::get('/', function () {
    return view('home',['name'=>'Artem', 'age'=>'17', 'position'=>'Saratov', 'adress'=>'Ploshad Lenina']);
});
Route::get('/contacts', function () {
    return view('contacts', ['adress'=>'Arbat', 'post_code'=>'1248272', 'email'=> 'ajdai@slcdjs.d', 'phone'=>'8 800 555 35 35']);
});
Route::get('/firstproject', \App\Http\Controllers\FirstProjectController::class);
Route::get('/userform', [\App\Http\Controllers\FormProcessor::class, 'getForm']);
Route::post('/store_form', [\App\Http\Controllers\FormProcessor::class, 'authed']);
Route::get('/test_database', function () {
    $employee = new Employee();
    $employee -> save();
    });
Route::get('/employee', [\App\Http\Controllers\EmployeeController::class, 'viewForm'] );

Route::post('/employee', [\App\Http\Controllers\EmployeeController::class, 'formData'] );

Route::get('/employee/{id}', [\App\Http\Controllers\EmployeeController::class, 'update'] );