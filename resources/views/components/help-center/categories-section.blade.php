<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-6">
                Popular Categories
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Browse help articles by category to find exactly what you're looking for.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <a href="{{ route('faqs.getting-started') }}" class="bg-white rounded-xl p-8 hover:shadow-lg transition-shadow">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Getting Started</h3>
                <p class="text-gray-600 mb-4">Everything you need to know to begin using iMailVault</p>
                <span class="text-blue-600 font-medium">15 articles →</span>
            </a>

            <a href="{{ route('faqs.mailbox-features') }}" class="bg-white rounded-xl p-8 hover:shadow-lg transition-shadow">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Mailbox Features</h3>
                <p class="text-gray-600 mb-4">Learn about scanning, forwarding, and other mailbox features</p>
                <span class="text-green-600 font-medium">22 articles →</span>
            </a>

            <a href="{{ route('faqs.pricing') }}" class="bg-white rounded-xl p-8 hover:shadow-lg transition-shadow">
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Pricing & Billing</h3>
                <p class="text-gray-600 mb-4">Information about plans, billing, and payment methods</p>
                <span class="text-purple-600 font-medium">8 articles →</span>
            </a>
        </div>
    </div>
</section>
