<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\estudante;

class estudanteControlo extends Controller
{
    public function index(){

         return view('estudante');

    }
}
