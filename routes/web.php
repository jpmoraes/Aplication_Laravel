<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerAcoes; // Corrigido o namespace do controlador

Route::get('/', function () {
    return view('index');
});

Route::get('/output', [ControllerAcoes::class, 'index']); // Corrigido o nome da classe do controlador

