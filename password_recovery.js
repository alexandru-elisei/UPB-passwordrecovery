window.onload = disableInputAuth;

function disableInputAuth() {
	document.getElementById("authmethod").value="DefaultMessage";
	document.getElementById("authbuttonreset").disabled = true;
	document.getElementById("authdata").value = "";
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

var validationRequest;

// Browser Support Code
function validateCaptcha(){

	try {
		// Opera 8.0+, Firefox, Safari
		validationRequest = new XMLHttpRequest();
	} catch (e) {
		// Internet Explorer Browsers
		try{
			validationRequest = new ActiveXObject("Msxml2.XMLHTTP");
		} catch (e) {
			try { 
				validationRequest = new ActiveXObject("Microsoft.XMLHTTP");
			} catch (e) {
				// Something went wrong
				alert("Your browser broke!");
			}
		}
	}
	if (validationRequest != null) {
		var response = grecaptcha.getResponse();
		validationRequest.open("POST", "validate_captcha.php", true);
		validationRequest.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		validationRequest.send("g-recaptcha-response=" + response);
		validationRequest.onreadystatechange = verifyValidateCaptcha;
	}
}

function verifyValidateCaptcha() {
	if (validationRequest.readyState == 4) {
		if (validationRequest.responseText == "success") {
			// Creating phony form for submitting POST data
			var phonyForm = document.createElement("form");
			phonyForm.setAttribute("method", "post");
			phonyForm.setAttribute("action", "form_submit_success.php");

			// Phony authmethod input field
			var authMethod = document.createElement("input");
			authMethod.setAttribute("type", "hidden");
			authMethod.setAttribute("name", "authmethod");
			authMethod.setAttribute("value", document.getElementById("authmethod").value);
			phonyForm.appendChild(authMethod);

			// Phony authdata input field
			var authData = document.createElement("input");
			authData.setAttribute("type", "hidden");
			authData.setAttribute("name", "authdata");
			authData.setAttribute("value", document.getElementById("authdata").value);
			phonyForm.appendChild(authData);

			document.body.appendChild(phonyForm);
			phonyForm.submit();
		} else {
			document.getElementById("captchainfo").childNodes[0].nodeValue = "Verificare eșuată. Sunteți un robot?";
			document.getElementById("captchainfo").setAttribute("style", "color: red; font: Helvetica; font-size: 15;");
		}
	}
}
