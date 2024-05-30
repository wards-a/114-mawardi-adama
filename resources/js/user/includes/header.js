// ========== Hamburger Menu - Mobile
const hamburgerBtn = document.getElementById('hamburger');
const mobileMenu = document.getElementById('mobile-menu');
const hamburgerIcon = document.getElementById('hamburger-icon');
const closeIcon = document.getElementById('close-icon');

const showMobileMenu = ()  => {
    hamburgerIcon.classList.toggle('hidden');
    closeIcon.classList.toggle('hidden');
    
    mobileMenu.classList.toggle('hidden');
}

hamburgerBtn.addEventListener('click', () => {
    showMobileMenu();
});

// Navbar - Desktop
// shrink when scrolled
$(window).scroll(() => {
    const navbar = $('.navbar');
    if ($(window).scrollTop() > 10) {
        navbar.addClass('shrink');
    } else {
        navbar.removeClass('shrink');
    }
});

// Navbar dropdown
const getParentWithSubMenu = () => {
    let parentWithSub = new Array();
    const menus = document.querySelectorAll('[class^="containerMenu"]');
    for (const menu of menus) {
        let subMenu = menu.querySelector('[class^="subMenu"]');
        
        if (subMenu !== null) {
            parentWithSub.push(menu);
        }
    }

    if (parentWithSub !== null) {
        return parentWithSub;
    }

    return null;
}

// console.log(getParentWithSubMenu());

let screenWidth = window.innerWidth;

const dropdownMenu = () => {
    const menus = getParentWithSubMenu();
    screenWidth = window.innerWidth;
    let lgScreen = 1024;

    for (const menu of menus) {
        let parentMenu = menu.querySelector('[class^="parentMenu"]')
        let subMenu = menu.querySelector('[class^="subMenu"]');
        let iconAngle = parentMenu.querySelector('.mobile-angle');
        
        parentMenu.addEventListener('mouseenter', () => {
            if (screenWidth >= lgScreen) {
                subMenu.classList.remove('hidden');
            }
        });

        menu.addEventListener('mouseleave', () => {
            if (screenWidth >= lgScreen) {
                subMenu.classList.add('hidden');
            }
        });
        
        parentMenu.addEventListener('click', () => {
            if (screenWidth < lgScreen) {
                iconAngle.classList.toggle('rotate-90');
                subMenu.classList.toggle('hidden');
            }
        });

        if (menu.querySelector('.menu-active')) {
            parentMenu.classList.add('menu-active');
        } else {
            parentMenu.classList.remove('menu-active');
        }
    }
}

window.addEventListener('resize', dropdownMenu);
dropdownMenu();