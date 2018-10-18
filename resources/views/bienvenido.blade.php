@extends('layouts.app')
@section('content')

 <div class="container">
     <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12 center">
            <h4 class=" page-header gallery-title text-center">Galeria de Productos</h4>
        </div>

        {{-- <div align="center">
            <button class="btn btn-default filter-button" data-filter="all">Todo</button>
            <button class="btn btn-default filter-button" data-filter="hdpe">Figuras</button>
            <button class="btn btn-default filter-button" data-filter="sprinkle">Huevos</button>
            <button class="btn btn-default filter-button" data-filter="spray">Spray Nozzle</button>
            <button class="btn btn-default filter-button" data-filter="irrigation">Irrigation Pipes</button>
        </div> --}}
        <br/>
           
            {{--Ventana modal--}}
{{--********************************************************************************************************--}}
             <div class="gallery_product col-lg-2 col-md-4 col-sm-4 col-xs-4 filter hdpe">
                <img src="{{asset('img/jpg.png')}}" class="img-responsive" width="200" > 
                <br>
                <a href="#ventana"   class=" col-lg-offset-2 text-center btn btn-default " data-toggle="modal" > Ver descripción </a>
            </div>
            

        </div>
</div>
 



               

@endsection