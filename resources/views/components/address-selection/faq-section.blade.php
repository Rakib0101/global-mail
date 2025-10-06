<!-- FAQ Section -->
<div class="bg-white py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Frequently asked questions</h2>
            <p class="text-lg text-gray-600">
                All you need to know about signing up and choosing a virtual address.
            </p>
        </div>

        <div class="space-y-4">
            <!-- FAQ Item 1 -->
            <div class="border border-gray-200 rounded-lg">
                <button
                    class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                    <span class="font-medium text-gray-900">Who can sign up for the service?</span>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="px-6 pb-4 text-gray-600 hidden">
                    <p>Anyone can sign up for our virtual address service. We serve individuals, businesses,
                        entrepreneurs, and organizations looking for a professional US address.</p>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="border border-gray-200 rounded-lg">
                <button
                    class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                    <span class="font-medium text-gray-900">When should I sign up for the service?</span>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="px-6 pb-4 text-gray-600 hidden">
                    <p>You can sign up anytime! Whether you're starting a new business, moving internationally, or need
                        a professional address for your online presence, our service is available 24/7.</p>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="border border-gray-200 rounded-lg">
                <button
                    class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                    <span class="font-medium text-gray-900">Which state should I choose for my virtual address?</span>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="px-6 pb-4 text-gray-600 hidden">
                    <p>Choose based on your business needs. Delaware is popular for corporations due to
                        business-friendly laws, while California and New York are great for tech and finance businesses
                        respectively.</p>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="border border-gray-200 rounded-lg">
                <button
                    class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                    <span class="font-medium text-gray-900">What if I want my address in a location you don't
                        offer?</span>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="px-6 pb-4 text-gray-600 hidden">
                    <p>We're constantly expanding our address locations. If you need an address in a specific city or
                        state we don't currently offer, please contact us and we'll work to add it to our network.</p>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="border border-gray-200 rounded-lg">
                <button
                    class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors">
                    <span class="font-medium text-gray-900">What paperwork do I need to sign up for the service?</span>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="px-6 pb-4 text-gray-600 hidden">
                    <p>You'll need to complete a USPS Form 1583 for mail forwarding services, provide a valid
                        government-issued ID, and proof of address. We'll guide you through the entire process.</p>
                </div>
            </div>
        </div>

        <!-- Help Center Link -->
        <div class="text-center mt-8">
            <p class="text-gray-600">
                Got more questions?
                <a href="#" class="text-blue-600 hover:text-blue-800 font-medium">Check out Help Center →</a>
            </p>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const faqButtons = document.querySelectorAll('.border.border-gray-200 button');

        faqButtons.forEach(button => {
            button.addEventListener('click', function() {
                const content = this.nextElementSibling;
                const icon = this.querySelector('svg');

                // Toggle content visibility
                if (content.classList.contains('hidden')) {
                    content.classList.remove('hidden');
                    icon.style.transform = 'rotate(180deg)';
                } else {
                    content.classList.add('hidden');
                    icon.style.transform = 'rotate(0deg)';
                }
            });
        });
    });
</script>
