<?php
//Function collect a single user in DB
function getUser($user, $db) {
  $query = $db->prepare("SELECT * FROM user WHERE last_name =  ?, first_name = ?, code = ?");
  $query->execute([$user["last_name"], $user["first_name"], $user["code"]]);
  $user = $query->fetch(PDO::FETCH_ASSOC);
  return $user;
}

//Function add a user in DB
// function addUser($user, $db) {
//   $query = $db->prepare("INSERT INTO user (nameUser, password, sexe, status) VALUES(:nameUser, :password, :sexe, :status)");
//   $query->execute([
//     "nameUser" => $user["user_name"] ,
//     "password" => $user["user_password"],
//     "sexe" => $user["user_sexe"],
//     "status" => "USER"
//   ]);
// }

 ?>
