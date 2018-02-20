<?php

namespace pascuaweb\Http\Controllers;

use Illuminate\Http\Request;

class AdministradorController extends Controller
{

//*********ACCESOS Y REGISTRO***************
    public function acceso()
    {
        
        return view('admin.acceso');
    }

     public function registro()
    {
        
        return view('admin.registro');
    }

//*********INICIO Y BIENVENIDA***************
    public function inicio()
    {
        
        return view('inicio');
    }

     public function bienvenido()
    {
        
        return view('bienvenido');
    }

//*********PEDIDOS***************
    public function pedidos()
    {
        
        return view('admin.pedidos');
    }

//*********PRODUCTOS***************
    public function productos()
    {
        $productos = productos::orderBy('id');//->take(10)->get();
        return view('productos',array('productos'=>$productos));
       
        return view('admin.productos.productos');
    }
    public function nuevoProductos()
    {
        
        return view('admin.productos.nuevoProductos');
    }
    
//*********STOCK***************
    public function stock()
    {
        
        return view('admin.stock');
    }

//*********CLIENTES***************
    public function clientes()
    {
        
        return view('admin.clientes');
    }

//*********GASTOS***************
    public function gastos()
    {
        
        return view('admin.gastos');
    }


}
