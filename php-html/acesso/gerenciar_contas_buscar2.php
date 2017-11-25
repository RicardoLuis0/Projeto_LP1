<?php
	include("header.inc.php");
	include("gerenciar_contas_funcs.inc.php");
	if($admin){
		//query= string
		//tipo= int
		//tipo 0= busca por login nao exato
		//tipo 1= busca por login exato
		//tipo 2= busca por nome
		//tipo 3= busca por cpf
		if(!isset($_POST['query'])||!isset($_POST['tipo'])){
			echo "<p>Faltando dados</p>";
		}else{
			$query=$_POST['query'];
			$tipo=$_POST['tipo'];
			if($tipo<0||$tipo>3){
				echo "<p>Tipo de busca invalido</p>";
			}else{
				switch($tipo){
				case 0:
					$array=buscar_usuarios_login($query,0);
					break;
				case 1:
					$array=buscar_usuarios_login($query,1);
					break;
				case 2:
					$array=buscar_usuarios_nome($query);
					break;
				case 3:
					$array=buscar_usuarios_cpf($query);
					break;
				}
				print_contas($array);
			}
		}
	}else{
		echo "Acesso Negado.";
	}
	include("footer.inc.php");
?>