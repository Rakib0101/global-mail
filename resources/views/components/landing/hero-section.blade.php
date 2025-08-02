<section class="bg-white py-32">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row items-center gap-12">
            <!-- Left: Text Content -->
            <div class="w-full lg:w-1/3 flex flex-col items-start justify-center">
                <h1 class="text-4xl md:text-[56px] font-medium text-gray-900 mb-6 leading-[1.2]">
                    Mail <br> On-Demand
                </h1>
                <p class="text-lg md:text-xl text-gray-600 mb-8 leading-relaxed">
                    Manage your physical mail like email: secure, digital, and on-demand. The #1 virtual mailbox trusted by 100,000+ individuals and businesses since 1999.
                </p>
                <a href="{{ route('register') }}" class="inline-block px-8 py-3 bg-primary text-white font-semibold rounded-lg shadow hover:bg-blue-700 transition">
                    Start Risk-free
                </a>
            </div>
            <!-- Right: Mobile Interface -->
            <div class="w-full lg:w-2/3 flex justify-center">
                <img src="{{ asset('/assets/images/hero-right.avif') }}" alt="">
            </div>
        </div>
    </div>
</section>
