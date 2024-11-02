// Función para eliminar un libro del carrito
document.addEventListener("DOMContentLoaded", function() {
    const deleteButtons = document.querySelectorAll(".btn-danger");
    const totalBooks = document.querySelector(".total p strong");

    deleteButtons.forEach(button => {
        button.addEventListener("click", function() {
            // Encuentra la fila del libro y elimínala
            const row = button.closest("tr");
            const quantity = parseInt(row.querySelector("td:nth-child(7)").textContent);
            
            row.remove(); // Eliminar la fila

            // Actualizar el total de libros
            updateTotal(-quantity);
        });
    });
});

// Función para actualizar el total de libros en la tabla
function updateTotal(change) {
    const totalBooksText = document.querySelector(".total p strong");
    let currentTotal = parseInt(totalBooksText.textContent);
    totalBooksText.textContent = currentTotal + change;
}
