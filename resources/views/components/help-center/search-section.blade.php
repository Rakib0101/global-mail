<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-6">
                Search Help Articles
            </h2>
            <div class="relative max-w-2xl mx-auto">
                <input type="text" placeholder="Search for help articles..."
                       class="w-full px-6 py-4 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                <button class="absolute right-3 top-1/2 transform -translate-y-1/2 text-gray-400 hover:text-gray-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <a href="{{ route('faqs.getting-started') }}" class="bg-gray-50 rounded-lg p-6 hover:bg-gray-100 transition-colors">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Getting Started</h3>
                <p class="text-gray-600 text-sm">Learn how to set up your account and start using iMailVault</p>
            </a>
            <a href="{{ route('faqs.mailbox-features') }}" class="bg-gray-50 rounded-lg p-6 hover:bg-gray-100 transition-colors">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Mailbox Features</h3>
                <p class="text-gray-600 text-sm">Explore all the features available in your virtual mailbox</p>
            </a>
            <a href="{{ route('faqs.pricing') }}" class="bg-gray-50 rounded-lg p-6 hover:bg-gray-100 transition-colors">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Pricing & Billing</h3>
                <p class="text-gray-600 text-sm">Understand our pricing plans and billing information</p>
            </a>
            <a href="{{ route('faqs.troubleshooting') }}" class="bg-gray-50 rounded-lg p-6 hover:bg-gray-100 transition-colors">
                <h3 class="text-lg font-semibold text-gray-900 mb-2">Troubleshooting</h3>
                <p class="text-gray-600 text-sm">Common issues and how to resolve them</p>
            </a>
        </div>
    </div>
</section>
