function addVorschlaege() {
	alert("addvorschläge");
	var topFive = document.getElementById["vorschlaege"];
	var opt = document.createElement("option");
	var myCookies = document.cookie;
	alert(myCookies);
	var cookieArr = myCookies.split("=");
	var topFiveValueJson = cookieArr[cookieArr.length-1];
	var topFiveValue = JSON.parse(topFiveValueJson);
	alert (topFiveValue);
	/*for (let i = 0; i < 5; i++) {
		var newOptionValue = arr[i];
		alert(newOption);
		topFive[i] = new option(newOptionValue);
		alert("FINISH");
	}*/
			}

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

function hideCartView() { 
	alert("Ich bin versteckt!");
}

function suchvorschlaege() { 
				var value = document.getElementById("searchID").value;
				var topFive = document.getElementById("vorschlaege");
				
				if(value == ""){
					topFive.style.display = "none";
				}				
				else{
					topFive.style.display = "block";	
					
					var url = "//localhost/realtimeSearch.php?suchbegriff=" + value;
					window.location = url;
				}
}