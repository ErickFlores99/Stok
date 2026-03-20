document.addEventListener('DOMContentLoaded', () => {

    // MOBILE MENU
    const menuBtn = document.getElementById('menuBtn');
    const mobileMenu = document.getElementById('mobileMenu');

    if (menuBtn && mobileMenu) {
        menuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });
    }

    // USER DROPDOWN
    const userBtn = document.getElementById('userMenuBtn');
    const userMenu = document.getElementById('userMenu');

    if (userBtn && userMenu) {

        userBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            userMenu.classList.toggle('hidden');
        });

        document.addEventListener('click', () => {
            userMenu.classList.add('hidden');
        });
    }

});