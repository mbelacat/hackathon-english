<?php

//Fonction qui récupère le dernière ID de la question
function getLastQuestionID($db){


$selectLast = $db->query('SELECT id_question FROM question ORDER BY id_question DESC LIMIT 0, 1');

$lastId = $selectLast->fetch(PDO::FETCH_ASSOC);

return $lastId['id_question']; // $lastId['id'] cette variable contient le dernier id<br>

$selectLast->closeCursor();

}

?>
