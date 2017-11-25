<?php
include "caminho.php";
$chave = $_POST['chave'];
$dado = $_POST['dado'];

// validação php

//banco

//conexão
$query = "SELECT * FROM agenda WHERE $dado LIKE '$chave%'";
$resposta = mysqli_query($con, $query);

if(!$resposta){
	echo "erro: não foi possivel realizar a busca" . PHP_EOL;
	echo "DEBUGGING ERRNO:" . mysqli_errno($con) . PHP_EOL;
	echo "DEBUGGING ERROR:" . mysqli_error($con) . PHP_EOL;
	exit;
}	
else {
?>
	<table border="1">
		<tr>
			<td>Nome</td><td>Descrição</td><td>Valor por hora</td><td>Vagas</td><td>Fotos</td>
		</tr>
<?php
	while($linha = mysqli_fetch_array($resposta)){
		echo "<tr><td>".$linha['nome']."</td><td>".$linha['descricao']."</td><td>".$linha['valor_hora']."</td><td>".$linha['vagas']."</td><td>".$linha['fotos']."</td>";	
	}
echo "</table>";
}
?>