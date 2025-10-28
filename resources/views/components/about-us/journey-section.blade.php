<section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Main Headline -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
                Let's Leave a Greener Planet Behind
            </h2>
        </div>

        <!-- Feature Blocks Container -->
        <div class="relative">
            <!-- Connecting Lines -->
            <div class="absolute left-1/2 transform -translate-x-1/2 w-1 h-full">
                <div class="w-full h-full border-l-2 border-dashed border-blue-400 relative">
                    <div class="absolute top-1/4 left-1/2 transform -translate-x-1/2 w-3 h-3 bg-blue-400 rounded-full">
                    </div>
                    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 w-3 h-3 bg-blue-400 rounded-full">
                    </div>
                    <div class="absolute top-3/4 left-1/2 transform -translate-x-1/2 w-3 h-3 bg-blue-400 rounded-full">
                    </div>
                </div>
            </div>

            <!-- Feature Block 1: Mail Routing -->
            <div class="flex flex-col lg:flex-row items-center gap-12 mb-20">
                <!-- Left: Mobile App Illustration -->
                <div class="w-full lg:w-1/2 flex justify-center">
                    <div class="relative">
                        <!-- Phone Frame -->
                        {{-- <img src="{{ asset('assets/images/journey-01.webp') }}" alt=""> --}}
                    </div>
                </div>

                <!-- Right: Text Content -->
                <div class="w-full lg:w-1/2">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">
                        When you sign up...
                    </h3>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        You will stop getting postal mail at your home as USPS will route all mail coming to your home,
                        to your iMailVault address.
                    </p>
                </div>
            </div>

            <!-- Feature Block 2: Junk Mail Reduction -->
            <div class="flex flex-col lg:flex-row-reverse items-center gap-12 mb-20">
                <!-- Right: Mailbox Illustration -->
                <div class="w-full lg:w-1/2 flex justify-center">
                    <img src="{{ asset('assets/images/journey-02.svg') }}" alt="">
                </div>

                <!-- Left: Text Content -->
                <div class="w-full lg:w-1/2">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">
                        The junk mail automatically reduces by 50%
                    </h3>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        As we are a registered agent of the United States Postal Service, senders of junk mail recognize
                        your iMailVault address is not where you live. Which is great because many stop sending you
                        junk mail and your home address stay private.
                    </p>
                </div>
            </div>

            <!-- Feature Block 3: Tree Planting -->
            <div class="flex flex-col lg:flex-row items-center gap-12">
                <!-- Left: Tree and Earth Illustration -->
                <div class="w-full lg:w-1/2 flex justify-center">
                    <div class="relative">
                        <!-- Earth -->
                        <img src="{{ asset('assets/images/journey-03.webp') }}" alt="">

                        <!-- Tree -->
                        <div class="absolute -top-8 left-1/2 transform -translate-x-1/2">
                            <div class="w-16 h-20 bg-brown-600 rounded-full relative">
                                <!-- Tree trunk -->
                                <div
                                    class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-4 h-16 bg-yellow-800 rounded-full">
                                </div>
                                <!-- Tree leaves -->
                                <div
                                    class="absolute top-0 left-1/2 transform -translate-x-1/2 w-12 h-12 bg-green-500 rounded-full">
                                </div>
                                <div
                                    class="absolute top-2 left-1/2 transform -translate-x-1/2 w-10 h-10 bg-green-400 rounded-full">
                                </div>
                                <div
                                    class="absolute top-4 left-1/2 transform -translate-x-1/2 w-8 h-8 bg-green-300 rounded-full">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right: Text Content -->
                <div class="w-full lg:w-1/2">
                    <h3 class="text-2xl font-bold text-gray-900 mb-4">
                        We plant a tree in your name
                    </h3>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        We shred and recycle every piece of junk mail you might get and any mail you discard. We also
                        plant a tree in your name when you sign up. You help us reduce our collective carbon footprint
                        and leave a better planet behind for all our kids.
                    </p>
                </div>
            </div>
        </div>

        <!-- Call to Action Button -->
        <div class="text-center mt-16">
            <a href="{{ route('register') }}"
                class="bg-primary hover:bg-blue-700 text-white px-8 py-4 rounded-lg text-lg font-semibold transition-colors duration-200">
                Join The Revolution
            </a>
        </div>
    </div>
</section>
