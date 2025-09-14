<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SBF - Inicio de Sesión</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="icon" type="image/png" href="{{ asset('img/logoo.png') }}">
  <script src="https://kit.fontawesome.com/4e5f0e3e64.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

  <style>
      body {
      font-family: Arial, sans-serif;
      background: url("{{ asset('img/fondo.jpg') }}") no-repeat center center;
      background-size: cover;
      margin: 0;
      padding: 0;
      height: 100%;
      overflow: hidden;
    }


    .login-container {
      display: flex;
      align-items: center;
    }

    .login-box {
      padding: 50px 50px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      height: 50%;
      border-radius: 12px;
      margin: 60px 40px 40px 40px;
    }

    .login-title {
      color: #3b3b98;
      font-weight: bold;
      margin-bottom: 25px;
      text-align: center;
    }

    .form-control {
      border-radius: 10px;
    }

    .btn-login,
    .btn-create {
      font-weight: bold;
      border-radius: 25px;
      padding: 10px;
    }

    .btn-login {
      background: #276cd4ff;
      color: #fff;
      margin-bottom: 10px;
    }

    .btn-login:hover {
      background: #438fe0ff;
    }

    .btn-create {
      background: #0097e6;
      color: #fff;
    }

    .btn-create:hover {
      background: #006494;
    }

    .recuperar {
      font-size: 0.9rem;
      color: #007bff;
      text-decoration: none;
      cursor: pointer;
    }

    .recuperar:hover {
      text-decoration: underline;
    }

    .recordar {
      font-size: 0.9rem;
      color: #007bff;
      cursor: pointer;
    }

    .recordar:hover {
      text-decoration: underline;
    }

    .form-check-input {
      cursor: pointer;
      accent-color: #007bff;
    }

    .logos-ext {
      margin-top: 20px;
      display: flex;
      justify-content: center;
      gap: 150px;
    }

    .logo-sunat {
      height: 40px;
      margin-top: 10px;
    }

    .logo-reniec {
      height: 40px;
      margin-top: 10px;
    }

    .social-bar {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin-top: 25px;
    }

    .social-bar a {
      font-size: 24px;
      text-decoration: none;
    }

    .tiktok { color: #000; }
    .instagram { color: #e1306c; }
    .facebook { color: #1877f2; }

    .login-image {
      background: url("{{ asset('img/GRUPOBSF.png') }}") no-repeat center center;
      background-size: cover;
      height: 70%;
      position: relative;
      color: #333;
      border-radius: 4px;
      margin: -4px -12px 10px 20px;
    }

    .login-image h3 {
      position: absolute;
      top: 20px;
      right: 20px;
      font-weight: bold;
      background: rgba(255,255,255,0.7);
      padding: 5px 5px;
      border-radius: 5px;
    }

    @media (max-width: 768px) {
      .login-image {
        display: none;
      }
    }

    .footer-colors-vertical {
      margin-top: -190px;
      display: flex;
      flex-direction: column;
      gap: 18px;
    }
    .color-bar {
      height: 45px;
      width: 100%;
    }

    .is-invalid {
      border-color: #dc3545;
    }
  </style>
</head>
<body>
  <div class="container-fluid login-container">
    <div class="row g-0 w-100">

      <!-- COLUMNA IZQUIERDA -->
      <div class="col-lg-5 col-md-6 col-12">
        <div class="login-box">
          <div class="text-center">
            <img src="{{ asset('img/logo.png') }}" alt="Logo" height="190" class="me-2">
          </div>

          <h2 class="login-title">INICIO DE SESIÓN</h2>

          <form action="{{ route('auth.login') }}" method="POST">
            @csrf
            <div class="mb-3">
              <input type="text" name="usuario" class="form-control" placeholder="Usuario o Email"
                     value="{{ old('usuario') }}" required>
            </div>
            <div class="mb-2">
              <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
            </div>

            <div class="d-flex justify-content-between align-items-center mb-2">
              <div class="form-check mb-0">
                <input class="form-check-input" type="checkbox" name="recordar" id="recordarUsuario">
                <label class="form-check-label recordar" for="recordarUsuario">
                  Recordar Usuario
                </label>
              </div>

              <a href="#" class="recuperar" data-bs-toggle="modal" data-bs-target="#recuperarModal">¿Olvidaste Contraseña?</a>
            </div>

            <button type="submit" class="btn btn-login w-100 mt-2">INGRESAR</button>

            <!-- BOTÓN CREAR CUENTA -->
            <button type="button" class="btn btn-create w-100 mt-4" data-bs-toggle="modal" data-bs-target="#crearCuentaModal">
              CREAR CUENTA
            </button>
          </form>

          <div class="logos-ext">
             <img src="{{ asset('img/sunat1.png') }}" alt="SUNAT" class="logo-sunat">
             <img src="{{ asset('img/reniec.png') }}" alt="RENIEC" class="logo-reniec">
          </div>

          <div class="social-bar">
            <a href="#" class="tiktok"><i class="fab fa-tiktok"></i></a>
            <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
            <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
          </div>
        </div>
      </div>

      <!-- COLUMNA DERECHA -->
      <div class="col-lg-7 col-md-3 d-none d-md-block">
        <div class="login-image">
          <h3>SISTEMA DE FACTURACIÓN</h3>
        </div>
      </div>

    </div>
  </div>

  <!-- CREAR CUENTA -->
  <div class="modal fade" id="crearCuentaModal" tabindex="-1" aria-labelledby="crearCuentaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content shadow-lg rounded-4">

        <div class="modal-header border-0">
          <h4 class="modal-title fw-bold text-primary" id="crearCuentaModalLabel">
            <i class="fas fa-user-plus me-2"></i> CREAR CUENTA
          </h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>

        <div class="modal-body px-4">
          <form action="{{ route('auth.register') }}" method="POST" id="registerForm">
            @csrf
            <div class="mb-3">
              <label class="form-label fw-semibold">Nombre completo</label>
              <div class="input-group">
                <span class="input-group-text bg-light"><i class="fas fa-user"></i></span>
                <input type="text" name="name" class="form-control" placeholder="Ej: Juan Pérez"
                      value="{{ old('name') }}" required>
              </div>
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold">Correo electrónico</label>
              <div class="input-group">
                <span class="input-group-text bg-light"><i class="fas fa-envelope"></i></span>
                <input type="email" name="email" class="form-control" placeholder="ejemplo@correo.com"
                      value="{{ old('email') }}" required>
              </div>
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold">Usuario</label>
              <div class="input-group">
                <span class="input-group-text bg-light"><i class="fas fa-id-badge"></i></span>
                <input type="text" name="usuario" class="form-control" placeholder="Nombre de usuario"
                      value="{{ old('usuario') }}" required>
              </div>
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold">Contraseña</label>
              <div class="input-group">
                <span class="input-group-text bg-light"><i class="fas fa-lock"></i></span>
                <input type="password" name="password" id="password" class="form-control" placeholder="********" required>
              </div>
            </div>

            <div class="mb-3">
              <label class="form-label fw-semibold">Confirmar contraseña</label>
              <div class="input-group">
                <span class="input-group-text bg-light"><i class="fas fa-lock"></i></span>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="********" required>
              </div>
            </div>

            <div class="d-grid mt-4">
              <button type="submit" class="btn btn-success btn-lg fw-bold">
                <i class="fas fa-check-circle me-2"></i> REGISTRARSE
              </button>
            </div>
          </form>
        </div>

        <div class="modal-footer border-0 justify-content-center">
          <p class="text-muted small">
            ¿Ya tienes cuenta? <a href="#" class="text-primary fw-semibold" data-bs-dismiss="modal">Inicia sesión aquí</a>
          </p>
        </div>

      </div>
    </div>
  </div>

  <!-- RECUPERAR CONTRASEÑA -->
  <div class="modal fade" id="recuperarModal" tabindex="-1" aria-labelledby="recuperarModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content shadow-lg rounded-4">

        <div class="modal-header border-0">
          <h5 class="modal-title fw-bold text-danger" id="recuperarModalLabel">
            <i class="fas fa-unlock-alt me-2"></i> Recuperar Contraseña
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>

        <div class="modal-body px-4">
          <p class="text-muted small mb-3">
            Ingresa tu correo electrónico registrado y te enviaremos un enlace para restablecer tu contraseña.
          </p>

          <form action="{{ route('auth.recuperar') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label class="form-label fw-semibold">Correo electrónico</label>
              <div class="input-group">
                <span class="input-group-text bg-light"><i class="fas fa-envelope"></i></span>
                <input type="email" name="email" class="form-control" placeholder="ejemplo@correo.com" required>
              </div>
            </div>

            <div class="d-grid mt-4">
              <button type="submit" class="btn btn-primary fw-bold">
                <i class="fas fa-paper-plane me-2"></i> Enviar enlace de recuperación
              </button>
            </div>
          </form>
        </div>

        <div class="modal-footer border-0 justify-content-center">
          <p class="text-muted small">
            ¿Recordaste tu contraseña? <a href="#" class="text-primary fw-semibold" data-bs-dismiss="modal">Inicia sesión aquí</a>
          </p>
        </div>

      </div>
    </div>
  </div>

  <!-- MODAL DE MENSAJES -->
  <div class="modal fade" id="messageModal" tabindex="-1" aria-labelledby="messageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content shadow-lg rounded-4">

        <div class="modal-header border-0" id="messageModalHeader">
          <h5 class="modal-title fw-bold" id="messageModalLabel">
            <i id="messageModalIcon" class="me-2"></i> <span id="messageModalTitle"></span>
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
        </div>

        <div class="modal-body px-4">
          <div id="messageModalContent"></div>
        </div>

        <div class="modal-footer border-0 justify-content-center">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>

      </div>
    </div>
  </div>

  <div class="footer-colors-vertical" style="position: relative; top: -58px;">
    <div class="color-bar" style="background:#0BBBD9; height: 40px; position: relative;">
      <a href="https://www.instagram.com/sbf.peru/" target="_blank" style="position: absolute; right: 10px; top: 20%; height: 25px; display: flex; align-items: center;">
        <img src="{{ asset('img/instagram.png') }}" alt="Instagram" height="25">
      </a>
    </div>

    <div class="color-bar" style="background:#F271AC; height: 40px; position: relative;">
      <a href="https://www.facebook.com/profile.php?id=61579732931468" target="_blank" style="position: absolute; right: 10px; top: 20%; height: 25px; display: flex; align-items: center;">
        <img src="{{ asset('img/facebook.png') }}" alt="Facebook" height="25">
      </a>
    </div>

    <div class="color-bar" style="background:#FCD02F; height: 40px; position: relative;">
      <a href="https://www.tiktok.com/@sbf.pe" target="_blank" style="position: absolute; right: 10px; top: 20%; height: 25px; display: flex; align-items: center;">
        <img src="{{ asset('img/tiktok.png') }}" alt="TikTok" height="25">
      </a>
    </div>
  </div>

  <script>
    function showMessage(title, message, type) {
      const modal = document.getElementById('messageModal');
      const modalHeader = document.getElementById('messageModalHeader');
      const modalTitle = document.getElementById('messageModalTitle');
      const modalIcon = document.getElementById('messageModalIcon');
      const modalContent = document.getElementById('messageModalContent');

      modalTitle.textContent = title;
      modalContent.innerHTML = message;

      modalHeader.className = 'modal-header border-0';
      modalIcon.className = 'me-2';

      if (type === 'success') {
        modalHeader.classList.add('bg-success', 'text-white');
        modalIcon.classList.add('fas', 'fa-check-circle');
      } else if (type === 'error') {
        modalHeader.classList.add('bg-danger', 'text-white');
        modalIcon.classList.add('fas', 'fa-exclamation-triangle');
      }

      const modalInstance = new bootstrap.Modal(modal);
      modalInstance.show();
    }

    document.getElementById('registerForm').addEventListener('submit', function(e) {
      const password = document.getElementById('password').value;
      const passwordConfirmation = document.getElementById('password_confirmation').value;
      const passwordInput = document.getElementById('password');
      const passwordConfirmationInput = document.getElementById('password_confirmation');

      passwordInput.classList.remove('is-invalid');
      passwordConfirmationInput.classList.remove('is-invalid');

      if (password !== passwordConfirmation) {
        e.preventDefault();

        passwordInput.classList.add('is-invalid');
        passwordConfirmationInput.classList.add('is-invalid');

        showMessage(
          'Error de Validación',
          'Las contraseñas no coinciden. Por favor, verifica que ambas contraseñas sean idénticas.',
          'error'
        );
        return false;
      }
    });

    document.addEventListener('DOMContentLoaded', function() {
      @if ($errors->any())
        let errorMessages = '';
        @foreach ($errors->all() as $error)
          errorMessages += '<div class="alert alert-danger mb-2">{{ $error }}</div>';
        @endforeach

        showMessage('Error', errorMessages, 'error');
      @endif

      @if (session('success'))
        showMessage(
          'Éxito',
          '<div class="alert alert-success mb-0">{{ session('success') }}</div>',
          'success'
        );
      @endif
    });

    document.getElementById('password').addEventListener('input', function() {
      this.classList.remove('is-invalid');
    });

    document.getElementById('password_confirmation').addEventListener('input', function() {
      this.classList.remove('is-invalid');
    });
  </script>
</body>
</html>
