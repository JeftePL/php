<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            $dia = "quinta"; 

            switch ($dia) {
                case "segunda":
                    echo "Hoje é segunda";
                    break;
                case "quinta":
                    echo "Hoje é quinta";
                    break;
                case "sexta":
                    echo "Hoje é sexta";
                    break;
                default:
                    echo "Hoje é dia de trabalhar";
            }

        ?>
    </body>
</html>