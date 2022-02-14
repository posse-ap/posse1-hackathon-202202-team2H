<!-- headerの読み込み -->
<?php
require_once dirname(__FILE__) . '/dbconnect.php';
require_once dirname(__FILE__) . '/question.php';
include dirname(__FILE__) . '/header.php';

$questions = getAllQuestions($db);
?>

<main>
question: <?= getQuestion($db, 1) ?><br>
choices: <?php var_dump(getChoices($db, 1)) ?>

<?php foreach($questions as $question): ?>
    
<?php endforeach; ?>

</main>

<!-- footerの読み込み -->
<?php include dirname(__FILE__) . '/footer.php' ?>
