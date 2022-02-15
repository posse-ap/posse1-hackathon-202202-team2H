var mask = document.getElementById('mask');
var modal = document.getElementById('modal');

window.addEventListener('load', () => {
    window.addEventListener('scroll', () => {
        // 1000~1100のスクロール量の時モーダル出る
        // 数値は適当
        // 割とゆっくりスクロールしないとでない
        // 逆にゆっくり過ぎてもめっちゃ出る
        if( 1000 < window.scrollY && 1100 > window.scrollY) {

            modal.classList.remove('my_hidden');
            mask.classList.remove('my_hidden');
        }
    });
});

mask.addEventListener('click',()=>{
    modal.classList.add('my_hidden');
    mask.classList.add('my_hidden');
});


$('#result').on('inview', function (event, isInView) {
    if (isInView) {
        $('#result .count_up').each(() => {
            $(this).prop('Counter', 0).animate(
                {
                    Counter: $(this).text()
                },
                {
                    // スピードやアニメーションの設定
                    duration: 2000,//数字が大きいほど変化のスピードが遅くなる。2000=2秒
                    easing: 'swing',//動きの種類。他にもlinearなど設定可能
                    step: function (now) {
                        $(this).text(Math.ceil(now));
                    }
                })
        });
    }
});


// posse紹介が下からスクロール
$(window).on('load scroll', function (){

    var box = $('.fadeIn');
    var animated = 'animated';
    
    box.each(function(){
    
      var boxOffset = $(this).offset().top;
      var scrollPos = $(window).scrollTop();
      var wh = $(window).height();
  
      if(scrollPos > boxOffset - wh + 10 ){
        $(this).addClass(animated);
      }
    });
  
  });