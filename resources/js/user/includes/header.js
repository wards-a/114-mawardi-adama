// Hamburger Menu - Mobile
const hamburgerBtn = document.getElementById('hamburger');
const mobileMenu = document.getElementById('mobile-menu');
const hamburgerIcon = document.getElementById('hamburger-icon');
const closeIcon = document.getElementById('close-icon');

hamburgerBtn.addEventListener('click', () => {
    hamburgerIcon.classList.toggle('hidden');
    closeIcon.classList.toggle('hidden');

    mobileMenu.classList.toggle('hidden');
});

// Navbar - Desktop
$(window).scroll(() => {
    const navbar = $('.navbar');
    if ($(window).scrollTop() > 10) {
        navbar.addClass('shrink');
    } else {
        navbar.removeClass('shrink');
    }
});