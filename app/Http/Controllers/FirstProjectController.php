<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstProjectController extends Controller
{
    public function __invoke(){
        return view('firstproject', ['text'=>'Привет']);
    }
}
