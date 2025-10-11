@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gradient-to-b from-blue-50 to-white">
        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <!-- Header -->
            <div class="text-center mb-12">
                <div class="inline-block mb-6">
                    <div class="w-16 h-16 bg-orange-100 rounded-lg flex items-center justify-center mx-auto">
                        <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Enterprise Features
                </h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Enterprise-grade mail infrastructure for organizations
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
                                What enterprise features are available?
                            </h3>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div class="hidden px-6 pb-4">
                        <div class="prose prose-gray max-w-none">
                            <p>Our enterprise features include:</p>
                            <ul>
                                <li><strong>API Integration:</strong> RESTful API for seamless integration</li>
                                <li><strong>Webhook Support:</strong> Real-time notifications for mail events</li>
                                <li><strong>Bulk Operations:</strong> Process multiple mail items at once</li>
                                <li><strong>Custom Workflows:</strong> Automated mail routing and processing</li>
                                <li><strong>Advanced Security:</strong> SSO, RBAC, and audit logs</li>
                                <li><strong>Dedicated Support:</strong> Priority customer service</li>
                                <li><strong>Custom Pricing:</strong> Volume discounts and flexible plans</li>
                            </ul>
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
                                How do I integrate with your API?
                            </h3>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div class="hidden px-6 pb-4">
                        <div class="prose prose-gray max-w-none">
                            <p>To integrate with our API:</p>
                            <ol>
                                <li>Contact our enterprise team for API access</li>
                                <li>Receive your API credentials and documentation</li>
                                <li>Implement authentication using your API key</li>
                                <li>Use our RESTful endpoints for mail operations</li>
                                <li>Set up webhooks for real-time notifications</li>
                            </ol>
                            <p>Our API supports common operations like retrieving mail, scanning documents, and managing
                                shipments.</p>
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
                                What security features are available for enterprises?
                            </h3>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div class="hidden px-6 pb-4">
                        <div class="prose prose-gray max-w-none">
                            <p>Enterprise security features include:</p>
                            <ul>
                                <li><strong>Single Sign-On (SSO):</strong> SAML 2.0 integration</li>
                                <li><strong>Role-Based Access Control:</strong> Granular permissions</li>
                                <li><strong>Audit Logging:</strong> Complete activity tracking</li>
                                <li><strong>Data Encryption:</strong> At rest and in transit</li>
                                <li><strong>Compliance:</strong> SOC 2, GDPR, HIPAA ready</li>
                                <li><strong>IP Whitelisting:</strong> Restrict access by IP</li>
                                <li><strong>Multi-Factor Authentication:</strong> Enhanced security</li>
                            </ul>
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
                                How do webhooks work for enterprise customers?
                            </h3>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div class="hidden px-6 pb-4">
                        <div class="prose prose-gray max-w-none">
                            <p>Webhooks provide real-time notifications for:</p>
                            <ul>
                                <li>New mail received</li>
                                <li>Mail scanned and ready</li>
                                <li>Shipments processed</li>
                                <li>Account status changes</li>
                                <li>Error notifications</li>
                            </ul>
                            <p>You can configure webhook endpoints to receive JSON payloads with event data, enabling
                                seamless integration with your existing systems.</p>
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
                                What are the pricing options for enterprise customers?
                            </h3>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div class="hidden px-6 pb-4">
                        <div class="prose prose-gray max-w-none">
                            <p>Enterprise pricing includes:</p>
                            <ul>
                                <li><strong>Volume Discounts:</strong> Reduced rates for high-volume usage</li>
                                <li><strong>Custom Plans:</strong> Tailored to your specific needs</li>
                                <li><strong>Annual Contracts:</strong> Better rates with longer commitments</li>
                                <li><strong>Unlimited Features:</strong> No caps on scanning or storage</li>
                                <li><strong>Priority Support:</strong> Dedicated account management</li>
                            </ul>
                            <p>Contact our sales team for a custom quote based on your requirements.</p>
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
                                How do I get started with enterprise features?
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
                            <p>To get started with enterprise features:</p>
                            <ol>
                                <li>Contact our enterprise sales team</li>
                                <li>Schedule a demo to see our capabilities</li>
                                <li>Discuss your specific requirements</li>
                                <li>Receive a custom proposal</li>
                                <li>Complete the onboarding process</li>
                                <li>Access your enterprise dashboard</li>
                            </ol>
                            <p>Our team will guide you through the entire setup process.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Support -->
            <div class="mt-16 text-center">
                <div class="bg-white rounded-2xl p-8 shadow-sm max-w-2xl mx-auto">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Ready to explore enterprise features?</h3>
                    <p class="text-gray-600 mb-6">Contact our enterprise team to learn more about our advanced
                        capabilities.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ route('contact-us') }}"
                            class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 transition-colors duration-200">
                            Contact Enterprise Sales
                        </a>
                        <a href="{{ route('faqs') }}"
                            class="inline-flex items-center px-6 py-3 border border-gray-300 text-base font-medium rounded-lg text-gray-700 bg-white hover:bg-gray-50 transition-colors duration-200">
                            View All FAQs
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
