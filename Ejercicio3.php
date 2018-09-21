<?php
$d = new DateTime();
$tipus_de_d = gettype( $d );
$classe_de_d=get_class($d);
echo "La variable \$d 
      conté el valor " . $d->format( "d/m/Y") .
      " i és del tipus $tipus_de_d <br>
      Tipo de clase: $classe_de_d";
?>

<!--Es del tipo objeto-->
<!--Devuelve la fecha en formato Dia/Mes/Año-->
<!--No ha funcionado porque la variable es de tipo objeto-->
