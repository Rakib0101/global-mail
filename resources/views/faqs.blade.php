@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gradient-to-b from-blue-50 to-white">
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    Welcome to iMailVault Help Center
                </h1>

                <!-- Search Bar -->
                <div class="max-w-2xl mx-auto relative">
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <input type="text" id="searchInput"
                            class="block w-full pl-10 pr-3 py-4 border border-gray-300 rounded-xl text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent shadow-sm"
                            placeholder="Search for articles...">
                    </div>
                </div>
            </div>

            <!-- Help Topics Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 mb-16">
                <!-- Getting Started -->
                <a href="/faqs/getting-started" class="group">
                    <div
                        class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-all duration-200 border border-gray-100 hover:border-blue-200">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center group-hover:bg-blue-200 transition-colors">
                                    <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h3 class="text-lg font-semibold text-gray-900 group-hover:text-primary transition-colors">
                                    Getting Started
                                </h3>
                                <p class="text-sm text-gray-600 mt-2">
                                    Everything you need to know to begin your mail management journey
                                </p>
                                <p class="text-xs text-primary font-medium mt-3">20 articles</p>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Activation -->
                <a href="/faqs/activation" class="group">
                    <div
                        class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-all duration-200 border border-gray-100 hover:border-blue-200">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center group-hover:bg-green-200 transition-colors">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h3
                                    class="text-lg font-semibold text-gray-900 group-hover:text-green-600 transition-colors">
                                    Activating your iMailVault
                                </h3>
                                <p class="text-sm text-gray-600 mt-2">
                                    Where to use your address and all about Form 1583
                                </p>
                                <p class="text-xs text-green-600 font-medium mt-3">13 articles</p>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Mailbox Features -->
                <a href="/faqs/mailbox-features" class="group">
                    <div
                        class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-all duration-200 border border-gray-100 hover:border-blue-200">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center group-hover:bg-purple-200 transition-colors">
                                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h3
                                    class="text-lg font-semibold text-gray-900 group-hover:text-purple-600 transition-colors">
                                    Mailbox Features
                                </h3>
                                <p class="text-sm text-gray-600 mt-2">
                                    All about scanning, shipping, storage, forwarding, shredding
                                </p>
                                <p class="text-xs text-purple-600 font-medium mt-3">19 articles</p>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Account Management -->
                <a href="/faqs/account-management" class="group">
                    <div
                        class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-all duration-200 border border-gray-100 hover:border-blue-200">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-10 h-10 bg-indigo-100 rounded-lg flex items-center justify-center group-hover:bg-indigo-200 transition-colors">
                                    <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h3
                                    class="text-lg font-semibold text-gray-900 group-hover:text-indigo-600 transition-colors">
                                    Account Management
                                </h3>
                                <p class="text-sm text-gray-600 mt-2">
                                    All the "how-do-I's" in using your virtual mailbox
                                </p>
                                <p class="text-xs text-indigo-600 font-medium mt-3">18 articles</p>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Enterprise Features -->
                <a href="/faqs/enterprise" class="group">
                    <div
                        class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-all duration-200 border border-gray-100 hover:border-blue-200">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center group-hover:bg-orange-200 transition-colors">
                                    <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h3
                                    class="text-lg font-semibold text-gray-900 group-hover:text-orange-600 transition-colors">
                                    Enterprise Features
                                </h3>
                                <p class="text-sm text-gray-600 mt-2">
                                    Enterprise-grade mail infrastructure for organizations
                                </p>
                                <p class="text-xs text-orange-600 font-medium mt-3">6 articles</p>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Plans and Pricing -->
                <a href="/faqs/pricing" class="group">
                    <div
                        class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-all duration-200 border border-gray-100 hover:border-blue-200">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center group-hover:bg-yellow-200 transition-colors">
                                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h3
                                    class="text-lg font-semibold text-gray-900 group-hover:text-yellow-600 transition-colors">
                                    Plans and Pricing
                                </h3>
                                <p class="text-sm text-gray-600 mt-2">
                                    Details about our plans, closing your account and custom plans
                                </p>
                                <p class="text-xs text-yellow-600 font-medium mt-3">9 articles</p>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Shipping -->
                <a href="/faqs/shipping" class="group">
                    <div
                        class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-all duration-200 border border-gray-100 hover:border-blue-200">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center group-hover:bg-red-200 transition-colors">
                                    <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h3 class="text-lg font-semibold text-gray-900 group-hover:text-red-600 transition-colors">
                                    Shipping
                                </h3>
                                <p class="text-sm text-gray-600 mt-2">
                                    Everything related to where, how and what we ship
                                </p>
                                <p class="text-xs text-red-600 font-medium mt-3">18 articles</p>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Troubleshooting -->
                <a href="/faqs/troubleshooting" class="group">
                    <div
                        class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-all duration-200 border border-gray-100 hover:border-blue-200">
                        <div class="flex items-start space-x-4">
                            <div class="flex-shrink-0">
                                <div
                                    class="w-10 h-10 bg-gray-100 rounded-lg flex items-center justify-center group-hover:bg-gray-200 transition-colors">
                                    <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-1 min-w-0">
                                <h3
                                    class="text-lg font-semibold text-gray-900 group-hover:text-gray-600 transition-colors">
                                    Troubleshooting
                                </h3>
                                <p class="text-sm text-gray-600 mt-2">
                                    Solutions for common issues and technical problems
                                </p>
                                <p class="text-xs text-gray-600 font-medium mt-3">12 articles</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>

            <!-- Helpful Links -->
            <div class="bg-white rounded-xl p-8 shadow-sm border border-gray-100">
                <h2 class="text-2xl font-bold text-gray-900 mb-6">Helpful Links</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <a href="/faqs/who-can-use"
                        class="flex items-center text-primary hover:text-blue-800 transition-colors group">
                        <span class="font-medium">Who can use iMailVault?</span>
                        <svg class="ml-2 w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                    <a href="/faqs/virtual-address"
                        class="flex items-center text-primary hover:text-blue-800 transition-colors group">
                        <span class="font-medium">What will my virtual address be?</span>
                        <svg class="ml-2 w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                    <a href="/faqs/id-requirements"
                        class="flex items-center text-primary hover:text-blue-800 transition-colors group">
                        <span class="font-medium">What are the ID requirements for additional recipients?</span>
                        <svg class="ml-2 w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                    <a href="/faqs/check-deposits"
                        class="flex items-center text-primary hover:text-blue-800 transition-colors group">
                        <span class="font-medium">How do I deposit checks with your service?</span>
                        <svg class="ml-2 w-4 h-4 transform group-hover:translate-x-1 transition-transform" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('searchInput');
            const cards = document.querySelectorAll('.grid > a');

            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();

                cards.forEach(card => {
                    const title = card.querySelector('h3').textContent.toLowerCase();
                    const description = card.querySelector('p').textContent.toLowerCase();

                    if (title.includes(searchTerm) || description.includes(searchTerm)) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });
    </script>
@endsection
