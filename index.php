<!DOCTYPE html>
<?php
	include('LogDatabase.php');
	$countryID = $_GET["posolstvo"];
	$country = "";
	$type = "";
	try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $pass);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$getQuery1 = "SELECT `name`, `type` FROM `country-info` WHERE `c_id` = :countryID";
		$result1 = $conn->prepare($getQuery1);
		$result1->bindParam(':countryID', $countryID);
		$result1->execute();
		if($result1->rowCount() > 0) {
			$row = $result1 -> fetch(PDO::FETCH_ASSOC);
			$country = $row['name'];
			$type = $row['type'];
		}

	}catch (PDOException $e){
		die('Connection failed: '.$e->getMessage());
	}
?>
<html>
	<head>
		<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
		<title> <?php echo $country ?> </title>
	</head>
		<body>
		<script src="animation.js"></script>
		<link href="DoubleTravelStyle.css" rel="stylesheet">
		<?php include_once("interface.php");?>
		<div class="mainPage" id="mp">
		<div class="line"><br><br><br></div>
			<div id ="container" onclick="myMove('<?php echo $type ?>');typeWriter('<?php echo $type ?>')"> 
			<img src="animation-plane.png" id ="animate">
			<img src="country-flags/<?php echo $country ?>.png" id="flag">
			<p id = "warning"><b></b></p>
			</div>
			<div class="info">
				
			<?php 
				echo '<h3>'.$country.'</h3>';
				try{
					
					$getQuery2 = "SELECT * FROM `country-about` WHERE `country` = :country";
					$result2 = $conn->prepare($getQuery2);
					$result2->bindParam(':country', $country);
					$result2->execute();
					if($result2->rowCount() > 0) {
						while($row = $result2 -> fetch(PDO::FETCH_ASSOC)) {
							echo '<p>'.$row['common-info'].'</p>';
							echo '<p>'.$row['travel-documents'].'</p>';
							echo '<p>'.$row['practical-advices'].'</p>';
							echo '<p>'.$row['concil-services'].'</p>';
						}
					}
				}catch (PDOException $e){
						die('Connection failed: '.$e->getMessage());
				}
			?>
			
		</div>
		<footer> <?php include_once('footer.php'); ?><br> </footer>
		</div>
	</body>
</html>
