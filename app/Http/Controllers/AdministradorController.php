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


    public function pedidos()
    {
        
        return view('admin.pedidos');
    }

    public function productos()
    {
        
        return view('admin.productos');
    }

    public function stock()
    {
        
        return view('admin.stock');
    }

    public function clientes()
    {
        
        return view('admin.clientes');
    }

    public function gastos()
    {
        
        return view('admin.gastos');
    }


}
