<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	<title>Cadastro de criança</title>
	
</head>
<body>


 <h1>Cadastro Criança </h1>


<br />	

<!-- Cadastro -->

 
 	<form method="GET" action="cadastro.php" entype="multipart/forma-data">
 	<p>	Nome: <input type="text" name="nome">  </p>

 	<p> Nascimento: <input type="date" name="data_nascimento"></p>

 	<p> Foto: <input type="file" name="foto" size="2000" /> 

 			<?php 
 			require_once("conexao.php");
			$sql = "SELECT *FROM pessoas";
			$query = mysqli_query($con, $sql);

			echo "<p> Nome do pai/mãe:  <select name='responsavel'>";
			while ($linha = mysqli_fetch_array($query)) 
			{

			?>

 

	
	<?php if($linha['responsavel'] == 1) { ?><option value="<?php echo $linha['cpf'] ?>"> <?php echo $linha['nome']; } ?> </option> <?php }?>
	</select> </p>

 	<p> <button type="submit" value="Enviar" > Enviar </button></p> </p> </form> 


<br /> 

<!-- alterar -->

<h1> Listar </h1>

<table>
	

<?php
	include_once 'conexao.php';
	$consultar = "select *from criancas";
	$executar = mysqli_query($con,$consultar);
	?>

	<?php

	 while($linha = mysqli_fetch_array($executar))
	 	{?>
	 		<tr><td> Nome: <?php echo $linha["nome"]; ?>
	 		</td>

	 		<td> Nascimento: <?php echo $linha["data_nascimento"]; ?>
	 		</td>

	 		<td> Cpf do responsavel: <?php echo $linha["cpfResponsavel"]; ?>
	 		</td>

	 		<td> Codigo: <?php echo $linha["codigo"]; ?>
	 		</td>

	 		<td> Foto: <?php echo $linha["foto"]; ?>
	 		</td>
	 	
	 	<td> <a href="exibealterar.php?id=<?php echo $linha["codigo"];?>">Alterar</a></td>
	
	<td><a href="excluir.php?id=<?php echo $linha["codigo"];?>">Excluir</a> </td></tr> 

   <?php }?>
</table>





</body>
</html>
