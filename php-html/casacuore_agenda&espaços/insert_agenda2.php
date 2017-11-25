<?php
include("banco.inc.php");
if(!isset($_POST['espaco'])||!isset($_POST['evento'])||!isset($_POST['data_inicio'])||!isset($_POST['data_fim'])||!isset($_POST['hora_inicio'])||!isset($_POST['hora_fim'])||!isset($_POST['log'])||!isset($_POST['evento'])||!isset($_POST['responsavel'])||!isset($_POST['cod_cat'])){
	die("faltando informacoes");
}
$espaco=$_POST['espaco'];
$evento=$_POST['evento'];
$nome=$_POST['nome'];
$data_inicio=$_POST['data_inicio'];
$data_fim=$_POST['data_fim'];
$hora_inicio=$_POST['hora_inicio'];
$hora_fim=$_POST['hora_fim'];
$evento=$_POST['evento'];
$responsavel=$_POST['responsavel'];
$cod_cat=$_POST['cod_cat'];
if($espaco==""||$evento==""||$nome==""||$data_inicio==""||$data_fim==""||$hora_inicio==""||$hora_fim==""||$login==""||$senha==""||$cod_cat==""){
	die("faltando informacoes");
}
$resultado=add_usuario_pessoa($espaco,$nome,$data_inicio,$data_fim,$hora_inicio,$hora_fim);
if($resultado==1){
	echo "cadastrado com successo";
}else if($resultado==-1){
	echo "cpf ja foi cadastrado antes";
}else if($resultado==-2){
	echo "login ja existente";
}
?>