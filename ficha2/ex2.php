<?php
   $soma = 0; 
   for ($i=1; $i<=50; $i++) {
           $soma += $i; 
        }
        echo "A soma dos primeiros 50 números naturais é: $soma"; 
        echo"<br>";
        echo gettype($soma);
        echo "<br>";
        $txt = "hello";
        echo gettype($txt);
        echo var_dump($txt);
        echo is_integer($soma);
        echo "<br>";
        print_r(array($soma));
?>