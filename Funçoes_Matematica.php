<?php 
  $x1 = 2.0;
  $y1 = 2.0;
  $x2 = 5.0;
  $y2 = 5.0;

  $x2x1 = $x2 - $x1;
  $y2y1 = $y2 - $y1;
  $x2x12 = pow($x2x1,2);
  $y2y12 = pow($y2y1,2);
  $xxyy = $x2x12 + $y2y12;
  $raizxy = sqrt($xxyy);
echo "A Média de Distância é Igual a " . number_format($raizxy,4);
?>