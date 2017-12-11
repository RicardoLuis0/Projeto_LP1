<html>
<head>
	<meta http-equiv="content-type" content="text/html" charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<title> Projeto LP1 </title>
</head>
<body>
	<div class="container">
		<center>
			<h2> -<u> Relatório </u> -  </h2>
			<h3> Custos Família </h3> <br/>
			<form method="GET">
			<input type="date" name="data" placeholder="Data de pesquisa" />
			<button type="submit" class="btn btn-success btn-sm">Confirmar data</button>
			</form>
		</center>
	</div>

	<?php 
		if(isset($_GET['data'])) {
			include ("biblioteca.php");
			$data = $_GET['data'];
			echo "<center><h3>" .$data."</h3>";
			$biblioteca = new biblioteca($data);
		}
	?>


</body>
</html>