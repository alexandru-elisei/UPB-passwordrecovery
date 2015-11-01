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
	<script src="password_recovery.js"></script>
	<link rel="stylesheet" type="text/css" href="password_recovery.css">
	<title>Resetare Parola</title>
</head>

<body>
	<div class="page-header">
		<img class="img-responsive center-block" alt="UPB logo" src="images/logo.gif" width="580" height="50">
	</div>
	<div class="container">
		<div class="text-justify">
			<br/>
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
			</ul>
			<p class="info">Un cod de verificare va fi trimis către adresa de e-mail 
							personală cu instrucțiuni de resetare a parolei.</p>
		</div>
		<br/>

		<form id="authform" role="form">
			<div class="form-group">
				<label for="authmethod">Metoda de autentificare:</label>
				<br/>
				<select class="form-control" id="authmethod" name="authmethod">
					<option selected value="userid">UserID</option>
					<option value="email">Email</option>
					<option disabled value="telnum">Nr. tel. mobil (indisponibil)</option>
				</select>
			</div>
			<div class="form-group">
				<label for="authdata">Datele de autentificare:</label>
				<input class="form-control" id="authdata" name="authdata" type="text">
			</div>
			<div class="form-group">
				<p class="authinfo" id="captchainfo"><strong>Sunteți un robot?</strong></p>
				<div id="recaptcha" class="g-recaptcha" data-sitekey=<?php echo $captchasitekey; ?>> </div>
				<script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=ro" async defer>
				</script>
				<noscript class="bg-danger text-danger"><br/><b>Vă rugăm activați javascript în browser pentru a vă putea reseta parola.</b><br/><br/></noscript>
			</div>
			<div class="form-group">
				<input class="btn btn-default" id="authbuttonreset" type="submit" disabled value="Reset"/>
			</div>
		</form>

		<div class="page-footer text-center">
			<img id="footer-img" class="img-responsive center-block" alt="UPB footer" src='images/bg-footer.gif' width="630" height="50">
			<table id="bottom-links">
				<tr> 
					<td id="cell1"><a class="btn-link" href="http://studenti.pub.ro">studenti.pub.ro</a></td>
					<td id="cell2"><a class="btn-link" href="http://curs.pub.ro">curs.pub.ro</a></td>
					<td id="cell3"><a class="btn-link" href="http://www.upb.ro">upb.ro</a></td>
				</tr>
			</table>
		</div>
	</div>
</body>
</html>
