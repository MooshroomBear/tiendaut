<?php
 include('assets/data/conexionreg.php');
 $obj = new Conexion;
 $res = $obj->buscarProducto();
 $temp = array();
 $temp = $res;
 print("Id Producto:" . $temp[2]['id_producto'] . '<br>');
 print("Nombre:" . $temp[2]['nombre_producto'] . '<br>');
 print("Precio Venta:" . $temp[2]['precio_venta'] . '<br>');
 print("<img src= " . $temp[2]['url_img'] . ' width="150">');

?>
 <!DOCTYPE html>
 <html lang="es">
 <head>
 <meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="assets/css/cssprincipal/mystyles.css">
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/boot
strap/4.3.1/css/bootstrap.min.css" integrity="sha384-
ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigi
n="anonymous">
 <!-- Estilos personalizados -->
 <link rel="stylesheet" href="assets/css/estilos.css">
 <title>Página principal</title>
 </head>
 <body>
 <header id="header">
 <nav class="navbar navbar-default navbar-expand-lg">
 <div class="container">
 <a class="navbar-brand" href="index.html">
 <img src="assets/img/logo.PNG" width="150" alt="">
 </a>
 <!-- .navbar-brand -->
 <button class="navbar-toggler" type="button" datatoggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" ariaexpanded="false" aria-label="Toggle navigation">
 <span class="navbar-toggler-icon"></span>
 </button>
 <div class="collapse navbar-collapse" id="navbarNav">
 <ul class="nav navbar-nav ml-auto">
 <li class="nav-item active">
 <a class="nav-link linkmenu" href="index.html">Inicio <span class="sr-only">(current)</span></a>
 </li>
<li class="nav-item">
 <a class="nav-link linkmenu" href="#">Acerca</a>
 </li>
 <li class="nav-item">
 <a class="nav-link linkmenu" href="#">Características</a>
 </li>
<!--
 <li class="nav-item">
 <a class="nav-link linkmenu" href="producto.html">Producto</a>
 </li>
-->
 <li class="nav-item">
 <a class="nav-link linkmenu" href="#">Testimonios</a>
 </li>
 <li class="nav-item">
 <a class="nav-link linkmenu" href="#">FAQ</a>
 </li>
<li class="nav-item">
 <a class="nav-link linkmenu" href="contacto.html">Contacto</a>
 </li>
 </ul>
 </div>
 <!-- .collapse -->
 </div>
 <!-- .container -->
 </nav>
 <!-- .navbar -->
 </header>
 <!-- header -->
 <section id="producto">
 <div class="container">
 <div class="row justify-content-md-center espacio-row">
 <div class="col-md-6">
 <h1>Producto</h1>
 <p>
 Lorem ipsum dolor sit amet, consectetur adipisci
ng elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
 </p>
 </div>
 </div>
 <!--</div>
 <div class="container borde-capa">-->
 <div class="row justify-content-md-center espacio-row">
 <div class="col-md-3">
 <img src="assets/img/watch/watch4.PNG" class="imgfluid" width="250" alt="">
 <p><strong><?php echo $temp[0]['nombre_producto']; ?></strong></p>
 <p><strong>$81</strong></p>
 <button type="button" class="btn btn-outlinelight">Comprar</button>
 </div>
 <div class="col-md-3">
 <img src="assets/img/watch/watch1.PNG" class="imgfluid" width="250" alt="">
 <p><strong><?php echo $temp[1]['nombre_producto']; ?></strong></p>
 <p><strong>$75</strong></p>
 <button type="button" class="btn btn-outlinelight">Comprar</button>
 </div>
 <div class="col-md-3">
 <img src="assets/img/watch/watch5.PNG" class="imgfluid" width="250" alt="">
 <p><strong><?php echo $temp[2]['nombre_producto'];?>
</strong></p>
 <p><strong>$69</strong></p>
 <button type="button" class="btn btn-outlinelight">Comprar</button>
 </div>
 </div>
 </div>
 </section>
 <footer id="footer">
 <div class="container">
 <div class="row justify-content-md-center">
 <div class="col-md-8">
 <p>Copyright © 2020 SMARTWATCH | Todos los derechos
reservados </p>
 </div>
 </div>
 </div>
 </footer>
 <!-- Optional JavaScript -->
 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 <script src="https://code.jquery.com/jquery3.3.1.slim.min.js" integrity="sha384-
q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigi
n="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7
/umd/popper.min.js" integrity="sha384-