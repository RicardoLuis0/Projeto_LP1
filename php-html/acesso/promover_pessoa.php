<?php
	include("header.inc.php");
	if($admin){
		if(isset($_POST['login'])){
			$p_login=$_POST['login'];
			echo "
<form action='promover_pessoa2.php' method=POST>
<input type=hidden name=login value='$p_login' />
<p>Conta Bancaria: <input type=text name=conta_banco value=conta_banco /></p>
<p>Salario: <input type=text name=salario value=salario /></p>
<p><input type=submit value=Confirmar /></p>
</form>
";
		}else{
			echo "Faltando Informacoes.";
		}
	}else{
		echo "Acesso Negado.";
	}
	include("footer.inc.php");
?>