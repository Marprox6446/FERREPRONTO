<?php
// Configurar la cabecera para que el navegador entienda que es JSON
header('Content-Type: application/json');

// Definir los descuentos
$descuentos = [
    ["id" => "descuento1", "texto" => "30% de Descuento"],
    ["id" => "descuento2", "texto" => "50% de Descuento y Envío Gratis"],
    ["id" => "descuento3", "texto" => "Compra 1 y Llévate 2"],
    ["id" => "descuento4", "texto" => "Descuento Exclusivo VIP"],
    ["id" => "descuento5", "texto" => "Recompensas por Compras"],
    ["id" => "descuento6", "texto" => "Promo Relámpago"]
];

// Enviar el JSON
echo json_encode($descuentos);
?>
