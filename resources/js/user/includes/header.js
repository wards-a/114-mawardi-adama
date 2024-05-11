const hamburgerBtn = document.getElementById('hamburger');
const mobileMenu = document.getElementById('mobile-menu');
const hamburgerIcon = document.getElementById('hamburger-icon');
const closeIcon = document.getElementById('close-icon');

hamburgerBtn.addEventListener('click', function() {
    hamburgerIcon.classList.toggle('hidden');
    closeIcon.classList.toggle('hidden');

    mobileMenu.classList.toggle('hidden');
});
