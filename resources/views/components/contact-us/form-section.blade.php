<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Contact Form Title -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Contact Us</h2>
        </div>

        <!-- Contact Form -->
        <div class="bg-white rounded-lg shadow-lg p-8 mb-16">
            <form action="#" method="POST" class="space-y-6">
                @csrf

                <!-- Name and Email Row -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                            NAME <span class="text-red-500">*</span>
                        </label>
                        <input type="text" id="name" name="name" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                            placeholder="Enter your name">
                    </div>

                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                            EMAIL <span class="text-red-500">*</span>
                        </label>
                        <input type="email" id="email" name="email" required
                            class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                            placeholder="Enter your email">
                    </div>
                </div>

                <!-- I Am Dropdown -->
                <div>
                    <label for="user_type" class="block text-sm font-medium text-gray-700 mb-2">
                        I AM <span class="text-red-500">*</span>
                    </label>
                    <select id="user_type" name="user_type" required
                        class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors appearance-none bg-white">
                        <option value="">Select an option</option>
                        <option value="customer">Customer</option>
                        <option value="prospective_customer">Prospective Customer</option>
                        <option value="partner">Partner</option>
                        <option value="vendor">Vendor</option>
                        <option value="other">Other</option>
                    </select>
                    <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </div>
                </div>

                <!-- Subject -->
                <div>
                    <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">
                        SUBJECT <span class="text-red-500">*</span>
                    </label>
                    <input type="text" id="subject" name="subject" required
                        class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors"
                        placeholder="What is subject of your message?">
                </div>

                <!-- Message -->
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-2">
                        MESSAGE <span class="text-red-500">*</span>
                    </label>
                    <textarea id="message" name="message" rows="6" required
                        class="w-full px-4 py-3 border border-gray-300 rounded-md focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition-colors resize-none"
                        placeholder="Enter your message"></textarea>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded-md transition-colors duration-200 transform hover:scale-105">
                        Submit
                    </button>
                </div>
            </form>
        </div>

        <!-- Information Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Corporate Headquarters -->
            <div class="bg-gray-50 rounded-lg p-6 text-center">
                <div class="flex justify-center mb-4">
                    <svg class="w-12 h-12 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4">
                        </path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Corporate Headquarters</h3>
                <div class="text-gray-700">
                    <p class="font-medium">U.S. Global Mail</p>
                    <p>1321 Upland Drive</p>
                    <p>Houston, TX 77043</p>
                </div>
            </div>

            <!-- Business Hours -->
            <div class="bg-gray-50 rounded-lg p-6 text-center">
                <div class="flex justify-center mb-4">
                    <svg class="w-12 h-12 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Business Hours</h3>
                <div class="text-gray-700">
                    <p>Monday - Friday: 8:00AM - 6:00PM UTC</p>
                    <p>Saturday - Sunday: Closed</p>
                </div>
            </div>

            <!-- Help Center -->
            <div class="bg-gray-50 rounded-lg p-6 text-center">
                <div class="flex justify-center mb-4">
                    <svg class="w-12 h-12 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
                        </path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-2">Help Center</h3>
                <div class="text-gray-700">
                    <a href="#" class="text-blue-600 hover:text-blue-800 font-medium transition-colors">
                        Get Answers to your Questions
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
