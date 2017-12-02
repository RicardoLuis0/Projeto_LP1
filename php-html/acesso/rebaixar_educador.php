<?php
	$do_header=0;
	include("header.inc.php");
	if($admin){
		if(isset($_POST['login'])){
			$p_login=$_POST['login'];
			$res=rebaixar_educador($p_login);
			if($res){
				echo "Usuario rebaixado com sucesso.";
			}else if($res===0){
				echo "Usuario nao Existe.";
			}else if($res==-1){
				echo "Usuario nao eh Educador.";
			}else{
				echo "Erro fatal dados tabela educador nao existem.";
			}
		}else{
			echo "Faltando Informacoes.";
		}
	}else{
		echo "Acesso Negado.";
	}
	include("footer.inc.php");
?>