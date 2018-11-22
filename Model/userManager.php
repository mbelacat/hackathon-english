<?php
function getUser($lastName) {
  $db = connectToDataBAse();
  $query = $db->prepare("SELECT * FROM user WHERE last_name =  ?");
  $query->execute([$lastName]);
  $user = $query->fetch(PDO::FETCH_ASSOC);
  return $user;
}
?>
