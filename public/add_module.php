<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <title>DataFlow</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <content>
      <p class="titre" style="margin-top: 100px">Créer un module</p>
      <div class="choix">
        <label for="Nom">Nom</label>
        <textarea
          id="Nom"
          name="Nom"
          style="width: 180px; height: 30px"
        ></textarea>
      </div>
      <div class="choix">
        <label for="Durée">Durée</label>
        <input type="time" id="Durée" name="Durée" />
      </div>
      <div class="choix">
        <label for="Couleur">Couleur</label>
        <input type="color" id="Couleur" name="Couleur" />
      </div>
      <div class="choix">
        <span class="label-titre">Type </span>
        <input type="radio" id="choixCFC" name="typeJournal" value="cours" checked>
        <label for="choixCFC">CFC</label>
        <input type="radio" id="choixInterne" name="typeJournal" value="interne">
        <label for="choixInterne">Interne</label>
      </div>
      <div class="choix">
        <textarea
          id="description"
          name="description"
          style="width: 300px; height: 200px"
        ></textarea>
      </div>
    </content>
  </body>
</html>
