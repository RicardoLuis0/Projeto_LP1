<?php
$nome=$_POST["nome"];
$descr=$_POST["descr"];
$data=$_POST["data"];
$valor=$_POST["valor"];
$tipo=$_POST["tipo"];


include "caminho.php";

$query="INSERT INTO custos VALUES ('$nome','$descr','$data','$valor','$tipo','')";


	if(!mysqli_query($con,$query)){
		echo 'debugging error:'.mysqli_errno($con).PHP_EOL;
		echo 'debugging error:'.mysqli_error($con).PHP_EOL;
	}
	else {
		echo'Sucesso ao inserir custos!!';
	}
?>