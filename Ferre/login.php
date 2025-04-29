<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Ferretería</title>
    <link rel="icon" href="img/logo.ico">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="background-overlay"></div>
    <div class="login-wrapper">
        <div class="login-box">
            <h2>Iniciar Sesión</h2>
            <form action="PHP/login.php" method="POST">
                <div class="input-box">
                    <input type="text" id="username" name="username" required>
                    <label>Correo electrónico</label>
                    <span class="icon">👤</span>
                </div>
                <div class="input-box">
                    <input type="password" id="password" name="password" required>
                    <label>Contraseña</label>
                    <span class="icon">🔒</span>
                </div>
                <div class="remember-me">
                    <input type="checkbox" id="remember">
                    <label style="color: white;" for="remember">Recuérdame</label>
                </div>
                <button type="submit" class="login-btn">Ingresar</button>
                <p class="error-message" id="error-message"></p>
                <p class="register-link" style="color: white;">¿No tienes cuenta?  
                    <a href="register.html">Regístrate</a>
                </p>                
                <div class="social-login">
                    <p style="color: white;">O inicia sesión con:</p>
                    <button type="button" class="social-btn google">🔴 Google</button>
                    <button type="button" class="social-btn facebook">🔵 Facebook</button>
                </div>
            </form>
        </div>
    </div>
    <a href="index.html" class="floating-btn">🔥 Regresar al menú</a>
</body>
</html>

