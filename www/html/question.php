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
    if ($score >= 0 && $score < 20) {
        return $score . '%だったあなたは非常に意識が低いです。今すぐに意識の高い人たちがいる集団に属すべきです。そこでおすすめなのが、posseという自称意識の高い団体です。あなたも一か月で意識高い大学生の中周りです。';
    } else if ($score >= 20 && $score < 40) {
        return $score . '%だったあなたは意識が低いです。もっと向上心を持ちましょう。まずは自己投資から始めたらどうでしょうか。あなた自身への出費は、キャリアアップのための必要不可欠な経費です。
        しかし、20%のあなたはきっと挫折するでしょう。そこで仲間と高め会える団体に属しましょう。';
    } else if ($score >= 40 && $score < 60) {
        return $score . '%だったあなたは、中途半端でどっちつかずな一番おもしろくないタイプです。家には読みもしない本がたくさん積んであり、おしゃカフェでパソコンを広げて勉強している自分が大好きなのでしょう。心の底で他者を求めており、意識が高くなるような団体に所属するべきでしょう。';
    } else if ($score >= 60 && $score < 80) {
        return $score . '%だったあなたは、意識が高いです。カタカナ言葉をよく使っていますよね？使いたい気持ちはよくわかります。そんなあなたに、おすすめの本をご紹介します。
        https://www.amazon.co.jp/それっ-日本語で言えばいいのに-カタカナ語研究会議/dp/4798045853';
    } else if ($score >= 80 && $score < 100) {
        return $score . '%だったあなたは、意識がそうとう高めです。カタカナ言葉をよく使っていますよね？使いたい気持ちはよくわかります。我々も通った道です。100%に振り切れなかったあなたは、エセ意識高いだけな人間なのでしょう。本物の意識高い人間になるために、自称意識高い人間を観察するといいでしょう。';
    } else if ($score == 100) {
        return $score . '%だったあなたは、意識が非常に高いです。少し、痛いです。まるで私たちのようです。そんなあなたは、私たちの所属するposseにぜひ入るべきです。あなたに似たような友達が大勢まっているはずです。今すぐ、公式ページに飛んでみてください。';
    } else {
        return;
    }
}
