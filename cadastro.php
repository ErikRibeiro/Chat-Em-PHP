<?php
include "conexao.php";
$nome = $_POST["nome"];
$senha = $_POST["senha"];
$sql = "INSERT INTO  `usuario`( `nome`,  `senha`) VALUES('$nome', '$senha');";
$insert = mysqli_query($conexao,$sql);
if ($insert) {
	header('Location: index.html');
}else{
	header('Location: cadastro.html');
}
?>
