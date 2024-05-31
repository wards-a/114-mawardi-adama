// ================= Chart ================= //

// PRVENT EVENT "ENTER"
const preventFormSubmit = (event) => {
    if (event.key === "Enter") {
        event.preventDefault();
    }
}

// PRICE FORMATTING
const addThousandSeparator = (number) => {
    return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

// CART PAGE CHECKBOX ITEM
const checkBoxAll = () => {
    const checkInput = document.getElementById('checkbox-item-all');
    const checkItemInputs = document.querySelectorAll('.checkbox-item');

    // checkbox all item
    checkInput.addEventListener('change', () => {
        if (checkInput.checked) {
            checkItemInputs.forEach(check => check.checked = true);
        } else {
            checkItemInputs.forEach(check => check.checked = false);
        }
    });

    // chekbox single item
    checkItemInputs.forEach(check => {
        check.addEventListener('change', (e) => {
            if (!e.target.checked) {
                checkInput.checked = false;
            }

            for (const check of checkItemInputs) {
                if (check.checked === false) {
                    return
                }
            }

            checkInput.checked = true;
        });
    });
}

// QUANTIYTY HANDLER
const addAndSubtractQuantity = () => {
    let inputChange = new Event('change', { bubbles: true });

    const quantityInput = document.getElementById('product_quantity');
    const btnSubtractQuantity = document.getElementById('btn-subtract-quantity');
    const btnAddQuantity = document.getElementById('btn-add-quantity');

    quantityInput.addEventListener('input', () => {
        const quantityValue = parseInt(quantityInput.value);

        if (quantityValue < 0) {
            quantityInput.value = 1;
        }

        btnSubtractQuantity.disabled = (quantityValue <= 1 || isNaN(quantityValue));
        btnSubtractQuantity.classList.toggle('text-slate-500', btnSubtractQuantity.disabled);
        btnSubtractQuantity.classList.toggle('text-slate-700', !btnSubtractQuantity.disabled);
        quantityInput.dispatchEvent(inputChange);
    });

    quantityInput.addEventListener('keydown', preventFormSubmit); // prevent auto submit when user click 'enter'

    btnSubtractQuantity.addEventListener('click', () => {
        const quantityValue = parseInt(quantityInput.value);

        if (quantityValue > 1) {
            quantityInput.value = quantityValue - 1;
        }

        btnSubtractQuantity.disabled = (quantityValue <= 2);
        btnSubtractQuantity.classList.toggle('text-slate-500', btnSubtractQuantity.disabled);
        btnSubtractQuantity.classList.toggle('text-slate-700', !btnSubtractQuantity.disabled);
        quantityInput.dispatchEvent(inputChange);
    });

    btnAddQuantity.addEventListener('click', () => {
        let quantityValue = parseInt(quantityInput.value);
        quantityValue = isNaN(quantityValue) ? 1 : quantityValue + 1;
        quantityInput.value = quantityValue;

        if (quantityValue === 1 || quantityValue === 0) {
            btnSubtractQuantity.disabled = true;
            btnSubtractQuantity.classList.add('text-slate-500');
            btnSubtractQuantity.classList.remove('text-slate-700');
        } else {
            btnSubtractQuantity.disabled = false;
            btnSubtractQuantity.classList.remove('text-slate-500');
            btnSubtractQuantity.classList.add('text-slate-700');
        }
        quantityInput.dispatchEvent(inputChange);
    });
}

const selectSize = () => {
    const sizeButtons = document.querySelectorAll('.product_size');
    const priceDisplay = document.querySelectorAll('#product_price_display p');
    const sizeInput = document.getElementById('product_size');
    const priceInput = document.getElementById('product_price');

    sizeButtons.forEach(button => {
        const prices = JSON.parse(button.getAttribute('data-price'));

        button.addEventListener('click', () => {
            let inputChange = new Event('change', { bubbles: true });

            sizeButtons.forEach(btn => {
                btn.classList.remove('btnSizeActive');
            });

            button.classList.add('btnSizeActive');

            for (let i = 0; i < priceDisplay.length; i++) {
                priceDisplay[i].textContent = prices[i] ? "Rp " + addThousandSeparator(prices[i]) : '';
            }

            sizeInput.value = button.getAttribute('data-size');
            priceInput.value = prices[0];
            priceInput.dispatchEvent(inputChange);
            // console.log(priceInput.value);
        });
    });
}

const calculationTotalPrice = () => {
    const totalPriceText = document.getElementById('total_price');
    const priceInput = document.getElementById('product_price');
    const quantityInput = document.getElementById('product_quantity');

    const calculate = () => {
        const totalPrice = addThousandSeparator(parseInt(priceInput.value) * parseInt(quantityInput.value));

        if (totalPrice === "NaN") {
            totalPriceText.textContent = "Rp 0";
            return;
        }

        totalPriceText.textContent = totalPrice ? "Rp " + totalPrice : "Rp 0";
    }

    // console.log(priceInput.value);
    priceInput.addEventListener('change', () => {
        calculate();
    });

    quantityInput.addEventListener('change', () => {
        calculate();
    });
}

const shrinkQuantitySection = () => {
    const btnShrink = document.getElementById('shrink-quantity-section');
    const quantitySection = document.getElementById('quantity-section');
    const orderBtnSection = document.getElementById('order-buttons-section');

    btnShrink.addEventListener('click', () => {
        quantitySection.classList.toggle('hidden');
        orderBtnSection.classList.toggle('hidden');
        btnShrink.querySelector('svg').classList.toggle('rotate-180');
    });

    window.addEventListener('resize', () => {
        if (window.innerWidth >= 768) {
            quantitySection.classList.remove('hidden');
            orderBtnSection.classList.remove('hidden');
            btnShrink.querySelector('svg').classList.remove('rotate-180');
        }
    });
}

// MAKE A REQUEST
const requestQuotation = () => {
    const btnRequestQuo = document.querySelector('.btn-request-quotation');
    btnRequestQuo.addEventListener('click', () => {
        const checkedBoxes = document.querySelectorAll('input[type="checkbox"]:checked');
        const checkedValues = [...checkedBoxes].filter(checkbox => checkbox.value).map(checkbox => checkbox.value);
        if (checkedValues > 0) {
            fetch('/session/add-item', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                body: JSON.stringify(checkedValues)
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error(`HTTP error! status: ${response.status}`);
                }
                return response.redirected ? response.url : null; // Check for redirect
            })
            .then(redirectUrl => {
                if (redirectUrl) {
                    // Handle redirect on the client-side
                    window.location.href = redirectUrl;  // Redirect to the new URL
                } else {
                    // Handle non-redirect response (optional)
                    console.log('Form submitted successfully (no redirect)');
                }
            })
            .catch(error => {
                console.error('Error:', error);
                // Handle errors (e.g., display an error message)
            });
        } else {
            // alert cause no item selected
        }
    });
}

$(document).ready(() => {
    checkBoxAll();
    requestQuotation();
    // selectSize();
    // addAndSubtractQuantity();
    // calculationTotalPrice();
    shrinkQuantitySection();
});