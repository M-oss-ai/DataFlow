<!doctype html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <title>DataFlow</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <header class="entete">
      <div>
        <a href="/test.php?page=journal" class="menu">Accueil</a>
        <a href="/test.php?page=module" class="menu">les Modules</a>
        <a href="/test.php?page=cour" class="menu">les Cours</a>
      </div>
      <div>
        <p><?= $user["name"] ?></p>
        <a href="#" class="menu">Se déconnecter</a>
      </div>
    </header>
    <content>
      <p class="titre" style="margin-top: 100px">Ajouter journal</p>
      <div class="choix">
        <label for="dateJournal">Choisir la date :</label>
        <input type="date" id="dateJournal" name="dateJournal" />
      </div>
      <div class="choix">
        <label for="choixCours">Choisir le cours :</label>
        <select id="choixCours" name="choixCours">
          <option value="Cours 1">Cours 1</option>
          <option value="Cours 2">Cours 2</option>
          <option value="Cours 3">Cours 3</option>
        </select>
      </div>
      <div class="choix">
        <label for="heureDébut">heure début :</label>
        <input type="time" id="heureDébut" name="heureDébut" />
      </div>
      <div class="choix">
        <label for="heureFin">heure fin :</label>
        <input type="time" id="heureFin" name="heureFin" />
      </div>
      <div class="choix">
        <textarea
          id="description"
          name="description"
          style="width: 300px; height: 200px"
        ></textarea>
      </div>
      <div class="choix">
        <button class="button">Valider</button>
      </div>
    </content>
  </body>
</html>
