<?php

function getAllQuestions($db)
{
    $stmt = $db->query("SELECT questions.id as id, questions.title as title, categories.title as category FROM questions INNER JOIN categories ON questions.category_id=categories.category_id");
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


function getDetailMessage($score) {
    if ($score >= 0 && $score <= 20) {
        return $score . '%だったあなたは非常に意識が低いです。そんなあなたには、私たちの愛読している本を紹介します。
        https://www.amazon.co.jp/7つの習慣-本/s?k=7つの習慣&rh=n%3A465392';
    } else if ($score > 20 && $score <= 40) {
        return $score . '%だったあなたは意識が低いです。もっと向上心を持ちましょう。まずは自己投資から始めたらどうでしょうか。あなた自身への出費は、キャリアアップのための必要不可欠な経費です。';
    } else if ($score > 40 && $score <= 60) {
        return $score . '%だったあなたの意識はまあまあでしょう。よく平凡と言われませんか？振り返ったら何もなかった、と言う経験はありませんか？できれば「この時は素晴らしかったor大変だった」という大きな出来事がいくつかある人生を送ってみたいものですね。';
    } else if ($score > 60 && $score <= 80) {
        return $score . '%だったあなたは、意識が高いです。カタカナ言葉をよく使っていますよね？使いたい気持ちはよくわかります。そんなあなたに、おすすめの本をご紹介します。
        https://www.amazon.co.jp/それっ-日本語で言えばいいのに-カタカナ語研究会議/dp/4798045853';
    } else if ($score > 80 && $score <= 100) {
        return $score . 'だったあなたは、意識が非常に高いです。少し、痛いです。まるで私たちのようです。そんなあなたに、おすすめの本をご紹介します。
        https://www.amazon.co.jp/「意識高い系」という病-～ソーシャル時代にはびこるバカヤロー～-ベスト新書-常見陽平-ebook/dp/B00HFQT00S';
    } else {
        return;
    }
}
