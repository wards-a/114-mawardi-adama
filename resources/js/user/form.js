// transition input label, used in guest page
document.addEventListener('DOMContentLoaded', function () {
    const inputs = document.querySelectorAll('.input');
    
    inputs.forEach(input => {
        let label = input.firstElementChild;
        let asteriskSign = label?.firstElementChild;
        let inputField = label.nextElementSibling;

        inputField.addEventListener('focus', () => {
            console.log(inputField);
            label.classList.remove('text-slate-500');
            label.classList.add('focused', 'text-sky-700');
            asteriskSign?.classList.add('text-red-700');
        });

        inputField.addEventListener('blur', () => {
            if (!inputField.value) {
                label.classList.remove('focused', 'text-sky-700');
                label.classList.add('text-slate-500');
                asteriskSign?.classList.remove('text-red-700');
            } else {
                label.classList.remove('text-sky-700');
                label.classList.add('text-slate-500');
                asteriskSign?.classList.remove('text-red-700');
            }
        });
    });
});