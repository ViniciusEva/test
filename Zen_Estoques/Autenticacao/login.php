<?php 
$mensagem = "";

// Simulação de validação
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        // Aqui você faria a validação no banco
        if ($email == "admin@teste.com" && $senha == "123456") {
            $mensagem = "Login realizado com sucesso!";
        } else {
            $mensagem = "Usuário ou senha incorretos!";
        }
    } elseif (isset($_POST['cadastro'])) {
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        // Aqui você faria o INSERT no banco de dados
        $mensagem = "Cadastro realizado com sucesso para $email!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login e Cadastro</title>
    <link rel="stylesheet" href="style_login.css">
</head>
<body>

<div class="container">
    <h2>Login / Cadastro</h2>

    <?php if(!empty($mensagem)): ?>
        <div class="mensagem"><?= $mensagem ?></div>
    <?php endif; ?>

    <form method="post">
        <input type="email" name="email" placeholder="E-mail" required>
        <input type="password" name="senha" placeholder="Senha" required>
        
        <div>
            <button type="submit" name="login">Login</button>
            <button type="submit" name="cadastro">Cadastrar</button>
        </div>
    </form>
</div>

</body>
</html>
