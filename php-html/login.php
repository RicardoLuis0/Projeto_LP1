<?php
include("banco.inc.php");
if(!isset($_POST['login'])||!isset($_POST['senha'])){
	die("faltando informacoes");
}
$login=$_POST['login'];
$senha=$_POST['senha'];
if(checar_login($login){
	if(verificar_hash($login,$senha)){
		echo "Senha Correta";
	}else{
		echo "Senha Errada";
	}
}else{
	echo "Usuario nao existe";
}
?>