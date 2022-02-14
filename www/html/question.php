<?php

function getAllQuestions($db) {
    $stmt = $db->query("SELECT * FROM questions");
}

function getQuestion($db, $question_id) {
    $stmt = $db->prepare("SELECT title FROM questions WHERE id=:id");
    $stmt->bindValue(':id', $question_id);
    $stmt->execute();
    $question = $stmt->fetch(PDO::FETCH_ASSOC);
    return $question['title'];
}

function getChoices($db, $question_id) {
    $stmt = $db->prepare("SELECT choice_text, score FROM choices WHERE question_id=:question_id");
    $stmt->bindValue(':question_id', $question_id);
    $stmt->execute();
    $choices = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $choices;
}
