<html>
	<body>
		<?php
if(isset($_POST['login'])&&isset($_POST['senha'])){
	require_once('banco.inc.php');
	$login=$_POST['login'];
	$senha=$_POST['senha'];
	if(verificar_hash($login,$senha)){
		$res=pegar_pessoa_login($login);
		if($res===0){
			echo "<p>Erro ao acessar dados do usuario, por favor contate um administrador</p>";
		}else{
			$cpf=$res['cpf'];
			$nome=$res['nome'];
			$nascimento=$res['nascimento'];
			$email=$res['email'];
			$profissao=$res['profissao'];
			$endereco=$res['endereco'];
			$telefone=$res['telefone'];
			$responsavel=$res['responsavel'];
			echo "
			<form action='mudar_dados_2.php' method=POST>
				<input type=hidden name='cpf' value='$cpf' />
				<p>Nome: <input type=text name='nome' value='$nome' /></p>
				<p>Nascimento: <input type=text name='nascimento' value='$nascimento' /></p>
				<p>E-mail: <input type=text name='email' value='$email' /></p>
				<p>Profissao: <input type=text name='profissao' value='$profissao' /></p>
				<p>Endereco: <input type=text name='endereco' value='$endereco' /></p>
				<p>Telefone: <input type=text name='telefone' value='$telefone' /></p>
				<p><input type=checkbox name='responsavel' value=$responsavel /> Responsavel</p>
				<p><input type=submit value='Mudar' /> <input type=reset value='Resetar' /></p>
			</form>
			";
		}
	}else{
		echo "<p>Usuario inexistente ou senha errada</p>";
	}
}else{
	echo "<p>Faltando dados</p>";
}
		?>
	</body>
</html>