<html>
	<body>
		<?php
		require_once("session.inc.php");
		if($logged){
			echo "<p>Voce ja esta logado</p>";
		}else{
			echo "
			<form action=login_1.php method=post>
				<p><input type=text name=login></p>
				<p><input type=text name=senha></p>
				<p><input type=submit value='Confirmar'></p>
			</form>
			";
		}
		?>
	</body>
</html>
