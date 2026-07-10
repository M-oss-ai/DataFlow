<?php $courses = getCoursesByApprenti($pdo, $user["idUser"]); ?>
    <content>
      <p class="titre" style="margin-top: 100px">Ajouter journal</p>
      <div class="choix">
        <label for="dateJournal">Choisir la date :</label>
        <input type="date" id="dateJournal" name="dateJournal" />
      </div>
      <div class="choix">
        <label for="choixCours">Choisir le cours :</label>
        <select id="choixCours" name="choixCours">
          <?php foreach ($courses as $course) { ?>
            <option value="<?= $course["idCourseUser"] ?>">
              <?= htmlspecialchars($course["moduleName"]) ?>
            </option>
          <?php } ?>
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