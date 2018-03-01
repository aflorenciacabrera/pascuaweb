<?php


namespace pascuaweb\Http\Controllers;
use Illuminate\Http\Request;
use pascuaweb\Producto;
use Illuminate\Support\Facades\Auth;
use DB;
class ProductoController extends Controller
{
    //
    public function crear(Request $request)
     {
          $user = Auth::guard()->user();
          // creo la producto
      $p=new producto;
          $p->nombre=$request->nombre;
          $p->tipo=$request->tipo;
          $p->tamano=$request->tamano;
          $p->medida=$request->medida;
          $p->peso=$request->peso;
          $p->sabor=$request->sabor;
          $p->precio=$request->precio;
          $p->avatar=$request->avatar;
          $p->User_id=$user->id;
         
      //guardo en la base de datos
      $p->save();
         
          //redireccion a la pag de inicio
        
          return redirect(url('admin/producto/producto'));
     }
     public function getAll(){
          $productos = producto::all();
          return json_encode($productos);
     }
      
     public function producto()
    {
         $producto = producto::orderBy('id')->take(10)->get();
        return view('producto',array('producto'=>$producto));
       
    }
}
