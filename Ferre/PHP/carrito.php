<?php
session_start();
include("conexion.php");

if (!isset($_SESSION['cliente_id'])) {
    echo "Error: No estás logueado.";
    exit();
}

$id_cliente = $_SESSION['cliente_id'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $numero_tarjeta = substr($_POST['numero_tarjeta'], -4);

    if (!$numero_tarjeta) {
        echo "Error: Datos de tarjeta no recibidos.";
        exit();
    }

    $sql = "INSERT INTO ventas (id_cliente, tarjeta, estado) VALUES ('$id_cliente', '$numero_tarjeta', 'completado')";

    if ($conn->query($sql) === TRUE) {
        header("Location: ../index.html?compra=ok");
        exit();
    } else {
        echo "Error en la base de datos: " . $conn->error;
    }
} else {
    echo "Método no permitido";
}

$conn->close();
?>