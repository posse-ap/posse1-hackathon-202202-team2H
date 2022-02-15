<?php

function getAllQuestions($db)
{
    $stmt = $db->query("SELECT questions.id, questions.title as title, categories.title as category FROM questions INNER JOIN categories ON questions.category_id=categories.category_id");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getQuestion($db, $question_id)
{
    $stmt = $db->prepare("SELECT title FROM questions WHERE id=:id");
    $stmt->bindValue(':id', $question_id);
    $stmt->execute();
    $question = $stmt->fetch(PDO::FETCH_ASSOC);
    return $question['title'];
}

function getChoices($db, $question_id)
{
    $stmt = $db->prepare("SELECT id, choice_text, score FROM choices WHERE question_id=:question_id");
    $stmt->bindValue(':question_id', $question_id);
    $stmt->execute();
    $choices = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $choices;
}


function sumInputScore()
{
    $scores = $_REQUEST['answers'];
    $result = 0;
    foreach ($scores as $score) {
        $result += $score;
    }
    return $result;
}


function getMaxChoice($db, $question_id)
{
    $stmt = $db->prepare("SELECT MAX(score) FROM choices WHERE question_id=:question_id");
    $stmt->bindValue(':question_id', $question_id);
    $stmt->execute();
    $max = $stmt->fetch(PDO::FETCH_ASSOC);
    return $max['MAX(score)'];
}

function getMaxScores($db)
{
    $ids = $_REQUEST['ids'];
    $result = 0;
    foreach ($ids as $id) {
        $result += getMaxChoice($db, $id);
    }
    return $result;
}

function getPercentage($db)
{
    return round(sumInputScore() / getMaxScores($db) * 100);
}

// Token
function createToken()
{
    if (!isset($_SESSION['token'])) {
        $_SESSION['token'] = bin2hex(random_bytes(32));
    }
}

function validate()
{
    if (empty($_SESSION['token']) || $_SESSION['token'] !== filter_input(INPUT_POST, 'token')) {
        exit('Invalid post request');
    }
}


function is_nullorempty($obj)
{
    if ($obj === 0 || $obj === "0") {
        return false;
    }

    return empty($obj);
}
