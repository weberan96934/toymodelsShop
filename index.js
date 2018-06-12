// Dem André seine Funktionen:

function printCartView() { 
	var item = document.createElement('p');
	item.value = "test";
	item.style.color = "red";

	var secCart = document.createElement('section');
	secCart.style.height = '150px';
	secCart.style.width = '300px';
	secCart.style.backgroundColor = '#ccc';
	secCart.style.position = 'absolute';
	secCart.style.bottom = '10px';
	secCart.style.right = '20px';
	
	document.body.appendChild(secCart);
	secCart.appendChild(item);
	
	
}
function hideCartView() { 
	alert("Ich bin versteckt!");
}


// Eva´s und Julia´s Funktionen:

function myFunction(){
	var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function()
	{
		if(this.readyState == 4 && this.status == 200)
		{
			document.getElementById // Das nochmal nachprüfen!
		}
	}
	
	var secSearch = document.createElement('section');
	secSearch.style.height = '150px';
	secSearch.style.width = '300px';
	secSearch.style.backgroundColor = '#ccc';
	secSearch.style.position = 'absolute';
	secSearch.style.bottom = '10px';
	secSearch.style.right = '20px';
	
	document.body.appendChild(secSearch);
	secSearch.appendChild(item);
}