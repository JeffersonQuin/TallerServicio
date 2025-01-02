<!DOCTYPE html>
<html lang="en">

    @include('pages.partes.enlace')

    <body>

    <div id="wrapper">

    @include('pages.partes.cabecera')
    @include('pages.partes.sidebar')  
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
                                                    <th>Acciones</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <!-- Aquí puedes agregar los datos de los usuarios -->
                                                <tr class="odd gradeX">
                                                    <td>usuario1</td>
                                                    <td>contraseña123</td>
                                                    <td>usuario1@gmail.com</td>
                                                    <td>
                                                      <button class="btn btn-primary btn-sm" onclick="editarUsuario('usuario1')">Editar</button>
                                                      <button class="btn btn-danger btn-sm" onclick="eliminarUsuario('usuario1')">Eliminar</button>
                                                    </td>
                                                </tr>
                                                <tr class="even gradeC">
                                                    <td>usuario2</td>
                                                    <td>contraseña456</td>
                                                    <td>usuario2@gmail.com</td>
                                                    <td>
                                                      <button class="btn btn-primary btn-sm" onclick="editarUsuario('usuario2')">Editar</button>
                                                      <button class="btn btn-danger btn-sm" onclick="eliminarUsuario('usuario2')">Eliminar</button>
                                                    </td>
                                                </tr>
                                                <tr class="odd gradeX">
                                                    <td>usuario3</td>
                                                    <td>contraseña789</td>
                                                    <td>usuario3@gmail.com</td>
                                                    <td>
                                                       <button class="btn btn-primary btn-sm" onclick="editarUsuario('usuario3')">Editar</button>
                                                       <button class="btn btn-danger btn-sm" onclick="eliminarUsuario('usuario3')">Eliminar</button>
                                                    </td>
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

@include('pages.partes.pie') 

    </body>

</html>