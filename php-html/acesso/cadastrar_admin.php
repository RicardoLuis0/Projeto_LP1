<?php
include("banco.inc.php");
if(!isset($_POST['cpf'])||!isset($_POST['nome'])||!isset($_POST['nascimento'])||!isset($_POST['email'])||!isset($_POST['profissao'])||!isset($_POST['endereco'])||!isset($_POST['telefone'])||!isset($_POST['login'])||!isset($_POST['senha'])){
	die("faltando informacoes");
}
$cpf=$_POST['cpf'];
$nome=$_POST['nome'];
$nascimento=$_POST['nascimento'];
$email=$_POST['email'];
$profissao=$_POST['profissao'];
$endereco=$_POST['endereco'];
$telefone=$_POST['telefone'];
$login=$_POST['login'];
$senha=$_POST['senha'];
if($cpf==""||$nome==""||$nascimento==""||$email==""||$profissao==""||$endereco==""||$telefone==""||$login==""||$senha==""){
	die("faltando informacoes");
}
$resultado=add_usuario_pessoa_admin($login,$senha,$cpf,$nome,$nascimento,$email,$profissao,$endereco,$telefone);
if($resultado==1){
	echo "cadastrado com successo";
}else if($resultado==-1){
	echo "cpf ja foi cadastrado antes";
}else if($resultado==-2){
	echo "login ja existente";
}
?>