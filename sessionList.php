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
      <th scope="col">Prénom</th>
      <th scope="col">Clef</th>
      <th scope="col">Status du Test</th>
      <th scope="col">Supprimer</th>
    </tr>
  </thead>

  <tbody>
  <!-- foreach to see all sessions -->
  <?php
  foreach ($apprenants as $key => $result)
  {
  ?>
    <tr>
      <th scope="row"> <?php echo $result["last_name"] ?> </th>
      <td scope="row"> <?php echo $result["first_name"] ?> </td>
<<<<<<< HEAD
<?php
    }

foreach ($code as $key => $theKey) {
?>

    <td scope="row">  <?php echo $theKey["code"] ?> </td>
    <td scope="row"><?php echo $theKey["created_date"] ;  ?> </td>
    <!-- <i class="fas fa-trash-alt"></i> -->
    <td scope="row"><a href="<?php echo 'deleteSessionTreatment.php?id=' . $theKey['id_session']; ?>" class="btn btn-danger">Supprimer</a></td>
</tr>
<?php
=======
      <?php
>>>>>>> f246d3355a6cd47c11b2f8e048633d13b127df3d
  }
    foreach ($code as $key => $theKey)
    {
    ?>
      <td scope="row">  <?php echo $theKey["code"] ?> </td>
      <td scope="row"><?php echo $theKey["created_date"] ;  ?> </td>
      <td scope="row"><i class="fas fa-trash-alt"></i></td>
      </tr>
      <?php
    }
    ?>
  </tbody>
</table>
<?php include "Template/footer.php"; ?>
