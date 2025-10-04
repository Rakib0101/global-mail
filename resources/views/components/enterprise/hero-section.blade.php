<!-- Enterprise Hero Section -->
<section class="relative py-20 bg-gradient-to-br from-indigo-900 to-purple-900 text-white overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute top-10 right-10 w-32 h-32 bg-white/5 rounded-full animat"></div>
        <div class="absolute bottom-20 left-20 w-24 h-24 bg-blue-500/10 rounded-full"></div>
        <div class="absolute top-1/2 left-10 w-16 h-16 bg-purple-500/10 rounded-full"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Column - Content -->
            <div class="space-y-8">
                <div class="space-y-4">
                    <span class="text-sm font-semibold tracking-wide uppercase text-blue-300">Enterprise Solutions</span>
                    <h1 class="text-4xl lg:text-5xl font-bold leading-tight">
                        Enterprise-Grade Mailroom That Thinks Like You
                    </h1>
                    <p class="text-xl text-indigo-200 leading-relaxed">
                        AI-powered mail management for enterprises. Smart scanning, automated processing, and
                        intelligent routing
                        to reduce operational costs by 60% while maintaining perfect accuracy.
                    </p>
                </div>

                <!-- Key Features -->
                <div class="space-y-4">
                    <div class="flex items-center space-x-3">
                        <svg class="w-6 h-6 text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-indigo-100 font-medium">Same-day mail access & processing</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <svg class="w-6 h-6 text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-indigo-100 font-medium">Enterprise integrations (Salesforce, Slack)</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <svg class="w-6 h-6 text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-indigo-100 font-medium">Automated check deposits & processing</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <svg class="w-6 h-6 text-green-400 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-indigo-100 font-medium">Bank-grade security & compliance</span>
                    </div>
                </div>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 pt-6">
                    <a href="{{ route('register') }}"
                        class="inline-flex items-center px-8 py-4 border border-transparent text-base font-medium rounded-lg text-indigo-900 bg-white hover:bg-gray-100 transition-colors duration-200">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        Request Enterprise Demo
                    </a>
                    <a href="{{ route('contact-us') }}"
                        class="inline-flex items-center px-8 py-4 border border-white/20 text-base font-medium rounded-lg text-white bg-white/10 hover:bg-white/20 transition-colors duration-200">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                            </path>
                        </svg>
                        Talk to Sales
                    </a>
                </div>

                <!-- Trust Indicators -->
                <div class="flex items-center space-x-6 pt-8">
                    <div class="flex items-center space-x-2">
                        <div class="flex -space-x-1">
                            <img src="{{ asset('assets/images/trust-badge-04.avif') }}" alt="Enterprise badge"
                                class="w-6 h-6 rounded-full border-2 border-white">
                            <img src="{{ asset('assets/images/trust-badge-05.avif') }}" alt="Enterprise badge"
                                class="w-6 h-6 rounded-full border-2 border-white">
                            <img src="{{ asset('assets/images/trust-badge-06.avif') }}" alt="Enterprise badge"
                                class="w-6 h-6 rounded-full border-2 border-white">
                        </div>
                        <span class="text-sm text-indigo-200">Enterprise-grade security</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-sm text-indigo-200">SOC 2 Compliant</span>
                    </div>
                </div>
            </div>

            <!-- Right Column - Visual -->
            <div class="relative">
                <!-- Main Dashboard Mockup -->
                <div class="relative">
                    <img src="{{ asset('assets/images/electronic-deposit-hero-bg.webp') }}" alt="Enterprise Dashboard"
                        class="w-full h-auto rounded-2xl">

                    <!-- AI Processing Overlay -->
                    <div class="absolute top-6 right-6 bg-white rounded-lg shadow-lg p-4">
                        <div class="flex items-center mb-2">
                            <div class="w-3 h-3 bg-green-500 rounded-full mr-2 animate-pulse"></div>
                            <span class="text-sm font-semibold text-gray-900">AI Processing</span>
                        </div>
                        <p class="text-xs text-green-600 mb-1">✓ Invoice scanned</p>
                        <p class="text-xs text-blue-600 mb-1">→ Routed to accounting</p>
                        <p class="text-xs text-purple-600">📧 Team notified</p>
                    </div>

                    <!-- Stats Card -->
                    <div class="absolute bottom-6 left-6 bg-white rounded-lg shadow-lg p-4">
                        <div class="text-center">
                            <div class="text-xl font-bold text-gray-900 mb-1">99.8%</div>
                            <div class="text-xs text-gray-600">Processing Accuracy</div>
                        </div>
                    </div>
                </div>

                <!-- Enterprise Features List -->
                <div class="mt-8 bg-white/10 backdrop-blur-sm rounded-xl p-6">
                    <h3 class="text-lg font-semibold mb-4">Enterprise Features</h3>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-indigo-200">Mail Processing</span>
                            <span class="text-sm font-semibold text-green-400">2.4x Faster</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-indigo-200">Cost Reduction</span>
                            <span class="text-sm font-semibold text-blue-400">60%</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-indigo-200">Uptime Guarantee</span>
                            <span class="text-sm font-semibold text-purple-400">99.9%</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-indigo-200">Support Response</span>
                            <span class="text-sm font-semibold text-yellow-400">
                                < 1 Hour</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
