<?php 
    $salario = 800;
    $meses   = 3;
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php 
            // Multiplicacao e Divisao
            echo "Trimestre: " . $salario * $meses . "</br>" ;
            echo "Quinzena: " . $salario / 2 . "</br>";

            // Exponencial
            echo "Exponencial: " . pow(2,4) . "</br>";

            // Raiz Quadrada
            echo "Raiz Quadrada: " . sqrt(36) . "</br>";

            // Randômico Generica
            echo "Randômico Generico: " . rand() . "</br>";

            // Randômico entre um intervalo
            echo "Randômico entre um intervalo: " . rand(1, 10) . "</br>";

            // Valor absoluto
            echo "Valor absoluto: " . abs(-10);
        ?>
    </body>
</html>