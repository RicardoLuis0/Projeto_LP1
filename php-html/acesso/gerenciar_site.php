<?php
	include("header.inc.php");
	if($admin){
		echo "
		<p><a href='gerenciar_contas.php'>Gerenciar Contas</a></p>
		";
	}else{
		echo "Acesso Negado.";
	}
	include("footer.inc.php");
?>