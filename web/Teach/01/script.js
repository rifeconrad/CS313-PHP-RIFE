function clicked()
{
	alert("Clicked!");
}

function changeColor() {
	var color = document.getElementById("color").value;
	document.getElementById("first").style.backgroundColor = color;
}

$(document).ready(function(){
	$("#debug").text($("#color").val());
	$("#debug1").text("TEST");
	$("#change").click(function() {
		$("#first").css("backgroundColor", $("#color").val());
	});
});