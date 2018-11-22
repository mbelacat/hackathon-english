<?php
require "Model/db.php";
include "Template/header.php";
$db = connectToDataBAse();

$query_question = $db->query('SELECT * FROM question');

$question = $query_question->fetchall(PDO::FETCH_ASSOC);

 ?>

<section>
  <h2>Panel d'adminisatration</h2>
  <div class="d-flex justify-content-end">
    <!-- Add entity in table -->
    <a href="qcmAddQuestion.php" class="btn btn-primary btn-lg active" role="button">Ajouter +</a>
  </div>
  <div class="mx-auto mt-3">
    <!-- Presentation of questions + reponses -->
    <table class="table">
      <thead>
        <tr>
          <th scope="col">Question</th>
          <th scope="col">Réponse</th>
          <th scope="col">Options</th>
        </tr>
      </thead>
      <tbody>
          <?php foreach ($question as $key => $value) {
            echo "<tr>";
            $id_question = $value["id_question"];
          ?>
          <td><?php echo $value["question"];?></td>
          </tr>
        <?php } ?>

    </table>
  </div>
</section>
 <?php
include "Template/footer.php";
 ?>
