<?php
    /*
    ********** DESCRIÇÃO DO DOCUMENTO *************
    * Nome do ficheiro: ex1.php                   *
    * UC: P2                                      *
    * @author Ema Guedes                          *
    * @version 1.0                                *
    * Data: Novembro de 2019                      *
    * Descrição: primeiro exercício prático       *
    ***********************************************
    */
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>ex1</title>
        
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script src="js/jquery-3.4.1.min.js" async></script>
        <script src="js/bootstrap.min.js" async></script>
    </head>
    <body>
        <header>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="ex1.php?op=1">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ex1.php?op=2">Quem somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="ex1.php?op=3">Contactos</a>
                </li>
            </ul>
        </header>
        <main>
            <?php
                if (isset($_GET["op"]))
                {
                $op = $_GET['op'];
                if ($op == 1)
                    require("inicio.php");
                else if ($op == 2)
                    require("quemsomos.php");
                else if ($op ==3)
                    require("contactos.php");
                else
                    echo "Página não existente";
                }
            ?>
    </body>
</html>