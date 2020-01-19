<?php
	/******** DESCRIÇÃO DO DOCUMENTO ********
	* Nome do ficheiro: ex1.php 			*
	* UC: Programação II 					*
	* @author Ema Guedes					*
	* @version 1.0 							*
	* Data: Janeiro de 2020 				*
	* Descrição: ficha 2, exercício 1		*
	*****************************************/
?>

<!DOCTYPE html>
<html lang="pt">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Ficha 2, Exercício 1</title>
	</head>
	
	<body> 
        <form name="ex1" method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
            <label for="num">Insira um número <strong>inteiro positivo</strong>:</label>
            <input type="number" name="num">
            <input type="submit" value="Resposta">
        </form>

        <?php
            if (isset($_REQUEST["num"])) {
                $num = $_REQUEST["num"];

                if($num<0) {echo "<br> Insira um valor <strong>inteiro positivo</strong>.";} //ele não já não deixa inserirem números que não sejam inteiros, então só meti: if ($num<0) ... 
                    else {
                        if($num<100) {echo "<br> $num é menor do que 100 <br> ($num < 100)";}
                        if($num>100) {echo "<br> $num é maior do que 100 <br> ($num > 100)";}
                        if($num==100) {echo "<br> $num é igual a 100 <br> ($num = 100)";}
                    }
            }
        ?>
	</body>
</html>