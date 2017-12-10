<?php 
include "caminho.php";
$total=0;
$mes=$_POST["mes"];
$query="SELECT codigo, nome,quantidade,valor,data FROM custos WHERE tipo='F'";
$resposta = mysqli_query($con,$query);
		while($linha = mysqli_fetch_array($resposta)){
				$vetor=(explode("-",$linha['data']));
				if($vetor[1]==$mes){
			$total=$total+($linha['quantidade']*$linha['valor']);
		}
		}
		echo "custo fixo $total";
?>

<?php 
include "caminho.php";
$mes=$_POST["mes"];
$total=0;
$query="SELECT codigo, nome,quantidade,valor,data FROM custos WHERE tipo='V'";
$resposta = mysqli_query($con,$query);
		while($linha = mysqli_fetch_array($resposta)){
			$vetor=(explode("-",$linha['data']));
				if($vetor[1]==$mes){
			$total=$total+($linha['quantidade']*$linha['valor']);
		}
		}
		echo "custo variado $total";
?>

<?php 
include "caminho.php";
$mes=$_POST["mes"];
$total=0;
$query="SELECT codigo, nome,quantidade,valor,data FROM custos";
$resposta = mysqli_query($con,$query);
		while($linha = mysqli_fetch_array($resposta)){
			$vetor=(explode("-",$linha['data']));
				if($vetor[1]==$mes){
			$total=$total+($linha['quantidade']*$linha['valor']);
		}
		}
		echo " custo total $total";
?>