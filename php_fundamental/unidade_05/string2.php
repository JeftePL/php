<?php 
    $_nome = "Nome";
    $_sobrenome = "Sobrenome";
    $_palavra = "Curso PHP Fundamental"
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <p><?php echo $_nome . " " . $_sobrenome?></p>
        <?php 
            // strlen - Retorna a quantidade de letras
            echo strlen($_palavra) . "</br>";
            
            // stripos  - Retorna primeira ocorrência 
            echo stripos($_palavra, "u") . "</br>";

            // strripos - Retorna última ocorrência
            echo strripos($_palavra, "u") . "</br>";
            
            // strtolower - converte para letras minusculas.
            echo strtolower($_palavra) . "</br>";

            // strtoupper - converte para letras maiusculas.
            echo strtoupper($_palavra) . "</br>";

            // SUBSTR_COUNT - Conta quantas ocorrencias acontecem
            // de um texto ou string
            // Faz diferença Maiusculas e minusculas
            echo SUBSTR_COUNT($_palavra, "u"); 
        ?>
    </body>
</html>