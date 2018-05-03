<!DOCTYPE html>
<html>
   <head>

      <title>Sistema integral de mantenimiento ISSI</title>

      <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
      <link rel="stylesheet" href="assets/css/estilos.css"/>

   </head>
   <body>

      <?php require_once PATH_VIEW . '/widgets/navbar.php'; ?>
      <?php
         // Esta función inyecta la pagina según la ruta...
         echo $rutas->RouterOutlet();
      ?>

      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/funciones.js"></script>

   </body>
</html>
