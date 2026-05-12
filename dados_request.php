<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>
    <h1>Formulário de contato</h1>
    <form action="dados_request.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <input type="submit" name="button" value="Enviar">
    </form>

    <form action="dados_request.php" method="get">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome"><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br><br>

        <input type="submit" name="button" value="Enviar">
    </form>
</body>
</html>

<?php 
    echo "<br>" . $_REQUEST["nome"] . "<br>" . $_REQUEST["email"];
?>