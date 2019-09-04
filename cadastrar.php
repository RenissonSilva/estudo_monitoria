<?php 

include "conn.php";
include "init.php";

$name = $_POST['name']?? "";
$email = $_POST['email']?? "";
$pw = $_POST['pw']?? "";
$pw2 = $_POST['pw2']?? "";


if($pw != $pw2){
	redirect("index.php");

}

if($name == "" || $email == ""){
	redirect("index.php");

}
else{
	try {
		
		$smt = $con -> prepare("INSERT INTO USER(USR_NAME,USR_EMAIL,USR_PASSWORD) VALUES (?,?,?)");
		$smt -> bindParam(1,$name);
		$smt -> bindParam(2,$email);
		$smt -> bindParam(3, $pw);
		$smt -> execute();
		redirect("index.php");

	var_dump("nao, nao, entrou foi aqui");
	} catch (Exception $e) {
		$e -> getMessage();
	}
}




?>