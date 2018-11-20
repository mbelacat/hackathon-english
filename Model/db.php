<?php

try

{

    $bdd = new PDO('mysql:host=localhost;dbname=Adep_Anglais;charset=utf8', 'nom_de_compte', 'password');

}

catch (Exception $e)

{

        die('Erreur : ' . $e->getMessage());

}

?>
