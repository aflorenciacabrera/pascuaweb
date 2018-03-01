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
    public function pedido()
    {
        
        return view('admin.pedido');
    }

//*********PRODUCTOS***************
   

    public function producto()
    {
       
        return view('admin.producto.producto');
    }
    public function nuevoProducto()
    {
        
        return view('admin.producto.nuevoProducto');
    }
    public function editarProducto()
    {
        
        return view('admin.producto.editarProducto');
    }
    
//*********STOCK***************
    public function stock()
    {
        
        return view('admin.stock');
    }

//*********CLIENTES***************
    public function cliente()
    {
        
        return view('admin.cliente.cliente');
    }
    public function nuevoCliente()
    {
        
        return view('admin.cliente.nuevoCliente');
    }
    public function editarCliente()
    {
        
        return view('admin.cliente.editarCliente');
    }

//*********GASTOS***************
    public function gasto()
    {
        
        return view('admin.gasto.gasto');
    }
    public function nuevoGasto()
    {
        
        return view('admin.gasto.nuevoGasto');
    }
    public function editarGasto()
    {
        
        return view('admin.gasto.editarGasto');
    }


}
