<?php
function print_contas($array){
	if($array===0){
		echo "Nao ha resultados.";
	}else{
		echo "<table border=1>";
		echo "<tr><th>Login</th><th>Tipo</th><th>CPF</th><th>Nome</th><th>Nascimento</th><th>E-mail</th><th>Profissao</th><th>Endereco</th><th>Telefone</th></tr>";
		foreach($array as $value){
			$p_login=$value[0];
			$p_tipo=$value[1];
			$p_cpf=$value[2];
			$p_nome=$value[3];
			$p_nascimento=$value[4];
			$p_email=$value[5];
			$p_profissao=$value[6];
			$p_endereco=$value[7];
			$p_telefone=$value[8];
			echo "<tr><td>$p_login</td><td>$p_tipo</td><td>$p_cpf</td><td>$p_nome</td><td>$p_nascimento</td><td>$p_email</td><td>$p_profissao</td><td>$p_endereco</td><td>$p_telefone</td></tr>";
			//echo "<p>Login: $p_login Tipo da Conta: $p_tipo CPF: $p_cpf Nome: $p_nome Nascimento: $p_nascimento E-mail: $p_email Profissao: $p_profissao Endereco: $p_endereco Telefone: $p_telefone </p>";
		}
		echo "<table>";
	}
}
?>