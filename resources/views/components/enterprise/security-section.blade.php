<!-- Enterprise Security Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Column - Security Image -->
            <div class="relative">
                <img src="{{ asset('assets/images/enterprise-security.webp') }}" alt="Enterprise security illustration"
                    class="rounded-2xl shadow-lg">
            </div>

            <!-- Right Column - Security Content -->
            <div class="space-y-8">
                <span class="text-sm font-semibold tracking-wide uppercase text-blue-500">Security</span>
                <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 leading-tight">
                    Enterprise-grade security
                </h2>
                <p class="text-xl text-gray-600 leading-relaxed">
                    Protect your sensitive information with bank-grade encryption and 2FA, ensuring that private
                    documents are safe from unauthorized access. Our mail management process is SOC2 & HIPAA standards.
                </p>

                <!-- Security Features -->
                <div class="space-y-6">
                    <div class="flex items-start">
                        <div
                            class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z">
                                </path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="font-semibold text-gray-900 mb-2">Bank-Grade Encryption</h3>
                            <p class="text-gray-600">256-bit SSL/TLS encryption protects your data both in transit and
                                at rest.</p>
                            <!-- Features Continue -->
                            <div class="flex items-start">
                                <div
                                    class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 4.02 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.621 0-1.042-.133-2.052-.382-3.016z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900 mb-2">SOC2 & HIPAA Compliant</h3>
                                    <p class="text-gray-600">Certified compliance with industry-leading security
                                        standards and regulations.</p>
                                </div>
                            </div>

                            <div class="flex items-start">
                                <div
                                    class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.621 0-1.042-.133-2.052-.382-3.016z">
                                        </path>
                                    </svg>
                                </div>
                                <div>
                                    <h3 class="font-semibold text-gray-900 mb-2">Multi-Factor Authentication</h3>
                                    <p class="text-gray-600">Advanced MFA options including SMS, email, authenticator
                                        apps, and biometric verification.</p>
                                </div>

                                <div class="flex items-start">
                                    <div
                                        class="w-12 h-12 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0 mr-4">
                                        <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor"
                                            viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 828 2.828a2 2 0 012-2 2 2 0 012-2z"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="font-semibold text-gray-900 mb-2">Access Controls</h3>
                                        <p class="text-gray-600">Granular permission system with role-based access
                                            control for team management.</p>
                                    </div>
                                </div>
                            </div>

                            <!-- CTA Button -->
                            <div class="pt-6">
                                <a href="{{ route('contact-us') }}"
                                    class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 transition-colors duration-200">
                                    Security Overview
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Compliance Certifications -->
                <div class="mt-20 bg-white rounded-2xl p-8 shadow-sm">
                    <h3 class="text-2xl font-bold text-gray-900 text-center mb-8">Security Certifications & Compliance
                    </h3>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                        <div class="text-center">
                            <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <h4 class="font-semibold text-gray-900 mb-2">SOC2 Type II</h4>
                            <p class="text-sm text-gray-600">Security operations certified</p>
                        </div>

                        <div class="text-center">
                            <div
                                class="w-16 h-16 bg-green-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z">
                                    </path>
                                </svg>
                            </div>
                            <h4 class="font-semibold text-gray-900 mb-2">HIPAA Ready</h4>
                            <p class="text-sm text-gray-600">Healthcare compliance</ */ </div>

                            <div class="text-center">
                                <div
                                    class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-8 h-8 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-gray-900 mb-2">ISO 27001</h4>
                                <p class="text-sm text-gray-600">Information security</p>
                            </div>

                            <div class="text-center">
                                <div
                                    class="w-16 h-16 bg-orange-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                                    <svg class="w-8 h-8 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a.75.75 0 00-1.5 0v2h-2a.75.75 0 000 1.5h2v2a.75.75 0 001.5 0v-2h2a.75.75 0 000-1.5h-2V6z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <h4 class="font-semibold text-gray-900 mb-2">GDPR</h4>
                                <p class="text-sm text-gray-600">EU data protection</p>
                            </div>
                        </div>
                    </div>
                </div>
</section>
