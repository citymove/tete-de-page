 <!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title> Administrateurs</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic">
</head>
<body>
<nav class="menu">
	<div class="haut">
		<a class="home" href="#">City-mix administration</a>

	<form method="post" action="help/redirection_navigation.php">
<p>
<!-- une balise select ou input ne peut pas être imbriquée directement dans form -->
     <select name="menu_destination">
          <option value="utilite.php ">A quoi sert City-mix</option>
          <option value="apropos.php">Qui sommes-nous ?</option>
          <option value="contact.php">Nous contacter</option>
          <option value="plan.php">Plan du site</option>
     </select>

     <input type="submit" value="Go" title="valider pour aller à la page sélectionnée" />

</p>
</form>


		</form>
	</div>
	 <?php include("menu.php"); ?>

<div class="contenu">
	<div class="titre"><a class="a-titre" href="index.php">Accueil City-Mix </a> » Tout savoir sur citymove</div>

<h3>Ici les articles pour la partie actualité ou blog du site </h3>
<p>Sujet <br>
<hr color="red"> <br>


</div>
</body>
</html>