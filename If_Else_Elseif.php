<?php
$a = 60;
$b = 50;
$c = 40;
$equilatero = $a+$b+$c;

if ($a != $c && $b == $a) {
    echo "Triangulo Isoceles";
}elseif ($equilatero / 3 == $a) {
    echo "Triangulo Equilatero";
}else{
    echo "Triangulo Escaleno";
}
?>