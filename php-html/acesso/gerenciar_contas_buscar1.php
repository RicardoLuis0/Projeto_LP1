<?php
	include("header.inc.php");
	include("gerenciar_contas_funcs.inc.php");
	if($admin){
echo "
<form action='gerenciar_contas_buscar2.php' method=POST>
<p>Busca: <input type=text name=query /></p>
<p>Tipo:</p>
<p><input type=radio name=tipo value=0 id=0/><label for=0>Login</label></p>
<p><input type=radio name=tipo value=1 id=1/><label for=1>Login exato</label></p>
<p><input type=radio name=tipo value=2 id=2/><label for=2>Nome</label></p>
<p><input type=radio name=tipo value=3 id=3/><label for=3>CPF</label></p>
<p><input type=submit value='Confirmar' /></p>
</form>
";
	}else{
		echo "Acesso Negado.";
	}
	include("footer.inc.php");
?>