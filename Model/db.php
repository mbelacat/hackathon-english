<?php
function connectToDataBAse()
{
  try
  {
<<<<<<< HEAD
    $db = new PDO('mysql:host=localhost;dbname=Adep_Anglais;charset=utf8', 'mbela', 'rootroot');
=======
    
    $db = new PDO('mysql:host=localhost;dbname=Adep_Anglais;charset=utf8', 'root', 'root');

>>>>>>> 8324a2ca7b38ac27ddad17a8fd2e1c9f9cbed054
  }
  catch (Exception $e)
  {
    die('Erreur : ' . $e->getMessage());
  }
  return $db;
}
?>
