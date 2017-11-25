<?php 

include "caminho.php";
$id = $_POST['nome'];

	if ($_POST['dado']=="nome_novo") {
		$nome = $_POST['chave'];
		
		$sql = "UPDATE espacos SET nome = '$nome' WHERE nome = '$id'";
		echo $sql;
		$query = mysqli_query($con, $sql);

		if ($query) {
			echo "Nome alterado com sucesso !.. Aguarde";
			header("Refresh:3; URL=indexespaco.htm");
		}
	}

	else if($_POST['dado']=="descricao") {
		$descricao = $_POST['chave'];

		$sql = "UPDATE espacos SET descricao = '$descricao' WHERE nome = '$id' ";
		$query = mysqli_query($con, $sql);

		if ($query) {

			echo "Descrição alterada com sucesso !.. Aguarde";
			header("Refresh:3; URL=indexespaco.htm");
		}
	}

	else if($_POST['dado']=="valor_hora") {
		$valor_hora = $_POST['chave'];

		$sql = "UPDATE espacos SET valor_hora = '$valor_hora' WHERE nome = '$id' ";
		$query = mysqli_query($con, $sql);

		if ($query) {

			echo "Valor por hora alterado com sucesso !.. Aguarde";
			header("Refresh:3; URL=indexespaco.htm");
		}
	}
	
		else if($_POST['dado']=="vagas") {
		$vagas = $_POST['chave'];

		$sql = "UPDATE espacos SET vagas = '$vagas' WHERE nome = '$id' ";
		$query = mysqli_query($con, $sql);

		if ($query) {

			echo "Numero de vagas alterado com sucesso !.. Aguarde";
			header("Refresh:3; URL=indexespaco.htm");
		}
	}
	
		else if($_POST['dado']=="fotos") {
		$valor_hora = $_POST['chave'];

		$sql = "UPDATE espacos SET fotos = '$fotos' WHERE nome = '$id' ";
		$query = mysqli_query($con, $sql);

		if ($query) {

			echo "Repositorio de fotos alterado com sucesso !.. Aguarde";
			header("Refresh:3; URL=indexespaco.htm");
		}
	}


?>