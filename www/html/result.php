<?php
session_start();
include dirname(__FILE__) . '/header.php';
?>

<div class="result_container">
    <!-- modal  -->
    <div class="my_mask my_hidden" id="mask"></div>
    <section class="my_modal my_hidden" id="modal">
        <h1>シェアして人脈を広げませんか</h1>
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
        </div>
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
                <p><?= $_SESSION['result'] ?>%だったあなたは非常に意識が低いです。そんなあなたには、私たちの愛読している本を紹介します。</p>
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
                click here!
            </a>
        </div>

        <!-- <button>
                <div class="link_button">
                    <img class="logo-pic" src="img/posseLogo.png" alt="posseロゴ">
                    <p>プログラミング学習コミュニティ</p>
                </div> -->
        <!-- <i class="bi bi-arrow-right-circle"></i> -->
        <!-- <img class="official-pic" src="img/posselink.jpg" alt="posse画像"> -->
        <!-- </button> -->


    </section>
    <!-- end of official -->

</div>
<script src="./scriptresult.js"></script>
<!-- end of result_container -->

<!-- footer -->
<footer class="footer">
    <div class="footer_line"></div>
    <!-- モーダル出現のためにダミーテキスト作成 -->
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio ut architecto obcaecati quod accusantium, voluptates aperiam praesentium. Atque dolore ipsa deserunt sequi, suscipit praesentium minus esse similique veniam facilis mollitia delectus numquam inventore quisquam ad corporis? Amet commodi deleniti quis ex laboriosam ullam debitis harum ad iusto quasi! A eum eaque molestiae aliquid? Adipisci culpa iure nulla debitis optio, atque fuga magnam perferendis. Aperiam esse necessitatibus suscipit totam deleniti alias ipsam, repellat, facilis, quam nulla at sequi eligendi. Delectus nihil facere, soluta dignissimos aspernatur quas eos aperiam quis laudantium provident, aliquam, repellat consequatur sint vitae hic. Ab temporibus exercitationem ad inventore fuga id, dolores voluptates ullam eos unde dicta mollitia non neque alias quia vero repellat consequuntur obcaecati minima sed fugit nostrum quo, similique earum. Eos obcaecati et ad perspiciatis eaque! Laborum adipisci nisi qui, quod repellendus aut non magni voluptas. Est voluptatibus illum cumque, culpa omnis voluptas ullam corporis ea nobis cupiditate, dolorem in quis quisquam nemo! Similique unde corrupti dignissimos. Obcaecati magnam beatae minima voluptas quae velit cumque fuga qui nemo molestias, odio error assumenda accusantium laudantium earum voluptatem molestiae debitis odit dolorum perspiciatis delectus laborum? Neque doloribus quasi mollitia omnis aut praesentium eligendi dicta non libero! Repellendus omnis beatae facere doloremque, voluptatibus rerum ex ad praesentium! Aspernatur officia soluta, consequuntur at hic ratione dolor cupiditate aut, error est provident, quisquam placeat similique cumque aperiam fugiat ullam. Recusandae facilis nobis sit quo ullam beatae id, obcaecati possimus? Dignissimos molestiae porro consequatur ea accusamus cumque praesentium deserunt repudiandae facere reiciendis consectetur possimus, voluptatum in placeat saepe sed quam. Eos excepturi laborum saepe culpa consequuntur voluptate, maxime error explicabo repellendus quos et, tenetur sed nostrum itaque! Beatae, odit itaque. Eaque vitae perspiciatis deserunt odio minus quidem atque quam ab iure accusantium expedita quae, repellendus, suscipit sit! Quod sunt aperiam omnis voluptates odit reprehenderit amet tempore voluptatum ducimus esse iste minima dignissimos dolorem nihil praesentium, facilis, officia tenetur maxime quidem doloribus iusto ullam debitis alias. Quis labore optio vitae earum. Et voluptates molestias sunt pariatur, eos vel quibusdam nesciunt in laboriosam, doloremque tenetur. Consectetur placeat voluptate nesciunt neque mollitia dolorem voluptatem voluptates, unde quia esse ex, culpa reprehenderit quisquam velit, maiores repudiandae libero molestias impedit distinctio! Quasi similique voluptatibus pariatur quod blanditiis ipsum ratione dolorem expedita. Vel rem doloribus pariatur numquam iure deserunt eaque soluta fuga ea omnis, tempore ex. Animi quidem vero tempora? Neque, nulla quod! Adipisci ducimus minus quisquam modi. Accusamus exercitationem alias repellat reprehenderit qui sit quisquam. Quas consectetur pariatur ducimus nostrum temporibus sunt architecto asperiores a quibusdam quidem, eaque natus, repudiandae ab explicabo non ullam reprehenderit in officiis. Quidem eaque vel quas, magni necessitatibus pariatur esse, ullam aliquid ea soluta veniam ipsa dolores ad velit itaque sequi modi quasi! Ea est laborum dolore pariatur vitae. Inventore sint expedita sed sunt, nostrum sapiente, laboriosam rem pariatur quos voluptates repudiandae maiores dignissimos ad vero recusandae. Minus molestiae dolore ex cumque, repellendus, veniam consectetur aliquid architecto saepe quibusdam aspernatur quis consequatur. Facere veniam vel quo esse illo vitae iure pariatur minima delectus dolore saepe, omnis id maxime voluptatum harum officia ipsum in quas! Blanditiis numquam facere dicta iure sed perspiciatis molestias eius. Molestiae obcaecati quam est repellendus corrupti neque reiciendis repudiandae similique libero ex iste, sequi, tenetur repellat commodi reprehenderit aperiam eveniet eum eius natus? Maxime ducimus facere illum eligendi nesciunt autem, non eveniet nemo. Veniam recusandae reprehenderit, quasi reiciendis soluta corrupti culpa facilis praesentium. Ducimus recusandae esse soluta impedit, sequi incidunt blanditiis explicabo mollitia iusto molestiae voluptatem alias modi placeat saepe eaque nemo perspiciatis fuga, delectus atque quos veniam numquam nulla repellat. Aperiam numquam cumque deleniti eius omnis dolores ratione, quas suscipit deserunt reiciendis nam quisquam autem, quibusdam facilis maxime iusto quasi pariatur quia. Sed accusantium cumque inventore voluptates dignissimos sunt nisi porro delectus pariatur dolorum ipsum cupiditate explicabo beatae incidunt similique, nihil iste possimus sapiente asperiores odit cum repudiandae iure alias consectetur? Tempora ab ipsum et a velit voluptas sapiente ipsa blanditiis magnam? Vitae nulla voluptate quisquam tempore rem alias temporibus! Ut laudantium corrupti ipsam debitis quas totam? Delectus quidem culpa itaque nam quasi, doloremque esse quas error dignissimos vero dolore saepe laborum, at deleniti odio. Ullam porro, perspiciatis quis hic molestiae necessitatibus voluptates quae eaque minus doloremque optio, et vero culpa accusamus architecto fuga dicta omnis assumenda inventore voluptate ratione magnam aspernatur! Optio odit amet itaque! Minus facilis sapiente labore mollitia perferendis enim nam, excepturi adipisci expedita, quia ipsam pariatur. Eveniet quas obcaecati molestiae at suscipit nam laborum corrupti laboriosam, exercitationem maiores voluptatum, labore amet corporis et, eos dicta excepturi velit? Sit suscipit labore at quas iste voluptatem asperiores illo, nobis beatae earum cumque quidem blanditiis dolorum atque similique. Temporibus molestiae cum eius maxime nostrum eos vero, voluptate possimus quibusdam sequi repellat dolores in iste perferendis vitae vel laudantium facilis magni! Dolorem aperiam molestias quos, ex, suscipit incidunt illum voluptate vitae natus vel eum praesentium minima id culpa non? Accusantium libero atque, soluta, excepturi laboriosam repudiandae id dolore, perferendis tenetur cum vero numquam voluptatibus molestias esse in magnam reprehenderit aperiam adipisci facilis? Labore eaque expedita eos reprehenderit repudiandae, ducimus aut, nisi fugit magnam ea aspernatur! Sequi, hic excepturi? Dolores veritatis est exercitationem? Nobis veritatis nesciunt ipsam dolorum officiis sed eveniet nihil reprehenderit dolor ad itaque, adipisci blanditiis ullam accusantium quos. Quod illo quam doloribus eveniet aut tenetur reiciendis nihil est, obcaecati neque adipisci, nisi eos nam, optio sapiente autem fuga dolorem nostrum. At soluta eligendi debitis laboriosam, temporibus, deleniti nihil sapiente similique atque repudiandae ea eveniet! Labore odit soluta aut facilis quasi tempore, unde, dolore ex iste saepe vel cumque voluptatibus! Repudiandae tenetur ea fugiat, eaque vitae magnam animi. Praesentium voluptatibus expedita doloremque maxime magnam deserunt nostrum nihil vero autem sapiente, reiciendis quasi atque quibusdam molestias sed blanditiis velit eos sint veniam necessitatibus! Officiis numquam, quaerat quasi eos ex quae natus modi repellat veniam qui totam perferendis nulla nisi asperiores repudiandae aspernatur velit necessitatibus nobis porro pariatur. Ea aut veniam tenetur voluptatum. Quos facere hic rem, nam dolores cumque voluptates quas dolorum nemo odit saepe ut ratione quisquam perferendis officia iusto debitis vel, officiis repellat repudiandae, qui aspernatur corrupti? Fugit ut rerum similique fuga incidunt odit sit quia eius numquam commodi cupiditate molestias odio esse dolorem ex amet molestiae natus, facilis hic accusantium aut. Sapiente quibusdam accusamus, molestiae provident laudantium odio maiores commodi voluptates. Quos quae nulla qui deserunt nostrum itaque officia. Atque maxime tempora id nobis consectetur quos placeat animi dicta ut a. Maiores vero quisquam provident rem labore earum excepturi, id eius quaerat commodi voluptatum suscipit modi unde nobis odit optio quae. Consequuntur odio facere laborum praesentium quaerat molestiae veritatis deleniti nam reiciendis, voluptate nihil dolorum! Autem ipsa minus numquam eligendi consectetur error repudiandae quos quibusdam excepturi in asperiores, tenetur recusandae consequatur pariatur dignissimos rerum dicta praesentium provident ullam doloribus, voluptas nisi. Possimus hic repudiandae quibusdam vero voluptates deleniti rem pariatur distinctio, quos et tenetur ullam id debitis molestias nulla nam ut, ex dignissimos, nemo aspernatur autem accusamus numquam tempora laudantium! Ipsa fugiat nobis est quas laborum laudantium quia maxime repudiandae a nihil obcaecati sit consectetur amet libero esse eius quasi ab suscipit ad sequi, culpa, error dolorem iure aut. Similique quis harum, minima, omnis numquam laborum non, autem cumque id laudantium veniam distinctio ab aliquid alias quas consectetur quam recusandae sunt odit officiis molestias maiores corrupti eligendi. Quas, sequi doloremque! Aperiam illo ullam eveniet, doloremque aspernatur quas voluptas eos veritatis nulla culpa quae facilis nostrum incidunt temporibus ipsam velit inventore accusantium optio delectus! Fugit laboriosam maiores mollitia earum fuga ratione officia illo ex quia culpa quos reiciendis neque libero, non dolore nesciunt quas sunt ea beatae expedita debitis tempora tenetur similique. Odit facere eum illum itaque officia quas tempora autem asperiores, quis inventore cupiditate non totam, animi perferendis tempore recusandae enim facilis delectus! Architecto, voluptatibus similique omnis doloribus quam debitis ea quae mollitia ipsa non. Saepe ex cum nisi quisquam obcaecati officia voluptatem! Eaque error et magni nemo perspiciatis beatae voluptas eos consectetur aspernatur atque qui pariatur eveniet nobis sequi quo saepe impedit, quaerat aliquid reiciendis eligendi placeat quidem. Nihil, maiores. Velit, incidunt voluptate saepe explicabo inventore accusamus in consequuntur sapiente quidem sequi. Accusantium officia iste molestiae perspiciatis repellendus aspernatur dolores ipsa quia deserunt asperiores consequatur vitae, quae magni? Blanditiis, alias. Quidem laudantium repudiandae at, molestias beatae est a alias consequuntur incidunt vero assumenda fuga totam ab enim ratione atque nemo officiis architecto tenetur accusantium et reiciendis officia repellat quasi? Velit ipsa consectetur nihil exercitationem accusamus unde hic minima asperiores dolorum doloremque, quod nisi placeat quam recusandae alias. Obcaecati debitis, a similique inventore iusto quasi sint asperiores, consectetur laboriosam dolor ex architecto. Tempora placeat facilis quas aliquam beatae temporibus corrupti, hic eos consequatur vel ad deleniti sint. Reprehenderit aliquid nostrum asperiores magnam repellendus unde corporis praesentium accusamus autem velit dicta, sapiente quos id tempora iusto omnis impedit consequuntur! Facilis excepturi recusandae rerum laudantium qui veritatis esse error temporibus quia adipisci itaque quos velit vel consectetur voluptatibus quae, sint nobis numquam necessitatibus maxime minima in quidem optio quaerat. Nostrum beatae porro debitis quia? Eligendi similique architecto, deleniti perferendis sequi magni maiores reiciendis nam non asperiores voluptatem nulla eum quidem expedita aliquid totam dolore enim necessitatibus id vero ad, veritatis amet! Maxime assumenda, iure, cumque, odio repellat dignissimos ut commodi eaque voluptates cupiditate ab. Voluptates, deserunt adipisci? Error illo ut sint cumque in iusto odio non assumenda libero voluptatem? Repellat mollitia ex cupiditate quis debitis magni numquam magnam odio dolore consectetur dolores aperiam iusto illum eligendi accusamus adipisci fugiat tenetur, asperiores incidunt explicabo sit dignissimos modi voluptatem? Totam quae nesciunt corporis cumque vitae nihil qui earum perferendis accusamus rem. Debitis sapiente aspernatur nesciunt corporis impedit sequi tempora nihil eum similique obcaecati, ut hic deleniti! Et qui ullam harum, accusamus ipsa veritatis minima exercitationem eius at, repellendus hic quisquam fugit minus. Illum consequatur quae quidem, explicabo sit nulla quas, rem a et quisquam, unde pariatur quasi iusto itaque. Velit fugit earum vitae ipsam minus distinctio ipsum numquam optio eaque aspernatur fugiat adipisci quibusdam quidem, ducimus provident quae non nemo iste illum cupiditate at illo doloribus reprehenderit! Odit obcaecati distinctio corporis sit dolore sequi placeat vero veniam atque labore. Fuga, atque. Fuga vel perferendis doloremque non est possimus suscipit, hic, maiores sunt quas rerum provident nobis aliquam quos sit? Atque mollitia minus maiores velit tenetur sint deserunt alias numquam? Nam, iusto. Possimus ducimus nam nisi, sapiente corporis modi! Similique eius possimus obcaecati esse nostrum architecto minima quisquam, beatae pariatur facere fuga, numquam in impedit aut veniam. Quis itaque beatae ullam. Eius inventore suscipit eligendi aliquam veritatis voluptatem voluptas distinctio. Explicabo ea perferendis qui quo porro laborum distinctio nobis quia officiis nostrum dolores dolorem atque hic, incidunt non. Quia reprehenderit voluptate autem numquam molestias est pariatur, nesciunt possimus sint mollitia dolorem dolore porro sed a corporis eaque vel assumenda aliquam quo unde voluptatem ut exercitationem obcaecati officiis. Quos itaque eveniet autem, delectus placeat velit quasi consectetur tempora, nam, consequuntur exercitationem? Rerum corrupti facere deleniti eos odio quis nemo esse dolores. Sapiente magni delectus consequatur amet voluptatem. Harum beatae, repudiandae quis corrupti architecto cumque tempora. Tempore quis laborum ducimus deserunt harum perferendis explicabo, consequuntur cum vero. Quos atque, numquam voluptatibus vitae illo qui doloribus unde blanditiis consectetur ipsa adipisci minima accusantium rem natus mollitia, sit quisquam tenetur voluptates ea quasi nobis possimus eligendi. Nobis nesciunt quas esse expedita debitis natus fugiat, unde aperiam ut, dignissimos officia alias dicta consequuntur tempora laborum adipisci veniam ea odio vero similique vitae. Id, voluptas ratione aspernatur fugit nihil, ex, rem maiores ipsam modi hic reiciendis repellat laboriosam minima distinctio. Minus accusantium autem explicabo laudantium nisi qui in nemo aut at, iure dicta ab blanditiis. Quasi maxime accusantium quisquam quo nulla eveniet, dicta adipisci laborum, obcaecati non deserunt! Doloremque quaerat tempore distinctio quasi beatae odit alias ipsa nesciunt, facilis consectetur vero quod repudiandae asperiores ad odio ab eligendi corporis unde impedit iusto! Reiciendis qui exercitationem dolore porro deserunt non doloribus quod nisi nulla, vel suscipit iste neque eius veniam? Veniam delectus modi, itaque architecto necessitatibus libero quod commodi? Ipsa rerum earum temporibus cupiditate magnam numquam.
    (c)新人ハッカソン選抜
</footer>
<!-- end of footer -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/protonet-jquery.inview/1.1.2/jquery.inview.min.js"></script>
<script src="./js/jquery.counterup.min.js"></script>
<script src="./scriptresult.js"></script>

</body>

</html>
