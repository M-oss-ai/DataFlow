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
        <?= $user["name"] ?>
        <a href="#" class="menu">Se déconnecter</a>
      </div>
    </header>
  </body>
</html>