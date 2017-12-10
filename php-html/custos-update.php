
<?php
$alterar=isset($_POST["alterar"]);
$codigo=$_POST["codigo"];
include "caminho.php";

if ($alterar){
$nome=$_POST["nome"];
$descr=$_POST["descr"];
$data=$_POST["data"];
$valor=$_POST["valor"];
$tipo=$_POST["tipo"];
		$query="UPDATE custos SET nome='$nome', descr='$descr', data='$data', valor='$valor', tipo='$tipo' WHERE codigo='$codigo'";
		$resposta=mysqli_query($con,$query);
		$num = mysqli_affected_rows($con);
		if(!$resposta){
		echo "nao foi possivel atualizar custp". php_eol;
		echo "debugging errno".mysqli_errno($con).php_eol;
		echo "debugging error".mysqli_error($con).php_eol;
			}
			else{
				echo "Atualizado com sucesso!";
			}
}else{
	$selected0="";
	$selected1="";
	$query="SELECT nome, descr, tipo, data, valor FROM custos WHERE codigo='$codigo'";
	$resposta=mysqli_query($con,$query);
	$num = mysqli_affected_rows($con);
	if(!$resposta){
			echo "nao foi possivel atualizar custp". php_eol;
			echo "debugging errno".mysqli_errno($con).php_eol;
			echo "debugging error".mysqli_error($con).php_eol;
				}		
						while($linha = mysqli_fetch_array($resposta))
						{
							if ($linha['tipo'] == 'F')
								$selected0="SELECTED";
							elseif ($linha['tipo'] == 'V')
								$selected1="SELECTED";
				echo "<form action=''method='POST'>";
				echo"Nome <input type='text' name='nome' value='".$linha['nome']."'>";
				echo "Descricao <input type='text' name='descr' value='".$linha['descr']."'>";
				echo "Data <input type='text' name='data' value='".$linha['data']."'>";
				echo "Valor <input type='text' name='valor' value='".$linha['valor']."'>";
				echo "<input type=hidden value=$codigo name=codigo>";
				echo "<p>tipo: <select name='tipo'>
				<option value='F' ".$selected0.">FIXO</option>
				<option value='V' ".$selected1.">VARIADO</option>
		</select>";
			echo"<input type='submit' value='alterar' name='alterar'>";
			echo "</form>";
						}
				
}
?>
