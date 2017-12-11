<?php 

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "CasaCuore";

$con = mysqli_connect ($servidor, $usuario, $senha, $banco);
if (!$con) {
	echo "Erro ao conectar !!!";
}
?>