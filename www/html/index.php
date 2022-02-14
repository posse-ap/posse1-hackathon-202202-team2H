<!-- headerの読み込み -->
<?php
require_once dirname(__FILE__) . '/dbconnect.php';
require_once dirname(__FILE__) . '/question.php';
include dirname(__FILE__) . '/header.php';
?>

<main>
question: <?= getQuestion($db, 1) ?><br>
choices: <?php var_dump(getChoices($db, 1)) ?>
</main>

<!-- footerの読み込み -->
<?php include dirname(__FILE__) . '/footer.php' ?>
