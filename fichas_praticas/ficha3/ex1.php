<?php
	/******** DESCRIÇÃO DO DOCUMENTO ********
	* Nome do ficheiro: ex1.php 			*
	* UC: Programação II 					*
	* @author Ema Guedes					*
	* @version 1.0 							*
	* Data: Janeiro de 2020 				*
	* Descrição: ficha 3, exercício 1		*
	*****************************************/
?>

<!DOCTYPE html>
<html lang="pt">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Ficha 3, Exercício 1</title>
	</head>
	
	<body>
    <body>
        <form name="ex1" method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
                <label for="num">Insira um número <strong>inteiro entre 1 e 12</strong> :</label>
                <input type="number" name="num">
                <input type="submit" value="Mês correspondente">
        </form>
        <?php
            if (isset($_GET["num"])) {
                $num = $_GET["num"];
               
                
                switch($num) {
                        
                    case "1": echo "<br>Janeiro";
                        break;
                    case "2": echo "<br>Fevereiro";
                        break;
                    case "3": echo "<br>Março";
                        break;
                    case "4": echo "<br>Abril";
                        break;
                    case "5": echo "<br>Maio";
                        break;
                    case "6": echo "<br>Junho";
                        break;
                    case "7": echo "<br>Julho";
                        break;
                    case "8": echo "<br>Agosto";
                        break;
                    case "9": echo "<br>Setembro";
                        break;
                    case "10": echo "<br>Outubro";
                        break;
                    case "11": echo "<br>Novembro";
                        break;   
                    case "12": echo "<br>Dezembro";
                        break; 
                    default: echo "<br>O número que inseriu não corresponde a nenhum mês. Tente novamente com um número <strong>inteiro entre 1 e 12</strong>.";  
                } 
            }
        ?>
    </body>
</html>