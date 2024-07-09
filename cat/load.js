
// Get all links that trigger page transition
const pageLinks = document.querySelectorAll('a[href^="/"]');
const loadingPopup = document.getElementById('loading-popup');

// Add event listener to each link
pageLinks.forEach(link => {
    link.addEventListener('click', (event) => {
        event.preventDefault(); // Prevent the default link behavior

        // Show the loading animation popup
        loadingPopup.style.display = 'flex';

        // Navigate to the target page after a short delay
        setTimeout(() => {
            window.location.href = link.href;
        }, 1000); // Adjust the delay as needed (in milliseconds)
    });
});