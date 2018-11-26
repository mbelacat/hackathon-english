<?php

//load page
require "Model/db.php";
require "Model/userManager.php";
require "Model/sessionStudentManager.php";
require "Service/formChecker.php";


// $db = connectToDataBAse();
// $query = $db->prepare("SELECT * FROM user WHERE  first_name = :first_name AND last_name = :last_name AND code = :code");
// $user = $query->execute(array(
//   "first_name" => $_POST["first_name"],
//   "last_name" => $_POST["last_name"],
//   "code" => $_POST["code"]
// ));
// $query->closeCursor()
$code = $_POST["code"];


$userSession = getUserSession($code);
// $session = getSession($userSession["user_id"]);

if(!empty($_POST)) {
  //clear the form enter
  $_POST = clearForm($_POST);
 //Collect the stored users
   if($userSession["first_name"] === $_POST["first_name"] && $userSession["last_name"] === $_POST["last_name"] && $_POST["code"] === $userSession["code"]) {
     //Start a session to store the user information stored sessions
     session_start();
     $_SESSION = $userSession;
     header("Location: testStart.php");
     exit;
   }
    session_destroy();
     header("Location: index.php?message=Nous n'avons aucun utilisateur avec ce nom et prenom");
     exit;
}
else{
//if the form isn't completed, we returns the user on the connexion page with a error message
    header("Location: index.php?message=Vous devez remplir les champs du formulaire");
    exit;
 }

 ?>
