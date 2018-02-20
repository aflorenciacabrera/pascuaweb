@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row register-form">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                  <div class="panel-heading text-center"><h2>Nuevo Gasto</h2></div>

            <div class="panel-body">
                  <form class="form-horizontal custom-form" method="POST" action="{{ url('admin/gasto/nuevoGasto') }}" class="bootstrap-form-with-validation">
                       {{ csrf_field() }}  

                      <div class="form-group">
                          <div class="col-sm-2 label-column">
                              <label class="control-label" for="name-input-field">Nombre: </label>
                          </div>
                          <div class="col-sm-6 input-column">
                              <input class="form-control" type="text" name="nombre" placeholder="Ingresar producto comprado"  />
                          </div>
                      </div>

                       <div class="form-group">
                          <div class="col-sm-2 label-column">
                              <label class="control-label" for="name-input-field">Lugar: </label>
                          </div>
                          <div class="col-sm-6 input-column">
                              <input class="form-control" type="text" name="lugar" placeholder="Lugar de compra"  />
                          </div>
                      </div>

                      <div class="form-group">
                          <div class="col-sm-2 label-column">
                              <label class="control-label" for="name-input-field">Cantidad: </label>
                          </div>
                          <div class="col-sm-4 input-column">
                              <input class="form-control" type="number" name="cantidad" step="1" min="0" max="1000000" placeholder="N° Cantidad"   />
                          </div>
                      </div>

                       <div class="form-group">
                         <div class="col-sm-2 label-column">  
                              <label class="control-label">Precio:</label> 
                          </div>
                         <div class="col-sm-2 input-column">
                             <input class="form-control"  type="number"  name="precio" min="0.00" max="10000.00" step="0.01" placeholder="$" />
                          </div>
                       </div> 

                       <div class="form-group">
                         <div class="col-sm-2 label-column">  
                              <label class="control-label">Total:</label> 
                          </div>
                         <div class="col-sm-2 input-column">
                             <input class="form-control"  type="number"  name="total" min="0.00" max="10000.00" step="0.01" placeholder="$" />
                          </div>
                       </div> 

                       <div class="form-group">
                          <div class="col-sm-2 label-column">
                              <label class="control-label" for="name-input-field">Observaciones: </label>
                          </div>
                          <div class="col-sm-6 input-column">
                              <textarea class="form-control" id="textarea-input" type="text" name="observacion" placeholder="Información del cliente " rows="6" cols="40"  /></textarea>
                          </div>
                      </div>

                
                  <div class="form-group">
                        <button class="btn btn-success col-md-offset-1" type="submit" >Guardar Cambios </button>
                        <a  type="button" class="btn btn-warning col-md-offset-6 "  href="{{url('admin/gasto/gasto') }}">Volver <i class=" glyphicon glyphicon-arrow-left "></i></a>
                  </div>  

                </form>

          </div>
      </div>
    </div>
  </div>
</div>

@endsection