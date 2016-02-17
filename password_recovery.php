<?php
require_once(__DIR__ . "/config.php");
require_once(__DIR__ . '/render_footer.php');
?>
<!DOCTYPE html>
<html lang="ro">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<script src="password_recovery.js"></script>
	<link rel="stylesheet" type="text/css" href="password_recovery.css">
	<title>Resetare Parola</title>
</head>

<body>
	<div class="page-header">
		<img class="img-responsive center-block" alt="UPB logo" src="images/logo.gif" width="580" height="50">
	</div>
	<div class="container text-justify">
		<h3>Date autentificare</h3>
		<hr>
		<p class="info">Vă rugăm să alegeți metoda preferată de resetare a parolei 
						(UserID, Email personal sau Nr. tel. mobil), apoi 
						completați câmpul de mai jos. Toate trei provin de pe 
						platforma <a href="http://studenti.pub.ro">studenti.pub.ro</a>:
		<ul class="list">
			<li><strong>UserID</strong>: poate fi găsit în pagina 
				<strong>Acces site cursuri</strong></li>
			<li><strong>Email personal</strong>: poate fi găsit în pagina 
				<strong>Date personale</strong>, câmpul <i>E-mail</i></li>
			<li><strong>Nr. tel. mobil</strong>: poate fi găsit în pagina 
				<strong>Date personale</strong>, câmpul <i>Telefon mobil</i></li>
		</ul></p>
		<p class="info">Un cod de verificare va fi trimis către adresa de e-mail 
						personală cu instrucțiuni de resetare a parolei.</p>
		<br/>

		<form id="authform" role="form">
			<div class="form-group">
				<label for="authmethod">Metoda de autentificare:</label>
				<br/>
				<select class="form-control" id="authmethod" name="authmethod">
					<?php
						foreach (Password_Recovery_Config::AUTH_METHODS_TEXT as $method => $text) {
							$line = '<option';
							$is_enabled = Password_Recovery_Config::AUTH_METHODS_ENABLED[$method];
							if (!$is_enabled) {
								$line = $line . ' disabled';
							}
							$line = $line . ' value="' . $method . '">' . $text;
							if (!$is_enabled) {
								$line = $line . ' (indisponibil)';
							}
							$line = $line . '</option>';
							echo $line;
						}
					?>
				</select>
			</div>
			<div class="form-group">
				<label for="authdata">Datele de autentificare:</label>
				<input class="form-control" id="authdata" name="authdata" type="text">
			</div>
			<div class="form-group">
				<p class="authinfo" id="captchainfo"><strong>Sunteți un robot?</strong></p>
				<div id="recaptcha" class="g-recaptcha" data-sitekey=<?php 
					echo Password_Recovery_Config::SITE_KEY; ?>> </div>
				<script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=ro" async defer>
				</script>
				<noscript class="bg-danger text-danger"><br/><b>Vă rugăm activați javascript 
							în browser pentru a vă putea reseta parola.</b><br/><br/></noscript>
			</div>
			<div class="form-group">
				<input class="btn btn-default" id="authbuttonreset" type="submit" disabled value="Reset"/>
			</div>
			<?php
				render_footer();
			?>
		</form>

	</div>
</body>
</html>
