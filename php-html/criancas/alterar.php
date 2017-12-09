<?php
	require_once "conexao.php";
	$codigo = $_POST['categoria_categoria'];
	$nome = $_POST ['nome'];
	$data = $_POST['data'];
	$responsavel = $_POST['responsavel'];
	$foto = $_POST['foto'];

	$alterar = "UPDATE criancas SET nome = '$nome', data_nascimento = '$data', cpfResponsavel = '$responsavel', foto = '$foto' where codigo = '$codigo'";

	$executar = mysqli_query($con, $alterar);
	if($executar)
	{
		echo "Dados alterado com sucesso";
		echo "<br>";
	}
	else
	{
		echo "Erro ao alterar os dados";
	}
	echo "<a href='formulario.php'> Voltar </a>";
?>
