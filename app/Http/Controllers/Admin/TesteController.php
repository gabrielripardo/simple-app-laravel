<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function dashboard(){
        return "teste da função testar()";
    }

    public function financeiro(){
        return "teste da função testar()";
    }

    public function usuarios(){
        return "teste da função testar()";
    }

}
