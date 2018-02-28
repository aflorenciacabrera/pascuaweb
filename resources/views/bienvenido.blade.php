@extends('layouts.app')
@section('content')

 <div class="container">
        <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12 center">
            <h1 class="gallery-title text-center">Galeria de Productos</h1>
        </div>

        <div align="center">
            <button class="btn btn-default filter-button" data-filter="all">Todo</button>
            <button class="btn btn-default filter-button" data-filter="hdpe">Figuras</button>
            <button class="btn btn-default filter-button" data-filter="sprinkle">Huevos</button>
            {{--<button class="btn btn-default filter-button" data-filter="spray">Spray Nozzle</button>
            <button class="btn btn-default filter-button" data-filter="irrigation">Irrigation Pipes</button>--}}
        </div>
        <br/>
           
            {{--Ventana modal--}}
{{--********************************************************************************************************--}}
            <div class="gallery_product col-lg-2 col-md-4 col-sm-4 col-xs-4 filter hdpe">
                <img src="{{asset('img/Ardilla M.jpg')}}" class="img-responsive" width="200" > 
                <a href="#ventana"   class=" col-lg-offset-2 text-center btn btn-default " data-toggle="modal" > Ver descripción </a>
            </div>
            <div class="modal fade in" id="ventana" >
                <div class="modal-dialog">
                    <div class="modal-content">
                            <!-- header de la ventana-->
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title"> uhscbscbhabh   </h4>
                            </div>
                             <!-- contenido de la ventana de la ventana-->
                                    <!-- panel de capacidad-->
                            <div class="modal-body"> 
                                <div class="gallery_product col-lg-2 col-md-4 col-sm-4 col-xs-4 filter hdpe">
                                    <img src="{{asset('img/Ardilla M.jpg')}}" class="img-responsive" width="200" > 
                                    <label>descrip</label>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"> 
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
                              <label class="control-label" for="name-input-field">Tipo: </label>
                          </div>
                         <div class="col-sm-4 input-column">
                               <select name="tipo"  class="form-control" required>
                                  <option value="Figura">Figura</option>
                                  <option value="Huevo">Huevo</option>
                               </select>  
                              </div>
                       </div> 
                     

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

                     <div class="form-group">            
                          <div class="col-md-2  label-column"> 
                               <label class="control-label" >Medidas: </label> 
                           </div> 
                             <div class="col-sm-4 input-column">
                               <div class="col-sm-6 input-column">
                              <li>Ancho: </li> <input class="form-control" type="number"  min="0.00" max="10000.00" name="medida" placeholder="N°"  />
                              <li>Alto: </li> <input class="form-control" type="number"  min="0.00" max="10000.00" name="medida" placeholder="N°"  />
                          </div> 
                              </div>
                        
                      </div>
               
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

                       <div class="form-group">
                         <div class="col-sm-2 label-column">  
                              <label class="control-label">Precio:</label> 
                          </div>
                         <div class="col-sm-2 input-column">
                             <input class="form-control"  type="number"  name="precio" min="0.00" max="10000.00" step="0.01" placeholder="$" />
                          </div>
                       </div> 

                     
                

                 
                                        </div>
                                    </div>
                                </div>
                                <li>Remuneración Pretendida: </li>                                   
                                    <p></p>
                            </div>                                  
                             <!-- footer de la ventana-->
                              <div class="modal-footer">
                                    <div class="  col-lg-offset-2" >
                                       <div class="row">
                                              <div class="col-md-1  ">
                                                  
                                              </div>
                                        </div>
                                    </div>
                              </div>
                    </div>{{-- modal --}}
                </div>
            </div> {{-- modal --}} 
{{--********************************************************************************************************--}}
            <div class="gallery_product col-lg-2 col-md-4 col-sm-4 col-xs-4 filter hdpe">
                <img src="{{asset('img/Ardilla M.jpg')}}" class="img-responsive" width="200" > 
                <label>descrip</label>
            </div>
{{--********************************************************************************************************--}}
            <div class="gallery_product col-lg-2 col-md-4 col-sm-4 col-xs-4 filter hdpe">
                <img src="{{asset('img/Ardilla M.jpg')}}" class="img-responsive" width="200" > 
                <a href="#ventana"   class=" col-lg-offset-2 text-center btn btn-default " data-toggle="modal" > Ver descripción </a>
            </div>
            <div class="modal fade in" id="ventana" >
                <div class="modal-dialog">
                    <div class="modal-content">
                            <!-- header de la ventana-->
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title"> uhscbscbhabh   </h4>
                            </div>
                             <!-- contenido de la ventana de la ventana-->
                                    <!-- panel de capacidad-->
                            <div class="modal-body"> 
                                <div class="gallery_product col-lg-2 col-md-4 col-sm-4 col-xs-4 filter hdpe">
                                    <img src="{{asset('img/Ardilla M.jpg')}}" class="img-responsive" width="200" > 
                                    <label>descrip</label>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group"> 
                                    sdfdvdva
                                        </div>
                                    </div>
                                </div>
                                <li>Remuneración Pretendida: </li>                                   
                                    <p></p>
                            </div>                                  
                             <!-- footer de la ventana-->
                              <div class="modal-footer">
                                    <div class="  col-lg-offset-2" >
                                       <div class="row">
                                              <div class="col-md-1  ">
                                                  
                                              </div>
                                        </div>
                                    </div>
                              </div>
                    </div>{{-- modal --}}
                </div>
            </div> {{-- modal --}} 
{{--********************************************************************************************************--}}
            <div class="gallery_product col-lg-2 col-md-4 col-sm-4 col-xs-4 filter hdpe">
                <img src="{{asset('img/Ardilla M.jpg')}}" class="img-responsive" width="200" > 
                <a href="#ventana"   class=" col-lg-offset-2 text-center btn btn-default " data-toggle="modal" > Ver descripción </a>
            </div>
            <div class="modal fade in" id="ventana" >
                <div class="modal-dialog">
                    <div class="modal-content">
                            <!-- header de la ventana-->
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title"> uhscbscbhabh   </h4>
                            </div>
                             <!-- contenido de la ventana de la ventana-->
                                    <!-- panel de capacidad-->
                            <div class="modal-body"> 
                                <div class="gallery_product col-lg-2 col-md-4 col-sm-4 col-xs-4 filter hdpe">
                                    <img src="{{asset('img/Ardilla M.jpg')}}" class="img-responsive" width="200" > 
                                    <label>descrip</label>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group"> 
                                    sdfdvdva
                                        </div>
                                    </div>
                                </div>
                                <li>Remuneración Pretendida: </li>                                   
                                    <p></p>
                            </div>                                  
                             <!-- footer de la ventana-->
                              <div class="modal-footer">
                                    <div class="  col-lg-offset-2" >
                                       <div class="row">
                                              <div class="col-md-1  ">
                                                  
                                              </div>
                                        </div>
                                    </div>
                              </div>
                    </div>{{-- modal --}}
                </div>
            </div> {{-- modal --}} 
{{--********************************************************************************************************--}}
            <div class="gallery_product col-lg-2 col-md-4 col-sm-4 col-xs-4 filter hdpe">
                <img src="{{asset('img/Ardilla M.jpg')}}" class="img-responsive" width="200" > 
                <a href="#ventana"   class=" col-lg-offset-2 text-center btn btn-default " data-toggle="modal" > Ver descripción </a>
            </div>
            <div class="modal fade in" id="ventana" >
                <div class="modal-dialog">
                    <div class="modal-content">
                            <!-- header de la ventana-->
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title"> uhscbscbhabh   </h4>
                            </div>
                             <!-- contenido de la ventana de la ventana-->
                                    <!-- panel de capacidad-->
                            <div class="modal-body"> 
                                <div class="gallery_product col-lg-2 col-md-4 col-sm-4 col-xs-4 filter hdpe">
                                    <img src="{{asset('img/Ardilla M.jpg')}}" class="img-responsive" width="200" > 
                                    <label>descrip</label>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group"> 
                                    sdfdvdva
                                        </div>
                                    </div>
                                </div>
                                <li>Remuneración Pretendida: </li>                                   
                                    <p></p>
                            </div>                                  
                             <!-- footer de la ventana-->
                              <div class="modal-footer">
                                    <div class="  col-lg-offset-2" >
                                       <div class="row">
                                              <div class="col-md-1  ">
                                                  
                                              </div>
                                        </div>
                                    </div>
                              </div>
                    </div>{{-- modal --}}
                </div>
            </div> {{-- modal --}} 
{{--********************************************************************************************************--}}
            <div class="gallery_product col-lg-2 col-md-4 col-sm-4 col-xs-4 filter hdpe">
                <img src="{{asset('img/Ardilla M.jpg')}}" class="img-responsive" width="200" > 
                <a href="#ventana"   class=" col-lg-offset-2 text-center btn btn-default " data-toggle="modal" > Ver descripción </a>
            </div>
            <div class="modal fade in" id="ventana" >
                <div class="modal-dialog">
                    <div class="modal-content">
                            <!-- header de la ventana-->
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                                </button>
                                <h4 class="modal-title"> uhscbscbhabh   </h4>
                            </div>
                             <!-- contenido de la ventana de la ventana-->
                                    <!-- panel de capacidad-->
                            <div class="modal-body"> 
                                <div class="gallery_product col-lg-2 col-md-4 col-sm-4 col-xs-4 filter hdpe">
                                    <img src="{{asset('img/Ardilla M.jpg')}}" class="img-responsive" width="200" > 
                                    <label>descrip</label>
                                </div>
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group"> 
                                    sdfdvdva
                                        </div>
                                    </div>
                                </div>
                                <li>Remuneración Pretendida: </li>                                   
                                    <p></p>
                            </div>                                  
                             <!-- footer de la ventana-->
                              <div class="modal-footer">
                                    <div class="  col-lg-offset-2" >
                                       <div class="row">
                                              <div class="col-md-1  ">
                                                  
                                              </div>
                                        </div>
                                    </div>
                              </div>
                    </div>{{-- modal --}}
                </div>
            </div> {{-- modal --}} 

          
        </div>
</div>
 


@endsection