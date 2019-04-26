function clicked()
{
	alert("Clicked!");
}

function changeColor() {
	var color = document.getElementById("color").value;
	document.getElementById("first").style.backgroundColor = color;
}

$(document).read(function(){
	$("#change").click(function() {
		$("#first").css("background-color", $("#color").val());
	});
});