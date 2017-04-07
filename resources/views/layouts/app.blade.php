<?php
use Illuminate\Support\Facades\DB;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles  -->
    <link href={{ asset("css/app.css") }} rel="stylesheet">
    <link href={{ asset("css/est_sed.css") }} rel="stylesheet">
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="/home"  style="margin-top:-15px;">
                        <img src="{{ asset("img/logo.jpg") }}" alt="dsfasd" class="img-circle" width="50px" height="50px;"/>
                    </a>
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <a href="/home"  style="padding-top:15px; padding-bottom:15px; text-decoration:none;"><img src="{{ asset("img/logo.jpg") }}" class="img-circle" width="50px" height="50px;" /></a>
                        &nbsp <a href="#" style="text-decoration:none;">AMDEPO RRHH</a>
                    </ul>
                    <ul class="nav navbar-nav">
                            <li>
                                {!! link_to_route('funcionarios.index',$title="Funcionarios",$parameters="", $attributes="")  !!}

                            </li>
                            <li>
                                {!! link_to_route('memorandum.index',$title="Memorandum",$parameters="", $attributes="")  !!}
                            </li>
                            <li>
                                {!! link_to_route('planillas_de_asistencia.index',$title="Asistencia",$parameters="", $attributes="")  !!}

                            </li>
                            <li>
                                {!! link_to_route('planillas_de_subsidios.index',$title="Subsidios",$parameters="", $attributes="")  !!}
                            </li>
                            <li>
                                {!! link_to_route('planillas_de_sueldos.index',$title="Sueldos",$parameters="", $attributes="")  !!}
                            </li>
                        </ul>
                    </ul>
                    
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <!--<li><a href="{{ url('/register') }}">Register</a></li>-->
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                    
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src={{ asset("js/app.js") }}></script>
</body>
</html>
