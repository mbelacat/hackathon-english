<?php
//On charge le header
include "Template/header.php";
 ?>

<!-- Form Connection Admin (Secretary/Teacher) -->
<!-- Need ! : <form action="? .php" -->


<form class="w-50 mx-auto my-5" action=".php" method="post">
  <div class="form-group">
    <label for="userName">Votre nom</label>
    <input type="text" class="form-control" id="userName" name="first__name" required>
  </div>
  <div class="form-group">
    <label for="userName">Votre prenom</label>
    <input type="text" class="form-control" id="userName" name="Last_name" required>
  </div>
  <button type="submit" class="btn lightBg">Se connecter</button>
</form>


<?php
//On charge le footer
include "Template/footer.php"
 ?>
