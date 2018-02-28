@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row register-form">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                  <div class="panel-heading text-center"><h2>Nuevo Producto</h2></div>

            <div class="panel-body">
                   <form enctype="multipart/form-data" action="{{url('admin/producto/nuevoProducto')}}" method="POST">  
                       <input type="hidden" name="_token" value="{{ csrf_token() }}">

                      <div class="form-group">
                          <div class="col-sm-2 label-column">
                              <label class="control-label" for="name-input-field">Nombre: </label>
                          </div>
                          <div class="col-sm-6 input-column">
                              <input class="form-control" type="text" name="nombre" placeholder="Ingresar Nombre"  />
                          </div>
                      </div>
                        <br><br> <br>

                       <div class="form-group">
                          <div class="col-sm-2 label-column">
                              <label class="control-label" for="name-input-field">Tipo: </label>
                          </div>
                         <div class="col-sm-4 input-column">
                               <select name="tipo"  class="form-control" required>
                                  <option value="Figura">Figura</option>
                                  <option value="Huevo">Huevo</option>
                               </select>  
                              </div>
                       </div> 
                     
<br><br>
                      <div class="form-group">            
                          <div class="col-md-2  label-column"> 
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
<br><br> 
                     <div class="form-group">            
                          <div class="col-md-2  label-column"> 
                               <label class="control-label" >Medidas: </label> 
                           </div> 
                             <div class="col-sm-8 input-column">
                               <div class="col-sm-4 input-column">
                              <li>Ancho: </li> <input class="form-control" type="number"  min="0.00" max="10000.00" name="medida" placeholder="N°"  />
                              <li>Alto: </li> <input class="form-control" type="number"  min="0.00" max="10000.00" name="medida" placeholder="N°"  />
                          </div> 
                              </div>
                      </div>
<br><br> <br><br> <br><br> 
                      <div class="form-group">            
                          <div class="col-md-2  label-column"> 
                               <label class="control-label" >Peso: </label> 
                           </div> 
                             <div class="col-sm-2 input-column"> 
                             <input class="form-control" type="number"  min="0.00" max="10000.00" name="peso" placeholder="N°"  />                         
                          </div> 
                      </div> 
                     
 <br><br>  
                       <div class="form-group">
                          <div class="col-sm-2 label-column"> 
                              <label class="control-label" for="name-input-field" >Chocolate: </label>
                          </div>        
                          <div class="col-sm-4 input-column">
                               <select name="sabor"  class="form-control" required>
                                  <option value="Negro">Negro</option>
                                  <option value="Blanco">Blanco</option>
                                  <option value="Mixto">Mixto</option> 
                               </select>  
                              </div>
                      </div>
                      <br><br>

                       <div class="form-group">
                         <div class="col-sm-2 label-column">  
                              <label class="control-label">Precio:</label> 
                          </div>
                         <div class="col-sm-2 input-column">
                             <input class="form-control"  type="number"  name="precio" min="0.00" max="10000.00" step="0.01" placeholder="$" />
                          </div>
                       </div> 
                       <br> <br>  

                      {{-- Avatar--}}
                <div class="form-group">
                   <div class="col-sm-3 label-column ">  
                                <label>Cambiar imagen:</label>
                           </div>
                          <div class="col-sm-4 input-column col-md-offset-1">

                             {{--<img src="{{ asset('avatar/default.png') }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:30px;"  class="img-responsive round" >--}}

                             <img src="/cargas/avatars/default.png" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:30px;"  class="img-responsive round" >

                                
                                 {{--<input type="submit" value="Cambiar" class="pull-right btn btn-sm btn-primary"> --}}
                                  <input type="file" value="Seleccionar imagen" name="avatar"  accept="image/*" >
                                  
                                  <br>
                                 
                                
                         </div>
                      </div>
                      <br><br>  <br><br> <br><br> <br><br> <br><br><br><br>
                  <div class="form-group">
                        <button class="btn btn-success col-md-offset-1" type="submit" >Guardar Cambios </button>
                        <a  type="button" class="btn btn-warning col-md-offset-6 "  href="{{url('admin/producto/producto') }}">Volver <i class=" glyphicon glyphicon-arrow-left "></i></a>
                  </div>  

                </form>
 
          </div>
      </div>
    </div>
  </div>
</div>

@endsection