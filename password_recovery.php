<?php
$sitekey = "6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI";
$authmethods = array("email", "userid", "telnum");
?>

<html>
<head>
	<title>Password Recovery</title>
	<link rel="stylesheet" type="text/css" href="password_recovery.css" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<script src="password_recovery.js"></script>
	</script>
</head>

<body id="body">
	<div id="header">
		<a id="logo" title="Universitatea Politehnica Bucuresti" href="http://www.upb.ro/"></a>
	</div>

	<div id="content">
		<p class="info">Vă rugăm să alegeți metoda preferată de resetare a parolei (UserID, Email personal sau Nr. tel. mobil), apoi completați câmpul de mai jos. Toate trei provin de pe platforma <a href="http://studenti.pub.ro">studenti.pub.ro</a>:
		<ul>
		  <li><b>UserID</b>: poate fi găsit în pagina <b> Acces site cursuri </b></li>
		  <li><b>Email personal</b>: poate fi găsit în pagina <b> Date personale </b>, câmpul <i>E-mail</i></li>
		  <li><b>Nr. tel. mobil</b>: poate fi găsit în pagina <b> Date personale </b>, câmpul <i>Telefon mobil</i></li>
		</ul>
		</p>
		<p class="info">Un cod de verificare va fi trimis către adresa de e-mail personală cu instrucțiuni de resetare a parolei.</p>

		<form action="javascript:validateCaptcha()" method=post>
			<div id="authsection">
				</br>
				<select id="authmethod" name="authmethod" onchange="enableInputAuth()">
					<option selected disabled value="DefaultMessage">Selectați metoda de autentificare</option>
					<option value="userid">UserID</option>
					<option value="email">Email</option>
					<option disabled value="telnum">Nr. tel. mobil (indisponibil)</option>
				</select>
				<p class="authinfo">Introduceți datele de autentificare:</p>
				<input id="authdata" name="authdata" size="25" type="text" disabled onclick="prepareInputAuth()" oninput="enableResetButton()"/>
				</br>
				<p class="authinfo" id="captchainfo">Sunteți un robot?</p>
				<div id="recaptcha" class="g-recaptcha" data-sitekey=<?php echo $sitekey; ?>> </div>
<script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=ro" async defer>
</script>
				</br>
				<input id="authbuttonreset" type="submit" disabled value="Reset"/>
			</div>
		</form>

		<div id="footer">
			<img id="img_footer" src='images/bg-footer.gif' />
			<table border="0" id="bottom_links">
				<td class="link_cells" id="cell01">
					<a class="bottom_links" href="http://studenti.pub.ro">studenti.pub.ro</a>
				</td>
				<td class="link_cells" id="cell02">
					<a class="bottom_links" href="http://curs.pub.ro">curs.pub.ro</a>
				</td>
				<td class="link_cells" id="cell03">
					<a class="bottom_links" href="http://www.upb.ro">upb.ro</a>
				</td>
			</table>
		</div>
	</div>

</body>
</html>
