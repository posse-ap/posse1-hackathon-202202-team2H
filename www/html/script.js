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


const scrollers = document.querySelectorAll('.question');
// ふわっとフェードイン
document.addEventListener('scroll', () => {
    for (var i = 0; i < scrollers.length; i++) {
        const elementDistance = scrollers[i].getBoundingClientRect().top + scrollers[i].clientHeight * .6;
        const qutestionTitle = scrollers[i].querySelector('.question_stmt');
        const questionChoices = scrollers[i].querySelector('ul');

        if (i === 1) {
            console.log(elementDistance);
        }
        if (window.innerHeight > elementDistance) {
            qutestionTitle.classList.add('show');
            questionChoices.classList.add('show');
            // scrollers[i].classList.add('show');
        }

    }
});
