<!DOCTYPE html>
<html lang="es">
<head>
    <title>@yield('title', 'Mi Aplicación')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap y fuentes -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Animate.css y FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="icon" type="image/png" href="{{ asset('img/logoo.png') }}">
    <script src="https://kit.fontawesome.com/4e5f0e3e64.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

    <!-- CSS -->
    <link href="{{ asset('css/custom-styles.css') }}" rel="stylesheet">
    
    @yield('css')

    <style>
        
        :root {
            --color-principal: #252526ff; 
            --color-principal-dark: #ffffffff;
            --color-acento: #4d4d4dff;   
            --color-fondo: #f3f4f6;    
            --color-texto: #000000ff;
        }
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            font-family: 'Poppins', 'Inter', 'Nunito Sans', sans-serif;
            color: var(--color-texto);
            background: var(--color-fondo);
        }

        main {
            flex: 1;
        }

        .navbar {
            box-shadow: 0 2px 12px rgba(44, 62, 80, 0.07);
            background: #fff !important;
            transition: box-shadow 0.3s;
        }
        .navbar .nav-link, .navbar-brand {
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            color: var(--color-principal) !important;
            letter-spacing: 0.5px;
            transition: color 0.2s;
        }
        .navbar .nav-link:hover {
            color: var(--color-acento) !important;
        }

        .btn, button {
            border-radius: 25px !important;
            font-family: 'Poppins', sans-serif;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: background 0.2s, color 0.2s, box-shadow 0.2s;
            box-shadow: 0 2px 8px rgba(14, 14, 14, 0.07);
        }
        .btn-primary, .btn-success {
            background: linear-gradient(90deg, var(--color-principal) 60%, var(--color-acento) 100%);
            border: none;
            color: #fff;
        }
        .btn-primary:hover, .btn-success:hover {
            background: linear-gradient(90deg, var(--color-acento) 60%, var(--color-principal-dark) 100%);
            color: #fff;
        }
        /* Botón WhatsApp específico */
        .btn-whatsapp {
            background: #237140ff !important;
            color: #ffffffff !important;
            border: none !important;
            box-shadow: 0 4px 14px rgba(59, 146, 91, 0.35); 
            transition: background 0.25s, transform 0.25s, box-shadow 0.25s;
        }
        .btn-whatsapp:hover {
            background: #258a4cff !important;
            transform: translateY(-2px);
            box-shadow: 0 6px 18px rgba(37,211,102,0.45);
        }
        .btn-whatsapp i { filter: drop-shadow(0 1px 3px rgba(0,0,0,0.25)); }

        /* Tarjetas y animaciones */
        .service-card, .card {
            border-radius: 18px;
            box-shadow: 0 4px 18px rgba(44, 62, 80, 0.08);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .service-card:hover, .card:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 12px 32px rgba(44, 62, 80, 0.13);
        }

        .formal-title, h1, h2, h3, h4, h5, h6 {
            font-family: 'Poppins', 'Montserrat', sans-serif;
            font-weight: 700;
            color: var(--color-principal);
        }
        .formal-title {
            font-size: 2.6rem;
            margin-bottom: 1.2rem;
            text-align: center;
        }

        .formal-text {
            font-weight: 400;
            font-size: 1.08rem;
            line-height: 1.7;
            color: #444;
        }

        footer {
            background: linear-gradient(90deg, var(--color-principal) 60%, var(--color-acento) 100%);
            color: #fff;
            min-height: 140px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            box-shadow: 0 -2px 12px rgba(44, 62, 80, 0.07);
            border-top-left-radius: 24px;
            border-top-right-radius: 24px;
        }
        footer a {
            color: #fff;
            opacity: 0.85;
            transition: opacity 0.2s;
        }
        footer a:hover {
            opacity: 1;
            text-decoration: underline;
        }

        .fade-in {
            animation: fadeIn 1.2s ease-in;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: none; }
        }
    </style>
</head>
<body>
    @include('layout.header')

    <main>
        @yield('content')
    </main>

    @include('layout.footer')
</body>
</html>
