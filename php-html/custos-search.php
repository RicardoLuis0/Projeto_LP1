
<?php
$busca=$_POST["busca"];


include "caminho.php";
		echo"<form action='custos-update.php' method='POST'>";
		echo "<table border='1'";
		echo "<tr>";
		echo "<td>codigo</td><td>nome</td><td>valor</td><td>tipo</td><td>descricao</td><td>data</td>";
		echo "</tr>";
			include "caminho.php";
			$query =" SELECT codigo, nome, valor, tipo, descr, data FROM custos WHERE nome LIKE '$busca%'";
			$resposta = mysqli_query($con,$query);

				while($linha = mysqli_fetch_array($resposta)){
			echo "<tr><td><input type='radio' name='codigo' value='".$linha['codigo']."'>".$linha['codigo']."</td><td>".$linha['nome']."</td><td>".$linha['valor']."</td><td>".$linha['tipo']."</td><td>".$linha['descr']."</td><td>".$linha['data']."</td>";
			
				echo"</tr>";
				echo "</table>";
			}
?>

<input type="submit" value="enviar">
</form>
