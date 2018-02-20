@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row register-form">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-default">

                  <div class="panel-heading text-center"><h2> Productos</h2></div>

            <div class="panel-body">
                  <div align="center">
              
		             <a  class="btn btn-default " href="{{ url('admin/producto/nuevoProducto') }}">   Nuevo</a>    
		             <a  class="btn btn-default " href="{{ url('admin/producto/editarProducto') }}">   Editar</a>  
		             
       			 </div>

          </div>
      </div>
    </div>
  </div>
</div>
 		

@endsection