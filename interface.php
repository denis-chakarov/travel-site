<!DOCTYPE html>
<html>
	<head>
		<meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
		<title>Каталог на дестинациите в света</title>
	</head>
	<body style ="background: linear-gradient(#4682B4, #B0C4DE);">
		<script src="jsvalidation.js"></script>
		<link href="DoubleTravelStyle.css" rel="stylesheet">
		<link href="registrationStyle.css" rel="stylesheet">
		<div class="main">
			<div class="top">
				<a href = "homePage.php"><img src="pictures/travel-world-2.png" style="float:left;width:17%;"></a><br>
				<div class="description">
					
					<h3><span style="color:blue">Double Travel</span><h3>
					<p style="color:#708090;">Система за пътувания в чужбина</p><br>
				</div>
				<div class="user-login">
					<form class ="form3" action = "loginProfile.php" method = "post">
						<p style="position:absolute;left:-49%;top:-4%;">Потребител: </p> <input type="text" name="user" />
						<p style="position:absolute;left:-34%;top:41%;">Парола: </p><input type="password" name="password" /><br/>
						
						&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
						&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
						&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&nbsp;
						<input type = "submit" value = "Вход">
						<a href="registerForm.php" style="position:absolute;left:16%;top:187%;text-decoration:none;">Нямате регистрация?</a>
					</form>
				</div>
			</div>
			
			<div class="undertop">
				<img src="pictures/plane.png" style="width:58%;position:relative;left:21%"><br>
			</div>
			
			<div class="mainContainer">
				
				<div class="navigation" style="position:relative;">
					<form class="fe_form" name="form1" method="get" action="index.php" >
					<div class="fe_selection">
						<select id="posolstvo" name="posolstvo" onchange="this.form.submit();" >
							<?php include_once("country-options.php");?>	
						</select>
						</form><br>
					</div><br>
					<img src="pictures/world-map-logo1.png" style="width:100%;position:relative;right:0%">
					<img src="pictures/liberty.png" style="position:absolute; left:13%;top:-6%;width:6%;">
					<img src="pictures/moscow-logo.png" style="position:absolute;left:63%;width:18%;top:-14%;">
					<img src="pictures/china-wall-logo.png" style="position:absolute;left:71%;top:25%;width:16%;">
					<img src="pictures/eiffel-tower.png" style="position:absolute;left:40%;top:-8%;width:17%;">
					<img src="pictures/egypt.gif" style="position:absolute;left:47%;top:35%;width:13%;">
					<img src="pictures/statue-christ.png" style="position:absolute;left:19%;top:38%;width:12%;">
					<img src="pictures/sydney-opera.png" style="position:absolute;left:85%;top:72%;width:15%;">
					<button class="btn north-america" onclick="window.location.href='continent.php?name=North America'"><b>СЕВЕРНА АМЕРИКА</b> </button>
					<button class="btn south-america" onclick="window.location.href='continent.php?name=South America'"><b>ЮЖНА АМЕРИКА</b></button>
					<button class="btn africa" onclick="window.location.href='continent.php?name=Africa'"><b>АФРИКА</b></button>
					<button class="btn europe" onclick="window.location.href='continent.php?name=Europe'"><b>ЕВРОПА</b></button>
					<button class="btn asia" onclick="window.location.href='continent.php?name=Asia'"><b>АЗИЯ</b></button>
					<button class="btn australia" onclick="window.location.href='continent.php?name=Australia'"><b>АВСТРАЛИЯ</b></button>
				</div><br>
				<div class="goto"><a href="reviews-page.php"><strong> отзиви на пътуващи </strong></a></div><br><br><br>
				<hr width="90%" align="center">
				<br>
			</div>
		</div>
	</body>
</html>