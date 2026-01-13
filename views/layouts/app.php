<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo htmlspecialchars($description ?? 'Vako Seals Pvt. Ltd. - Leading manufacturer of elastomeric seals, sealing elements and various rubber products', ENT_QUOTES, 'UTF-8'); ?>">
    <title><?php echo htmlspecialchars($title ?? 'Vako Seals Pvt. Ltd.', ENT_QUOTES, 'UTF-8'); ?></title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo htmlspecialchars(asset('css/style.css'), ENT_QUOTES, 'UTF-8'); ?>">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap');
        body { font-family: 'Inter', sans-serif; }
    </style>
</head>
<body class="bg-gray-50">
    <!-- Top Info Bar - First Row (Phone & Quick Links) -->
    <div class="bg-gradient-to-r from-orange-600 to-red-600 text-white py-2">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center gap-2 text-sm">
                <div class="flex items-center gap-2">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    <span><strong>For Inquiries:</strong> 91-22-2927 1960 / 91-22-4037 1234</span>
                </div>
                <div class="flex items-center gap-4">
                    <a href="<?php echo htmlspecialchars(route('inquiry.create'), ENT_QUOTES, 'UTF-8'); ?>" class="flex items-center gap-1 hover:text-orange-200 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                        </svg>
                        Quick Inquiry
                    </a>
                    <span class="text-orange-200">|</span>
                    <a href="<?php echo htmlspecialchars(route('contact'), ENT_QUOTES, 'UTF-8'); ?>" class="flex items-center gap-1 hover:text-orange-200 transition-colors">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        Contact
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Top Info Bar - Second Row (Email) -->
    <div class="bg-orange-500 text-white py-2">
        <div class="container mx-auto px-4">
            <div class="flex justify-center">
                <div class="flex items-center gap-2 text-sm">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    <span><strong>Email:</strong> vako@vakoseals.com</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Logo Section Bar with Navigation -->
    <div class="bg-white shadow-md sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between py-4">
                <button class="lg:hidden p-2 text-gray-700 hover:text-orange-600 transition-colors z-50 relative" aria-label="Toggle menu" onclick="toggleTopMenu(event)">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
                <div class="flex items-center gap-2">
                    <img src="<?php echo htmlspecialchars(asset('images/logo.gif'), ENT_QUOTES, 'UTF-8'); ?>" alt="Vako Seals Logo" class="h-12">
                    <img src="<?php echo htmlspecialchars(asset('images/VAKO-.gif'), ENT_QUOTES, 'UTF-8'); ?>" alt="VAKO" class="h-10">
                    <img src="<?php echo htmlspecialchars(asset('images/vako3.gif'), ENT_QUOTES, 'UTF-8'); ?>" alt="SEALS" class="h-10">
                </div>
                <nav class="hidden lg:flex items-center space-x-1">
                    <a href="<?php echo htmlspecialchars(route('home'), ENT_QUOTES, 'UTF-8'); ?>" class="px-4 py-2 rounded-md font-semibold transition-colors <?php echo request()->routeIs('home') ? 'bg-orange-600 text-white' : 'text-gray-700 hover:bg-orange-50 hover:text-orange-600'; ?>">
                        HOME
                    </a>
                    <a href="<?php echo htmlspecialchars(route('about'), ENT_QUOTES, 'UTF-8'); ?>" class="px-4 py-2 rounded-md font-semibold transition-colors <?php echo request()->routeIs('about') ? 'bg-orange-600 text-white' : 'text-gray-700 hover:bg-orange-50 hover:text-orange-600'; ?>">
                        ABOUT
                    </a>
                    <a href="<?php echo htmlspecialchars(route('capabilities'), ENT_QUOTES, 'UTF-8'); ?>" class="px-4 py-2 rounded-md font-semibold transition-colors <?php echo request()->routeIs('capabilities') ? 'bg-orange-600 text-white' : 'text-gray-700 hover:bg-orange-50 hover:text-orange-600'; ?>">
                        CAPABILITIES
                    </a>
                    <a href="<?php echo htmlspecialchars(route('products'), ENT_QUOTES, 'UTF-8'); ?>" class="px-4 py-2 rounded-md font-semibold transition-colors <?php echo request()->routeIs('products') ? 'bg-orange-600 text-white' : 'text-gray-700 hover:bg-orange-50 hover:text-orange-600'; ?>">
                        PRODUCTS
                    </a>
                    <a href="<?php echo htmlspecialchars(route('inquiry.create'), ENT_QUOTES, 'UTF-8'); ?>" class="px-4 py-2 rounded-md font-semibold transition-colors <?php echo request()->routeIs('inquiry.*') ? 'bg-orange-600 text-white' : 'text-gray-700 hover:bg-orange-50 hover:text-orange-600'; ?>">
                        INQUIRY
                    </a>
                    <a href="<?php echo htmlspecialchars(route('contact'), ENT_QUOTES, 'UTF-8'); ?>" class="px-4 py-2 rounded-md font-semibold transition-colors <?php echo request()->routeIs('contact') ? 'bg-orange-600 text-white' : 'text-gray-700 hover:bg-orange-50 hover:text-orange-600'; ?>">
                        CONTACT US
                    </a>
                </nav>
            </div>
        </div>
        
        <!-- Mobile Navigation Overlay -->
        <div class="fixed inset-0 z-40 bg-black bg-opacity-50 hidden transition-opacity duration-300" id="mobile-menu-overlay" onclick="closeMobileMenu()"></div>
        
        <!-- Mobile Navigation Menu -->
        <nav class="fixed top-0 right-0 h-full w-64 sm:w-80 bg-white shadow-2xl z-50 transform translate-x-full transition-transform duration-300 ease-in-out overflow-y-auto" id="mobile-nav-menu">
            <div class="flex justify-between items-center p-4 border-b bg-gradient-to-r from-orange-600 to-red-600 text-white">
                <span class="font-bold text-lg">Menu</span>
                <button onclick="closeMobileMenu()" class="p-2 hover:bg-white hover:bg-opacity-20 rounded-lg transition-colors" aria-label="Close menu">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="flex flex-col p-4">
                <a href="<?php echo htmlspecialchars(route('home'), ENT_QUOTES, 'UTF-8'); ?>" class="px-4 py-3 rounded-md font-semibold mb-2 transition-colors flex items-center gap-2 <?php echo request()->routeIs('home') ? 'bg-orange-600 text-white' : 'text-gray-700 hover:bg-orange-50 hover:text-orange-600'; ?>" onclick="closeMobileMenu()">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    HOME
                </a>
                <a href="<?php echo htmlspecialchars(route('about'), ENT_QUOTES, 'UTF-8'); ?>" class="px-4 py-3 rounded-md font-semibold mb-2 transition-colors flex items-center gap-2 <?php echo request()->routeIs('about') ? 'bg-orange-600 text-white' : 'text-gray-700 hover:bg-orange-50 hover:text-orange-600'; ?>" onclick="closeMobileMenu()">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    ABOUT
                </a>
                <a href="<?php echo htmlspecialchars(route('capabilities'), ENT_QUOTES, 'UTF-8'); ?>" class="px-4 py-3 rounded-md font-semibold mb-2 transition-colors flex items-center gap-2 <?php echo request()->routeIs('capabilities') ? 'bg-orange-600 text-white' : 'text-gray-700 hover:bg-orange-50 hover:text-orange-600'; ?>" onclick="closeMobileMenu()">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                    CAPABILITIES
                </a>
                <a href="<?php echo htmlspecialchars(route('products'), ENT_QUOTES, 'UTF-8'); ?>" class="px-4 py-3 rounded-md font-semibold mb-2 transition-colors flex items-center gap-2 <?php echo request()->routeIs('products') ? 'bg-orange-600 text-white' : 'text-gray-700 hover:bg-orange-50 hover:text-orange-600'; ?>" onclick="closeMobileMenu()">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                    </svg>
                    PRODUCTS
                </a>
                <a href="<?php echo htmlspecialchars(route('inquiry.create'), ENT_QUOTES, 'UTF-8'); ?>" class="px-4 py-3 rounded-md font-semibold mb-2 transition-colors flex items-center gap-2 <?php echo request()->routeIs('inquiry.*') ? 'bg-orange-600 text-white' : 'text-gray-700 hover:bg-orange-50 hover:text-orange-600'; ?>" onclick="closeMobileMenu()">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                    </svg>
                    INQUIRY
                </a>
                <a href="<?php echo htmlspecialchars(route('contact'), ENT_QUOTES, 'UTF-8'); ?>" class="px-4 py-3 rounded-md font-semibold mb-2 transition-colors flex items-center gap-2 <?php echo request()->routeIs('contact') ? 'bg-orange-600 text-white' : 'text-gray-700 hover:bg-orange-50 hover:text-orange-600'; ?>" onclick="closeMobileMenu()">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                    CONTACT US
                </a>
            </div>
        </nav>
    </div>

    <!-- Main Content Area -->
    <main class="min-h-screen">
        <?php echo $content; ?>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="container mx-auto px-4">
            <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                <div class="flex items-center gap-2">
                    <svg class="w-5 h-5 text-orange-400" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="font-semibold">An ISO 9001 Certified Company</span>
                </div>
                <div class="flex flex-wrap justify-center gap-4 text-sm">
                    <a href="<?php echo htmlspecialchars(route('home'), ENT_QUOTES, 'UTF-8'); ?>" class="hover:text-orange-400 transition-colors">Home</a>
                    <span class="text-gray-600">|</span>
                    <a href="<?php echo htmlspecialchars(route('about'), ENT_QUOTES, 'UTF-8'); ?>" class="hover:text-orange-400 transition-colors">About Us</a>
                    <span class="text-gray-600">|</span>
                    <a href="<?php echo htmlspecialchars(route('capabilities'), ENT_QUOTES, 'UTF-8'); ?>" class="hover:text-orange-400 transition-colors">Capabilities</a>
                    <span class="text-gray-600">|</span>
                    <a href="<?php echo htmlspecialchars(route('products'), ENT_QUOTES, 'UTF-8'); ?>" class="hover:text-orange-400 transition-colors">Products</a>
                    <span class="text-gray-600">|</span>
                    <a href="<?php echo htmlspecialchars(route('inquiry.create'), ENT_QUOTES, 'UTF-8'); ?>" class="hover:text-orange-400 transition-colors">Inquiry</a>
                    <span class="text-gray-600">|</span>
                    <a href="<?php echo htmlspecialchars(route('contact'), ENT_QUOTES, 'UTF-8'); ?>" class="hover:text-orange-400 transition-colors">Contact Us</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="<?php echo htmlspecialchars(asset('js/menu.js'), ENT_QUOTES, 'UTF-8'); ?>"></script>
    <script src="<?php echo htmlspecialchars(asset('js/slider.js'), ENT_QUOTES, 'UTF-8'); ?>"></script>
    <script>
        function toggleTopMenu(event) {
            if (event) {
                event.preventDefault();
                event.stopPropagation();
            }
            
            const menu = document.getElementById('mobile-nav-menu');
            const overlay = document.getElementById('mobile-menu-overlay');
            
            if (menu && overlay) {
                // Check if menu is currently hidden (off-screen)
                const isHidden = menu.classList.contains('translate-x-full');
                
                if (isHidden) {
                    // Show menu - slide in from right
                    menu.classList.remove('translate-x-full');
                    menu.classList.add('translate-x-0');
                    overlay.classList.remove('hidden');
                    document.body.style.overflow = 'hidden';
                } else {
                    // Hide menu - slide out to right
                    closeMobileMenu();
                }
            }
        }
        
        function closeMobileMenu() {
            const menu = document.getElementById('mobile-nav-menu');
            const overlay = document.getElementById('mobile-menu-overlay');
            
            if (menu && overlay) {
                // Hide menu - slide out to right
                menu.classList.remove('translate-x-0');
                menu.classList.add('translate-x-full');
                overlay.classList.add('hidden');
                document.body.style.overflow = '';
            }
        }
        
        // Close menu when window is resized to desktop size
        function handleResize() {
            if (window.innerWidth >= 1024) { // lg breakpoint
                closeMobileMenu();
            }
        }
        
        // Close menu when clicking on overlay
        document.addEventListener('DOMContentLoaded', function() {
            const overlay = document.getElementById('mobile-menu-overlay');
            if (overlay) {
                overlay.addEventListener('click', closeMobileMenu);
            }
            
            // Close menu when clicking on a link
            const navLinks = document.querySelectorAll('#mobile-nav-menu a');
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    setTimeout(closeMobileMenu, 100);
                });
            });
            
            // Close menu on escape key
            document.addEventListener('keydown', function(event) {
                if (event.key === 'Escape') {
                    closeMobileMenu();
                }
            });
            
            // Handle window resize
            window.addEventListener('resize', handleResize);
        });
    </script>
</body>
</html>
