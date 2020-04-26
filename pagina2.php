<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pagina 2</title>
  </head>
  <body>
    <?php
      echo $_POST ['nombre']."<br>";
      $cantidad = $_POST ['vendidos'];
      $total1 = $_POST ['total'];
      echo "Autos vendidos".$cantidad."<br>";
      echo "Precio total de autos".$total1."<br>";

      $salario = 450000;
      $pro = $cantidad*50000;
      $Venta = $total1*0.05;
      $salarioF = $salario + $pro + $Venta;

      echo "El salario del vendedor es: ".$salarioF."<br>";

     ?>
  </body>
</html>
