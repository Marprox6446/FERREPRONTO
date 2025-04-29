<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM clientes WHERE email = ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Error en la preparación: " . $conn->error);
    }

    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultado = $stmt->get_result();

    if ($resultado->num_rows > 0) {
        echo "<script>
            alert('El correo electrónico ya está registrado.');
            window.location.href='register.html';
        </script>";
    } else {
        $password_hash = password_hash($password, PASSWORD_DEFAULT);

        $sql_insert = "INSERT INTO clientes (nombre, apellido, email, telefono, direccion, contraseña_hash) 
                       VALUES (?, ?, ?, ?, ?, ?)";
        $stmt_insert = $conn->prepare($sql_insert);

        if (!$stmt_insert) {
            die("Error en la preparación de inserción: " . $conn->error);
        }

        $stmt_insert->bind_param("ssssss", $nombre, $apellido, $email, $telefono, $direccion, $password_hash);

        if ($stmt_insert->execute()) {
            echo "<script>
                alert('Registro exitoso. Ahora puedes iniciar sesión.');
                window.location.href='../login.html';
            </script>";
        } else {
            echo "<script>
                alert('Error al registrar el usuario. Intenta de nuevo.');
                window.location.href='../register.html';
            </script>";
        }

        $stmt_insert->close();
    }

    $stmt->close();
}

$conn->close();
?>