<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pagina1</title>
  </head>
  <body>
    <?php
    $par1 = $_POST ['parcial1'];
    $par2 = $_POST ['parcial2'];
    $par3 = $_POST ['parcial3'];
    $exa = $_POST ['examen'];
    $tra = $_POST ['trabajo'];

    $parpro = ($par1 + $par2 + $par3)/3*35/100;
    $exapro = ($exa)*35/100 ;
    $trapro = ($tra)*30/100;
    $definitiva = ($parpro + $exapro + $trapro)

      ?>
      <?php echo "La definitiva es:".$definitiva; ?>
  </body>
</html>
