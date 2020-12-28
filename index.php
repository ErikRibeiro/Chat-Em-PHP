<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="utf-8">
  <title>Chat público</title>
  <link href="styles.css" rel="stylesheet" />
</head>
<body>
  <div class="outer">
    <div class="middle">
      <div class="inner">
        <div id="logo"></div>
        <div id="container_nickname">
            <form method="post" action="autoriza.php">
              <p>Nickname</p>
              <input name="nome" type="text" autofocus required class="general_textbox" maxlength="30">
              <p>Password</p>
              <input name="senha" type="password" autofocus required class="general_textbox" maxlength="30">
              <h6 onclick="redirecionar()">Cadastre-se, clique aqui</h6>
              <button>Entrar</button>
            </form>
        </div>
      </div>
    </div>
  </div>  
</body>
<script type="text/javascript">
  function redirecionar(){
  window.location.href = "cadastro.html";
}
</script>
</html>