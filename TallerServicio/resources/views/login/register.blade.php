<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Registro de Cuenta</title>

  <!-- Favicons -->
  <link href="{{ asset('assets/img/Log2.png') }}" rel="icon">
  <link href="{{ asset('assets/img/Log2.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/stylelogin.css') }}" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  
</head>

<body class="login-page">

  <main>
    <div class="container">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div>
                <a href="{{ url('') }}" class="logo d-flex align-items-center w-auto">
                  <img src="{{ asset('assets/img/logo.png') }}" alt="">
                  <span class="titlesign">SISTEMA DE ACTIVOS FIJOS</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Crea una Nueva Cuenta</h5>
                    <p class="text-center small">Ingresa los detalles para crear tu cuenta</p>
                  </div>

                  @include('auth/_message') <!-- Aquí puedes incluir mensajes de error o éxito -->

                  <form action="{{ url('register') }}" method="POST" class="row g-3 needs-validation" novalidate>
                    {{ csrf_field() }}

                    <div class="col-12">
                      <label for="username" class="form-label">Username</label>
                      <input type="text" name="username" class="form-control" id="username" placeholder="Ingrese su usuario" required>
                      <div class="invalid-feedback">Por favor ingrese un nombre de usuario.</div>
                    </div>

                    <div class="col-12">
                      <label for="email" class="form-label">Correo Electrónico</label>
                      <input type="email" name="email" class="form-control" id="email" placeholder="Ingrese su correo electrónico" required>
                      <div class="invalid-feedback">Por favor ingrese un correo electrónico válido.</div>
                    </div>

                    <div class="col-12">
                      <label for="password" class="form-label">Contraseña</label>
                      <input type="password" name="password" class="form-control" id="password" placeholder="Ingrese su contraseña" required>
                      <div class="invalid-feedback">Por favor ingrese una contraseña.</div>
                    </div>

                    <div class="col-12">
                      <label for="password_confirmation" class="form-label">Confirmar Contraseña</label>
                      <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirme su contraseña" required>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Registrar</button>
                    </div>

                    <div class="col-12">
                      <p class="small mb-0">¿Ya tienes una cuenta? <a href="{{ url('login') }}">Inicia sesión</a></p>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>