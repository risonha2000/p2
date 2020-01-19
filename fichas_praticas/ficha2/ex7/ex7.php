<?php
	/******** DESCRIÇÃO DO DOCUMENTO ********
	* Nome do ficheiro: ex7.php 			*
	* UC: Programação II 					*
	* @author Ema Guedes					*
	* @version 1.0 							*
	* Data: Janeiro de 2020 				*
	* Descrição: ficha 2, exercício 7		*
	*****************************************/
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Ficha 2, Exercício 7</title>
    </head>
    <body>
        <?php
            $teste = $_REQUEST["teste"];
            $trab = $_REQUEST["trab"];
            $proj = $_REQUEST["proj"];

            $nf=($teste*0.30)+($trab*0.20)+($proj*0.50);

            $valor_teste=($teste*20)/100;
            $valor_trab=($trab*20)/100;
            $valor_proj=($proj*20)/100;

            $valor_nf=($nf*20)/100;


            if ($teste<0 || $teste>100 || $trab<0 || $trab>100 || $proj<0 || $proj>100) {
                echo "Insira um valor positivo e maior ou igual a 100. Não existem notas abaixo de zero ou que ultrapassem 100%.";
            } else {
                echo "Nota do teste: $valor_teste valores (ponderação: 30%) <br><br>Nota do trabalho: $valor_trab valores (ponderação: 20%) <br><br>Nota do projeto final: $valor_proj valores (ponderação: 50%) <br><br>Nota final do aluno: $valor_nf valores";
            }
            
        ?>
    </body>
</html>