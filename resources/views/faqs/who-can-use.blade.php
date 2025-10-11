@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gradient-to-b from-blue-50 to-white">
        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Who can use iMailVault?
                </h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Learn about eligibility requirements and who can benefit from our virtual mailbox service
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
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Eligibility Requirements</h2>

                    <p class="text-lg text-gray-700 mb-6">iMailVault is available to individuals and businesses who meet the
                        following requirements:</p>

                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Age Requirements</h3>
                    <ul class="list-disc pl-6 mb-6">
                        <li>Must be at least 18 years old</li>
                        <li>Minors can be added as additional recipients with parental consent</li>
                    </ul>

                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Identification Requirements</h3>
                    <ul class="list-disc pl-6 mb-6">
                        <li>Valid government-issued photo ID (driver's license, passport, state ID)</li>
                        <li>Social Security Number or Individual Taxpayer Identification Number</li>
                        <li>Proof of address (utility bill, bank statement, lease agreement)</li>
                    </ul>

                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Geographic Restrictions</h3>
                    <ul class="list-disc pl-6 mb-6">
                        <li>Available to US residents and citizens</li>
                        <li>International customers welcome with proper documentation</li>
                        <li>Some services may be restricted based on location</li>
                    </ul>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6 mt-8">Who Benefits Most</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div class="bg-blue-50 p-6 rounded-lg">
                            <h3 class="text-lg font-semibold text-blue-900 mb-3">Individuals</h3>
                            <ul class="text-blue-800 space-y-2">
                                <li>• Digital nomads and remote workers</li>
                                <li>• Frequent travelers</li>
                                <li>• Military personnel</li>
                                <li>• Students studying abroad</li>
                                <li>• Retirees living internationally</li>
                            </ul>
                        </div>

                        <div class="bg-green-50 p-6 rounded-lg">
                            <h3 class="text-lg font-semibold text-green-900 mb-3">Businesses</h3>
                            <ul class="text-green-800 space-y-2">
                                <li>• Small business owners</li>
                                <li>• Entrepreneurs and startups</li>
                                <li>• E-commerce businesses</li>
                                <li>• Consulting firms</li>
                                <li>• Remote teams</li>
                            </ul>
                        </div>
                    </div>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Restrictions and Limitations</h2>

                    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 mb-6">
                        <h3 class="text-lg font-semibold text-yellow-900 mb-3">Important Limitations</h3>
                        <ul class="text-yellow-800 space-y-2">
                            <li>• Cannot be used as a permanent residence address</li>
                            <li>• Some government agencies may not accept virtual addresses</li>
                            <li>• Banking institutions may require physical addresses</li>
                            <li>• Certain legal documents may need physical addresses</li>
                        </ul>
                    </div>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Getting Started</h2>

                    <p class="text-lg text-gray-700 mb-4">If you meet the eligibility requirements, getting started is easy:
                    </p>

                    <ol class="list-decimal pl-6 space-y-2 text-gray-700">
                        <li>Create your iMailVault account</li>
                        <li>Complete identity verification</li>
                        <li>Submit Form 1583 (USPS requirement)</li>
                        <li>Choose your virtual address</li>
                        <li>Start receiving mail!</li>
                    </ol>

                    <div class="mt-8 p-6 bg-gray-50 rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">Need Help Determining Eligibility?</h3>
                        <p class="text-gray-700 mb-4">Our support team can help you determine if iMailVault is right for
                            your specific situation.</p>
                        <a href="{{ route('contact-us') }}"
                            class="inline-flex items-center px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                            Contact Support
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
