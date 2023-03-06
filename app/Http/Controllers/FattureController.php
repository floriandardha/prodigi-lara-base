<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class FattureController extends Controller
{
    public function fatture(){
        //echo'pagina prova';
        return view('FattureView');
}
}