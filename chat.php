<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="utf-8">
  <title>Chat público</title>
  <link href="styles.css" rel="stylesheet" />
</head>
<body>
	<?php
    	session_start();
    	$nome = $_SESSION["nome"];
    	$senha = $_SESSION["senha"];
    	if (!isset($_SESSION["nome"]) && isset($_SESSION["senha"])) {
    		header('Location: index.html');
    	}
    	include "conexao.php";
    	$sql = "SELECT id_pk_usuario, nome, senha FROM usuario WHERE nome = '$nome' AND senha = '$senha';";
    	$buscar = mysqli_query($conexao,$sql);
    	$array = mysqli_fetch_array($buscar);
    	$id = $array["id_pk_usuario"];
    	$nome = $array["nome"];
    	$senha = $array["senha"];
    	?>
<div id="sidebar"><h1>Chat</h1><br><h1>Nickname: <?php echo $nome ?></h1></div>
<div id="primary">
    <div id="log">
    	<?php
    	include "conexao.php";
    	$sql = "select msg.id_pk_msg, msg.msg, msg.id_fk_usuario, usuario.nome from msg inner join usuario on msg.id_fk_usuario = usuario.id_pk_usuario order by msg.id_pk_msg;";
    	$busca = mysqli_query($conexao,$sql);
    	while ($array = mysqli_fetch_array($busca)) {
    		$msg = $array['msg'];
    		$nome = $array['nome'];
    		?>
    		<h1><?php echo $nome?></h1>
    		<h1><?php echo $msg ?></h1><br>
    	<?php } ?>
        <span class="long-content"></span>
    </div>
    <div id="composer">
        <form method="post" action="envia.php">
          <input name="msg" type="text" autofocus required class="textbox_message">
          <button id="btn_send">Enviar</button>
        </form>
    </div>
</div> 
</body>
</html>