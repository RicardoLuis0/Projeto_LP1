<?php
	include("header.inc.php");
	include("gerenciar_contas_funcs.inc.php");
	if($admin){
		echo "<p><a href='gerenciar_contas_buscar1.php'>Buscar</a></p>";
		$array=listar_usuarios();
		print_contas($array);
	}else{
		echo "Acesso Negado.";
	}
	include("footer.inc.php");
?>