<section>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Mail and address management made simple</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Join the thousands of businesses that use our AI-powered platform to remove friction from their operations. Stable makes it simple for businesses to start and operate from anywhere.
            </p>
        </div>
        <div class="flex flex-col lg:flex-row items-center gap-12">
            <!-- Left: Video/Image Card -->
            <div class="w-full max-w-md bg-white rounded-xl shadow-md overflow-hidden mb-8 lg:mb-0">
                <div class="relative">
                    <img src="{{ asset('assets/images/mail-tour-screenshot.webp') }}" alt="Stable platform tour screenshot" class="w-full h-56 object-cover">
                    <!-- Play Button Overlay -->
                    <button class="absolute inset-0 flex items-center justify-center">
                        <svg class="w-16 h-16 text-primary bg-white bg-opacity-80 rounded-full shadow-lg" fill="currentColor" viewBox="0 0 64 64">
                            <circle cx="32" cy="32" r="32" fill="currentColor" opacity="0.15"/>
                            <polygon points="26,20 48,32 26,44" fill="#2563eb"/>
                        </svg>
                    </button>
                    <!-- User Avatar Overlay -->
                    <img src="{{ asset('assets/images/mail-tour-avatar.webp') }}" alt="User avatar" class="absolute bottom-4 right-4 w-12 h-12 rounded-full border-2 border-white shadow-md">
                </div>
                <div class="px-6 py-4">
                    <span class="text-lg font-medium text-gray-900">Take a tour</span>
                </div>
            </div>
            <!-- Right: Steps List -->
            <div class="flex-1">
                <ol class="space-y-6">
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center font-bold text-lg">1</span>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-1">Pick an address</h4>
                            <p class="text-gray-600 text-sm">Choose a premium business address to use with the IRS, vendors, and more.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center font-bold text-lg">2</span>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-1">We receive your mail</h4>
                            <p class="text-gray-600 text-sm">Your mail is received at your new address and handled at one of our secure processing facilities.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center font-bold text-lg">3</span>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-1">We digitize your mail</h4>
                            <p class="text-gray-600 text-sm">Each piece of mail is scanned and uploaded to your Stable virtual mailbox.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <span class="flex-shrink-0 w-8 h-8 rounded-full bg-primary text-white flex items-center justify-center font-bold text-lg">4</span>
                        <div>
                            <h4 class="font-semibold text-gray-900 mb-1">Manage your mail online</h4>
                            <p class="text-gray-600 text-sm">Oversee mail operations, collaborate with colleagues, and automate tasks on our AI-powered platform.</p>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>