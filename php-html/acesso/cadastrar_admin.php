<?php
include("banco.inc.php");
if(!isset($_POST['login'])||!isset($_POST['senha'])){
	die("faltando informacoes");
}
$login=$_POST['login'];
$senha=$_POST['senha'];
if($login==""||$senha==""){
	die("faltando informacoes");
}
$resultado=add_usuario_admin($login,$senha);
if($resultado==1){
	echo "cadastrado com successo";
}else{
	echo "login ja existente";
}
?>