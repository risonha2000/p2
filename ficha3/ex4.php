<?php
    /*
    ********** DESCRIÇÃO DO DOCUMENTO *************
    * Nome do ficheiro: ex4.php                   *
    * UC: P2                                      *
    * @author Ema Guedes                          *
    * @version 1.0                                *
    * Data: Outubro de 2019                       *
    * Descrição: quarto exercício prático         *
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
        <form name="ex4" method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
                <label for="num">Insira um número:</label>
                <input type="number" name="num">
                <br>
                <input type="submit" value="Todos os números inteiros desde 0 até ao valor inserido">
        </form>
        <?php
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

        ?>
    </body>
</html>