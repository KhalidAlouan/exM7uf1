
<?php
$i = 12;
$d = 12.00;
$c = "PHP";
$b=true;
$tipus_de_i = gettype( $i );
$tipus_de_d = gettype( $d );
$tipus_de_c = gettype( $c );
$tipus_de_b = gettype( $b );

$l= gettype($tipus_de_i);
$s= gettype($tipus_de_d);
$m= gettype($tipus_de_c);
$k= gettype($tipus_de_c);

echo "La variable \$i 
      conté el valor $i 
      i és del tipus $tipus_de_i <br>
      El valor de gettype de la variable i es: $l <br>";

echo "La variable \$d
      conté el valor $d
      i és del tipus $tipus_de_d <br>
      El valor de gettype de la variable d es: $s <br>";

echo "La variable \$c
      conté el valor $c
      i és del tipus $tipus_de_c <br>
      El valor de gettype de la variable c es: $m <br>";

echo "La variable \$b
      conté el valor $b
      i és del tipus $tipus_de_b <br>
      El valor de gettype de la variable b es: $k <br>";
?>

<!--Es para que no muestre el valor de la variable i-->
<!--Es del tipo integer-->
<!--Es para saber si una variable es de tipo Integer o String ...-->
