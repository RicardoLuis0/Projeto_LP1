<?php
//parametros conexão
$servidor= "localhost";
$usuario = "root";
$senha = "";
$banco = "casacuore";

//Conectar e selecionar banco
$con = mysqli_connect ($servidor, $usuario, $senha, $banco);

if(!$con){
	echo "erro: não conectou" . PHP_EOL;
	echo "DEBUGGING ERRNO:" . mysqli_connect_errno() . PHP_EOL;
	echo "DEBUGGING ERROR:" . mysqli_connect_error() . PHP_EOL;
	exit;
}	
?>