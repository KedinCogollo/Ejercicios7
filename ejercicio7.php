<?php
$i= array(11,32,6,1,8,3);
$c=array(3,8,1,6,32,11);


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
       <h2> la suma  de los numeros </h2>
      <?php echo "  Numero   ".$i[0]."" ?>
      <?php echo "  Numero   ".$i[1]."" ?>
      <?php echo "  Numero   ".$i[2]."" ?>
      <?php echo "  Numero   ".$i[3]."" ?>
      <?php echo "  Numero   ".$i[4]."" ?>
      <?php echo "  Numero   ".$i[5]."<br/>" ?>
    <?php

    $to=($i[0]+$i[1]+$i[2]+$i[3]+$i[4]+$i[5]);
    echo "<strong>la suma total  es : $to</strong><br/>";
echo "---------------------------------------------------------------------";
 ?>

 <h2> la suma  de los numeros al reves </h2>
<?php echo "  Numero   ".$c[0]."" ?>
<?php echo "  Numero   ".$c[1]."" ?>
<?php echo "  Numero   ".$c[2]."" ?>
<?php echo "  Numero   ".$c[3]."" ?>
<?php echo "  Numero   ".$c[4]."" ?>
<?php echo "  Numero   ".$c[5]."<br/>" ?>
<?php

$w=($c[0]+$c[1]+$c[2]+$c[3]+$c[4]+$c[5]);
echo "<strong>la suma total  es : $w</strong><br/>";
echo "---------------------------------------------------------------------";
?>


 <h2> la resta  de los numeros </h2>
<?php echo "  Numero   ".$i[0]."" ?>
<?php echo "  Numero   ".$i[1]."" ?>
<?php echo "  Numero   ".$i[2]."" ?>
<?php echo "  Numero   ".$i[3]."" ?>
<?php echo "  Numero   ".$i[4]."" ?>
<?php echo "  Numero   ".$i[5]."<br/>" ?>
<?php

$s=($i[0]-$i[1]-$i[2]-$i[3]-$i[4]-$i[5]);
echo "<strong>la resta total  es : $s</strong><br/>";
echo "---------------------------------------------------------------------";
?>



 <h2> la resta  de los numeros al revez </h2>
<?php echo "  Numero   ".$c[0]."" ?>
<?php echo "  Numero   ".$c[1]."" ?>
<?php echo "  Numero   ".$c[2]."" ?>
<?php echo "  Numero   ".$c[3]."" ?>
<?php echo "  Numero   ".$c[4]."" ?>
<?php echo "  Numero   ".$c[5]."<br/>" ?>
<?php

$x=($c[0]-$c[1]-$c[2]-$c[3]-$c[4]-$c[5]);
echo "<strong>la resta total  es : $x</strong><br/>";
echo "---------------------------------------------------------------------";
?>
<h2> la divison de los numeros </h2>
<?php echo "  Numero   ".$i[0]."" ?>
<?php echo "  Numero   ".$i[1]."" ?>
<?php echo "  Numero   ".$i[2]."" ?>
<?php echo "  Numero   ".$i[3]."" ?>
<?php echo "  Numero   ".$i[4]."" ?>
<?php echo "  Numero   ".$i[5]."<br/>" ?>
<?php

$r=($i[0]/$i[1]/$i[2]/$i[3]/$i[4]/$i[5]);
echo "<strong>la resta total  es : $r</strong><br/>";
echo "---------------------------------------------------------------------";
?>



<h2> la divison   de los numeros al revez </h2>
<?php echo "  Numero   ".$c[0]."" ?>
<?php echo "  Numero   ".$c[1]."" ?>
<?php echo "  Numero   ".$c[2]."" ?>
<?php echo "  Numero   ".$c[3]."" ?>
<?php echo "  Numero   ".$c[4]."" ?>
<?php echo "  Numero   ".$c[5]."<br/>" ?>
<?php

$p=($c[0]/$c[1]/$c[2]/$c[3]/$c[4]/$c[5]);
echo "<strong>la resta total  es : $p</strong><br/>";
echo "---------------------------------------------------------------------";
?>

 <h2> el modulo de los numeros </h2>
<?php echo "  Numero  ".$i[0]."" ?>
<?php echo "  Numero   ".$i[1]."" ?>
<?php echo "  Numero   ".$i[2]."" ?>
<?php echo "  Numero   ".$i[3]."" ?>
<?php echo "  Numero   ".$i[4]."" ?>
<?php echo "  Numero   ".$i[5]."<br/>" ?>
<?php

$m=($i[0]%$i[1]%$i[2]%$i[3]%$i[4]%$i[5]);
echo "<strong>el modulo total  es : $m</strong><br/>";
echo "---------------------------------------------------------------------";
?>



 <h2> el modulo de los numeros al reves </h2>
<?php echo "   Numero   ".$c[0]."" ?>
<?php echo "  Numero   ".$c[1]."" ?>
<?php echo "  Numero   ".$c[2]."" ?>
<?php echo "  Numero   ".$c[3]."" ?>
<?php echo "  Numero   ".$c[4]."" ?>
<?php echo "  Numero   ".$c[5]."<br/>" ?>
<?php

$y=($c[0]%$c[1]%$c[2]%$c[3]%$c[4]%$c[5]);
echo "<strong>el modulo total  es : $y</strong><br/>";
echo "---------------------------------------------------------------------";
?>




    </div>

  </body>
</html>
