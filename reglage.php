 <?php include("tete-page.php"); ?>
	 
<div class="contenu">
	<div class="titre"><a class="a-titre" href="index.html">Accueil City-Mix </a> » Réglages</div>
	<body>	
<h3> Mini-chat entre bénévole </h3> 
    <form action="chat_post.php" method="post">
        <p>
        <b><label for="id">id</label> : <input type="text" name="id" id="id" /><br /> </b>
        <label for="Message">Message</label> :  <input type="text" name="message" id="message" /><br />
        <input type="submit" value="Envoyer" />
    </p>
    </form>

<?php
// Connexion à la base de données
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=v1;charset=utf8', 'localhost', '1478965');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

// Récupération des 6 derniers messages
$reponse = $bdd->query('SELECT num_message, id, message FROM chatbev ORDER BY ID DESC LIMIT 0, 5');

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{
    echo '<p>' . htmlspecialchars($donnees['num_message']) . ' : <b>' . htmlspecialchars($donnees['id']) . ' </b>: ' . htmlspecialchars($donnees['message']) . '</p>';
}

$reponse->closeCursor()
?>


    </body>
    </body>
  </html>
