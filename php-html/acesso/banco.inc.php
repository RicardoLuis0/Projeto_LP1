<?php

function checar_login($login){
	$conn=mysqli_connect("localhost","root","","CasaCuore");
	if(!$conn->connect_errno===0){
		die("erro conectar como usuario:(".$conn->connect_errno.") ".$conn->connect_error);
	}
	$sql="SELECT * FROM usuarios WHERE login = '$login'";
	$res=$conn->query($sql);
	if($res->num_rows>0){
		return true;
	}
	return false;
}

function pegar_usuario_login($login){
	$conn=mysqli_connect("localhost","root","","CasaCuore");
	if(!$conn->connect_errno===0){
		die("erro conectar como usuario:(".$conn->connect_errno.") ".$conn->connect_error);
	}
	$sql="SELECT * FROM usuarios WHERE login = '$login'";
	$res=$conn->query($sql);
	if($res->num_rows>0){
		return $res->fetch_assoc();
	}
	return false;
}

function checar_cpf($cpf){
	$conn=mysqli_connect("localhost","root","","CasaCuore");
	if(!$conn->connect_errno===0){
		die("erro conectar como usuario:(".$conn->connect_errno.") ".$conn->connect_error);
	}
	$sql="SELECT * FROM pessoas WHERE cpf = '$cpf'";
	$res=$conn->query($sql);
	if($res->num_rows>0){
		return true;
	}
	return false;
}

function verificar_hash($login,$senha){
	$conn=mysqli_connect("localhost","root","","CasaCuore");
	if(!$conn->connect_errno===0){
		die("erro conectar como usuario:(".$conn->connect_errno.") ".$conn->connect_error);
	}
	$sql="SELECT * FROM usuarios WHERE login = '$login'";
	$res=$conn->query($sql);
	if($res->num_rows>0){
		$acc=$res->fetch_assoc();
		//print_r($acc);
		if(password_verify($senha,$acc['hash'])){
			return true;
		}else{
			return false;
		}
	}
	return false;
}

function trocar_senha($login,$senha,$nova_senha){
	if(verificar_hash($login,$senha)){
		$conn=mysqli_connect("localhost","root","","CasaCuore");
		if(!$conn->connect_errno===0){
			die("erro conectar como usuario:(".$conn->connect_errno.") ".$conn->connect_error);
		}
		$hash=password_hash($nova_senha,PASSWORD_DEFAULT);
		$sql="UPDATE usuarios SET hash='$hash' WHERE login='$login'";
		$res=$conn->query($sql);
		return $res;
	}else{
		return false;
	}
}

function add_usuario_pessoa($login,$senha,$cpf,$nome,$nascimento,$email,$profissao,$endereco,$telefone,$responsavel=0,$foto='foto_padrao.jpg'){
	if(checar_cpf($cpf)==true){
		return -1;
	}else if(checar_login($login)==true){
		return -2;
	}else{
		$hash=password_hash($senha,PASSWORD_DEFAULT);
		$conn=mysqli_connect("localhost","root","","CasaCuore");
		if(!$conn->connect_errno===0){
			die("erro conectar como usuario:(".$conn->connect_errno.") ".$conn->connect_error);
		}
		$sql="INSERT INTO pessoas (cpf,nome,nascimento,email,profissao,endereco,telefone,responsavel,foto) VALUES ('$cpf','$nome','$nascimento','$email','$profissao','$endereco','$telefone','$responsavel','$foto')";
		$conn->query($sql);
		$sql="INSERT INTO usuarios (login,hash,cpf,tipo_conta) VALUES ('$login','$hash','$cpf','Pessoa')";
		$conn->query($sql);
		$conn->close();
		return 1;
	}
}

function add_usuario_educador($login,$senha,$cpf,$nome,$nascimento,$email,$profissao,$endereco,$telefone,$conta_banco,$salario,$responsavel=0,$foto='foto_padrao.jpg'){
	if(checar_cpf($cpf)==true){
		return -1;
	}else if(checar_login($login)==true){
		return -2;
	}else{
		$hash=password_hash($senha,PASSWORD_DEFAULT);
		$conn=mysqli_connect("localhost","root","","CasaCuore");
		if(!$conn->connect_errno===0){
			die("erro conectar como usuario:(".$conn->connect_errno.") ".$conn->connect_error);
		}
		$sql="INSERT INTO pessoas (cpf,nome,nascimento,email,profissao,endereco,telefone,responsavel,foto) VALUES ('$cpf','$nome','$nascimento','$email','$profissao','$endereco','$telefone','$responsavel','$foto')";
		$conn->query($sql);
		$sql="INSERT INTO usuarios (login,hash,cpf,tipo_conta) VALUES ('$login','$hash','$cpf','Educador')";
		$conn->query($sql);
		$sql="INSERT INTO educadores (cpf,conta_bancaria,salario) VALUES ('$cpf','$conta_banco','$salario')";
		$conn->query($sql);
		$conn->close();
		return 1;
	}
}

function add_usuario_pessoa_admin($login,$senha,$cpf,$nome,$nascimento,$email,$profissao,$endereco,$telefone,$responsavel=0,$foto='foto_padrao.jpg'){
	if(checar_cpf($cpf)==true){
		return -1;
	}else if(checar_login($login)==true){
		return -2;
	}else{
		$hash=password_hash($senha,PASSWORD_DEFAULT);
		$conn=mysqli_connect("localhost","root","","CasaCuore");
		if(!$conn->connect_errno===0){
			die("erro conectar como usuario:(".$conn->connect_errno.") ".$conn->connect_error);
		}
		$sql="INSERT INTO pessoas (cpf,nome,nascimento,email,profissao,endereco,telefone,responsavel,foto) VALUES ('$cpf','$nome','$nascimento','$email','$profissao','$endereco','$telefone','$responsavel','$foto')";
		$conn->query($sql);
		$sql="INSERT INTO usuarios (login,hash,cpf,tipo_conta) VALUES ('$login','$hash','$cpf','Admin')";
		$conn->query($sql);
		$conn->close();
		return 1;
	}
}

function add_usuario_admin($login,$senha){
	if(checar_login($login)==true){
		return 0;
	}else{
		$hash=password_hash($senha,PASSWORD_DEFAULT);
		$conn=mysqli_connect("localhost","root","","CasaCuore");
		if(!$conn->connect_errno===0){
			die("erro conectar como usuario:(".$conn->connect_errno.") ".$conn->connect_error);
		}
		$sql="INSERT INTO usuarios (login,hash,cpf,tipo_conta) VALUES ('$login','$hash','','Admin')";
		$res=$conn->query($sql);
		$conn->close();
		return $res;
	}
}

function pegar_pessoa($cpf){
	$conn=mysqli_connect("localhost","root","","CasaCuore");
	if(!$conn->connect_errno===0){
		die("erro conectar como usuario:(".$conn->connect_errno.") ".$conn->connect_error);
	}
	$sql="SELECT * FROM pessoas WHERE cpf = '$cpf'";
	$res=$conn->query($sql);
	if($res->num_rows>0){
		return $res->fetch_assoc();
	}
	return false;
}

function pegar_pessoa_login($login){
	$conn=mysqli_connect("localhost","root","","CasaCuore");
	if(!$conn->connect_errno===0){
		die("erro conectar como usuario:(".$conn->connect_errno.") ".$conn->connect_error);
	}
	$sql="SELECT * FROM usuarios WHERE login = '$login'";
	$res=$conn->query($sql);
	if(!($res->num_rows>0)){
		return false;
	}
	$sql="SELECT * FROM pessoas WHERE cpf = '".$res->fetch_assoc()['cpf']."'";
	/*$sql="
 SELECT P
 FROM
 pessoas AS P
 JOIN
 usuarios AS U
 ON P.cpf=U.cpf
 WHERE U.login='$login'
	";*/
	$res=$conn->query($sql);
	if($res->num_rows>0){
		return $res->fetch_assoc();
	}
	return false;
}

function update_pessoa($cpf,$nome,$nascimento,$email,$profissao,$endereco,$telefone,$responsavel){
	$sql="UPDATE pessoas SET nome='$nome', nascimento='$nascimento', email='$email', profissao='$profissao', endereco='$endereco', telefone='$telefone', responsavel='$responsavel' WHERE cpf='$cpf'";
	$conn=mysqli_connect("localhost","root","","CasaCuore");
	if(!$conn->connect_errno===0){
		die("erro conectar como usuario:(".$conn->connect_errno.") ".$conn->connect_error);
	}
	return $conn->query($sql);
}

function tipo_conta($login){
	$conn=mysqli_connect("localhost","root","","CasaCuore");
	if(!$conn->connect_errno===0){
		die("erro conectar como usuario:(".$conn->connect_errno.") ".$conn->connect_error);
	}
	$sql="SELECT * FROM usuarios WHERE login = '$login'";
	$res=$conn->query($sql);
	if(!($res->num_rows>0)){
		return 0;
	}
	return $res->fetch_assoc()['tipo_conta'];
}

function listar_usuarios(){
	$conn=mysqli_connect("localhost","root","","CasaCuore");
	if(!$conn->connect_errno===0){
		die("erro conectar como usuario:(".$conn->connect_errno.") ".$conn->connect_error);
	}
	$sql="
 SELECT U.login, U.tipo_conta, U.cpf, P.nome, P.nascimento, P.email, P.profissao, P.endereco, P.telefone
 FROM usuarios AS U
 JOIN pessoas AS P
 ON U.cpf = P.cpf
";
	$res=$conn->query($sql);
	if(($res->num_rows==0)){
		return 0;
	}
	return $res->fetch_all();
}

function buscar_usuarios_login($login,$strict){
	$conn=mysqli_connect("localhost","root","","CasaCuore");
	if(!$conn->connect_errno===0){
		die("erro conectar como usuario:(".$conn->connect_errno.") ".$conn->connect_error);
	}
	if($strict){

	$sql="
 SELECT U.login, U.tipo_conta, U.cpf, P.nome, P.nascimento, P.email, P.profissao, P.endereco, P.telefone
 FROM usuarios AS U
 JOIN pessoas AS P
 ON U.cpf = P.cpf
 WHERE U.login = '$login'";
	}else{
	$sql="
 SELECT U.login, U.tipo_conta, U.cpf, P.nome, P.nascimento, P.email, P.profissao, P.endereco, P.telefone
 FROM usuarios AS U
 JOIN pessoas AS P
 ON U.cpf = P.cpf
 WHERE U.login LIKE '%$login%'";
	}
	$res=$conn->query($sql);
	if(($res->num_rows==0)){
		return 0;
	}
	return $res->fetch_all();
}

function buscar_usuarios_nome($nome){
	$conn=mysqli_connect("localhost","root","","CasaCuore");
	if(!$conn->connect_errno===0){
		die("erro conectar como usuario:(".$conn->connect_errno.") ".$conn->connect_error);
	}
	$sql="
 SELECT U.login, U.tipo_conta, U.cpf, P.nome, P.nascimento, P.email, P.profissao, P.endereco, P.telefone
 FROM usuarios AS U
 JOIN pessoas AS P
 ON U.cpf = P.cpf
 WHERE P.nome LIKE '%$nome%'";
	$res=$conn->query($sql);
	if(($res->num_rows==0)){
		return 0;
	}
	return $res->fetch_all();
}

function buscar_usuarios_cpf($cpf){
	$conn=mysqli_connect("localhost","root","","CasaCuore");
	if(!$conn->connect_errno===0){
		die("erro conectar como usuario:(".$conn->connect_errno.") ".$conn->connect_error);
	}
	$sql="
 SELECT U.login, U.tipo_conta, U.cpf, P.nome, P.nascimento, P.email, P.profissao, P.endereco, P.telefone
 FROM usuarios AS U
 JOIN pessoas AS P
 ON U.cpf = P.cpf
 WHERE U.cpf = '$cpf'";
	$res=$conn->query($sql);
	if(($res->num_rows==0)){
		return 0;
	}
	return $res->fetch_all();
}

function deletar_usuario($login){
	$conn=mysqli_connect("localhost","root","","CasaCuore");
	if(!$conn->connect_errno===0){
		die("erro conectar como usuario:(".$conn->connect_errno.") ".$conn->connect_error);
	}
	$usuario=pegar_usuario_login($login);
	$cpf=$usuario['cpf'];
	if($usuario['tipo_conta']=="Educador"){
		$sql="DELETE FROM educadores WHERE cpf='$cpf'";
		$res=$conn->query($sql);
		if($res===0){
			return -1;
		}
	}
	$sql="DELETE FROM pessoas WHERE cpf='$cpf'";
	$res=$conn->query($sql);
	if($res===0){
		return -1;
	}
	$sql="DELETE FROM usuarios WHERE login='$login'";
	$res=$conn->query($sql);
	if($res===0){
		return -2;
	}
	return true;
}

function promover_pessoa($login,$conta_banco,$salario){
	$conn=mysqli_connect("localhost","root","","CasaCuore");
	if(!$conn->connect_errno===0){
		die("erro conectar como usuario:(".$conn->connect_errno.") ".$conn->connect_error);
	}
	$usuario=pegar_usuario_login($login);
	$cpf=$usuario['cpf'];
	$sql="UPDATE usuarios SET tipo_conta='Educador' WHERE login='$login' AND tipo_conta='Pessoa'";
	$res=$conn->query($sql);
	if($res){
		$sql="INSERT INTO educadores (cpf,conta_bancaria,salario) VALUES ('$cpf','$conta_banco','$salario')";
		$conn->query($sql);
		return true;
	}else{
		if(checar_login($login)){
			return -1;
		}else{
			return 0;
		}
	}
	return 0;
}

function promover_pessoa_admin($login){
	$conn=mysqli_connect("localhost","root","","CasaCuore");
	if(!$conn->connect_errno===0){
		die("erro conectar como usuario:(".$conn->connect_errno.") ".$conn->connect_error);
	}
	$sql="UPDATE usuarios SET tipo_conta='Admin' WHERE login='$login' AND tipo_conta='Pessoa'";
	$res=$conn->query($sql);
	if($res){
		return true;
	}else{
		if(checar_login($login)){
			return -1;
		}else{
			return 0;
		}
	}
}

function rebaixar_admin($login){
	$conn=mysqli_connect("localhost","root","","CasaCuore");
	if(!$conn->connect_errno===0){
		die("erro conectar como usuario:(".$conn->connect_errno.") ".$conn->connect_error);
	}
	$sql="UPDATE usuarios SET tipo_conta='Pessoa' WHERE login='$login' AND tipo_conta='Admin'";
	$res=$conn->query($sql);
	if($res){
		return true;
	}else{
		if(checar_login($login)){
			return -1;
		}else{
			return 0;
		}
	}
}

function rebaixar_educador($login){
	$conn=mysqli_connect("localhost","root","","CasaCuore");
	if(!$conn->connect_errno===0){
		die("erro conectar como usuario:(".$conn->connect_errno.") ".$conn->connect_error);
	}
	$usuario=pegar_usuario_login($login);
	if($usuario===false){
		return false;
	}
	$cpf=$usuario['cpf'];
	if($usuario['tipo_conta']==="Educador"){
		$sql="DELETE FROM educadores WHERE cpf='$cpf'";
		$res=$conn->query($sql);
		if($res){
			$sql="UPDATE usuarios SET tipo_conta='Pessoa' WHERE login='$login'";
			$conn->query($sql);
			return true;
		}else{
			return -2;
		}
	}else{
		return -1;
	}
}