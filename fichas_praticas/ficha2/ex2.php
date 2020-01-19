<?php
	/******** DESCRIÇÃO DO DOCUMENTO ********
	* Nome do ficheiro: ex2.php 			*
	* UC: Programação II 					*
	* @author Ema Guedes					*
	* @version 1.0 							*
	* Data: Janeiro de 2020 				*
	* Descrição: ficha 2, exercício 2		*
	*****************************************/
?>

<!DOCTYPE html>
<html lang="pt">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Ficha 2, Exercício 2</title>
	</head>
	
	<body>
		<h4>A+C; BxD; Se o resultado da soma é maior, menor ou igual ao resultado da multiplicação.</h4> 
        <form name="ex2" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
            <label for="a">Insira o valor de <strong>A</strong>:</label>
			<input type="number" name="a">
			<br><br>
			<label for="b">Insira o valor de <strong>B</strong>:</label>
			<input type="number" name="b">
			<br><br>
			<label for="c">Insira o valor de <strong>C</strong>:</label>
			<input type="number" name="c">
			<br><br>
			<label for="d">Insira o valor de <strong>D</strong>:</label>
			<input type="number" name="d">
			<br><br>
            <input type="submit" value="Resultado">
        </form>

        <?php
            if (isset($_REQUEST["a"], $_REQUEST["b"], $_REQUEST["c"], $_REQUEST["d"])) {
				$a = $_REQUEST["a"];
				$b = $_REQUEST["b"];
				$c = $_REQUEST["c"];
				$d = $_REQUEST["d"];

				$soma = $a+$c;
				$multi = $b*$d;

				echo "<br><br>A=$a";
				echo "<br>B=$b";
				echo "<br>C=$c";
				echo "<br>D=$d";
				echo "<br><br>A+C=$soma";
				echo "<br>B*D=$multi";

				if ($soma==$multi) {
					echo "<br><br>O resultado da soma é igual ao resultado da multiplicação.";
				} else if ($soma<$multi) {
					echo "<br><br>O resultado da soma é menor do que o resultado da multiplicação.";
				} else {
					echo "<br><br>O resultado da soma é maior do que o resultado da multiplicação.";
				}
            }
        ?>
	</body>
</html>