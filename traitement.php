<?php

include('connexion.php');

$req = $bdd->prepare('INSERT INTO jeux_video(nom,possesseur,console,prix,nbre_joueurs_max,commentaires) VALUES(?,?,?,?,?,?)');

$req->execute([
      $_POST['nom'],
      $_POST['possesseur'],
      $_POST['console'],
      $_POST['prix'],
      $_POST['nbre_joueurs_max'],
      $_POST['commentaires'],
]);

header('Location:index.php');

?>
