$(document).ready(function () {
    $('.btn-save').click(function () {
        const form = document.getElementById('form');
        const formData = new FormData(form);
        for (const [key, value] of formData.entries()) {
            console.log(`Field name: ${key}, Value: ${value}`);
        }

        fetch('/quotation', {
            method: 'POST',
            body: formData,
        })
        // .then(response => response.json()) // Parse response as JSON
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