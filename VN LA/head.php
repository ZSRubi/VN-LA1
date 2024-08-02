<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
   
    <style>
        /* Estilo para el encabezado fijo */
        .fixed-top-custom {
            background: black;
            color: white; /* Asegura que el texto sea blanco en el fondo oscuro */
            padding: 10px 0; /* Ajusta el espaciado vertical si es necesario */
        }
        /* Estilo para el menú desplegable */
        .navbar-nav .dropdown-menu {
            background-color: #000; /* Fondo oscuro para los menús desplegables */
            border: none; /* Elimina el borde para un aspecto más limpio */
        }
        /* Estilo para los elementos del menú desplegable al pasar el ratón */
        .navbar-nav .dropdown-item:hover {
            background-color: #343a40; /* Color ligeramente más claro al pasar el ratón */
        }
        /* Estilo para el texto o la marca de la barra de navegación */
        .navbar-brand span {
            color: #007bff; /* Color azul para la marca o texto */
        }

       /* Estilos para el encabezado */
header {
    width: 100%; /* Asegura que el encabezado ocupe todo el ancho del viewport */
    height: 70px; /* Ajusta según la altura del encabezado */
    display: flex; /* Usa flexbox para alinear el contenido */
    align-items: center; /* Centra el contenido verticalmente */
    justify-content: space-between; /* Alinea los elementos de forma que haya espacio entre ellos */
    position: fixed; /* Fija el encabezado en la parte superior del viewport */
    top: 0; /* Asegura que esté en la parte superior */
    left: 0; /* Asegura que esté en el borde izquierdo */
    z-index: 100; /* Asegura que el encabezado esté encima de otros elementos */
    background-color: black; /* Fondo negro del encabezado */
    color: #eee; /* Color del texto */
    padding: 0 20px; /* Espaciado interno del encabezado */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Añade una sombra ligera para mejor visibilidad */
}

/* Estilo para los enlaces dentro del encabezado */
header a {
    color: #eee; /* Color del texto de los enlaces */
    margin-right: 15px; /* Espaciado entre enlaces */
    padding: 10px 15px; /* Espaciado interno de los enlaces */
    transition: 0.3s; /* Transición suave en cambios de estilo */
}

header a:hover {
    background-color: rgba(255, 255, 255, 0.1); /* Fondo ligeramente más claro al pasar el ratón sobre el enlace */
}

/* Espaciado adicional para el contenido del slider */
body {
    padding-top: 70px; /* Asegura que el contenido no quede oculto debajo del encabezado fijo */
}

/* Estilos para el slider */
.slider {
    /* Ajusta estos estilos según sea necesario para tu slider */
    position: relative; /* Asegura que el slider esté en el flujo de documentos */
    
    /* Otros estilos del slider */
}

.slider .list {
    display: flex;
    overflow-x: auto;
    /* Otros estilos para la lista de items */
}

.slider .item {
    flex: 0 0 auto;
    /* Otros estilos para cada item del slider */
}

    </style>
</head>
<body>
<header id="header" class="fixed-top-custom">
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid"> <!-- Cambiado de container a container-fluid -->
            <p class="navbar-brand" href="index.php">VIENA INGENIEROS<span>.</span></p>
           
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Reservas</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <!-- Menú desplegable vacío -->
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                           ESTUDIOS
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                            <!-- Opciones del menú desplegable -->
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Interesante</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sobre el sitio
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink4">
                            <a class="dropdown-item" href="#">Politica y privacidad</a>
                            <a class="dropdown-item" href="#">Terminos y condiciones</a>
                            <a class="dropdown-item" href="#">Contactanos</a>
                        </div>
                    </li>
                </ul>
                <div class="ml-3">
                    <button onclick="location.href='sesion.php'" class="btn btn-secondary">Iniciar Sesión</button>
                    <button onclick="location.href='registro.php'" class="btn btn-secondary">Registrate</button>
                </div>
            </div>
        </div>
    </nav>
</header>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
