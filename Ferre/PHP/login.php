<?php
session_start();

include("conexion.php");

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$email = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM clientes WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows === 1) {
    $cliente = $resultado->fetch_assoc();
    
    if (password_verify($password, $cliente['contraseña_hash'])) {
        $_SESSION['cliente_id'] = $cliente['id_cliente'];
        $_SESSION['nombre'] = $cliente['nombre'];
        header("Location: catalogo.php");
        exit();
    } else {
        echo "<script>
            alert('Contraseña incorrecta');
            window.location.href='../login.html';
        </script>";
    }
} else {
    echo "<script>
        alert('No se encontró un usuario con ese correo');
        window.location.href='../login.html';
    </script>";
}

$stmt->close();
$conn->close();
?>
