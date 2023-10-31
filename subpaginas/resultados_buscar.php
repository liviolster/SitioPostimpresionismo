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
    <main>
<!-- NAV -->
<div class="bg-img-artistas">
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
            <a class="nav-link" href="./contacto.html">contacto</a>
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

<!-- MAIN -->
<div class="formBuscar">
<form action="resultados_buscar.php" method="post" style="margin-bottom: 40px">
  <label class="formBuscar" style="font-weight: 300; letter-spacing:5px;">Buscar artistas
  <input type="search" name="buscar" required placeholder="Buscar..." style="border-radius: var(--bs-border-radius);font-weight: 300; letter-spacing:5px;color: white; border-color: white;"/>
  <input class="formArtistas" type="submit" value="Enviar" style="background-color: #00000000; border-radius: var(--bs-border-radius);font-weight: 300; letter-spacing:5px; ">
  </label>
  </form>
</div>


<?php
	//Conecta con la base de datos, confirmo conexion
	include('conexion.php');

	//creo una variable buscar que va a guardar lo que la persona haya escrito en el buscador 
	$buscar = $_POST['buscar'];

	//genero una variable y busca adentro la de la base el nombre parecido a lo que el usuario escribio 
	//siempre tengo que hacer un querry para empezar a consultar, en este caso hice un select que es traer datos 
	$consulta = mysqli_query($conexion, "SELECT * FROM artistas WHERE nombre
	 LIKE '%$buscar%'");
?>
<article>
	<?php
	// este array va a ejecurar desde el comienzo al fin de la llave mientras 
	// pueda ir generando el segundo array 
	// la conidicion del while es mientras haya resultados 
	//como los datos que vienen estan desordenados tengo que hacerlo un array asociativo para que se ordenen 
		while($resultados=mysqli_fetch_assoc($consulta)) {
	?>
	
    <p>
    <?php	
//lo que va a pasar si se cumple la condicion es que va a imprimir el nombre apellido y su mail 
			echo $resultados['bio'] . " ";
	?>
    </p>
    <?php
		}

		//si termino de usarlo vacio el select --> porque guardaste toda la info en una variable y la tenes que dejar vacia 
		mysqli_free_result($consulta);
		//cierro la base 
		mysqli_close($conexion);

	?>
</article>

<!-- FOOTER -->
<div class="bg-img-2-artistas">
<footer class="footer-artistas">

        <a class="navbar-brand postFooter" href="#"> Post <br> <p class="impresionismoFoot"> Impresionismo </p></a>
<a href="https://www.instagram.com/post_impressionism_artists/?hl=en" target="_blank"> <img class="svg" src="../imagenes/instagram.svg" alt=""></a>
<a href="https://pin.it/4n1bxn0" target="_blank"> <img class="svg" src="../imagenes/pinterest.svg" alt=""></a>

</footer>
</div>
</main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/swiper@10.2.0/swiper-bundle.min.js"></script>
  </body>
</html>