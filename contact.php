<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>MrOptasia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/mroptasia.css" />
    <link rel="stylesheet" type="text/css" href="css/hover-min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
</head>
<body>
	<header>
		<?php include("navbar.php"); ?>
	</header>
	<main>
		<section id="contact" class="col">
			<div id="cadre" class="s12 l8 m8">
				<form class="col" method="post" action="#">
					<div class="row">
						<input type="name" name="firstname" id="prénom" required placeholder="Prénom" />
						<div class="colsep"></div>
						<input type="name" name="lastname" id="nom" required placeholder="Nom" />
					</div>
					<input type="email" name="email" id="email" required placeholder="E-mail" />
					<textarea name="message" placeholder="Votre message"></textarea>
					<input class="m-auto envoyer" type="submit" value="Envoyer"/>
				</form>
			</div>
		</section>
	</main>
	<?php include("footer.php") ?>
    <script type="text/javascript" src="js/mroptasia.js"></script>
</body>
</html>