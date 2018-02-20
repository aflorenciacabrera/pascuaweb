@extends('layouts.app')
@section('content')


<div class="row register-form">
    <div class="col-md-8 col-md-offset-2">
       	<form class="form-horizontal custom-form" method="POST" action="{{ url('admin/productos/nuevoProducto') }}" class="bootstrap-form-with-validation">
             {{ csrf_field() }}  
            <h1>Cargar Producto</h1>


     	
            <div class="form-group">
                <div class="col-sm-1 label-column">
                    <label class="control-label" for="name-input-field">Nombre: </label>
                </div>
                <div class="col-sm-6 input-column">
                    <input class="form-control" type="text" name="nombre" placeholder="Ingresar Nombre"  />
                </div>
            </div>

             <div class="form-group">
                <div class="col-sm-1 label-column">
                    <label class="control-label" for="name-input-field">Tipo: </label>
                </div>
               <div class="col-sm-4 input-column" class="checkbox">   
		            <label class="control-label">  								
		                    <label  class="control-label "> <input type="checkbox"  name="tipo" value="Figura" /> Figura <h5></h5> </label> 
		                    <label  class="control-label"> <input type="checkbox" name="tipo" value="Huevo" /> Huevo <h5></h5></label>
		            </label>
       		 	</div>  
             </div> 
           

          	<div class="form-group">		        
		            <div class="col-md-1"> 
		                 <label class="control-label" >Tamaño: </label> 
		             </div> 
                   <div class="col-sm-4 input-column">
                     <select name="tamano"  class="form-control" required>
                        <option value="Único">Único</option>
                        <option value="Chico">Chico</option>
                        <option value="Mediano">Mediano</option>
                        <option value="Grande">Grande</option>
                        <option value="jumbo">jumbo</option>
                     </select>  
                    </div>
           		
       	 	</div>

           
     
             <div class="form-group">
                <div class="col-sm-1 label-column">	
                    <label class="control-label" for="name-input-field" >Sabor: </label>
                </div>        
				<div class="col-sm-4 input-column" class="checkbox">   
		            <label class="control-label">  								
		                    <label  class="control-label "> <input type="radio" checked name="sabor" value="Negro" /> Negro <h5></h5> </label> 
		                    <label  class="control-label"> <input type="radio" name="sabor" value="Blanco" /> Blanco <h5></h5></label>
		                    <td><label  class="control-label"> <input type="radio" name="sabor" value="Mixto" /> Mixto <h5></h5></label>
		            </label>
       		 	</div>               
            </div>

            {{-- Avatar--}}
 			<div class="form-group">
 				 <div class="col-sm-2 label-column">  
                      <label>Cambiar imagen:</label>
                 </div>
                <div class="col-sm-4 input-column">

                	 {{--<img src="{{ asset('avatar/default.png') }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:30px;"  class="img-responsive round" >--}}

                	 <img src="/cargas/avatars/default.png" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:30px;"  class="img-responsive round" >

                      <form enctype="multipart/form-data" action="{{url('admin/productos/nuevoProducto')}}" method="POST">  
                       <input type="submit" value="Cambiar" class="pull-right btn btn-sm btn-primary"> 
                        <input type="file" value="Seleccionar imagen" name="avatar"  accept="image/*" >
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <br>
                       
                      </form>
               </div>
            </div>
            <div class="form-group">
           <div class="col-sm-1 label-column">	
                <label class="control-label">Precio:</label> 
            </div>
           <div class="col-sm-2 input-column">
               <input class="form-control"  type="number"  name="precio" min="0.00" max="10000.00" step="0.01" placeholder="$" />
            </div>
        </div> 

         
 <br><br>
           
            <br><button class=" btn btn-success btn-lg col-md-offset-0 "  type="submit"><h4>Cargar</h4> </button>
        </form>
    </div>
</div>
 		
@endsection