<!DOCTYPE html>
<html>
	<body style ="background: linear-gradient(#4682B4, #B0C4DE);">
	<link href="DoubleTravelStyle.css" rel="stylesheet">
		<link href="registrationStyle.css" rel="stylesheet">
		<div class="main">
			<div class="top">
				<a href = "homePage.php"><img src="pictures/travel-world-2.png" style="float:left;width:17%;"></a><br>
				<div class="description">
					<h3><span style="color:blue">Double Travel</span><h3>
					<p style="color:#708090;">Система за пътувания в чужбина</p><br>
				</div>
				
			</div>
			<div class="review-desc"><strong> отзиви </strong></div>
			<br><br><br>
				<?php
					include('LogDatabase.php');
					try{
						$connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $pass);
						$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
						$getQuery = "SELECT * FROM  `user-review` ORDER BY `date` DESC";
						$result = $connection->prepare($getQuery);
						$result->execute();
						if($result->rowCount() > 0) {
							while($row = $result -> fetch(PDO::FETCH_ASSOC)) {
								echo '<div class = "review-box" style="width:64%;position:relative;left:10%;">';
								echo '<div class="picuser" style="width:100%;position:relative;">';
								echo '<img src = "pictures/review-logo.png" style="width:11%;">';
								echo '<p style="color:#4682B4;font-size:20px;position:absolute;left:12%;top:19%"><strong>'.$row["user"].'</strong></p>';
								echo '</div>';
								echo '<div class = "dateinfo">'.$row["date"].'<img src ="pictures/'.$row["points"].'star.png" style="width:15%;position:relative;left:2%;">'.'<br><span style="color:red;"><strong>'.$row["country"].'</strong></span>'.'</div>';
								echo $row["review"];
								echo '</div><br><br>';
							}
						}
					}catch (PDOException $e){
							die('Connection failed: '.$e->getMessage());
					}
				?>
				<footer> <?php include_once('footer.php'); ?><br> </footer>
		</div>
	</body>
</html>