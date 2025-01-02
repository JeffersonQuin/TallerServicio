<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Alfa Romero</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('css/metisMenu.min.css') }}" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="{{ asset('css/timeline.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('css/startmin.css') }}" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('css/morris.css') }}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">Alfa Romero</a>
                </div>

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="#"><i class="fa fa-home fa-fw"></i> Inicio</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
    <li class="dropdown navbar-inverse">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-bell fa-fw"></i> <b class="caret"></b>
        </a>
        <ul class="dropdown-menu dropdown-alerts">
            <li>
                <a href="#">
                    <div>
                        <i class="fa fa-calendar-check fa-fw"></i> Nueva Reserva Confirmada
                        <span class="pull-right text-muted small">4 minutos atrás</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div>
                        <i class="fa fa-clock fa-fw"></i> Cita modificada
                        <span class="pull-right text-muted small">12 minutos atrás</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div>
                        <i class="fa fa-car fa-fw"></i> Vehículo listo para ser entregado
                        <span class="pull-right text-muted small">4 minutos atrás</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div>
                        <i class="fa fa-bell fa-fw"></i> Recordatorio de reserva
                        <span class="pull-right text-muted small">4 minutos atrás</span>
                    </div>
                </a>
            </li>
            <li>
                <a href="#">
                    <div>
                        <i class="fa fa-cogs fa-fw"></i> Actualización en el estado de la reparación
                        <span class="pull-right text-muted small">4 minutos atrás</span>
                    </div>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a class="text-center" href="#">
                    <strong>Ver todas las Reservas</strong>
                    <i class="fa fa-angle-right"></i>
                </a>
            </li>
        </ul>
    </li>
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-user fa-fw"></i> newadmin <b class="caret"></b>
        </a>
        <ul class="dropdown-menu dropdown-user">
            <li>
                <a href="#"><i class="fa fa-user fa-fw"></i> Perfil de Usuario</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-gear fa-fw"></i> Configuración</a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Cerrar sesión</a>
            </li>
        </ul>
    </li>
</ul>
                <!-- /.navbar-top-links -->
            </nav>

            <aside class="sidebar navbar-default" role="navigation" style="background-color: #222222; color: white; height: 100%; width: 250px;">
    <div class="sidebar-nav navbar-collapse" style="background-color: #222222;">
        <ul class="nav" id="side-menu">
            <!-- Inicio -->
            <li style="margin: 0;">
                <a href="index.html" class="active" style="background-color: #444444; color: white; border: 1px solid #222222; margin: 0; display: block;" onmouseover="this.style.backgroundColor='#555555'" onmouseout="this.style.backgroundColor='#444444'"><i class="fa fa-dashboard fa-fw"></i> Inicio</a>
            </li>
            <!-- Usuarios -->
            <li style="margin: 0;">
                <a href="{{ route('user') }}" style="color: white; border: 1px solid #222222; margin: 0; display: block;" onmouseover="this.style.backgroundColor='#555555'" onmouseout="this.style.backgroundColor='#222222'"><i class="fa fa-user fa-fw"></i> Usuarios</a>
            </li>
            <!-- Reservaciones -->
            <li style="margin: 0;">
                <a href="reservaciones.html" style="color: white; border: 1px solid #222222; margin: 0; display: block;" onmouseover="this.style.backgroundColor='#555555'" onmouseout="this.style.backgroundColor='#222222'"><i class="fa fa-calendar-check-o fa-fw"></i> Reservaciones</a> <!-- Icono actualizado -->
            </li>
            <!-- Clientes -->
            <li style="margin: 0;">
                <a href="clientes.html" style="color: white; border: 1px solid #222222; margin: 0; display: block;" onmouseover="this.style.backgroundColor='#555555'" onmouseout="this.style.backgroundColor='#222222'"><i class="fa fa-users fa-fw"></i> Clientes</a> <!-- Se añadió la sección Clientes -->
            </li>
            <!-- Empleados -->
            <li style="margin: 0;">
                <a href="empleados.html" style="color: white; border: 1px solid #222222; margin: 0; display: block;" onmouseover="this.style.backgroundColor='#555555'" onmouseout="this.style.backgroundColor='#222222'"><i class="fa fa-users fa-fw"></i> Empleados</a>
            </li>
            <!-- Stock -->
            <li style="margin: 0;">
                <a href="stock.html" style="color: white; border: 1px solid #222222; margin: 0; display: block;" onmouseover="this.style.backgroundColor='#555555'" onmouseout="this.style.backgroundColor='#222222'"><i class="fa fa-cubes fa-fw"></i> Stock</a>
            </li>
            <!-- Transacción -->
            <li style="margin: 0;">
                <a href="transacciones.html" style="color: white; border: 1px solid #222222; margin: 0; display: block;" onmouseover="this.style.backgroundColor='#555555'" onmouseout="this.style.backgroundColor='#222222'"><i class="fa fa-exchange fa-fw"></i> Transacción</a>
            </li>
        </ul>
    </div>
</aside>
<!-- /.sidebar -->
           
<!-- /.sidebar --><!-- /.sidebar --><!-- /.sidebar --><!-- /.sidebar -->
<div id="page-wrapper" style="background-image: url('https://img.freepik.com/foto-gratis/escenario-urbano-cyberpunk-coche_23-2150712490.jpg?ga=GA1.1.1374857810.1729632475&semt=ais_hybrid'); background-size: cover; background-position: center center; height: 107vh;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header" style="color: white;">Principal</h1>
            </div>
        </div>
        <div class="row">
            <!-- Panel de Reservaciones -->
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary" style="background-color: #222222;">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-calendar-check-o fa-5x"></i> <!-- Icono actualizado -->
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">26</div>
                                <div>Reservaciones</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">Ver Detalles</span> <!-- Texto en español -->
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Panel de Stock -->
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-green" style="background-color: #222222;">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-cubes fa-5x"></i> <!-- Icono actualizado -->
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">12</div>
                                <div>Stock</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">Ver Detalles</span> <!-- Texto en español -->
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Panel de Empleados -->
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow" style="background-color: #222222;">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-users fa-5x"></i> <!-- Icono actualizado -->
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">124</div>
                                <div>Empleados</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">Ver Detalles</span> <!-- Texto en español -->
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
            <!-- Panel de Clientes -->
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red" style="background-color: #222222;">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-3">
                                <i class="fa fa-user fa-5x"></i> <!-- Icono actualizado -->
                            </div>
                            <div class="col-xs-9 text-right">
                                <div class="huge">13</div>
                                <div>Clientes</div>
                            </div>
                        </div>
                    </div>
                    <a href="#">
                        <div class="panel-footer">
                            <span class="pull-left">Ver Detalles</span> <!-- Texto en español -->
                            <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                            <div class="clearfix"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

        </div>
        <!-- /#wrapper -->

<!-- jQuery -->
<script src="{{ asset('js/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{ asset('js/metisMenu.min.js') }}"></script>

<!-- Morris Charts JavaScript -->
<script src="{{ asset('js/raphael.min.js') }}"></script>
<script src="{{ asset('js/morris.min.js') }}"></script>
<script src="{{ asset('js/morris-data.js') }}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ asset('js/startmin.js') }}"></script>

    </body>

</html>