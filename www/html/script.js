window.addEventListener('load', () => {

    window.addEventListener('scroll', () => {
        // 1000~1100のスクロール量の時モーダル出る
        // 数値は適当
        // 割とゆっくりスクロールしないとでない
        // 逆にゆっくり過ぎてもめっちゃ出る
        if( 1000 < window.scrollY && 1100 > window.scrollY) {	
            
            const mask = document.getElementById('mask');
            const modal = document.getElementById('modal');
            modal.classList.remove('my_hidden');
            mask.classList.remove('my_hidden');
        }
    });
});

mask.addEventListener('click',()=>{
    modal.classList.add('my_hidden');
    mask.classList.add('my_hidden');
})

const scrollers = document.querySelectorAll('.question');

document.addEventListener('scroll', () => {
    for (var i = 0; i < scrollers.length; i++) {
        const elementDistance = scrollers[i].getBoundingClientRect().top + scrollers[i].clientHeight * .6;
        const qutestionTitle = scrollers[i].querySelector('.question_stmt');
        const questionChoices = scrollers[i].querySelector('ul');

        if(i === 1) {
            console.log(elementDistance);
        }
        if (window.innerHeight > elementDistance) {
            qutestionTitle.classList.add('show');
            questionChoices.classList.add('show');
            // scrollers[i].classList.add('show');
        }

    }
});