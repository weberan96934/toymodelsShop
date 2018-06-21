function addVorschlaege(topFiveValue) {
	
	var topFive = document.getElementById("vorschlaege");
	for (let i = 0; i < 5; i++) {
		if(topFiveValue[i] == undefined)
			break;
		var option = document.createElement("option");
		option.text = topFiveValue[i];
		topFive.options[i]= option;
	}
}

function suchvorschlaege() { 
				var value = document.getElementById("searchID").value;
				var topFive = document.getElementById("vorschlaege");
				
				if(value == ""){
					topFive.style.display = "none";
				}				
				else{
					topFive.style.display = "block";	
					
					var xhttp = new XMLHttpRequest();
					xhttp.onreadystatechange = function() {
						if (this.readyState == 4 && this.status == 200) {
							var topFiveJson = this.responseText;
							var topFiveValue = JSON.parse(topFiveJson);
							addVorschlaege(topFiveValue);
						}
					}
					xhttp.open("GET", "realtimeSearch.php?suchbegriff=" + value, true);
					xhttp.send();
				}
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
	customElements.define('popup-info', PopUpInfo);
}

function hideCartView() { 
	//alert("Ich bin versteckt!");
}

function shadowDom(){
		let el = document.querySelector(".dom");
		
		el.attachShadow({mode: 'open'});
		el.shadowRoot;
		el.shadowRoot.host;
		el.shadowRoot.innerHTML = "Hi I am shadowed";
		
		let hello = document.createElement("span");
		hello.textContent = "Hi I am shadowed but wrapped in span";
		el.shadowRoot.appendChild(hello);	
}