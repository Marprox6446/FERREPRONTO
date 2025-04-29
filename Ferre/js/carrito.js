document.addEventListener("DOMContentLoaded", () => {

    const urlParams = new URLSearchParams(window.location.search);
    if (urlParams.get('compra') === 'ok') {
        alert("¡Gracias por tu compra! 🛠️");
        localStorage.removeItem("carrito");
    }

    const carritoContenido = document.querySelector(".carrito-contenido");
    const carritoTotal = document.querySelector(".carrito-total");
    const botonVaciar = document.querySelector(".vaciar-carrito");
    const botonComprar = document.querySelector(".comprar-ahora");

    let carritoProductos = JSON.parse(localStorage.getItem("carrito")) || [];

    function actualizarCarrito() {
        carritoContenido.innerHTML = "";
        let total = 0;

        carritoProductos.forEach((producto, index) => {
            total += producto.precio * producto.cantidad;
            const item = document.createElement("div");
            item.classList.add("carrito-item");
            item.innerHTML = `
                <p>${producto.nombre} - $${producto.precio} x ${producto.cantidad}</p>
                <button class="quitar-item" data-index="${index}">❌</button>
            `;
            carritoContenido.appendChild(item);
        });

        carritoTotal.textContent = `Total: $${total.toFixed(2)} MXN`;

        localStorage.setItem("carrito", JSON.stringify(carritoProductos));
    }

    carritoContenido.addEventListener("click", (e) => {
        if (e.target.classList.contains("quitar-item")) {
            const index = e.target.dataset.index;
            carritoProductos.splice(index, 1);
            actualizarCarrito();
        }
    });

    botonVaciar.addEventListener("click", () => {
        carritoProductos = [];
        actualizarCarrito();
    });

    botonComprar.addEventListener("click", () => {
        const nombre = document.getElementById("nombre-tarjeta").value.trim();
        const numero = document.getElementById("numero-tarjeta").value.trim();
        const fecha = document.getElementById("fecha-expiracion").value.trim();
        const cvv = document.getElementById("cvv").value.trim();
    
        if (nombre && numero && fecha && cvv) {
            if (carritoProductos.length === 0) {
                alert("¡Tu carrito está vacío!");
                return;
            }
    
            document.getElementById('form-comprar').submit();
        } else {
            alert("Por favor completa todos los datos de la tarjeta");
        }
    });
    actualizarCarrito();
});