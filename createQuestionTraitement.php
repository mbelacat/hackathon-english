<!-- Connexion database -->
<?php
require "Model/db.php";
require "Model/questionManager.php";
$db = connectToDataBAse();
?>

<?php

//Tous d'abord, on vérifie si la valeur entrée dans le formulaire existe
if(isset($_POST['question']) && isset($_POST['reponse']))
{
  //On stock la requête préparé dans $add
  $add_question = $db->prepare('INSERT INTO question (question) VALUES (:question)');
  //Avec $add, on execute la requête
  $add_question->execute(array(
    'question' => $_POST['question']
  ));

  //On stock la fonction dans une variable, pour prendre le dernier ID de la question
  $lastquestion = getLastQuestionID($db);

  //On stock la requête préparé dans $add pour reponse
  $add_reponse = $db->prepare('INSERT INTO reponse (reponse, question_id) VALUES (:reponse, :question_id)');
    //Avec $add_reponse, on execute la requête
  $add_reponse->execute(array(
    'reponse' => $_POST['reponse'],
    'question_id' => $lastquestion

  ));

  //On termine les requêtes
  $add_question->closeCursor();
  $add_reponse->closeCursor();

  // On redirige vers qcmPage avec un message de succés
  header('Location: qcmPage.php?message=Votre Question/Reponse ont bien était ajouté');
  exit;
}
 ?>
