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

              <a href="#" class="navbar-brand navbar-link">Pascua 2018</a>

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
                    <li role="presentation"><a href="{{ url('bienvenido') }}"><i class="glyphicon glyphicon-home"></i></a></li>
                    <li role="presentation" class="active"><a href="{{ url('inicio') }}">Inicio </a></li>
                    <li role="presentation"><a href="{{ url('/admin/acceso') }}">Acceder </a></li>
                    @else
                     <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
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
    <script src="{{ asset('js/app.js') }}"></script>
     <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>