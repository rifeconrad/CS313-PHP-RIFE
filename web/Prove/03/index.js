window.addEventListener('load', init);

function init() {
	document.getElementById("item_btn").addEventListener("click", addToCart, false);
}

function Item(name, quantity, price)
{
	this.name = name;
	this.quantity = quantity;
	this.price = price;
}
function addToCart() {
	// grab data
	var item_name = document.getElementById("item_btn").value;
	console.log(item_name);

	var qID = "q" + item_name;
	console.log(qID);
	var item_quantity = document.getElementByName(qID).value;

	console.log(item_quantity);

	// create object and stringify data
	var item = new Item(item_name, item_quantity, 10);
	var item_str = JSON.stringify(item);

 	// store data to session
	sessionStorage.setItem(item_name, item_str);
}