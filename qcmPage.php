<?php
include "Template/header.php";
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
        </tr>
      </thead>
    </table>
  </div>
</section>

 <?php
include "Template/footer.php";
 ?>
