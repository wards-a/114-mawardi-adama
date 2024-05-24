// ================= carousel =================
const imagesCarousel = () => {
    // product detail carousel
    $('.image_to_show').slick({
        mobileFirst: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.images_carousel'
    });
    $('.images_carousel').slick({
        infinite: false,
        mobileFirst: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        asNavFor: '.image_to_show',
        focusOnSelect: true,
        arrows: false,
    });
}

// ================= Collapse Description =================
const collapseDescription = () => {
    const article = document.getElementById("description");
    const btnExpand = document.getElementById("btnExpandDescription");
    
    btnExpand.addEventListener('click', () => {
        article.classList.toggle('line-clamp-6');
        if (article.classList.contains('line-clamp-6')) {
            btnExpand.textContent = "Baca Selengkapnya";
        } else {
            btnExpand.textContent = "Tutup Deskripsi";
        }
    });
}

// ================= Price and Size ================= //
const preventFormSubmit = (event) => {
    if (event.key === "Enter") {
        event.preventDefault();
    }
}

const addThousandSeparator = (number) => {
    return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

const addAndSubtractQuantity = () => {
    let inputChange = new Event('change', {bubbles:true});

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

    quantityInput.addEventListener('keydown', preventFormSubmit);

    btnSubtractQuantity.addEventListener('click', () => {
        const quantityValue = parseInt(quantityInput.value);

        if (quantityValue > 1 ) {
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
            let inputChange = new Event('change', {bubbles:true});

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

        totalPriceText.textContent = totalPrice ? "Rp "+totalPrice : "Rp 0";    
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
        if (window.innerWidth >= 1024) {
            quantitySection.classList.remove('hidden');
            orderBtnSection.classList.remove('hidden');
            btnShrink.querySelector('svg').classList.remove('rotate-180');
        }
    });
}

$(document).ready(() => {
    imagesCarousel();
    collapseDescription();
    selectSize();
    addAndSubtractQuantity();
    calculationTotalPrice();
    shrinkQuantitySection();
});