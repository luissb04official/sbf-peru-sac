<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="text-align: center; margin-top: 50px;">
        <h1>Bienvenido al Dashboard</h1>
        <p>Has iniciado sesión correctamente.</p>

        <form method="POST" action="{{ route('auth.logout') }}">
            @csrf
            <button type="submit" style="padding: 10px 20px; background-color: #222; color: #fff; border: none; cursor: pointer;">
                Cerrar sesión
            </button>
        </form>
    </div>
</body>
</html>