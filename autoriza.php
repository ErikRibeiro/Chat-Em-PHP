<?php
include "conexao.php";
$nome = $_POST["nome"];
$senha = $_POST["senha"];
$sql = "SELECT id_pk_usuario, nome, senha FROM usuario WHERE nome = '$nome' AND senha = '$senha';";
$buscar = mysqli_query($conexao,$sql);
$total = mysqli_num_rows($buscar);
while ($array = mysqli_fetch_array($buscar)) {
	$nomebd = $array["nome"];
	$senhabd = $array["senha"];
}
if ($senhabd == $senha && $nomebd == $nome) {
	session_start();
	$_SESSION['nome'] = $nome;
	$_SESSION['senha'] = $senha;
	header('Location: chat.php');
}else{
	header('Location: index.html');
}
?>
