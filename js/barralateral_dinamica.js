// Cargar la barra lateral 
document.addEventListener('DOMContentLoaded', function () {
    const sidebarContainer = document.getElementById('sidebar-container');
    if (sidebarContainer) {
        fetch('barra_lateral.html')
            .then(response => response.text())
            .then(data => {
                sidebarContainer.innerHTML = data;
            })
            .catch(error => console.error('Error al cargar la barra lateral:', error));
    }
});
