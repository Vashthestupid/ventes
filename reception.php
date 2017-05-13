<!DOCTYPE html>
<html>
      <head>
            <meta charset="utf-8">
            <title>Liste des jeux à vendre</title>
            <link rel="stylesheet" href="css/main.css">
      </head>
      <body>
            <table>
                  <tr>
                        <th>Nom</th>
                        <th>Possesseur</th>
                        <th>Console</th>
                        <th>Prix</th>
                        <th>Nombre de joueurs maximum<th>
                        <th>Commentaires</th>
                  </tr>
            </table>
<?php

include('connexion.php');

$req = $bdd->query('SELECT * FROM jeux_video ORDER BY ID DESC LIMIT 0,20');
while($donnees = $req->fetch())
{
?>
            <table>
                  <tr>
                        <td><?php echo $donnees['nom'];?></td>
                        <td><?php echo $donnees['possesseur'];?></td>
                        <td><?php echo $donnees['console'];?></td>
                        <td><?php echo $donnees['prix'];?></td>
                        <td><?php echo $donnees['nbre_joueurs_max'];?></td>
                        <td><?php echo $donnees['commentaires'];?></td>
                  </tr>
            </table>
<?php
}
?>
            <div class="pagination">
                  <a href="#">&laquo;</a>
                  <a href="#">1</a>
                  <a href="reception2.php">2</a>
                  <a href="reception3.php">3</a>
                  <a href="#">&raquo;</a>
            </div>
      </body>
</html>
