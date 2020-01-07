<?php
    /*
    ********** DESCRIÇÃO DO DOCUMENTO *************
    * Nome do ficheiro: ex6.php                   *
    * UC: P2                                      *
    * @author Ema Guedes                          *
    * @version 1.0                                *
    * Data: Outubro de 2019                       *
    * Descrição: sexto exercício prático     s     *
    ***********************************************
    */
?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>ex.6</title>
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
                <label for="num">Insira um número:</label>
                <input type="number" name="num3">
                <br>
                <label for="num">Insira um número:</label>
                <input type="number" name="num4">
                <br>
                <label for="num">Insira um número:</label>
                <input type="number" name="num5">
                <br>
                <input type="submit" value="Números apresentados na ordem decrescente">
        </form>
        <?php
            if (isset($_REQUEST["num1"], $_REQUEST["num2"], $_REQUEST["num3"], $_REQUEST["num4"], $_REQUEST["num5"])) {
                $_num1 = $_REQUEST["num1"];
                $_num2 = $_REQUEST["num2"];  
                $_num2 = $_REQUEST["num3"];
                $_num2 = $_REQUEST["num4"];
                $_num2 = $_REQUEST["num5"];

                echo "Números pela ordem de saída: $_num1, $_num2, $_num3, $_num4, $_num5";

                if ($_num1!=$_num2&&$_num2!=$_num3&&$_num3!=$_num4&&$_num4!=$num5) {
                    $ar=array($va,$vb,$vc,$vd,$ve);

                    function imprime($i) {
                        foreach ($i as $indice => $valor) {
                            echo "$valor($indice)"
                        }

                        function imprime($i)
                    }
