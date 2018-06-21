class FancyButton extends HTMLElement{
	constuctor(){
		super();
		var buttonId = document.getElementById('cart-button');
		buttonId.attachShadow({mode: 'open'});
		alert(shadowRoot.host);
	}
	
	connectedCallback(){
		let currDoc = document.currentScript.ownerDocument;
		let template = currDoc.querySelector('#fancy-button');
		let tmplNode = document.importNode(template.content, true);
		
		let shadowRoot = this.createShadowRoot();
		shadowRoot.appendChild(tmplNode);
		shadowRoot.querySelector("button").innerHTML = this.innerHTML;
	}
}

window.customElements.define("fancy-button", FancyButton);