<?php 

	$user = "root";
	$password = "reni";

	global $con;

	try{
		$con = new PDO('mysql:host=localhost:3306;dbname=estudo;charset=utf8', 'root', 'reni');
	}
	catch(PDOException $e){
		$e -> getMessage();
	}


?>