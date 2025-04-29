function registerUser() {
    let newUsername = document.getElementById("new-username").value;
    let email = document.getElementById("email").value;
    let newPassword = document.getElementById("new-password").value;
    let errorMessage = document.getElementById("register-error-message");

    errorMessage.textContent = "";

    if (newUsername === "" || email === "" || newPassword === "") {
        errorMessage.textContent = "Por favor, completa todos los campos.";
        errorMessage.style.color = "red";
        return;
    }

    // Simulamos guardar los datos en localStorage
    let users = JSON.parse(localStorage.getItem("users")) || [];
    
    // Verificar si el usuario ya existe
    if (users.some(user => user.username === newUsername)) {
        errorMessage.textContent = "El usuario ya existe.";
        errorMessage.style.color = "red";
        return;
    }

    // Guardar nuevo usuario
    users.push({ username: newUsername, email: email, password: newPassword });
    localStorage.setItem("users", JSON.stringify(users));

    errorMessage.textContent = "Registro exitoso. Redirigiendo...";
    errorMessage.style.color = "green";

    setTimeout(() => {
        window.location.href = "index.html";
    }, 1500);
}
