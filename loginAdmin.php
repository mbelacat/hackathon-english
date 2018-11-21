<?php
require "Model/db.php";
require "Model/adminManager.php";
 ?>
 <?php
 // Verify if form is not empty.
 if(!empty($_POST)) {
   // Clean form's entry
   foreach ($_POST as $key => $value) {
     $_POST[$key] = htmlspecialchars($value);
   }
   //On récupère les utilisateurs stockés sur le site (ici pour l'exercice ils sont stockés dans une fonction)
   $user = getUser($bdd,$_POST["user_name"]);
   $password_OK = password_verify( $_POST["user_password"], $user["password"]);

   if($password_OK) {
     //Si c'est le cas on démarre une session pour y stocker les informations de l'utilisateur
     session_start();
     $_SESSION["user"] = $user;
     header("Location: homepage.php");
     //On met un exit pour arrêter l'execution du script, autrement la redirection n'aura pas le temps de se faire
     exit;
   }
 header("Location: index.php?message=Nous n'avons aucun utilisateur avec ce nom ou ce mot de passe");
 exit;
 }
 //Si le formulaire n'est pas rempli on renvoie l'utilisateur sur la page de login avce un message
 else {
 header("Location: index.php?message=Vous devez remplir les champs du formulaire");
 exit;
 }

  ?>
