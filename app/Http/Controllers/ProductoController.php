<?php

namespace pascuaweb\Http\Controllers;

use Illuminate\Http\Request;

class ProductoController extends Controller
{
    //

    public function crear(Request $request)
     {

          $user = Auth::guard('producto')->user();
          // creo la capacidad
     	$p=new producto;
     	    $table->increments('id');
            $table->string('nombre');  
            $table->string('tipo'); 
            $table->string('tamano');  
            $table->string('sabor');
            $table->string('avatar')->default('default.jpg');  
            $table->string('precio'); 
 
          $p->institucion_id = $user->id; 	
      //guardo en la base de datos
      $p->save();

         
          //redireccion a la pag de inicio
         // return view('institucion.mostrarCapacidad');
          return redirect(url('institucion/mostrarCapacidad'));

     }
}
