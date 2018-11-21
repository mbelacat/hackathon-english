<?php
//On charge le header
include "Template/header.php";
 ?>

 <!-- Form Created Session Student pour genéré la clef du futur apprenenant et l'inscrire a une session  -->
 <!-- Need ! : <form action="? .php" -->

 <form class="w-50 mx-auto my-5" action=".php" method="post">
   <div class="form-group">
     <label for="userName">Le nom de l'apprenant</label>
     <input type="text" class="form-control"  name="first__name" required>
   </div>
   <div class="form-group">
     <label for="userName">Le prenom de l'apprenant</label>
     <input type="text" class="form-control"  name="Last_name" required>
   </div>
   <div class="form-group">
     <label for="userName">L'adresse mail de l'apprenant</label>
     <input type="text" class="form-control" name="Mail" required>
   </div>
<!-- Le genearateur de clef -->
<!-- Need ! : le Bouton doit avoir l'action de généré la clef -->
<div class="form-group">
  <label for="userCode">clef</label>
  <button type="submit" class="btn lightBg">généré</button>
  <input type="text" class="form-control"  name="Code" required>
</div>



   <button type="submit" class="btn lightBg">Se connecter</button>
 </form>

 <?php
 //On charge le footer
 include "Template/footer.php"
  ?>
