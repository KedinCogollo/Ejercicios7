<?php
$d= array(5,8,4,10 );

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
      <h2>divison  de los numeros </h2>
      <?php echo "Numero ".$d[0]."" ?>
        <?php echo "Numero ".$d[1]."" ?>
          <?php echo "Numero ".$d[2]."" ?>
            <?php echo "Numero ".$d[3]."<br/>" ?>
      <?php

    $divi=($d[0]/$d[1]/$d[2]/$d[3]);
    echo "<strong>La divison  total  es : $divi</strong>";
 ?>

    </div>

  </body>
</html>
