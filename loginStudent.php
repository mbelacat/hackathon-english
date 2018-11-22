<?php
//load page
require "Model/db.php";
require "Model/userManager.php";
require "Service/sessionManager.php";
require "Service/formChecker.php";

//if the form is completed
if(!empty($_POST)) {
  //clear the form enter
  $_POST = clearForm($_POST);
  //collect the user on the site
  $user = getUser($_POST, $db);
  //if the db find a user
  if(!empty($user)) {
    initializeUserSession($user);
    header("Location: testStart.php");
    // exit for stop the script execution
    exit;
  }
  else {
    header("Location: index.php?message=7");
    exit;
  }
}
//if the form isn't completed, direction on the login page with a message
else {
  header("Location: index.php?message=0");
  exit;
}

 ?>
