<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
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
      <p class="titre" style="margin-top: 100px">les Modules</p>
      <div class="choix">
        <label for="Site">Site :</label>
        <select id="Site" name="Site">
          <option value="Tout">Tout</option>
          <option value="Bienne">Bienne</option>
          <option value="Genève">Genève</option>
        </select>
        <label for="Type">Type :</label>
        <select id="Type" name="Type">
          <option value="Tout">Tout</option>
          <option value="Module interne">Module interne</option>
          <option value="Module CFC">Module CFC</option>
        </select>
      </div>
    </content>
  </body>
</html>