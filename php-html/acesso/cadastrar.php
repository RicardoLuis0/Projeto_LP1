<?php
include("banco.inc.php");
if(!isset($_POST['cpf'])||!isset($_POST['nome'])||!isset($_POST['nascimento'])||!isset($_POST['email'])||!isset($_POST['profissao'])||!isset($_POST['endereco'])||!isset($_POST['telefone'])||!isset($_POST['login'])||!isset($_POST['senha'])||!isset($_POST['data_inicial')){
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
$data_inicial=$_POST['data_inicial'];
$data_auto=(isset($_POST['data_auto']));
if($cpf==""||$nome==""||$nascimento==""||$email==""||$profissao==""||$endereco==""||$telefone==""||$login==""||$senha==""||($data_inicial==""&&$data_auto==false)){
	die("faltando informacoes");
}
$resultado=add_usuario_pessoa($login,$senha,$cpf,$nome,$nascimento,$email,$profissao,$endereco,$telefone,$data_inicial,$data_auto);
if($resultado==1){
	echo "cadastrado com successo";
}else if($resultado==-1){
	echo "cpf ja foi cadastrado antes";
}else if($resultado==-2){
	echo "login ja existente";
}
?>