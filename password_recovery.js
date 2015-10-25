window.onload = disableInputAuth;

function disableInputAuth() {
	/*
	var getRequestParam = window.location.search.substring(1);
	var paramArray = getRequestParam.split('&');
	var paramCount = paramArray.length;
	var isFailedCaptcha = true;

	if (paramCount != 2) {
		isFailedCaptcha = false;
	} else {
		for (var i = 0; i < paramCount; i++) {
			var keyValue = paramArray[i].split('=');
			// First get parameter is always authmethod
			if (i == 0) { 
				if (keyValue[0] != "authmethod") {
					isFailedCaptcha = false;
					break;
				} else if (keyValue[1] != "email" && keyValue[1] != "userid" && keyValue[1] != "telnum") {
					isFailedCaptcha = false;
					break;
				}
			} else if (keyValue[0] != "authdata") {
				isFailedCaptcha = false;
				break;
			}
		}
	}
	*/

	document.getElementById("authmethod").value="DefaultMessage";
	document.getElementById("authbuttonreset").disabled = true;
	document.getElementById("authdata").value = "";
	document.getElementById("authdata").value = getRequestParams;
	document.getElementById("authdata").setAttribute("style", "");
	document.getElementById("authdata").disabled = true;
	document.getElementById("authbuttonreset").disabled = true;
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

// Browser Support Code
function ajaxFunction(){
	var ajaxRequest;

	document.getElementById("authdata").value = "huh";
	try {
		// Opera 8.0+, Firefox, Safari
		ajaxRequest = new XMLHttpRequest();
	} catch (e) {
		// Internet Explorer Browsers
		try{
			ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try { 
				ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e) {
				// Something went wrong
				alert("Your browser broke!");
				return false; 
			}
		}
	}

	ajaxRequest.onreadystatechange = function() {
		if (ajaxRequest.readyState == 4) {
			document.getElementById("authdata").value = "huh";
		}
		ajaxRequest.open("GET", "validate_captcha.php", true);
		ajaxRequest.send(null);
	}
}

