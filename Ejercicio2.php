
<?php
$i = 12;
$d = 12.00;
$c = "PHP";
$b=true;
$tipus_de_i = gettype( $i );
$tipus_de_d = gettype( $d );
$tipus_de_c = gettype( $c );
$tipus_de_b = gettype( $b );
echo "La variable \$i 
      conté el valor $i 
      i és del tipus $tipus_de_i
      el valor de gettype es: $tipus_de_i <br>";

echo "La variable \$d
      conté el valor $d
      i és del tipus $tipus_de_d
      el valor de gettype es: $tipus_de_d <br>";

echo "La variable \$c
      conté el valor $c
      i és del tipus $tipus_de_c
      el valor de gettype es: $tipus_de_c <br>";

echo "La variable \$b
      conté el valor $b
      i és del tipus $tipus_de_b
      el valor de gettype es: $tipus_de_b <br>";
?>

<!--Es para que no muestre el valor de la variable i-->
<!--Es del tipo integer-->
<!--Es para saber si una variable es de tipo Integer o String ...-->
