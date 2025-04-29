<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Catálogo_FerrePronto</title>
  <link rel="icon" href="../img/logo.ico">
  <link rel="stylesheet" href="../css/catalogo.css">
</head>
<body>
  <header class="menu">
    <div class="logo">
      <img src="../img/logo.png" alt="Logo de la Página">
    </div>
    <?php if (isset($_SESSION['nombre'])): ?>
      <div class="bienvenida">
        Bienvenido, <?php echo htmlspecialchars($_SESSION['nombre']); ?>
      </div>
    <?php endif; ?>
    <nav>
      <ul class="menu-items">
        <li><a href="../index.html">Inicio</a></li>
        <li><a href="../atencion.html">Atención al Clientes</a></li>
        <li><a href="../informacion.html">Información</a></li>
        <li><a href="../carrito.html">Pago</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle">Marcas</a>
          <ul class="dropdown-menu">
            <li><a href="#marca1"><img src="../img/truper.jpg" alt="Marca 1" class="dropdown-img"></a></li>
            <li><a href="#marca2"><img src="../img/urrea.png" alt="Marca 2" class="dropdown-img"></a></li>
            <li><a href="#marca3"><img src="../img/foset.jpg" alt="Marca 3" class="dropdown-img"></a></li>
            <li><a href="#marca4"><img src="../img/lion2.jpg" alt="Marca 4" class="dropdown-img"></a></li>
            <li><a href="#marca5"><img src="../img/volteck.png" alt="Marca 5" class="dropdown-img"></a></li>
            <li><a href="#marca6"><img src="../img/pretul.jpg" alt="Marca 2" class="dropdown-img"></a></li>
            <li><a href="#marca7"><img src="../img/iusa_2.jpg" alt="Marca 5" class="dropdown-img"></a></li>
            <li><a href="#marca8"><img src="../img/hermex.png" alt="Marca 5" class="dropdown-img"></a></li>
            <li><a href="#marca9"><img src="../img/tornillin.png" alt="Marca 5" class="dropdown-img"></a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </header>  

  <main>
    <section class="catalogo">
      <h2>Catálogo de Productos</h2>
      <?php include 'productos.php'; ?>
      <div class="productos-grid">
  </main>

  <footer>
    <div class="footer-container">
        <p>&copy; 2025 Ferrepronto. Todos los derechos reservados.</p>
        <div class="social-buttons">
            <a href="#" class="social-btn facebook" title="Facebook">🔵</a>
            <a href="#" class="social-btn whatsapp" title="WhatsApp">💚</a>
            <a href="#" class="social-btn twitter" title="Twitter">🐦</a>
        </div>
        <div class="additional-info">
            <p>Este es un apartado de información adicional. Aquí puedes agregar más detalles acerca de la empresa, servicios, o cualquier otro dato importante.</p>
        </div>
    </div>
</footer>

<script src="../js/catalogo.js"></script>

</body>
</html>
