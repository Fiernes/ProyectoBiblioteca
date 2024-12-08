// registro.js

function validateForm() {
    const contraseña = document.getElementById("contraseña").value;
    const confirmarContraseña = document.getElementById("confirmarContraseña").value;
    const errorMessage = document.getElementById("error-message");

    // Validación de contraseñas
    if (contraseña !== confirmarContraseña) {
        errorMessage.textContent = "Las contraseñas no coinciden. Por favor, verifica.";
        return false; // Previene el envío del formulario
    }

    errorMessage.textContent = ""; // Limpia el mensaje de error si no hay problemas
    return true; // Permite el envío del formulario
}
