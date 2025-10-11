<section class="cta-section py-16 bg-white">
    <div class="container mx-auto px-4">
        <!-- Main CTA Content -->
        <div class="text-center mb-12">
            <!-- Headline -->
            <h2 class="text-4xl md:text-[40px] font-medium text-gray-900 mb-6">
                Join the #1 Leader In Virtual Mail Management
            </h2>

            <!-- Description -->
            <p class="text-lg md:text-base text-gray-600 mb-8">
                To get started, pick an address you can use to open a business, for IRS, legal requirements, banking,
                and more.
            </p>

            <!-- Call-to-Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                <a href="{{ route('register') }}"
                    class="bg-primary hover:bg-blue-700 text-white font-bold py-4 px-8 rounded transition-colors duration-200 min-w-[200px] inline-block text-center">
                    Start Risk Free
                </a>
                <a href="{{ route('contact-us') }}"
                    class="bg-white hover:bg-gray-50 text-primary font-bold py-4 px-8 rounded border-2 border-primary transition-colors duration-200 min-w-[200px] inline-block text-center">
                    Book a Demo
                </a>
            </div>
        </div>

        <!-- Trust Badges and Awards -->
        <div class="flex flex-wrap justify-center items-center gap-6 py-12">
            <img src="https://www.usglobalmail.com/wp-content/uploads/2024/12/medal-1.webp" alt="">
            <img src="https://www.usglobalmail.com/wp-content/uploads/2024/12/medal.webp" alt="">
            <img src="https://www.usglobalmail.com/wp-content/uploads/2025/04/users-love-us.webp" alt="">
            <img src="{{ asset('assets/images/trust-badge-04.avif') }}" alt="" class="max-h-[108px]">
            <img src="{{ asset('assets/images/trust-badge-05.avif') }}" alt="" class="max-h-[108px]">
            <img src="{{ asset('assets/images/trust-badge-06.avif') }}" alt="" class="max-h-[108px]">
            <img src="{{ asset('assets/images/trust-badge-07.avif') }}" alt="" class="max-h-[108px]">
            <img src="{{ asset('assets/images/trust-badge-08.avif') }}" alt="" class="max-h-[108px]">
        </div>
    </div>
</section>
