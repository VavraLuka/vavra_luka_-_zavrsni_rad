// Back to top button
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

// View password function
function togglePassword() {
    var passwordField = document.getElementById("passwordUser");
    var passwordRepeatField = document.getElementById("passwordRepeatUser");
    if (passwordField.type === "password") {
        passwordField.type = "text";
        passwordRepeatField.type = "text";
    } else {
        passwordField.type = "password";
        passwordRepeatField.type = "password";
    }
}

// Mobile navigation bar
const toggleLinks = document.querySelectorAll('.toggle-link');
toggleLinks.forEach(link => {
    link.addEventListener('click', function (e) {
        e.preventDefault();
        const targetList = document.getElementById(this.dataset.target);
        const allLists = document.querySelectorAll('.toggle-list');
        allLists.forEach(list => {
            if (list !== targetList) {
                list.classList.remove('active');
            }
        });
        targetList.classList.toggle('active');
    });
});

// Smooth scroll to ID
$(document).ready(function () {
    $("a").on('click', function (event) {
        if (this.hash !== "") {
            event.preventDefault();

            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function () {
                window.location.hash = hash;
            });
        }
    });
});