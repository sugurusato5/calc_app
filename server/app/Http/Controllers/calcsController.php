<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class calcsController extends Controller
{
    public function show($num1, $operator, $num2)
    {
        switch ($operator) {
            case 'addition':
                $answer = (int)$num1 + (int)$num2;
                break;
            case 'subtraction':
                $answer =  (int)$num1 + (int)$num2;
                break;
            case 'multiplication':
                $answer =  (int)$num1 + (int)$num2;
                break;
            case 'division':
                $answer =  (int)$num1 + (int)$num2;
                break;
            
        }
        
        return view('calcs.show', ['answer' => $answer]);

    }
}
