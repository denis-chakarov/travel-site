function myMove(color) {
  var elem = document.getElementById("animate");  
  var pos = 0;
  var index = 0;
  var counter = 0;
  var colors;
  if(color === "green") {
	  colors = new Array("#eafaea", "#d6f5d6", "#c1f0c1", "#adebad", "#98e698", "#84e184", "#6fdc6f", "#5bd75b", "#46d246", "#32cd32","white");
  }
  if(color === "red") {
	  colors = new Array("#ffe6e6", "#ffcccc", "#ffb3b3", "#ff9999", "#ff8080", "#ff6666", "#ff4d4d", "#ff3333", "#ff1a1a", "#ff0000", "white");
  }
  
  if(color === "yellow") {
	  colors = new Array("#ffffe6", "#ffffcc", "#ffffb3", "#ffff99", "#ffff80", "#ffff66", "#ffff4d", "#ffff33", "#ffff1a", "#ffff00", "white");
  }
  if(color === "orange") {
	  colors = new Array("#fff6e6", "#ffedcc", "#ffe4b3", "#ffdb99", "#ffd280", "#ffc966", "#ffc14d", "#ffb833", "#ffaf1a", "#ffa500", "white");
  }
  if(color === "darkorange") {
	  colors = new Array("#fff4e6", "#ffe8cc", "#ffddb3", "#ffd199", "#ffc680", "#ffba66", "#ffaf4d", "#ffa333", "#ff981a", "#ff8c00", "white");
  }
  var id = setInterval(frame, 5);
  
	  var id1 = setInterval(colorsChange, 20);
  function frame() {
	if (pos == 290) {
		clearInterval(id);
	}
		 else {
		  pos++;
		  elem.style.left = pos + 'px'; 
		}
	}
	function colorsChange() {
		if(counter == 80) {
		clearInterval(id1);
		elem.style.backgroundColor = "white";
		document.getElementById("container").style.backgroundColor = "white";
		document.getElementById("mp").style.backgroundColor = "white";
		} else {
			elem.style.backgroundColor = colors[index];
			document.getElementById("container").style.backgroundColor = colors[index];
			document.getElementById("mp").style.backgroundColor = colors[index];
			index++;
			if(index == 11) {
				index = 0;
			}
			counter++;
		}
	}
}
var i = 0;
var txt;
var speed = 50;

function typeWriter(color) {
	if(color === "green") {
		txt = 'Без особени препоръки';
	}
	if(color === "yellow") {
		txt = 'Повишено внимание(осведомете се подробно за актуалната обстановка в страната).';
	}
	if(color === "orange") {
		txt = 'Повишено ниво на риск(препоръка да не се пътува в определени райони на страната освен при крайна необходимост).';
	}
	if(color === "darkorange") {
		txt = 'Предупреждение за преустановяване на пътуванията в цялата страна(освен при крайна необходимост).';
	}
	if(color === "red") {
		txt = 'Предупреждение за преустановяване на всякакви пътувания и незабавно напускане на страната.';
	}
  if (i < txt.length) {
	document.getElementById("warning").innerHTML += txt.charAt(i);
	i++;
	setTimeout(typeWriter, speed);	
  }
}