<?php

class conecta{
	
	public  $conn;

	function __construct(&$conn){
		try {
			$conn = new PDO("mysql:host=localhost;dbname=CasaCuore", "root", "");
		}
		catch (PDOException $e) {
			print "Error!: " . $e->getMessage() . "<br/>";
			die();
		}
	}
}

?>
