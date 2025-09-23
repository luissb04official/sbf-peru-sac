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
            padding: 30px;
            max-width: 900px;
            margin: 30px auto;
            background: #fff;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
        }

        .factura-header {
            display: flex;
            justify-content: space-between; /* Alinea el logo a la derecha y la info a la izquierda */
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
            font-size: 1.8rem;
            font-weight: bold;
            color: #1a1a1a;
        }

        .empresa-info p {
            margin: 4px 0;
            font-size: 0.9rem;
            line-height: 1.5;
            color: #333;
        }

        /* Estilo para el logo */
        .logo {
            width: 130px;
            height: auto;
            object-fit: contain;
            border: 1px solid #ddd;
            padding: 5px;
            background: #fff;
            border-radius: 6px;
            /* Alineación del logo a la derecha */
            margin-left: 10px;
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
            font-size: 1.2rem;
            font-weight: bold;
            color: #000;
        }

        .factura-info p {
            margin: 4px 0;
            font-size: 1rem;
            color: #333;
        }

        .fecha-emision {
            margin-bottom: 15px;
            font-size: 1rem;
            font-weight: bold;
            color: #333;
        }

        .detalle table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .detalle th, .detalle td {
            border: 1px solid #000;
            padding: 12px 8px;
            text-align: center;
            font-size: 1rem;
            color: #333;
        }

        .detalle th {
            background: #f2f2f2;
            font-weight: bold;
        }

        .detalle td {
            background: #fafafa;
        }

        .detalle td strong {
            font-weight: bold;
        }

        /* Ajuste de la pantallas */
        @media (max-width: 600px) {
            .factura-container {
                padding: 15px;
                max-width: 100%;
            }

            .factura-header {
                flex-direction: column;
                align-items: center;
            }

            .empresa-info {
                width: 100%;
                margin-bottom: 20px;
            }

            .logo {
                display: block;
                margin: 10px auto;
            }
        }
    </style>
</head>
<body>

<div class="factura-container">

    <!-- Header de la factura -->
    <div class="factura-header">
        <!-- Info empresa -->
        <div class="empresa-info">
            <h2>SBF PERÚ S.A.C</h2>
            <p>Calle 13A Nro 180 Int A-4 Centro comercial Hiper - Comas</p>
            <p>Tel: 953 891 818 / 923 916 260</p>
            <p>Email: administracion@gruposbf.pe</p>
            <p>Web: www.sbf-peru-sac</p>
        </div>

    <!-- Info de la factura -->
    <div class="factura-info">
        <p><strong>R.U.C.</strong> {{ $factura->ruc }}</p>
        <h3>{{ strtoupper($factura->tipo) }}</h3>
        <p><strong>N°</strong> {{ $factura->serie }} - {{ $factura->correlativo }}</p>
    </div>

    <!-- Fecha de emisión -->
    <div class="fecha-emision">
        <strong>Fecha de Emisión:</strong>
        {{ $factura->created_at->timezone('America/Lima')->format('d/m/Y H:i:s') }}
    </div>

    <!-- Detalle de la factura -->
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
