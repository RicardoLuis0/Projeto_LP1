<?php
include("banco.inc.php");
if(!isset($_POST['login'])){
	echo "faltando dados";
}else{
	$res=deletar_usuario($_POST['login']);
	if($res===true){
		echo "Usuario deletado com sucesso";
	}else{
		echo "Erro ao deletar usuario: ".$res;
	}
}
?>