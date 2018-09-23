<?php
	include('createProfileValidation.php');
	include('LogDatabase.php');
	try{
		$connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $pass);
		$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$checkQuery = "SELECT `user` FROM `user-info` WHERE `user`= :user";
		$result = $connection->prepare($checkQuery);
		$result->bindParam(':user', $user);
		$result->execute();
		if($result->rowCount() == 0) {
			$insertQuery = "INSERT INTO `user-info` (`user`, `password`, `fname`, `lname`, `country`, `city`, `address`, `number`)
			VALUES (:user, :password, :fname, :lname, :country, :city, :address, :number)";
			$result = $connection->prepare($insertQuery);
			$result->bindParam(':user', $user);
			$result->bindParam(':password', $password);
			$result->bindParam(':fname', $fname);
			$result->bindParam(':lname', $lname);
			$result->bindParam(':country', $country);
			$result->bindParam(':city', $city);
			$result->bindParam(':address', $address);
			$result->bindParam(':number', $number);
			$result->execute();
			header('Location: /homePage.php');
		}
		else {
			echo '<p style="color:red;"><strong>Username already taken!</strong></p>';
		}
	}catch (PDOException $e){
			die('Connection failed: '.$e->getMessage());
	}
	
?>