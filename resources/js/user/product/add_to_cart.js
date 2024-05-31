$(document).ready(function () {
    $('.btn-add-to-cart').click(function () {
        const form = document.getElementById('productOrderForm');
        const formData = new FormData(form);
        for (const [key, value] of formData.entries()) {
            console.log(`Field name: ${key}, Value: ${value}`);
        }

        fetch('/cart', {
            method: 'POST',
            body: formData,
        })
        .then(response => response.json()) // Parse response as JSON
        .then(data => {
            // Handle successful response
            console.log("Form submitted successfully:", data.message);
        })
        .catch(error => {
            // Handle errors
            console.error("Error submitting form:", error);
        });
    });
});