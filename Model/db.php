<?php
function connectToDataBAse(){
  try
  {
    $db = new PDO('mysql:host=localhost;dbname=Adep_Anglais;charset=utf8', 'phpmyadmin', 'abcdef1996');
  }
  catch (Exception $e)
  {
    die('Erreur : ' . $e->getMessage());
  }
  return $db;
}

?>
