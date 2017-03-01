<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;

class Calculator extends Controller
{
    public function index() {
        return view('validate.cal');
    }

    public function submit(Request $request) {

        $rules = [
            'num1'  => 'required|numeric'
        ];
        $validator = Validator::make($request->all(),$rules);
        dd ($validator->passes() );

    	// $num1 = $request->input('num1');
    	// $num2 = $request->input('num2');        
     //    $result = $num1 + $num2;
     //    return view('validate.cal',
     //          compact('num1','num2','result'));

    }
}