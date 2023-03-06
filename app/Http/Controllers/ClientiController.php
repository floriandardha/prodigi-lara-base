<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ClientiController extends Controller
{
    public function clienti(){
        //echo'pagina prova';
        return view('ClientiView');
    }
}
