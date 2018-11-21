<!-- fonction to get the user admin for login  -->
<?php
function getUsers($db)
{
  $query = $bdd->query("SELECT * FROM user");
  $result = $query->fetchall(PDO::FETCH_ASSOC);
  return $result;
}
 ?>
