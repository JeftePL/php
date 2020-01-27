<?php
    $nome = null;
    $endereco = "";
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            echo "A váriavel é null? " . is_null($nome) . "<br>";
            echo "A váriavel é null? " . is_null($endereco);
        ?>
    </body>
</html>