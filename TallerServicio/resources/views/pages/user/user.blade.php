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
        <link href="../css/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="../css/metisMenu.min.css" rel="stylesheet">

        <!-- DataTables CSS -->
        <link href="../css/dataTables/dataTables.bootstrap.css" rel="stylesheet">

        <!-- DataTables Responsive CSS -->
        <link href="../css/dataTables/dataTables.responsive.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="../css/startmin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css">

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

            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Usuarios</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                    <div class="panel-body">
    <h2 class="text-primary">Agregar Usuario</h2>
    <form id="addUserForm" class="form-inline" action="#" method="post" style="margin-bottom: 20px;">
        <div class="form-group">
            <label for="username" class="sr-only">Username</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="password" class="sr-only">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="gmail" class="sr-only">Gmail</label>
            <input type="email" class="form-control" id="gmail" name="gmail" placeholder="Gmail">
        </div>
        <button type="submit" class="btn btn-success">Agregar Usuario</button>
    </form>
</div>
                    <!-- /.row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Lista de Usuarios
                                </div>
                                <!-- /.panel-heading -->
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                            <thead>
                                                <tr>
                                                    <th>Username</th>
                                                    <th>Password</th>
                                                    <th>Gmail</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Aquí puedes agregar los datos de los usuarios -->
                                                <tr class="odd gradeX">
                                                    <td>usuario1</td>
                                                    <td>contraseña123</td>
                                                    <td>usuario1@gmail.com</td>
                                                </tr>
                                                <tr class="even gradeC">
                                                    <td>usuario2</td>
                                                    <td>contraseña456</td>
                                                    <td>usuario2@gmail.com</td>
                                                </tr>
                                                <tr class="odd gradeX">
                                                    <td>usuario3</td>
                                                    <td>contraseña789</td>
                                                    <td>usuario3@gmail.com</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.panel -->
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->


</div>
<!-- /#wrapper -->

        <!-- jQuery -->
        <script src="../js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="../js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="../js/metisMenu.min.js"></script>

        <!-- DataTables JavaScript -->
        <script src="../js/dataTables/jquery.dataTables.min.js"></script>
        <script src="../js/dataTables/dataTables.bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="../js/startmin.js"></script>

        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function () {
                $('#dataTables-example').DataTable({
                    responsive: true
                });
            });
        </script>

    </body>

</html>