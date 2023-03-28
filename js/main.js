var backToTop = document.querySelector('.back-to-top');

window.addEventListener('scroll', function () {
    if (window.pageYOffset > 200) {
        backToTop.classList.add('show-back-to-top');
    } else {
        backToTop.classList.remove('show-back-to-top');
    }
});

backToTop.addEventListener('click', function (e) {
    e.preventDefault();
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});