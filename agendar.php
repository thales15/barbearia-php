<?php
$nome = isset($_POST["nome"]) ? $_POST["nome"] : "";
$telefone = isset($_POST["telefone"]) ? $_POST["telefone"] : "";
$servicoOpcao = isset($_POST['servico']) ? $_POST['servico'] : "";
$data = isset($_POST['data']) ? $_POST['data'] : "";
$horario = isset($_POST['horario']) ? $_POST['horario'] : "";
$observacao = isset($_POST["observacao"]) ? $_POST["observacao"] : "";


$nome = htmlspecialchars(trim($nome));
$telefone = htmlspecialchars(trim($telefone));
$data = date("Y-m-d", trim(strtotime($data)));
$horario = date("H:i", trim(strtotime($horario)));
$observacao = htmlspecialchars($observacao);

$mensagem = "";

if(!empty($nome) && !empty($telefone) && !empty($data) && !empty($horario)){
    $mensagem = "Dados enviados com sucesso: $nome | telefone: $telefone <br> $servicoOpcao <br> $data - $horario <br> $observacao";
}


$servicos = [
    "corte" => "corte",
    "barba" => "barba",
    "combo" => "combo",
    "tersoura" => "tersoura",
]
    ?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendar</title>

    <style>
        .require {
            color: red;
        }
    </style>
</head>

<body>

    <h1>Agendar serviço</h1>

    <form action="" method="post">
        <label>Nome completo<span class="require">*</span></label><br>
        <input type="text" name="nome" value="<?= $nome ?>" required> <br>

        <label>Telefone<span class="require">*</span> </label><br>
        <input type="text" name="telefone" value="<?= $telefone ?>" required> <br>

        <label>Serviço<span class="require">*</span></label><br>
        <select name="servico" id="servico" required>
            <option value="">Selecione...</option>

            <?php foreach ($servicos as $key => $value): ?>
                <option value="<?= $key ?>" <?= ($servicoOpcao == $key) ? 'selected' : '' ?>>
                    <?= $value ?>
                </option>
            <?php endforeach; ?>
        </select> <br>

        <label>Data<span class="require">*</span></label><br>
        <input type="date" name="data" value="<?= $data ?>" required> <br>

        <label>Horário<span class="require">*</span></label><br>
        <input type="time" name="horario" value="<?= $horario ?>" required> <br>

        <label>Observações</label><br>
        <textarea name="observacao"><?= $observacao ?></textarea>

        <!-- <input type="submit" name="enviar"> -->
        <button type="submit">Agendar</button>
    </form>

    <?php
 echo  $mensagem;
    ?>

</body>

</html>