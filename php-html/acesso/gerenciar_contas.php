<?php
	include("header.inc.php");
	include("gerenciar_contas_funcs.inc.php");
	if($admin){
		echo "<p><a href='gerenciar_contas_buscar1.php'>Buscar</a></p>";
		$array=listar_usuarios();
		print_contas($array);
		echo "
		<p>
		<form action='cadastrar.html' method=POST>
		<input type=submit value='Adicionar Usuario' />
		</form>
		</p>
		<p>
		<form action='cadastrar_educador.html' method=POST>
		<input type=submit value='Adicionar Educador' />
		</form>
		</p>
		<p>
		<form action='cadastrar_admin.html' method=POST>
		<input type=submit value='Adicionar Admin' />
		</form>
		</p>
		";
	}else{
		echo "Acesso Negado.";
	}
	include("footer.inc.php");
?>