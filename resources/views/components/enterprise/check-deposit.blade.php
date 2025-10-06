<!-- Check Deposit Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Column - Content -->
            <div class="space-y-8">
                <span class="text-sm font-semibold tracking-wide uppercase text-blue-500">Deposits</span>
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 leading-tight">
                    Fast, free check deposits
                </h2>
                <p class="text-xl text-gray-600 leading-relaxed">
                    Deposit checks automatically. Get digital records for compliance and accounting purposes. Shred &
                    recycle with ease. You have total control.
                </p>

                <!-- Features List -->
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
                            <h3 class="font-semibold text-gray-900 mb-2">Instant Deposit Processing</h3>
                            <p class="text-gray-600">Deposits are processed immediately upon receipt, with confirmation
                                within 2-4 hours.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div
                            class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">Digital Records & Compliance</h3>
                            <p class="text-gray-600">Automatic digital record keeping for accounting, tax, and audit
                                purposes with bank-grade security.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div
                            class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">Secure Shredding & Disposal</h3>
                            <p class="text-gray-600">Automated secure destruction of original checks after digital
                                processing, ensuring no sensitive data remains.</p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div
                            class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                            <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 15v2m8 0v-2m0-4H6a2 2 0 100-4h12a2 2 0 110 4M6 6h12a2 2 0 012 2v6a2 2 0 01-2 2H6a2 2 0 00-2-2V8a2 2 0 012-2z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">Complete Control</h3>
                            <p class="text-gray-600">Full visibility into deposit status, automatic notifications, and
                                ability to approve or dispute amounts.</p>
                        </div>
                    </div>

                    <!-- CTA Button -->
                    <div class="pt-6">
                        <a href="{{ route('electronic-check-deposit') }}"
                            class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 transition-colors duration-200">
                            Learn More About Check Deposits
                            <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7">
                                </path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Right Column - Check Deposit Demo -->
                <div class="relative">
                    <!-- Main Demo Container -->
                    <div class="bg-white rounded-2xl shadow-lg p-8">
                        <h3 class="text-xl font-semibold text-gray-900 mb-6 text-center">Electronic Check Deposit</h3>

                        <!-- Check Image -->
                        <div class="bg-gray-50 rounded-xl p-6 mb-6">
                            <img src="{{ asset('assets/images/sample-check.webp') }}" alt="Sample check for deposit"
                                class="w-full h-32 object-contain mx-auto">
                        </div>

                        <!-- Deposit Form -->
                        <div class="space-y-4">
                            <div class="bg-blue-50 rounded-lg p-4">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-sm font-medium text-gray-700">Amount</span>
                                    <span
                                        class="bg-green-100 text-green-800 text-xs px-2 py-1 rounded-full">Verified</span>
                                </div>
                                <div class="text-lg font-semibold text-gray-900">$2,450.00</div>
                            </div>

                            <div class="bg-green-50 rounded-lg p-4">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-sm font-medium text-gray-700">Date</span></span>
                                    <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <div class="text-lg font-semibold text-gray-900">Today</div>
                            </div>

                            <div class="bg-purple-50 rounded-lg p-4">
                                <div class="flex items-center justify-between mb-2">
                                    <span class="text-sm font-medium text-gray-700">Bank Account</span>
                                    <span
                                        class="text-xs text-purple-600 bg-purple-100 px-2 py-1 rounded-full">Linked</span>
                                </div>
                                <div class="text-sm font-medium text-gray-900">Business Checking - 4576</div>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex space-x-3 mt-6">
                            <button
                                class="flex-1 bg-green-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-green-700 transition-colors duration-200">
                                Deposit Now
                            </button>
                            <button
                                class="flex-1 bg-gray-100 text-gray-700 px-4 py-2 rounded-lg font-medium hover:bg-gray-200 transition-colors duration-200">
                                Review Later
                            </button>
                        </div>

                        <!-- Process Timeline -->
                        <div class="mt-6 pt-6 border-t">
                            <h4 class="text-sm font-semibold text-gray-900 mb-3">Deposit Timeline</h4>
                            <div class="space-y-2">
                                <div class="flex items-center">
                                    <div class="w-3 h-3 bg-green-500 rounded-full mr-3"></div>
                                    <span class="text-sm text-gray-600">Check received & scanned</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-3 h-3 bg-blue-500 rounded-full mr-3"></div>
                                    <spclass="text-sm text-gray-600">Amount verification (< 1 min)</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-3 h-3 bg-gray-300 rounded-full mr-3"></div>
                                    <span class="text-sm text-gray-500">Deposit confirmation (2-4 hours)</span>
                                </div>
                                <div class="flex items-center">
                                    <div class="w-3 h-3 bg-gray-300 rounded-full mr-3"></div>
                                    <span class="text-sm text-gray-500">Check destruction (automatic)</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Security Badge -->
                    <div class="absolute -top-4 -right-4 bg-white rounded-xl shadow-lg p-3 border border-green-200">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 text-green-600 mr-2" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 }
                        </svg>
                        <span class="text-sm font-semibold text-gray-900">Bank-Secure</span>
                    </div>
                    <p class="text-xs text-gray-600 mt-1">SOC2 Compliant</p>
                </div>
            </div>
        </div>

        <!-- Benefits Grid -->
        <div class="mt-20 grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-xl shadow-sm text-center">
                <div class="w-16 h-16 bg-green-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d=" M13 10V3L4
                                    14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Lightning Fast</h3>
                        <p class="text-gray-600">Deposits processed in minutes, not days. Get your money faster than
                            traditional banking.</p>
                    </div>

                    <div class="bg-white p-8 rounded-xl shadow-sm text-center">
                        <div class="w-16 h-16 bg-blue-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2">
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Zero Fees</h3>
                        <p class="text-gray-600">No deposit fees, no hidden charges. Keep 100% of your money with
                            transparent pricing.</p>
                    </div>

                    <div class="bg-white p-8 rounded-xl shadow-sm text-center">
                        <div class="w-16 h-16 bg-purple-100 rounded-2xl flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                </path>
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-4">Enterprise Security</h3>
                        <p class="text-gray-600">Bank-grade encryption and fraud protection ensure your deposits are
                            always secure.</p>
                    </div>
                </div>

                <!-- Integration Partners -->
                <div class="mt-16 text-center">
                    <h3 class="text-2xl font-bold text-gray-900 mb-8">Integrated with Leading Banks</h3>
                    <div class="flex items-center justify-center space-x-8 opacity-60">
                        <img src="{{ asset('assets/images/banks/chase.svg') }}" alt="Chase Bank" class="h-8">
                        <img src="{{ asset('assets/images/banks/wells-fargo.svg') }}" alt="Wells Fargo"
                            class="h-8">
                        <img src="{{ asset('assets/images/banks/bank-america.svg') }}" alt="Bank of America"
                            class="h-8">
                        <img src="{{ asset('assets/images/banks/citi.svg') }}" alt="Citi Bank" class="h-8">
                        <img src="{{ asset('asset/images/banks/us-bank.svg') }}" alt="US Bank" class="h-8">
                    </div>
                    <p class="text-gray-600 mt-4">Trusted by thousands of businesses for their check deposit needs</p>
                </div>
            </div>
</section>
