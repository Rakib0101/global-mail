<!-- Sticky Navigation Header -->
<nav class="sticky top-0 z-50 bg-white border-b border-gray-100">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-28 items-center">
            <!-- Logo -->
            <a href="/" class="flex items-center space-x-2">
                <img src="/assets/images/logo.png" alt="Logo" class="w-full max-w-[150px] h-auto" />
            </a>

            <!-- Desktop Nav Links -->
            <div class="hidden xl:flex space-x-8 items-center">
                <a href="/electronic-check-deposit" class="font-medium text-gray-700 hover:text-primary">Electronic
                    Check
                    Deposits</a>
                <a href="/pricing" class="font-medium text-gray-700 hover:text-primary">Pricing</a>
                <a href="/about-us" class="font-medium text-gray-700 hover:text-primary">About Us</a>
                <a href="/faqs" class="font-medium text-gray-700 hover:text-primary">Faq's</a>
                <a href="/contact-us" class="font-medium text-gray-700 hover:text-primary">Contact Us</a>
            </div>

            <!-- Desktop Auth Buttons -->
            <div class="hidden xl:flex items-center space-x-8">
                <a href="{{ route('sign-in') }}" class="text-primary font-medium hover:underline">Login</a>
                <a href="{{ route('register') }}"
                    class="bg-primary hover:bg-blue-600 text-white font-semibold px-5 py-3 rounded shadow">Get
                    Started</a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="xl:hidden">
                <button id="mobile-menu-button"
                    class="text-gray-700 hover:text-primary focus:outline-none focus:text-primary">
                    <svg class="h-8 w-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</nav>

<!-- Mobile Menu Overlay -->
<div id="mobile-menu-overlay" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden xl:hidden"></div>

<!-- Mobile Menu Drawer -->
<div id="mobile-menu-drawer"
    class="fixed top-0 left-0 h-full w-80 bg-white shadow-xl transform -translate-x-full transition-transform duration-300 ease-in-out z-50 xl:hidden">
    <!-- Mobile Menu Header -->
    <div class="flex items-center justify-between p-6 border-b border-gray-200">
        <a href="/" class="flex items-center space-x-2">
            <img src="/assets/images/logo.svg" alt="Logo" class="h-8 w-auto" />
        </a>
        <button id="close-mobile-menu" class="text-gray-500 hover:text-gray-700">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Mobile Menu Items -->
    <div class="p-6">
        <div class="space-y-6">
            <!-- Navigation Links -->
            <div class="space-y-4">
                <a href="/electronic-check-deposit"
                    class="block text-lg font-medium text-gray-700 hover:text-primary py-2">Electronic Check
                    Deposits</a>
                <a href="/pricing" class="block text-lg font-medium text-gray-700 hover:text-primary py-2">Pricing</a>
                <a href="/about-us" class="block text-lg font-medium text-gray-700 hover:text-primary py-2">About Us</a>
                <a href="/faqs" class="block text-lg font-medium text-gray-700 hover:text-primary py-2">Faq's</a>
                <a href="/contact-us" class="block text-lg font-medium text-gray-700 hover:text-primary py-2">Contact
                    Us</a>
            </div>

            <!-- Divider -->
            <div class="border-t border-gray-200"></div>

            <!-- Auth Buttons -->
            <div class="space-y-4">
                <a href="{{ route('sign-in') }}"
                    class="block text-lg font-medium text-primary hover:underline py-2">Login</a>
                <a href="{{ route('register') }}"
                    class="block bg-primary hover:bg-blue-600 text-white font-semibold px-6 py-3 rounded shadow text-center">Get
                    Started</a>
            </div>
        </div>
    </div>
</div>

<!-- Notification Bar (Non-sticky) -->
<div class="bg-[#e2ebf5] py-3 hidden xl:block">
    <div class="max-w-7xl mx-auto px-4 flex items-center justify-center space-x-2">
        <span class="inline-flex items-center justify-center w-6 h-6 bg-green-500 text-white rounded-full"><svg
                class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3" />
            </svg></span>
        <span class="font-semibold text-black">30-Day FREE Trial</span>
        <span class="text-gray-500">· Cancel in 30 days for a full refund ·</span>
        <a href="#" class="text-primary hover:underline">Learn More</a>
    </div>
</div>

<!-- Mobile Menu JavaScript -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenuDrawer = document.getElementById('mobile-menu-drawer');
        const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
        const closeMobileMenu = document.getElementById('close-mobile-menu');

        // Open mobile menu
        mobileMenuButton.addEventListener('click', function() {
            mobileMenuDrawer.classList.remove('-translate-x-full');
            mobileMenuOverlay.classList.remove('hidden');
            document.body.style.overflow = 'hidden';
        });

        // Close mobile menu
        function closeMenu() {
            mobileMenuDrawer.classList.add('-translate-x-full');
            mobileMenuOverlay.classList.add('hidden');
            document.body.style.overflow = '';
        }

        closeMobileMenu.addEventListener('click', closeMenu);
        mobileMenuOverlay.addEventListener('click', closeMenu);

        // Close menu on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeMenu();
            }
        });

        // Close menu on window resize if switching to desktop
        window.addEventListener('resize', function() {
            if (window.innerWidth >= 768) {
                closeMenu();
            }
        });
    });
</script>
