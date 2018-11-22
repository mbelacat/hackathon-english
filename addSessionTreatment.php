<?php
require "Model/userManager.php";
require "Model/sessionStudentManager.php";
require "Service/formChecker.php";
require "Model/db.php";
?>

<?php
if(!empty($_POST) && (isset($_POST))) {
   // if $_POST is not empty , we check the entries
   $_POST = clearForm($_POST);
   $errors = "";
   if((empty($_POST["mail"])|| empty($_POST["phone"])) && (empty($_POST["first_name"]) && empty($_POST["last_name"]))){
    $errors .= "8" ;
    }
   $errors .= respectPattern("#[0-9]{10}#", $_POST["phone"]);
   var_dump($errors);
   if(!empty($errors)){
     // have we initialize anonymous session?and Why?
        header("Location: Template/Forms/formCreateSession.php?message=$errors");
        exit;
    }else{
      // we add user to the db
      if(addUser($_POST)){
        $user_id = getLastUserID();
        $code = uniqCode(10);
        // and we add session to the db
        if(addSession($_POST, $user_id, $code)){
        // if addsession is true : we header locate to sessionList.php with success message
           header("Location: sessionList.php?message=Une session pour le test a bien été crée");
           exit;
        }else{
          // if addsession is false : we header locate to formCreateSession.php
           header("Location: Template/Forms/formCreateSession.php?message=4");
           exit;
        }
      }else{
        // if $_POST is empty : we header locate with error message to formCreateSession.php
         header("Location: Template/Forms/formCreateSession.php?message=8");
         exit;
      }

    }
}else{
   header("Location: formCreateSession.php?message=0");
   exit;
}
 ?>
