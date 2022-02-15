<?php
session_start();
include dirname(__FILE__) . '/header.php'
?>
<main>
    <h1>あなたの人格度は<span><?= $_SESSION['result'] ?>%です!</span></h1>
</main>

<?php include dirname(__FILE__) . '/footer.php' ?>
