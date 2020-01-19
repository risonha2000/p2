<?php
	/******** DESCRIÇÃO DO DOCUMENTO ********
	* Nome do ficheiro: ex6.php 			*
	* UC: Programação II 					*
	* @author Ema Guedes					*
	* @version 1.0 							*
	* Data: Janeiro de 2020 				*
	* Descrição: ficha 2, exercício 6		*
	*****************************************/
?>

<!DOCTYPE html>
<html lang="pt">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Ficha 2, Exercício 6</title>
	</head>
	
	<body>
		<h2>O que escreveu é diferente ou igual?</h2> 
        <form name="ex6" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
            <label for="a">Insira o que desejar:</label>
			<input type="text" name="a">
            <br><br>
            <label for="b">Insira o que desejar:</label>
			<input type="text" name="b">
			<br><br>
			<input type="submit" value="Submeter">
			<br><br>
        </form>

        <?php
            if (isset($_REQUEST["a"], $_REQUEST["b"])) {
                $a = $_REQUEST["a"];
                $b = $_REQUEST["b"];

                echo "O que inseriu no primeiro: $a.<br>";
                echo "O que inseriu no segundo: $b.<br><br>";

                echo "O número de caracteres do que inseriu no primeiro é ".strlen($a);
                echo "<br>";
                echo "O número de caracteres do que inseriu no segundo é ".strlen($b);
                echo "<br><br>";

                if ($a==$b) {
                    echo "O que inseriu no primeiro e no segundo é igual.";
                } else {
                    echo "O que inseriu no primeiro e no segundo não é igual.";
                }             
            }
        ?>
	</body>
</html>