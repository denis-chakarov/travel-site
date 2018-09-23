function validation() {
	var name = document.forms["register-form"]["user"].value;
	var specialChars = new RegExp("[^A-Za-z0-9]");
	if(name.length < 3 || name.length > 10 || specialChars.test(name) == true) {
		alert("Потребителското име трябва да е между 3 и 10 букви!");
		return false;
	}
	var bigLetter = new RegExp("[A-Z]");
	var pass = document.forms["register-form"]["password"].value;
	if(pass.length <= 3 || specialChars.test(pass) == true) {
		alert("Паролата трябва да е поне 4 символа!");
		return false;
	}
	var fname = document.forms["register-form"]["fname"].value;
	if(fname.length < 1) {
		alert("Моля въведете вашето име!");
		return false;
	}
	var lname = document.forms["register-form"]["lname"].value;
	if(lname.length < 1) {
		alert("Моля въведете вашата фамилия!");
		return false;
	}
	var country = document.forms["register-form"]["country"].value;
	if(country.length < 1) {
		alert("Моля въведете държава!");
		return false;
	}
	
	var city = document.forms["register-form"]["city"].value;
	if(city.length < 1) {
		alert("Моля въведете град!");
		return false;
	}
	var address = document.forms["register-form"]["address"].value;
	if(address.length < 1) {
		alert("Моля въведете адрес!");
		return false;
	}
	var number = document.forms["register-form"]["number"].value;
	if(number.length < 1) {
		alert("Моля въведете номер!");
		return false;
	}
	var numOnly = new RegExp("[0-9]+");
	if(numOnly.test(number) == false || number.length != 10) {
		alert("Невалиден номер!");
		return false;
	}
	alert("Вие се регистрирахте успешно!");
	return true;
}