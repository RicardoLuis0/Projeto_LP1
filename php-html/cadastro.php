<?php
require "conexao.php";

if (isset($_GET['nome'])){
	$nome = $_GET['nome'];
	$data_nascimento = $_GET['data_nascimento'];
	$responsavel = $_GET['responsavel'];
	$foto = $_GET['foto'];
	

	$sql = "INSERT INTO criancas(nome, data_nascimento, cpfResponsavel, foto) VALUES ('$nome', '$data_nascimento', '$responsavel', '$foto') ";
	$query = mysqli_query($con, $sql);

	if($query){
		echo "cadastrado com sucesso!";
	}else{
		echo "erro ao cadastrar";
	}
}
echo "<a href='formulario.php'> Voltar </a>";

?>