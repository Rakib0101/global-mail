<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-6">
                What Non-Profit Leaders Say
            </h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Hear from organizations that have transformed their operations with iMailVault.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="bg-gray-50 rounded-xl p-6">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('assets/images/electronic-avatar-01.avif') }}" alt="Sarah M." class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h4 class="font-semibold text-gray-900">Sarah M.</h4>
                        <p class="text-sm text-gray-600">Executive Director, Community Foundation</p>
                    </div>
                </div>
                <p class="text-gray-700 italic">
                    "iMailVault has revolutionized how we handle donations and grant applications. The secure document processing gives our donors confidence, and we've reduced administrative time by 60%."
                </p>
                <div class="flex mt-4">
                    @for ($i = 0; $i < 5; $i++)
                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    @endfor
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="bg-gray-50 rounded-xl p-6">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('assets/images/Jamie.webp') }}" alt="Michael R." class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h4 class="font-semibold text-gray-900">Michael R.</h4>
                        <p class="text-sm text-gray-600">Board President, Environmental Group</p>
                    </div>
                </div>
                <p class="text-gray-700 italic">
                    "As a remote board member, iMailVault allows me to stay connected to our organization's mail without traveling. The digital access is perfect for our distributed team."
                </p>
                <div class="flex mt-4">
                    @for ($i = 0; $i < 5; $i++)
                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    @endfor
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-gray-50 rounded-xl p-6">
                <div class="flex items-center mb-4">
                    <img src="{{ asset('assets/images/trust-badge-07.avif') }}" alt="Jennifer L." class="w-12 h-12 rounded-full mr-4">
                    <div>
                        <h4 class="font-semibold text-gray-900">Jennifer L.</h4>
                        <p class="text-sm text-gray-600">Development Director, Arts Organization</p>
                    </div>
                </div>
                <p class="text-gray-700 italic">
                    "The check deposit feature has been a game-changer for our fundraising events. We can process donations immediately and provide faster acknowledgments to our supporters."
                </p>
                <div class="flex mt-4">
                    @for ($i = 0; $i < 5; $i++)
                        <svg class="w-4 h-4 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                        </svg>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</section>
