<?php
$nome = isset($_GET['nome']) ? trim($_GET['nome']) : '';
$servico = isset($_GET['servico']) ? $_GET['servico'] : '';

$mensagem = "";
if (!empty($nome) && !empty($servico)) {
    $mensagem = "Busca realizada para: " . htmlspecialchars($nome) . 
                " | Serviço: " . htmlspecialchars($servico);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Busca com GET</title>
</head>
<body>
    <h1>Busca de Clientes (GET)</h1>
    
    <form method="GET" action="">
        <label>Nome do cliente:</label><br>
        <input type="text" name="nome" value="<?php echo htmlspecialchars($nome); ?>"><br><br>
        
        <label>Serviço:</label><br>
        <select name="servico">
            <option value="">Selecione...</option>
            <option value="corte" <?= $servico == 'corte' ? 'selected' : '' ?>>Corte Masculino</option>
            <option value="barba" <?= $servico == 'barba' ? 'selected' : '' ?>>Barba</option>
            <option value="combo" <?= $servico == 'combo' ? 'selected' : '' ?>>Corte + Barba</option>
        </select><br><br>
        
        <button type="submit">Buscar</button>
    </form>

    <?php if ($mensagem): ?>
        <h2><?= $mensagem ?></h2>
    <?php endif; ?>
</body>
</html>