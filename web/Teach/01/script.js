function clicked()
{
	alert("Clicked!");
}

function changeColor() {
	var color = document.getElementById("color").value;
	document.getElementById("first").style.backgroundColor = color;
}

$(document).ready(function(){
	$("#change").click(function() {
		var color = $("#color").val();
		$("#first").css({'background-color':color});
		$("#debug").text($("#color").val());
		$("#debug1").text("TEST");
	});
});