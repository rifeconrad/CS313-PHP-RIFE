document.getElementById("img_btn").addEventListener("click", toggleImg);

var toggle = false;
function toggleImg() {
	console.log("SHOWING");
	if (toggle) {
		document.getElementById("img_view").style.display = "none";
		toggle = true;
	} else {
		document.getElementById("img_view").style.display = "initial";
		toggle = false;
	}
}