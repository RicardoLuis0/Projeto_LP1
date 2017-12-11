<?php
class biblioteca {
	function __construct($data) {
		
		$this->pegaDados($data);
	}
	function pegaDados ($data) {
		require("conexao.php");
		$soma = 0;

		if ($data != NULL){
			$total_periodo = 0;
			$todos_periodos = 0;
			//Comandos SQL para pegar os valores de acordo com a necessidade
			$sql_responsavel = "SELECT nome, cpf FROM pessoas WHERE responsavel = '1' AND data_inicial <= '$data' AND data_final IS NULL OR data_final > '$data' ";
			$sql_custos = "SELECT valor FROM custos";
			$sql_criancas = "SELECT DISTINCT (cpfResponsavel) from criancas";
			$sql_total_periodos = "SELECT periodo_semana FROM criancas";
			//Inicialização dos comandos.
			$query = mysqli_query($con,$sql_responsavel);
			$query_valor = mysqli_query($con, $sql_custos);
			$query_responsavel = mysqli_query($con, $sql_criancas); 
			$responsaveis = $query_responsavel->num_rows; //numero de responsáveis
			$query_total_periodos = mysqli_query($con, $sql_total_periodos);

			while($linha_periodo = mysqli_fetch_array($query_total_periodos)){
				$todos_periodos = $todos_periodos + $linha_periodo['periodo_semana'];
			}
			$todos_periodos = $todos_periodos * 4.25; //número total de períodos mensais

			while ($linha_custo = mysqli_fetch_array($query_valor)) {
				$soma += $linha_custo['valor'];
			}

			$rateado = ($soma * 0.15)/ $responsaveis; //Calculo do valor rateado
			$custo_rateado = $soma - $rateado; //custo rateado do total
			$periodo_final = $custo_rateado/$todos_periodos; //total de períodos por mês;
			echo "<table border>";
			echo "<tr><th>Nome do responsável </th> <th> Valor rateado </th> <th> Total de períodos por mês </th> <th> Valor final </th></tr>";
			while($linha = mysqli_fetch_array($query)) {
				$cpf = $linha['cpf'];
				$sql_periodos = "SELECT periodo_semana FROM criancas WHERE cpfResponsavel = '$cpf' ";
				$query_periodos = mysqli_query($con, $sql_periodos);
				while ($periodo = mysqli_fetch_array($query_periodos)) {
					$total_periodo = $total_periodo + $periodo['periodo_semana'];
				}
				
				$total_periodo = $total_periodo * 4.25; //multiplica o periodo semanal pelo número médio de semanas no mes, assim se descobre o número de períodos no mes.
				$valor_final = $total_periodo * $periodo_final + ($rateado/$responsaveis);
				echo "<tr> <td>". $linha['nome']. "</td>";
				echo "<td>" .$rateado. "</td>"; 
				echo "<td>" .$total_periodo. "</td>";
				echo "<td>" .$valor_final. "</td> </tr>";
				$total_periodo = 0; //zera total periodo para novo calculo do próximo responsável.
			}


			echo "</table><br/><br/> <h4> Valor Total: " .$soma;
			echo "<br/> Valor do período " .$periodo_final. "</h4>";
		}
	}
	
}
?>