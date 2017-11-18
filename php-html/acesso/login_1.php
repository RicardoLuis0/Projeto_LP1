<html>
	<head>
		<title>Casas Cuore</title>
		<meta http-equiv="refresh" content="3;index.php" />
	</head>
	<body>
		<?php
require_once("session.inc.php");
if($logged){
	
}else{
	if(!isset($_POST['login'])||!isset($_POST['senha'])){
		die("faltando informacoes");
	}
	$login=$_POST['login'];
	$senha=$_POST['senha'];
	if(checar_login($login)){
		if(verificar_hash($login,$senha)){
			$_SESSION['login']=$login;
			$_SESSION['senha']=$senha;
			$_SESSION['logged']=true;
			echo "Senha Correta";
		}else{
			echo "Senha Errada";
		}
	}else{
		echo "Usuario nao existe";
	}

}
		?>
	</body>
</html>