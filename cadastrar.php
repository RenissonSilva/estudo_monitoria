<?php 

include "conn.php";
include "init.php";

$name = $_POST['name']?? "";
$email = $_POST['email']?? "";
$pw = $_POST['pw']?? "";
$pw2 = $_POST['pw2']?? "";


if($pw != $pw2){
	redirect("reg-login.php");

}

if($name == "" || $email == ""){
	redirect("reg-login.php");

}
else{
	try {
		
		$smt = $con -> prepare("INSERT INTO USER(USR_NAME,USR_EMAIL,USR_PASSWORD) VALUES (?,?,?)");
		$smt -> bindParam(1,$name);
		$smt -> bindParam(2,$email);
		$smt -> bindParam(3, $pw);
		$smt -> execute();
		redirect("reg-login.php");
		
	} catch (Exception $e) {
		$e -> getMessage();
	}
}




?>