<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Factura {{ $factura->id }}</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #f9f9f9;
        }

        .factura-container {
            border: 2px solid #000;
            padding: 20px 25px;
            max-width: 800px;
            margin: 30px auto;
            background: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .factura-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            border-bottom: 2px solid #000;
            padding-bottom: 15px;
            margin-bottom: 20px;
        }

        /* ----------- Empresa ----------- */
        .empresa-info {
            width: 60%;
        }

        .empresa-info h2 {
            margin: 0;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .empresa-info p {
            margin: 4px 0;
            font-size: 0.9rem;
            line-height: 1.3;
        }

        .logo {
            width: 130px;
            height: auto;
            object-fit: contain;
            border: 1px solid #ddd;
            padding: 5px;
            background: #fff;
            border-radius: 6px;
        }

        .factura-info {
            text-align: center;
            border: 2px solid #000;
            padding: 12px;
            width: 100%;
            background-color: #fafafa;
            border-radius: 6px;
        }

        .factura-info h3 {
            margin: 6px 0;
            font-size: 1.1rem;
            font-weight: bold;
        }

        .factura-info p {
            margin: 4px 0;
            font-size: 0.95rem;
        }

        .fecha-emision {
            margin-bottom: 15px;
            font-size: 1rem;
        }

        .detalle table {
            width: 100%;
            border-collapse: collapse;
        }

        .detalle th, .detalle td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
            font-size: 0.9rem;
        }

        .detalle th {
            background: #f2f2f2;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="factura-container">

    <div class="factura-header">
        <!-- Info empresa -->
        <div class="empresa-info">
            <h2>SBF PERÚ S.A.C</h2>
            <p>Calle 13A Nro 180 Int A-4 Centro comercial Hiper - Comas</p>
            <p>Tel: 953 891 818 / 923 916 260</p>
            <p>Email: administracion@gruposbf.pe</p>
            <p>Web: www.proveedorpse.com</p>
        </div>

        <div class="factura-info">
            <p><strong>R.U.C.</strong> {{ $factura->ruc }}</p>
            <h3>{{ strtoupper($factura->tipo) }}</h3>
            <p><strong>N°</strong> {{ $factura->serie }} - {{ $factura->correlativo }}</p>
        </div>
    </div>

    <!-- Fecha de emisión -->
    <div class="fecha-emision">
        <strong>Fecha de Emisión:</strong>
        {{ $factura->created_at->timezone('America/Lima')->format('d/m/Y H:i:s') }}
    </div>

    <!-- Tabla detalle -->
    <div class="detalle">
        <table>
            <thead>
                <tr>
                    <th>CANTIDAD</th>
                    <th>U.M.</th>
                    <th>DESCRIPCIÓN</th>
                    <th>PRECIO UNIT.</th>
                    <th>IMPORTE</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>UND</td>
                    <td>Documento electrónico registrado</td>
                    <td>0.00</td>
                    <td>0.00</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>

</body>
</html>
