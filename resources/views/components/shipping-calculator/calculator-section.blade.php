<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gray-50 rounded-xl p-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Calculate Shipping Costs</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Origin -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">From (Origin)</label>
                    <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option>Houston, TX (iMailVault)</option>
                        <option>New York, NY</option>
                        <option>Los Angeles, CA</option>
                        <option>Chicago, IL</option>
                    </select>
                </div>

                <!-- Destination -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">To (Destination)</label>
                    <input type="text" placeholder="Enter destination city or ZIP code"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>

                <!-- Package Details -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Package Weight (lbs)</label>
                    <input type="number" placeholder="0.0" step="0.1"
                           class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                </div>

                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">Package Dimensions</label>
                    <div class="flex gap-2">
                        <input type="number" placeholder="Length"
                               class="flex-1 px-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <input type="number" placeholder="Width"
                               class="flex-1 px-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <input type="number" placeholder="Height"
                               class="flex-1 px-3 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                    </div>
                </div>
            </div>

            <div class="mt-8 text-center">
                <button class="px-8 py-4 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors font-semibold">
                    Calculate Shipping
                </button>
            </div>

            <!-- Results -->
            <div class="mt-8 bg-white rounded-lg p-6">
                <h3 class="text-xl font-semibold text-gray-900 mb-4">Shipping Options</h3>
                <div class="space-y-4">
                    <div class="flex justify-between items-center p-4 border border-gray-200 rounded-lg">
                        <div>
                            <h4 class="font-semibold text-gray-900">USPS Priority Mail</h4>
                            <p class="text-sm text-gray-600">2-3 business days</p>
                        </div>
                        <div class="text-right">
                            <div class="text-lg font-semibold text-gray-900">$12.50</div>
                        </div>
                    </div>
                    <div class="flex justify-between items-center p-4 border border-gray-200 rounded-lg">
                        <div>
                            <h4 class="font-semibold text-gray-900">USPS Ground Advantage</h4>
                            <p class="text-sm text-gray-600">5-7 business days</p>
                        </div>
                        <div class="text-right">
                            <div class="text-lg font-semibold text-gray-900">$8.95</div>
                        </div>
                    </div>
                    <div class="flex justify-between items-center p-4 border border-gray-200 rounded-lg">
                        <div>
                            <h4 class="font-semibold text-gray-900">FedEx Ground</h4>
                            <p class="text-sm text-gray-600">1-5 business days</p>
                        </div>
                        <div class="text-right">
                            <div class="text-lg font-semibold text-gray-900">$15.20</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
