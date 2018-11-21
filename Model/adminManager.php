<!-- fonction to get the user admin for login  -->
<?php
require "db.php"
 ?>

<?php
function getUsers($db)
{
  $query = $db->query("SELECT * FROM user");
  $result = $query->fetchall(PDO::FETCH_ASSOC);
  return $result;
}

 ?>

 <?php
$stmt = $db->prepare("SELECT * FROM user");
if ($stmt->execute(array($_GET['name']))) {
  while ($row = $stmt->fetch()) {
    print_r($row);
  }
}
?>
