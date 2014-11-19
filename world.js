window.onload = function() {
	var button = document.getElementById("lookup");
	var result = document.getElementById("result");
	var term = document.getElementById("term");
	button.addEventListener("click", function() {
		result.innerHTML += "<div>" + term.value + "</div>";
	});
}