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
    $ids = $_REQUEST['ids']; // array
    $answers = $_REQUEST['answers']; // array
    $error = [];
    foreach ($ids as $id) {
        if (!isset($answers[$id])) {
            $error['answers'][$id] = 'require';
        }
    }

    if (empty($error)) {
        $_SESSION['result'] = getPercentage($db);
        header('Location: result.php');
    }
}
$questions = getAllQuestions($db);
?>

<!-- top -->
<div class="top_container">
    <div class="first_view">
        <h1>できる大学生ならわかって当然！
            <br>意識高い系診断
        </h1>
    </div>
    <div class="diag_desc section">
        <p>この診断は〇〇のために行います。</p>

    </div>
    <form action="" method="POST">
        <input type="hidden" name="token" value="<?= htmlspecialchars($_SESSION['token'], ENT_QUOTES) ?>">
        <?php foreach ($questions as $question) : ?>
        <div class="question section">
            <input type="hidden" name="ids[]" value="<?= $question['id'] ?>">
            <div class="question_stmt">
                <p><?= $question['title'] ?></p>
            </div>
            <ul>
                <?php $choices = getChoices($db, $question['id']);
                ?>
                <?php foreach ($choices as $choice) : ?>
                    <label for="<?= $question['id'] ?>-<?= $choice['id'] ?>">
                    <li><input type="radio" name="answers[<?= $question['id'] ?>]" value="<?= $choice['score'] ?>" id="<?= $question['id'] ?>-<?= $choice['id'] ?>"><?= $choice['choice_text'] ?></li>
                </label>
                <?php endforeach; ?>

            </ul>
        </div>
        <?php endforeach; ?>



        <!-- <div class="name section">
      <p>ニックネーム</p>
      <input type="text" placeholder="ニックネーム" id = 'name' >
      <i class="fa-solid fa-user"></i>
    </div> -->
        <div class="name section">
            <p>ニックネーム</p>
            <input type="text" placeholder="ニックネーム" id='name'>
            <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
        </div>
        <!-- <div class="submit section">
     <input type="submit" value="診断する" class="btn btn-radius-gradient">
    </div> -->
        <div class="btn-radius-gradient-wrap submit section">
            <!-- <a href="" class="btn btn-radius-gradient">PUSH！</a> -->
            <input type="submit" value="診断する" class="btn btn-radius-gradient">
        </div>
    </form>
</div>
<!-- end of top -->

<!-- footerの読み込み -->
<?php include dirname(__FILE__) . '/footer.php' ?>
