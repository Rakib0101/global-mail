@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gradient-to-b from-blue-50 to-white">
        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <!-- Header -->
            <div class="text-center mb-12">
                <div class="inline-block mb-6">
                    <div class="w-16 h-16 bg-red-100 rounded-lg flex items-center justify-center mx-auto">
                        <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                        </svg>
                    </div>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Shipping
                </h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Everything related to where, how and what we ship
                </p>
            </div>

            <!-- Back to FAQs -->
            <div class="mb-8">
                <a href="{{ route('faqs') }}"
                    class="inline-flex items-center text-primary hover:text-blue-800 transition-colors">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                    Back to Help Center
                </a>
            </div>

            <!-- FAQ Items -->
            <div class="space-y-4">
                <!-- FAQ Item 1 -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200">
                    <button
                        class="w-full px-6 py-4 text-left focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset"
                        onclick="toggleFAQ(this)">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-gray-900">
                                Where do you ship packages?
                            </h3>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div class="hidden px-6 pb-4">
                        <div class="prose prose-gray max-w-none">
                            <p>We ship packages worldwide to over 200 countries and territories:</p>
                            <ul>
                                <li><strong>Domestic:</strong> All cities and territories</li>
                                <li><strong>International:</strong> Most countries worldwide</li>
                                <li><strong>Express Options:</strong> FedEx, UPS, DHL available</li>
                                <li><strong>Economy Options:</strong> USPS for cost-effective shipping</li>
                            </ul>
                            <p>Shipping rates vary by destination, weight, and service level. Use our shipping calculator
                                for accurate quotes.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200">
                    <button
                        class="w-full px-6 py-4 text-left focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset"
                        onclick="toggleFAQ(this)">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-gray-900">
                                How do I request package forwarding?
                            </h3>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div class="hidden px-6 pb-4">
                        <div class="prose prose-gray max-w-none">
                            <p>To request package forwarding:</p>
                            <ol>
                                <li>Log into your iMailVault dashboard</li>
                                <li>Go to "Mail & Packages"</li>
                                <li>Find the package you want to forward</li>
                                <li>Click "Forward Package"</li>
                                <li>Enter the destination address</li>
                                <li>Choose shipping method and service</li>
                                <li>Review and confirm your request</li>
                            </ol>
                            <p>Packages are typically processed within 1-2 business days of your request.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200">
                    <button
                        class="w-full px-6 py-4 text-left focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset"
                        onclick="toggleFAQ(this)">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-gray-900">
                                What shipping carriers do you use?
                            </h3>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div class="hidden px-6 pb-4">
                        <div class="prose prose-gray max-w-none">
                            <p>We work with all major shipping carriers:</p>
                            <ul>
                                <li><strong>USPS:</strong> Priority Mail, Ground Advantage, Express</li>
                                <li><strong>FedEx:</strong> Ground, Express, International</li>
                                <li><strong>UPS:</strong> Ground, Next Day Air, Worldwide</li>
                                <li><strong>DHL:</strong> Express, International</li>
                            </ul>
                            <p>We'll help you choose the best carrier based on your destination, timeline, and budget.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200">
                    <button
                        class="w-full px-6 py-4 text-left focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset"
                        onclick="toggleFAQ(this)">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-gray-900">
                                How much does shipping cost?
                            </h3>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div class="hidden px-6 pb-4">
                        <div class="prose prose-gray max-w-none">
                            <p>Shipping costs depend on several factors:</p>
                            <ul>
                                <li><strong>Destination:</strong> Domestic vs international</li>
                                <li><strong>Weight & Size:</strong> Package dimensions</li>
                                <li><strong>Service Level:</strong> Express vs standard</li>
                                <li><strong>Carrier:</strong> Different rates per carrier</li>
                            </ul>
                            <p>We offer competitive rates and pass carrier discounts to our customers. Use our shipping
                                calculator for instant quotes.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200">
                    <button
                        class="w-full px-6 py-4 text-left focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset"
                        onclick="toggleFAQ(this)">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-gray-900">
                                Can you consolidate multiple packages?
                            </h3>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div class="hidden px-6 pb-4">
                        <div class="prose prose-gray max-w-none">
                            <p>Yes! Package consolidation can save you money:</p>
                            <ul>
                                <li><strong>Combine packages:</strong> Up to 10 packages in one shipment</li>
                                <li><strong>Save on shipping:</strong> Pay for one package instead of multiple</li>
                                <li><strong>Reduce customs fees:</strong> Lower duty charges internationally</li>
                                <li><strong>Free consolidation:</strong> No additional fees for this service</li>
                            </ul>
                            <p>Request consolidation when you have multiple packages ready to ship to the same destination.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 6 -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200">
                    <button
                        class="w-full px-6 py-4 text-left focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset"
                        onclick="toggleFAQ(this)">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-gray-900">
                                How do I track my shipments?
                            </h3>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div class="hidden px-6 pb-4">
                        <div class="prose prose-gray max-w-none">
                            <p>Track your shipments in multiple ways:</p>
                            <ul>
                                <li><strong>Dashboard:</strong> All shipments listed in your account</li>
                                <li><strong>Email notifications:</strong> Updates sent to your email</li>
                                <li><strong>Mobile app:</strong> Track on the go</li>
                                <li><strong>Carrier websites:</strong> Direct tracking with carrier</li>
                            </ul>
                            <p>You'll receive tracking numbers immediately after your package ships.</p>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 7 -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200">
                    <button
                        class="w-full px-6 py-4 text-left focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-inset"
                        onclick="toggleFAQ(this)">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-gray-900">
                                What if my package is lost or damaged?
                            </h3>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div class="hidden px-6 pb-4">
                        <div class="prose prose-gray max-w-none">
                            <p>We're here to help with shipping issues:</p>
                            <ul>
                                <li><strong>Insurance:</strong> All packages insured up to $100</li>
                                <li><strong>Claims process:</strong> We handle carrier claims for you</li>
                                <li><strong>Replacement:</strong> We'll work to replace lost items</li>
                                <li><strong>Refunds:</strong> Shipping costs refunded for our errors</li>
                            </ul>
                            <p>Contact our support team immediately if you have any shipping issues. We'll work with the
                                carrier to resolve the problem.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Support -->
            <div class="mt-16 text-center">
                <div class="bg-white rounded-2xl p-8 shadow-sm max-w-2xl mx-auto">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Need help with shipping?</h3>
                    <p class="text-gray-600 mb-6">Our team can help you with all your shipping needs and questions.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ route('contact-us') }}"
                            class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 transition-colors duration-200">
                            Contact Support
                        </a>
                        <a href="{{ route('shipping-calculator') }}"
                            class="inline-flex items-center px-6 py-3 border border-gray-300 text-base font-medium rounded-lg text-gray-700 bg-white hover:bg-gray-50 transition-colors duration-200">
                            Shipping Calculator
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function toggleFAQ(button) {
            const content = button.nextElementSibling;
            const icon = button.querySelector('svg');

            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                icon.classList.add('rotate-45');
            } else {
                content.classList.add('hidden');
                icon.classList.remove('rotate-45');
            }
        }
    </script>
@endsection
