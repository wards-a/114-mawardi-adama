document.addEventListener('DOMContentLoaded', () => {
    const showDialogLink = document.getElementsByClassName('parentMenuMasuk')[0];
    const dialogContainer = document.getElementById('dialogFormLogin');
    const btnCloseDialog = document.getElementById('closeDialog');
    const overlay = document.getElementById('overlay');

    showDialogLink.addEventListener('click', (e) => {
        if (window.innerWidth >= 1024) {
            e.preventDefault();
            dialogContainer.setAttribute('open', 'open');
            overlay.classList.toggle('hidden');
        }
    });

    btnCloseDialog.addEventListener('click', () => {
        dialogContainer.removeAttribute('open');
        overlay.classList.toggle('hidden');
    });
});
