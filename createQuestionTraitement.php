<!-- Connexion database -->
<?php
require "Model/db.php";
$db = connectToDataBAse();
?>

<?php
//Tous d'abord, on vérifie si la valeur entrée dans le formulaire existe
if(isset($_POST['question'])){
  //On stock la requête préparé dans $add
  $add_question = $db->prepare('INSERT INTO question (question) VALUES (:question)');
  //Avec $add, on execute la requête
  $add_question->execute(array(
    'question' => $_POST['question']
  ));
  //On termine la requête
  $add_question->closeCursor();
  //On redirige vers qcmPage avec un message de succés
  header('Location: qcmPage.php?message=Votre Question/Reponse ont bien était ajouté');
  exit;
}


if(isset($_POST['reponse'])){

  header('Location: qcmPage.php?message=Votre Question/Reponse ont bien était ajouté');
  exit;
}
 ?>
