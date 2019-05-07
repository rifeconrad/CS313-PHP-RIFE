window.addEventListener('load', init);

function init() {
	document.getElementById("cart_btn").addEventListener("click", showCart, false);
}

function showCart() {
	document.getElementById("browse").submit();
}