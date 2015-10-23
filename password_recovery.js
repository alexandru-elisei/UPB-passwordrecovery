window.onload = disableInputAuth;

function disableInputAuth() {
	document.getElementById("authselect").value="DefaultMessage";
	document.getElementById("authbuttonreset").disabled = true;
	document.getElementById("authinput").value = "";
	document.getElementById("authinput").setAttribute("style", "");
	document.getElementById("authinput").disabled = true;
}

function enableInputAuth() {
	if (document.getElementById("authselect").value == "Email") {
		document.getElementById("authinput").disabled = false;
		document.getElementById("authinput").value = "Email";
		document.getElementById("authinput").setAttribute("style", "font-style: italic; color: grey");
		document.getElementById("authbuttonreset").disabled = true;
	} else if (document.getElementById("authselect").value == "UserId") {
		document.getElementById("authinput").disabled = false;
		document.getElementById("authinput").value = "UserId";
		document.getElementById("authinput").setAttribute("style", "font-style: italic; color: grey");
		document.getElementById("authbuttonreset").disabled = true;
	} else if (document.getElementById("authselect").value == "NrTel") {
		document.getElementById("authinput").disabled = false;
		document.getElementById("authinput").value = "Nr. Tel.";
		document.getElementById("authinput").setAttribute("style", "font-style: italic; color: grey");
		document.getElementById("authbuttonreset").disabled = true;
	} else {
		document.getElementById("authbuttonreset").disabled = true;
		document.getElementById("authinput").value = "";
		document.getElementById("authinput").disabled = true;
	}
}

function prepareInputAuth() {
	if (document.getElementById("authinput").disabled == false &&
			document.getElementById("authinput").style.color == "grey") {
		document.getElementById("authinput").value = "";
		document.getElementById("authinput").setAttribute("style", "");
		document.getElementById("authbuttonreset").disabled = true;
	}
}

function enableResetButton() {
	document.getElementById("authbuttonreset").disabled = false;
}
