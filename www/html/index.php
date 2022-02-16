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
    $nickname = $_REQUEST['nickname'];
    $error = [];
    foreach ($ids as $id) {
        if (!isset($answers[$id])) {
            $error['answers'][$id] = 'require';
        }
    }

    if (empty($error)) {
        $_SESSION['result'] = getPercentage($db);
        $_SESSION['nickname'] = $_REQUEST['nickname'];
        header('Location: result.php');
    }
}
$questions = getAllQuestions($db);
?>

<!-- top -->
<div class="top_container">
    <div class="first_view">
        <h1>できる大学生なら分かってて当然！
            <br>意識高い系診断
        </h1>
    </div>
    <div class="diag_desc section container">
        <div class="row">
            <div class='diag_deac_title col-md-6'>
                <p>意識高い系から
                    <br>本物の意識高い人材に
                </p>
            </div>
            <div class='diag_deac_detail col-md-6'>
                <!-- <p>なかなか友達と意見が合わない。
         <br>自宅には読んでいない本が積読されている。</p>
        <p>今とは違うあなたになるために。
         <br>今までとは違う新しいあなたに出会うために。</p>
        <p>この診断であなたの意識の高さを知ろう。</p> -->
                <p>あなたの意識の高さを診断します。</p>
                <!-- <p>現代を生きるあなたの、意識の高さを診断します。
        </p> -->
                <p>意識が高いことは、素晴らしいことです。</p>
                <p> 常に向上や成長を目指し、それに資するさまざまな事柄に深く注意を払っているのでしょう。</p>
                <p>ただ、時として意識高い＝いたいことだと誤解されてしまうことがあります。</p>
                <p>あなたは本物の意識高い人物なのでしょうか？</p>


                </p>
            </div>
        </div>

    </div>
    <form action="" method="POST">
        <?php if(!empty($error['answers'])): ?>
            <p class="container error">*すべての質問に回答してください
            </p>
        <?php endif ?>
        <input type="hidden" name="token" value="<?= htmlspecialchars($_SESSION['token'], ENT_QUOTES) ?>">
        <?php foreach ($questions as $question) : ?>
            <div class="question container">
                <input type="hidden" name="ids[]" value="<?= $question['id'] ?>">
                <div class="row">
                    <div class="question_stmt col-md-6">
                        <p>Q<?= $question['id'] ?>. <?= $question['title'] ?></p>
                    </div>
                    <div class="question_choices col-md-6">
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
                </div>


            </div>
        <?php endforeach; ?>



        <!-- <div class="name section">
      <p>ニックネーム</p>
      <input type="text" placeholder="ニックネーム" id = 'name' >
      <i class="fa-solid fa-user"></i>
    </div> -->
        <div class="name section container">
            <p>ニックネーム（任意）</p>
            <input type="text" placeholder="ニックネーム" id='name' name="nickname">
            <i class="fa fa-user fa-lg fa-fw" aria-hidden="true"></i>
        </div>
        <!-- <div class="submit section">
     <input type="submit" value="診断する" class="btn btn-radius-gradient">
    </div> -->
        <div class="container submit">
            <!-- <a href="" class="btn btn-radius-gradient">PUSH！</a> -->
            <p>お疲れさまでした。診断を開始しましょう。</p>
            <input type="submit" value="診断する" class="diag_btn">

        </div>
    </form>
</div>
<script src="./scriptindex.js"></script>
<!-- end of top -->

<!-- footer -->
<footer class="footer">
    <div class="footer_line"></div>
    (c)新人ハッカソン選抜
</footer>
<!-- end of footer -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script>
<script src="./js/jquery.counterup.min.js"></script>
<script src="./scriptindex.js"></script>
</body>

</html>
