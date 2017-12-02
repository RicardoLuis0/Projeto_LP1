<?php
	$do_header=0;
	include("header.inc.php");
	if($admin){
		if(isset($_POST['login'])){
			$p_login=$_POST['login'];
			$res=promover_pessoa_admin($p_login);
			if($res){
				echo "Usuario promovido com sucesso.";
			}else if($res===0){
				echo "Usuario nao Existe.";
			}else{
				echo "Usuario nao eh Pessoa.";
			}
		}else{
			echo "Faltando Informacoes.";
		}
	}else{
		echo "Acesso Negado.";
	}
	include("footer.inc.php");
?>