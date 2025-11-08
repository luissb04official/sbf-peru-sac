
@extends('layout.base')

@section('title', 'SBF Perú')

@section('css')

  <style>

    /* General */
    body {
      min-width: 1200px;
    }

    .container {
      max-width: 1200px;
    }

    /* Hero con imagen de fondo */
    .hero {
      background: url("{{ asset('img/hero.jpg') }}") no-repeat center center;
      background-size: cover;
      color: white;
      text-shadow: 1px 1px 4px rgba(48, 46, 46, 0.6);
    }

    .navbar-nav .nav-link {
      margin-right: 40px;
    }

    .custom-nav {
      margin-left: 90px;
    }

    @media (min-width: 995px) {
      .custom-nav {
        margin-left: -10px;
      }
    }

    /* Texto Servicios */
    .custom-text {
      font-size: 17px;
      font-family: 'Arial', sans-serif;
      color: #444;
      line-height: 1.7;
    }

    /* Tarjetas de servicios */
    .service-card {
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      border-radius: 15px;
    }

    .service-card:hover {
      transform: translateY(-8px);
      box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2);
    }

    .service-card img {
      height: 180px;
      object-fit: cover;
      border-radius: 15px 15px 0 0;
    }

    .titulo-principal {
      font-family: 'Poppins', sans-serif;
      font-weight: 700;
      font-size: 3rem;
      letter-spacing: 1px;
      color: #1a1a1a;
    }

    /* Botón subir */
    .btn-scroll-top {
      position: fixed;
      bottom: 30px;
      right: 30px;
      width: 45px;
      height: 45px;
      border: none;
      border-radius: 50%;
      background: #1b8b57ff;
      color: #fff;
      font-size: 22px;
      cursor: pointer;
      box-shadow: 0px 4px 8px rgba(0,0,0,0.3);
      display: none;
      z-index: 999;
      transition: all 0.3s ease;
    }

    .btn-scroll-top:hover {
      background: #146c43;
      transform: translateY(-3px);
    }

    /* Velocidad global animaciones */
    .animate__animated {
      --animate-duration: 1.2s;
    }
  </style>
@endsection

@section('content')

<!-- Hero -->
<section id="inicio" class="hero d-flex align-items-center text-start py-5" style="height: 89vh; padding-top: 100px; padding-bottom: 80px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7">
        <h1 class="display-5 fw-bold titulo-personalizado animate__animated animate__fadeInDown" style="color: #fff; text-shadow: 1px 1px 4px rgba(48,46,46,0.6);">
  Facturación Electrónica Ágil y confiable
</h1>

<p class="mt-3 animate__animated animate__fadeInDown animate__delay-1.5s"
 style="font-size: 17px; font-family: 'Open Sans', sans-serif;">
   El sistema de facturación electrónica más rápido, seguro y accesible del Perú. Diseñado para emprendedores, negocios en crecimiento y empresas consolidadas.
</p>

<ul class="list-unstyled fs-5 mt-4 animate__animated animate__fadeInDown animate__delay-1.7s">
    <li>✅ Simplifica tu contabilidad</li>
    <li>✅ Integrado a SUNAT & RENIEC</li>
    <li>✅ Planes flexibles</li>
    <li>✅ Gestión administrativa completa</li>
</ul>
            </div>
        </div>
       <p class="fs-5 fw-semibold text-center animate__animated animate__fadeInUp animate__delay-1.8s"
   style="margin-top: 75px;">
    ¡EMPIEZA A FACTURAR HOY MISMO Y HAZ CRECER TU NEGOCIO SIN LÍMITES!
</p>

    </div>
</section>

  <!-- Servicios -->
  <section id="servicios" class="py-5"
    style="background: url('{{ asset('img/fondo-servicios.jpg') }}') no-repeat center center/cover; padding: 50px 0;"">
    <div class="container">

      <!-- Contenedor -->
   <div class="text-section" style="margin-top: -20px;">

  <!-- Título -->
       <h2 class="text-center fw-bold mb-3"
          style="font-family: 'Montserrat', sans-serif; font-size: 2.2rem; letter-spacing: 1px; color: #000000;">
          SOLUCIÓN DE FACTURACIÓN TODO EN UNO
       </h2>

         <p class="custom-text text-center mb-4">
          Optimiza la gestión de tu facturación electrónica con nuestra plataforma fácil de usar.<br>
          Administra tus clientes, productos, ventas y más desde un único lugar.
      </p>
      </div>

      <div class="row align-items-stretch g-4">

        <!-- Columna izquierda -->
        <div class="col-md-4 d-flex flex-column gap-3">
          <div class="card shadow-sm border-0 p-3 text-center flex-fill">
            <img src="{{ asset('img/icon-facturacion.png') }}" width="38" class="mx-auto mb-2" alt="Facturación">
            <h6 class="fw-bold">Facturación Electrónica</h6>
            <p class="text-muted small">Emite comprobantes electrónicos válidos ante SUNAT & RENIEC de forma rápida y
              segura.</p>
          </div>
          <div class="card shadow-sm border-0 p-3 text-center flex-fill">
            <img src="{{ asset('img/icon-gestion.png') }}" width="39" class="mx-auto mb-2" alt="Gestión">
            <h6 class="fw-bold">Gestión Administrativa Completa</h6>
            <p class="text-muted small">Administra clientes, productos, ventas e inventarios desde un solo lugar.</p>
          </div>
          <div class="card shadow-sm border-0 p-3 text-center flex-fill">
            <img src="{{ asset('img/icon-soporte.png') }}" width="39" class="mx-auto mb-2" alt="Soporte">
            <h6 class="fw-bold">Soporte Técnico Especializado</h6>
            <p class="text-muted small">Asistencia rápida y confiable para resolver cualquier inconveniente.</p>
          </div>
        </div>

        <!-- Mockup central -->
        <div class="col-md-4 d-flex justify-content-center align-items-center">
          <img src="{{ asset('img/mockup-sistema.png') }}" class="img-fluid" style="max-width:80%; height:auto;"
            alt="Pantallas del sistema">
        </div>

        <!-- Columna derecha -->
        <div class="col-md-4 d-flex flex-column gap-3">
          <div class="card shadow-sm border-0 p-3 text-center flex-fill">
            <img src="{{ asset('img/icon-integracion.png') }}" width="40" class="mx-auto mb-2" alt="Integración">
            <h6 class="fw-bold">Integración con SUNAT y RENIEC</h6>
            <p class="text-muted small">Garantizamos cumplimiento con las normativas peruanas para tu tranquilidad.</p>
          </div>
          <div class="card shadow-sm border-0 p-3 text-center flex-fill">
            <img src="{{ asset('img/icon-planes.png') }}" width="40" class="mx-auto mb-2" alt="Planes">
            <h6 class="fw-bold">Planes Flexibles y Escalables</h6>
            <p class="text-muted small">Soluciones que se adaptan al crecimiento de tu negocio.</p>
          </div>
          <div class="card shadow-sm border-0 p-3 text-center flex-fill">
            <img src="{{ asset('img/icon-seguridad.png') }}" width="40" class="mx-auto mb-2" alt="Seguridad">
            <h6 class="fw-bold">Seguridad y Respaldo de Información</h6>
            <p class="text-muted small">Protegemos tus datos con tecnología segura y almacenamiento confiable.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Nosotros -->
<section id="nosotros" class="text-center text-dark"
  style="background: url('{{ asset('img/fondo-servicios.jpg') }}') no-repeat center center/cover; padding: 70px 0;">
  <div class="container">

    <!-- Título  -->
    <div class="quienes-somos" style="margin-top: -30px;">
    <h2 class="formal-title text-center">¿QUIENES SOMOS?</h2>
    <p class="formal-text mb-3">
      SBF Perú S.A.C. es una empresa dedicada a brindar diversos servicios, entre ellos, Librería Fotocopiadora,
      Facturación Electrónica para empresas RUC 10 o 20 para emprendedores de todos los giros, Servicio Técnico, Venta
      de equipos de informática y Video seguridad e instalación. Con más de 5 años desde su fundación seguimos
      posicionados como una empresa que se preocupa por las personas, buscando brindar siempre el mejor servicio.
    </p>

    <!-- Nuestros Servicios -->
    <div class="container my-5">
      <div class="row g-4 justify-content-center">

        <!-- Servicio 1 -->
        <div class="col-md-3 col-sm-6">
            <div class="card shadow-lg border-0 h-100 text-center service-card">
              <img src="{{ asset('img/sopote-equipos.png') }}" alt="Soporte de Equipos" class="card-img-top rounded-top">
              <div class="card-body">
                <h5 class="fw-bold">Soporte de Equipos</h5>
                <p class="text-muted small">Mantenimiento y reparación de equipos de cómputo con soporte técnico especializado.</p>
              </div>
            </div>
          </div>

          <!-- Servicio 2 -->
          <div class="col-md-3 col-sm-6">
            <div class="card shadow-lg border-0 h-100 text-center service-card">
              <img src="{{ asset('img/libreria.png') }}" alt="Librería Fotocopiadora" class="card-img-top rounded-top">
              <div class="card-body">
                <h5 class="fw-bold">Librería Fotocopiadora</h5>
                <p class="text-muted small">Venta de útiles escolares, fotocopias, impresiones y más servicios de
                  librería.</p>
              </div>
            </div>
          </div>

          <!-- Servicio 3 -->
          <div class="col-md-3 col-sm-6">
            <div class="card shadow-lg border-0 h-100 text-center service-card">
              <img src="{{ asset('img/facturacion.png') }}" alt="Facturación Electrónica"
                class="card-img-top rounded-top">
              <div class="card-body">
                <h5 class="fw-bold">Facturación Electrónica</h5>
                <p class="text-muted small">Sistema de emisión de comprobantes electrónicos con envío automático a SUNAT
                  & RENIEC.</p>
              </div>
            </div>
          </div>

          <!-- Servicio 4 -->
          <div class="col-md-3 col-sm-6">
            <div class="card shadow-lg border-0 h-100 text-center service-card">
              <img src="{{ asset('img/camaras.png') }}" alt="Sistema de Cámaras" class="card-img-top rounded-top">
              <div class="card-body">
                <h5 class="fw-bold">Sistema de Cámaras</h5>
                <p class="text-muted small">Instalación y monitoreo de cámaras de seguridad para empresas y hogares.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Botón de WhatsApp -->
      <a href="https://wa.me/51953891818" target="_blank"
        class="btn btn-whatsapp btn-lg px-4 py-2 rounded-pill d-inline-flex align-items-center">
        <i class="bi bi-whatsapp me-2 fs-4"></i> Escríbenos al WhatsApp
      </a>
    </div>
  </section>

<!-- Sección de contacto -->
<section id="contacto" class="py-5" style="background: url('{{ asset('img/fondo-servicios.jpg') }}') no-repeat center center/cover;">
  <div class="container">
    <div class="row justify-content-center align-items-start" style="display: flex; gap: 30px;">

      <!-- Formulario -->
      <div style="background-color: #def6f6; padding: 30px; width: 45%; border-radius: 12px;">
        <p style="color: #007bff; font-weight: 600; font-size: 14px; margin-bottom: 10px;">CONTÁCTANOS</p>
        <h2 style="color: #0b0c4c; font-weight: 800; font-size: 28px; margin-bottom: 30px;">¿Cómo podemos ayudarte?</h2>

        <form id="contactForm" onsubmit="return validateForm(event)">
          <div style="display: flex; gap: 10px; margin-bottom: 15px;">
            <input type="text" name="nombre" placeholder="Nombre" style="flex: 1; padding: 10px; border-radius: 8px; border: none;" required>
            <input type="email" name="email" placeholder="Correo electrónico" style="flex: 1; padding: 10px; border-radius: 8px; border: none;" required>
          </div>

          <div style="display: flex; gap: 10px; margin-bottom: 15px;">
            <input type="text" name="ruc" placeholder="RUC" style="flex: 1; padding: 10px; border-radius: 8px; border: none;" required>
            <input type="text" name="telefono" placeholder="Teléfono" style="flex: 1; padding: 10px; border-radius: 8px; border: none;" required>
          </div>

          <div class="mb-3">
            <textarea name="mensaje" placeholder="Por favor, indica tu rubro y cuántas facturas, boletas y guías emites mensualmente."
              required
              style="width: 100%; border-radius: 10px; padding: 12px; font-size: 14px; border: none; resize: none; height: 100px;"></textarea>
          </div>

          <div id="captcha-wrapper" class="captcha-wrapper" style="margin-top:20px; max-width:360px; display:none; opacity:0; transition: opacity 0.3s ease-in-out;">
            <div id="turnstile-widget"></div>
          </div>

          <div style="margin-top: 15px;">
            <button type="submit" id="submitBtn" disabled
              style="background-color: #94a3b8; border: none; border-radius: 25px; font-weight: bold; padding: 12px 30px; color: white; font-size: 16px; cursor: not-allowed; transition: all 0.3s;">
              <span id="btnText">Completa el formulario</span>
            </button>
          </div>

          <input type="hidden" name="cf-turnstile-response" id="turnstile-token">
        </form>

        <script src="https://challenges.cloudflare.com/turnstile/v0/api.js?onload=onloadTurnstileCallback" async defer></script>
        <script>
          let captchaVerified = false;
          let turnstileWidgetId = null;
          let captchaRendered = false;
          let formCompleted = false;

          function onTurnstileSuccess(token) {
            console.log('✅ Turnstile verificado:', token);
            captchaVerified = true;
            document.getElementById('turnstile-token').value = token;
            
            const btn = document.getElementById('submitBtn');
            const btnText = document.getElementById('btnText');
            
            btn.disabled = false;
            btn.style.backgroundColor = '#2e7d32';
            btn.style.cursor = 'pointer';
            btnText.textContent = 'Solicitar';
            btn.style.boxShadow = '0 4px 12px rgba(46,125,50,0.3)';
          }

          function onTurnstileError(errorCode) {
            console.error('❌ Error en Turnstile:', errorCode);
            captchaVerified = false;
            
            // Intentar recargar el widget automáticamente
            setTimeout(() => {
              if (window.turnstile && turnstileWidgetId !== null) {
                try {
                  window.turnstile.reset(turnstileWidgetId);
                  const btn = document.getElementById('submitBtn');
                  const btnText = document.getElementById('btnText');
                  btn.disabled = true;
                  btn.style.backgroundColor = '#94a3b8';
                  btn.style.cursor = 'not-allowed';
                  btnText.textContent = 'Verifica que eres humano';
                } catch(e) {
                  console.error('Error al resetear:', e);
                }
              }
            }, 1000);
          }

          function onTurnstileExpired() {
            console.warn('⏰ Turnstile expiró');
            captchaVerified = false;
            const btn = document.getElementById('submitBtn');
            const btnText = document.getElementById('btnText');
            
            btn.disabled = true;
            btn.style.backgroundColor = '#f59e0b';
            btn.style.cursor = 'not-allowed';
            btnText.textContent = 'Verifica nuevamente';
          }

          // Verificar si todos los campos están completos
          function checkFormCompletion() {
            const form = document.getElementById('contactForm');
            const nombre = form.querySelector('[name="nombre"]').value.trim();
            const email = form.querySelector('[name="email"]').value.trim();
            const ruc = form.querySelector('[name="ruc"]').value.trim();
            const telefono = form.querySelector('[name="telefono"]').value.trim();
            const mensaje = form.querySelector('[name="mensaje"]').value.trim();
            
            const isComplete = nombre && email && ruc && telefono && mensaje;
            
            if (isComplete && !formCompleted) {
              // Formulario completado por primera vez - mostrar captcha
              formCompleted = true;
              showCaptcha();
            } else if (!isComplete && formCompleted) {
              // Formulario incompleto - ocultar captcha
              formCompleted = false;
              hideCaptcha();
            }
          }

          function showCaptcha() {
            const captchaWrapper = document.getElementById('captcha-wrapper');
            const btn = document.getElementById('submitBtn');
            const btnText = document.getElementById('btnText');
            
            captchaWrapper.style.display = 'block';
            setTimeout(() => {
              captchaWrapper.style.opacity = '1';
            }, 10);
            
            btnText.textContent = 'Verifica que eres humano';
            
            // Renderizar el widget si no existe
            if (!captchaRendered && window.turnstile) {
              try {
                turnstileWidgetId = window.turnstile.render('#turnstile-widget', {
                  sitekey: '1x00000000000000000000AA',
                  theme: 'light',
                  size: 'normal',
                  callback: onTurnstileSuccess,
                  'error-callback': onTurnstileError,
                  'expired-callback': onTurnstileExpired,
                });
                captchaRendered = true;
                console.log('🔧 Captcha mostrado');
              } catch(error) {
                console.error('Error al renderizar captcha:', error);
              }
            }
          }

          function hideCaptcha() {
            const captchaWrapper = document.getElementById('captcha-wrapper');
            const btn = document.getElementById('submitBtn');
            const btnText = document.getElementById('btnText');
            
            captchaWrapper.style.opacity = '0';
            setTimeout(() => {
              captchaWrapper.style.display = 'none';
            }, 300);
            
            btn.disabled = true;
            btn.style.backgroundColor = '#94a3b8';
            btn.style.cursor = 'not-allowed';
            btnText.textContent = 'Completa el formulario';
            
            captchaVerified = false;
          }

          // Escuchar cambios en los campos del formulario
          document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('contactForm');
            const inputs = form.querySelectorAll('input[required], textarea[required]');
            
            inputs.forEach(input => {
              input.addEventListener('input', checkFormCompletion);
              input.addEventListener('blur', checkFormCompletion);
            });
          });

          function validateForm(event) {
            event.preventDefault();
            
            if (!captchaVerified) {
              alert('Por favor, completa la verificación de seguridad.');
              return false;
            }
            
            const form = document.getElementById('contactForm');
            const btn = document.getElementById('submitBtn');
            const btnText = document.getElementById('btnText');
            const formData = new FormData(form);
            
            // Deshabilitar botón mientras envía
            btn.disabled = true;
            btn.style.backgroundColor = '#94a3b8';
            btnText.textContent = 'Enviando...';
            
            // Enviar con fetch API
            fetch('{{ route("contacto.enviar") }}', {
              method: 'POST',
              headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}',
                'Accept': 'application/json',
              },
              body: formData
            })
            .then(response => response.json())
            .then(data => {
              if (data.success) {
                // Éxito
                btn.style.backgroundColor = '#10b981';
                btnText.textContent = '✓ Enviado';
                
                setTimeout(() => {
                  alert(data.message);
                  form.reset();
                  captchaVerified = false;
                  formCompleted = false;
                  captchaRendered = false;
                  btn.disabled = true;
                  btn.style.backgroundColor = '#94a3b8';
                  btn.style.cursor = 'not-allowed';
                  btn.style.boxShadow = 'none';
                  btnText.textContent = 'Completa el formulario';
                  
                  // Ocultar y resetear Turnstile
                  const captchaWrapper = document.getElementById('captcha-wrapper');
                  captchaWrapper.style.opacity = '0';
                  setTimeout(() => {
                    captchaWrapper.style.display = 'none';
                    if (window.turnstile && turnstileWidgetId !== null) {
                      window.turnstile.remove(turnstileWidgetId);
                      turnstileWidgetId = null;
                    }
                  }, 300);
                }, 800);
              } else {
                // Error del servidor
                btn.style.backgroundColor = '#ef4444';
                btnText.textContent = 'Error';
                alert(data.message || 'Error al enviar el formulario');
                
                setTimeout(() => {
                  btn.disabled = false;
                  btn.style.backgroundColor = '#2e7d32';
                  btnText.textContent = 'Solicitar';
                }, 2000);
              }
            })
            .catch(error => {
              console.error('Error:', error);
              btn.style.backgroundColor = '#ef4444';
              btnText.textContent = 'Error de conexión';
              alert('Error de conexión. Por favor, inténtalo de nuevo.');
              
              setTimeout(() => {
                btn.disabled = false;
                btn.style.backgroundColor = '#2e7d32';
                btnText.textContent = 'Solicitar';
              }, 2000);
            });
            
            return false;
          }

          // Inicializar cuando la API esté lista 
          window.onloadTurnstileCallback = function () {
            console.log('🔧 API de Turnstile cargada y lista');
          };
        </script>
      </div>

<!-- Información de contacto -->
<div style="width: 30%; font-family: Arial, sans-serif; color:#333; font-size: 13px; line-height: 1.4; margin-top: 30px; margin-left: 25px;">

  <!-- BLOQUE CON FONDO GRIS -->
  <div style="background-color: #f6f6f6; padding: 20px; border-radius: 10px;">

    <!-- CORREO -->
    <h4 style="font-weight: 700; text-transform: uppercase; font-size: 12px; margin-bottom: 5px;">Correo</h4>
    <p style="margin: 2px 0;">administracion@gruposbf.pe</p>
    <hr style="margin: 10px 0; border: none; border-top: 1px solid #ccc;">

    <!-- TELÉFONOS -->
    <h4 style="font-weight: 700; text-transform: uppercase; font-size: 12px; margin-bottom: 5px;">Teléfonos</h4>
    <p style="margin: 2px 0;">953891818 - 923916260 - 972530301</p>
    <hr style="margin: 10px 0; border: none; border-top: 1px solid #ccc;">

    <!-- HORARIO -->
    <h4 style="font-weight: 700; text-transform: uppercase; font-size: 12px; margin-bottom: 5px;">Horario</h4>
    <div style="display: flex; justify-content: space-between; max-width: 300px;">
   <div>
        <p style="margin: 2px 0; font-weight: 600;">Lunes - Viernes</p>
        <p style="margin: 2px 0;">7:00 a.m. - 7:30 p.m.</p>
   </div>
      <div>
        <p style="margin: 2px 0; font-weight: 600;">Sábado</p>
        <p style="margin: 2px 0;">9:00 a.m. - 12:30 p.m.</p>
      </div>
  </div>
      <div>
        <p style="margin: 2px 0; font-weight: 600;">Domingo</p>
        <p style="margin: 2px 0;">9:00 a.m. - 5:30 p.m.</p>
      </div>
  </div>

  <!-- MAPA -->
<div style="margin-top: 25px;">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5681.550344998005!2d-77.06063515815472!3d-11.96803246914376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105ce33bc704faf%3A0x9a0e85cd969f8047!2sGRUPO%20SBF%20PERU%20SAC!5e0!3m2!1ses-419!2spe!4v1762299544912!5m2!1ses-419!2spe" 
    width="350" 
    height="210" 
    style="border:0;" 
    allowfullscreen="" 
    loading="lazy" 
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>
</div>
</section>

  <!-- Botón subir -->
<button id="btnScrollTop" class="btn-scroll-top">
  <i class="bi bi-arrow-up"></i>
</button>

<script>
  const btnScrollTop = document.getElementById("btnScrollTop");

  window.addEventListener("scroll", () => {
    if (window.scrollY > 300) {
      btnScrollTop.style.display = "block";
    } else {
      btnScrollTop.style.display = "none";
    }
  });

  btnScrollTop.addEventListener("click", () => {
    window.scrollTo({ top: 0, behavior: "smooth" });
  });
</script>

@endsection
