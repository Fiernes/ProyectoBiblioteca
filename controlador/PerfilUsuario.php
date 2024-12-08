<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    // Si no hay sesión, redirigir al login
    header("Location: Login.html");
    exit();
}

// El archivo PerfilUsuario.php ahora manejará la lógica de la sesión
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <link rel="stylesheet" href="css/pUphp.css">
    <link rel="icon" href="./imagenes/imagen1.png" type="gif">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        // Alternar entre modo de edición y modo de visualización
        function toggleEditMode() {
            const inputs = document.querySelectorAll(".editable");
            const editButton = document.getElementById("edit-button");
            const saveButton = document.getElementById("save-button");

            if (editButton.style.display !== "none") {
                // Activar modo de edición
                inputs.forEach(input => input.disabled = false);
                editButton.style.display = "none";
                saveButton.style.display = "inline-block";
            } else {
                // Desactivar modo de edición
                inputs.forEach(input => input.disabled = true);
                editButton.style.display = "inline-block";
                saveButton.style.display = "none";
            }
        }
    </script>
</head>
<body>
    <nav>
        <img src="./imagenes/logo.png" alt="logo" style="width: 70px; height: auto;">
        <ul>
            <li><a href="menu.html" class="inicio">Inicio</a></li>
            <li><a href="PerfilUsuario.php" class="personal">Área personal</a></li>
            <li><a href="Nosotro.html" class="sobre">Sobre nosotros</a></li>
        </ul>
        <div class="search">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" placeholder="search">
        </div>
        <div class="icons">
            <a href="carritocom.html" class="boton-carrito">
                <i class="fa-sharp fa-solid fa-cart-shopping"></i>
            </a>
            <i class="fa-solid fa-message"></i>
            <a href="PerfilUsuario.php" style="text-decoration: none; color: white;">
                <i class="fa-solid fa-circle-user"></i>
            </a>
        </div>
    </nav>

    <!-- Contenido principal del perfil de usuario -->
    <div class="perfil-usuario-contenedor">
        <div class="perfil-informacion">
            <h1>Perfil de Usuario</h1>
            <label><strong>Nombre Completo:</strong>
                <input type="text" value="Bruce Benito Wayne Martinez" disabled>
            </label>
            <label><strong>Número de Cuenta:</strong>
                <input type="text" value="20240901211"  disabled>
            </label>
            <label><strong>DNI:</strong>
                <input type="text" value="12345678"  disabled>
            </label>
            <label><strong>Correo Electrónico:</strong>
                <input type="email" value="tumurcielaguito1915@goticaspace.com"  disabled>
            </label>
            <label><strong>Número de Teléfono:</strong>
                <input type="text" value="9956-5326" class="editable" disabled>
            </label>
            <label><strong>Nombre de Usuario:</strong>
                <input type="text" value="Batman_Wayne" class="editable" disabled>
            </label>
            <label><strong>Teléfono Personal:</strong>
                <input type="text" value="9876-5432" class="editable" disabled>
            </label>
            <label><strong>Dirección:</strong>
                <input type="text" value="Ciudad Gótica, Mansión Wayne" class="editable" disabled>
            </label>
            <button id="edit-button" class="boton-editar" onclick="toggleEditMode()">Editar Perfil</button>
            <button id="save-button" class="boton-editar" onclick="toggleEditMode()" style="display: none;">Guardar Cambios</button>
            <button class="boton-volver">Volver</button>
        </div>

        <div class="perfil-historial">
            <img src="imagenes/logpro.jpg" alt="Foto de usuario" class="perfil-avatar">
            <h2>Bruce Wayne</h2>
            <h3>Historial</h3>
            <p>Libros prestados: 23</p>
            <p>Multas: 0</p>
            <p>Préstamos activos: 2</p>
            <button class="boton-historial" onclick="window.location.href='historialUsuario.html'">Historial completo</button>
        </div>
    </div>
</body>
</html>
