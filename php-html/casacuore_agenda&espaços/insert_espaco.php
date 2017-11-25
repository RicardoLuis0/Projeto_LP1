<?php
include "caminho.php";
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$valor_hora = $_POST['valor_hora'];
$vagas = $_POST['vagas'];
$fotos = $_POST['fotos'];

// validação php

//banco

//conexão
$query = "INSERT INTO espacos VALUES ('$nome', '$descricao', '$valor_hora', '$vagas', '$fotos')";
$resposta = mysqli_query($con, $query);

if(!$resposta){
	echo "erro: não conectou" . PHP_EOL;
	echo "DEBUGGING ERRNO:" . mysqli_errno($con) . PHP_EOL;
	echo "DEBUGGING ERROR:" . mysqli_error($con) . PHP_EOL;
	exit;
}	


if($resposta)
	echo "Espaço cadastrado com sucesso";
?>