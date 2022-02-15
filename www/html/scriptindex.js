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