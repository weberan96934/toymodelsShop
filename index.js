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
	alert("bla");
}

/*var xhttp = new XMLHttpRequest();
	xhttp.onreadystatechange = function()
	{

	}
*/
