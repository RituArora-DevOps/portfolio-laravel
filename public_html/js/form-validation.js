/*
*Purpose of this script:
Add Bootstrap's needs-validation class to the <form> tag.
Use is-invalid and is-valid classes for real-time feedback.
Use Bootstrap’s invalid-feedback elements to display custom error messages.
Use JavaScript to handle validation dynamically.
*/

document.addEventListener("DOMContentLoaded", () => {
    const forms = document.querySelectorAll(".needs-validation");

    forms.forEach((form) => {
        form.addEventListener("submit", (event) => {
            event.preventDefault(); // Prevent default form submission

            // Check if the form is valid
            if (form.id === "contactForm" && form.checkValidity()) {
                // Show modal if form is valid
                const modal = new bootstrap.Modal(document.getElementById("contactModal"));
                modal.show();
            } else {
                // Add validation styles to the form (Bootstrap behavior)
                form.classList.add("was-validated");
            }
        });
    });
});




