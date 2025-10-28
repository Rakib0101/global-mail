<section class="bg-white py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <!-- Left Content -->
            <div class="space-y-8">
                <div class="space-y-6">
                    <h1 class="text-4xl lg:text-6xl font-bold text-gray-900 leading-tight">
                        Access funds fast with electronic check deposits.
                    </h1>
                    <p class="text-xl text-gray-600 leading-relaxed max-w-lg">
                        Get your checks deposited electronically and access your funds faster than traditional banking.
                        Our secure platform processes checks instantly with full transparency.
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('contact-us') }}"
                        class="inline-flex items-center justify-center px-8 py-4 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition-colors duration-200">
                        Talk to sales
                    </a>
                </div>
            </div>

            <!-- Right Content with Image and Floating Card -->
            <div class="relative">
                <!-- Main Image -->
                <div class="relative z-10">
                    <img src="{{ asset('assets/images/electronic-hero.webp') }}"
                        alt="Person working on laptop in modern office" class="w-full h-auto rounded-2xl shadow-2xl">
                </div>

                <!-- Floating Activity Card -->
                <div class="absolute -bottom-6 -right-6 bg-white rounded-2xl shadow-xl p-6 max-w-sm z-20">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <h3 class="font-semibold text-gray-900">Recent Activity</h3>
                            <div class="w-2 h-2 bg-green-500 rounded-full"></div>
                        </div>

                        <div class="space-y-3">
                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-blue-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-900">Dan requested to open and scan</p>
                                    <p class="text-xs text-gray-500">2 minutes ago</p>
                                </div>
                            </div>

                            <div class="flex items-center space-x-3">
                                <div class="w-8 h-8 bg-green-100 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4zM18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z" />
                                    </svg>
                                </div>
                                <div>
                                    <p class="text-sm font-medium text-gray-900">Robert deposited a check</p>
                                    <p class="text-xs text-gray-500">5 minutes ago</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
