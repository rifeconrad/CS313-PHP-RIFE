window.addEventListener('load', init);

function init() {
	document.getElementById("img_btn").addEventListener("click", viewImg, false);
}

function viewImg() {
	document.getElementById("img_view").style.display = "initial";
}