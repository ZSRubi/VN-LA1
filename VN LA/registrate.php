<?php
session_start();
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

// Obtener datos del formulario si hay un error
$nombre = isset($_GET['nombre']) ? $_GET['nombre'] : '';
$apellido = isset($_GET['apellido']) ? $_GET['apellido'] : '';
$usuario = isset($_GET['usuario']) ? $_GET['usuario'] : '';
$email = isset($_GET['email']) ? $_GET['email'] : '';
$cargo = isset($_GET['cargo']) ? $_GET['cargo'] : '';
$genero = isset($_GET['genero']) ? $_GET['genero'] : '';
$error_message = isset($_GET['error']) && $_GET['error'] == 'password' ? 'Las contraseñas no coinciden, por favor registrese nuevamente' : '';
?>

<!DOCTYPE html>
<html>
<link href="./image/VIENA LOGO 1.png" rel="icon">
<link href="./image/VIENA LOGO 1.png" rel="apple-touch-icon">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Cache-Control" content="no-store, no-cache, must-revalidate, max-age=0">
    <meta http-equiv="Cache-Control" content="post-check=0, pre-check=0" false>
    <meta http-equiv="Pragma" content="no-cache">
    <title>Registrate</title>
    <link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" href="./estilos/registrate.css">
   
    <?php require 'head.php'?>   
</head>
<body>
        <?php if ($error_message): ?>2
            <div class="error-message"><?php echo $error_message; ?></div>
        <?php endif; ?>
        <div class="inner">
            <div class="image-holder">
                <img src="./image/img 2.jpg" alt="" class="registro01">
                <a href="Login.php">
                </a>
            </div>
            <form action="BDRegistro.php" method="POST" class="formulario" name="login">
                <h3>Formulario de Registro</h3>
                <div class="form-group">
                    <input name="nombre" type="text" placeholder="Nombre" class="form-control" value="<?php echo htmlspecialchars($nombre); ?>" required>
                    <input name="apellidos" type="text" placeholder="Apellidos" class="form-control" value="<?php echo htmlspecialchars($apellido); ?>" required>
                </div>
                <div class="form-wrapper">
                    <input name="usuario" type="text" placeholder="Nombre de Usuario" class="form-control" value="<?php echo htmlspecialchars($usuario); ?>" required>
                </div>
                <div class="form-wrapper">
                    <input name="email" type="email" placeholder="Correo Electronico" class="form-control" value="<?php echo htmlspecialchars($email); ?>" required>
                </div>
                <div class="form-wrapper">
                    <select name="cargo" class="form-control" required>
                        <option value="" disabled selected>Cargo</option>
                        <option value="cliente" <?php echo $cargo == 'cliente' ? 'selected' : ''; ?>>Cliente</option>
                        <option value="administrador" <?php echo $cargo == 'administrador' ? 'selected' : ''; ?>>Administrador</option>
                    </select>
                </div>
                <div class="form-wrapper">
                    <select name="genero" class="form-control" required>
                        <option value="" disabled selected>Género</option>
                        <option value="masculino" <?php echo $genero == 'masculino' ? 'selected' : ''; ?>>Masculino</option>
                        <option value="femenino" <?php echo $genero == 'femenino' ? 'selected' : ''; ?>>Femenino</option>
                    </select>
                </div>
                <div class="form-wrapper">
                    <input name="contraseña" type="password" placeholder="Contraseña" class="form-control" required>
                </div>
                <div class="form-wrapper">
                    <input name="confirmar_contraseña" type="password" placeholder="Confirmar Contraseña" class="form-control" required>
                </div>
                <button type="submit">Regístrate
                    <i class="zmdi zmdi-arrow-right"></i>
                </button>
            </form>
        </div>
    </div>
    <script>
        // Limpia los campos si hay un error en la URL
        if (window.location.search.includes('error=password')) {
            document.querySelectorAll('input[type="text"], input[type="email"], select').forEach(function(input) {
                input.value = '';
            });
        }

        // Limpia los campos al cargar la página
        window.addEventListener('load', function() {
            document.querySelectorAll('input[type="text"], input[type="email"], select').forEach(function(input) {
                input.value = '';
            });
        });
    </script>
</body>
</html>




