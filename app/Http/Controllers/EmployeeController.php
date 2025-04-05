<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function viewForm() {
        return view('employee');
    }
    public function formData(Request $request) {
        $name = $request->input('name');
        $email = $request->input('email');
        $workData = $request->input('workData');
        $json = json_decode($request->input('textarea'));
        echo $name . $email . $workData;
        $nametwo = $json->name;
        $age = $json->age;
        echo $nametwo . ' ' .$age;
    }
    function update(Request $request, $id) {
        echo 'Данные ' . $id . ' обновлены';
        
    }
    function getPath(Request $request){
        $path = $request>path();
        return $path;
    }
    function getUrl(Request $request){
        $url = $request>url();
        return $url;
    }
}
