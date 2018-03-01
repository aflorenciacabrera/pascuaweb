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
              
<ul class="list-group">
     @foreach(Auth::Guard()->user()->productos as $producto)
            <li class="list-group-item">
                  <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-4">
                            <h4 class="list-group-item-heading">{{ $producto->nombre }}</h4>
                             <img src="{{$producto->avatar}}" style="width:150px; height:130px; float:left; border-radius:50%; margin-right:30px;"  class="img-responsive round" >

                        </div>



                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
                            <a href="#ventana"   class="text-center btn btn-default " data-toggle="modal" > ver mas</a>
                        </div>
                  </div>

                       <div class="modal fade in" id="ventana" >
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <!-- header de la ventana-->
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                                </button>
                                  


                                            </div>
                                             <!-- contenido de la ventana de la ventana-->
                                                    <!-- panel de capacidad-->
                                            <div class="modal-body"> 

                                                    
                                             <!-- footer de la ventana-->
                                      
                                          </div>{{-- modal --}}
                                     </div>
                                    </div> {{-- modal --}} 
                      </div>
        </li>
    @endforeach               
</ul>
   

          </div>
      </div>
    </div>
  </div>
</div>
    

@endsection