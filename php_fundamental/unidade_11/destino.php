<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
    </head>

    <body> 
            <?php
                $nome = isset($_POST["nome"]) ? $nome = $_POST["nome"] : "Sem Definição";
                $email = isset($_POST["email"]) ? $email = $_POST["email"] : "Sem Definição";

                echo "Nome : " . $nome . "<br>";
                echo "E-mail: " . $email;
            ?>
        
    </body>
</html>