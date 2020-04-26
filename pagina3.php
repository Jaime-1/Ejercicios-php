<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pagina 3</title>
  </head>
  <body>
    <?php
    echo $_POST ['nombre']."<br>";
    $peso1 = $_POST ['peso'];
    $altura1 = $_POST ['altura'];

    echo "Peso".$peso1."<br>";
    echo "Altura".$altura1."<br>";
    $promedio = ($peso1)/$altura1*$altura1;
    echo "Promedio".$promedio."<br>";

    if($promedio<18.5){
 echo "debajo del peso";
}
else{
 if($promedio <24.9){
  echo "saludable";
 }
 else{
  if($promedio<29.9){
   echo "sobrepeso";
  }
  else{
   if($promedio<39.9){
    echo "obeso";
   }
   else{
    echo "obesidad morbida";
   }
  }
 }
}
     ?>
  </body>
</html>
