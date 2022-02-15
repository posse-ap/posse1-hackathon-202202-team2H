{
    const twitterOpen = document.getElementById('twitterOpen');
    const lineOpen = document.getElementById('lineOpen');
    const facebookOpen = document.getElementById('facebookOpen');

    const mask = document.getElementById('mask');
    const close = document.getElementById( 'close');

    const twitterModal = document.getElementById('twitterModal');
    const lineModal = document.getElementById('lineModal');
    const facebookModal = document.getElementById('facebookModal');

    // console.log(open);
    
    twitterOpen.addEventListener('click', () => {
        twitterModal.classList.remove('hidden');
        mask.classList.remove('hidden');
    });
    
    lineOpen.addEventListener('click', () => {
        lineModal.classList.remove('hidden');
        mask.classList.remove('hidden');
    });
    
    facebookOpen.addEventListener('click', () => {
        facebookModal.classList.remove('hidden');
        mask.classList.remove('hidden');
    });

    mask.addEventListener('click',()=>{
        twitterModal.classList.add('hidden');
        facebookModal.classList.add('hidden');
        lineModal.classList.add('hidden');
        mask.classList.add('hidden');
    })
}