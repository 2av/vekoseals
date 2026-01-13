// Mobile Menu Toggle
document.addEventListener('DOMContentLoaded', function() {
    const menuToggle = document.querySelector('.menu-toggle');
    const nav = document.querySelector('nav');
    const navMenu = document.querySelector('.nav-menu');
    
    if (menuToggle && nav) {
        menuToggle.addEventListener('click', function(e) {
            e.stopPropagation();
            // Toggle active class on button and nav
            menuToggle.classList.toggle('active');
            nav.classList.toggle('active');
        });
        
        // Close menu when clicking on a link (mobile)
        if (navMenu) {
            const navLinks = navMenu.querySelectorAll('a');
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    if (window.innerWidth <= 768) {
                        menuToggle.classList.remove('active');
                        nav.classList.remove('active');
                    }
                });
            });
        }
        
        // Close menu when clicking outside (mobile)
        document.addEventListener('click', function(event) {
            const isClickInsideNav = nav.contains(event.target);
            const isClickOnToggle = menuToggle.contains(event.target);
            
            if (!isClickInsideNav && !isClickOnToggle && window.innerWidth <= 768) {
                menuToggle.classList.remove('active');
                nav.classList.remove('active');
            }
        });
        
        // Handle window resize
        window.addEventListener('resize', function() {
            if (window.innerWidth > 768) {
                menuToggle.classList.remove('active');
                nav.classList.remove('active');
            }
        });
    }
});

