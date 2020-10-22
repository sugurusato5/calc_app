<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calcsController extends Controller
{
    public function show($num1, $operator, $num2)
    {
        $data = ['num1'=> $num1, 'operator'=> $operator, 'num2'=> $num2];
        return view('calcs.show', $data);
    }
}
