<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormProcessor extends Controller
{
    public function getForm(){
        return view('form');
    }
    public function authed(Request $request){
        $name = $request->input('name');
        // return response()->json($request);
        return view('helloname', ['name'=>$name]);
    }
}