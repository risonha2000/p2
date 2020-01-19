<?php
	/******** DESCRIÇÃO DO DOCUMENTO ********
	* Nome do ficheiro: ex5.php 			*
	* UC: Programação II 					*
	* @author Ema Guedes					*
	* @version 1.0 							*
	* Data: Janeiro de 2020 				*
	* Descrição: ficha 2, exercício 5		*
	*****************************************/
?>

<!DOCTYPE html>
<html lang="pt">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Ficha 2, Exercício 5</title>
	</head>
	
	<body>
		<h2>Números de 0 até o número que inseriu.</h2> 
        <form name="ex5" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
            <label for="num">Insira um valor <strong>inteiro positivo</strong>:</label>
			<input type="number" name="num">
			<br><br>
			<input type="submit" value="Resultado">
			<br><br>
        </form>

        <?php
            if (isset($_REQUEST["num"])) {
				$num = $_REQUEST["num"];

				if ($num<0) {
					echo "Insira um valor <strong>inteiro positivo</strong>.";
				} else {
					for ($i=0; $i <= $num ; $i++) { 
						echo "$i ";
					}
				}
            }
        ?>
	</body>
</html>