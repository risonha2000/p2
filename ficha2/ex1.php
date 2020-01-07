<?php
    /*
    ********** DESCRIÇÃO DO DOCUMENTO *************
    * Nome do ficheiro: ex1.php                   *
    * UC: P2                                      *
    * @author Ema Guedes                          *
    * @version 3.2                                *
    * Data: Setembro de 2019                      *
    * Descrição: primeiro exercício prático       *
    ***********************************************
    */
?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ex1</title>
    </head>
    <body>
        <?php
            $num = $_GET["num"];
            
            if ($num<100 && $num>=0)
                echo "$num<100";
                if ($num==100)
                    echo "$num=100";
                    if ($num>100) 
                        echo "$num>100";
                        if ($num<0)
                            echo "Insira um número inteiro positivo";
        ?>

        <br>
        <a href="ex1.html"> voltar </a>

    </body>
</html>