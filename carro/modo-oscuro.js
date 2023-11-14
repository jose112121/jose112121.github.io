document.addEventListener('DOMContentLoaded', function () {
    // Botón para cambiar al modo oscuro
    const botonModoOscuro = document.getElementById('modo-oscuro');
    // Manejador de eventos para cambiar al modo oscuro
    botonModoOscuro.addEventListener('click', activarModoOscuro);

    function activarModoOscuro() {
        // Cambia los estilos para el modo oscuro
        document.body.style.backgroundColor = '#000';
        document.body.style.color = '#fff';
    }
});
