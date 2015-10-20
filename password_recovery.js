window.onload = initInputAuth;

function initInputAuth() {
	document.getElementById("inputauth").value = "";
	document.getElementById("resetbutton").disabled = true;
}

function enableInputAuth() {
	if (document.getElementById("selectauth").value == "Email") {
		document.getElementById("inputauth").disabled = false;
		document.getElementById("inputauth").value = "Email";
		document.getElementById("inputauth").setAttribute("style", "font-style: italic; color: grey");
		document.getElementById("resetbutton").disabled = true;
	} else if (document.getElementById("selectauth").value == "UserId") {
		document.getElementById("inputauth").disabled = false;
		document.getElementById("inputauth").value = "UserId";
		document.getElementById("inputauth").setAttribute("style", "font-style: italic; color: grey");
		document.getElementById("resetbutton").disabled = true;
	} else if (document.getElementById("selectauth").value == "NrTel") {
		document.getElementById("inputauth").disabled = false;
		document.getElementById("inputauth").value = "Nr. Tel.";
		document.getElementById("inputauth").setAttribute("style", "font-style: italic; color: grey");
		document.getElementById("resetbutton").disabled = true;
	} else {
		document.getElementById("resetbutton").disabled = true;
		document.getElementById("inputauth").disabled = true;
	}
}

function prepareInputAuth() {
	if (document.getElementById("inputauth").disabled == false &&
			document.getElementById("inputauth").style.color == "grey") {
		document.getElementById("inputauth").value = "";
		document.getElementById("inputauth").setAttribute("style", "");
		document.getElementById("resetbutton").disabled = true;
	}
}

function enableResetButton() {
	document.getElementById("resetbutton").disabled = false;
}
