<?php
 session_start();
?>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="Css/Cadastro.css">
</head>

<body>
    <div class="contact-form">
        <img alt="" width="236" height="213" src="Css/imagens/12.jpg" class="avatar">
        <h2>Faça Parte Do Info</h2>
        <form method="POST" action="cadastrar.php">
            <P>Nome Completo</P>
            <input type="text" name="nome" placeholder="Nome Completo" maxlength="30">
            <p>Usuario</p>
            <input type="text" name="usuario" placeholder="Usuario" maxlength="20">
            <p>Senha</p>
            <input type="password" name="senha" placeholder="Senha" maxlength="15">
            <p>Confirme Senha</p>
            <input type="password" name="confsenha" placeholder="Confirme Senha" maxlength="15">
            <input type="submit" name="" value="Entre">
            <a href="index.php">Logue Aki</a>
        </form>
    </div>

</body>

</html>