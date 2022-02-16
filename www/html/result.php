<?php
session_start();
require_once dirname(__FILE__) . '/question.php';
include dirname(__FILE__) . '/header.php';
?>

<div class="result_container">
    <!-- modal  -->
    <div class="my_mask my_hidden" id="mask"></div>
    <section class="my_modal my_hidden" id="modal">


    <!-- share_buttons -->
    <div class="share_buttons result_section container">

        <div class="share_sentence">
            <p>シェアして人脈を広げよう。</p>
        </div>
        <a href="http://twitter.com/share?url=https://deep-blog.jp/engineer/share-button-url-list/&text=<?= $_SESSION['nickname'] ?>さんの意識高い度:<?= $_SESSION['result'] ?>&related=@posse_program" target="_blank" data-text="バズブログです！よろしく" data-show-count="false">
            <div class="twitter">
                <img src="img/twitter.jpg" alt="ツイッターのロゴ">
            </div>
        </a>
        <div class="other_buttons">
            <a href="http://line.me/R/msg/text/?意識高い度診断: <?= $_SESSION['result'] ?>%https://deep-blog.jp/engineer/share-button-url-list/" target="_blank">
                <div class="line">
                    <img src="img/line.jpg" alt="ラインのロゴ">
                </div>
            </a>
            <a href="https://www.facebook.com/share.php?u=https://deep-blog.jp/engineer/share-button-url-list/" target="_blank">
                <div class="facebook">
                    <img src="img/facebook.jpg" alt="facebookのロゴ">
                </div>
            </a>
        </div>
        <!-- end of share_buttons -->

        <!-- case_desc -->
        <section class="container case_desc result_section box fadeIn">
            <div class="case_desc_title">
                <p>信頼できる人脈で
                    <br>新たな自分へと...
                </p>
            </div>
            <div class='case_desc_detail'>
                <p>
                    人脈とは、困ったときに助けを求めたり求められたり、利害関係が成り立つ人と人とのつながりのことを指します。
                </p>
                <p>
                    キャリア形成において、人脈は必須と言っても過言ではありません。
                </p>
                <p>
                    信頼関係のある強固な人脈が
                    <br>自分の可能性を引き出すチャンスです。
                    <!-- 一人では得られない情報を得られたり、アドバイスをもらえたり、ビジネスシーンでもプライベートでも、困ったときや助けてほしいときにプラスの要素をもたらしてくれる存在です。 -->
                </p>
            </div>

        </section>
    </div>
    <!-- end of case_desc -->



        <!-- <h1>シェアして人脈を広げませんか</h1>
        <div>
            人脈とは、困ったときに助けを求めたり求められたり、利害関係が成り立つ人と人とのつながりのことを指します。
        </div>
        <div>
            キャリア形成において、人脈は必須と言っても過言ではありません。一人では得られない情報を得られたり、アドバイスをもらえたり、ビジネスシーンでもプライベートでも、困ったときや助けてほしいときにプラスの要素をもたらしてくれる存在です。
        </div>
        <div class="share_buttons result_section">
            <div class="share_sentence">
                <p>シェアして人脈を広げませんか</p>
            </div>
            <a href="http://twitter.com/share?url=https://deep-blog.jp/engineer/share-button-url-list/&text=<?= $_SESSION['nickname'] ?>さんの意識高い度:<?= $_SESSION['result'] ?>&related=@posse_program" target="_blank" data-text="バズブログです！よろしく" data-show-count="false">
                <div class="twitter">
                    <img src="img/twitter.jpg" alt="ツイッターのロゴ">
                </div>
            </a>
            <div class="other_buttons">
                <a href="http://line.me/R/msg/text/?意識高い度診断: <?= $_SESSION['result'] ?>%https://deep-blog.jp/engineer/share-button-url-list/" target="_blank">
                    <div class="line">
                        <img src="img/line.jpg" alt="ラインのロゴ">
                    </div>
                </a>
                <a href="https://www.facebook.com/share.php?u=https://deep-blog.jp/engineer/share-button-url-list/" target="_blank">
                    <div class="facebook">
                        <img src="img/facebook.jpg" alt="facebookのロゴ">
                    </div>
                </a>
            </div>
        </div> -->
    </section>
    <!-- end of modal  -->

    <!-- result_stmt -->
    <div class="container result_section result_title">
        <div class="row result_wrapper">
            <section class="col-md-6 p-2 result_stmt">
                <p>あなたは意識高い度</p>
                <h1 class="persent" id="result"><span class="count_up"><?= $_SESSION['result'] ?></span>%です!</h1>
            </section>
            <!-- end of result_stmt -->

            <!-- result_desc -->
            <section class="col-md-6 result_desc">
                <p><?= getDetailMessage($_SESSION['result']) ?></p>
            </section>
        </div>

    </div>
    <!-- end of result_desc -->

    <!-- share_buttons -->
    <div class="share_buttons result_section container">

        <div class="share_sentence">
            <p>シェアして人脈を広げよう！</p>
        </div>
        <a href="http://twitter.com/share?url=https://deep-blog.jp/engineer/share-button-url-list/&text=<?= $_SESSION['nickname'] ?>さんの意識高い度:<?= $_SESSION['result'] ?>&related=@posse_program" target="_blank" data-text="バズブログです！よろしく" data-show-count="false">
            <div class="twitter">
                <img src="img/twitter.jpg" alt="ツイッターのロゴ">
            </div>
        </a>
        <div class="other_buttons">
            <a href="http://line.me/R/msg/text/?意識高い度診断: <?= $_SESSION['result'] ?>%https://deep-blog.jp/engineer/share-button-url-list/" target="_blank">
                <div class="line">
                    <img src="img/line.jpg" alt="ラインのロゴ">
                </div>
            </a>
            <a href="https://www.facebook.com/share.php?u=https://deep-blog.jp/engineer/share-button-url-list/" target="_blank">
                <div class="facebook">
                    <img src="img/facebook.jpg" alt="facebookのロゴ">
                </div>
            </a>
        </div>
    </div>
    <!-- end of share_buttons -->

    <!-- case_desc -->
    <section class="container case_desc result_section box fadeIn">
        <div class="row">
            <div class="case_desc_title col-md-5">
                <p>信頼できる人脈で
                    <br>新たな自分へと...
                </p>
            </div>
            <div class='case_desc_detail col-md-7'>
                <p>
                    人脈とは、困ったときに助けを求めたり求められたり、利害関係が成り立つ人と人とのつながりのことを指します。
                </p>
                <p>
                    キャリア形成において、人脈は必須と言っても過言ではありません。
                </p>
                <p>
                    信頼関係のある強固な人脈が
                    <br>自分の可能性を引き出すチャンスです！
                    <!-- 一人では得られない情報を得られたり、アドバイスをもらえたり、ビジネスシーンでもプライベートでも、困ったときや助けてほしいときにプラスの要素をもたらしてくれる存在です。 -->
                </p>
            </div>
        </div>


    </section>
    <!-- end of case_desc -->

    <!-- posse_desc  -->
    <section class="posse_desc result_section container result_section_little box fadeIn">
        <div class="invitation">
            <p>プログラミング学習コミュニティPOSSEでは一緒にプログラミングをする仲間を募集しています。</p>
        </div>
        <div class='invitation_detail'>
            <p>実際にプログラミングと人格について学び、
                <br>このような診断サイトも制作できるようになります。
            </p>
            <p>意識高い系ではなく、我々と一緒に本物の意識高い人を目指しませんか？</p>
        </div>


    </section>
    <!-- end of posse_desc -->

    <!-- official -->
    <section class="official">
        <!-- <p>覗いてみる</p> -->
        <div class="posse_btn">
        <a href="https://posse-ap.com/">
            公式ページ
        </a>
        </div>

        <!-- <button>
                <div class="link_button">
                    <img class="logo-pic" src="img/posseLogo.png" alt="posseロゴ">
                    <p>プログラミング学習コミュニティ</p>
                </div>
                <i class="bi bi-arrow-right-circle"></i>
                <img class="official-pic" src="img/posselink.jpg" alt="posse画像">
            </button> -->

    </section>
    <!-- end of official -->

</div>
<script src="./scriptresult.js"></script>
<!-- end of result_container -->

<!-- footer -->
<footer class="footer">
    <div class="footer_line">(c)新人ハッカソン選抜</div>
</footer>
<!-- end of footer -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script>
<script src="./js/jquery.counterup.min.js"></script>
<script src="./scriptresult.js"></script>

</body>

</html>
