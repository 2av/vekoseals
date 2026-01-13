<?php $title = 'Thank You - Vako Seals Pvt. Ltd.'; ?>
<?php $description = 'Thank you for your inquiry'; ?>

<!-- Hero Section -->
<section class="bg-gradient-to-r from-green-500 to-emerald-600 text-white py-16">
    <div class="container mx-auto px-4 text-center">
        <div class="max-w-2xl mx-auto">
            <div class="mb-6">
                <svg class="w-24 h-24 mx-auto text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
            </div>
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Thank You!</h1>
            <p class="text-xl md:text-2xl">Your inquiry has been received</p>
        </div>
    </div>
</section>

<!-- Success Message Section -->
<section class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-lg p-8 text-center">
            <h2 class="text-3xl font-bold text-gray-800 mb-4">Inquiry Submitted Successfully</h2>
            <p class="text-lg text-gray-700 mb-6">Thank you for your inquiry. We have received your message and will get back to you soon.</p>
            
            <?php if (session('success')): ?>
                <div class="bg-green-50 border-l-4 border-green-500 p-4 rounded mb-6 text-left">
                    <div class="flex items-center gap-2">
                        <svg class="w-5 h-5 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <span class="text-green-800 font-semibold"><?php echo htmlspecialchars(session('success'), ENT_QUOTES, 'UTF-8'); ?></span>
                    </div>
                </div>
            <?php endif; ?>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center mt-8">
                <a href="<?php echo htmlspecialchars(route('home'), ENT_QUOTES, 'UTF-8'); ?>" 
                   class="bg-gradient-to-r from-orange-600 to-red-600 text-white px-8 py-3 rounded-lg font-semibold hover:from-orange-700 hover:to-red-700 transition-colors shadow-lg flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                    Return to Home
                </a>
                <a href="<?php echo htmlspecialchars(route('inquiry.create'), ENT_QUOTES, 'UTF-8'); ?>" 
                   class="bg-gray-200 text-gray-700 px-8 py-3 rounded-lg font-semibold hover:bg-gray-300 transition-colors flex items-center justify-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    Submit Another Inquiry
                </a>
            </div>
        </div>
    </div>
</section>
