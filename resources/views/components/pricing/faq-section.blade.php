<div class="bg-white py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Subtitle -->
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">
                Frequently Asked Questions
            </h2>
            <p class="text-lg text-gray-600">
                Everything you need to know about our virtual mail service.
            </p>
        </div>

        <!-- FAQ Accordion -->
        <div class="space-y-0" x-data="{
            openItem: null,
            toggleItem(item) {
                this.openItem = this.openItem === item ? null : item;
            }
        }">
            <!-- FAQ Item 1 -->
            <div class="border-b border-gray-200">
                <button @click="toggleItem(1)"
                    class="w-full py-6 text-left flex justify-between items-center hover:bg-gray-50 transition-colors">
                    <span class="text-lg font-medium text-gray-900">Is the address a PO Box?</span>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform"
                        :class="{ 'rotate-180': openItem === 1 }" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="openItem === 1" x-transition class="pb-6 pr-6">
                    <p class="text-gray-600">No, our addresses are real street addresses, not PO Boxes. This means you
                        can use them for business purposes, government documents, and other services that don't accept
                        PO Box addresses.</p>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="border-b border-gray-200">
                <button @click="toggleItem(2)"
                    class="w-full py-6 text-left flex justify-between items-center hover:bg-gray-50 transition-colors">
                    <span class="text-lg font-medium text-gray-900">Can I use the service if I live outside the
                        U.S.?</span>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform"
                        :class="{ 'rotate-180': openItem === 2 }" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="openItem === 2" x-transition class="pb-6 pr-6">
                    <p class="text-gray-600">Absolutely! Our virtual mailbox service is perfect for expats, digital
                        nomads, and international businesses. You can manage your US mail from anywhere in the world.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="border-b border-gray-200">
                <button @click="toggleItem(3)"
                    class="w-full py-6 text-left flex justify-between items-center hover:bg-gray-50 transition-colors">
                    <span class="text-lg font-medium text-gray-900">Can I use my USGM address with government
                        agencies?</span>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform"
                        :class="{ 'rotate-180': openItem === 3 }" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="openItem === 3" x-transition class="pb-6 pr-6">
                    <p class="text-gray-600">Yes, our addresses are real street addresses that can be used with most
                        government agencies, including the IRS, DMV, and passport services.</p>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="border-b border-gray-200">
                <button @click="toggleItem(4)"
                    class="w-full py-6 text-left flex justify-between items-center hover:bg-gray-50 transition-colors">
                    <span class="text-lg font-medium text-gray-900">Can I receive mail for my whole family or multiple
                        businesses in one mailbox?</span>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform"
                        :class="{ 'rotate-180': openItem === 4 }" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="openItem === 4" x-transition class="pb-6 pr-6">
                    <p class="text-gray-600">Yes, you can receive mail for multiple recipients and businesses at the
                        same address. Each plan includes a specific number of recipients that can receive mail at your
                        virtual mailbox.</p>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="border-b border-gray-200">
                <button @click="toggleItem(5)"
                    class="w-full py-6 text-left flex justify-between items-center hover:bg-gray-50 transition-colors">
                    <span class="text-lg font-medium text-gray-900">How does the free check deposit service work?</span>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform"
                        :class="{ 'rotate-180': openItem === 5 }" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="openItem === 5" x-transition class="pb-6 pr-6">
                    <p class="text-gray-600">When you receive a check in your virtual mailbox, we'll scan it and deposit
                        it directly into your bank account. This service is completely free and available on all plans.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 6 -->
            <div class="border-b border-gray-200">
                <button @click="toggleItem(6)"
                    class="w-full py-6 text-left flex justify-between items-center hover:bg-gray-50 transition-colors">
                    <span class="text-lg font-medium text-gray-900">Can I change my plan at any time?</span>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform"
                        :class="{ 'rotate-180': openItem === 6 }" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="openItem === 6" x-transition class="pb-6 pr-6">
                    <p class="text-gray-600">Yes, you can upgrade or downgrade your plan at any time. Changes take
                        effect at the start of your next billing cycle.</p>
                </div>
            </div>

            <!-- FAQ Item 7 -->
            <div class="border-b border-gray-200">
                <button @click="toggleItem(7)"
                    class="w-full py-6 text-left flex justify-between items-center hover:bg-gray-50 transition-colors">
                    <span class="text-lg font-medium text-gray-900">I don't see my current plan listed on the
                        page?</span>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform"
                        :class="{ 'rotate-180': openItem === 7 }" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="openItem === 7" x-transition class="pb-6 pr-6">
                    <p class="text-gray-600">If you're on a legacy plan that's no longer available, you can continue
                        with your current plan or upgrade to one of our current offerings. Contact our support team for
                        assistance.</p>
                </div>
            </div>

            <!-- FAQ Item 8 -->
            <div class="border-b border-gray-200">
                <button @click="toggleItem(8)"
                    class="w-full py-6 text-left flex justify-between items-center hover:bg-gray-50 transition-colors">
                    <span class="text-lg font-medium text-gray-900">Is there a free trial available?</span>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform"
                        :class="{ 'rotate-180': openItem === 8 }" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="openItem === 8" x-transition class="pb-6 pr-6">
                    <p class="text-gray-600">We offer a 30-day money-back guarantee on all plans. If you're not
                        satisfied with our service, you can cancel within 30 days for a full refund.</p>
                </div>
            </div>

            <!-- FAQ Item 9 -->
            <div class="border-b border-gray-200">
                <button @click="toggleItem(9)"
                    class="w-full py-6 text-left flex justify-between items-center hover:bg-gray-50 transition-colors">
                    <span class="text-lg font-medium text-gray-900">How long does it take to set up my virtual
                        mailbox?</span>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform"
                        :class="{ 'rotate-180': openItem === 9 }" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="openItem === 9" x-transition class="pb-6 pr-6">
                    <p class="text-gray-600">Setup is quick and easy! Once you complete your registration and submit
                        the required Form 1583, your virtual mailbox will be ready to receive mail within 1-2 business
                        days.</p>
                </div>
            </div>

            <!-- FAQ Item 10 -->
            <div class="border-b border-gray-200">
                <button @click="toggleItem(10)"
                    class="w-full py-6 text-left flex justify-between items-center hover:bg-gray-50 transition-colors">
                    <span class="text-lg font-medium text-gray-900">How quickly can I access my mail?</span>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform"
                        :class="{ 'rotate-180': openItem === 10 }" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="openItem === 10" x-transition class="pb-6 pr-6">
                    <p class="text-gray-600">Mail is typically scanned and available in your dashboard within 24 hours
                        of receipt. For urgent items, we offer same-day scanning services.</p>
                </div>
            </div>

            <!-- FAQ Item 11 -->
            <div class="border-b border-gray-200">
                <button @click="toggleItem(11)"
                    class="w-full py-6 text-left flex justify-between items-center hover:bg-gray-50 transition-colors">
                    <span class="text-lg font-medium text-gray-900">How secure is my mail and data with USGM?</span>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform"
                        :class="{ 'rotate-180': openItem === 11 }" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="openItem === 11" x-transition class="pb-6 pr-6">
                    <p class="text-gray-600">We take security seriously. All mail is handled in secure facilities with
                        24/7 monitoring, and your data is protected with bank-level encryption and security protocols.
                    </p>
                </div>
            </div>

            <!-- FAQ Item 12 -->
            <div class="border-b border-gray-200">
                <button @click="toggleItem(12)"
                    class="w-full py-6 text-left flex justify-between items-center hover:bg-gray-50 transition-colors">
                    <span class="text-lg font-medium text-gray-900">Is there a contract or long-term commitment
                        required?</span>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform"
                        :class="{ 'rotate-180': openItem === 12 }" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="openItem === 12" x-transition class="pb-6 pr-6">
                    <p class="text-gray-600">No long-term contracts required! All our plans are month-to-month, and you
                        can cancel at any time with no penalties or fees.</p>
                </div>
            </div>

            <!-- FAQ Item 13 -->
            <div class="border-b border-gray-200">
                <button @click="toggleItem(13)"
                    class="w-full py-6 text-left flex justify-between items-center hover:bg-gray-50 transition-colors">
                    <span class="text-lg font-medium text-gray-900">What kind of customer support is available?</span>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform"
                        :class="{ 'rotate-180': openItem === 13 }" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="openItem === 13" x-transition class="pb-6 pr-6">
                    <p class="text-gray-600">We offer comprehensive customer support including live chat, email
                        support, and phone support during business hours. Our support team is available to help with any
                        questions or issues.</p>
                </div>
            </div>

            <!-- FAQ Item 14 -->
            <div class="border-b border-gray-200">
                <button @click="toggleItem(14)"
                    class="w-full py-6 text-left flex justify-between items-center hover:bg-gray-50 transition-colors">
                    <span class="text-lg font-medium text-gray-900">Does the service integrate with other apps?</span>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform"
                        :class="{ 'rotate-180': openItem === 14 }" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="openItem === 14" x-transition class="pb-6 pr-6">
                    <p class="text-gray-600">Yes! Our service integrates with popular business tools and apps. We also
                        offer API access for custom integrations to streamline your workflow.</p>
                </div>
            </div>
        </div>

        <!-- Bottom CTA -->
        <div class="text-center mt-12">
            <p class="text-gray-600">
                Got more questions?
                <a href="/faqs" class="text-primary hover:text-blue-700 font-medium inline-flex items-center">
                    Check out Help Center
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </p>
        </div>
    </div>
</div>
