<?php
require("config.php");
?>

<!DOCTYPE html>
<html lang="ro">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="password_recovery.css">
	<script type="text/javascript" src="password_recovery.js"></script>
	<title>Password Recovery</title>
</head>

<body class="container">
	<div id="header">
		<a id="logo" title="Universitatea Politehnica Bucuresti" href="http://www.upb.ro/">
			<img src="images/logo.gif" alt="UPB logo" class="img" width="580" height="50">
		</a>
	</div>

	<div id="content" class="text-justify">
		<p class="info">Vă rugăm să alegeți metoda preferată de resetare a parolei (UserID, Email personal sau Nr. tel. mobil), apoi completați câmpul de mai jos. Toate trei provin de pe platforma <a href="http://studenti.pub.ro">studenti.pub.ro</a>:
		<ul class="list">
		  <li><strong>UserID</strong>: poate fi găsit în pagina <strong>Acces site cursuri</strong></li>
		  <li><strong>Email personal</strong>: poate fi găsit în pagina <strong>Date personale</strong>, câmpul <i>E-mail</i></li>
		  <li><strong>Nr. tel. mobil</strong>: poate fi găsit în pagina <strong>Date personale</strong>, câmpul <i>Telefon mobil</i></li>
		</ul>
		<p class="info">Un cod de verificare va fi trimis către adresa de e-mail personală cu instrucțiuni de resetare a parolei.</p>

		<form role="form" action="javascript:validateCaptcha()" method=post>
			<div class="form-group row">
				<div class="col-sm-6">
					<label for"authmethod">Metoda de autentificare:</label>
					<br/>
					<select class="form-control" id="authmethod" name="authmethod" onchange="enableInputAuth()">
						<option selected value="userid">UserID</option>
						<option value="email">Email</option>
						<option disabled value="telnum">Nr. tel. mobil (indisponibil)</option>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-sm-6">
					<label for="authdata">Datele de autentificare:</label>
					<input class="form-control" id="authdata" name="authdata" size="25" type="text" disabled onclick="prepareInputAuth()" oninput="enableResetButton()"/>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-sm-8">
					<p class="authinfo" id="captchainfo"><strong>Sunteți un robot?</strong></p>
					<div id="recaptcha" class="g-recaptcha" data-sitekey=<?php echo $captchasitekey; ?>> </div>
					<script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=ro" async defer>
					</script>
				</div>
			</div>
			<div class="form-group">
				<input class="btn btn-default" id="authbuttonreset" type="submit" disabled value="Reset"/>
			</div>
		</form>

		<div id="footer">
			<img id="img_footer" alt="UPB footer" src='images/bg-footer.gif' />
			<table border="0" id="bottom_links">
				<tr>
					<td class="link_cells" id="cell01">
						<a class="btn btn-link bottom_links" role="button" href="http://studenti.pub.ro">studenti.pub.ro</a>
					</td>
					<td class="link_cells" id="cell02">
						<a class="btn btn-link bottom_links" role="button" href="http://curs.pub.ro">curs.pub.ro</a>
					</td>
					<td class="link_cells" id="cell03">
						<a class="btn btn-link bottom_links" role="button" href="http://www.upb.ro">upb.ro</a>
					</td>
				</tr>
			</table>
		</div>
	</div>

</body>
</html>
