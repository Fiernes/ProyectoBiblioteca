// Alternar entre modo edición y vista
function toggleEditMode() {
    const inputs = document.querySelectorAll('.editable');
    const editButton = document.getElementById('edit-button');
    const saveButton = document.getElementById('save-button');

    inputs.forEach(input => {
        input.disabled = !input.disabled;
    });

    editButton.style.display = editButton.style.display === 'none' ? 'block' : 'none';
    saveButton.style.display = saveButton.style.display === 'none' ? 'block' : 'none';
}

// Validar campos antes de guardar
function validateAndSave() {
    const nombreCompleto = document.getElementById('nombre-completo').value;
    const numeroCuenta = document.getElementById('numero-cuenta').value;
    const dni = document.getElementById('dni').value;
    const correo = document.getElementById('correo-electronico').value;
    const telefono = document.getElementById('numero-telefono').value;
    const nombreUsuario = document.getElementById('nombre-usuario').value;
    const telefonoPersonal = document.getElementById('telefono-personal').value;
    const direccion = document.getElementById('direccion').value;

    // Validar si algún campo está vacío
    if (!nombreCompleto || !numeroCuenta || !dni || !correo || !telefono || !nombreUsuario || !telefonoPersonal || !direccion) {
        alert('Todos los campos deben estar completos.');
        return;
    }

    // Validar formato de teléfono
    if (!validarTelefono(telefono)) {
        alert('El número de teléfono debe tener el formato XXXX-XXXX');
        return;
    }

    if (!validarTelefono(telefonoPersonal)) {
        alert('El número de teléfono personal debe tener el formato XXXX-XXXX');
        return;
    }

    // Guardar cambios si todo es válido
    toggleEditMode();
    alert('Los cambios se han guardado exitosamente.');
}

// Validar formato de número de teléfono
function validarTelefono(telefono) {
    const telefonoRegex = /^\d{4}-\d{4}$/;
    return telefonoRegex.test(telefono);
}
