<?php
$host  = "localhost";
$user  = "root";
$pass  = "usbw";
$banco = "login";
$conexao = mysqli_connect($host, $user, $pass) or die ("Erro ao Conectar");
mysqli_select_db($conexao, $banco);

?>
