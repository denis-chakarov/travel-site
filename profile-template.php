<!DOCTYPE html>
<html>
	<head><meta HTTP-EQUIV="Content-Type" CONTENT="txt/html; charset=UTF-8"></head>
	<body style ="background: linear-gradient(#4682B4, #B0C4DE);">
	<script src="jsvalidation1.js"></script>
	<link href="DoubleTravelStyle.css" rel="stylesheet">
		<link href="registrationStyle.css" rel="stylesheet">
		<div class="mainPage">
			<div class="top">
				<a href = "homePage.php"><img src="pictures/travel-world-2.png" style="float:left;width:17%;"></a><br>
				<div class="description">
					<h3><span style="color:blue">Double Travel</span><h3>
					<p style="color:#708090;">Система за пътувания в чужбина</p><br>
				</div>
				<hr width="90%" align="center">
			</div>
			<img src ="pictures/user-logo.png" style="width:187px; height:187px;position:absolute;left:5%;">
			<div class="user-info">
				<?php include_once("generate-info.php"); ?>
			</div>
			<div class="review">
				<form name = "form4" onSubmit="return validation()" action="post-review.php" method = "post">
					<select id="posolstvo" name="posolstvo" >
						<?php include_once("country-options.php");?>
					</select><br><br>
					<textarea name = "description" rows = "5" cols = "40" placeholder="Напишете отзив за държавата"></textarea><br>
					1<input type="range" name = "rating" min = "1" max = "5">5 <br>
					<input type = "submit" value = "Submit" />
				</form>
			</div>
			<footer> <?php include_once('footer.php'); ?><br> </footer>
		</div>
	</body>
</html>