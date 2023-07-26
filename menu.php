
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/icono.jpg">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Reto Vehiculos</title>
</head>
<body>
<div class="jumbotron text-center">
  <h2>Fabrica de vehículos</h2>
  <p>Menú de opciones</p>
  <?php
     require_once "banner.php";
  ?>
  
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">
      <img src="images/coche.png" alt="Logo" style="width:40px;">
    </a>
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav">
       
        <li class="nav-item">
          <a class="nav-link" href="ejercicio1.php">presentación del reto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./coche/index.html">Recorrido en automóvil</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Bicileta</a>
        </li>
       
      </ul>
    </div>
  </nav>
</div>



</body>






</html>