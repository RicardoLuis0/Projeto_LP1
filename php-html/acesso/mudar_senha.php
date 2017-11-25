<?php
	include("header.inc.php");
	if($logged){
		echo "
		<form action=trocar_senha.php method=post>
			<input type=hidden name=login value= '".$_SESSION['login']."'/>
			<p>Senha: <input type=text name=senha /></p>
			<p>Nova Senha: <input type=text name=nova_senha /></p>
			<p><input type=submit value='Confirmar' /></p>
		</form>
		";
	}else{
		echo "Acesso Negado.";
	}
	include("footer.inc.php");
?>