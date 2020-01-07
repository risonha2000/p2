<?php
    /*
    ********** DESCRIÇÃO DO DOCUMENTO *************
    * Nome do ficheiro: ex2.php                   *
    * UC: P2                                      *
    * @author Ema Guedes                          *
    * @version 1.0                                *
    * Data: Outubro de 2019                       *
    * Descrição: segundo exercício prático        *
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
        <form name="ex2" method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
                <label for="num">Insira um número:</label>
                <input type="number" name="num1">
                <br>
                <label for="num">Insira um número:</label>
                <input type="number" name="num2">
                <br>
                <input type="submit" value="Números pares entre os números inseridos">
        </form>
        <?php
            if (isset($_REQUEST["num1"], $_REQUEST["num2"])) {
                $_num1 = $_REQUEST["num1"];
                $_num2 = $_REQUEST["num2"];  
                
                if ($_num1>$_num2) {
                    echo "O primeiro valor tem de ser maior que o segundo valor";
                } else {
                    for ($i = $_num1; $i <= $_num2 ; $i++) {
                        if ($i % 2 == 0) {
                            echo "$i <br>";
                        }       
                    }
                }
            }
        ?>
    </body>
</html>



