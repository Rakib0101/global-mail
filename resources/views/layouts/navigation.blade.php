<nav class="bg-white border-b border-gray-100">
    <div class="max-w-[1712px] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20 items-center">
            <!-- Logo -->
            <a href="/" class="flex items-center space-x-2">
                <img src="/assets/images/logo.svg" alt="Logo" class="h-12 w-full lg:min-w-[230px]" />
            </a>
            <!-- Nav Links -->
            <div class="hidden md:flex space-x-8 items-center">
                <div class="relative group">
                    <button class="font-medium text-gray-700 hover:text-blue-600 flex items-center">Product <svg
                            class="ml-1 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg></button>
                    <div
                        class="absolute left-0 mt-0 min-w-max bg-white border rounded shadow-lg opacity-0 group-hover:opacity-100 transition-opacity z-10 hidden group-hover:block">
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Electronic Check
                            Deposits</a>
                        <a href="#" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Features</a>
                    </div>
                </div>
                <a href="/pricing" class="font-medium text-gray-700 hover:text-blue-600">Pricing</a>
                <a href="/about-us" class="font-medium text-gray-700 hover:text-blue-600">About Us</a>
                <a href="/faqs" class="font-medium text-gray-700 hover:text-blue-600">Faq's</a>
                <a href="/contact-us" class="font-medium text-gray-700 hover:text-blue-600">Contact Us</a>
            </div>
            <!-- Auth Buttons -->
            <div class="flex items-center space-x-4">
                <a href="{{ route('login') }}" class="text-blue-600 font-medium hover:underline">Login</a>
                <a href="{{ route('register') }}"
                    class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-5 py-2 rounded-lg shadow">Get
                    Started</a>
            </div>
        </div>
    </div>
    <!-- Notification Bar -->
    <div class="bg-[#e2ebf5] py-3">
        <div class="max-w-7xl mx-auto px-4 flex items-center justify-center space-x-2">
            <span class="inline-flex items-center justify-center w-6 h-6 bg-green-500 text-white rounded-full"><svg
                    class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3" />
                </svg></span>
            <span class="font-semibold text-black">30-Day FREE Trial</span>
            <span class="text-gray-500">· Cancel in 30 days for a full refund ·</span>
            <a href="#" class="text-blue-600 hover:underline">Learn More</a>
        </div>
    </div>
</nav>
