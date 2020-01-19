<?php
	/******** DESCRIÇÃO DO DOCUMENTO ********
	* Nome do ficheiro: ex3.php 			*
	* UC: Programação II 					*
	* @author Ema Guedes					*
	* @version 1.0 							*
	* Data: Janeiro de 2020 				*
	* Descrição: ficha 3, exercício 3		*
	*****************************************/
?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ficha 3, Exercício 3</title>
    </head>
    <body>
        <form name="ex3" method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
                <label for="num">Insira um número:</label>
                <input type="number" name="num1">
                <br><br>
                <label for="num">Insira um número:</label>
                <input type="number" name="num2">
                <br><br>
                <input type="submit" value="Multiplicação de todos os números naturais entre os números inseridos">
                <br><br>
        </form>
        <?php
            if (isset($_REQUEST["num1"], $_REQUEST["num2"])) {
                $_num1 = $_REQUEST["num1"];
                $_num2 = $_REQUEST["num2"];
            
                $num1 = $_GET["num1"];
                $num2 = $_GET["num2"];
                $total = 0;

                echo "Primeiro número inserido: $num1 <br>";
                echo "Segundo número inserido: $num2";
                
                if ($num1<$num2) {
                    while ($num1<$num2) {
                        $total = ($num1 * ($num1+1));
                        echo "<p>".$num1."x".($num1+1)." = <strong>".$total."</strong></p>";
                        $num1++;
                    }
                }
                else {
                    echo "<br><br>O primeiro número inserido tem de ser menor que o segundo.";
                }
            }
        ?>
    </body>
</html>