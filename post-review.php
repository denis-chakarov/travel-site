<?php
	$country = $description = $points = "";
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$country = modify_input($_POST["posolstvo"]);
		$description = modify_input($_POST["description"]);
		$points = modify_input($_POST["rating"]);
	}
	function modify_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	include('LogDatabase.php');
	session_start();
	$current = $_SESSION['user'];
	try{
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $pass);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$getQuery = "SELECT `name` FROM `country-info` WHERE `c_id` = :country";
		$result1 = "";
		$result = $conn->prepare($getQuery);
		$result->bindParam(':country', $country);
		$result->execute();
		if($result->rowCount() > 0) {
			while($row = $result -> fetch(PDO::FETCH_ASSOC)) {
				$currCountry = $row['name'];
				$insertQuery = "INSERT INTO `user-review` (`user`, `country`, `review`, `points`)
				VALUES (:current, :currCountry, :description, :points)";
				$result1 = $conn->prepare($insertQuery);
				$result1->bindParam(':current', $current);
				$result1->bindParam(':currCountry', $currCountry);
				$result1->bindParam(':description', $description);
				$result1->bindParam(':points', $points);
				$result1->execute();
				
				
			}
		}
	}catch (PDOException $e){
			die('Connection failed: '.$e->getMessage());
	}
	header('Location: reviews-page.php');
?>
