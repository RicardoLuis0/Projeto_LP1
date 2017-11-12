<?php

require_once("conexao.php");
	class Verifica {
		
		public $crud;

		function checa () {
			$crud = $_GET['crud'];
			if ($crud  == "Inserir") {
				$crud_opera = new CRUD();
				$crud_opera->inserir();
			}
			else if ($crud == "Listar") {
				$crud_opera = new CRUD();
				$crud_opera->listar();
			} 
			else if ($crud == "del") {
				$crud_opera = new CRUD();
				$crud_opera->deletar();
			}
			else if ($crud == "mostrar") {
				$crud_opera = new CRUD();
				$crud_opera->mostrar();
			}
			else if ($crud == "alterar") {
				$crud_opera = new CRUD();
				$crud_opera->alterar();
			} 
		}
	}

	class CRUD {

		private  $id;
		private  $nome;
		private	 $cpf;
		private	 $telefone;
		private	 $email;
		private  $endereco;
		private  $cnpj;
		private  $data;


		function inserir (){

			$conexao = new conecta();
			$conexao->Conectar($conn);
			$this->nome = $_GET['nome'];
			$this->cpf = $_GET['cpf'];
			$this->telefone = $_GET['telefone'];
			$this->email = $_GET['email'];
			$this->endereco = $_GET['endereco'];
			$this->cnpj = $_GET['cnpj'];
			$this->data = $_GET['data'];
			

			$stmt = $conn->prepare("INSERT INTO catalisadores(nome, cpf, telefone, email, endereco, cnpj, data_nascimento) VALUES(?, ?, ?, ?, ?, ?, ?) ");
			$stmt->bindParam(1, $this->nome);
			$stmt->bindParam(2, $this->cpf);
			$stmt->bindParam(3, $this->telefone);
			$stmt->bindParam(4, $this->email);
			$stmt->bindParam(5, $this->endereco);
			$stmt->bindParam(6, $this->cnpj);
			$stmt->bindParam(7, $this->data);
			$stmt->execute();
			

			if ($stmt) { 
			   echo "Dados inseridos com sucesso !... Aguarde";
			   header("Refresh:2; url=../catalisadores.html");
			} else {
			    echo "\nPDO::errorInfo():\n";
    			print_r($conn->errorInfo());
			}
			
			$stmt = null; //encerra conexão 
			$conn = null; //encerra conexão com o banco

	}

		function listar () {
			$conexao = new conecta();
			$conexao->Conectar($conn);
			$consulta = $conn->query("SELECT cod_cat, nome, cpf, telefone, email, endereco, cnpj, data_nascimento FROM catalisadores");

			echo "<center> <h2> Listagem todos os Catalisadores </h2>";
			echo "<table border>";
			echo "<tr>	
			<td>Código</td>
			<td>Nome</td>
			<td>CPF</td>
			<td>Telefone</td>
			<td>Email</td>
			<td>Endereço</td>
			<td>CNPJ</td>
			<td>Data de Nascimento</td>
			</tr>";

			while ($row = $consulta->fetch(PDO::FETCH_OBJ)) {
				

				echo "<tr>"; //inicio da linha
				echo "<td>" .$row->cod_cat."</td>";
				echo "<td>" .$row->nome."</td>";
				echo "<td>" .$row->cpf."</td>";
				echo "<td>" .$row->telefone."</td>";
				echo "<td>" .$row->email."</td>";
				echo "<td>" .$row->endereco."</td>";
				echo "<td>" .$row->cnpj."</td>";
				echo "<td>" .$row->data_nascimento."</td>";
				echo "<td> <button><a href='crud.php?id=$row->cod_cat&crud=mostrar'>Alterar</button></a> </td>";
				echo "<td> <button><a href='crud.php?id=$row->cod_cat&crud=del' >Deletar</button></a> </td>";
				echo "</tr>"; //fim da linha
			}

			echo "</table>
			<h3> <a href='../catalisadores.html'> Voltar </a></h3>
			</center>";
			$consulta = null; //encerra conexão 
			$row = null; //encerra conexão
			$conn = null; //encerra conexão com o banco
	
		}

		function deletar () {
			$conexao = new conecta();
			$conexao->Conectar($conn);
			$id = $_GET['id'];
			$stmt = $conn->prepare("DELETE FROM catalisadores WHERE cod_cat = ?");
			$stmt->bindParam(1, $id);
			$stmt->execute();
			if ($stmt->execute()) {
				echo "Deletado com sucesso !";
			
			} else {
				echo "Erro ao deletar linha";
			}
			$stmt = null; //encerra conexão 
			$conn = null; //encerra conexão com o banco
			echo "<h3> <a href='crud.php?crud=Listar'>Voltar</a></h3>";
		}

		function mostrar () {
			$conexao = new conecta();
			$conexao->Conectar($conn);
			$id = $_GET['id'];
			$consulta = $conn->prepare("SELECT cod_cat, nome, cpf, telefone, email, endereco, cnpj, data_nascimento FROM catalisadores WHERE cod_cat LIKE ?");
			$consulta->bindParam(1, $id);
			if ($consulta->execute()){
				$row = $consulta->fetch(PDO::FETCH_OBJ);
				echo "
				<center><h2>Catalisadores</h2> 
				<form method='GET'>
				<input type='hidden' name='crud' value='alterar'/>
				<input type='hidden' name='id' value='$row->cod_cat'/>
				<input type='text' placeholder='nome' name='nome' value='$row->nome' />
				<input type='text' placeholder='cpf' name='cpf' value='$row->cpf'/><br/><br/>
				<input type='text' placeholder='telefone' name='telefone' value='$row->telefone'/>
				<input type='email'placeholder='email' name='email' value='$row->email'/><br/><br/>
				<input type='text' placeholder='endereço' name='endereco' value='$row->endereco'/>
				<input type='text' placeholder='CNPJ' name='cnpj' value='$row->cnpj'/><br/><br/>
				<label> Data de nascimento: </label> <input type='date' name='data' value='$row->data_nascimento'/> <br/><br/>
				<input type='submit' value='Salvar'>";

		} else {
			echo "Erro ao alterar usuário";
		}
	}

	function alterar () {

			$conexao = new conecta();
			$conexao->Conectar($conn);
			$this->id = $_GET['id'];
			$this->nome = $_GET['nome'];
			$this->cpf = $_GET['cpf'];
			$this->telefone = $_GET['telefone'];
			$this->email = $_GET['email'];
			$this->endereco = $_GET['endereco'];
			$this->cnpj = $_GET['cnpj'];
			$this->data = $_GET['data'];

			$stmt = $conn->prepare("UPDATE catalisadores SET nome = ?, cpf = ?, telefone = ?, email = ?, endereco = ?, cnpj = ?, data_nascimento = ? WHERE cod_cat = ?");

			$stmt->bindParam(1, $this->nome);
			$stmt->bindParam(2, $this->cpf);
			$stmt->bindParam(3, $this->telefone);
			$stmt->bindParam(4, $this->email);
			$stmt->bindParam(5, $this->endereco);
			$stmt->bindParam(6, $this->cnpj);
			$stmt->bindParam(7, $this->data);
			$stmt->bindParam(8, $this->id);
			$stmt->execute();
			if ($stmt->execute()) {
				echo "Dados alterados com sucesso !";
				header("Refresh:2; url=crud.php?crud=Listar");
			} else {
				 echo "\nPDO::errorInfo():\n";
    				 print_r($conn->errorInfo());
			}
			$stmt = null; //encerra conexão 
			$conn = null; //encerra conexão com o banco
	}
}



$verifica = new Verifica();
$verifica->checa();

?>
