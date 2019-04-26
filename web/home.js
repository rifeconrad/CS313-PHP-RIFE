document.getElementById("img_btn").addEventListener("click", toggleImg);

var toggle = false;
function toggleImg() {
	console.log("SHOWING");
	if (toggle) {
		document.getElementById("img_view").style.visibility = "none";
		toggle = true;
	} else {
		document.getElementById("img_view").style.visibility = "visible";
		toggle = false;
	}
}