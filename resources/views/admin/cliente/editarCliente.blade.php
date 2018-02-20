@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row register-form">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">

                  <div class="panel-heading text-center"><h2>Editar Cliente</h2></div>

            <div class="panel-body">
                  <form class="form-horizontal custom-form" method="POST" action="{{ url('admin/cliente/nuevoCliente') }}" class="bootstrap-form-with-validation">
                       {{ csrf_field() }}  

                      <div class="form-group">
                          <div class="col-sm-2 label-column">
                              <label class="control-label" for="name-input-field">Nombre: </label>
                          </div>
                          <div class="col-sm-6 input-column">
                              <input class="form-control" type="text" name="nombre" placeholder="Ingresar Nombre"  />
                          </div>
                      </div>

                       
                      <div class="form-group">
                          <div class="col-sm-2 label-column">
                              <label class="control-label" for="name-input-field">Teléfono: </label>
                          </div>
                          <div class="col-sm-4 input-column">
                              <input class="form-control" type="text" name="telefono" placeholder="Celular o Fijo"  />
                          </div>
                      </div>

                       <div class="form-group">
                          <div class="col-sm-2 label-column">
                              <label class="control-label" for="name-input-field">Dirección: </label>
                          </div>
                          <div class="col-sm-6 input-column">
                              <input class="form-control" type="text" name="direccion" placeholder="Domicilio de Entrega"  />
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
                        <a  type="button" class="btn btn-warning col-md-offset-6 "  href="{{url('admin/cliente/cliente') }}">Volver <i class=" glyphicon glyphicon-arrow-left "></i></a>
                  </div>  

                </form>

          </div>
      </div>
    </div>
  </div>
</div>

@endsection