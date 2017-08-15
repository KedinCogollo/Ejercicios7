<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio con vectores</title>
    <link rel="stylesheet" href="estilo.css">
  </head>
  <body>
    <div class="container">
      <h2>Promedio</h2>
<?php

$i = array(6,4,5,6,7,8,9);
$p=($i[0]+$i[1]+$i[2]+$i[3]+$i[4]+$i[5]+$i[6])/7;

echo "El promedio es : $p <br/>";
if ($p>6) {

  echo "<strong>Aprovado</strong>";
}
else {
  echo "<strong>No aprovado</strong>";
}
 ?>

    </div>

  </body>
</html>
