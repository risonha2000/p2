<?php
    /*
    ********** DESCRIÇÃO DO DOCUMENTO *************
    * Nome do ficheiro: ex2.php                   *
    * UC: P2                                      *
    * @author Ema Guedes                          *
    * @version 1.0                                *
    * Data: Novembro de 2019                      *
    * Descrição: segundo exercício prático        *
    ***********************************************
    */
?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
        <title>ex2</title>
        
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <script src="js/jquery-3.4.1.min.js" async></script>
        <script src="js/bootstrap.min.js" async></script>
    </head>
    <body>
        <header>
        </header>
        <main>
            <form name="ex2" method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="d-block p-2 bg-primary text-white">
                        <label for="n">Nome do produto:</label>
                        <input type="text" name="n">
                </div>
                <div class="d-block p-2 bg-dark text-white">
                        <label for="d">Descrição do produto:</label>
                        <input type="text" name="d">
                </div>
                <div class="d-block p-2 bg-primary text-white">
                        <label for="p">Preço do produto:</label>
                        <input type="number" name="p">
                </div>
                <div class="d-block p-2 bg-dark text-white"><input type="submit" name="submit" value="Submeter"></div>
            </form>
            <php?  

            if (isset($_REQUEST[n] , $_REQUEST[d] , $_REQUEST[p])) {
                    $_n = $_REQUEST[n];
                    $_d = $_REQUEST[d];
                    $_p = $_REQUEST[p];

                    echo $_n;
                    echo $_d;
                    echo $_p;              
            ?>     
    </body>
</html>