<?php
	include_once 'conexao.php';
	
	if (isset($_GET['id'])) {
	$codigo = $_GET['id'];
	
	$consulta = "select *from criancas where codigo = '$codigo'";
	
	$executar = mysqli_query($con, $consulta);

		while($exibir = mysqli_fetch_array($executar))
		{
		?>
<form method="POST" action="alterar.php">
	<input type="hidden" name="categoria_categoria" value="<?php echo $exibir['codigo'];?>">
	
	Nome:<input type="text" name="nome" value="<?php echo $exibir['nome'];?>">
	<br /><br />
	Data de nascimento:<input type="date" name="data" value="<?php echo $exibir['data_nascimento'];?>">
	<br />

	<!-- Select para selecionar um novo responsável caso necessário -->
	<?php
	$sql = "SELECT *FROM pessoas";
			$query = mysqli_query($con, $sql);

			echo "<p> Nome do pai/mãe:  <select name='responsavel'>";
			while ($linha = mysqli_fetch_array($query)) 
			{

			?>
	
	<?php if($linha['responsavel'] == 1) { ?><option value="<?php echo $linha['cpf'] ?>"><?php echo $linha['nome']; } ?> </option> <?php }?>
	</select> </p>
	Nome:<input type="file" name="foto" size="2000" value="<?php echo $exibir['foto'];?>">
	<br /><br />
	<input type="submit" value="Alterar">
	<br />

	</form>
	
<?php	}} ?>
	
<br />