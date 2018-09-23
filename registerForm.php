<!DOCTYPE html>
<html>
	<body style ="background: linear-gradient(#4682B4, #B0C4DE);">
		<script src="jsvalidation.js"></script>
		<link href="registrationStyle.css" rel="stylesheet">
		<link href="DoubleTravelStyle.css" rel="stylesheet">
		<div class="main">
			<div class="top">
				<a href = "homePage.php"><img src="pictures/travel-world-2.png" style="float:left;width:17%;"></a><br>
				<div class="description">
					
					<h3><span style="color:blue">Double Travel</span><h3>
					<p style="color:#708090;">Система за пътувания в чужбина</p><br>
				</div>
			</div>
			<div class = "register">
			<style>
				
			</style>
			  <form class = "form2" name="register-form" onSubmit="return validation()" action="createProfile.php" method = "post">
			  
				<label for="user">Потребителско име</label>
				<input type="text" name="user" placeholder="Въведете име..">
				<label for="password">Парола</label>
				<input type="text" name="password" placeholder="Въведете парола..">
				
				<label for="fname">Име</label>
				<input type="text" name="fname" placeholder="Въведете вашето име..">

				<label for="lname">Фамилия</label>
				<input type="text" name="lname" placeholder="Въведете вашата фамилия..">
				
				<label for="country">Държава</label>
				<input type="text" name="country">
				
				<label for="city">Град</label>
				<input type="text" name="city">
				
				<label for="address">Адрес</label>	
				<input type="text" name="address">
				
				<label for="number">Номер</label>
				<input type="text" name="number">

				<input type="submit" value="Направи регистрация">
			  </form>
			</div><br>
			<footer> <?php include_once('footer.php'); ?><br> </footer>
		</div>
	</body>
</html>