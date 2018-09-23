function validation() {
	var name = document.forms["form4"]["description"].value;
	if(name.length < 2) {
		alert("Напишете отзив!");
		return false;
	}
	return true;
}