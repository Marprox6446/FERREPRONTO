function copiarCodigo(id) {
    const codigo = document.getElementById(id).textContent;
    navigator.clipboard.writeText(codigo).then(() => {
        alert('Código copiado: ' + codigo);
    });
}

const descuentos = {
    descuento1: {
        title: "30% de Descuento",
        text: "Aprovecha un 30% de descuento en todos los productos!",
        img: "img/promocion_2.gif"
    },
    descuento2: {
        title: "50% de Descuento y Envío Gratis",
        text: "Envío gratis en compras por más de $1000!",
        img: "img/promocion.gif"
    },
    descuento3: {
        title: "Compra 1 y Llévate 2",
        text: "Compra un artículo y recibe otro totalmente gratis!",
        img: "img/promocion_3.gif"
    },
    descuento4: {
        title: "Descuento Exclusivo VIP",
        text: "Solo para nuestros mejores clientes, descuentos sorpresa en tu compra!",
        img: "img/descuento_1.gif"
    },
    descuento5: {
        title: "Recompensas por Compras",
        text: "Acumula puntos con cada compra y canjéalos por grandes premios!",
        img: "img/descuento_2.gif"
    },
    descuento6: {
        title: "Promo Relámpago",
        text: "¡Descuentos especiales cada 24 horas! No te lo pierdas!",
        img: "img/desceuntos_3.gif"
    }
};

document.querySelectorAll('.btn-descuento').forEach(button => {
    button.addEventListener('click', function() {
        const descuento = descuentos[this.dataset.descuento];
        document.getElementById('modal-title').innerText = descuento.title;
        document.getElementById('modal-text').innerText = descuento.text;
        document.getElementById('modal-img').src = descuento.img;
        document.getElementById('modal').style.display = 'flex';
    });
});

document.querySelector('.close').addEventListener('click', function() {
    document.getElementById('modal').style.display = 'none';
});
