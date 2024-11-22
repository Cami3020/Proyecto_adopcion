document.addEventListener('DOMContentLoaded', function() {
    // Manejo de la navegación
    const navItems = document.querySelectorAll('.nav-item');
    
    navItems.forEach(item => {
        item.addEventListener('click', function(e) {
            // Remover clase active de todos los items
            navItems.forEach(nav => nav.classList.remove('active'));
            // Agregar clase active al item clickeado
            this.classList.add('active');
        });
    });

    // Manejo de los botones de acción
    const actionButtons = document.querySelectorAll('.action-button');
    
    actionButtons.forEach(button => {
        button.addEventListener('click', function() {
            const action = this.textContent;
            alert(`Acción: ${action}`);
        });
    });
});