<?php
	/******** DESCRIÇÃO DO DOCUMENTO ********
	* Nome do ficheiro: ex8.php 			*
	* UC: Programação II 					*
	* @author Ema Guedes					*
	* @version 1.0 							*
	* Data: Janeiro de 2020 				*
	* Descrição: ficha 1, exercício 8		*
	*****************************************/
?>

<!DOCTYPE html>
<html lang="pt">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Ficha 1, Exercício 8</title>
	</head>
    
	<body>
		<?php
			$a = 4; $c = 6;
            
            echo "<p>4 é igual a 5?</p>";
            if($a == 5) {echo 'Verdadeiro';} else {echo 'Falso';}

            echo "<p>4 é diferente de 6?</p>";
            if($a != 6) {echo 'Verdadeiro';} else {echo 'Falso';}

            echo "<p>4 é maior que 5?</p>";
            if($a > 5) {echo 'Verdadeiro';} else {echo 'Falso';}

            echo "<p>(4 é menor que 5) e (6 é maior que 10)?</p>";
            if($a < 5) {echo 'Verdadeiro';} else {echo 'Falso';}
           
            echo "<p>Negação ((40 é menor que 50) ou (60 é maior que 90))?</p>";
            if(!(40 < 50 || 60 > 90)) {echo 'Verdadeiro';} else {echo 'Falso';}
		?>
	</body>
</html>