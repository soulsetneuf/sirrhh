<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        Sistema de información de centros de rehabilitación
    </title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="{{asset('template/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('template/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">-->
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('template/plugins/datatables/dataTables.bootstrap.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('template/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{asset('template/dist/css/skins/_all-skins.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <!--<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">



    <header class="main-header">
        <!-- Logo -->
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- Notifications: style can be found in dropdown.less -->
                    <li class="dropdown notifications-menu">
                        <ul class="dropdown-menu">
                            <li class="header">You have 10 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-warning text-yellow"></i> Very long description here that
                                            may not fit into the
                                            page and may cause design problems
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-users text-red"></i> 5 new members joined
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-user text-red"></i> You changed your username
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer"><a href="#">View all</a></li>
                        </ul>
                    </li>
                    <!-- Tasks: style can be found in dropdown.less -->
                    <li class="dropdown tasks-menu">
                        <ul class="dropdown-menu">
                            <li class="header">You have 9 tasks</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Design some buttons
                                                <small class="pull-right">20%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-aqua" style="width: 20%"
                                                     role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                     aria-valuemax="100">
                                                    <span class="sr-only">20% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Create a nice theme
                                                <small class="pull-right">40%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-green" style="width: 40%"
                                                     role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                     aria-valuemax="100">
                                                    <span class="sr-only">40% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Some task I need to do
                                                <small class="pull-right">60%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-red" style="width: 60%"
                                                     role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                     aria-valuemax="100">
                                                    <span class="sr-only">60% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                    <li><!-- Task item -->
                                        <a href="#">
                                            <h3>
                                                Make beautiful transitions
                                                <small class="pull-right">80%</small>
                                            </h3>
                                            <div class="progress xs">
                                                <div class="progress-bar progress-bar-yellow" style="width: 80%"
                                                     role="progressbar" aria-valuenow="20" aria-valuemin="0"
                                                     aria-valuemax="100">
                                                    <span class="sr-only">80% Complete</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <!-- end task item -->
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- User Account: style can be found in dropdown.less -->
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{asset('template/dist/img/user2-160x160.png')}}" class="user-image"
                                 alt="User Image">
                            <span class="hidden-xs">
                                @if(Auth::check())
                                    {{Auth::user()->name}}
                                @endif
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header">
                                <img src="{{asset('template/dist/img/user2-160x160.png')}}" class="img-rounded"
                                     alt="User Image">
                                <p>
                                    @if(Auth::check())
                                        {{Auth::user()->name}}
                                    @endif
                                    <small>{{\Carbon\Carbon::now()->format('d/m/Y')}}</small>
                                </p>
                            </li>
                            <!-- Menu Body -->
                            <li class="user-body">
                                <div class="row">
                                    <div class="pull-left text-center">
                                        <a href="https://www.minsalud.gob.bo/" title="Ministerio de salud" target="_blank">Ministerio</a>
                                    </div>
                                    <div class="pull-right text-center">
                                        <a href="{{ url('/usuario/password') }}" title="Modificar contraseña">Contraseña</a>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="{{ url('/Agenda/home') }}" class="btn btn-default btn-flat">Agenda</a>
                                </div>
                                <div class="pull-right">
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" >
                                        {{ csrf_field() }}
                                        <button type="submit" class="btn btn-default btn-flat">Salir</button>
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- Control Sidebar Toggle Button
                    <li>
                        <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                    </li>-->
                </ul>
            </div>
        </nav>
    </header>

    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
            <!-- Sidebar user panel -->
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{asset('template/dist/img/user2-160x160.png')}}" class="img-rounded" alt="User Image">

                </div>
                <div class="pull-left info ">
                        <a href="#" class="large-text">
                        @if(session()->has('institucion'))
                                {{session('institucion')->inst_nombre}}
                        @else
                            Sin institución
                        @endif
                    </a>
                </div>
            </div>
            <!-- sidebar menu: : style can be found in sidebar.less -->
            <ul class="sidebar-menu">
                <li class="treeview">
                    <a href="#" >
                        <i class="fa-icon"></i>
                        <span>{!! link_to_route('funcionarios.index',$title="Funcionarios",$parameters="", $attributes="")  !!}</span>
                    </a>
                    <ul class="treeview-menu">
                            <li>
                                {!! link_to_route('funcionarios.index',$title="Lista",$parameters="", $attributes="")  !!}
                                {!! link_to_route('funcionarios.create',$title="Nuevo",$parameters="", $attributes="")  !!}
                            </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#" >
                        <i class="fa-icon"></i>
                        <span>{!! link_to_route('memorandum.index',$title="Memorandum",$parameters="", $attributes="")  !!}</span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            {!! link_to_route('memorandum.index',$title="Lista",$parameters="", $attributes="")  !!}
                            {!! link_to_route('memorandum.create',$title="Nuevo",$parameters="", $attributes="")  !!}
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#" >
                        <i class="fa-icon"></i>
                        <span>{!! link_to_route('funcionario_contratos.index',$title="Contrato",$parameters="", $attributes="")  !!}</span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            {!! link_to_route('funcionario_contratos.index',$title="Lista",$parameters="", $attributes="")  !!}
                            {!! link_to_route('funcionario_contratos.create',$title="Nuevo",$parameters="", $attributes="")  !!}
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#" >
                        <i class="fa-icon"></i>
                        <span>{!! link_to_route('planillas_de_asistencia.index',$title="Asistencia",$parameters="", $attributes="")  !!}</span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            {!! link_to_route('planillas_de_asistencia.index',$title="Lista",$parameters="", $attributes="")  !!}
                            {!! link_to_route('planillas_de_asistencia.create',$title="Nuevo",$parameters="", $attributes="")  !!}
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#" >
                        <i class="fa-icon"></i>
                        <span>{!! link_to_route('planillas_de_subsidios.index',$title="Subsidios",$parameters="", $attributes="")  !!}</span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            {!! link_to_route('planillas_de_subsidios.index',$title="Lista",$parameters="", $attributes="")  !!}
                            {!! link_to_route('planillas_de_subsidios.create',$title="Nuevo",$parameters="", $attributes="")  !!}
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#" >
                        <i class="fa-icon"></i>
                        <span>{!! link_to_route('subsidios.index',$title="Detalle Subsidios",$parameters="", $attributes="")  !!}</span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            {!! link_to_route('subsidios.index',$title="Lista",$parameters="", $attributes="")  !!}
                            {!! link_to_route('subsidios.create',$title="Nuevo",$parameters="", $attributes="")  !!}
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#" >
                        <i class="fa-icon"></i>
                        <span>{!! link_to_route('planillas_de_sueldos.index',$title="Sueldos",$parameters="", $attributes="")  !!}</span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            {!! link_to_route('planillas_de_sueldos.index',$title="Lista",$parameters="", $attributes="")  !!}
                            {!! link_to_route('planillas_de_sueldos.create',$title="Nuevo",$parameters="", $attributes="")  !!}
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#" >
                        <i class="fa-icon"></i>
                        <span>{!! link_to_route('institucion.index',$title="Institucion",$parameters="", $attributes="")  !!}</span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            {!! link_to_route('institucion.index',$title="Configuracion",$parameters="", $attributes="")  !!}
                        </li>
                    </ul>
                </li>
                <li class="treeview">
                    <a href="#" >
                        <i class="fa-icon"></i>
                        <span>{!! link_to_route('promociones.index',$title="Promociones",$parameters="", $attributes="")  !!}</span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            {!! link_to_route('promociones.index',$title="Reporte",$parameters="", $attributes="")  !!}
                        </li>
                    </ul>
                </li>
            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <!--
                  Data Tables
                  <small>advanced tables</small> -->
            <span>
                   @yield('title_content')
            </span>
                  @yield('menu_page')

            </h1>
            @yield('breadcrumb')
        </section>


        <section class="content">
            <div class="box box-primary box-solid">
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-12">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>
        </section>



    </div>
    <!-- /.content-wrapper -->


    <footer class="main-footer">
        <div class="pull-right hidden-xs">
            <b>Version</b> 1.0.0
        </div>
        <strong>Copyright &copy; 2016 <a href="http://almsaeedstudio.com"></a>.</strong> Todos los derechos reservados.
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
            <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
            <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <!-- Home tab content -->
            <div class="tab-pane" id="control-sidebar-home-tab">
                <h3 class="control-sidebar-heading">Recent Activity</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                <p>Will be 23 on April 24th</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-user bg-yellow"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                <p>New phone +1(800)555-1234</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                <p>nora@example.com</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <i class="menu-icon fa fa-file-code-o bg-green"></i>

                            <div class="menu-info">
                                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                <p>Execution time 5 seconds</p>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

                <h3 class="control-sidebar-heading">Tasks Progress</h3>
                <ul class="control-sidebar-menu">
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Custom Template Design
                                <span class="label label-danger pull-right">70%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Update Resume
                                <span class="label label-success pull-right">95%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Laravel Integration
                                <span class="label label-warning pull-right">50%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0)">
                            <h4 class="control-sidebar-subheading">
                                Back End Framework
                                <span class="label label-primary pull-right">68%</span>
                            </h4>

                            <div class="progress progress-xxs">
                                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                            </div>
                        </a>
                    </li>
                </ul>
                <!-- /.control-sidebar-menu -->

            </div>
            <!-- /.tab-pane -->
            <!-- Stats tab content -->
            <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
            <!-- /.tab-pane -->
            <!-- Settings tab content -->
            <div class="tab-pane" id="control-sidebar-settings-tab">
                <form method="post">
                    <h3 class="control-sidebar-heading">General Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Report panel usage
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Some information about this general settings option
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Allow mail redirect
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Other sets of options are available
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Expose author name in posts
                            <input type="checkbox" class="pull-right" checked>
                        </label>

                        <p>
                            Allow the user to show his name in blog posts
                        </p>
                    </div>
                    <!-- /.form-group -->

                    <h3 class="control-sidebar-heading">Chat Settings</h3>

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Show me as online
                            <input type="checkbox" class="pull-right" checked>
                        </label>
                    </div>
                    <!-- /.form-group -->

                    <div class="form-group">
                        <label class="control-sidebar-subheading">
                            Turn off notifications
                            <input type="checkbox" class="pull-right">
                        </label>
                    </div>
                    <!-- /.form-group -->
                </form>
            </div>
            <!-- /.tab-pane -->
        </div>
    </aside>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
<script src="{{asset('template/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{asset('template/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('template/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('template/plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('template/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('template/plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('template/dist/js/app.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('template/dist/js/demo.js')}}"></script>
@yield('script')
</body>
</html>