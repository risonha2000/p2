<?php
    /*
    ********** DESCRIÇÃO DO DOCUMENTO *************
    * Nome do ficheiro: ex7.php                   *
    * UC: P2                                      *
    * @author Ema Guedes                          *
    * @version 1.0                                *
    * Data: Outubro de 2019                       *
    * Descrição: sétimo exercício prático         *
    ***********************************************
    */
?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>ex.7</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    </head>
    <body>
        <form name="ex2" method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
                <label for="nome">Nome:</label>
                <input type="text" name="n">
                <br>
                <label for="idade">Idade:</label>
                <input type="number" name="i">
                <br>
                <label for="sexo">Sexo:</label>
                <input type="radio" name="sexo" value="m" checked>M
                <input type="radio" name="sexo" value="f">F
                <input type="submit" value="Enviar">
        </form>
        <?php
            if (isset($_REQUEST["nome"], $_REQUEST["idade"], $_REQUEST["sexo"])) {
                $nome = $_REQUEST["nome"];
                $idade = $_REQUEST["idade"]; 
                $sexo = $_REQUEST["sexo"];  
                
                function dados() {
                    if ($i>=18 && $i<=15 && $_REQUEST["sexo"] == 'm') {
                        return "Parabéns".$n.", foi aceite no desafio!";
                    } else {
                        return "Lamentamos ".$n.", fica para a próxima!"
                    }
                }
                
                echo dados($nome, $idade, $sexo);

                } else {
                    echo "Preencha todos os dados.";
                }
            }
        ?>
    </body>
</html>

