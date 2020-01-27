<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            $a = 5;
            $b = 3;

            if ($a > $b) {
                echo "A é maior do que B";
            } elseif ($a < $b) {
                echo "B é maior do que A";
            } else {
                echo "A é igual a B";
            }
        ?>
    </body>
</html>