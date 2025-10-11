@extends('layouts.app')

@section('content')
    <div class="min-h-screen bg-gradient-to-b from-blue-50 to-white">
        <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">
                    What will my virtual address be?
                </h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Learn about our virtual address options and how to choose the perfect location for your needs
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
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Virtual Address Options</h2>

                    <p class="text-lg text-gray-700 mb-6">iMailVault offers premium virtual addresses in major cities across
                        the United States. Your virtual address will be a professional business address that you can use for
                        all your mail and business needs.</p>

                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Available Locations</h3>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                        <div class="bg-blue-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-blue-900 mb-2">Major Cities</h4>
                            <ul class="text-blue-800 text-sm space-y-1">
                                <li>• New York City, NY</li>
                                <li>• Los Angeles, CA</li>
                                <li>• Chicago, IL</li>
                                <li>• Houston, TX</li>
                                <li>• Miami, FL</li>
                                <li>• San Francisco, CA</li>
                            </ul>
                        </div>

                        <div class="bg-green-50 p-4 rounded-lg">
                            <h4 class="font-semibold text-green-900 mb-2">Business Districts</h4>
                            <ul class="text-green-800 text-sm space-y-1">
                                <li>• Beverly Hills, CA</li>
                                <li>• Las Vegas, NV</li>
                                <li>• Seattle, WA</li>
                                <li>• Boston, MA</li>
                                <li>• Dallas, TX</li>
                                <li>• Atlanta, GA</li>
                            </ul>
                        </div>
                    </div>

                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Address Format</h3>
                    <p class="text-gray-700 mb-4">Your virtual address will follow this format:</p>

                    <div class="bg-gray-100 p-4 rounded-lg mb-6">
                        <p class="font-mono text-gray-800">
                            [Your Name]<br>
                            [Suite Number] [Street Address]<br>
                            [City], [State] [ZIP Code]
                        </p>
                    </div>

                    <p class="text-gray-700 mb-6">Example:</p>
                    <div class="bg-gray-100 p-4 rounded-lg mb-6">
                        <p class="font-mono text-gray-800">
                            John Smith<br>
                            Suite 123 123 Business Ave<br>
                            New York, NY 10001
                        </p>
                    </div>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Choosing Your Address</h2>

                    <h3 class="text-xl font-semibold text-gray-900 mb-4">Consider These Factors</h3>

                    <div class="space-y-4 mb-6">
                        <div class="flex items-start space-x-3">
                            <div
                                class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-blue-600 text-sm font-bold">1</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Business Type</h4>
                                <p class="text-gray-700">Choose a location that aligns with your industry (tech companies
                                    often prefer San Francisco, finance companies prefer New York).</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <div
                                class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-blue-600 text-sm font-bold">2</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Target Market</h4>
                                <p class="text-gray-700">Select an address in a region where your customers or clients are
                                    located.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <div
                                class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-blue-600 text-sm font-bold">3</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Prestige Factor</h4>
                                <p class="text-gray-700">Some addresses carry more prestige and can enhance your business
                                    credibility.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-3">
                            <div
                                class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                                <span class="text-blue-600 text-sm font-bold">4</span>
                            </div>
                            <div>
                                <h4 class="font-semibold text-gray-900">Tax Considerations</h4>
                                <p class="text-gray-700">Some states have different tax implications for businesses.</p>
                            </div>
                        </div>
                    </div>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Address Benefits</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div class="bg-blue-50 p-6 rounded-lg">
                            <h3 class="text-lg font-semibold text-blue-900 mb-3">Professional Image</h3>
                            <ul class="text-blue-800 space-y-2">
                                <li>• Premium business district addresses</li>
                                <li>• Enhances company credibility</li>
                                <li>• Professional appearance</li>
                                <li>• Trusted by customers and partners</li>
                            </ul>
                        </div>

                        <div class="bg-green-50 p-6 rounded-lg">
                            <h3 class="text-lg font-semibold text-green-900 mb-3">Convenience</h3>
                            <ul class="text-green-800 space-y-2">
                                <li>• No need to maintain physical office</li>
                                <li>• Access mail from anywhere</li>
                                <li>• 24/7 online access</li>
                                <li>• Mobile app management</li>
                            </ul>
                        </div>
                    </div>

                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Changing Your Address</h2>

                    <p class="text-gray-700 mb-4">You can change your virtual address at any time:</p>

                    <ol class="list-decimal pl-6 space-y-2 text-gray-700 mb-6">
                        <li>Contact our support team</li>
                        <li>Choose your new location</li>
                        <li>Update your address with relevant parties</li>
                        <li>Mail forwarding will continue seamlessly</li>
                    </ol>

                    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-6 mb-6">
                        <h3 class="text-lg font-semibold text-yellow-900 mb-3">Important Note</h3>
                        <p class="text-yellow-800">Remember to update your address with banks, government agencies, and
                            other important institutions when you change your virtual address.</p>
                    </div>

                    <div class="mt-8 p-6 bg-gray-50 rounded-lg">
                        <h3 class="text-lg font-semibold text-gray-900 mb-3">Ready to Choose Your Address?</h3>
                        <p class="text-gray-700 mb-4">Browse our available locations and select the perfect virtual address
                            for your needs.</p>
                        <a href="{{ route('select-virtual-address') }}"
                            class="inline-flex items-center px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                            Browse Locations
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
