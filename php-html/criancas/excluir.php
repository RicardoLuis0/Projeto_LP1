<?php

	include_once 'conexao.php';
	$id = $_GET['id'];
	
	$excluir = "delete from criancas where codigo='$id' ";
	$executar = mysqli_query($con, $excluir);
	if($executar)
	{
		echo "Criança excluida com sucesso do banco de dados !";
		echo "<br>";
	}
	else
	{
		echo "Erro ao excluir os dados";
	}
	echo "<a href='formulario.php'> Voltar </a>";
?>
