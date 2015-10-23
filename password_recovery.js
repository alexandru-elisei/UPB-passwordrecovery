window.onload = disableInputAuth;

function disableInputAuth() {
	document.getElementById("authmethod").value="DefaultMessage";
	document.getElementById("authbuttonreset").disabled = true;
	document.getElementById("authdata").value = "";
	document.getElementById("authdata").setAttribute("style", "");
	document.getElementById("authdata").disabled = true;
}

function enableInputAuth() {
	if (document.getElementById("authmethod").value == "email") {
		document.getElementById("authdata").disabled = false;
		document.getElementById("authdata").value = "Email";
		document.getElementById("authdata").setAttribute("style", "font-style: italic; color: grey");
		document.getElementById("authbuttonreset").disabled = true;
	} else if (document.getElementById("authmethod").value == "userid") {
		document.getElementById("authdata").disabled = false;
		document.getElementById("authdata").value = "UserID";
		document.getElementById("authdata").setAttribute("style", "font-style: italic; color: grey");
		document.getElementById("authbuttonreset").disabled = true;
	} else if (document.getElementById("authmethod").value == "telnum") {
		document.getElementById("authdata").disabled = false;
		document.getElementById("authdata").value = "Nr. Tel.";
		document.getElementById("authdata").setAttribute("style", "font-style: italic; color: grey");
		document.getElementById("authbuttonreset").disabled = true;
	} else {
		document.getElementById("authbuttonreset").disabled = true;
		document.getElementById("authdata").value = "";
		document.getElementById("authdata").disabled = true;
	}
}

function prepareInputAuth() {
	if (document.getElementById("authdata").disabled == false &&
			document.getElementById("authdata").style.color == "grey") {
		document.getElementById("authdata").value = "";
		document.getElementById("authdata").setAttribute("style", "");
		document.getElementById("authbuttonreset").disabled = true;
	}
}

function enableResetButton() {
	document.getElementById("authbuttonreset").disabled = false;
}
