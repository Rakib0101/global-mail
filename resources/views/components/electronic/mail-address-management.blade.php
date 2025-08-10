<section class="bg-white py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Mail and address management made simple</h2>
            <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                Join the thousands of businesses that use our AI-powered platform to remove friction from their
                operations. Stable makes it simple for businesses to start and operate from anywhere.
            </p>
        </div>
        <div class="flex flex-col lg:flex-row items-start gap-12">
            <!-- Left: Video/Image Card -->
            <div x-data="{ open: false }" class="w-full bg-white rounded-xl shadow-md overflow-hidden mb-8 lg:mb-0">
                <div class="relative">
                    <img src="https://img.youtube.com/vi/45v6hZIFPe8/hqdefault.jpg"
                        alt="Mail address management video thumbnail" class="w-full h-80 object-cover">
                    <!-- Play Button Overlay -->
                    <button @click="open = true" type="button"
                        class="absolute inset-0 flex items-center justify-center focus:outline-none"
                        aria-label="Play video tour">
                        <svg class="w-16 h-16 text-primary bg-white bg-opacity-80 rounded-full shadow-lg"
                            fill="currentColor" viewBox="0 0 64 64">
                            <circle cx="32" cy="32" r="32" fill="currentColor" opacity="0.15" />
                            <polygon points="26,20 48,32 26,44" fill="#2563eb" />
                        </svg>
                    </button>
                </div>
                <div class="px-6 py-4">
                    <span class="text-2xl font-medium text-gray-900">Take a tour</span>
                </div>
                <!-- Modal for YouTube Embed -->
                <div x-show="open" x-cloak
                    class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-70"
                    x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0"
                    x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                    <div class="relative w-full max-w-2xl mx-auto bg-transparent">
                        <button @click="open = false"
                            class="absolute top-0 right-0 mt-2 mr-2 text-white text-3xl font-bold z-10 focus:outline-none"
                            aria-label="Close video">&times;</button>
                        <div class="aspect-w-16 aspect-h-9">
                            <iframe src="https://www.youtube.com/embed/45v6hZIFPe8?autoplay=0"
                                title="Mail Address Management Video" frameborder="0" allow="autoplay; encrypted-media"
                                allowfullscreen class="w-full h-96 rounded-lg shadow-lg"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Right: Steps List -->
            <div class="w-full">
                <ol class="space-y-6">
                    <li class="flex items-start gap-4">
                        <span
                            class="flex-shrink-0 size-12 rounded-full bg-primary text-white flex items-center justify-center font-bold text-2xl">1</span>
                        <div>
                            <h4 class="font-semibold text-gray-900 text-2xl mb-1">Pick an address</h4>
                            <p class="text-gray-600 text-xl">Choose a premium business address to use with the IRS,
                                vendors, and more.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <span
                            class="flex-shrink-0 size-12 rounded-full bg-primary text-white flex items-center justify-center font-bold text-2xl">2</span>
                        <div>
                            <h4 class="font-semibold text-gray-900 text-2xl mb-1">We receive your mail</h4>
                            <p class="text-gray-600 text-xl">Your mail is received at your new address and handled at
                                one of our secure processing facilities.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <span
                            class="flex-shrink-0 size-12 rounded-full bg-primary text-white flex items-center justify-center font-bold text-2xl">3</span>
                        <div>
                            <h4 class="font-semibold text-gray-900 text-2xl mb-1">We digitize your mail</h4>
                            <p class="text-gray-600 text-xl">Each piece of mail is scanned and uploaded to your Stable
                                virtual mailbox.</p>
                        </div>
                    </li>
                    <li class="flex items-start gap-4">
                        <span
                            class="flex-shrink-0 size-12 rounded-full bg-primary text-white flex items-center justify-center font-bold text-2xl">4</span>
                        <div>
                            <h4 class="font-semibold text-gray-900 text-2xl mb-1">Manage your mail online</h4>
                            <p class="text-gray-600 text-xl">Oversee mail operations, collaborate with colleagues, and
                                automate tasks on our AI-powered platform.</p>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>
