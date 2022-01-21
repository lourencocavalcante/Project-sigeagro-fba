<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastrosController extends Controller
{
    public function insert(){
        return view('form-cadastro-animal');
    }
}
