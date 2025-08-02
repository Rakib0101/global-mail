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
                            <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2">Mailbox Features</span>
                        </div>
                    </li>
                </ol>
            </nav>

            <!-- Header -->
            <div class="text-center mb-12">
                <div class="flex items-center justify-center mb-4">
                    <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                </div>
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Mailbox Features
                </h1>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    All about scanning, shipping, storage, forwarding, shredding your mail, plus check deposits
                </p>
            </div>

            <!-- FAQ Items -->
            <div class="space-y-4">
                <!-- FAQ Item 1 -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200">
                    <button
                        class="w-full px-6 py-4 text-left focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-inset"
                        onclick="toggleFAQ(this)">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-gray-900">
                                How does mail scanning work?
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
                                Our mail scanning service allows you to view your mail digitally before deciding what to do
                                with it:
                            </p>
                            <ul class="list-disc list-inside space-y-2 text-gray-700">
                                <li><strong>Automatic scanning:</strong> All mail is scanned within 24 hours of receipt</li>
                                <li><strong>High-quality images:</strong> Full-color scans at 300 DPI resolution</li>
                                <li><strong>Multiple pages:</strong> All pages of multi-page documents are scanned</li>
                                <li><strong>Digital access:</strong> View scans through our web portal or mobile app</li>
                                <li><strong>Email notifications:</strong> Get notified when new scans are available</li>
                            </ul>
                            <p class="text-gray-700 mt-4">
                                You can choose to have all mail scanned automatically or select specific items for scanning.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200">
                    <button
                        class="w-full px-6 py-4 text-left focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-inset"
                        onclick="toggleFAQ(this)">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-gray-900">
                                What shipping options are available?
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
                                We offer multiple shipping options to meet your needs:
                            </p>
                            <ul class="list-disc list-inside space-y-2 text-gray-700">
                                <li><strong>USPS Priority Mail:</strong> 2-3 business days, included in most plans</li>
                                <li><strong>USPS Express Mail:</strong> 1-2 business days, additional fee</li>
                                <li><strong>FedEx Ground:</strong> 1-7 business days, competitive rates</li>
                                <li><strong>FedEx Express:</strong> Overnight delivery available</li>
                                <li><strong>International shipping:</strong> Available to most countries</li>
                            </ul>
                            <p class="text-gray-700 mt-4">
                                Shipping costs vary by service and destination. You can compare rates in your dashboard
                                before shipping.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200">
                    <button
                        class="w-full px-6 py-4 text-left focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-inset"
                        onclick="toggleFAQ(this)">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-gray-900">
                                How do check deposits work?
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
                                Our electronic check deposit service makes it easy to deposit checks remotely:
                            </p>
                            <ol class="list-decimal list-inside space-y-2 text-gray-700">
                                <li><strong>Mail the check:</strong> Send checks to your virtual mailbox address</li>
                                <li><strong>Automatic processing:</strong> We scan and process checks within 24 hours</li>
                                <li><strong>Digital deposit:</strong> Checks are deposited electronically to your linked
                                    bank account</li>
                                <li><strong>Confirmation:</strong> You receive email confirmation of the deposit</li>
                                <li><strong>Secure storage:</strong> Original checks are stored securely for 7 years</li>
                            </ol>
                            <p class="text-gray-700 mt-4">
                                This service is available on Premium and Enterprise plans. You must link a US bank account
                                to use this feature.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200">
                    <button
                        class="w-full px-6 py-4 text-left focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-inset"
                        onclick="toggleFAQ(this)">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-gray-900">
                                Can I forward mail to multiple addresses?
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
                                Yes, you can set up multiple forwarding addresses and rules:
                            </p>
                            <ul class="list-disc list-inside space-y-2 text-gray-700">
                                <li><strong>Multiple addresses:</strong> Add up to 5 forwarding addresses</li>
                                <li><strong>Conditional forwarding:</strong> Set rules based on sender or mail type</li>
                                <li><strong>Frequency options:</strong> Forward immediately, weekly, or monthly</li>
                                <li><strong>International forwarding:</strong> Available to most countries</li>
                                <li><strong>Cost control:</strong> Set spending limits for forwarding</li>
                            </ul>
                            <p class="text-gray-700 mt-4">
                                You can manage all forwarding rules through your dashboard. Changes take effect within 24
                                hours.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="bg-white rounded-xl shadow-sm border border-gray-200">
                    <button
                        class="w-full px-6 py-4 text-left focus:outline-none focus:ring-2 focus:ring-purple-500 focus:ring-inset"
                        onclick="toggleFAQ(this)">
                        <div class="flex items-center justify-between">
                            <h3 class="text-lg font-semibold text-gray-900">
                                How does mail shredding work?
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
                                Our secure shredding service helps protect your privacy:
                            </p>
                            <ul class="list-disc list-inside space-y-2 text-gray-700">
                                <li><strong>Cross-cut shredding:</strong> Documents are shredded into small, unreadable
                                    pieces</li>
                                <li><strong>Secure facility:</strong> Shredding is done in our secure, monitored facility
                                </li>
                                <li><strong>Certified destruction:</strong> We provide certificates of destruction</li>
                                <li><strong>Recycling:</strong> Shredded material is recycled responsibly</li>
                                <li><strong>Bulk shredding:</strong> Available for large quantities of mail</li>
                            </ul>
                            <p class="text-gray-700 mt-4">
                                You can request shredding for individual items or set up automatic shredding for specific
                                types of mail.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Back to Help Center -->
            <div class="mt-12 text-center">
                <a href="/faqs" class="inline-flex items-center text-purple-600 hover:text-purple-800 font-medium">
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
