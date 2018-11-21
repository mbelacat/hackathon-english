<!-- need: form action?-->
<!--if error, check path  -->
<form class="w-50 mx-auto my-5" action="../../addSessionTreatment.php" method="post">
  <div class="form-group">
    <label for="first_name">Le prenom de l'apprenant</label>
    <input type="text" class="form-control"  name="first_name" id="first_name" >
  </div>
  <div class="form-group">
    <label for="last_name">Le nom de l'apprenant</label>
    <input type="text" class="form-control"  name="last_name" id="last_name">
  </div>
  <div class="form-group">
    <label for="mail">L'adresse mail de l'apprenant</label>
    <input type="text" class="form-control" name="mail" id="mail">
  </div>
  <!-- Le genearateur de clef -->
  <!-- Need ! : le Bouton doit avoir l'action de généré la clef -->
  <!-- <div class="form-group">
    <label for="userCode">clef</label>
    <button type="submit" class="btn lightBg">généré</button>
    <input type="text" class="form-control"  name="Code" required>
  </div> -->
  <button type="submit" class="btn lightBg">Creer une session</button>
 </form>
