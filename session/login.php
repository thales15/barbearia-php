<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>

<body>
    <h1>Faça seu login</h1>
    <form action="" method="post">
        <label for="usuario">Usuário:</label>
        <input type="text" id="usuario" name="usuario" required><br><br>

        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required><br><br>

        <input type="submit" name="button" value="Logar">
    </form>
</body>

</html>

<?php
include "./conexao.php";

if(isset($_GET['errorLogin'])){
    echo 'Você não está logado';
}

if ($_POST["button"] == "Logar") {

    $user = $_POST["usuario"];
    $pass = sha1($_POST["senha"]);

    $consulta = R::findOne('administradores', 'usuario = "' . $user . '" AND senha = "' . $pass. '"');

    if ($consulta != null) {
        $_SESSION['status'] = "loagdo";
        header('location: principal.php');
    } else {
        echo "ERRO ao logar";
    }
}
?>