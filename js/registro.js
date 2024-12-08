// Función para validar el formulario, asegurando que las contraseñas coincidan
function validateForm() {
    // Obtener los valores de las contraseñas
    var password = document.getElementById('contraseña').value;
    var confirmPassword = document.getElementById('confirmarContraseña').value;

    // Verificar si las contraseñas coinciden
    if (password !== confirmPassword) {
        // Usar SweetAlert2 para mostrar el error
        Swal.fire({
            icon: 'error',
            title: '¡Error!',
            text: 'Las contraseñas no coinciden. Por favor, verifique.',
            confirmButtonText: 'Aceptar',
            background: '#f8d7da', // Color de fondo (rojo claro)
            iconColor: '#dc3545' // Color del ícono (rojo)
        });

        // Prevenir el envío del formulario
        return false;
    }

    // Si las contraseñas coinciden, permitir el envío del formulario
    return true;
}

// Si tienes más validaciones en `registro.js`, asegúrate de incluirlas aquí

// Si hay más funciones que necesites agregar o actualizar, puedes hacerlo de la misma forma
