$(function () {

    setTimeout(function () {

        modal.classList.remove('my_hidden');
        mask.classList.remove('my_hidden');

    }, 5000);



});


mask.addEventListener('click', () => {
    modal.classList.add('my_hidden');
    mask.classList.add('my_hidden');
});





// posse紹介が下からスクロール
$(window).on('load scroll', function () {

    var box = $('.fadeIn');
    var animated = 'animated';

    box.each(function () {

        var boxOffset = $(this).offset().top;
        var scrollPos = $(window).scrollTop();
        var wh = $(window).height();

        if (scrollPos > boxOffset - wh + 10) {
            $(this).addClass(animated);
        }
    });

});
