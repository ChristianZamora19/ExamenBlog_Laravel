<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    //barra menu
    public function inicio(){
        return view('index');
    }
    public function introduccion(){
        return view('about');
    }
    public function unidad1(){
        return view('marketing');
    }
    public function unidad2(){
        return view('blog');
    }
    public function contactar(){
        return view('contact');
    }

    // ventanas faltantes de unidad1
    public function nube(){
        return view('Nube');
    }
    public function maestro(){
        return view('ProgMaestro');
    }
    public function servidor(){
        return view('Servidores');
    }
    public function si(){
        return view('SI');
    }
    public function arquitectura(){
        return view('Arquitectura');
    }
    public function clientesevidor(){
        return view('Cli_Ser');
    }
    
    // ventanas faltantes unidad2
    public function multinivel(){
        return view('Multinivel');
    }
    public function mvc(){
        return view('MVC');
    }
    public function socket(){
        return view('Sockets');
    }
    public function estrategias(){
        return view('U2_Estrategias');
    }
    
}

