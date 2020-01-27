<?php
    if ( isset($_POST["formulario"])) {
        $nome = isset($_POST["nome"]) ? $nome = $_POST["nome"] : "Sem Definição";
        $email = isset($_POST["email"]) ? $email = $_POST["email"] : "Sem Definição";

        echo "Nome : " . $nome . "<br>";
        echo "E-mail: " . $email;
    }
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
        <?php
            if(!isset($_POST["formulario"])) {
        ?>
            <form action="formulario2.php" method="POST">
                <label for="nome">Nome Completo</label>
                <input type="text" name="nome" id="nome">
                
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
                
                <input type="submit" name="formulario" value="Enviar Cadastro">
            </form>
        <?php
            }
        ?>
    </body>
</html>