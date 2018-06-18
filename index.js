function printCartView() { 
	var myArr = ["Audi", "BMW", "Ford", "Honda", "Jaguar", "Nissan"];
	
	temp = document.getElementById('template1');
	item = temp.content.querySelector("p");
	//divi = document.getElementById('div1');
	//document.body.appendChild(divi);
	
	for (i = 0; i < myArr.length; i++) {
		a = document.importNode(item, true);
		a.textContent += myArr[i];
		
		//divi.appendChild(a);
		document.body.appendChild(a);
	}
}
/*function hideCartView() { 
	alert("Ich bin versteckt!");
}*/

function suchvorschlaege() { 
	var x = document.getElementById("vorschlaege");
	var option = document.createElement("option");
	option.text = "Ananas";
	x.add(option);
	
	var value = document.getElementById("searchID").value;
	
	var url = "//localhost/realtimeSearch.php?suchbegriff=" + value;
	window.location = url;
}