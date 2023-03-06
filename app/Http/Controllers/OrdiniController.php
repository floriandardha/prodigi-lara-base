<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class OrdiniController extends Controller
{
    public function ordini(){
        //echo'pagina prova';
        return view('OrdiniView');
    }
}
