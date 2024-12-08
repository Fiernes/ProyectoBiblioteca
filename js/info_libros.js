function toggleDetails(button) {
  const details = button.nextElementSibling; 
  if (details.classList.contains('visible')) {
    details.classList.remove('visible');
    button.textContent = 'Ver más'; 
  } else {
    details.classList.add('visible');
    button.textContent = 'Ver menos'; 
  }
}
