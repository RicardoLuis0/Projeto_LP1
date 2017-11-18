<html>
	<body>
		<?php
if(
isset($_POST['cpf'])&&
isset($_POST['nome'])&&
isset($_POST['nascimento'])&&
isset($_POST['email'])&&
isset($_POST['profissao'])&&
isset($_POST['endereco'])&&
isset($_POST['telefone'])
){
	require_once("banco.inc.php");
	$cpf=$_POST['cpf'];
	$nome=$_POST['nome'];
	$nascimento=$_POST['nascimento'];
	$email=$_POST['email'];
	$profissao=$_POST['profissao'];
	$endereco=$_POST['endereco'];
	$telefone=$_POST['telefone'];
	$responsavel=isset($_POST['responsavel']);
	$res=update_pessoa($cpf,$nome,$nascimento,$email,$profissao,$endereco,$telefone,$responsavel);
	if($res){
		echo "<p>Dados atualizados com sucesso</p>";
	}else{
		echo "<p>Erro ao atualizar banco de dados, por favor contate um administrador</p>";
	}
}else{
	echo "<p>Faltando dados</p>";
}

		?>
	</body>
</html>