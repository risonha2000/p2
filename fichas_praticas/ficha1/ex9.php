<?php
	/******** DESCRIÇÃO DO DOCUMENTO ********
	* Nome do ficheiro: ex9.php 			*
	* UC: Programação II 					*
	* @author Ema Guedes					*
	* @version 1.0 							*
	* Data: Janeiro de 2020 				*
	* Descrição: ficha 1, exercício 9		*
	*****************************************/
?>

<!DOCTYPE html>
<html lang="pt">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Ficha 1, Exercício 9</title>
	</head>
	
	<body> 
		<h3>Arredonda <i>4,78905</i> a duas casas décimais:</h3>
		<?php
			printf("%.2f", 4.78905);
		?>
		<br>
		<h3>Arredonda <i>4,7</i> a duas casas décimais:</h3>
		<?php
			printf("%.2f", 4.7);
		?>
		<br>
		<h3>Arredonda <i>5,8954</i> a duas casas décimais:</h3>
		<?php
			printf("%.2f",5.8954);
		?>
		<br>
		<h3>Arredonda <i>5</i> a duas casas décimais:</h3>
		<?php
			printf("%.2f", 5);
		?>
	</body>
</html>