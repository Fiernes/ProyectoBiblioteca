// script.js
const navContainers = document.querySelectorAll('.nav-container');

navContainers.forEach(navContainer => {
  fetch('navegacion.html')
    .then(response => response.text())
    .then(data => {
      navContainer.innerHTML = data;

      // Add event listeners or other JavaScript logic here, if needed
      // For example, to handle click events on navigation links:
      navContainer.addEventListener('click', (event) => {
        if (event.target.tagName === 'A') {
          // Handle the click event
          console.log('Link clicked:', event.target.href);
          // You can add more specific logic here, like redirecting to a new page
        }
      });
    })
    .catch(error => {
      console.error('Error fetching navigation:', error);
    });
});