// Function to fetch the quote from the API
async function fetchQuote() {
    try {
        const response = await fetch('https://api.api-ninjas.com/v1/quotes', {
            method: 'GET',
            headers: {
                'X-Api-Key': '/5DI5W4INBHJ2Whd/B+HgA==wX0Yp89Kca4QUdpD' // Replace with your API key
            }
        });
        
        if (!response.ok) {
            throw new Error('Failed to fetch quote');
        }

        const data = await response.json();

        // Extract the quote and author from the response
        const quote = data[0].quote;
        const author = data[0].author;

        // Insert the quote and author into the HTML
        document.getElementById('quote-text').textContent = `"${quote}"`;
        document.getElementById('quote-author').textContent = `— ${author}`;
    } catch (error) {
        // Handle any errors (e.g., if the API call fails)
        document.getElementById('quote-text').textContent = 'Could not load the quote of the day.';
        document.getElementById('quote-author').textContent = '';
    }
}

// Call the function to fetch and display the quote when the page loads
window.onload = fetchQuote;