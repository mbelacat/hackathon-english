<?php
function connectToDataBAse()
{
  try
  {
<<<<<<< HEAD
    $db = new PDO('mysql:host=localhost;dbname=Adep_Anglais;charset=utf8', 'mbela', 'rootroot');
=======
    $db = new PDO('mysql:host=localhost;dbname=Adep_Anglais;charset=utf8', 'phpmyadmin', 'password');
>>>>>>> f246d3355a6cd47c11b2f8e048633d13b127df3d
  }
  catch (Exception $e)
  {
    die('Erreur : ' . $e->getMessage());
  }
  return $db;
}
<<<<<<< HEAD
var_dump(connectToDataBAse());
=======
>>>>>>> f246d3355a6cd47c11b2f8e048633d13b127df3d
?>
