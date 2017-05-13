<!DOCTYPE html>
<html>
      <head>
            <meta charset="utf-8">
            <title>Ajouter un jeu</title>
            <link rel="stylesheet" href="css/main.css">
            <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
      </head>
      <body>
            <header>
                  <h1 id="titre1">Ajouter un jeu</h1>
            </header>
            <div id="formulaire">
                  <form action="traitement.php" method="post">
                        <div>
                              <div>
                                    <label>Nom du jeu</label>
                                    <input type="text" name="nom" />
                              </div>
                              <div>
                                    <label>Nom du possesseur</label>
                                    <input type="text" name="possesseur">
                              </div>
                              <div>
                                    <label>Nom de la console</label>
                                    <input type="text" name="console">
                              </div>
                              <div>
                                    <label>Prix</label>
                                    <input type="number" name="prix">
                              </div>
                              <div>
                                    <label>Nombre de joueurs maximum</label>
                                    <input type="number" name="nbre_joueurs_max">
                              </div>
                              <div>
                                    <label>Commentaires</label>
                                    <textarea name="commentaires" rows="3" cols="30"></textarea>
                              </div>
                              <div>
                                    <input type="submit" name="valider" value="Valider">
                              </div>
                        </div>
                  </form>
            </div>
            <a href="reception.php">Voir la liste des jeux à vendre</a>
      </body>
</html>
