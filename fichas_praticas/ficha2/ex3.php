<?php
	/******** DESCRIÇÃO DO DOCUMENTO ********
	* Nome do ficheiro: ex3.php 			*
	* UC: Programação II 					*
	* @author Ema Guedes					*
	* @version 1.0 							*
	* Data: Janeiro de 2020 				*
	* Descrição: ficha 2, exercício 3		*
	*****************************************/
?>

<!DOCTYPE html>
<html lang="pt">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Ficha 2, Exercício 3</title>
	</head>
	
	<body>
    <body>
        <?php
            $tab = 5;

            for ($i=1; $i < 11; $i++) { 
                echo "<br>$tab * $i = ".$i*$tab;
            }
        ?>
    </body>
</html>