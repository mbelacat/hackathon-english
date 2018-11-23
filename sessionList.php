<?php
session_start();
require "Model/db.php";
require "Model/sessionStudentManager.php";
require "Model/userManager.php";
// require "deleteSessionTreatment.php";
$db = connectToDataBAse();
$apprenants = getUsers($db);
$code = getSessions($db);

include "Template/header.php";
?>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nom </th>
      <th>Prénom</th>
      <th>Clef</th>
      <th>Status du Test</th>
      <th>Supprimer</th>
    </tr>
  </thead>

  <tbody>
  <!-- foreach to see all sessions -->
  <?php
  foreach ($apprenants as $key => $result)
  {
    if ($result["status"] === "user") {?>
  
    <tr>
      <th scope="row"> <?php echo $result["last_name"]; ?> </th>
      <td> <?php echo $result["first_name"]; ?> </td>
  
  <?php }}

  foreach ($code as $key => $theKey) {
  ?>
   <td>  <?php echo $theKey["code"]; ?> </td>
   <td><?php echo $theKey["created_date"] ;  ?> </td>
   <!-- <i class="fas fa-trash-alt"></i> -->
   <td><a href="<?php echo 'deleteSessionTreatment.php?id=' . $theKey['id_session']; ?>" class="btn btn-danger">Supprimer</a></td>
</tr>
<?php }?>
  </tbody>

</table>
<?php include "Template/footer.php"; ?>