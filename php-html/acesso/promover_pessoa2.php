<?php
	$do_header=0;
	include("header.inc.php");
	if($admin){
		if(isset($_POST['login'])&&isset($_POST['conta_banco'])&&isset($_POST['salario'])){
			$p_login=$_POST['login'];
			$p_conta_banco=$_POST['conta_banco'];
			$p_salario=$_POST['salario'];
			$res=promover_pessoa($p_login,$p_conta_banco,$p_salario);
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