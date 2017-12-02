<?php
	$do_header=0;
	include("header.inc.php");
	if($admin){
		if(isset($_POST['login'])){
			$p_login=$_POST['login'];
			if($s_login===$p_login){
				echo "Nao pode rebaixar a si mesmo.";
			}else{
				$res=rebaixar_admin($p_login);
				if($res){
					echo "Usuario rebaixado com sucesso.";
				}else if($res===0){
					echo "Usuario nao Existe.";
				}else{
					echo "Usuario nao eh Admin.";
				}
			}
		}else{
			echo "Faltando Informacoes.";
		}
	}else{
		echo "Acesso Negado.";
	}
	include("footer.inc.php");
?>