<!-- headerの読み込み -->
<?php
session_start();
require_once dirname(__FILE__) . '/dbconnect.php';
require_once dirname(__FILE__) . '/question.php';
include dirname(__FILE__) . '/header.php';

createToken();

// execute validation
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    validate();
    $_SESSION['result'] = getPercentage($db);
    print($_SESSION['result']);
    header('Location: result.php');
}
$questions = getAllQuestions($db);
?>

<main>
question: <?= getQuestion($db, 1) ?><br>
choices: <?php var_dump(getChoices($db, 1)) ?>

<form action="" method="POST">
    <input type="hidden" name="token" value="<?= htmlspecialchars($_SESSION['token'], ENT_QUOTES) ?>">
<?php foreach($questions as $question): ?>
    <input type="hidden" name="ids[]" value="<?= $question['id'] ?>">
    <h1><?= $question['title'] ?></h1>
    <?php $choices = getChoices($db, $question['id']) ?>
    <?php foreach($choices as $choice): ?>
        <input type="radio" name="answers[<?= $question['id'] ?>]" value="<?= $choice['score'] ?>">
        <p><?= $choice['choice_text'] ?></p>
    <?php endforeach; ?>
<?php endforeach; ?>
<input type="submit" value="submit">
</form>
</main>

<!-- footerの読み込み -->
<?php include dirname(__FILE__) . '/footer.php' ?>
