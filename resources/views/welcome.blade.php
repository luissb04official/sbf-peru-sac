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
      background: #198754;
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
      --animate-duration: 1.0s;
    }
  </style>
@endsection

@section('content')
 <!-- Hero -->
<section id="inicio" class="hero d-flex align-items-center text-start py-5" style="height: 89vh; padding-top: 100px; padding-bottom: 80px;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7">
                <h1 class="display-5 fw-bold titulo-personalizado animate__animated animate__fadeInUp">
                    Facturación Electrónica Ágil y confiable
                </h1>

                <style>
                .titulo-personalizado {
                 font-family: 'Nunito Sans', sans-serif;
                 font-weight: 700;
                 letter-spacing: 0.6px;
                 color: #ffffff;
                 }
                </style>

                <p class="mt-3 animate__animated animate__fadeInUp animate__delay-1.2s"
                 style="font-size: 17px; font-family: 'Open Sans', sans-serif;">
                   El sistema de facturación electrónica más rápido, seguro y accesible del Perú. Diseñado para emprendedores, negocios en crecimiento y empresas consolidadas.
                </p>


                <ul class="list-unstyled fs-5 mt-4 animate__animated animate__fadeInUp animate__delay-1.5s">
                    <li>✅ Simplifica tu contabilidad</li>
                    <li>✅ Integrado a SUNAT & RENIEC</li>
                    <li>✅ Planes flexibles</li>
                    <li>✅ Gestión administrativa completa</li>
                </ul>
            </div>
        </div>
       <p class="fs-5 fw-semibold text-center animate__animated animate__fadeInUp animate__delay-1.5s"
   style="margin-top: 75px;">
    ¡EMPIEZA A FACTURAR HOY MISMO Y HAZ CRECER TU NEGOCIO SIN LÍMITES!
</p>

    </div>
</section>

  <!-- Servicios -->
  <section id="servicios" class="py-5"
    style="background: url('{{ asset('img/fondo-servicios.jpg') }}') no-repeat center center/cover; padding: 50px 0;"">
    <div class="container">

      <!-- Título -->
      <h2 class="text-center fw-bold mb-3"
      style="font-family: 'Montserrat', sans-serif; font-size: 2.2rem; letter-spacing: 1px; color: #000000;">
      SOLUCIÓN DE FACTURACIÓN TODO EN UNO
     </h2>


      <p class="custom-text text-center mb-4">
        Optimiza la gestión de tu facturación electrónica con nuestra plataforma fácil de usar.<br>
        Administra tus clientes, productos, ventas y más desde un único lugar.
      </p>

      <div class="row align-items-stretch g-4">

        <!-- Columna izquierda -->
        <div class="col-md-4 d-flex flex-column gap-3">
          <div class="card shadow-sm border-0 p-3 text-center flex-fill">
            <img src="{{ asset('img/icon-facturacion.png') }}" width="39" class="mx-auto mb-2" alt="Facturación">
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
          <div class="card shadow-sm border-0 h-100 text-center service-card">
            <img src="{{ asset('img/sopote-equipos.png') }}" alt="Soporte de equipos"
                class="card-img-top rounded-top">
            <div class="card-body">
              <h5 class="fw-bold">Soporte de Equipos</h5>
              <p class="text-muted small">
                Mantenimiento y reparación de equipos de cómputo con soporte técnico especializado.
              </p>
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
        class="btn btn-success btn-lg px-4 py-2 rounded-pill d-inline-flex align-items-center">
        <i class="bi bi-whatsapp me-2 fs-4"></i> Escríbenos al WhatsApp
      </a>
    </div>
  </section>

<!-- Sección de contacto -->
<section id="contacto" class="py-5" style="background: url('{{ asset('img/fondo-servicios.jpg') }}') no-repeat center center/cover;">
    <div class="container">
       <h2 class="text-center fw-bold mb-5" style="font-family: 'Nunito Sans', sans-serif; color: #333333; letter-spacing: 1px; font-weight: 700;"></h2>
        <div class="row justify-content-center align-items-center">

 <div style="display: flex; border-radius: 15px; overflow: hidden; font-family: 'Segoe UI', sans-serif;">

  <!-- Formulario -->
  <div style="background-color: #def6f6; padding: 40px; width: 50%;">
    <p style="color: #007bff; font-weight: 600; font-size: 14px; margin-bottom: 10px;">CONTÁCTANOS</p>
    <h2 style="color: #0b0c4c; font-weight: 800; font-size: 28px; margin-bottom: 30px;">¿Cómo podemos ayudarte?</h2>

    <form>

      <div style="display: flex; gap: 10px; margin-bottom: 15px;">
        <input type="text" placeholder="Nombre" style="flex: 1; padding: 10px; border-radius: 8px; border: none;" required>
        <input type="email" placeholder="Correo electrónico" style="flex: 1; padding: 10px; border-radius: 8px; border: none;" required>
      </div>

      <div style="display: flex; gap: 10px; margin-bottom: 15px;">
        <input type="text" placeholder="RUC" style="flex: 1; padding: 10px; border-radius: 8px; border: none;" required>
        <input type="text" placeholder="Teléfono" style="flex: 1; padding: 10px; border-radius: 8px; border: none;" required>
      </div>

      <!-- Comentarios -->
      <div class="mb-3">
        <textarea
          placeholder="Por favor, indica tu rubro y cuántas facturas, boletas y guías emites mensualmente."
          required
          style="width: 100%; border-radius: 10px; padding: 12px; font-size: 14px; border: none; resize: none; height: 100px;"></textarea>
      </div>

      <!-- Botón -->
      <div style="margin-top: 15px;">
        <button type="submit"
          style="background-color: #0b0c4c; border: none; border-radius: 25px; font-weight: bold; padding: 12px 30px; color: white; font-size: 16px; cursor: pointer;">
          Solicitar
        </button>
      </div>

    <!-- CAPTCHA simulado -->
<div style="margin-top: 30px; background-color: #fff; padding: 12px 15px; border-radius: 8px; border: 1px solid #d3d3d3; max-width: 360px;">
  <div style="display: flex; align-items: center;">
    <input type="checkbox" style="width: 20px; height: 20px; margin-right: 10px;">
    <span style="font-size: 14px; color: #333;">Verifica que eres un ser humano</span>
    <img src="https://www.cloudflare.com/img/logo-cloudflare-dark.svg" alt="Cloudflare" style="height: 25px; margin-left: auto;">
  </div>
  <div style="margin-left: 30px; margin-top: 4px; font-size: 10px; color: #666;">
    <a href="#" style="color: #666; text-decoration: none;">Privacidad</a> •
    <a href="#" style="color: #666; text-decoration: none;">Términos</a>
  </div>
</div>


    </form>
  </div>

  <!-- Imagen -->
  <div style="width: 50%;">
   <img src="{{ asset('img/contacto-imagen.png') }}" alt="Formulario de contacto" style="width: 100%; height: 100%; object-fit: cover;">
  </div>

</div>

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
