<?php
	include_once("loginProfileValidation.php");
	include('LogDatabase.php');
	try{
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $pass);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$getQuery = "SELECT `user`, `password` FROM `user-info` WHERE `user` = :user AND `password` = :password";
		$result = $conn->prepare($getQuery);
		$result->bindParam(':user', $user);
		$result->bindParam(':password', $password);
		$result->execute();
		$row="";
		if($row = $result->rowCount() > 0) {
			header('Location: profile-template.php');		
		} 
		else {
			echo 'Wrong username or password';
		}
	}catch (PDOException $e){
			die('Connection failed: '.$e->getMessage());
	}
?>