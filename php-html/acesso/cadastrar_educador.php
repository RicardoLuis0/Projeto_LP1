<?php
include("banco.inc.php");
if(!isset($_POST['cpf'])||!isset($_POST['nome'])||!isset($_POST['nascimento'])||!isset($_POST['email'])||!isset($_POST['profissao'])||!isset($_POST['endereco'])||!isset($_POST['telefone'])||!isset($_POST['login'])||!isset($_POST['senha'])||!isset($_POST['data_inicial')||!isset($_POST['conta_banco'])||!isset($_POST['salario'])){
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
$conta_banco=$_POST['conta_banco'];
$salario=$_POST['salario'];
if($cpf==""||$nome==""||$nascimento==""||$email==""||$profissao==""||$endereco==""||$telefone==""||$login==""||$senha==""||($data_inicial==""&&$data_auto==false)||$conta_banco==""||$salario==""){
	die("faltando informacoes");
}
$resultado=add_usuario_educador($login,$senha,$cpf,$nome,$nascimento,$email,$profissao,$endereco,$telefone,$data_inicial,$data_auto,$conta_banco,$salario);
if($resultado==1){
	echo "cadastrado com successo";
}else if($resultado==-1){
	echo "cpf ja foi cadastrado antes";
}else if($resultado==-2){
	echo "login ja existente";
}
?>