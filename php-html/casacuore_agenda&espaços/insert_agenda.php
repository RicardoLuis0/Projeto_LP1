<?php
include "caminho.php";
$espaco = $_POST['espaco'];
$evento = $_POST['evento'];
$data_inicio = $_POST['data_inicio'];
$data_fim = $_POST['data_fim'];
$hora_inicio = $_POST['hora_inicio'];
$hora_fim = $_POST['hora_fim'];
$responsavel = $_POST['responsavel'];
$cod_cat = $_POST['cod_cat'];

// validação php

//banco

//conexão
$query = "INSERT INTO agenda VALUES ('$espaco', '$evento', '$data_inicio', '$data_fim', '$hora_inicio', '$hora_fim', '$responsavel', '$cod_cat')";
$resposta = mysqli_query($con, $query);

if(!$resposta){
	echo "erro: não conectou" . PHP_EOL;
	echo "DEBUGGING ERRNO:" . mysqli_errno($con) . PHP_EOL;
	echo "DEBUGGING ERROR:" . mysqli_error($con) . PHP_EOL;
	exit;
}	


if($resposta)
	echo "Agendamento feito com sucesso";
?>