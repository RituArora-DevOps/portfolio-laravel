$(document).ready(function () {
    // Check if AOS is loaded and initialize it
    if (typeof AOS !== "undefined") {
        AOS.init();
    } else {
        console.warn("AOS is not loaded.");
    }

    // Toggle the additional publications section
    $(".toggleButton").click(function () {
        const targetId = $(this).data("bs-target"); // Get the target ID from data attribute
        $(targetId).collapse("toggle"); // Use Bootstrap's collapse method

        // Update button text based on visibility
        const isVisible = $(targetId).hasClass("show");

        // Change button text based on visibility
        if (isVisible) {
            $(this).text($(this).data("hide-text"));
        } else {
            $(this).text($(this).data("show-text"));
        }
    });
});
