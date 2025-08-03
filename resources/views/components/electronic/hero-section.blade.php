<!-- Hero Section -->
<section class="py-20 relative overflow-hidden"
    style="background: url('{{ asset('assets/images/electronic-hero-bg.png') }}') no-repeat center center; background-size: cover;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            <!-- Left: Content -->
            <div class="w-full lg:w-1/2 flex flex-col items-start justify-center">
                <!-- Electronic Check Deposit Icon -->
                <div class="mb-10">
                    <div class="relative">
                        <div
                            class="w-24 h-24 bg-primary rounded-full flex items-center justify-center border-4 border-white shadow-xl">
                            <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                </path>
                            </svg>
                        </div>
                        <div
                            class="absolute -top-3 -right-3 w-32 h-8 bg-white rounded-full flex items-center justify-center shadow-md border border-gray-100">
                            <span class="text-xs font-bold text-primary tracking-wide">ELECTRONIC CHECK DEPOSIT</span>
                        </div>
                    </div>
                </div>

                <!-- Main Heading -->
                <h1 class="text-5xl md:text-6xl font-bold text-gray-900 mb-8 leading-tight">
                    You’ve got a business to run.  We’ll handle the mail.
                </h1>

                <!-- Description -->
                <p class="text-xl text-gray-600 mb-10 leading-relaxed">
                    Automate physical check deposits, reduce processing time, and access real-time tracking every step
                    of the way.
                </p>

                <!-- Call to Action -->
                <button
                    class="bg-primary text-white px-10 py-4 rounded-xl font-semibold hover:bg-blue-700 transition duration-300 shadow-xl hover:shadow-2xl transform hover:-translate-y-1">
                    Talk to sales
                </button>
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
</section>

<!-- Trusted By Section -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <p class="text-gray-600 font-semibold text-lg">Trusted by thousands of modern companies</p>
        </div>

        <!-- Company Logos -->
        <div class="flex flex-wrap justify-center items-center gap-12 md:gap-16 opacity-60">
            <div class="text-gray-400 font-bold text-2xl">Airbyte</div>
            <div class="text-gray-400 font-bold text-xl">GLASSDOOR</div>
            <div class="text-gray-400 font-bold text-2xl">hims</div>
            <div class="text-gray-400 font-bold text-2xl">GitLab</div>
            <div class="text-gray-400 font-bold text-xl">INDIEGOGO</div>
            <div class="text-gray-400 font-bold text-2xl">AUTOCAMP</div>
        </div>
    </div>
</section>
