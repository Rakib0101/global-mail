<div class="bg-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-[#eaf2fb] rounded-2xl pt-12 px-8 md:px-12 shadow-lg">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-center">
                <!-- Left Side - Text Content -->
                <div class="space-y-6">
                    <div class="space-y-4">
                        <h3 class="text-lg font-medium text-gray-600">
                            Let's leave a greener Earth behind for our children
                        </h3>
                        <h2 class="text-4xl md:text-4xl font-bold text-gray-900 leading-tight">
                            We plant a tree for every new member sign up.</span>
                        </h2>
                    </div>

                    <div class="pt-4">
                        <a href="{{ route('register') }}"
                           class="inline-flex items-center text-lg font-medium text-primary hover:text-blue-700 transition-colors duration-200 group">
                            Get started today!
                            <svg class="ml-2 w-5 h-5 transform group-hover:translate-x-1 transition-transform duration-200"
                                 fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Right Side - Tree Illustration -->
                <div class="relative flex justify-center lg:justify-end">
                    <img src="{{ asset('assets/images/main-cta-right.webp') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
