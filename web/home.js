document.getElementById("img_btn").addEventListener("click", viewImg, false);

function viewImg() {
	console.log("CALLED");
	document.getElementById("img_view").style.display = "initial";
}