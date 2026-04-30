// Hamburger menu functionality
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu');
    if (menuToggle) {
        menuToggle.addEventListener('click', function() {
            console.log('Menu clicked');
        });
    }
});
