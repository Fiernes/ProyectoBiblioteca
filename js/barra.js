// script.js
const navContainer = document.getElementById('nav-container');

      fetch('navegacion.html')
        .then(response => response.text())
        .then(data => {
          navContainer.innerHTML = data;
  })
  .catch(error => {
    console.error('Error al cargar la navegación:', error);
  });

