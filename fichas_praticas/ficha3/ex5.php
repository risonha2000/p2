<?php
	/******** DESCRIÇÃO DO DOCUMENTO ********
	* Nome do ficheiro: ex5.php 			*
	* UC: Programação II 					*
	* @author Ema Guedes					*
	* @version 1.0 							*
	* Data: Janeiro de 2020 				*
	* Descrição: ficha 3, exercício 5		*
	*****************************************/
?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Ficha 3, Exercício 5</title>
    </head>
    <body>
        <form name="ex5" method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
                <label for="num">Insira um número:</label>
                <input type="number" name="num">
                <br><br>
                <input type="submit" value="Tabuada do número inserido">
                <br><br>
        </form>
        <?php
            if (isset($_REQUEST["num"])) {
                $_num1 = $_REQUEST["num"];
            
                $num1 = $_GET["num"];

                function tab($num)
                {
                    for ($i=1; $i < 11; $i++) {
                            echo "<br>$num * $i = ".$i*$num;
                    }
                }
                tab($_GET["num"]);
            }
        ?>
    </body>
</html>