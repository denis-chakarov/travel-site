<?php
	$user = $password = "";
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$user = modify_input($_POST["user"]);
		$password = modify_input($_POST["password"]);
	}
	session_start();
	$_SESSION['user'] = $user;
	function modify_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	$errors = array();
	if(empty($user)){
		array_push($errors, "user required");
	}
	if(empty($password)){
		array_push($errors, "password required");
	}
	if(count($errors) > 0){
		echo '<ul style = "color: red;">';
		foreach($errors as $error){
			echo "<li> $error</li>";
		}
		echo '</ul>';
	}
?>