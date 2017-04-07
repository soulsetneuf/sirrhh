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
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles  -->
    <link href=<?php echo e(asset("css/app.css")); ?> rel="stylesheet">
    <link href=<?php echo e(asset("css/est_sed.css")); ?> rel="stylesheet">
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
                        <img src="<?php echo e(asset("img/logo.jpg")); ?>" alt="dsfasd" class="img-circle" width="50px" height="50px;"/>
                    </a>
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                        <?php echo e(config('app.name', 'Laravel')); ?>

                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <a href="/home"  style="padding-top:15px; padding-bottom:15px; text-decoration:none;"><img src="<?php echo e(asset("img/logo.jpg")); ?>" class="img-circle" width="50px" height="50px;" /></a>
                        &nbsp <a href="#" style="text-decoration:none;">AMDEPO RRHH</a>
                    </ul>
                    <ul class="nav navbar-nav">
                            <li>
                                <?php echo link_to_route('funcionarios.index',$title="Funcionarios",$parameters="", $attributes=""); ?>


                            </li>
                            <li>
                                <?php echo link_to_route('memorandum.index',$title="Memorandum",$parameters="", $attributes=""); ?>

                            </li>
                            <li>
                                <?php echo link_to_route('planillas_de_asistencia.index',$title="Asistencia",$parameters="", $attributes=""); ?>


                            </li>
                            <li>
                                <?php echo link_to_route('planillas_de_subsidios.index',$title="Subsidios",$parameters="", $attributes=""); ?>

                            </li>
                            <li>
                                <?php echo link_to_route('planillas_de_sueldos.index',$title="Sueldos",$parameters="", $attributes=""); ?>

                            </li>
                        </ul>
                    </ul>
                    
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <?php if(Auth::guest()): ?>
                            <li><a href="<?php echo e(url('/login')); ?>">Login</a></li>
                            <!--<li><a href="<?php echo e(url('/register')); ?>">Register</a></li>-->
                        <?php else: ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="<?php echo e(url('/logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Salir
                                        </a>

                                        <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    </ul>
                    
                </div>
            </div>
        </nav>

        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Scripts -->
    <script src=<?php echo e(asset("js/app.js")); ?>></script>
</body>
</html>
