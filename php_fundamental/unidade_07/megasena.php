<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
    <?php
        $megasena = array();
        for($contador = 1; $contador < 7; $contador ++) {
            $sorteio = rand (1, 60);
            if(!in_array($sorteio, $megasena) ){
                $megasena[] = $sorteio;
            }
        }
        sort($megasena);
    ?>

    <pre>
        <?php
            print_r($megasena);
        ?>
    </pre>
    </body>
</html>