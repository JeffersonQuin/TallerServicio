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

            @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

            <div class="panel-body">
                <h2 class="text-primary">Agregar Usuario</h2>
                <form id="addUserForm" class="form-inline" action="{{ route('users.store') }}" method="post" style="margin-bottom: 20px;">
                    @csrf
                    <div class="form-group">
                        <label for="username" class="sr-only">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <label for="password" class="sr-only">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="sr-only">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <button type="submit" class="btn btn-success">Agregar Usuario</button>
                </form>
            </div>

            <!-- Tabla de usuarios -->
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
                                            <th>Email</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $user)
                                            <tr class="odd gradeX">
                                                <td>{{ $user->username }}</td>
                                                <td>{{ $user->password }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    <!-- Botón para abrir modal de editar -->
                                                    <button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editModal{{ $user->id }}">Editar</button>
                                                    
                                                    <!-- Modal de edición -->
                                                    <div class="modal fade" id="editModal{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="editModalLabel">Editar Usuario</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{ route('users.update', $user->id) }}" method="POST">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="form-group">
                                                                            <label for="username">Username</label>
                                                                            <input type="text" class="form-control" name="username" value="{{ $user->username }}" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="password">Password</label>
                                                                            <input type="password" class="form-control" name="password" placeholder="New password (if any)">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="email">Email</label>
                                                                            <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                                                                        </div>
                                                                        <button type="submit" class="btn btn-primary">Actualizar Usuario</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Formulario para eliminar -->
                                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline-block;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
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