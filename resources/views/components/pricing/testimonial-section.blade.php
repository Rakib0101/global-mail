<div class="bg-white py-16" x-data="{
    currentTestimonial: 0,
    testimonials: [{
            name: 'Dawn Wills',
            verified: true,
            image: '/images/testimonials/dawn-wills.jpg',
            quote: 'The feature of US Global Mail that I rely on the most ... As soon as they receive mail, they send me an email and bam, I can go in, log into my account, and check to see if this is something that I need for them to scan so I can look at it further, or I can just request for them to just delete it right away. I appreciate the fact that I can rely on them to quickly expedite any mail services I might need.',
            video: true
        },
        {
            name: 'Sarah Johnson',
            verified: true,
            image: '/images/testimonials/sarah-johnson.jpg',
            quote: 'US Global Mail has been a game-changer for my business. The scanning feature saves me hours every week, and the professional address gives my company credibility. Highly recommended!',
            video: false
        },
        {
            name: 'Michael Chen',
            verified: true,
            image: '/images/testimonials/michael-chen.jpg',
            quote: 'As a digital nomad, having a reliable mail service is crucial. US Global Mail has exceeded my expectations with their fast scanning and excellent customer service.',
            video: true
        }
    ]
}">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Heading -->
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900">
                Why Clients Love US Global Mail
            </h2>
        </div>

        <!-- Testimonial Card -->
        <div class="relative">
            <div class="bg-white rounded-2xl shadow-lg border border-gray-100 p-8 md:p-12">
                <div class="flex flex-col md:flex-row items-start gap-8">
                    <!-- Profile Picture Section -->
                    <div class="flex-shrink-0">
                        <div class="relative">
                            <img :src="testimonials[currentTestimonial].image"
                                :alt="testimonials[currentTestimonial].name"
                                class="w-24 h-24 md:w-32 md:h-32 rounded-full object-cover border-4 border-white shadow-lg"
                                onerror="this.src='/images/testimonials/default-avatar.jpg'">
                            <!-- Video Play Button -->
                            <div x-show="testimonials[currentTestimonial].video"
                                class="absolute -bottom-2 -right-2 w-8 h-8 bg-primary rounded-full flex items-center justify-center shadow-lg">
                                <svg class="w-4 h-4 text-white ml-0.5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                        </div>

                        <!-- Name and Verification -->
                        <div class="mt-4 text-center md:text-left">
                            <h3 class="text-lg font-semibold text-gray-900"
                                x-text="testimonials[currentTestimonial].name"></h3>
                            <div class="flex items-center justify-center md:justify-start mt-1">
                                <svg class="w-4 h-4 text-green-500 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="text-sm text-gray-600">Verified customer</span>
                            </div>
                        </div>
                    </div>

                    <!-- Quote Section -->
                    <div class="flex-1">
                        <div class="relative">
                            <!-- Large Quote Marks -->
                            <svg class="absolute -top-4 -left-2 w-12 h-12 text-primary opacity-20" fill="currentColor"
                                viewBox="0 0 24 24">
                                <path
                                    d="M14.017 21v-7.391c0-5.704 3.731-9.57 8.983-10.609l.995 2.151c-2.432.917-3.995 3.638-3.995 5.849h4v10h-9.983zm-14.017 0v-7.391c0-5.704 3.748-9.57 9-10.609l.996 2.151c-2.433.917-3.996 3.638-3.996 5.849h3.983v10h-9.983z" />
                            </svg>

                            <!-- Quote Text -->
                            <blockquote class="text-lg md:text-xl text-gray-700 leading-relaxed pl-8">
                                <span x-text="testimonials[currentTestimonial].quote"></span>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Arrows -->
            <div class="flex justify-center mt-8 space-x-4">
                <!-- Previous Button -->
                <button
                    @click="currentTestimonial = currentTestimonial === 0 ? testimonials.length - 1 : currentTestimonial - 1"
                    class="w-12 h-12 rounded-full border-2 border-primary text-primary hover:bg-primary hover:text-white transition-colors duration-200 flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                    aria-label="Previous testimonial">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>

                <!-- Next Button -->
                <button
                    @click="currentTestimonial = currentTestimonial === testimonials.length - 1 ? 0 : currentTestimonial + 1"
                    class="w-12 h-12 rounded-full border-2 border-primary text-primary hover:bg-primary hover:text-white transition-colors duration-200 flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                    aria-label="Next testimonial">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>

            <!-- Dots Indicator -->
            <div class="flex justify-center mt-6 space-x-2">
                <template x-for="(testimonial, index) in testimonials" :key="index">
                    <button @click="currentTestimonial = index"
                        :class="currentTestimonial === index ? 'bg-primary' : 'bg-gray-300'"
                        class="w-3 h-3 rounded-full transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2"
                        :aria-label="`Go to testimonial ${index + 1}`">
                    </button>
                </template>
            </div>
        </div>
    </div>
</div>
