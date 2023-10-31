<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Postimpresionismo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/index.css"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10.2.0/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

</head>
  <body>
<!-- NAV -->
<div class="bg-img-contacto">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="../index.html"> Post <br> <p class="impresionismo"> Impresionismo </p></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="./historia.html">historia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./artistas.html">artistas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./obras.html">obras</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./obrasDestacadas.html">obras destacadas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">contacto</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./formRegistro.html">registrate</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./formLogin.html"><span class="material-symbols-outlined">
              person
              </span></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>

<?php

if(isset($_SESSION['nombre']) and isset($_SESSION['apellido']) ){
	
echo "Hola! ";
echo $_SESSION['nombre']." ";
echo $_SESSION['apellido'];
echo "<p><img src='imagenes/cuadro.jpg' /></p>";
echo "<a href='salir.php'>Cerrar sesion</a>";

	
}else{
	echo "Solo usuarios registrados...";
	include("formLogin.html");
}
?>

<footer>
    <div class="bg-img-2">
        <a class="navbar-brand postFooter" href="#"> Post <br> <p class="impresionismoFoot"> Impresionismo </p></a>
<a href="https://www.instagram.com/post_impressionism_artists/?hl=en" target="_blank"> <img class="svg" src="../imagenes/instagram.svg" alt=""></a>
<a href="https://pin.it/4n1bxn0" target="_blank"> <img class="svg" src="../imagenes/pinterest.svg" alt=""></a>

    </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/swiper@10.2.0/swiper-bundle.min.js"></script>
  </body>
</html>