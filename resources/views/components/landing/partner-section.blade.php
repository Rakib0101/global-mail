<style>
    @keyframes scroll-right-to-left {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }

    .animate-scroll-right-to-left {
        animation: scroll-right-to-left 10s linear infinite;
    }


    .partners-row {
        will-change: transform;
    }
</style>

<section class="lg:py-16 py-6 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Rating Section -->
        <div class="text-center mb-12 flex flex-col sm:flex-row justify-center items-center gap-4">
            <div class="flex flex-col sm:flex-row items-center justify-center">
                <!-- Stars -->
                <div class="flex gap-[7px] items-center">
                    <svg class="size-8 text-[#fb662a]" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg class="size-8 text-[#fb662a]" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg class="size-8 text-[#fb662a]" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg class="size-8 text-[#fb662a]" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                    <svg class="size-8 text-[#fb662a]" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                    </svg>
                </div>
                <span class="text-lg font-medium text-gray-900">4.7 out of 5 stars</span>
            </div>
            <p class="text-gray-600">
                Based on <span class="underline cursor-pointer">2000+ reviews</span>
            </p>
        </div>

        <!-- Partner Logos with Infinite Scroll -->
        <div class="overflow-hidden">
            <!-- First Row - Right to Left -->
            <div class="flex space-x-12 mb-8 animate-scroll-right-to-left partners-row">
                <!-- First set -->
                <div class="text-center flex-shrink-0">
                    <div class="text-gray-400 font-medium">POSSIBILITY</div>
                    <div class="text-black font-bold text-xl">LABS</div>
                </div>
                <div class="text-green-500 font-bold text-2xl flex-shrink-0"
                    style="font-family: 'Comic Sans MS', cursive;">
                    OLIPOP
                </div>
                <div class="text-center flex-shrink-0">
                    <div class="relative">
                        <div class="flex items-center justify-center mb-1">
                            <div class="w-2 h-3 bg-blue-300 rounded-full"></div>
                            <div class="w-1 h-1 bg-blue-300 rounded-full mx-1"></div>
                            <div class="w-2 h-3 bg-blue-300 rounded-full"></div>
                        </div>
                        <div class="text-blue-800 font-medium">partners</div>
                    </div>
                    <div class="text-blue-400 text-xs">IN SCHOOL INNOVATION</div>
                </div>
                <div class="text-center flex-shrink-0">
                    <div class="flex items-center justify-center mb-2">
                        <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center mr-2">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-blue-500 font-medium">MYCOMPUTER</div>
                            <div class="text-blue-800 font-bold text-lg">CAREER</div>
                        </div>
                    </div>
                    <div class="text-blue-400 text-xs">TRAINING FOR A BETTER LIFE</div>
                </div>
                <div class="flex items-center flex-shrink-0">
                    <div class="w-6 h-6 bg-blue-300 rounded-full flex items-center justify-center mr-2">
                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <span class="text-gray-400 font-medium">do</span>
                </div>

                <!-- Second set (duplicate for infinite effect) -->
                <div class="text-center flex-shrink-0">
                    <div class="text-gray-400 font-medium">POSSIBILITY</div>
                    <div class="text-black font-bold text-xl">LABS</div>
                </div>
                <div class="text-green-500 font-bold text-2xl flex-shrink-0"
                    style="font-family: 'Comic Sans MS', cursive;">
                    OLIPOP
                </div>
                <div class="text-center flex-shrink-0">
                    <div class="relative">
                        <div class="flex items-center justify-center mb-1">
                            <div class="w-2 h-3 bg-blue-300 rounded-full"></div>
                            <div class="w-1 h-1 bg-blue-300 rounded-full mx-1"></div>
                            <div class="w-2 h-3 bg-blue-300 rounded-full"></div>
                        </div>
                        <div class="text-blue-800 font-medium">partners</div>
                    </div>
                    <div class="text-blue-400 text-xs">IN SCHOOL INNOVATION</div>
                </div>
                <div class="text-center flex-shrink-0">
                    <div class="flex items-center justify-center mb-2">
                        <div class="w-8 h-8 bg-blue-500 rounded-full flex items-center justify-center mr-2">
                            <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-blue-500 font-medium">MYCOMPUTER</div>
                            <div class="text-blue-800 font-bold text-lg">CAREER</div>
                        </div>
                    </div>
                    <div class="text-blue-400 text-xs">TRAINING FOR A BETTER LIFE</div>
                </div>
                <div class="flex items-center flex-shrink-0">
                    <div class="w-6 h-6 bg-blue-300 rounded-full flex items-center justify-center mr-2">
                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <span class="text-gray-400 font-medium">do</span>
                </div>
            </div>
        </div>
    </div>
</section>
