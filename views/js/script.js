

var buttonMenu = document.getElementById('header-menu-toggler');
var mobileMenu = document.getElementById('mobile-menu-wrapper');
var mobileMenuCloseButton = document.getElementById('mobile-menu__close-button');
var body = document.getElementById('id-body');

console.log("Script tarts");

if (buttonMenu !== null) {
    buttonMenu.addEventListener('click', function (evt) {
        evt.preventDefault();
        showMobileMenu();
    });
}

if (mobileMenuCloseButton !== null) {
    mobileMenuCloseButton.addEventListener('click', function (evt) {
        evt.preventDefault();
        hideMobileMenu();

    });
}


// Toggle mobile menu
function showMobileMenu() {
    // mobileMenu.classList.toggle("show");
    mobileMenu.style.display = "block";
    body.style.overflow = "hidden";
}

// hide mobile menu
function hideMobileMenu() {
    // mobileMenu.classList.remove("show");
    mobileMenu.style.display = "none";
    body.style.overflow = "auto";
}