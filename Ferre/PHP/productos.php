<?php
include("conexion.php");

$sql = "SELECT p.id_producto, p.imagen, p.nombre, p.precio, p.stock, p.id_categoria, m.nombre AS nombre_marca
        FROM productos p
        INNER JOIN marcas m ON p.id_marca = m.id_marca";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="producto">';
        
        if (!empty($row['imagen'])) {
            echo '<img src="data:image/jpeg;base64,' . base64_encode($row['imagen']) . '" alt="Imagen del producto" style="width:150px;height:auto;">';
        } else {
            echo '<img src="../img/error.png" alt="Sin imagen" style="width:150px;height:auto;">';
        }

        echo '<h3>' . $row['nombre'] . '</h3>';
        echo '<p class="precio">$' . number_format($row['precio'], 2) . ' MXN</p>';
        echo '<p class="stock">Stock: ' . $row['stock'] . '</p>';
        echo '<p>Marca: ' . $row['nombre_marca'] . '</p>';
        echo '<button class="btn-comprar" onclick="agregarAlCarrito(\'' . addslashes($row['nombre']) . '\', ' . $row['precio'] . ')">Añadir al carrito</button>';
        echo '</div>';
    }
} else {
    echo "No hay productos disponibles.";
}

$conn->close();
?>