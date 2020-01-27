<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body>
        <?php
            echo "While: ";
            $contador = 1;
            while($contador <= 10) {
                $sorteio = rand(1, 60);
                echo $sorteio . " ";
                $contador ++;
            }
            

            echo "<br>" . "Do While: ";
            $contador2 = 1;
            do {
                $sorteio2 = rand(1, 10);
                echo $sorteio2 . " ";
                $contador2 ++;
            } while ($contador2 <= 5);
            

            echo "<br>" . "For: ";
            for ($i = 0; $i < 5; $i ++){
                echo rand(1, 42) . " ";
            }


            echo "<br>" . "Foreach: ";
            $salada = array("Maçã", "Abacate", "Laranja", "Banana");
            
            foreach($salada as $fruta){
                echo $fruta . " ";
            }

            $agenda = array ( 
                "nome" => "José",
                "sobrenome" => "Silva",
                "idade" => "30"
            );

            echo "<br>";
            foreach($agenda as $atributo => $valor){
                echo $atributo . ": " . $valor . " ";
            }
        ?>
    </body>
</html>