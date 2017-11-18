<html>
	<head>
		<title>Casas Cuore</title>
	</head>
	<body>
		<?php
		require_once("session.inc.php");
		if($logged){
			switch(tipo_conta($_SESSION['login'])){
			case "Pessoa":
			case "Educador":
				$pessoa=pegar_pessoa_login($_SESSION['login']);
				echo "<h5> Bem vindo ".$pessoa['nome']."[ ".$_SESSION['login']." ] <a href=gerenciar.php>Gerenciar Conta</a> <a href=logout.php>Deslogar</a></h5>";
				break;
			case "Admin":
				echo "<h5> Bem vindo Administrador ".$_SESSION['login']." <a href=gerenciar.php>Gerenciar Conta</a> <a href=gerenciar_site.php>Gerenciar Site</a> <a href=logout.php>Deslogar</a></h5>";
				break;
			}
		}else{
			echo "<h5> Voce nao esta logado <a href=cadastrar.html>Criar Conta</a> <a href=login.php>Fazer Login</a></h5>";
		}
		?>
