// Barra lateral con la hamburguesa//
function loadSidebar() {
  fetch('sidebar.html')
    .then(response => {
      if (!response.ok) throw new Error('Error al cargar la barra lateral');
      return response.text();
    })
    .then(data => {
      document.getElementById('sidebar-container').innerHTML = data;

      const hamburgerBtn = document.getElementById('hamburger-btn');
      const sidebar = document.getElementById('sidebar');
      if (hamburgerBtn && sidebar) {
        hamburgerBtn.addEventListener('click', () => {
          sidebar.classList.toggle('open');
        });
      }
    })
    .catch(error => console.error(error));
}

document.addEventListener('DOMContentLoaded', loadSidebar);