<!-- Virtual Office Hero Section -->
<section class="relative py-20 bg-gradient-to-br from-blue-50 to-indigo-100 overflow-hidden">
    <!-- Background Elements -->
    <div class="absolute inset-0">
        <div class="absolute top-10 left-10 w-20 h-20 bg-blue-200 rounded-full opacity-20"></div>
        <div class="absolute bottom-20 right-20 w-32 h-32 bg-purple-200 rounded-full opacity-20"></div>
        <div class="absolute top-1/2 left-1/4 w-16 h-16 bg-green-200 rounded-full opacity-20"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Column - Content -->
            <div class="space-y-8">
                <div class="space-y-4">
                    <span class="text-sm font-semibold tracking-wide uppercase text-blue-500">Virtual Office
                        Solutions</span>
                    <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 leading-tight">
                        Professional Business Address Without the Office
                    </h1>
                    <p class="text-xl text-gray-600 leading-relaxed">
                        Establish credibility, receive mail professionally, and expand your business presence with
                        premium virtual office addresses across 50+ prestigious US locations.
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
                        <span class="text-gray-700 font-medium">Premium business addresses for credibility</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <svg class="w-6 h-6 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-700 font-medium">Complete mail management & forwarding</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <svg class="w-6 h-6 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-700 font-medium">Client meeting rooms & business services</span>
                    </div>
                    <div class="flex items-center space-x-3">
                        <svg class="w-6 h-6 text-green-500 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="text-gray-700 font-medium">Immediate setup & low monthly costs</span>
                    </div>
                </div>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 pt-6">
                    <a href="{{ route('register') }}"
                        class="inline-flex items-center px-8 py-4 border border-transparent text-base font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 transition-colors duration-200">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                        Get Virtual Office Now
                    </a>
                    <a href="{{ route('pricing') }}"
                        class="inline-flex items-center px-8 py-4 border border-gray-300 text-base font-medium rounded-lg text-gray-700 bg-white hover:bg-gray-50 transition-colors duration-200">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 5H7v14h8a2 2 0 002-2V7a2 2 0 00-2-2H9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
                            </path>
                        </svg>
                        View Pricing Plans
                    </a>
                </div>

                <!-- Trust Indicators -->
                <div class="flex items-center space-x-6 pt-8">
                    <div class="flex items-center space-x-2">
                        <div class="flex -space-x-1">
                            <img src="{{ asset('assets/images/trust-badge-04.avif') }}" alt="Trust badge"
                                class="w-6 h-6 rounded-full border-2 border-white">
                            <img src="{{ asset('assets/images/trust-badge-05.avif') }}" alt="Trust badge"
                                class="w-6 h-6 rounded-full border-2 border-white">
                            <img src="{{ asset('assets/images/trust-badge-06.avif') }}" alt="Trust badge"
                                class="w-6 h-6 rounded-full border-2 border-white">
                        </div>
                        <span class="text-sm text-gray-600">Trusted by 10,000+ businesses</span>
                    </div>
                </div>
            </div>

            <!-- Right Column - Visual -->
            <div class="relative">
                <!-- Main Hero Image -->
                <div class="relative">
                    <img src="{{ asset('assets/images/electronic-hero.webp') }}" alt="Virtual Office Dashboard"
                        class="w-full h-auto rounded-2xl shadow-xl">

                    <!-- Floating Cards -->
                    <div class="absolute -top-6 -right-6 bg-white rounded-xl shadow-lg p-4">
                        <div class="flex items-center mb-2">
                            <svg class="w-5 h-5 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-sm font-medium text-gray-900">Mail Received</span>
                        </div>
                        <p class="text-xs text-gray-600">Package from Amazon</p>
                        <p class="text-xs text-gray-600">Ready for forwarding</p>
                    </div>

                    <div class="absolute -bottom-6 -left-6 bg-white rounded-xl shadow-lg p-4 border border-blue-200">
                        <div class="text-center">
                            <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-2">
                                <svg class="w-4 h-4 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                    </path>
                                </svg>
                            </div>
                            <div class="text-sm font-semibold text-gray-900">50+ Locations</div>
                            <div class="text-xs text-gray-600">Prime addresses</div>
                        </div>
                    </div>
                </div>

                <!-- Stats Bar -->
                <div class="mt-8 bg-white rounded-xl p-6 shadow-sm">
                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Virtual Office Benefits</h3>
                    <div class="space-y-3">
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Cost Savings</span>
                            <span class="text-sm font-semibold text-green-600">Up to 75%</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Setup Time</span>
                            <span class="text-sm font-semibold text-blue-600">24 Hours</span>
                        </div>
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-600">Customer Satisfaction</span>
                            <span class="text-sm font-semibold text-green-600">94%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
