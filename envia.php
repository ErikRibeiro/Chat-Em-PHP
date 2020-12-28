<?php
include "conexao.php";
session_start();
  $nome = $_SESSION["nome"];
  $senha = $_SESSION["senha"];
  $sql = "SELECT id_pk_usuario, nome, senha FROM usuario WHERE nome = '$nome' AND senha = '$senha';";
  $buscar = mysqli_query($conexao,$sql);
  $array = mysqli_fetch_array($buscar);
  $id = $array["id_pk_usuario"];
  $nome = $array["nome"];
  $senha = $array["senha"];
  $msg = $_POST["msg"];
$sql = "INSERT INTO msg(msg, id_fk_usuario) VALUES('$msg','$id');";
if ($msg != NULL) {
	$insert = mysqli_query($conexao,$sql);
}else{
	header("location: chat.php");
}
if ($insert) {
	header("location: chat.php");
}
?>