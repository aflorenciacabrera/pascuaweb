<?php

namespace pascuaweb\Http\Controllers;

use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    //

    public function acceso()
    {
        
        return view('admin.acceso');
    }

     public function registro()
    {
        
        return view('admin.registro');
    }


    public function inicio()
    {
        
        return view('inicio');
    }

     public function bienvenido()
    {
        
        return view('bienvenido');
    }
}
