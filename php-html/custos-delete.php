<?php 
$busca=$_POST["busca"];


include "caminho.php";
$query="DELETE FROM custos WHERE nome='$busca'";
$resposta=mysqli_query($con,$query);
	if (!$resposta){
					echo "Erro: nao foi possivel apagar categoria." . php_eol;
					echo "debugging errno".mysqli_errno($con).php_eol;
					echo "debugging error".mysqli_error($con).php_eol;
				}
				else {
					echo "categoria apagada com sucesso";
				}
?>