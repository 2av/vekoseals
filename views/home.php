<?php $title = 'Vako Seals Pvt. Ltd. - Home'; ?>
<?php $description = 'Vako Seals Pvt. Ltd. - Leading manufacturer of elastomeric seals, sealing elements and various rubber products'; ?>

<!-- Hero Section -->
<section class="bg-gradient-to-r from-orange-600 to-red-600 text-white py-16">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Welcome to Vako Seals</h1>
        <p class="text-xl md:text-2xl max-w-3xl mx-auto">Leading manufacturer of elastomeric seals, sealing elements and various rubber products with the requisite capacity to cater to the requirements of a vast clientele.</p>
    </div>
</section>

<!-- Image Slider -->
<div class="image-slider hero-slider bg-gray-100 py-8" data-autoplay="true">
    <div class="container mx-auto px-4">
        <div class="slider-container relative">
            <div class="slide active">
                <img src="<?php echo htmlspecialchars(asset('images/gif1.gif'), ENT_QUOTES, 'UTF-8'); ?>" alt="Manufacturing Process" class="w-full h-auto rounded-lg shadow-lg">
            </div>
            <div class="slide">
                <img src="<?php echo htmlspecialchars(asset('images/gif2.gif'), ENT_QUOTES, 'UTF-8'); ?>" alt="Quality Products" class="w-full h-auto rounded-lg shadow-lg">
            </div>
        </div>
        <button class="slider-controls slider-prev absolute left-4 top-1/2 transform -translate-y-1/2 bg-white p-3 rounded-full shadow-lg hover:bg-orange-600 hover:text-white transition-colors" aria-label="Previous">‹</button>
        <button class="slider-controls slider-next absolute right-4 top-1/2 transform -translate-y-1/2 bg-white p-3 rounded-full shadow-lg hover:bg-orange-600 hover:text-white transition-colors" aria-label="Next">›</button>
        <div class="slider-dots flex justify-center gap-2 mt-4"></div>
    </div>
</div>

<!-- Company Profile Section -->
<section class="py-12 bg-white">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-gray-800 mb-6 text-center">Company Profile</h2>
        <div class="max-w-4xl mx-auto space-y-4 text-gray-700 leading-relaxed">
            <p><strong class="text-orange-600">VAKO</strong> is a leading manufacturer of a wide and increasing range of elastomeric seals, sealing elements and various rubber products having the requisite capacity to cater to the requirements of a vast clientele. Today VAKO is a major source for O.E.M's in India & overseas too.</p>
            
            <p>VAKO is a trusted name, well known to fluid power, design, production and plant engineers related to machinery, Auto industry, Steel plants, Hydraulic & pneumatic cylinder manufacturers, Chemical plants & refineries, defence establishments & more.</p>
            
            <p>Our products perform & live upto their name. In over three decades of successful service to the industry, we have gained an indisputable reputation of high quality and consistency and above all a solid reputation for integrity and responsibility.</p>
            
            <p>Having achieved the <strong class="text-orange-600">ISO 9001 certification</strong>, we have attained total customer confidence by continuously providing top quality products & ensuring positive growth of our company.</p>
        </div>
    </div>
</section>

<!-- Company News Section -->
<section class="py-12 bg-orange-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto bg-white rounded-lg shadow-lg p-8 border-l-4 border-orange-600">
            <div class="flex items-start gap-4">
                <svg class="w-8 h-8 text-orange-600 flex-shrink-0 mt-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                </svg>
                <div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Company News</h3>
                    <p class="text-gray-700 leading-relaxed">After having been coveted with 'Self certified' Supplier status from various elite customers, Vako Seals was recently awarded with the Prestigious 'Self certified' Supplier status from M/s Tractor Engineers Ltd (A wholly owned subsidiary of Larsen & Toubro Ltd)</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Grid -->
<section class="py-12 bg-white">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-gradient-to-br from-orange-50 to-red-50 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                <div class="flex items-center gap-3 mb-4">
                    <div class="bg-orange-600 p-3 rounded-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800">Quality Assurance</h3>
                </div>
                <p class="text-gray-700">ISO 9001 certified company with strict quality control procedures ensuring consistent high-quality products.</p>
            </div>
            
            <div class="bg-gradient-to-br from-orange-50 to-red-50 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                <div class="flex items-center gap-3 mb-4">
                    <div class="bg-orange-600 p-3 rounded-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800">Wide Range</h3>
                </div>
                <p class="text-gray-700">Manufacturing a comprehensive range of seals and rubber products to meet diverse industry requirements.</p>
            </div>
            
            <div class="bg-gradient-to-br from-orange-50 to-red-50 rounded-lg shadow-lg p-6 hover:shadow-xl transition-shadow">
                <div class="flex items-center gap-3 mb-4">
                    <div class="bg-orange-600 p-3 rounded-lg">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-gray-800">Expert Engineering</h3>
                </div>
                <p class="text-gray-700">Highly efficient Engineering and Development Divisions with expert engineering back-up at manufacturing.</p>
            </div>
        </div>
    </div>
</section>
