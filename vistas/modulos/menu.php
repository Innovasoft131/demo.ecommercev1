<?php

$servidor =  Ruta::ctrRutaServidor();

?>
<!--div class="navbar">
  <div class="logo">
    <img src="vistas/img/plantilla/logo.png" width="125px">
  </div>
  <nav>
    <ul id="menu-items">
      <li><a href="#">Inicio</a></li>
      <li><a href="#">Mujer</a></li>
      <li><a href="#">Niños</a></li>
      <li><a href="#">Hombres</a></li>
      <li><a href="#">Pedidos Personalizados</a></li>
      <li><a href="#">Cotización</a></li>
      <li><a href="#">Iniciar sesión</a></li>
    </ul>
  </nav>
  <img src="vistas/img/plantilla/cart.png" width="30px" height="30px">
  <img src="vistas/img/plantilla/menu.png" class="icono-menu">
</div -->

<header class="navbar">
  <a href="#" class="logo" ><img src="<?php echo $url ?>vistas/img/plantilla/logo.png" width="100px"></a>
  <div class="toggle" onClick="toggleMune();"></div>
    <ul class="menu-items">
      <li><a href="<?php echo $url; ?>inicio">Inicio</a></li>
      <li><a href="<?php echo $url; ?>productos/1">Productos</a></li>
      <li><a href="<?php echo $url; ?>personalizados">Pedidos Personalizados</a></li>
      <li><a href="<?php echo $url; ?>cotizacion">Cotización</a></li>
      <!-- li><a href="<?php /* echo $url; */ ?>login">Iniciar sesión</a></li -->
      <!-- li><a href="<?php echo $url; ?>carrito"><img src="<?php /* echo $url */ ?>vistas/img/plantilla/cart.png" width="20px" height="20px"></a></li -->
    </ul>
    
</header>
