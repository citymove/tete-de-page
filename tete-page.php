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
		<a class="home" href="/admin/index.php">City-mix administration</a>

	<form method="post" action="redirection_navigation.php">
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