@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gradient-to-b from-blue-50 to-white">
        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    How do I deposit checks with your service?
                </h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Learn about our electronic check deposit feature and how to deposit checks remotely
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

            <!-- Content -->
            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-8">
                <div class="prose prose-gray max-w-none">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Electronic Check Deposit Overview</h2>

                    <p class="text-lg text-gray-700 mb-6">iMailVault offers electronic check deposit services that allow you
                        to deposit checks remotely without visiting a bank. This feature is perfect for digital nomads,
                        remote workers, and anyone who receives checks in the mail.</p>

                    <div class="bg-green-50 border-l-4 border-green-400 p-6 mb-6">
                        <h3 class="text-lg font-semibold text-green-900 mb-3">Key Benefits</h3>
                        <ul class="text-green-800 space-y-2">
                            <li>• Deposit checks from anywhere in the world</li>
                            <li>• No need to visit a physical bank</li>
                            <li>• Secure and encrypted process</li>
                            <li>• Fast processing times</li>
                            <li>• Works with most US banks</li>
                        </ul>
                    </div>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">How It Works</h2>

                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Step-by-Step Process</h3>

                    <div class="space-y-4 mb-6">
                        <div class="flex items-start space-x-3">
                            <div
                                class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-blue-600 text-sm font-bold">1</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Receive Check</h4>
                                <p class="text-gray-700">Check arrives at your virtual address and is scanned into your
                                    account</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <div
                                class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-blue-600 text-sm font-bold">2</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Request Deposit</h4>
                                <p class="text-gray-700">Log into your account and request electronic check deposit</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <div
                                class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-blue-600 text-sm font-bold">3</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Provide Bank Details</h4>
                                <p class="text-gray-700">Enter your bank account information securely</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <div
                                class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-blue-600 text-sm font-bold">4</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Processing</h4>
                                <p class="text-gray-700">We process the deposit through our banking partners</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <div
                                class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-blue-600 text-sm font-bold">5</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Confirmation</h4>
                                <p class="text-gray-700">Receive confirmation when funds are deposited</p>
                            </div>
                        </div>
                    </div>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Supported Check Types</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div class="bg-green-50 p-6 rounded-lg">
                            <h3 class="text-lg font-semibold text-green-900 mb-3">Supported Checks</h3>
                            <ul class="text-green-800 space-y-2">
                                <li>• Personal checks</li>
                                <li>• Business checks</li>
                                <li>• Payroll checks</li>
                                <li>• Government checks</li>
                                <li>• Insurance checks</li>
                                <li>• Refund checks</li>
                            </ul>
                        </div>

                        <div class="bg-red-50 p-6 rounded-lg">
                            <h3 class="text-lg font-semibold text-red-900 mb-3">Not Supported</h3>
                            <ul class="text-red-800 space-y-2">
                                <li>• Foreign checks</li>
                                <li>• Damaged checks</li>
                                <li>• Checks over $10,000</li>
                                <li>• Third-party checks</li>
                                <li>• Stale-dated checks</li>
                            </ul>
                        </div>
                    </div>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Bank Requirements</h2>

                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Compatible Banks</h3>
                    <p class="text-gray-700 mb-4">Our electronic check deposit works with most major US banks including:</p>

                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-6">
                        <div class="bg-gray-100 p-3 rounded text-center">
                            <p class="text-sm font-semibold text-gray-700">Chase</p>
                        </div>
                        <div class="bg-gray-100 p-3 rounded text-center">
                            <p class="text-sm font-semibold text-gray-700">Bank of America</p>
                        </div>
                        <div class="bg-gray-100 p-3 rounded text-center">
                            <p class="text-sm font-semibold text-gray-700">Wells Fargo</p>
                        </div>
                        <div class="bg-gray-100 p-3 rounded text-center">
                            <p class="text-sm font-semibold text-gray-700">Citibank</p>
                        </div>
                    </div>

                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Required Information</h3>
                    <div class="bg-blue-50 p-6 rounded-lg mb-6">
                        <ul class="text-blue-800 space-y-2">
                            <li>• Bank name and routing number</li>
                            <li>• Account number</li>
                            <li>• Account holder name (must match check)</li>
                            <li>• Account type (checking or savings)</li>
                        </ul>
                    </div>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Fees and Limits</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div class="bg-yellow-50 p-6 rounded-lg">
                            <h3 class="text-lg font-semibold text-yellow-900 mb-3">Fees</h3>
                            <ul class="text-yellow-800 space-y-2">
                                <li>• Basic Plan: $2.95 per check</li>
                                <li>• Professional Plan: $1.95 per check</li>
                                <li>• Business Plan: $0.95 per check</li>
                                <li>• Enterprise: Custom pricing</li>
                            </ul>
                        </div>

                        <div class="bg-blue-50 p-6 rounded-lg">
                            <h3 class="text-lg font-semibold text-blue-900 mb-3">Limits</h3>
                            <ul class="text-blue-800 space-y-2">
                                <li>• Maximum: $10,000 per check</li>
                                <li>• Daily limit: $25,000</li>
                                <li>• Monthly limit: $100,000</li>
                                <li>• Processing time: 1-3 business days</li>
                            </ul>
                        </div>
                    </div>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Security and Safety</h2>

                    <div class="space-y-4 mb-6">
                        <div class="bg-green-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-green-900 mb-2">Security Features</h4>
                            <ul class="text-green-800 text-sm space-y-1">
                                <li>• Bank-level encryption for all transactions</li>
                                <li>• Secure data transmission</li>
                                <li>• Fraud protection and monitoring</li>
                                <li>• FDIC-insured banking partners</li>
                            </ul>
                        </div>

                        <div class="bg-blue-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-blue-900 mb-2">Your Protection</h4>
                            <ul class="text-blue-800 text-sm space-y-1">
                                <li>• Check images stored securely</li>
                                <li>• Original checks destroyed after processing</li>
                                <li>• Transaction history maintained</li>
                                <li>• Dispute resolution support</li>
                            </ul>
                        </div>
                    </div>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Getting Started</h2>

                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Enable Check Deposit</h3>
                    <ol class="list-decimal pl-6 space-y-2 text-gray-700 mb-6">
                        <li>Log into your iMailVault account</li>
                        <li>Go to "Account Settings" → "Services"</li>
                        <li>Enable "Electronic Check Deposit"</li>
                        <li>Complete bank verification process</li>
                        <li>Start depositing checks!</li>
                    </ol>

                    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 mb-6">
                        <h3 class="text-lg font-semibold text-yellow-900 mb-3">Important Notes</h3>
                        <ul class="text-yellow-800 space-y-2">
                            <li>• Check deposit must be enabled before receiving checks</li>
                            <li>• Bank verification may take 1-2 business days</li>
                            <li>• Some banks may require additional verification</li>
                            <li>• Check images are available for download after deposit</li>
                        </ul>
                    </div>

                    <div class="mt-8 p-6 bg-gray-50 rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">Ready to Start Depositing Checks?</h3>
                        <p class="text-gray-700 mb-4">Enable electronic check deposit in your account settings or contact
                            support for assistance.</p>
                        <div class="flex flex-col sm:flex-row gap-4">
                            <a href="{{ route('electronic-check-deposit') }}"
                                class="inline-flex items-center px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                                Learn More
                            </a>
                            <a href="{{ route('contact-us') }}"
                                class="inline-flex items-center px-6 py-3 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-50 transition-colors">
                                Contact Support
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
