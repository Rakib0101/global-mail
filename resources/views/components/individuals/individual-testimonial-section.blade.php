<!-- Individual Customer Testimonial Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Featured Testimonial -->
        <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-3xl p-12 mb-16">
            <div class="max-w-4xl mx-auto text-center">
                <!-- Customer Photo -->
                <img src="{{ asset('assets/images/testimonials/featured-customer.webp') }}" alt="Sarah Thompson"
                    class="w-24 h-24 rounded-full mx-auto mb-6 border-4 border-white shadow-lg">

                <!-- Customer Info -->
                <div class="mb-8">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Sarah Thompson</h3>
                    <p class="text-lg text-gray-600 mb-4">Digital Nomad • Currently in Barcelona, Spain</p>
                    <div class="flex items-center justify-center mb-4">
                        @for ($i = 0; $i < 5; $i++)
                            <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                        @endfor
                        <span class="ml-2 text-gray-600 font-medium">5.0 Stars</span>
                    </div>
                </div>

                <!-- Testimonial Quote -->
                <blockquote class="text-2xl lg:text-3xl font-medium text-gray-900 leading-relaxed mb-8 italic">
                    "US Global Mail is literally keeping my digital nomad lifestyle possible!"
                </blockquote>

                <!-- Detailed Review -->
                <p class="text-lg text-gray-700 leading-relaxed mb-8">
                    I've been traveling Asia and Europe for 18 months now. US Global Mail handles everything - my
                    student loan documents,
                    bank statements, important packages from family. No stress, no missed deadlines.
                    When I ordered limited edition books for my research, they forwarded them perfectly to my Airbnb.
                </p>

                <!-- Key Benefits Highlighted -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-white rounded-xl p-4 shadow-sm">
                        <svg class="w-8 h-8 text-blue-600 mx-auto mb-2" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <p class="text-sm font-medium text-gray-900">Never Missed Important Mail</p>
                    </div>
                    <div class="bg-white rounded-xl p-4 shadow-sm">
                        <svg class="w-8 h-8 text-green-600 mx-auto mb-2" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M20 7l-8-4-8 4m16 0l-8 4-8-4"></path>
                        </svg>
                        <p class="text-sm font-medium text-gray-900">Perfect Package Forwarding</p>
                    </div>
                    <div class="bg-white rounded-xl p-4 shadow-sm">
                        <svg class="w-8 h-8 text-purple-600 mx-auto mb-2" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 18h.01M8 21h4a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                        <p class="text-sm font-medium text-gray-900">Mobile App Works Everywhere</p>
                    </div>
                </div>

                <!-- Travel Stats -->
                <div class="bg-white rounded-xl p-6 shadow-sm">
                    <h4 class="font-bold text-gray-900 mb-4">Sarah's Travel Journey</h4>
                    <div class="grid grid-cols-2 md:grid-cols-4 gap-4 text-sm">
                        <div class="text-center">
                            <div class="text-lg font-bold text-blue-600 mb-1">18 Mo</div>
                            <div class="text-gray-600">Traveling</div>
                        </div>
                        <div class="text-center">
                            <div class="text-lg font-bold text-green-600 mb-1">12</div>
                            <div class="text-gray-600">Countries Visited</div>
                        </div>
                        <div class="text-center">
                            <div class="text-lg font-bold text-purple-600 mb-1">156</div>
                            <div class="text-gray-600">Packages Forwarded</div>
                        </div>
                        <div class="text-center">
                            <div class="text-lg font-bold text-orange-600 mb-1">0</div>
                            <div class="text-gray-600">Missed Deadlines</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Additional Mini Testimonials -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            <!-- Testimonial 1 -->
            <div class="bg-gray-50 rounded-xl p-6 text-center">
                <img src="{{ asset('assets/images/testimonials/expat-woman-1.webp') }}" alt="Maria S."
                    class="w-16 h-16 rounded-full mx-auto mb-4">
                <h4 class="font-semibold text-gray-900 mb-1">Maria S.</h4>
                <p class="text-sm text-gray-600 mb-3">Seoul, South Korea</p>
                <p class="text-gray-700 italic text-sm mb-4">
                    "Perfect for my teaching job abroad. Family packages and tax documents arrive safely every time."
                </p>
                <div class="flex justify-center">
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
            <div class="bg-gray-50 rounded-xl p-6 text-center">
                <img src="{{ asset('assets/images/testimonials/remote-worker.webp') }}" alt="Alex R."
                    class="w-16 h-16 rounded-full mx-auto mb-4">
                <h4 class="font-semibold text-gray-900 mb-1">Alex R.</h4>
                <p class="text-sm text-gray-600 mb-3">Lisbon, Portugal</p>
                <p class="text-gray-700 italic text-sm mb-4">
                    "Remote work made easy! My equipment packages and business mail arrive perfectly while I'm coding."
                </p>
                <div class="flex justify-center">
                    @for ($i = 0; $i < 5; $i++)
                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 );
</path>
                        </svg>
 @endfor
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-gray-50 rounded-xl p-6 text-center">
                <img src="{{ asset('assets/images/testimonials/student.webp') }}" alt="James L."
                    class="w-16 h-16 rounded-full mx-auto mb-4">
                <h4 class="font-semibold text-gray-900 mb-1">James L.</h4>
                <p class="text-sm text-gray-600 mb-3">Amsterdam, Netherlands</p>
                <p class="text-gray-700 italic text-sm mb-4">
                    "Study abroad became stress-free! Textbooks and important university mail never missed."
                </p>
                <div class="flex justify-center">
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

        <!-- Call to Action -->
        <div class="text-center bg-blue-600 rounded-2xl p-12 text-white">
            <h3 class="text-3xl font-bold mb-4">Join Thousands of Satisfied Globetrotters</h3>
            <p class="text-xl text-blue-100 mb-8 max-w-2xl mx-auto">
                Ready to simplify your global lifestyle? Start receiving mail digitally today and travel with complete
                peace of mind.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('register') }}"
                    class="inline-flex items-center px-8 py-3 border border-transparent text-base font-medium rounded-lg text-blue-600 bg-white hover:bg-gray-50 transition-colors duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                    Get Started Now
                </a>
                <a href="{{ route('reviews') }}"
                    class="inline-flex items-center px-8 py-3 border border-white/20 text-base font-medium rounded-lg text-white bg-white/10 hover:bg-white/20 transition-colors duration-200">
                    <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z">
                        </path>
                    </svg>
                    Read More Reviews
                </a>
            </div>
        </div>
    </div>
</section>
