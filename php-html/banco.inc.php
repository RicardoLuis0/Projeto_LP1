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