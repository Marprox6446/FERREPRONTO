document.addEventListener("DOMContentLoaded", function() {
    console.log("Página de información cargada correctamente.");
});

function mostrarVideo() {
    document.getElementById("videoModal").style.display = "flex";
}

function cerrarVideo() {
    let modal = document.getElementById("videoModal");
    let video = document.getElementById("videoPlayer");

    modal.style.display = "none";
    video.pause(); // Pausar el video al cerrar
    video.currentTime = 0; // Reiniciar el video
}
document.querySelectorAll(".nosotros li").forEach(item => {
    item.addEventListener("click", function () {
        let info = this.querySelector(".info");
        if (info) {
            info.style.display = info.style.display === "block" ? "none" : "block";
        }
    });
});
