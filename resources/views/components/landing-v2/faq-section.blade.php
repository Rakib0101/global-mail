<!-- FAQ Section -->
<div class="bg-white py-16 lg:py-24">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-8">
                Frequently Asked Questions
            </h2>
            <p class="text-xl text-gray-600">
                All you need to know about signing up and choosing a virtual address.
            </p>
        </div>

        <div class="space-y-4">
            <!-- FAQ Item 1 -->
            <div class="border border-gray-200 rounded-lg">
                <button
                    class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors faq-button">
                    <span class="font-medium text-gray-900">How quickly can I get my virtual mailbox activated?</span>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform faq-icon" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="px-6 pb-4 text-gray-600 faq-content hidden">
                    <p>Your virtual mailbox can be activated within 24-48 hours after completing the verification
                        process. We'll send you confirmation once your mailbox is ready to receive mail.</p>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="border border-gray-200 rounded-lg">
                <button
                    class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors faq-button">
                    <span class="font-medium text-gray-900">How does mail scanning work?</span>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform faq-icon" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="px-6 pb-4 text-gray-600 faq-content hidden">
                    <p>When mail arrives at your virtual address, we scan the envelope and notify you via email or SMS.
                        You can then choose to have the mail opened and scanned, forwarded to you, or shredded securely.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="border border-gray-200 rounded-lg">
                <button
                    class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors faq-button">
                    <span class="font-medium text-gray-900">How does check deposit work?</span>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform faq-icon" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="px-6 pb-4 text-gray-600 faq-content hidden">
                    <p>We can deposit checks directly into your bank account. Simply forward the check to us, and we'll
                        handle the deposit process. You'll receive confirmation once the deposit is complete.</p>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="border border-gray-200 rounded-lg">
                <button
                    class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors faq-button">
                    <span class="font-medium text-gray-900">What types of mail can you handle?</span>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform faq-icon" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="px-6 pb-4 text-gray-600 faq-content hidden">
                    <p>We handle all types of mail including letters, packages, magazines, catalogs, and legal
                        documents. We can also process checks and other financial documents for deposit.</p>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="border border-gray-200 rounded-lg">
                <button
                    class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors faq-button">
                    <span class="font-medium text-gray-900">Is my mail secure and private?</span>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform faq-icon" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="px-6 pb-4 text-gray-600 faq-content hidden">
                    <p>Yes, we use bank-level security with 256-bit SSL encryption. Our facilities are monitored 24/7
                        with biometric access controls. We're SOC 2 Type II certified and comply with strict privacy
                        policies.</p>
                </div>
            </div>

            <!-- FAQ Item 6 -->
            <div class="border border-gray-200 rounded-lg">
                <button
                    class="w-full px-6 py-4 text-left flex items-center justify-between hover:bg-gray-50 transition-colors faq-button">
                    <span class="font-medium text-gray-900">Can I share my mailbox with family members?</span>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform faq-icon" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="px-6 pb-4 text-gray-600 faq-content hidden">
                    <p>Yes, you can add authorized users to your account. Each user will have their own login
                        credentials and can access mail based on the permissions you set.</p>
                </div>
            </div>
        </div>

        <!-- View All FAQs Link -->
        <div class="text-center mt-12">
            <a href="{{ route('help-center') }}" class="text-blue-600 hover:text-blue-800 font-medium text-lg">
                View all FAQs →
            </a>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const faqButtons = document.querySelectorAll('.faq-button');

        faqButtons.forEach(button => {
            button.addEventListener('click', function() {
                const content = this.nextElementSibling;
                const icon = this.querySelector('.faq-icon');

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
