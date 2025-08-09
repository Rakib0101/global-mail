<!-- Hero Section -->
<section class="py-20 relative overflow-hidden"
    style="background: url('{{ asset('assets/images/electronic-hero-bg.png') }}') no-repeat center center; background-size: cover;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            <!-- Left: Content -->
            <div class="w-full lg:w-1/2 flex flex-col items-start justify-center">
                <!-- Electronic Check Deposit Icon -->
                <img src="{{ asset('assets/images/electronic-hero-svg-left.svg') }}" alt=""
                    class="w-full max-w-[164px] absolute -top-5 -left-20">

                <!-- Main Heading -->
                <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-8 leading-tight">
                    You’ve got a business to run. We’ll handle the mail.
                </h1>

                <!-- Description -->
                <p class="text-xl text-gray-600 mb-10 leading-relaxed">
                    Stable frees your business to focus on what matters most by making it simple to secure a permanent
                    address and manage physical mail online.
                </p>
                <ul class="flex flex-col gap-4 *:flex *:items-center *:gap-2 mb-8">
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <span>Build credibility with a premium business address in top markets</span>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <span>Access and manage physical mail from anywhere, just like email</span>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <span>Protect mail with enterprise-grade security and compliance</span>
                    </li>
                </ul>
                <!-- Call to Action -->
                <div class="flex gap-4">
                    <button
                        class="bg-primary text-white px-10 py-4 rounded-xl font-semibold hover:bg-blue-700 transition duration-300 shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
                        Get Started
                    </button>
                    <button
                        class="bg-white text-black px-10 py-4 rounded-xl font-semibold hover:bg-blue-700 transition duration-300 shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
                        Talk to sales
                    </button>
                </div>
                <ul class="flex flex-col gap-4 *:flex *:items-center *:gap-2 my-8">
                    <li>
                        <svg class="text-primary" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" preserveAspectRatio="xMidYMid meet" aria-hidden="true"
                            role="img">
                            <path
                                d="M22.2497 9.95765L5.75724 3.84421L5.74224 3.83953C5.47677 3.74812 5.19097 3.73306 4.91737 3.79605C4.64376 3.85904 4.39333 3.99756 4.19455 4.19585C3.99578 4.39413 3.85664 4.64423 3.79298 4.91768C3.72931 5.19113 3.74367 5.47696 3.83442 5.74265C3.83556 5.74777 3.83713 5.75279 3.83911 5.75765L9.95724 22.2502C10.0577 22.5442 10.2483 22.7991 10.5019 22.9787C10.7556 23.1583 11.0593 23.2534 11.37 23.2505H11.3982C11.7151 23.248 12.0228 23.1439 12.276 22.9533C12.5292 22.7627 12.7144 22.4959 12.8044 22.192L12.81 22.1733L14.8575 14.8608L22.17 12.8133L22.1888 12.8077C22.4904 12.7148 22.755 12.5293 22.9451 12.2774C23.1351 12.0255 23.2409 11.7201 23.2473 11.4046C23.2538 11.0891 23.1605 10.7796 22.9809 10.5202C22.8013 10.2608 22.5445 10.0646 22.2469 9.95953L22.2497 9.95765ZM14.0475 13.5286C13.9237 13.5634 13.8109 13.6294 13.7199 13.7203C13.629 13.8113 13.5629 13.9241 13.5282 14.048L11.3719 21.7505L11.3663 21.7345L5.25005 5.25046L21.7332 11.3648L21.7482 11.3705L14.0475 13.5286Z"
                                fill="currentColor"></path>
                        </svg>
                        <span>Change of address guidance</span>
                    </li>
                    <li>
                        <svg class="text-primary" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" preserveAspectRatio="xMidYMid meet" aria-hidden="true"
                            role="img">
                            <path
                                d="M19.5 7.5H16.5V5.25C16.5 4.05653 16.0259 2.91193 15.182 2.06802C14.3381 1.22411 13.1935 0.75 12 0.75C10.8065 0.75 9.66193 1.22411 8.81802 2.06802C7.97411 2.91193 7.5 4.05653 7.5 5.25V7.5H4.5C4.10218 7.5 3.72064 7.65804 3.43934 7.93934C3.15804 8.22064 3 8.60218 3 9V19.5C3 19.8978 3.15804 20.2794 3.43934 20.5607C3.72064 20.842 4.10218 21 4.5 21H19.5C19.8978 21 20.2794 20.842 20.5607 20.5607C20.842 20.2794 21 19.8978 21 19.5V9C21 8.60218 20.842 8.22064 20.5607 7.93934C20.2794 7.65804 19.8978 7.5 19.5 7.5ZM9 5.25C9 4.45435 9.31607 3.69129 9.87868 3.12868C10.4413 2.56607 11.2044 2.25 12 2.25C12.7956 2.25 13.5587 2.56607 14.1213 3.12868C14.6839 3.69129 15 4.45435 15 5.25V7.5H9V5.25ZM19.5 19.5H4.5V9H19.5V19.5ZM13.125 14.25C13.125 14.4725 13.059 14.69 12.9354 14.875C12.8118 15.06 12.6361 15.2042 12.4305 15.2894C12.225 15.3745 11.9988 15.3968 11.7805 15.3534C11.5623 15.31 11.3618 15.2028 11.2045 15.0455C11.0472 14.8882 10.94 14.6877 10.8966 14.4695C10.8532 14.2512 10.8755 14.025 10.9606 13.8195C11.0458 13.6139 11.19 13.4382 11.375 13.3146C11.56 13.191 11.7775 13.125 12 13.125C12.2984 13.125 12.5845 13.2435 12.7955 13.4545C13.0065 13.6655 13.125 13.9516 13.125 14.25Z"
                                fill="currentColor"></path>
                        </svg>
                        <span>SOC 2 & HIPAA security standards</span>
                    </li>
                </ul>
            </div>

            <!-- Right: Office Image with Overlay -->
            <div class="w-full lg:w-1/2 flex justify-center">
                <div class="relative">
                    <img src="{{ asset('assets/images/electronic-hero-right-1.webp') }}" alt=""
                        class="size-full">
                    <img src="{{ asset('assets/images/electronic-hero-right-2.webp') }}" alt=""
                        class="absolute bottom-0 -left-20 max-w-[395px]">
                </div>
            </div>
        </div>
    </div>
    <!-- Trusted By Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-32">
        <div class="text-center mb-12">
            <p class="text-gray-600 font-semibold text-lg">Trusted by thousands of businesses — from formation to IPO
            </p>
        </div>

        <!-- Company Logos -->
        <div class="flex flex-wrap justify-center items-center gap-12 md:gap-16">
            <img class="max-h-8" src="{{ asset('assets/images/electronic-hero-logo-1.svg') }}" alt="">
            <img class="max-h-8" src="{{ asset('assets/images/electronic-hero-logo-2.svg') }}" alt="">
            <img class="max-h-8" src="{{ asset('assets/images/electronic-hero-logo-3.svg') }}" alt="">
            <img class="max-h-8" src="{{ asset('assets/images/electronic-hero-logo-4.webp') }}" alt="">
            <img class="max-h-8" src="{{ asset('assets/images/electronic-hero-logo-5.webp') }}" alt="">
            <img class="max-h-8" src="{{ asset('assets/images/electronic-hero-logo-6.webp') }}" alt="">
        </div>
        <div class="flex justify-center items-center mt-12">
            <div class="inline-flex items-center gap-2 px-3 py-2 border border-gray-700 rounded-full">
                <img src="{{ asset('assets/images/electronic-hero-rating.svg') }}" alt="">
                <span>4.9 stars</span>
                <span>50+ reviews</span>
            </div>
        </div>
    </div>
</section>
