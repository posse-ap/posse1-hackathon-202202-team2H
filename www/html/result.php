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

            <div class="share_sentence">
              <p>シェアして人脈を広げよう！</p>
            </div>
       <a href="http://twitter.com/share?url=https://deep-blog.jp/engineer/share-button-url-list/&text=<?= $_SESSION['nickname'] ?>さんの意識高い度:<?= $_SESSION['result'] ?>&related=@posse_program"
            target="_blank" data-text="バズブログです！よろしく" data-show-count="false">
                <div class="twitter">
                    <img src="img/twitter.jpg" alt="ツイッターのロゴ">
                </div>
        </a>
        <div class="other_buttons">
            <a href="http://line.me/R/msg/text/?意識高い度診断: <?= $_SESSION['result'] ?>%https://deep-blog.jp/engineer/share-button-url-list/"
                target="_blank">
                <div class="line">
                    <img src="img/line.jpg" alt="ラインのロゴ">
                </div>
            </a>
            <a href="https://www.facebook.com/share.php?u=https://deep-blog.jp/engineer/share-button-url-list/"
                target="_blank">
                    <div class="facebook">
                        <img src="img/facebook.jpg" alt="facebookのロゴ">
                    </div>
            </a>
        </div>
    </div>
    <!-- end of share_buttons -->

    <!-- case_desc -->
    <section class="case_desc result_section">
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
     <br>自分の可能性を引き出すチャンスです！
      <!-- 一人では得られない情報を得られたり、アドバイスをもらえたり、ビジネスシーンでもプライベートでも、困ったときや助けてほしいときにプラスの要素をもたらしてくれる存在です。 -->
      </p>
     </div>
      

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
