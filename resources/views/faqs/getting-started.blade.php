@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gray-50">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <!-- Breadcrumb -->
            <nav class="flex mb-8" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="/faqs"
                            class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-primary">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                                </path>
                            </svg>
                            Help Center
                        </a>
                    </li>
                    <li>
                        <div class="flex items-center">
                            <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Getting Started</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Header -->
            <div class="text-center mb-12">
                <div class="flex items-center justify-center mb-4">
                    <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center">
                        <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                        </svg>
                    </div>
                </div>
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Getting Started
                </h1>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Everything you need to know to begin your mail management journey with US Global Mail
                </p>
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
                                How do I sign up for US Global Mail?
                            </h3>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div class="hidden px-6 pb-4">
                        <div class="prose prose-gray max-w-none">
                            <p class="text-gray-700 mb-4">
                                Signing up for US Global Mail is quick and easy. Follow these steps:
                            </p>
                            <ol class="list-decimal list-inside space-y-2 text-gray-700">
                                <li>Visit our website and click the "Get Started" button</li>
                                <li>Choose your preferred plan (Basic, Premium, or Enterprise)</li>
                                <li>Fill out the registration form with your personal information</li>
                                <li>Complete the identity verification process</li>
                                <li>Submit Form 1583 (required by USPS)</li>
                                <li>Receive your virtual mailbox address</li>
                            </ol>
                            <p class="text-gray-700 mt-4">
                                The entire process typically takes 2-3 business days for approval.
                            </p>
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
                                What documents do I need to provide?
                            </h3>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div class="hidden px-6 pb-4">
                        <div class="prose prose-gray max-w-none">
                            <p class="text-gray-700 mb-4">
                                To comply with USPS regulations, you'll need to provide the following documents:
                            </p>
                            <ul class="list-disc list-inside space-y-2 text-gray-700">
                                <li><strong>Valid government-issued photo ID:</strong> Driver's license, passport, or state
                                    ID</li>
                                <li><strong>Proof of address:</strong> Utility bill, bank statement, or lease agreement</li>
                                <li><strong>Form 1583:</strong> USPS authorization form (we'll provide this)</li>
                                <li><strong>Additional verification:</strong> May include video call or additional documents
                                </li>
                            </ul>
                            <p class="text-gray-700 mt-4">
                                All documents must be current and clearly legible. We accept digital copies for initial
                                verification.
                            </p>
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
                                How long does it take to get approved?
                            </h3>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div class="hidden px-6 pb-4">
                        <div class="prose prose-gray max-w-none">
                            <p class="text-gray-700 mb-4">
                                Our approval process is designed to be fast and efficient:
                            </p>
                            <ul class="list-disc list-inside space-y-2 text-gray-700">
                                <li><strong>Initial review:</strong> 1-2 business days</li>
                                <li><strong>Document verification:</strong> 1-2 business days</li>
                                <li><strong>USPS processing:</strong> 1-3 business days</li>
                                <li><strong>Total time:</strong> Typically 3-5 business days</li>
                            </ul>
                            <p class="text-gray-700 mt-4">
                                You'll receive email notifications at each step of the process. Expedited processing is
                                available for enterprise customers.
                            </p>
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
                                Can I use my virtual mailbox address for business?
                            </h3>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div class="hidden px-6 pb-4">
                        <div class="prose prose-gray max-w-none">
                            <p class="text-gray-700 mb-4">
                                Yes, you can use your virtual mailbox address for business purposes, but there are some
                                important considerations:
                            </p>
                            <ul class="list-disc list-inside space-y-2 text-gray-700">
                                <li><strong>Business registration:</strong> Many states allow virtual addresses for business
                                    registration</li>
                                <li><strong>Banking:</strong> Some banks accept virtual addresses for business accounts</li>
                                <li><strong>Legal requirements:</strong> Check your state's specific requirements</li>
                                <li><strong>Tax purposes:</strong> May be used for tax filing in some cases</li>
                            </ul>
                            <p class="text-gray-700 mt-4">
                                We recommend consulting with a legal professional or accountant for specific business use
                                cases.
                            </p>
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
                                What happens to my mail while I'm waiting for approval?
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
                            <p class="text-gray-700 mb-4">
                                During the approval process, any mail sent to your virtual address will be held securely:
                            </p>
                            <ul class="list-disc list-inside space-y-2 text-gray-700">
                                <li><strong>Secure storage:</strong> All mail is stored in our secure facility</li>
                                <li><strong>No additional fees:</strong> No charge for holding mail during approval</li>
                                <li><strong>Immediate access:</strong> Once approved, you can access all held mail</li>
                                <li><strong>Notification:</strong> You'll be notified when mail arrives</li>
                            </ul>
                            <p class="text-gray-700 mt-4">
                                We recommend waiting for approval before having important mail sent to your virtual address.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Back to Help Center -->
            <div class="mt-12 text-center">
                <a href="/faqs" class="inline-flex items-center text-primary hover:text-blue-800 font-medium">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                    </svg>
                    Back to Help Center
                </a>
            </div>
        </div>
    </div>

    <script>
        function toggleFAQ(button) {
            const content = button.nextElementSibling;
            const icon = button.querySelector('svg');

            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden');
                icon.classList.add('rotate-180');
            } else {
                content.classList.add('hidden');
                icon.classList.remove('rotate-180');
            }
        }
    </script>
@endsection
