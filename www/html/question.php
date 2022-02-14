<?php

function getAllQuestions($db) {
    $stmt = $db->query("SELECT questions.id, questions.title as title, categories.title as category FROM questions INNER JOIN categories ON questions.category_id=categories.category_id");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
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


function sumInputScore() {
    $scores = $_REQUEST['answers'];
    $result = 0;
    foreach($scores as $score){
        $result += $score;
    }
    return $result;
}

function createToken() {
    if (!isset($_SESSION['token'])) {
        $_SESSION['token'] = bin2hex(random_bytes(32));
    }
}

function validate() {
    if (empty($_SESSION['token']) || $_SESSION['token'] !== filter_input(INPUT_POST, 'token')) {
        exit('Invalid post request');
    }
}
