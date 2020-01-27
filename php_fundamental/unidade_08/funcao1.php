<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>
        <?php
            function retornarDiaria(){
                return number_format(910/30,2);
            }
            echo retornarDiaria();

            function retornarDiaria1($salario){
                return number_format($salario/30,2);
            }

            echo "<br>";

            $diaria = retornarDiaria1(2000);
            echo $diaria;

            function retornarDiaria3($salario, $dia) {
                return number_format($salario/$dia, 2);
            }

            echo "<br>";

            $diaria = retornarDiaria3(3000, 15);
            echo $diaria;

            echo "<br>";

            function retornarDiariaValores ( $salario, $dias, $cotacao){
                $real = number_format($salario/$dias, 2);
                $dolar = number_format(($salario/$dias)/$cotacao, 2);
                return array($real, $dolar);
            }

            list($resultado_real, $resultado_dolar) = retornarDiariaValores(3000, 10, 2.5);
            echo "Valor da diaria em real: " . $resultado_real . "<br>";
            echo "Valor da diaria em dolar: " . $resultado_dolar;

        ?>
    <body>
    </body>
</html>