<!DOCTYPE html>
<html lang= "es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="estilos.css">
  </head>
  <body>
    <?php
    $menu = array('Inicio','Blog','Videos','Contacto');
     ?>
     <ul>
     <?php
     foreach ($menu as $item) {
       echo "<li><a href=>".$item."</a></li>";
     }
      ?>
    </ul>
  </body>
</html>
