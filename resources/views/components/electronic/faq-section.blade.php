<section class="bg-white py-20">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-6">
                Electronic check deposit FAQs
            </h2>
            <p class="text-xl text-gray-600">
                Get answers to common questions about our electronic check deposit services.
            </p>
        </div>

        <div class="space-y-6">
            <!-- FAQ Item 1 -->
            <div class="bg-gray-50 rounded-2xl p-6">
                <button class="w-full text-left flex items-center justify-between focus:outline-none"
                    onclick="toggleFAQ(1)">
                    <h3 class="text-lg font-semibold text-gray-900">How quickly are funds available after depositing a
                        check?</h3>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200" id="icon-1"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="mt-4 text-gray-600 hidden overflow-hidden" id="answer-1" style="max-height: 0; opacity: 0;">
                    <p>Funds are typically available within 1-2 business days for most checks, with same-day
                        availability for qualifying checks. We provide real-time status updates so you know exactly when
                        your funds will be available.</p>
                </div>
            </div>

            <!-- FAQ Item 2 -->
            <div class="bg-gray-50 rounded-2xl p-6">
                <button class="w-full text-left flex items-center justify-between focus:outline-none"
                    onclick="toggleFAQ(2)">
                    <h3 class="text-lg font-semibold text-gray-900">What types of checks can be deposited
                        electronically?</h3>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200" id="icon-2"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="mt-4 text-gray-600 hidden overflow-hidden" id="answer-2" style="max-height: 0; opacity: 0;">
                    <p>We accept most types of business and personal checks, including payroll checks, vendor payments,
                        customer payments, and government checks. We do not accept third-party checks or checks over
                        $25,000 without prior approval.</p>
                </div>
            </div>

            <!-- FAQ Item 3 -->
            <div class="bg-gray-50 rounded-2xl p-6">
                <button class="w-full text-left flex items-center justify-between focus:outline-none"
                    onclick="toggleFAQ(3)">
                    <h3 class="text-lg font-semibold text-gray-900">Is there a limit on the number of checks I can
                        deposit?</h3>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200" id="icon-3"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="mt-4 text-gray-600 hidden overflow-hidden" id="answer-3" style="max-height: 0; opacity: 0;">
                    <p>There are no limits on the number of checks you can deposit. Our platform is designed to handle
                        high-volume processing, whether you're depositing 10 checks or 10,000 checks per month.</p>
                </div>
            </div>

            <!-- FAQ Item 4 -->
            <div class="bg-gray-50 rounded-2xl p-6">
                <button class="w-full text-left flex items-center justify-between focus:outline-none"
                    onclick="toggleFAQ(4)">
                    <h3 class="text-lg font-semibold text-gray-900">How secure is the electronic check deposit process?
                    </h3>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200" id="icon-4"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="mt-4 text-gray-600 hidden overflow-hidden" id="answer-4" style="max-height: 0; opacity: 0;">
                    <p>We use bank-level encryption and are SOC2 and HIPAA compliant. All check images are encrypted in
                        transit and at rest, and we maintain detailed audit logs for every transaction. Your data is
                        protected with the same security standards used by major financial institutions.</p>
                </div>
            </div>

            <!-- FAQ Item 5 -->
            <div class="bg-gray-50 rounded-2xl p-6">
                <button class="w-full text-left flex items-center justify-between focus:outline-none"
                    onclick="toggleFAQ(5)">
                    <h3 class="text-lg font-semibold text-gray-900">Can I integrate this with my existing accounting
                        software?</h3>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200" id="icon-5"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="mt-4 text-gray-600 hidden overflow-hidden" id="answer-5" style="max-height: 0; opacity: 0;">
                    <p>Yes! We offer API integrations with popular accounting software including QuickBooks, Xero, and
                        Sage. We also provide webhook notifications and CSV export options for custom integrations.</p>
                </div>
            </div>

            <!-- FAQ Item 6 -->
            <div class="bg-gray-50 rounded-2xl p-6">
                <button class="w-full text-left flex items-center justify-between focus:outline-none"
                    onclick="toggleFAQ(6)">
                    <h3 class="text-lg font-semibold text-gray-900">What happens if a check is returned or rejected?
                    </h3>
                    <svg class="w-5 h-5 text-gray-500 transform transition-transform duration-200" id="icon-6"
                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div class="mt-4 text-gray-600 hidden overflow-hidden" id="answer-6" style="max-height: 0; opacity: 0;">
                    <p>If a check is returned or rejected, we'll notify you immediately via email and dashboard
                        notification. The amount will be debited from your account, and you'll receive detailed
                        information about the reason for rejection to help resolve the issue.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function toggleFAQ(id) {
        const answer = document.getElementById(`answer-${id}`);
        const icon = document.getElementById(`icon-${id}`);

        if (answer.classList.contains('hidden')) {
            answer.classList.remove('hidden');
            answer.style.maxHeight = '0';
            answer.style.opacity = '0';
            // Force reflow
            answer.offsetHeight;
            answer.style.transition = 'max-height 0.3s ease-in-out, opacity 0.3s ease-in-out, padding-top 0.3s ease-in-out';
            answer.style.maxHeight = answer.scrollHeight + 'px';
            answer.style.opacity = '1';
            answer.style.paddingTop = '1rem';
            icon.style.transform = 'rotate(180deg)';
        } else {
            answer.style.maxHeight = '0';
            answer.style.opacity = '0';
            answer.style.paddingTop = '0';
            icon.style.transform = 'rotate(0deg)';
            setTimeout(() => {
                answer.classList.add('hidden');
            }, 300);
        }
    }
</script>







