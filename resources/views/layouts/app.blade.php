<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>Mi primer sitio Dinámico</title>
    <meta name="description" content="Demostracion de Laravel">
    <meta name="author" content="Ervin A. Echeverria Pulido">
    <!-- <link rel="stylesheet" href="css/styles.css"> -->
  </head>
<body>
  <!-- @section('barralateral')
    Esta es la barra lateral principal.
   @show -->
  <div class="container">
    @yield('contenido')
  </div>
  <!-- <script src="js/scripts.js"></script> -->
</body>
</html>
