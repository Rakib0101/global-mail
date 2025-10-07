<!-- Virtual Office Testimonials Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <span class="text-sm font-semibold tracking-wide uppercase text-blue-500">Testimonials</span>
            <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mt-4 mb-6">
                Trusted by Businesses Worldwide
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                See how companies like yours are transforming their business operations with virtual office services.
            </p>
        </div>

        <!-- Testimonials Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
            <!-- Testimonial 1 -->
            <div class="bg-gray-50 p-6 rounded-xl">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('assets/images/electronic-avatar-01.avif') }}" alt="Sarah Johnson"
                        class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h4 class="font-semibold text-gray-900">Sarah Johnson</h4>
                        <p class="text-sm text-gray-600">CEO, TechStart Inc.</p>
                    </div>
                </div>
                <p class="text-gray-700 italic mb-4">
                    "The virtual office transformed our startup. We can operate from anywhere while maintaining a
                    professional presence in multiple markets. Game-changer for remote businesses."
                </p>
                <div class="flex">
                    @for ($i = 0; $i < 5; $i++)
                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                    @endfor
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-gray-50 p-6 rounded-xl">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('assets/images/electronic-avatar-02.avif') }}" alt="Michael Chen"
                        class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h4 class="font-semibold text-gray-900">Michael Chen</h4>
                        <p class="text-sm text-gray-600">Managing Partner, Strategic Consulting</p>
                    </div>
                </div>
                <p class="text-gray-700 italic mb-4">
                    "Cost-effective solution that lets us expand nationally without office overhead. Our clients trust
                    our prestigious addresses and our team loves the flexibility."
                </p>
                <div class="flex">
                    @for ($i = 0; $i < 5; $i++)
                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                    @endfor
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-gray-50 p-6 rounded-xl">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('assets/images/testimonials/ecommerce-founder.webp') }}" alt="Lisa Rodriguez"
                        class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h4 class="font-semibold text-gray-900">Lisa Rodriguez</h4>
                        <p class="text-sm text-gray-600">Founder, EcoCommerce LLC</p>
                    </div>
                </div>
                <p class="text-gray-700 italic mb-4">
                    "Perfect for our e-commerce business. We can receive supplier packages at business addresses and
                    process vendor mail efficiently. Essential service."
                </p>
                <div class="flex">
                    @for ($i = 0; $i < 5; $i++)
                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                    @endfor
                </div>
            </div>

            <!-- Testimonial 4 -->
            <div class="bg-gray-50 p-6 rounded-xl">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('assets/images/testimonials/freelancer.webp') }}" alt="David Park"
                        class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h4 class="font-semibold text-gray-900">David Park</h4>
                        <p class="text-sm text-gray-600">Freelance Consultant</p>
                    </div>
                </div>
                <p class="text-gray-700 italic mb-4">
                    "As a freelancer, credibility matters. Having a professional business address helped me win bigger
                    contracts and compete with larger firms."
                </p>
                <div class="flex">
                    @for ($i = 0; $i < 5; $i++)
                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                    @endfor
                </div>
            </div>

            <!-- Testimonial 5 -->
            <div class="bg-gray-50 p-6 rounded-xl">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('assets/images/testimonials/nonprofit-director.webp') }}" alt="Jennifer Smith"
                        class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h4 class="font-semibold text-gray-900">Jennifer Smith</h4>
                        <p class="text-sm text-gray-600">Executive Director, Foundation</p>
                    </div>
                </div>
                <p class="text-gray-700 italic mb-4">
                    "For nonprofits, every dollar matters. The virtual office lets us redirect overhead costs directly
                    to our programs while maintaining credibility with donors."
                </p>
                <div class="flex">
                    @for ($i = 0; $i < 5; $i++)
                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path
                                d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                            </path>
                        </svg>
                    @endfor
                </div>
            </div>

            <!-- Testimonial 6 -->
            <div class="bg-gray-50 p-6 rounded-xl">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('assets/images/testimonials/real-estate.webp') }}" alt="Robert Johnson"
                        class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h4 8 h-12 rounded-full mr-4">
                            <div>
                                <h4 class="font-semibold text-gray-900">Robert Johnson</h4>
                                <p class="text-sm text-gray-600">Real Estate Broker</p>
                            </div>
                    </div>
                    <p class="text-gray-700 italic mb-4">
                        "Real estate clients value professionalism. Having multiple premium addresses across different
                        markets has expanded my client base significantly."
                    </p>
                    <div class="flex">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                        @endfor
                    </div>
                </div>
            </div>

            <!-- Trust Indicators -->
            <div class="text-center">
                <div class="flex items-center justify-center space-x-8 mb-8">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-gray-900">10,000+</div>
                        <div class="text-gray-600">Businesses Served</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-gray-900">4.9/5</div>
                        <div class="text-gray-600">Average Rating</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-gray-900">99%</div>
                        <div class="text-gray-600">Customer Satisfaction</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-gray-900">24/7</div>
                        <div class="text-gray-600">Support Available</div>
                    </div>
                </div>

                <p class="text-gray-600 mb-6">Join thousands of satisfied businesses already using iMailVault</p>
                <a href="{{ route('register') }}"
                    class="inline-flex items-center px-8 py-3 border border-transparent text-base font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 transition-colors duration-200">
                    Start Your Virtual Office
                </a>
            </div>
        </div>
</section>
