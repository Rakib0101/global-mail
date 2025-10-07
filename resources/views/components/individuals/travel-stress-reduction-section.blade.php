<!-- Travel Stress Reduction Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Column - Visual -->
            <div class="relative">
                <!-- Happy Travelers Image -->
                <div class="bg-white rounded-2xl shadow-lg p-8">
                    <img src="{{ asset('assets/images/happy-travelers.webp') }}" alt="Happy couple traveling together"
                        class="w-full h-80 object-cover rounded-xl mb-6">

                    <!-- Mobile Interface Overlay -->
                    <div class="bg-gradient-to-br from-green-50 to-blue-50 rounded-xl p-6">
                        <div class="flex items-center justify-between mb-4">
                            <img src="{{ asset('assets/icons/mail-app.svg') }}" alt="Mail App" class="w-8 h-8">
                            <div class="text-sm font-medium text-gray-900">iMailVault</div>
                            <div class="flex items-center">
                                <div class="w-2 h-2 bg-green-500 rounded-full mr-1"></div>
                                <span class="text-xs text-green-600">Online</span>
                            </div>
                        </div>

                        <!-- Mail Status -->
                        <div class="space-y-2">
                            <div class="bg-white p-3 rounded-lg shadow-sm">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm font-medium">Utility Bill</span>
                                    <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <p class="text-xs text-gray-600 mt-1">Paid automatically</p>
                            </div>

                            <div class="bg-white p-3 rounded-lg shadow-sm">
                                <div class="flex items-center justify-between">
                                    <span class="text-sm font-medium">Package Notification</span>
                                    <svg class="w-4 h-4 text-blue-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                    </svg>
                                </div>
                                <p class="text-xs text-gray-600 mt-1">Forward to Barcelona</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Stress-Free Badge -->
                <div class="absolute -bottom-6 -right-6 bg-white rounded-xl shadow-lg p-4 border border-green-200">
                    <div class="flex items-center">
                        <svg class="w-6 h-6 text-green-500 mr-2" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <div>
                            <div class="text-sm font-semibold text-gray-900">Stress-Free Traveling</div>
                            <div class="text-xs text-gray-600">Mail handled automatically</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column - Content -->
            <div class="space-y-8">
                <span class="text-sm font-semibold tracking-wide uppercase text-green-500">Peace of Mind</span>
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 leading-tight">
                    Reduce stress while traveling
                </h2>
                <p class="text-xl text-gray-600 leading-relaxed">
                    Focus on your adventures instead of worrying about missed mail. Our automated mail handling ensures
                    nothing important gets lost or delayed, no matter how long you're away or where you're exploring.
                </p>

                <!-- Benefits List -->
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div
                            class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">Never Miss Important Mail</h3>
                            <p class="text-gray-600">Automatic scanning means you see urgent mail first, no matter where
                                you are in the world.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div
                            class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">Instant Notifications</h3>
                            <p class="text-gray-600">Get alerts on your phone for bills, packages, and critical
                                documents so you can act immediately.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div
                            class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">Smart Package Forwarding</h3>
                            <p class="text-gray-600">Packages automatically forwarded to your current location or stored
                                safely until you return.</p>
                        </div>
                    </div>
                </div>

                <!-- Travel Scenarios -->
                <div class="bg-white rounded-xl p-6 shadow-sm">
                    <h4 class="font-semibold text-gray-900 mb-4">Perfect for Travel Scenarios</h4>
                    <div class="space-y-3">
                        <div class="flex items-center text-sm">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">Extended backpacking trips across multiple countries</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">Digital nomad lifestyle working from different cities</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 01-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">Study abroad programs and international assignments</span>
                        </div>
                        <div class="flex items-center text-sm">
                            <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="text-gray-700">Retirement living abroad with family visits</span>
                        </div>
                    </div>
                </div>

                <!-- CTA Button -->
                <div class="pt-6">
                    <a href="{{ route('register') }}"
                        class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-lg text-white bg-green-600 hover:bg-green-700 transition-colors duration-200">
                        Start Stress-Free Travel
                        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- Travel Statistics -->
        <div class="mt-20 bg-green-50 rounded-2xl p-8">
            <h3 class="text-2xl font-bold text-gray-900 text-center mb-8">Travel With Confidence</h3>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                <div class="text-center">
                    <div class="text-3xl font-bold text-green-600 mb-2">72hrs</div>
                    <div class="text-gray-600">Average forwarding time</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-blue-600 mb-2">190+</div>
                    <div class="text-gray-600">Countries supported</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-purple-600 mb-2">$0</div>
                    <div class="text-gray-600">Storage fees</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl font-bold text-orange-600 mb-2">24/7</div>
                    <div class="text-gray-600">Travel support</div>
                </div>
            </div>
        </div>
    </div>
</section>
