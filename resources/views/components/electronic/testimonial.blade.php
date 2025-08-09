<section class="bg-gradient-to-br from-gray-900 to-gray-800 py-20 relative overflow-hidden">
    <!-- Decorative lines -->
    <div class="absolute top-20 left-1/2 transform -translate-x-1/2 opacity-20">
        <div class="flex space-x-2">
            <div class="w-1 h-8 bg-blue-500 transform -rotate-45"></div>
            <div class="w-1 h-8 bg-blue-500 transform -rotate-45"></div>
            <div class="w-1 h-8 bg-blue-500 transform -rotate-45"></div>
            <div class="w-1 h-8 bg-blue-500 transform -rotate-45"></div>
            <div class="w-1 h-8 bg-blue-500 transform -rotate-45"></div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8" x-data="{
        currentTestimonial: 0,
        testimonials: [{
                name: 'Rich Bowen',
                title: 'Chief Operating Officer, Darwin Homes',
                quote: 'It sounds simple, but Stable just works.',
                backgroundImage: '/assets/images/electronic-hero-right-1.webp',
                ctaText: 'Read the case study',
                ctaLink: '#'
            },
            {
                name: 'Alessandro Barone',
                title: 'People Operations Manager, Aiven',
                quote: 'The old way was really stressful and difficult. Stable has made everything so much more simple.',
                backgroundImage: '/assets/images/electronic-hero-right-2.webp',
                ctaText: 'Read the case study',
                ctaLink: '#'
            },
            {
                name: 'Jaiden Williams',
                title: 'HR, Verbit',
                quote: 'Stable has helped us reduce the constant back and forth between departments over mail. They feel like a partner rather than a vendor.',
                backgroundImage: '/assets/images/electronic-hero-right-top.svg',
                ctaText: 'Read the case study',
                ctaLink: '#'
            }
        ]
    }">
        <!-- Section Heading -->
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-6xl font-bold text-white mb-4">
                Customers love Stable
            </h2>
        </div>

        <!-- Testimonials -->
        <div class="relative">
            <!-- Desktop: Show all testimonials side by side -->
            <div class="hidden md:grid md:grid-cols-3 md:gap-6">
                <template x-for="(testimonial, index) in testimonials" :key="index">
                    <div class="relative h-80 rounded-xl overflow-hidden group">
                        <!-- Background Image -->
                        <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
                            :style="`background-image: url('${testimonial.backgroundImage}')`">
                        </div>

                        <!-- Dark Overlay -->
                        <div class="absolute inset-0 bg-black bg-opacity-40"></div>

                        <!-- Content -->
                        <div class="absolute inset-0 flex flex-col justify-between p-8">
                            <!-- Quote -->
                            <div class="flex-1 flex items-start">
                                <blockquote class="text-white text-lg font-medium leading-relaxed">
                                    <span x-text="testimonial.quote"></span>
                                </blockquote>
                            </div>

                            <!-- Attribution and CTA -->
                            <div class="flex flex-col">
                                <div class="mb-4">
                                    <h3 class="text-white font-semibold text-lg" x-text="testimonial.name"></h3>
                                    <p class="text-gray-300 text-sm" x-text="testimonial.title"></p>
                                </div>
                                <a :href="testimonial.ctaLink"
                                    class="inline-flex items-center text-white hover:text-blue-300 transition-colors duration-200 font-medium">
                                    <span x-text="testimonial.ctaText"></span>
                                    <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </template>
            </div>

            <!-- Mobile: Carousel -->
            <div class="md:hidden relative overflow-hidden">
                <div class="flex transition-transform duration-500 ease-in-out"
                    :style="`transform: translateX(-${currentTestimonial * 100}%)`">
                    <template x-for="(testimonial, index) in testimonials" :key="index">
                        <div class="w-full flex-shrink-0 px-4">
                            <div class="relative h-96 rounded-xl overflow-hidden group">
                                <!-- Background Image -->
                                <div class="absolute inset-0 bg-cover bg-center bg-no-repeat"
                                    :style="`background-image: url('${testimonial.backgroundImage}')`">
                                </div>

                                <!-- Dark Overlay -->
                                <div class="absolute inset-0 bg-black bg-opacity-40"></div>

                                <!-- Content -->
                                <div class="absolute inset-0 flex flex-col justify-between p-8">
                                    <!-- Quote -->
                                    <div class="flex-1 flex items-start">
                                        <blockquote class="text-white text-lg font-medium leading-relaxed">
                                            <span x-text="testimonial.quote"></span>
                                        </blockquote>
                                    </div>

                                    <!-- Attribution and CTA -->
                                    <div class="flex flex-col">
                                        <div class="mb-4">
                                            <h3 class="text-white font-semibold text-lg" x-text="testimonial.name"></h3>
                                            <p class="text-gray-300 text-sm" x-text="testimonial.title"></p>
                                        </div>
                                        <a :href="testimonial.ctaLink"
                                            class="inline-flex items-center text-white hover:text-blue-300 transition-colors duration-200 font-medium">
                                            <span x-text="testimonial.ctaText"></span>
                                            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M9 5l7 7-7 7"></path>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>
            </div>

            <!-- Pagination Dots (All screen sizes) -->
            <div class="flex justify-center mt-8 space-x-2">
                <template x-for="(testimonial, index) in testimonials" :key="index">
                    <button @click="currentTestimonial = index"
                        :class="currentTestimonial === index ? 'bg-white' : 'bg-white bg-opacity-30'"
                        class="w-3 h-3 rounded-full transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-900"
                        :aria-label="`Go to testimonial ${index + 1}`">
                    </button>
                </template>
            </div>
        </div>
    </div>
</section>
