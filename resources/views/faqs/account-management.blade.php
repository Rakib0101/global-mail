@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gradient-to-b from-blue-50 to-white">
        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <!-- Header -->
            <div class="text-center mb-12">
                <div class="inline-block mb-6">
                    <div class="w-16 h-16 bg-indigo-100 rounded-lg flex items-center justify-center mx-auto">
                        <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                    </div>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Account Management
                </h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    All the "how-do-I's" in using your virtual mailbox
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
                                How do I update my account information?
                            </h3>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div class="hidden px-6 pb-4">
                        <div class="prose prose-gray max-w-none">
                            <p>To update your account information:</p>
                            <ol>
                                <li>Log into your iMailVault dashboard</li>
                                <li>Go to "Account Settings"</li>
                                <li>Click "Edit Profile"</li>
                                <li>Update the information you need to change</li>
                                <li>Save your changes</li>
                            </ol>
                            <p><strong>Important:</strong> Some changes may require verification or additional
                                documentation.</p>
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
                                How do I change my password?
                            </h3>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div class="hidden px-6 pb-4">
                        <div class="prose prose-gray max-w-none">
                            <p>To change your password:</p>
                            <ol>
                                <li>Log into your account</li>
                                <li>Go to "Account Settings"</li>
                                <li>Click "Security"</li>
                                <li>Select "Change Password"</li>
                                <li>Enter your current password</li>
                                <li>Enter your new password twice</li>
                                <li>Click "Update Password"</li>
                            </ol>
                            <p>Your password should be at least 8 characters long and include a mix of letters, numbers, and
                                symbols.</p>
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
                                How do I add additional recipients to my account?
                            </h3>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div class="hidden px-6 pb-4">
                        <div class="prose prose-gray max-w-none">
                            <p>To add additional recipients:</p>
                            <ol>
                                <li>Log into your dashboard</li>
                                <li>Go to "Account Settings"</li>
                                <li>Click "Additional Recipients"</li>
                                <li>Click "Add New Recipient"</li>
                                <li>Fill in their information</li>
                                <li>Upload required identification documents</li>
                                <li>Submit for verification</li>
                            </ol>
                            <p>Each additional recipient must provide valid identification and complete Form 1583.</p>
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
                                How do I update my billing information?
                            </h3>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div class="hidden px-6 pb-4">
                        <div class="prose prose-gray max-w-none">
                            <p>To update your billing information:</p>
                            <ol>
                                <li>Go to "Account Settings"</li>
                                <li>Click "Billing"</li>
                                <li>Select "Payment Methods"</li>
                                <li>Click "Update" next to your current payment method</li>
                                <li>Enter your new billing information</li>
                                <li>Save changes</li>
                            </ol>
                            <p>You can also add multiple payment methods for convenience.</p>
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
                                How do I download my account statements?
                            </h3>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div class="hidden px-6 pb-4">
                        <div class="prose prose-gray max-w-none">
                            <p>To download your account statements:</p>
                            <ol>
                                <li>Log into your dashboard</li>
                                <li>Go to "Billing"</li>
                                <li>Click "Statements"</li>
                                <li>Select the date range you want</li>
                                <li>Click "Download PDF"</li>
                            </ol>
                            <p>You can download statements for any period, and they're available for up to 2 years.</p>
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
                                How do I enable two-factor authentication?
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
                            <p>To enable two-factor authentication (2FA):</p>
                            <ol>
                                <li>Go to "Account Settings"</li>
                                <li>Click "Security"</li>
                                <li>Find "Two-Factor Authentication"</li>
                                <li>Click "Enable 2FA"</li>
                                <li>Scan the QR code with your authenticator app</li>
                                <li>Enter the verification code</li>
                                <li>Save your backup codes</li>
                            </ol>
                            <p>We recommend using Google Authenticator or Authy for the best security.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Support -->
            <div class="mt-16 text-center">
                <div class="bg-white rounded-2xl p-8 shadow-sm max-w-2xl mx-auto">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Need help with account management?</h3>
                    <p class="text-gray-600 mb-6">Our support team can help you manage your account settings and
                        preferences.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ route('contact-us') }}"
                            class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 transition-colors duration-200">
                            Contact Support
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
