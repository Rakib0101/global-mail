<section class="relative overflow-hidden bg-blue-600">
    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-2 min-h-[600px]">
            <!-- Left Column - Blue Background with Text and Buttons -->
            <div class="flex items-center justify-center px-8 py-16 lg:py-0">
                <div class="text-center lg:text-left max-w-lg">
                    <h2 class="text-2xl lg:text-4xl font-bold text-white leading-tight mb-6">
                        The only mailbox with unlimited
                        mail and free check deposits
                    </h2>
                    <p class="text-xl text-white mb-8">
                        Mail processed in 2 - 4 hours. Get Started Now!
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                        <a href="{{ route('register') }}" class="bg-white text-primary font-semibold py-3 px-8 rounded-lg hover:bg-gray-100 transition-colors duration-200">
                            Start Risk Free
                        </a>
                        <a href="{{ route('contact-us') }}" class="border-2 border-white text-white font-semibold py-3 px-8 rounded-lg hover:bg-white hover:text-primary transition-colors duration-200">
                            Book A Demo
                        </a>
                    </div>
                </div>
            </div>

            <!-- Right Column - Light Grey Background with Envelope -->
            <div class="bg-gray-100 flex items-center justify-center px-8 py-16 lg:py-0">
                <div class="relative">
                    <!-- Airmail Envelope -->
                    <div class="relative transform rotate-12 scale-110">
                        <!-- Envelope Body -->
                        <div class="w-80 h-56 bg-amber-50 border-2 border-gray-300 rounded-lg shadow-lg relative">
                            <!-- Airmail Stripes -->
                            <div class="absolute top-0 left-0 right-0 h-8 bg-gradient-to-r from-red-500 via-blue-500 to-red-500 rounded-t-lg"></div>
                            <div class="absolute bottom-0 left-0 right-0 h-8 bg-gradient-to-r from-red-500 via-blue-500 to-red-500 rounded-b-lg"></div>

                            <!-- Sender Address (Top Left) -->
                            <div class="absolute top-12 left-4 transform -rotate-12">
                                <div class="text-sm text-gray-700 font-mono">
                                    <div>Tim Robertson</div>
                                    <div>2504 S Helen St</div>
                                    <div>Sioux City, Iowa, 51106</div>
                                </div>
                            </div>

                            <!-- Recipient Address (Bottom Right) -->
                            <div class="absolute bottom-12 right-4 transform -rotate-12">
                                <div class="text-sm text-gray-700 font-mono text-right">
                                    <div>John Jackson</div>
                                    <div>33360 Kingbird Way</div>
                                    <div>Acton, California, 93510</div>
                                </div>
                            </div>

                            <!-- Postmark/Stamp Area -->
                            <div class="absolute top-2 right-2">
                                <div class="w-12 h-12 border-2 border-gray-400 rounded-full flex items-center justify-center">
                                    <div class="w-8 h-8 border border-gray-400 rounded-full relative">
                                        <div class="absolute inset-0 flex items-center justify-center">
                                            <div class="w-1 h-1 bg-gray-400 rounded-full"></div>
                                        </div>
                                        <!-- Wavy lines extending right -->
                                        <div class="absolute top-1/2 right-0 transform translate-x-1 -translate-y-1/2">
                                            <div class="flex space-x-1">
                                                <div class="w-1 h-1 bg-gray-400 rounded-full"></div>
                                                <div class="w-1 h-1 bg-gray-400 rounded-full"></div>
                                                <div class="w-1 h-1 bg-gray-400 rounded-full"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
