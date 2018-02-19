<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>PascuaWeb</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Cookie')}}" />
    <link rel="stylesheet" href="{{asset('css/styles.css')}}" />
    <link rel="stylesheet" href="{{asset('css/Pretty-Footer.css')}}" />


     <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Cookie')}}">
    <link rel="stylesheet" href="{{asset('/assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/bootstrap/css/Pretty-Footer.css')}}">
    <link rel="stylesheet" href="{{asset('/bootstrap/css/Hero-Technology.css')}}">
    <link rel="stylesheet" href="{{asset('/bootstrap/css/styles.css')}}">

     <meta name="csrf-token" content="{{ csrf_token() }}">

    <!--<title>{{ config('app.name', 'PascuaWeb') }}</title>-->
    
    <!-- Styles -->
    
    <link href="{{ asset('css/avatar.css') }}" rel="stylesheet">

    
</head>

<body>
 <div id="app">
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="navbar-header">
                <div class="col-md-4 col-sm-6 footer-navigation">
                <h3><a href="{{ url('bienvenido') }}" >Pascuas<span>2018 </span></a></h3>
                </div>
                <!--  <a  href="{{ url('bienvenido') }}" class="navbar-brand navbar-link">Pascuas 2018</a>-->

                <button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggle collapsed">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>


            </div>
            <div class="collapse navbar-collapse" id="navcol-1">

                <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                <ul class="nav navbar-nav navbar-right">
                  @guest
                    <li role="presentation" class="active"><a href="{{ url('bienvenido') }}"><i class="glyphicon glyphicon-home"></i></a></li>
                    
                    <li role="presentation"><a href="{{ url('/admin/acceso') }}">Acceder </a></li>
                    <!--<li role="presentation"><a href="{{ url('/admin/registro') }}">Registrar </a></li>-->
                    @else
                    <li role="presentation " class="active"><a href="{{ url('bienvenido') }}"><i class="glyphicon glyphicon-home"></i></a></li>
                    <li role="presentation" ><a href="{{ url('inicio') }}">Inicio </a></li>
                     <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul  class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">
                                    <li role="presentation">
                                          <a href="{{ url('/productor/perfil') }}">
                                          Perfil
                                        </a>
                                      </li>
                                    <li class="divider"></li>
                                    <li  class="dropdown-submenu">

                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                            @endguest
                </ul>
            </div>
        </div>
    </nav>
   @yield('content')
   </div>


        <footer>
        <div class="row">
            <div class="col-md-4 col-sm-6 footer-navigation">
                <h3><a href="#">Pascuas<span>2018 </span></a></h3>
                <p class="links"><a href="#">Home</a><strong> · </strong><a href="#">Blog</a><strong> · </strong><a href="#">Pricing</a><strong> · </strong><a href="#">About</a><strong> · </strong><a href="#">Faq</a><strong> · </strong><a href="#">Contact</a></p>
                <p class="company-name">Florencia Cabrera © 2018 </p>
            </div>
            <div class="col-md-4 col-sm-6 footer-contacts">
                <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                    <p><span class="new-line-span">Dirección</span> Corrientes, Argentina</p>
                </div>
                <div><i class="fa fa-phone footer-contacts-icon"></i>
                    <p class="footer-center-info email text-left"> 379-4669983</p>
                </div>
                <div><i class="fa fa-envelope footer-contacts-icon"></i>
                    <p> <a href="#" target="_blank">support@company.com</a></p>
                </div>
            </div>
            <div class="clearfix visible-sm-block"></div>
            <div class="col-md-4 footer-about">
                <h4>About the company</h4>
                <p> Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
                </p>
                <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-github"></i></a></div>
            </div>
        </div>
    </footer>



    <script src="{{ asset('js/app.js') }}"></script>
     <script src="{{asset('assets/js/jquery.min.js')}}"></script>
   <!-- <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>-->
</body>

</html>