<?php
$a = array(6,6,4,4 );

 ?>


<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8">
    <title>Ejercicio con vectores</title>
    <link rel="stylesheet" href="estilo.css">
  </head>
  <body>
    <div class="container">

      <h2>suma de los numeros </h2>
      <?php echo "Numero ".$a[0]."" ?>
        <?php echo "Numero ".$a[1]."" ?>
          <?php echo "Numero ".$a[2]."" ?>
            <?php echo "Numero ".$a[3]."<br/>" ?>
      <?php

$a = array(6,6,4,4 );

$suma=($a[0]+$a[1]+$a[2]+$a[3]);
echo "<strong>La suma total  es: $suma</strong>";


       ?>
    </div>

  </body>
</html>
