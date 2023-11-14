document.addEventListener('DOMContentLoaded', function () {
    // Variables para el carrito y productos
    const carrito = document.querySelector('.carrito ul');
    const productos = document.querySelectorAll('.producto');
    const vaciarCarritoBtn = document.querySelector('.vaciar-carrito');

    // Agregar evento clic para botones "Agregar al carrito"
    productos.forEach(producto => {
        const agregarAlCarritoBtn = producto.querySelector('.agregar-al-carrito');
        agregarAlCarritoBtn.addEventListener('click', agregarProductoAlCarrito);
    });

    // Agregar evento clic para botón "Vaciar Carrito"
    vaciarCarritoBtn.addEventListener('click', vaciarCarrito);

    // Función para agregar un producto al carrito
    function agregarProductoAlCarrito(event) {
        const producto = event.target.closest('.producto');
        const nombreProducto = producto.querySelector('h2').textContent;
        const precioProducto = producto.querySelector('p').textContent;

        const nuevoItem = document.createElement('li');
        nuevoItem.innerHTML = `${nombreProducto} - ${precioProducto}`;
        carrito.appendChild(nuevoItem);

        actualizarTotal();
    }

    // Función para vaciar el carrito
    function vaciarCarrito() {
        while (carrito.firstChild) {
            carrito.removeChild(carrito.firstChild);
        }
        actualizarTotal();
    }

    // Función para actualizar el total del carrito
    function actualizarTotal() {
        const productosCarrito = carrito.querySelectorAll('li');
        let total = 0;

        productosCarrito.forEach(item => {
            const precio = parseFloat(item.textContent.split('$')[1]);
            total += precio;
        });

        const totalElement = document.querySelector('.carrito p');
        totalElement.textContent = `Total: $${total.toFixed(2)}`;
    }

    // const confirmarPagoBtn = document.querySelector('.confirmar-pago');
    // confirmarPagoBtn.addEventListener('click', confirmarPago);

    // // Función para confirmar el pago
    // function confirmarPago() {
    //     // Aquí puedes implementar la lógica para procesar el pago,
    //     // como enviar la información del carrito a un servidor, procesar la transacción, etc.
    //     // Puedes mostrar un mensaje de éxito o error según el resultado del pago.
    //     alert('¡Pago confirmado! Gracias por su compra.');
    // }


    const confirmarPagoBtn = document.querySelector('.confirmar-pago');
confirmarPagoBtn.addEventListener('click', () => {
    // Redirige al usuario a la página del formulario de confirmación
    window.location.href = '../formulario compra/index.html'; // Reemplaza 'confirmacion.html' con la URL real de tu formulario de confirmación.
});

});
