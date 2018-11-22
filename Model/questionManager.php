<?php

//Fonction qui récupère le dernière ID de la question
function getLastQuestionID($db){


$selectLast = $db->query('SELECT id_question FROM question ORDER BY id_question DESC LIMIT 0, 1');

$lastId = $selectLast->fetch(PDO::FETCH_ASSOC);

return $lastId['id_question']; // $lastId['id'] cette variable contient le dernier id<br>

$selectLast->closeCursor();

}


//Fonction qui récupère toutes les questions de la table dans la DB
function getQuestions($db)
{
    $query = $db->query("SELECT * FROM question");
    $questions = $query->fetchall(PDO::FETCH_ASSOC);
    return $questions;
}

//Fonction qui récupère une seule question de la DB sur la base de son id
function getQuestion($id, $db)
{
    $query = $db->prepare("SELECT * FROM question WHERE id=?");
    $query->execute([$id]);
    $question = $query->fetch(PDO::FETCH_ASSOC);
    return $question;
}

//Fonction qui ajoute une question en DB
function addQuestion($question, $db)
{
    $query = $db->prepare("INSERT INTO question (question) VALUES(:question)");
    $result = $query->execute([
        "question" => $question["question"]
    ]);
    return $result;
}

//Fonction pour modifier les valeurs d'une question en base de données
function updateQuestion($question, $db)
{
    $query = $db->prepare("UPDATE question SET question = :question WHERE id_question = :id");
    $result = $query->execute([
        "id" => $question["id"],
        "question" => $question["question"]
    ]);
    return $result;
}

//Fonction pour supprimer une question en base de données
function deleteQuestion($id, $db)
{
    $query = $db->prepare("DELETE FROM question WHERE id = ?");
    $result = $query->execute([$id]);
    return $result;
}
