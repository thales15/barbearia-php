<?php 
$nome = isset($_POST["nome"]) ? $_POST["nome"] :"";
$servicoOpcao = isset($_GET['servico']) ? $_GET['servico'] : '';


    $servicos = [
        1 => "corte",
        2 => "barba",
        3 => "combo",
        4 => "tersoura",
    ]

?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar</title>
</head>

<body>

    <h1>Agendar serviço</h1>

    <form action="" method="post">
        <label>Nome completo</label><br>
        <input type="text" name="nome"> <br>

        <label>Telefone</label><br>
        <input type="text" name="telefone"> <br>

        <label>Serviço</label><br>
        <select name="servico" id="servico">Serviço:
            <option>Selecione..</option>
            <?php  foreach ($servicos as $key => $value ): ?>
                <option value=" <?= $key  ?> " <?php echo ($servicoOpcao == $key) ? 'select' : '' ?> >
                    <?php echo $value ?>
            </option>
            <?php endforeach; ?>
        </select> <br>

        <label>Data</label><br>
        <input type="date"> <br>

        <label>Horário</label><br>
        <input type="time"> <br>

        <label>Observações</label><br>
        <textarea name="observacao" id="observacao"></textarea>

        <input type="submit" name="enviar">
    </form>

    <?php 
    var_dump($_POST);
    ?>

</body>

</html>

