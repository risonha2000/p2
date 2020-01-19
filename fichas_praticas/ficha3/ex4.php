<?php
	/******** DESCRIÇÃO DO DOCUMENTO ********
	* Nome do ficheiro: ex4.php 			*
	* UC: Programação II 					*
	* @author Ema Guedes					*
	* @version 1.0 							*
	* Data: Janeiro de 2020 				*
	* Descrição: ficha 3, exercício 4		*
	*****************************************/
?>


<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ficha 3, Exercício 4</title>
    </head>
    <body>
    <form name="ex4" method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
                <label for="num">Insira um número:</label>
                <input type="number" name="num">
                <br>
                <input type="submit" value="Todos os números inteiros desde 0 até ao valor inserido">
        </form>
        <?php
            if (isset($_REQUEST["num"])) {
                $_num1 = $_REQUEST["num"];

                function imprimeNumeros($par)
                {
                    for ($i = 0; $i <= $par; $i++) {
                        if ($i < $par)
                            echo "$i, ";
                        else {
                            echo "$i";
                        }
                    }
                }
                imprimeNumeros($_GET["num"]);
            }
        ?>    
    </body>
</html>
