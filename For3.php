<?php
$valor = 4;
$valor2 = $valor; 
for ($i=$valor; $i > 1 ; $i--) { 
    $valor2 -= 1;
    $valor *= $valor2;
}
echo "$valor"
?>