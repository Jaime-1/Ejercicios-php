<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pagina 5</title>
  </head>
  <body>
    <?php
    echo $_POST ['nombre']."<br>";
    $clave1 = $_POST['clave'];
    $precio1 = $_POST['precio'];

    echo "La clave de descuento:".$clave1."<br>";
    echo "El precio original del articulo:".$precio1."<br>";

     if($clave1 = 1){
      $total=$precio1-($precio1)*10/100;
      echo "El precio con descuento:".$total."<br>";
     }
     else{
      if($clave1 = 2){
       $total=$precio1-($precio1)*20/100;
       echo "El precio con descuento:".$total."<br>";
      }
      else{
       echo "Esa clave no existe";
      }
     }
       ?>
  </body>
</html>
