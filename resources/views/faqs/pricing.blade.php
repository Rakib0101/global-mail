@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gradient-to-b from-blue-50 to-white">
        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <!-- Header -->
            <div class="text-center mb-12">
                <div class="inline-block mb-6">
                    <div class="w-16 h-16 bg-yellow-100 rounded-lg flex items-center justify-center mx-auto">
                        <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1" />
                        </svg>
                    </div>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Plans and Pricing
                </h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Details about our plans, closing your account and custom plans
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
                                What plans do you offer?
                            </h3>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div class="hidden px-6 pb-4">
                        <div class="prose prose-gray max-w-none">
                            <p>We offer several plans to meet different needs:</p>
                            <ul>
                                <li><strong>Basic Plan:</strong> $9.95/month - Perfect for individuals</li>
                                <li><strong>Professional Plan:</strong> $19.95/month - Ideal for small businesses</li>
                                <li><strong>Business Plan:</strong> $39.95/month - For growing companies</li>
                                <li><strong>Enterprise Plan:</strong> Custom pricing - For large organizations</li>
                            </ul>
                            <p>All plans include unlimited mail storage, basic scanning, and our mobile app. Higher plans
                                include additional features like priority support and advanced integrations.</p>
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
                                Do you offer annual billing discounts?
                            </h3>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div class="hidden px-6 pb-4">
                        <div class="prose prose-gray max-w-none">
                            <p>Yes! We offer significant discounts for annual billing:</p>
                            <ul>
                                <li><strong>Basic Plan:</strong> Save 20% with annual billing</li>
                                <li><strong>Professional Plan:</strong> Save 25% with annual billing</li>
                                <li><strong>Business Plan:</strong> Save 30% with annual billing</li>
                            </ul>
                            <p>Annual billing also includes additional perks like priority support and bonus storage
                                credits.</p>
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
                                What payment methods do you accept?
                            </h3>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div class="hidden px-6 pb-4">
                        <div class="prose prose-gray max-w-none">
                            <p>We accept the following payment methods:</p>
                            <ul>
                                <li>Credit cards (Visa, MasterCard, American Express, Discover)</li>
                                <li>Debit cards</li>
                                <li>PayPal</li>
                                <li>Bank transfers (for enterprise customers)</li>
                                <li>ACH payments</li>
                            </ul>
                            <p>All payments are processed securely through our PCI-compliant payment processor.</p>
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
                                Can I change my plan at any time?
                            </h3>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div class="hidden px-6 pb-4">
                        <div class="prose prose-gray max-w-none">
                            <p>Yes, you can upgrade or downgrade your plan at any time:</p>
                            <ul>
                                <li><strong>Upgrades:</strong> Take effect immediately with prorated billing</li>
                                <li><strong>Downgrades:</strong> Take effect at your next billing cycle</li>
                                <li><strong>No fees:</strong> Plan changes are free</li>
                                <li><strong>Flexible:</strong> Change as often as needed</li>
                            </ul>
                            <p>You can manage your plan changes directly from your account dashboard.</p>
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
                                How do I cancel my account?
                            </h3>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div class="hidden px-6 pb-4">
                        <div class="prose prose-gray max-w-none">
                            <p>To cancel your account:</p>
                            <ol>
                                <li>Log into your account dashboard</li>
                                <li>Go to "Account Settings"</li>
                                <li>Click "Billing"</li>
                                <li>Select "Cancel Account"</li>
                                <li>Follow the cancellation process</li>
                                <li>Confirm your cancellation</li>
                            </ol>
                            <p><strong>Important:</strong> Cancellation takes effect at the end of your current billing
                                period. You'll retain access to your account until then.</p>
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
                                Do you offer refunds?
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
                            <p>Our refund policy:</p>
                            <ul>
                                <li><strong>30-day guarantee:</strong> Full refund within 30 days of signup</li>
                                <li><strong>Prorated refunds:</strong> For unused portions of annual plans</li>
                                <li><strong>No refunds:</strong> For monthly plans after 30 days</li>
                                <li><strong>Processing time:</strong> 5-10 business days</li>
                            </ul>
                            <p>Refunds are processed to the original payment method. Contact support for assistance with
                                refund requests.</p>
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
                                Are there any hidden fees?
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
                            <p>We believe in transparent pricing with no hidden fees:</p>
                            <ul>
                                <li><strong>Setup fee:</strong> None</li>
                                <li><strong>Cancellation fee:</strong> None</li>
                                <li><strong>Plan change fee:</strong> None</li>
                                <li><strong>Additional charges:</strong> Only for optional services like express shipping
                                </li>
                            </ul>
                            <p>Your monthly fee covers all basic services. Additional charges only apply to premium services
                                you specifically request.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Support -->
            <div class="mt-16 text-center">
                <div class="bg-white rounded-2xl p-8 shadow-sm max-w-2xl mx-auto">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Have questions about pricing?</h3>
                    <p class="text-gray-600 mb-6">Our team can help you choose the right plan for your needs.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ route('contact-us') }}"
                            class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 transition-colors duration-200">
                            Contact Support
                        </a>
                        <a href="{{ route('pricing') }}"
                            class="inline-flex items-center px-6 py-3 border border-gray-300 text-base font-medium rounded-lg text-gray-700 bg-white hover:bg-gray-50 transition-colors duration-200">
                            View Pricing Plans
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
