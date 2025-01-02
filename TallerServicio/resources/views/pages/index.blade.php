<!-- enlace.blade.php -->
<!DOCTYPE html>
<html lang="es">
    @include('pages.partes.enlace')
    <body>

        <div id="wrapper">

        @include('pages.partes.cabecera')

        @include('pages.partes.sidebar')   
           
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

        @include('pages.partes.pie') 

    </body>

</html>