<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function index()
    {
        //echo "Hola Mundo";
        return view('sitio/index');
    }

    public function saludar(Request $request, $nombre)
    {
        //echo "Hello " . $nombre;
        //return view('sitio/saludar',['elNombre' => $nombre]);
        return view('sitio/saludar',['elNombre' => $nombre]);
    }
}
