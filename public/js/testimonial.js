
// Create an array of testimonial objects
const testimonials = [
    {
        text: "Dr. Ritu's expertise in full-stack development was invaluable in our project. Highly recommended!",
        name: "John Doe",
        title: "CEO, Tech Solutions"
    },
    {
        text: "An outstanding professional who always goes above and beyond to ensure success!",
        name: "Jane Smith",
        title: "Project Manager, Web Innovations"
    },
    {
        text: "A true asset to any team! The solutions provided were both efficient and scalable.",
        name: "Robert Brown",
        title: "Lead Developer, Code Masters"
    }
];

// Create an array of testimonial objects in French
const testimonialsFR = [
    {
        text: "L'expertise de Dr. Ritu en développement full-stack a été inestimable dans notre projet. Hautement recommandé !",
        name: "Jean Dupont",
        title: "PDG, Solutions Tech"
    },
    {
        text: "Un professionnel exceptionnel qui va toujours au-delà pour garantir le succès !",
        name: "Marie Lefevre",
        title: "Chef de projet, Innovations Web"
    },
    {
        text: "Un véritable atout pour toute équipe ! Les solutions fournies étaient à la fois efficaces et évolutives.",
        name: "Robert Dubois",
        title: "Développeur principal, Code Masters"
    }
];
// Determine the language based on the current URL (assuming the page structure is /en/ and /fr/)
const isFrenchPage = window.location.pathname.includes('/fr/');

// Choose the correct testimonials array based on the page language
const testimonialsToDisplay = isFrenchPage ? testimonialsFR : testimonials;

// Get the testimonial container where we will insert the testimonials
const testimonialContainer = document.getElementById('testimonialContainer');

// Loop through the testimonials array and generate HTML for each testimonial
testimonialsToDisplay.forEach(testimonial => {
    // Create a new card for each testimonial
    const testimonialCard = document.createElement('div');
    testimonialCard.classList.add('col-md-4', 'mb-4');
    
    testimonialCard.innerHTML = `
        <div class="card">
            <div class="card-body">
                <p class="card-text">"${testimonial.text}"</p>
                <h5 class="card-title">${testimonial.name}</h5>
                <p class="card-subtitle mb-2 text-muted">${testimonial.title}</p>
            </div>
        </div>
    `;
    
    // Append the new card to the container
    testimonialContainer.appendChild(testimonialCard);
});
