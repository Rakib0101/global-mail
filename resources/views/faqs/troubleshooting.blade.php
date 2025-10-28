@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gradient-to-b from-blue-50 to-white">
        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <!-- Header -->
            <div class="text-center mb-12">
                <div class="inline-block mb-6">
                    <div class="w-16 h-16 bg-gray-100 rounded-lg flex items-center justify-center mx-auto">
                        <svg class="w-8 h-8 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                </div>
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Troubleshooting
                </h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Solutions for common issues and technical problems
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
                                I can't log into my account
                            </h3>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div class="hidden px-6 pb-4 overflow-hidden" style="max-height: 0; opacity: 0;">
                        <div class="prose prose-gray max-w-none">
                            <p>If you can't log into your account, try these steps:</p>
                            <ol>
                                <li><strong>Check your credentials:</strong> Ensure email and password are correct</li>
                                <li><strong>Reset password:</strong> Use "Forgot Password" link</li>
                                <li><strong>Clear browser cache:</strong> Clear cookies and cache</li>
                                <li><strong>Try different browser:</strong> Test with Chrome, Firefox, or Safari</li>
                                <li><strong>Disable extensions:</strong> Turn off ad blockers temporarily</li>
                                <li><strong>Check internet connection:</strong> Ensure stable connection</li>
                            </ol>
                            <p>If problems persist, contact our support team for assistance.</p>
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
                                My mail isn't showing up in the dashboard
                            </h3>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div class="hidden px-6 pb-4 overflow-hidden" style="max-height: 0; opacity: 0;">
                        <div class="prose prose-gray max-w-none">
                            <p>If your mail isn't appearing, check these common causes:</p>
                            <ul>
                                <li><strong>Processing time:</strong> Mail takes 2-4 hours to appear</li>
                                <li><strong>Wrong address:</strong> Verify sender used correct address</li>
                                <li><strong>Account status:</strong> Ensure account is active and paid</li>
                                <li><strong>Mail volume:</strong> High volume may cause delays</li>
                                <li><strong>Holiday delays:</strong> USPS delays during holidays</li>
                            </ul>
                            <p>If mail is missing after 24 hours, contact support with tracking information.</p>
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
                                Scanned documents are blurry or unreadable
                            </h3>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div class="hidden px-6 pb-4 overflow-hidden" style="max-height: 0; opacity: 0;">
                        <div class="prose prose-gray max-w-none">
                            <p>If scans are unclear, we can help:</p>
                            <ul>
                                <li><strong>Request rescan:</strong> We'll rescan at higher resolution</li>
                                <li><strong>Check original:</strong> Sometimes originals are damaged</li>
                                <li><strong>Different format:</strong> Request PDF instead of JPEG</li>
                                <li><strong>Color vs B&W:</strong> Try color scanning for better clarity</li>
                            </ul>
                            <p>Contact support to request a rescan - there's no additional charge for this service.</p>
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
                                I'm not receiving email notifications
                            </h3>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div class="hidden px-6 pb-4 overflow-hidden" style="max-height: 0; opacity: 0;">
                        <div class="prose prose-gray max-w-none">
                            <p>To fix email notification issues:</p>
                            <ol>
                                <li><strong>Check spam folder:</strong> Emails may be filtered</li>
                                <li><strong>Whitelist our domain:</strong> Add @imailvault.com to safe senders</li>
                                <li><strong>Update email address:</strong> Ensure correct email in account</li>
                                <li><strong>Check notification settings:</strong> Verify notifications are enabled</li>
                                <li><strong>Contact support:</strong> We can resend notifications</li>
                            </ol>
                            <p>We can also send notifications via SMS if email isn't working.</p>
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
                                My package forwarding request failed
                            </h3>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div class="hidden px-6 pb-4 overflow-hidden" style="max-height: 0; opacity: 0;">
                        <div class="prose prose-gray max-w-none">
                            <p>Common reasons for forwarding failures:</p>
                            <ul>
                                <li><strong>Invalid address:</strong> Check destination address format</li>
                                <li><strong>Restricted items:</strong> Some items can't be shipped internationally</li>
                                <li><strong>Payment issues:</strong> Ensure payment method is valid</li>
                                <li><strong>Package size:</strong> Oversized packages may need special handling</li>
                                <li><strong>Customs restrictions:</strong> Destination country restrictions</li>
                            </ul>
                            <p>Contact support for specific error messages and resolution steps.</p>
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
                                The mobile app isn't working properly
                            </h3>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div class="hidden px-6 pb-4 overflow-hidden" style="max-height: 0; opacity: 0;">
                        <div class="prose prose-gray max-w-none">
                            <p>To fix mobile app issues:</p>
                            <ol>
                                <li><strong>Update app:</strong> Install latest version from app store</li>
                                <li><strong>Restart app:</strong> Close and reopen the application</li>
                                <li><strong>Restart device:</strong> Power cycle your phone/tablet</li>
                                <li><strong>Check internet:</strong> Ensure stable WiFi or cellular connection</li>
                                <li><strong>Clear cache:</strong> Clear app cache in device settings</li>
                                <li><strong>Reinstall:</strong> Delete and reinstall the app</li>
                            </ol>
                            <p>If issues persist, contact support with your device and app version information.</p>
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
                                I'm having billing or payment issues
                            </h3>
                            <svg class="w-5 h-5 text-gray-500 transform transition-transform" fill="none"
                                stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M19 9l-7 7-7-7" />
                            </svg>
                        </div>
                    </button>
                    <div class="hidden px-6 pb-4 overflow-hidden" style="max-height: 0; opacity: 0;">
                        <div class="prose prose-gray max-w-none">
                            <p>For billing and payment issues:</p>
                            <ul>
                                <li><strong>Payment declined:</strong> Check card expiration and funds</li>
                                <li><strong>Wrong amount charged:</strong> Review invoice details</li>
                                <li><strong>Duplicate charges:</strong> Contact support immediately</li>
                                <li><strong>Refund requests:</strong> Submit through account dashboard</li>
                                <li><strong>Payment method update:</strong> Add new card in billing settings</li>
                            </ul>
                            <p>Our billing team can help resolve payment issues quickly. Contact support for immediate
                                assistance.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Additional Support -->
            <div class="mt-16 text-center">
                <div class="bg-white rounded-2xl p-8 shadow-sm max-w-2xl mx-auto">
                    <h3 class="text-xl font-bold text-gray-900 mb-4">Still need help troubleshooting?</h3>
                    <p class="text-gray-600 mb-6">Our technical support team is available to help resolve any issues.</p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <a href="{{ route('contact-us') }}"
                            class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 transition-colors duration-200">
                            Contact Technical Support
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
                content.style.maxHeight = '0';
                content.style.opacity = '0';
                // Force reflow
                content.offsetHeight;
                content.style.transition = 'max-height 0.3s ease-in-out, opacity 0.3s ease-in-out';
                content.style.maxHeight = content.scrollHeight + 'px';
                content.style.opacity = '1';
                icon.classList.add('rotate-45');
            } else {
                content.style.maxHeight = '0';
                content.style.opacity = '0';
                icon.classList.remove('rotate-45');
                setTimeout(() => {
                    content.classList.add('hidden');
                }, 300);
            }
        }
    </script>
@endsection
