<?php
require "Model/userManager.php";
require "Model/sessionManager.php";
?>

<?php
// var_dump($_POST);
//  var_dump(addUser($_POST));
//  var_dump(getLastUserID());
//  $user_id = getLastUserID();
//  var_dump(addSession($_POST, $user_id));
if(!empty($_POST)) {
   // if $_POST is not empty , we secure the entries
   // clearForm($_POST);
  // we add user to the db
   if(addUser($_POST)){
     $user_id = getLastUserID();
  // and we add session to the db
     if(addSession($_POST, $user_id)){
      // if addsession is true : we header locate to sessionList.php with success message
       header("Location: sessionList.php?success=La session a bien été ajoutée");
       exit;
    }else{
      // if addsession is false : we header locate to formCreateSession.php
        header("Location: formCreateSession.php?errors= ici le code erreur");
        exit;
     }
   }else{
    // if $_POST is empty : we header locate with error message to formCreateSession.php
     header("Location: formCreateSession.php?errors= ici le code erreur");
     exit;
   }
 }else{
   // if adduser is false : we header locate to formCreateSession.php
    header("Location: formCreateSession.php?errors= ici le code erreur");
    exit;
 }
 ?>
