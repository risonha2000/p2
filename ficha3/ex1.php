<?php
    /*
    ********** DESCRIÇÃO DO DOCUMENTO *************
    * Nome do ficheiro: ex1.php                   *
    * UC: P2                                      *
    * @author Ema Guedes                          *
    * @version 1.0                                *
    * Data: Outubro de 2019                      *
    * Descrição: primeiro exercício prático       *
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
        <form name="ex1" method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
                <label for="num">Insira um número <strong>inteiro entre 1 e 12</strong> :</label>
                <input type="number" name="num">
                <br>
                <input type="submit" value="Mês correspondente">
        </form>
        <?php
                if (isset($_GET["num"])) {
                        $num = $_GET["num"];
                
                        switch($num) {
                        
                                case "1": echo "Janeiro<br>";
                                        break;
                                case "2": echo "Fevereiro<br>";
                                        break;
                                case "3": echo "Março<br>";
                                        break;
                                case "4": echo "Abril<br>";
                                        break;
                                case "5": echo "Maio<br>";
                                        break;
                                case "6": echo "Junho<br>";
                                        break;
                                case "7": echo "Julho<br>";
                                        break;
                                case "8": echo "Agosto<br>";
                                        break;
                                case "9": echo "Setembro<br>";
                                        break;
                                case "10": echo "Outubro<br>";
                                        break;
                                case "11": echo "Novembro<br>";
                                        break;   
                                case "12": echo "Dezembro<br>";
                                        break; 
                                default: echo "O número que inseriu não corresponde a nenhum mês. Tente novamente com um número <strong>inteiro entre 1 e 12</strong>.";  
                        }
                }
        ?>
    </body>
</html>

