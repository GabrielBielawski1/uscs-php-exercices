<html>
    <head>
        <title>desafio</title>
        </head>
        <body>
    <form action="" method="get">
        Exibir até(maior que 2): <input type="number" name="number" /><br />
        <input type="submit" name="submit" value="Calcular" />
    </form> 
    <?php 
        $w=$_GET['number'];
        $x=1;
        $y=0;

        echo "0 1";
        for($v=1 ; $v<=$w-2 ; $v++){
         $z = $x + $y;
        echo " $z";

        $y = $x;
        $x = $z;
  } 
 ?>
 </body>
</html>