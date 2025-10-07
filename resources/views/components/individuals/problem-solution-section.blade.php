<!-- Problem Solution Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Column - Problem Image -->
            <div class="relative">
                <!-- Main Problem Image -->
                <div class="bg-gray-50 rounded-2xl p-8">
                    <img src="{{ asset('assets/images/hero-right.avif') }}"
                        alt="Mailbox with return to sender envelope" class="w-full h-80 object-cover rounded-xl">
                </div>

                <!-- Trust Indicators -->
                <div class="absolute -bottom-4 -right-4 bg-white rounded-xl shadow-lg p-4 border border-gray-200">
                    <div class="flex items-center">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-3 h-3 text-red-500 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                        @endfor
                    </div>
                </div>
            </div>

            <!-- Right Column - Solution Content -->
            <div class="space-y-8">
                <!-- Main Heading -->
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 leading-tight">
                    USPS wasn't built for a global life. We are.
                </h2>

                <!-- Description -->
                <p class="text-xl text-gray-600 leading-relaxed">
                    Traditional mail services were designed for a stationary lifestyle. When you're living abroad,
                    traveling frequently, or embracing the digital nomad lifestyle, you need a mail solution that keeps
                    up with your global mobility.
                </p>

                <!-- Problem Statement -->
                <div class="bg-red-50 border border-red-200 rounded-xl p-6">
                    <div class="flex items-start">
                        <svg class="w-6 h-6 text-red-500 mt-1 mr-3 flex-shrink-0" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-2L13.732 4c-.77-.833-1.728-.833-2.498 0L4.316 15c-.77.333.192 2 1.732 2z">
                            </path>
                        </svg>
                        <div>
                            <h3 class="font-semibold text-red-900 mb-2">The Traditional Mail Problem</h3>
                            <ul class="space-y-2 text-red-800">
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-red-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    Mail gets lost or returned when you move
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-red-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 8 8 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 8.586l1.293-1.293a1 1 0 001.414-1.414L10 8.586 8.707 7.293z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    No way to access important documents remotely
                                </li>
                                <li class="flex items-center">
                                    <svg class="w-4 h-4 text-red-500 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    Online shopping becomes expensive and complicated
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Solution Benefits -->
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v9a2 2 0 002 2z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-2">Permanent U.S. Address</h4>
                                <p class="text-gray-600">Keep your U.S. address forever, no matter where in the world
                                    you live or travel.</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div
                                class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                                    </path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900 mb-2">Digital Mail Scanning</h4>
                                <p class="text-gray-600">Every piece of mail is scanned and uploaded for instant access
                                    from anywhere.</p>
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
                                <h4 class="font-semibold text-gray-900 mb-2">Smart Package Forwarding</h4>
                                <p class="text-gray-600">Forward packages worldwide with optional consolidation for
                                    maximum savings.</p>
                            </div>
                        </div>
                    </div>

                    <!-- CTA Button -->
                    <div class="pt-6">
                        <a href="{{ route('contact-us') }}"
                            class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 transition-colors duration-200">
                            Learn More
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Global Coverage Stats -->
            <div class="col-span-2 mt-20 bg-gradient-to-r from-blue-50 to-green-50 rounded-2xl p-8">
                <h3 class="text-2xl font-bold text-gray-900 text-center mb-8">Built for the Global Lifestyle</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-blue-600 mb-2">190+</div>
                        <div class="text-gray-600 mb-2">Countries Served</div>
                        <p class="text-sm text-gray-500">Package forwarding to virtually anywhere in the world</p>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-green-600 mb-2">100K+</div>
                        <div class="text-gray-600 mb-2">Happy Customers</div>
                        <p class="text-sm text-gray-500">Expats, travelers, and digital nomads worldwide</p>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-purple-600 mb-2">24/7</div>
                        <div class="text-gray-600 mb-2">Mail Access</div>
                        <p class="text-sm text-gray-500">Check your mail anytime, from anywhere in the world</p>
                    </div>
                </div>

                <!-- Regional Highlights -->
                <div class="mt-12 border-t pt-8">
                    <div class="grid grid-cols-2 md:grid-cols-6 gap-6 text-center">
                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <div class="w-8 h-8 bg-blue-600 rounded mx-auto mb-2 flex items-center justify-center">
                                <span class="text-white text-xs font-bold">UK</span>
                            </div>
                            <div class="text-sm font-semibold text-gray-900">UK</div>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <div class="w-8 h-8 bg-red-600 rounded mx-auto mb-2 flex items-center justify-center">
                                <span class="text-white text-xs font-bold">CA</span>
                            </div>
                            <div class="text-sm font-semibold text-gray-900">Canada</div>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <div class="w-8 h-8 bg-green-600 rounded mx-auto mb-2 flex items-center justify-center">
                                <span class="text-white text-xs font-bold">AU</span>
                            </div>
                            <div class="text-sm font-semibold text-gray-900">Australia</div>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <div class="w-8 h-8 bg-orange-600 rounded mx-auto mb-2 flex items-center justify-center">
                                <span class="text-white text-xs font-bold">NL</span>
                            </div>
                            <div class="text-sm font-semibold text-gray-900">Netherlands</div>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-sm">
                            <div class="w-8 h-8 bg-yellow-600 rounded mx-auto mb-2 flex items-center justify-center">
                                <span class="text-white text-xs font-bold">DE</span>
                            </div>
                            <div class="text-sm font-semibold text-gray-900">Germany</div>
                        </div>
                        <div class="bg-white p-4 rounded-lg shadow-lg">
                            <div class="w-8 h-8 bg-red-500 rounded mx-auto mb-2 flex items-center justify-center">
                                <span class="text-white text-xs font-bold">JP</span>
                            </div>
                            <div class="text-sm font-semibold text-gray-900">Japan</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
