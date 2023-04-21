<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title>WMS - Web Market Stock</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/style1.css">
		<style>
			body {
			    background-image: url("imagens/<?php echo rand(1, 5); ?>.JPG");
			    background-repeat: no-repeat;
			    background-size: cover;
				-webkit-background-size: cover; /* SAFARI / CHROME */
				-moz-background-size: cover; /* FIREFOX */
				-ms-background-size: cover; /* IE */
				-o-background-size: cover; /* OPERA */
			}
		</style>
		
    </head>
	<body>
		<div class="menu">
				<a href="#">Home</a>
				<a href="login.php">Login</a>
				<a href="quemsomos.php">Quem Somos</a>
		</div>
		<div class="imagem">
			<img id="imagemLogo" src="imagens/WMS.png">
		</div>
		<div class="login"  align="center" >
			<form id="form-signin" method="POST" action="login_acesso.php">
				<div class="form-signin">
					<h1 id="loginH1">Você no comando!</h1>
					<br />
					<input type="text" name="usuario" class="form-control" placeholder="Usuário" required autocomplete="off" autofocus>
					<br/>
					<input type="password" name="senha" class="form-control" placeholder="Senha" required autocomplete="off">
					<br />
					<button class="botaoEnviarLogin" type="submit" name="enviar">Entrar</button>					
				</div>
			</form>
			<br />
		</div>
		<div class="rodape">
				<p>RODAPÉ</p>
		</div>
  </body>
</html>
