<?php
session_start();
include dirname(__FILE__) . '/header.php';
?>

<div class="result_container">
    <!-- modal  -->
    <div class="my_mask my_hidden"  id="mask"></div>
    <section class="my_modal my_hidden" id="modal">
        <p>モーダルですモーダルですモーダルですモーダルですモーダルですモーダルですモーダルですモーダルですモーダルですモーダルですモーダルですモーダルですモーダルですモーダルですモーダルですモーダルですモーダルですモーダルですモーダルですモーダルですモーダルですモーダルですモーダルですモーダルですモーダルですモーダルですモーダルですモーダルですモーダルですモーダルですモーダルですモーダルです</p>
    </section>
    <!-- end of modal  -->

    <!-- result_stmt -->
 <div class="results">
    <section class="result_stmt result_section">
        <div class="result_stmt_box">
        <p>あなたの意識高い度は</p>
        </div>
        <!-- <div class="result_stmt_box"> -->
        <p class="persent"><section><?= $_SESSION['result'] ?></section><p>%</p></p>
        <!-- </div> -->
    </section>
    <!-- end of result_stmt -->

    <!-- result_desc -->
    <section class="result_desc result_section">
        <p><?= $_SESSION['result'] ?>%だったあなたは非常に意識が低いです。そんなあなたには、私たちの愛読している本を紹介します。</p>
    </section>
 </div>
    <!-- end of result_desc -->

    <!-- share_buttons -->
    <div class="share_buttons result_section">
        <div class="twitter">
            <a href="http://twitter.com/share?url=https://deep-blog.jp/engineer/share-button-url-list/&text=<?= $_SESSION['nickname'] ?>さんの意識高い度:<?= $_SESSION['result'] ?>&related=@posse_program"
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
        <p class="invitation">プログラミング学習コミュニティPOSSEでは一緒にプログラミングをする仲間を募集しています。</p>
        <p>プログラミング×人格の両輪を掲げるPOSSEで一緒に大学生活を謳歌しませんか？</p>
    </section>
    <!-- end of posse_desc -->

    <!-- official -->
    <section class="official result_section">
        <a href="https://posse-ap.com/">
            <button>
                <div class="link_button">
                    <img class="logo-pic" src="img/posseLogo.png" alt="posseロゴ">
                    <p>プログラミング学習コミュニティ</p>
                </div>
                <!-- <i class="bi bi-arrow-right-circle"></i> -->
                <!-- <img class="official-pic" src="img/posselink.jpg" alt="posse画像"> -->
            </button>
        </a>
    </section>
    <!-- end of official -->

</div>
 <!-- end of result_container -->
<?php include dirname(__FILE__) . '/footer.php' ?>
