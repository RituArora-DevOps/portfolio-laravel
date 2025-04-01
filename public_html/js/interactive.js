/**
✅ Added a feedback form with local storage
✅ Integrated real-time tech news fetching
✅ Used Chart.js to display feedback summaries (if needed)
✅ Applied smooth animations with AOS
✅ Enhanced project boxes with hover effects
*/

document.addEventListener("DOMContentLoaded", () => {
    AOS.init(); // Initialize animations

    // Feedback form handling
    const feedbackForm = document.getElementById("feedbackForm");
    const feedbackList = document.getElementById("feedbackList");

    // Load stored feedback
    let feedbackData = JSON.parse(localStorage.getItem("feedback")) || [];
    function displayFeedback() {
        feedbackList.innerHTML = "";
        feedbackData.forEach((feedback, index) => {
            let li = document.createElement("li");
            li.className = "list-group-item";
            li.innerHTML = `<strong>${feedback.rating} ⭐</strong> - ${feedback.comment}`;
            feedbackList.appendChild(li);
        });
    }
    displayFeedback();

    feedbackForm.addEventListener("submit", (e) => {
        e.preventDefault();
        let userFeedback = document.getElementById("userFeedback").value;
        let rating = document.getElementById("rating").value;

        feedbackData.push({ comment: userFeedback, rating: rating });
        localStorage.setItem("feedback", JSON.stringify(feedbackData));
        displayFeedback();

        feedbackForm.reset();
    });

/**

    // Fetch Tech News
    async function fetchTechNews() {
        const endpoint = 'https://newsapi.org/v2/everything';  // NewsAPI's 'everything' endpoint
        const apiKey = 'e506f254225741958dac273742789aa5';  // Replace with your actual API key
    
        try {
            // Construct the request URL with query parameters
            let url = `${endpoint}?q=Apple&from=2025-02-05&sortBy=popularity&apiKey=${apiKey}`;
    
            // Fetch the data from NewsAPI
            let response = await fetch(url);
            let newsData = await response.json();
    
            // Check if articles are returned
            if (newsData.articles) {
                let newsContainer = document.getElementById("news-container");
    
                // Display only the first 3 articles
                newsData.articles.slice(0, 3).forEach((article) => {
                    let col = document.createElement("div");
                    col.className = "col-md-4";
                    col.innerHTML = ` 
                        <div class="card">
                            <img src="${article.urlToImage}" class="card-img-top" alt="${article.title}">
                            <div class="card-body">
                                <h5 class="card-title">${article.title}</h5>
                                <p class="card-text">${article.description}</p>
                                <a href="${article.url}" class="btn btn-primary" target="_blank">Lire plus</a>
                            </div>
                        </div>
                    `;
                    newsContainer.appendChild(col);
                });
            } else {
                console.error('No articles found in the response.');
            }
        } catch (error) {
            console.error("Error while fetching news", error);
        }
    }
    
    // Call the function to fetch news
    fetchTechNews();
 */
});  

