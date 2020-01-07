<?php
    /*
    ********** DESCRIÇÃO DO DOCUMENTO *************
    * Nome do ficheiro: ex3.php                   *
    * UC: P2                                      *
    * @author Ema Guedes                          *
    * @version 1.0                                *
    * Data: Outubro de 2019                       *
    * Descrição: terceiro exercício prático       *
    ***********************************************
    */
?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>ex.1</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    </head>
    <body>
        <form name="ex3" method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
                <label for="num">Insira um número:</label>
                <input type="number" name="num1">
                <br>
                <label for="num">Insira um número:</label>
                <input type="number" name="num2">
                <br>
                <input type="submit" value="Multiplicação de todos os números naturais entre os números inseridos">
        </form>
        <?php
            if (isset($_REQUEST[num1])) {
                # code...
            }
            
            $num1 = $_GET["num1"];
            $num2 = $_GET["num2"];
            $total = 0;

            if ($num1<$num2) {
                while ($num1<$num2) {
                    $total = ($num1 * ($num1+1));
                    echo "<p>".$num1."x".($num1+1)." = <strong>".$total."</strong></p>";
                    $num1++;
                }
            }
            else {
                echo ""
            }
    </body>
</html>