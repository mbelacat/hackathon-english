<?php require "db.php" ?>
<?php
// function to have the one user  ok
function getUser($lastName) {
  $db = connectToDataBAse();
  $query = $db->prepare("SELECT * FROM user WHERE last_name =  ?");
  $query->execute([$lastName]);
  $user = $query->fetch(PDO::FETCH_ASSOC);
  $query->closeCursor();
  return $user;
}

function addUser($user){
  $db = connectToDataBAse();
  $query = $db->prepare('INSERT INTO user(first_name, last_name, password, mail, phone, status) VALUES(:last_name, :last_name, :password, :mail, :phone, :status)');
  $result = $query->execute(array(
      "first_name" => $user["first_name"],
      "last_name" => $user["last_name"],
      "password" => $user["last_name"],
      "mail" => $user["mail"],
      "phone" => $user["phone"],
      "status" => "user"));
  $query->closeCursor();
  return $result;
}
?>
