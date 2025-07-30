<section class="bg-gradient-to-br from-blue-50 to-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row items-center gap-12">
            <!-- Left: Text Content -->
            <div class="w-full lg:w-1/2 flex flex-col items-start justify-center">
                <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 mb-6 leading-tight">
                    The Earth is Changing...<br>
                    <span class="text-blue-600">So Should the Way We Do Mail</span>
                </h1>
                <p class="text-lg md:text-xl text-gray-600 mb-8 leading-relaxed">
                    Join the digital revolution and help save the planet. Our virtual mailbox service reduces paper waste while giving you complete control over your mail from anywhere in the world.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="{{ route('register') }}" class="inline-block px-8 py-3 bg-blue-600 text-white font-semibold rounded-lg shadow hover:bg-blue-700 transition">
                        Start Risk-free
                    </a>
                    <a href="#features" class="inline-block px-8 py-3 border border-blue-600 text-blue-600 font-semibold rounded-lg hover:bg-blue-50 transition">
                        Learn More
                    </a>
                </div>
            </div>
            <!-- Right: Mobile Interface -->
            <div class="w-full lg:w-1/2 flex justify-center">
                <div class="relative">
                    <!-- Phone Frame -->
                    <div class="w-80 h-[600px] bg-gray-900 rounded-3xl p-3 shadow-2xl">
                        <div class="w-full h-full bg-white rounded-2xl overflow-hidden relative">
                            <!-- Status Bar -->
                            <div class="h-6 bg-gray-100 flex items-center justify-between px-4 text-xs">
                                <span>9:41</span>
                                <div class="flex space-x-1">
                                    <div class="w-4 h-2 bg-green-500 rounded-sm"></div>
                                    <div class="w-4 h-2 bg-green-500 rounded-sm"></div>
                                    <div class="w-4 h-2 bg-green-500 rounded-sm"></div>
                                </div>
                            </div>
                            <!-- App Content -->
                            <div class="p-4 space-y-4">
                                <div class="text-center py-4">
                                    <h3 class="text-xl font-bold text-gray-900">Global Mail</h3>
                                    <p class="text-sm text-gray-500">Your Virtual Mailbox</p>
                                </div>
                                <!-- Mail Items -->
                                <div class="space-y-3">
                                    <div class="flex items-center p-3 bg-blue-50 rounded-lg">
                                        <div class="w-2 h-2 bg-blue-500 rounded-full mr-3"></div>
                                        <div class="flex-1">
                                            <div class="text-sm font-medium">Bank Statement</div>
                                            <div class="text-xs text-gray-500">Wells Fargo</div>
                                        </div>
                                        <button class="px-3 py-1 bg-blue-600 text-white text-xs rounded">Scan</button>
                                    </div>
                                    <div class="flex items-center p-3 bg-green-50 rounded-lg">
                                        <div class="w-2 h-2 bg-green-500 rounded-full mr-3"></div>
                                        <div class="flex-1">
                                            <div class="text-sm font-medium">Tax Document</div>
                                            <div class="text-xs text-gray-500">IRS</div>
                                        </div>
                                        <button class="px-3 py-1 bg-green-600 text-white text-xs rounded">Forward</button>
                                    </div>
                                    <div class="flex items-center p-3 bg-yellow-50 rounded-lg">
                                        <div class="w-2 h-2 bg-yellow-500 rounded-full mr-3"></div>
                                        <div class="flex-1">
                                            <div class="text-sm font-medium">Package Notice</div>
                                            <div class="text-xs text-gray-500">Amazon</div>
                                        </div>
                                        <button class="px-3 py-1 bg-yellow-600 text-white text-xs rounded">Ship</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Floating Elements -->
                    <div class="absolute -top-4 -right-4 w-8 h-8 bg-green-400 rounded-full animate-pulse"></div>
                    <div class="absolute top-20 -left-6 w-6 h-6 bg-blue-400 rounded-full animate-pulse delay-75"></div>
                    <div class="absolute bottom-20 -right-8 w-10 h-10 bg-yellow-400 rounded-full animate-pulse delay-150"></div>
                </div>
            </div>
        </div>
    </div>
</section>
