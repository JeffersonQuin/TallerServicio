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