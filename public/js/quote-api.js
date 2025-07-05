document.addEventListener("DOMContentLoaded", async () => {
    const quoteText = document.getElementById("quote-text");
    const quoteAuthor = document.getElementById("quote-author");

    try {
        const res = await fetch("https://api.quotable.io/random");
        const data = await res.json();
        quoteText.textContent = `"${data.content}"`;
        quoteAuthor.textContent = `– ${data.author}`;
    } catch (error) {
        quoteText.textContent = "Could not load the quote of the day.";
        quoteAuthor.textContent = "";
        console.error("Quote API Error:", error);
    }
});
