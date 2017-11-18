<html>
	<head>
		<title>Casas Cuore</title>
		<meta http-equiv="refresh" content="3;index.php" />
	</head>
	<body>
		<?php
require_once("session.inc.php");
if($logged){
	$_SESSION=array();
	session_destroy();
	echo "<p>Voce foi deslogado</p>";
}else{
	echo "<p>Nao esta logado</p>";
}
		?>
	</body>
</html>