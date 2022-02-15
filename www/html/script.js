const scrollers = document.querySelectorAll('.question');

document.addEventListener('scroll', () => {
    for (var i = 0; i < scrollers.length; i++) {
        const elementDistance = scrollers[i].getBoundingClientRect().top;
        console.log(elementDistance);
    }
});
