<!-- Individuals Hero Section -->
<section class="relative py-20 bg-gradient-to-br from-green-50 via-blue-50 to-purple-50 overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute top-20 left-20 w-24 h-24 bg-green-200/30 rounded-full"></div>
        <div class="absolute bottom-20 right-20 w-32 h-32 bg-blue-200/30 rounded-full"></div>
        <div class="absolute top-1/2 left-1/3 w-16 h-16 bg-purple-200/30 rounded-full"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Column - Content -->
            <div class="space-y-8">
                <div class="space-y-4">
                    <span class="text-sm font-semibold tracking-wide uppercase text-green-500">Personal Mail
                        Solutions</span>
                    <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight">
                        Perfect Virtual Mailbox for Global Citizens
                    </h1>
                    <p class="text-xl text-gray-600 leading-relaxed">
                        Travel the world while staying connected to your mail. Digital nomads, expats, and frequent
                        travelers
                        trust iMailVault for reliable mail scanning, forwarding, and US shopping access.
                    </p>
                </div>

                <!-- Key Benefits -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-3">
                        <svg class="w-6 h-6 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-700 font-medium">Access mail from anywhere in the world</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <svg class="w-6 h-6 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-700 font-medium">Shop from US retailers that don't ship
                            internationally</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <svg class="w-6 h-6 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-700 font-medium">Reduce travel stress with automatic mail handling</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <svg class="w-6 h-6 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-700 font-medium">Never miss important mail or bills again</span>
                    </div>
                </div>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 pt-6">
                    <a href="{{ route('register') }}"
                        class="inline-flex items-center px-8 py-4 border border-transparent text-base font-medium rounded-lg text-white bg-green-600 hover:bg-green-700 transition-colors duration-200">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        Start Your Global Mailbox
                    </a>
                    <a href="{{ route('pricing') }}"
                        class="inline-flex items-center px-8 py-4 border border-gray-300 text-base font-medium rounded-lg text-gray-700 bg-white hover:bg-gray-50 transition-colors duration-200">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                            </path>
                        </svg>
                        Compare Plans
                    </a>
                </div>

                <!-- Trust Indicators -->
                <div class="flex items-center space-x-6 pt-8">
                    <div class="flex items-center space-x-2">
                        <div class="flex -space-x-1">
                            <img src="{{ asset('assets/images/trust-badge-04.avif') }}" alt="Trust badge"
                                class="w-8 h-8 rounded-full border-2 border-white">
                            <img src="{{ asset('assets/images/trust-badge-05.avif') }}" alt="Trust badge"
                                class="w-8 h-8 rounded-full border-2 border-white">
                            <img src="{{ asset('assets/images/trust-badge-06.avif') }}" alt="Trust badge"
                                class="w-8 h-8 rounded-full border-2 border-white">
                        </div>
                        <span class="text-sm text-gray-600">Trusted by 100,000+ travelers</span>
                    </div>
                </div>
            </div>

            <!-- Right Column - Visual -->
            <div class="relative">
                <!-- Main Traveler Visual -->
                <div class="relative">
                    <img src="{{ asset('assets/images/Jamie.webp') }}" alt="Happy Traveler"
                        class="w-full h-auto rounded-2xl shadow-xl">

                    <!-- Mobile Mail App Overlay -->
                    <div class="absolute top-6 right-6 bg-white rounded-xl shadow-lg p-4">
                        <div class="flex items-center mb-2">
                            <div class="w-3 h-3 bg-green-500 rounded-full mr-2 animate-pulse"></div>
                            <span class="text-sm font-semibold text-gray-900">Mail Received</span>
                        </div>
                        <div class="space-y-1">
                            <p class="text-xs text-gray-600">📦 Package: Amazon Order</p>
                            <p class="text-xs text-gray-600">💳 Bill: Credit Card Statement</p>
                            <p class="text-xs text-blue-600">✓ Scanned & Ready</p>
                        </div>
                    </div>

                    <!-- Location Badge -->
                    <div class="absolute bottom-6 left-6 bg-white rounded-xl shadow-lg p-4 border border-green-200">
                        <div class="text-center">
                            <div
                                class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-2">
                                <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                </svg>
                            </div>
                            <div class="text-sm font-semibold text-gray-900">Worldwide Access</div>
                            <div class="text-xs text-gray-600">190+ countries</div>
                        </div>
                    </div>
                </div>

                <!-- Lifestyle Stats -->
                <div class="mt-8 bg-white rounded-xl p-6 shadow-sm border border-green-100">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Perfect for Global Lifestyles</h3>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Digital Nomads</span>
                            <span class="text-sm font-semibold text-blue-600">75% Savings</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Expats</span>
                            <span class="text-sm font-semibold text-green-600">Reliable Access</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Travelers</span>
                            <span class="text-sm font-semibold text-purple-600">Stress-Free</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Remote Workers</span>
                            <span class="text-sm font-semibold text-orange-600">Global Coverage</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
