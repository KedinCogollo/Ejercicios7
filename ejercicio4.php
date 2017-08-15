<?php
$n = array(1,2,5,7 );

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
      <h2>multiplicacion de los numeros </h2>
      <?php echo "Numero ".$n[0]."" ?>
        <?php echo "Numero ".$n[1]."" ?>
          <?php echo "Numero ".$n[2]."" ?>
            <?php echo "Numero ".$n[3]."<br/>" ?>
      <?php

    $multi=($n[0]*$n[1]*$n[2]*$n[3]);
    echo "<strong>La multiplicacion total  es : $multi</strong>";
 ?>

    </div>

  </body>
</html>
