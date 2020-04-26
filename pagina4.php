<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pagina 4</title>
  </head>
  <body>
    <?php
    $hospital1 = $_POST ['hospital'];
    echo "Presupuesto del hospital:".$hospital1."<br>";

    $ginecologia = $hospital1*40/100;
    $traumatologia = $hospital1*30/100;
    $pediatria = $hospital1*30/100;

    echo "ginecologia:".$ginecologia."<br>";
    echo "traumatologia:".$traumatologia."<br>";
    echo "pediatria:".$pediatria."<br>";
     ?>
  </body>
</html>
