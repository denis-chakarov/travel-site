<?php
	header('Content-Type: text/html; charset=utf-8');
	include("LogDatabase.php");
	try{
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $pass);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$getQuery = "SELECT `c_id`, `name` FROM `country-info` ORDER BY `c_id` ASC";
		$result = $conn->prepare($getQuery);
		$result->execute();
		if($result->rowCount() > 0) {
			while($row = $result -> fetch(PDO::FETCH_ASSOC)) {
				echo '<option value="'.$row["c_id"].'">'.$row["name"].'</option>';
			}
		}
	}catch (PDOException $e){
			die('Connection failed: '.$e->getMessage());
	}
	
?>