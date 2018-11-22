
<?php
function deleteSession($db){

// Here we use the $db = mysqli_connect("localhost", "root", "", "Mydb"); in the Var $link

  if($db === false){
    die("ERROR: Impossible de ce connecter a la base de donnée. " . mysqli_connect_error());
}

  $sql = "DELETE FROM session WHERE user_id= ?";
  if(mysqli_query($db, $sql)){
    echo "La Session selectioner à etait supprimer.";
}
  else{
    echo "ERREUR: Impossible d'executer $sql. "
                                   . mysqli_error($db);
}
  mysqli_close($db);

}

 ?>
