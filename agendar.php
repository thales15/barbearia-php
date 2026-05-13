<?php 
$nome = isset($_POST["nome"]) ? $_POST["nome"] :"";
$servicoOpcao = isset($_GET['servico']) ? $_GET['servico'] : '';



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
        .require{
            color: red;
        }
    </style>
</head>

<body>

    <h1>Agendar serviço</h1>

    <form action="" method="post">
        <label>Nome completo<span class="require">*</span></label><br>
        <input type="text" name="nome" required> <br>

        <label>Telefone<span class="require">*</span> </label><br>
        <input type="text" name="telefone" required> <br>

        <label>Serviço<span class="require">*</span></label><br>
        <select name="servico" id="servico" required>Serviço:
            <option>Selecione..</option>
            <?php  foreach ($servicos as $key => $value ): ?>
                <option value=" <?= $key  ?> " <?php echo ($servicoOpcao == $key) ? 'select' : '' ?> >
                    <?php echo $value ?>
            </option>
            <?php endforeach; ?>
        </select> <br>

        <label>Data<span class="require">*</span></label><br>
        <input type="date" name="data" required> <br>

        <label>Horário<span class="require">*</span></label><br>
        <input type="time" name="horario" required> <br>

        <label>Observações</label><br>
        <textarea name="observacao" id="observacao"></textarea>

        <!-- <input type="submit" name="enviar"> -->
         <button type="submit">Agendar</button>
    </form>

    <?php 
    var_dump($_POST);
    ?>

</body>

</html>

