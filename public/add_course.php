<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <title>DataFlow</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <content>
      <p class="titre" style="margin-top: 100px">Créer un cours</p>
      <div class="choix">
        <span class="label-titre">Type </span>
        <input type="radio" id="Cours" name="TypeCours" value="Cours" checked>
        <label for="Cours">Cours</label>
        <input type="radio" id="Soutien" name="TypeCours" value="Soutien">
        <label for="Soutien">Soutien</label>
      </div>
      <div class ="choix">
      <label for="Site">Site :</label>
        <select id="Site" name="Site">
          <option value="Tout">Tout</option>
          <option value="Bienne">Bienne</option>
          <option value="Genève">Genève</option>
        </select>
      </div>
      <div class ="choix">
        <label for="Site">Site :</label>
        <select id="Site" name="Site">
          <option value="Tout">Tout</option>
          <option value="Bienne">Bienne</option>
          <option value="Genève">Genève</option>
        </select>
      </div>
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
        <textarea
          id="description"
          name="description"
          style="width: 300px; height: 200px"
        ></textarea>
      </div>
    </content>
  </body>
</html>