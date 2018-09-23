<?php
	$user = $password = $country = $city = $address = $number = $fname = $lname = "";
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$user = modify_input($_POST["user"]);
		$password = modify_input($_POST["password"]);
		$country = modify_input($_POST["country"]);
		$city = modify_input($_POST["city"]);
		$address = modify_input($_POST["address"]);
		$number = modify_input($_POST["number"]);
		$fname = modify_input($_POST["fname"]);
		$lname = modify_input($_POST["lname"]);
	}

	function modify_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	$errors = array();
	if(empty($user)){
		array_push($errors, "user is required");
	}
	if(empty($password)){
		array_push($errors, "password is required");
	}
	if(empty($country)){
		array_push($errors, "country is required");
	}
	if(empty($city)){
		array_push($errors, "city is required");
	}
	if(empty($address)){
		array_push($errors, "address is required");
	}
	if(empty($number)){
		array_push($errors, "number is required");
	}
	if(empty($fname)){
		array_push($errors, "first name required");
	}
	if(empty($lname)){
		array_push($errors, "last name required");
	}
	if(count($errors) > 0){
		echo '<ul style = "color: red;">';
		foreach($errors as $error){
			echo "<li> $error</li>";
		}
		echo '</ul>';
	}
	
?>