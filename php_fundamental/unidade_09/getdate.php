<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            //Determinar timezone
            date_default_timezone_set('Etc/GMT+3');
            setlocale(LC_ALL, "pt_BR", "pt_BR.iso-8859-1", "pt_BR.utf-8", "portuguese");

            $agora = getdate();
            
            //Criar elementos
            $ano = $agora["year"];
            $mes = $agora["mon"];
            $dia = $agora["mday"];

            $hora = $agora["hours"];
            $minuto = $agora["minutes"];
            $segundo = $agora["seconds"];
            echo $dia . "/" . $mes . "/" . $ano . " - " . $hora . ":" . $minuto . ":" . $segundo;

            //Usar data e hora local - strftime
            $mesEscrito = strftime("%B");
            echo "<br>" . $dia . " de " . $mesEscrito . " de " . $ano . " - " . $hora . ":" . $minuto . ":" . $segundo;
        ?>
    </body>
</html>