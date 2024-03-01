<?php
session_start();
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Proejeto do login</title>
    <link rel="stylesheet" type="text/css" href="css/login2.css">
</head>

<body>
    <div class="contact-form">
        <img alt="" width="236" height="213" src="Css/imagens/12.jpg" class="avatar">
        <h2>Login</h2>
        <form method="POST" action="login.php">
            <p>Usuario</p>
            <input type="text" name="usuario" placeholder="usuario" maxlength="40">
            <p>Senha</p>
            <input type="password" name="senha" placeholder="senha" maxlength="15">
            <input type="submit" name="" value="Entre">
            <a href="Cadastro.php">cadastre-se aqui</a>
        </form>
    </div>
</body>
</html>