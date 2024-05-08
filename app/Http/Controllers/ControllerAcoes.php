<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerAcoes extends Controller
{
    public function index(Request $request){
         
        $series =[
            'Senac',
            'Autonomia',
            'Aprendizagem'
        ];

        return view('output.index')->with('series', $series);
    }
}
