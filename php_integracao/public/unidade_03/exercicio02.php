<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            // require se der erro para
            // include continua mesmo se der erro
            // requiere_once e include_once executa penas uma vez
            include ("pagina1.php");
            echo "<br>";
            include ("pagina1.php");
        ?>
    </body>
</html>