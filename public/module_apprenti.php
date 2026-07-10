<?php $sites = getAllSites($pdo); ?>
    <content>
      <p class="titre" style="margin-top: 100px">les Modules</p>
      <div class="choix">
        <label for="Site">Site :</label>
        <select id="Site" name="Site">
          <option value="Tout">Tout</option>
          <?php foreach ($sites as $site) { ?>
            <option value="<?= $site["idSite"] ?>">
              <?= htmlspecialchars($site["name"]) ?>
            </option>
          <?php } ?>
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
