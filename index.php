<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulaire Ajax</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="script.js"></script>
</head>
<body>
	<h2>Ajax</h2>

		<form method="POST" class="contact-form d-flex flex-column align-items-center formulaire">
			
			<div class="return"></div>

			<input type="text" placeholder="Votre nom" class=" form-control nom"></br>

			<textarea placeholder="Votre message" class="form-control message"></textarea><br>

			<input type="submit" class="btn btn-submit btn-info w-75 submit" value="envoyer">

		</form>

		<div class="afficher"></div>
</body>
</html>
