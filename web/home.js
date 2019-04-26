document.getElementById("img_btn").addEventListener("click", toggleImg);

var toggle = true;
function toggleImg() {
	if (toggle) {
		document.getElementById("img_view").style.visibility = "none";
		toggle = false;
	} else {
		document.getElementById("img_view").style.visibility = "visible";
		toggle = true;
	}
}