<?php
        function F() {
            static $num;
            $num = $num + 1;
            return $num;
        }
        for ($i=1; $i<=100; $i++)
            echo " ".F();




?>