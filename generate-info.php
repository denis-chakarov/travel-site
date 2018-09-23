<?php
	include('LogDatabase.php');
	session_start();
	$curruser = $_SESSION['user'];
	try{
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $pass);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$getQuery = "SELECT `fname`, `lname`, `country`, `city`, `address`, `number` FROM `user-info` WHERE `user` = :curruser";
		$result = $conn->prepare($getQuery);
		$result->bindParam(':curruser', $curruser);
		$result->execute();
		if($result->rowCount() > 0) {
			while($row = $result -> fetch(PDO::FETCH_ASSOC)) {
				echo '<p><strong>Име:</strong> '.$row["fname"].' '.$row["lname"].'</p>';
				echo '<p><strong>Държава:</strong> '.$row["country"].'</p>';
				echo '<p><strong>Град:</strong> '. $row["city"].'</p>';
				echo '<p><strong>Адрес:</strong> '.$row["address"].'</p>';
				echo '<p><strong>Номер:</strong> '.$row["number"].'</p>';
			}
		}
	}catch (PDOException $e){
			die('Connection failed: '.$e->getMessage());
	}
?>