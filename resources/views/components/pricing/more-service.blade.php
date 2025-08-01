<div class="pricing-more-services">
    <div class="container mx-auto px-4 py-12">
        <!-- Title Section -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-800 mb-4">NO PROBLEM:</h2>
            <p class="text-lg text-gray-600">Additional services and features available</p>
        </div>

        <!-- Pricing Table -->
        <div class="max-w-4xl mx-auto">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <!-- Table Header -->
                <div class="bg-gray-100 px-6 py-4 border-b border-gray-200">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div class="font-semibold text-gray-800">Service</div>
                        <div class="font-semibold text-gray-800">Price</div>
                        <div class="font-semibold text-gray-800">Feature</div>
                    </div>
                </div>

                <!-- Table Rows -->
                <div class="divide-y divide-gray-200">
                    <!-- Row 1: Additional Account Users -->
                    <div class="px-6 py-4 hover:bg-gray-50 transition-colors">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center">
                            <div class="font-semibold text-gray-800">Add additional account users</div>
                            <div class="font-semibold text-blue-600">$15/seat/month</div>
                            <div class="text-gray-600">Add additional users to manage mail and set permissions for them
                                - Business plans only</div>
                        </div>
                    </div>

                    <!-- Row 2: Additional Recipients -->
                    <div class="px-6 py-4 hover:bg-gray-50 transition-colors">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center">
                            <div class="font-semibold text-gray-800">Add additional recipients</div>
                            <div class="font-semibold text-blue-600">$5.00 /recipient/month</div>
                            <div class="text-gray-600">Add additional recipients to manage mail on the same account
                            </div>
                        </div>
                    </div>

                    <!-- Row 3: Additional Interior Scans -->
                    <div class="px-6 py-4 hover:bg-gray-50 transition-colors">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center">
                            <div class="font-semibold text-gray-800">Additional interior scans</div>
                            <div class="font-semibold text-blue-600">$0.90 - $0.97 /page</div>
                            <div class="text-gray-600">After free scans are used up, additional mail that is opened and
                                content pages are scanned</div>
                        </div>
                    </div>

                    <!-- Row 4: Discounted Scan Bundles -->
                    <div class="px-6 py-4 hover:bg-gray-50 transition-colors">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center">
                            <div class="font-semibold text-gray-800">Discounted scan bundles</div>
                            <div class="font-semibold text-blue-600">$0.50 - $0.80 /page</div>
                            <div class="text-gray-600">Save with scan bundles for additional interior mail scanning
                            </div>
                        </div>
                    </div>

                    <!-- Row 5: Additional Mail Storage -->
                    <div class="px-6 py-4 hover:bg-gray-50 transition-colors">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center">
                            <div class="font-semibold text-gray-800">Additional mail storage</div>
                            <div class="font-semibold text-blue-600">$0.05 /letter/day<br>$0.10 /lb/box/day</div>
                            <div class="text-gray-600">After free days expire, storage cost that letters and packages
                                accumulate</div>
                        </div>
                    </div>

                    <!-- Row 6: Mail Pick-up in Person -->
                    <div class="px-6 py-4 hover:bg-gray-50 transition-colors">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center">
                            <div class="font-semibold text-gray-800">Mail pick-up in person</div>
                            <div class="font-semibold text-blue-600">$5.00 flat for letters<br>$15.00 fixed, plus $1.00
                                /lb for packages</div>
                            <div class="text-gray-600">Pick up your mailbox items in person at the warehouse/store</div>
                        </div>
                    </div>

                    <!-- Row 7: Open & Inspect Packages -->
                    <div class="px-6 py-4 hover:bg-gray-50 transition-colors">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center">
                            <div class="font-semibold text-gray-800">Open & inspect packages</div>
                            <div class="font-semibold text-blue-600">$5.00 /request</div>
                            <div class="text-gray-600">Upon request, we will open and upload up to 5 pictures of items
                                inside a package</div>
                        </div>
                    </div>

                    <!-- Row 8: Bundle Items for Shipping -->
                    <div class="px-6 py-4 hover:bg-gray-50 transition-colors">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-center">
                            <div class="font-semibold text-gray-800">Bundle items for shipping</div>
                            <div class="font-semibold text-blue-600">$2.00 for mail bundling<br>$5.00 for package
                                bundling</div>
                            <div class="text-gray-600">Save on shipping costs by bundling multiple items to ship
                                together in one envelope/package</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <div class="text-center mt-12">
            <p class="text-gray-600 mb-6">Need help choosing the right plan?</p>
            <button
                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-8 rounded-lg transition-colors">
                Contact Sales
            </button>
        </div>
    </div>
</div>

<style>
    .pricing-more-services {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
    }

    @media (max-width: 768px) {
        .pricing-more-services .grid {
            grid-template-columns: 1fr;
        }

        .pricing-more-services .grid>div {
            margin-bottom: 0.5rem;
        }

        .pricing-more-services .grid>div:first-child {
            font-weight: 600;
            color: #1f2937;
        }

        .pricing-more-services .grid>div:nth-child(2) {
            font-weight: 600;
            color: #2563eb;
        }
    }
</style>
