<footer class="site-footer text-white" style="background:#222;">
  <div class="footer-container">
    <div class="container">
      <div class="row text-start align-items-start g-4">
        <!-- Columna empresa -->
        <div class="col-lg-5 col-md-6">
          <div class="d-flex align-items-center gap-3">
            <div class="footer-logo-box">
              <img src="{{ asset('img/fondo.sbf.png') }}" alt="SBF Perú" class="footer-badge-img" loading="lazy">
            </div>
            <div>
              <h5 class="mb-1 footer-title">SBF PERÚ S.A.C</h5>
              <p class="mb-0 small text-footer-muted">Facturación electrónica y servicios tecnológicos.</p>
            </div>
          </div>
          
        </div>

        <!-- Columna contacto -->
        <div class="col-lg-3 col-md-6">
          <h6 class="footer-title mb-2">Contacto</h6>
          <ul class="list-unstyled small mb-0">
            <li><span class="text-footer-label">Teléfono:</span> 953 891 818</li>
            <li><span class="text-footer-label">Correo:</span> administracion@gruposbf.pe</li>
            <li class="mt-1"><a href="https://wa.me/51953891818" target="_blank" class="footer-wa-link">Contáctanos por WhatsApp</a></li>
          </ul>
        </div>

        <!-- Columna enlaces -->
        <div class="col-lg-2 col-md-6">
          <h6 class="footer-title mb-2">Enlaces</h6>
          <ul class="list-unstyled small mb-0 footer-links">
            <li><a href="{{ url('/') }}">Inicio</a></li>
            <li><a href="#servicios">Servicios</a></li>
            <li><a href="#nosotros">Nosotros</a></li>
            <li><a href="#contacto">Contacto</a></li>
          </ul>
        </div>

        <!-- Columna redes -->
        <div class="col-lg-2 col-md-6">
          <h6 class="footer-title mb-2">Síguenos</h6>
          <div class="footer-social mt-1">
            <a href="https://www.facebook.com/profile.php?id=61579732931468" target="_blank" class="social-btn" aria-label="Facebook">
              <i class="bi bi-facebook"></i>
            </a>
            <a href="https://www.instagram.com/sbf.peru/" target="_blank" class="social-btn" aria-label="Instagram">
              <i class="bi bi-instagram"></i>
            </a>
            <a href="https://www.tiktok.com/@sbf.pe" target="_blank" class="social-btn" aria-label="TikTok">
              <i class="bi bi-tiktok"></i>
            </a>
          </div>
        </div>
        </div>
      </div>

      <div class="footer-divider my-3"></div>

      <div class="text-center">
        <p class="m-0 small text-footer-muted">© 2025 - SBF PERÚ S.A.C Todos los derechos reservados.</p>
      </div>
    </div>
  </div>

  <style>
  .site-footer { width:100%; padding: 28px 0 34px; border-top-left-radius: 0; border-top-right-radius: 0; box-shadow: 0 -6px 20px rgba(0,0,0,.18); }
    .footer-container { max-width: 1200px; margin: 0 auto; padding: 0 16px; text-align: center; font-family: 'Poppins', 'Inter', sans-serif; }
    .footer-title { font-weight:600; color:#d4d4d4; letter-spacing:.5px; }
    .text-footer-muted { color:#b5b5b5; }
    .text-footer-label { font-weight:600; color:#d4d4d4; }
  .footer-logo-box { width:auto; height:auto; background:transparent; display:inline-block; border:none; border-radius:0; overflow:visible; padding:0; }
  .footer-badge-img { height:72px; width:auto; object-fit:contain; object-position:center; border-radius:0; filter:none; }
    .footer-links li { margin-bottom:4px; }
    .footer-links a { color:#b5b5b5; text-decoration:none; transition:color .2s; }
    .footer-links a:hover { color:#ffffff; }
    .footer-wa-link { color:#b5b5b5; text-decoration:none; font-weight:600; }
    .footer-wa-link:hover { color:#ffffff; text-decoration:underline; }
    .footer-divider { height:1px; width:100%; background:linear-gradient(90deg, rgba(255, 255, 255, 0.06), rgba(255, 255, 255, 0.16), rgba(255, 255, 255, 0.05)); }
    .footer-social { display:flex; gap:10px; }
    .social-btn { width:38px; height:38px; border-radius:12px; display:inline-flex; align-items:center; justify-content:center; color:#bfbfbf; background:#2b2b2b; border:1px solid #373737; transition:background .25s, transform .25s, box-shadow .3s; font-size:1.05rem; }
    .social-btn:hover { color:#fff; background:#3a3a3a; transform:translateY(-4px); box-shadow:0 6px 18px rgba(0,0,0,.38); }
    .social-btn:focus-visible { outline:2px solid #4fa9ff; outline-offset:2px; }
  
    @media (max-width: 580px){ .footer-nav { gap: 16px; font-size: .95rem; } }
  </style>
</footer>
