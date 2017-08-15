<?php
$t= array(10,23,8,19 );

 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilo.css">
    <title>Ejercicio con vectores</title>
  </head>
  <body>
    <div class="container">
      <h2> la resta de los numeros </h2>
      <?php echo "Numero ".$t[0]."" ?>
        <?php echo "Numero ".$t[1]."" ?>
          <?php echo "Numero ".$t[2]."" ?>
            <?php echo "Numero ".$t[3]."<br/>" ?>
      <?php

    $to=($t[0]-$t[1]-$t[2]-$t[3]);
    echo "<strong>a resta  total  es : $to</strong>";
 ?>

    </div>

  </body>
</html>
