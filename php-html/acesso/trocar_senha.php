<?php
include("banco.inc.php");
if(!isset($_POST['login'])||!isset($_POST['senha'])||!isset($_POST['nova_senha'])){
	die("faltando informacoes");
}
$login=$_POST['login'];
$senha=$_POST['senha'];
$nova_senha=$_POST['nova_senha'];
if(trocar_senha($login,$senha,$nova_senha)){
	echo("Senha trocada com sucesso");
}else{
	echo("Erro ao trocar senha");
}
?>