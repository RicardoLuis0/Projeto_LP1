<?php
if(!isset($title)){
	$title="Casas Cuore";
}
echo "
<html>
	<head>
		<title>$title</title>
	</head>
	<body>
";
require_once("session.inc.php");
if($logged){
	if(!isset($do_header)){
		$do_header=1;
	}
	switch(tipo_conta($_SESSION['login'])){
	case "Pessoa":
	case "Educador":
		$pessoa=pegar_pessoa_login($_SESSION['login']);
		if($do_header){
			echo "<h5> Bem vindo ".$pessoa['nome']."[ ".$_SESSION['login']." ] <a href=gerenciar.php>Gerenciar Conta</a> <a href=logout.php>Deslogar</a> <a href='index.php'>Index</a></h5>";
		}
		$admin=0;
		break;
	case "Admin":
		$pessoa=pegar_pessoa_login($_SESSION['login']);
		if($do_header){
			echo "<h5> Bem vindo Administrador ".$_SESSION['login']." <a href=gerenciar.php>Gerenciar Conta</a> <a href=gerenciar_site.php>Gerenciar Site</a> <a href=logout.php>Deslogar</a> <a href='index.php'>Index</a></h5>";
		}
		$admin=1;
		break;
	}
	$s_login=$_SESSION['login'];
}else{
	//<a href=cadastrar.html>Criar Conta</a>
	$admin=0;
	echo "<h5> Voce nao esta logado <a href=login.php>Fazer Login</a> <a href='index.php'>Index</a></h5>";
}
?>
