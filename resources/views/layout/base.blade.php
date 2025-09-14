<!DOCTYPE html>
<html lang="es">
<head>
    <title>@yield('title', 'Mi Aplicación')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap y fuentes -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">

    <!-- Animate.css y FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <link rel="icon" type="image/png" href="{{ asset('img/logoo.png') }}">
    <script src="https://kit.fontawesome.com/4e5f0e3e64.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    @yield('css')

    <style>
        /* Layout general */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            font-family: 'Nunito Sans', sans-serif;
            color: #333;
        }

        main {
            flex: 1;
        }

        footer {
            background: #222;
            color: white;
            min-height: 140px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }


        .formal-title {
            font-weight: 680;
            font-size: 2.4rem;
            color: #1a1a1a;
            margin-bottom: 1rem;
            text-align: center;
        }


        .formal-text {
            font-weight: 100;
            font-size: 1rem;
            line-height: 1.6;
            color: #333;
        }


        .service-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
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
