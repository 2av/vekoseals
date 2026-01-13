<?php $title = 'Inquiry - Vako Seals Pvt. Ltd.'; ?>
<?php $description = 'Inquiry Form - Contact Vako Seals for product inquiries'; ?>

<!-- Hero Section -->
<section class="bg-gradient-to-r from-orange-600 to-red-600 text-white py-16">
    <div class="container mx-auto px-4 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">Product Inquiry</h1>
        <p class="text-xl md:text-2xl">Fill out the form below and we'll get back to you soon</p>
    </div>
</section>

<!-- Inquiry Form -->
<div class="py-12 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto bg-white rounded-lg shadow-lg p-8">
            <form method="POST" action="<?php echo htmlspecialchars(route('inquiry.store'), ENT_QUOTES, 'UTF-8'); ?>" class="space-y-6">
                <?php echo csrf_field(); ?>
                
                <?php if (isset($errors) && is_array($errors) && count($errors) > 0): ?>
                    <div class="bg-red-50 border-l-4 border-red-500 p-4 rounded">
                        <div class="flex items-center gap-2 mb-2">
                            <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            <strong class="text-red-800">Please correct the following errors:</strong>
                        </div>
                        <ul class="list-disc list-inside text-red-700 space-y-1">
                            <?php foreach ($errors as $error): ?>
                                <li><?php echo htmlspecialchars($error, ENT_QUOTES, 'UTF-8'); ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="companyname" class="block text-sm font-semibold text-gray-700 mb-2">
                            Company Name <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="companyname" name="Companyname" maxlength="30" value="<?php echo htmlspecialchars(old('Companyname'), ENT_QUOTES, 'UTF-8'); ?>" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors">
                    </div>

                    <div>
                        <label for="contactperson" class="block text-sm font-semibold text-gray-700 mb-2">
                            Contact Person <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="contactperson" name="Contactperson" maxlength="30" value="<?php echo htmlspecialchars(old('Contactperson'), ENT_QUOTES, 'UTF-8'); ?>" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors">
                    </div>
                </div>

                <div>
                    <label for="address" class="block text-sm font-semibold text-gray-700 mb-2">
                        <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        Address
                    </label>
                    <textarea id="address" name="address" rows="3"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors"><?php echo htmlspecialchars(old('address'), ENT_QUOTES, 'UTF-8'); ?></textarea>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="country" class="block text-sm font-semibold text-gray-700 mb-2">
                            <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Country
                        </label>
                        <select id="country" name="country"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors">
                            <option value="">Select a Country</option>
                            <option value="India" <?php echo old('country', 'India') == 'India' ? 'selected' : ''; ?>>India</option>
                            <option value="United States" <?php echo old('country') == 'United States' ? 'selected' : ''; ?>>United States</option>
                            <option value="United Kingdom" <?php echo old('country') == 'United Kingdom' ? 'selected' : ''; ?>>United Kingdom</option>
                            <option value="Germany" <?php echo old('country') == 'Germany' ? 'selected' : ''; ?>>Germany</option>
                            <option value="France" <?php echo old('country') == 'France' ? 'selected' : ''; ?>>France</option>
                            <option value="Japan" <?php echo old('country') == 'Japan' ? 'selected' : ''; ?>>Japan</option>
                            <option value="China" <?php echo old('country') == 'China' ? 'selected' : ''; ?>>China</option>
                            <option value="Australia" <?php echo old('country') == 'Australia' ? 'selected' : ''; ?>>Australia</option>
                            <option value="Canada" <?php echo old('country') == 'Canada' ? 'selected' : ''; ?>>Canada</option>
                            <option value="Brazil" <?php echo old('country') == 'Brazil' ? 'selected' : ''; ?>>Brazil</option>
                            <option value="Russia" <?php echo old('country') == 'Russia' ? 'selected' : ''; ?>>Russia</option>
                            <option value="South Africa" <?php echo old('country') == 'South Africa' ? 'selected' : ''; ?>>South Africa</option>
                            <option value="UAE" <?php echo old('country') == 'UAE' ? 'selected' : ''; ?>>United Arab Emirates</option>
                            <option value="Saudi Arabia" <?php echo old('country') == 'Saudi Arabia' ? 'selected' : ''; ?>>Saudi Arabia</option>
                            <option value="Singapore" <?php echo old('country') == 'Singapore' ? 'selected' : ''; ?>>Singapore</option>
                            <option value="Malaysia" <?php echo old('country') == 'Malaysia' ? 'selected' : ''; ?>>Malaysia</option>
                            <option value="Thailand" <?php echo old('country') == 'Thailand' ? 'selected' : ''; ?>>Thailand</option>
                            <option value="Indonesia" <?php echo old('country') == 'Indonesia' ? 'selected' : ''; ?>>Indonesia</option>
                            <option value="Philippines" <?php echo old('country') == 'Philippines' ? 'selected' : ''; ?>>Philippines</option>
                            <option value="Vietnam" <?php echo old('country') == 'Vietnam' ? 'selected' : ''; ?>>Vietnam</option>
                            <option value="Other" <?php echo old('country') == 'Other' ? 'selected' : ''; ?>>Other</option>
                        </select>
                    </div>

                    <div>
                        <label for="telephone" class="block text-sm font-semibold text-gray-700 mb-2">
                            <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                            Telephone No
                        </label>
                        <input type="tel" id="telephone" name="telephone" maxlength="15" value="<?php echo htmlspecialchars(old('telephone'), ENT_QUOTES, 'UTF-8'); ?>"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="fax" class="block text-sm font-semibold text-gray-700 mb-2">
                            <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Fax No
                        </label>
                        <input type="tel" id="fax" name="fax" maxlength="15" value="<?php echo htmlspecialchars(old('fax'), ENT_QUOTES, 'UTF-8'); ?>"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">
                            <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                            Email-Id <span class="text-red-500">*</span>
                        </label>
                        <input type="email" id="email" name="email" maxlength="50" value="<?php echo htmlspecialchars(old('email'), ENT_QUOTES, 'UTF-8'); ?>" required
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors">
                    </div>
                </div>

                <div>
                    <label for="subject" class="block text-sm font-semibold text-gray-700 mb-2">
                        <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                        </svg>
                        Subject <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="subject" name="subject" maxlength="50" value="<?php echo htmlspecialchars(old('subject'), ENT_QUOTES, 'UTF-8'); ?>" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors">
                </div>

                <div>
                    <label for="inquiry" class="block text-sm font-semibold text-gray-700 mb-2">
                        <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        Inquiry
                    </label>
                    <textarea id="inquiry" name="inquiry" rows="5"
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-orange-500 focus:border-orange-500 transition-colors"><?php echo htmlspecialchars(old('inquiry'), ENT_QUOTES, 'UTF-8'); ?></textarea>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 justify-center pt-4">
                    <button type="submit" class="bg-gradient-to-r from-orange-600 to-red-600 text-white px-8 py-3 rounded-lg font-semibold hover:from-orange-700 hover:to-red-700 transition-colors shadow-lg flex items-center justify-center gap-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                        Submit Inquiry
                    </button>
                    <button type="reset" class="bg-gray-200 text-gray-700 px-8 py-3 rounded-lg font-semibold hover:bg-gray-300 transition-colors">
                        Reset Form
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Help Section -->
<section class="py-12 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto bg-gradient-to-br from-orange-50 to-red-50 rounded-lg shadow-lg p-8 border-l-4 border-orange-600">
            <div class="flex items-start gap-4">
                <div class="bg-orange-600 p-3 rounded-lg">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">Need Help?</h3>
                    <p class="text-gray-700 leading-relaxed">Kindly fill in the Inquiry Form above to enable us to get in touch with you. Our team will respond to your inquiry as soon as possible.</p>
                </div>
            </div>
        </div>
    </div>
</section>
