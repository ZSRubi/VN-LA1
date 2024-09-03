<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe de Ensayo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
        }
        form {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            font-weight: bold;
        }
        .form-group input, .form-group textarea, .form-group select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .form-group textarea {
            height: 100px;
        }
        .form-group button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .form-group button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Informe de Ensayo</h1>
        <form id="informe-form">
            <div class="form-group">
                <label for="proyecto">PROYECTO:</label>
                <input type="text" id="proyecto" name="proyecto" required>
            </div>
            <div class="form-group">
                <label for="ubicacion">UBICACIÓN:</label>
                <input type="text" id="ubicacion" name="ubicacion" required>
            </div>
            <div class="form-group">
                <label for="solicitante">SOLICITANTE:</label>
                <input type="text" id="solicitante" name="solicitante" required>
            </div>
            <div class="form-group">
                <label for="referencia">REFERENCIA:</label>
                <input type="text" id="referencia" name="referencia" required>
            </div>
            <div class="form-group">
                <label for="fecha">FECHA:</label>
                <input type="date" id="fecha" name="fecha" required>
            </div>
            <div class="form-group">
                <label for="codigo-informe">CÓDIGO DE INFORME:</label>
                <input type="text" id="codigo-informe" name="codigo-informe" required>
            </div>
            <div class="form-group">
                <label for="pagina">PÁGINA:</label>
                <input type="text" id="pagina" name="pagina" required>
            </div>
            <div class="form-group">
                <label for="codigo-probeta">CÓDIGO DE PROBETA:</label>
                <input type="text" id="codigo-probeta" name="codigo-probeta" required>
            </div>
            <div class="form-group">
                <label for="fecha-moldeo">FECHA DE MOLDEO:</label>
                <input type="date" id="fecha-moldeo" name="fecha-moldeo" required>
            </div>
            <div class="form-group">
                <label for="fecha-rotura">FECHA DE ROTURA:</label>
                <input type="date" id="fecha-rotura" name="fecha-rotura" required>
            </div>
            <div class="form-group">
                <label for="fe">Fe (Kg/cm2):</label>
                <input type="number" id="fe" name="fe" step="any" required>
            </div>
            <div class="form-group">
                <label for="edad">Edad (días):</label>
                <input type="number" id="edad" name="edad" required>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion" required></textarea>
            </div>
            <div class="form-group">
                <label for="d">D (mm):</label>
                <input type="number" id="d" name="d" step="any" required>
            </div>
            <div class="form-group">
                <label for="h">H (mm):</label>
                <input type="number" id="h" name="h" step="any" required>
            </div>
            <div class="form-group">
                <label for="area">Área (cm2):</label>
                <input type="number" id="area" name="area" step="any" required>
            </div>
            <div class="form-group">
                <label for="peso">Peso (Kg):</label>
                <input type="number" id="peso" name="peso" step="any" required>
            </div>
            <div class="form-group">
                <label for="f">F (kN):</label>
                <input type="number" id="f" name="f" step="any" required>
            </div>
            <div class="form-group">
                <label for="densidad">Densidad (g/cm3):</label>
                <input type="number" id="densidad" name="densidad" step="any" required>
            </div>
            <div class="form-group">
                <label for="resistencia">Resistencia (Kg/cm2):</label>
                <input type="number" id="resistencia" name="resistencia" step="any" required>
            </div>
            <div class="form-group">
                <label for="r">r:</label>
                <input type="number" id="r" name="r" step="any" required>
            </div>
            <div class="form-group">
                <label for="tipo-falla">Tipo de Falla:</label>
                <select id="tipo-falla" name="tipo-falla" required>
                    <option value="Tipo 1">Tipo 1</option>
                    <option value="Tipo 2">Tipo 2</option>
                    <option value="Tipo 3">Tipo 3</option>
                    <option value="Tipo 4">Tipo 4</option>
                    <option value="Tipo 5">Tipo 5</option>
                    <option value="Tipo 6">Tipo 6</option>
                </select>
            </div>
            <div class="form-group">
                <button type="button" onclick="generateQR()">Generar Código QR</button>
            </div>
        </form>
        <div id="qr-code" style="margin-top: 20px;">
            <!-- El código QR se mostrará aquí -->
        </div>
    </div>

    <script>
        function generateQR() {
            var form = document.getElementById('informe-form');
            var urlParams = new URLSearchParams(new FormData(form)).toString();
            var qrUrl = `https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=${encodeURIComponent(urlParams)}`;
            document.getElementById('qr-code').innerHTML = `<img src="${qrUrl}" alt="Código QR">`;
        }
    </script>
</body>
</html>
