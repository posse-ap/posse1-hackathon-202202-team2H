<?php
session_start();
include dirname(__FILE__) . '/header.php';
?>

<div class="result_container">

    <!-- result_stmt -->
 <div class="d-flex">
    <section class="p-2 result_stmt result_section">
        <p>あなたは意識高い度</p>
        <p class="persent"><?= $_SESSION['result'] ?>%です!</p>
    </section>
    <!-- end of result_stmt -->

    <!-- result_desc -->
    <section class="result_desc result_section">
        <p><?= $_SESSION['result'] ?>%だったあなたは～といっても過言ではないです。いや、過言だろ。</p>
    </section>
 </div>
    <!-- end of result_desc -->

    <!-- share_buttons -->
    <div class="share_buttons result_section">
        <div class="twitter">
            <a href="http://twitter.com/share?url=https://deep-blog.jp/engineer/share-button-url-list/&text=大学生 意識高い度:<?= $_SESSION['result'] ?>&related=@posse_program"
                target="_blank" data-text="バズブログです！よろしく" data-show-count="false">
                <img src="img/twitter.jpg" alt="ツイッターのロゴ">
            </a>
        </div>
        <div class="other_buttons">
            <div class="line">
                <a href="http://line.me/R/msg/text/?意識高い度診断: <?= $_SESSION['result'] ?>%https://deep-blog.jp/engineer/share-button-url-list/"
                    target="_blank">
                    <img src="img/line.jpg" alt="ラインのロゴ">
                </a>
            </div>
            <div class="facebook">
                <a href="https://www.facebook.com/share.php?u=https://deep-blog.jp/engineer/share-button-url-list/"
                    target="_blank">
                    <img src="img/facebook.jpg" alt="facebookのロゴ">
                </a>
            </div>
        </div>
    </div>
    <!-- end of share_buttons -->

    <!-- case_desc -->
    <section class="case_desc result_section">
        <p>○○問正解だったあなたはなんとかなタイプです。○○しましょう。</p>
    </section>
    <!-- end of case_desc -->

    <!-- posse_desc  -->
    <section class="posse_desc result_section">
        <p>プログラミング学習コミュニティPOSSEでは”プログラミング×人格”のもと、プログラミング面と人格面の成長を目指しています。あなたも私たちと一緒にPOSSEで成長しませんか？</p>
    </section>
    <!-- end of posse_desc -->

    <!-- official -->
    <section class="official result_section">
        <a href="https://posse-ap.com/">
            <button>
                <div>
                    <img class="logo-pic" src="img/posseLogo.png" alt="posseロゴ">
                    <p>プログラミング学習コミュニティ</p>
                </div>
                <i class="bi bi-arrow-right-circle"></i>
                <img class="official-pic" src="img/posselink.jpg" alt="posse画像">
            </button>
        </a>
    </section>
    <!-- end of official -->

</div>
 <!-- end of result_container -->
<?php include dirname(__FILE__) . '/footer.php' ?>
