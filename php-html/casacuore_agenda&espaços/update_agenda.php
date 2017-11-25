<?php 

include "caminho.php";
$id = $_POST['id'];

	if ($_POST['dado']=="espaco") {
		$espaco = $_POST['chave'];
		
		$sql = "UPDATE agenda SET nome = '$espaco' WHERE id_evento = '$id'";
		$query = mysqli_query($con, $sql);

		if ($query) {
			echo "Espaço alterado com sucesso !.. Aguarde";
			header("Refresh:3; URL=indexespaco.htm");
		}
	}

	else if($_POST['dado']=="evento") {
		$evento = $_POST['chave'];

		$sql = "UPDATE agenda SET evento = '$evento' WHERE nome = '$id' ";
		$query = mysqli_query($con, $sql);

		if ($query) {

			echo "Nome do evento alterado com sucesso !.. Aguarde";
			header("Refresh:3; URL=indexespaco.htm");
		}
	}

	else if($_POST['dado']=="data_inicio") {
		$data_inicio = $_POST['chave1'];
		$data_fim = $_POST['chave2'];
		$hora_inicio = $_POST['chave3'];
		$hora_fim = $_POST['chave4'];

		$sql = "UPDATE agenda SET data_inicio = '$data_inicio' WHERE nome = '$id' ";
		$sql = "UPDATE agenda SET data_fim = '$data_fim' WHERE nome = '$id' ";
		$sql = "UPDATE agenda SET hora_inicio = '$hora_inicio' WHERE nome = '$id' ";
		$sql = "UPDATE agenda SET hora_fim = '$hora_fim' WHERE nome = '$id' ";
		$query = mysqli_query($con, $sql);

		if ($query) {

			echo "Data do evento alterada com sucesso !.. Aguarde";
			header("Refresh:3; URL=indexespaco.htm");
		}
	}
	
	else if($_POST['dado']=="responsavel") {
		$responsavel = $_POST['chave'];

		$sql = "UPDATE agenda SET responsavel = '$responsavel' WHERE nome = '$id' ";
		$query = mysqli_query($con, $sql);

		if ($query) {

			echo "Responsavel alterado com sucesso !.. Aguarde";
			header("Refresh:3; URL=indexespaco.htm");
		}
	}
	
		else if($_POST['dado']=="cod_cat") {
		$data_inicio = $_POST['chave'];

		$sql = "UPDATE agenda SET cod_cat = '$cod_cat' WHERE nome = '$id' ";
		$query = mysqli_query($con, $sql);

		if ($query) {

			echo "Catalizador alterado com sucesso !.. Aguarde";
			header("Refresh:3; URL=indexespaco.htm");
		}
	}


?>