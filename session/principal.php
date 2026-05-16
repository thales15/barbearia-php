<?php 
session_start();

if($_SESSION['status'] == "") {
    echo "não está logado";
    header("location: login.php?errorLogin=true");
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logado</title>
</head>
<body>

    Estás logado
    
</body>
</html>