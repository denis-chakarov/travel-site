<!DOCTYPE html>
<html>
	<head>
		<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
		<title> <?php echo $_GET['name']; ?> </title>
	</head>
	<body>
		<?php 
		include('interface.php');?>
		<link href="/DoubleTravelStyle.css" rel="stylesheet">
		<div class="mainPage" style="background-color:white;">
			<div class="info">
				<?php
					include('LogDatabase.php');
					$counter = 0;
					$curr = 'A';
					try{
						$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $pass);
						$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						$name = $_GET['name'];
						$getQuery = "SELECT `c_id`, `name` FROM `country-info` WHERE `continent` = :name ORDER BY `continent` ASC";
						$result = $conn->prepare($getQuery);
						$result->bindParam(':name', $name);
						$result->execute();
						if($result->rowCount() > 0) {
							while($row = $result -> fetch(PDO::FETCH_ASSOC)) {
								if($curr !== $row['name'][0]) {
									echo '</ul><br>';
									$curr = $row['name'][0];
									$counter = 0;
								}
								if($counter === 0) {
									echo '<div class="order">'.$row['name'][0].'</div>';
									$counter++;
								}
								if($curr === $row['name'][0]) {
									//echo '<li><a href="/travel-project/countries/'.$row['name'].'.php">'.$row['name'].'</a></li>';
								echo '<li><a href="/index.php?posolstvo='.$row['c_id']. '">'.$row['name'].'</a></li>';
								}	
							}
							echo '</ul><br><br>';
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