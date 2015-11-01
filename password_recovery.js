$(document).ready(function() {
	changeAuthdataText();

	$("#authmethod").change(changeAuthdataText);

	$("#authdata").keyup(function() {
		if ($("#authdata").val().length == 0) {
			$("#authbuttonreset").prop("disabled", true);
		} else {
			$("#authbuttonreset").prop("disabled", false);
		}	
	});

	$("#authform").submit(function(event) {
		event.preventDefault();

		var captchaResponse = grecaptcha.getResponse();
		$.post("validate_captcha.php", {"g-recaptcha-response": captchaResponse}, function(data) {
			if (data === "success") {
				// Creating phony form to redirect with post data
				var url = "forgot-passwordck.php";
				var authmethod = $("#authmethod option:selected").text().toLowerCase();
				var authdata = $("#authdata").val();
				var form = $('<form action="' + url + '" method="post">' +
						'<input type="text" name="authmethod" id="authmethod" value="' + authmethod + '">' + 
						'<input type="text" name="authdata" id="authdata" value="' + authdata + '">' + 
						'</form>');
				$("body").append(form);
				form.submit();
			} else {
				$("#captchainfo").text("Verificare eșuată. Sunteți un robot?");
				$("#captchainfo").css("color", "red");
				$("#captchainfo").css("font-weight", "bold");
			}
		});
	});
});

function changeAuthdataText() {
	var authmethod = $("#authmethod option:selected").text();

	$("#authdata").prop("placeholder", authmethod);
	if (authmethod.toLowerCase() == "email") {
		$("#authdata").prop("type", "email");
	} else if (authmethod.toLowerCase() == "telnum") {
		$("#authdata").prop("type", "tel");
	} else {
		$("#authdata").prop("type", "text");
	}
}
