@extends('layouts.app')

@section('content')
    <div class="bg-white min-h-screen" x-data="{ billingCycle: 'annually' }">
        <!-- Header Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 pb-8">
            <div class="text-center">
                <h1 class="text-[56px] leading-[1.1] max-w-4xl mx-auto font-bold text-gray-900 mb-4">
                    Virtual mailbox plans for any need, from expats to enterprises
                </h1>
            </div>

            <!-- Benefits Section -->
            <div class="flex flex-wrap justify-center gap-3 mb-12 max-w-4xl mx-auto">
                <div class="inline-flex gap-3 items-center px-4 py-2 bg-blue-50 text-primary rounded-full text-base font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M2.375 11.2305C2.375 6.74297 6.0125 3.10547 10.5 3.10547C14.9875 3.10547 18.625 6.74297 18.625 11.2305C18.625 15.718 14.9875 19.3555 10.5 19.3555C6.0125 19.3555 2.375 15.718 2.375 11.2305ZM13.5083 9.7188C13.5583 9.65218 13.5945 9.57623 13.6147 9.49543C13.635 9.41462 13.6388 9.33059 13.6261 9.24826C13.6134 9.16594 13.5844 9.08699 13.5407 9.01605C13.4971 8.94511 13.4396 8.88362 13.3719 8.83518C13.3041 8.78674 13.2273 8.75234 13.1461 8.73399C13.0648 8.71565 12.9807 8.71373 12.8987 8.72835C12.8167 8.74298 12.7385 8.77385 12.6686 8.81914C12.5987 8.86444 12.5385 8.92326 12.4917 8.99214L9.795 12.7671L8.44167 11.4138C8.32319 11.3034 8.16648 11.2433 8.00456 11.2462C7.84265 11.249 7.68816 11.3146 7.57365 11.4291C7.45914 11.5436 7.39354 11.6981 7.39069 11.86C7.38783 12.022 7.44793 12.1787 7.55833 12.2971L9.43333 14.1721C9.49749 14.2362 9.57483 14.2856 9.65999 14.3168C9.74515 14.3481 9.83608 14.3604 9.92647 14.3529C10.0169 14.3455 10.1045 14.3184 10.1834 14.2737C10.2623 14.2289 10.3305 14.1676 10.3833 14.0938L13.5083 9.7188Z" fill="#4386FC"></path>
					</svg>
                    Stay connected from anywhere
                </div>
                <div class="inline-flex gap-3 items-center px-4 py-2 bg-blue-50 text-primary rounded-full text-base font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M2.375 11.2305C2.375 6.74297 6.0125 3.10547 10.5 3.10547C14.9875 3.10547 18.625 6.74297 18.625 11.2305C18.625 15.718 14.9875 19.3555 10.5 19.3555C6.0125 19.3555 2.375 15.718 2.375 11.2305ZM13.5083 9.7188C13.5583 9.65218 13.5945 9.57623 13.6147 9.49543C13.635 9.41462 13.6388 9.33059 13.6261 9.24826C13.6134 9.16594 13.5844 9.08699 13.5407 9.01605C13.4971 8.94511 13.4396 8.88362 13.3719 8.83518C13.3041 8.78674 13.2273 8.75234 13.1461 8.73399C13.0648 8.71565 12.9807 8.71373 12.8987 8.72835C12.8167 8.74298 12.7385 8.77385 12.6686 8.81914C12.5987 8.86444 12.5385 8.92326 12.4917 8.99214L9.795 12.7671L8.44167 11.4138C8.32319 11.3034 8.16648 11.2433 8.00456 11.2462C7.84265 11.249 7.68816 11.3146 7.57365 11.4291C7.45914 11.5436 7.39354 11.6981 7.39069 11.86C7.38783 12.022 7.44793 12.1787 7.55833 12.2971L9.43333 14.1721C9.49749 14.2362 9.57483 14.2856 9.65999 14.3168C9.74515 14.3481 9.83608 14.3604 9.92647 14.3529C10.0169 14.3455 10.1045 14.3184 10.1834 14.2737C10.2623 14.2289 10.3305 14.1676 10.3833 14.0938L13.5083 9.7188Z" fill="#4386FC"></path>
					</svg>
                    Unlimited exterior mail scans
                </div>
                <div class="inline-flex gap-3 items-center px-4 py-2 bg-blue-50 text-primary rounded-full text-base font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M2.375 11.2305C2.375 6.74297 6.0125 3.10547 10.5 3.10547C14.9875 3.10547 18.625 6.74297 18.625 11.2305C18.625 15.718 14.9875 19.3555 10.5 19.3555C6.0125 19.3555 2.375 15.718 2.375 11.2305ZM13.5083 9.7188C13.5583 9.65218 13.5945 9.57623 13.6147 9.49543C13.635 9.41462 13.6388 9.33059 13.6261 9.24826C13.6134 9.16594 13.5844 9.08699 13.5407 9.01605C13.4971 8.94511 13.4396 8.88362 13.3719 8.83518C13.3041 8.78674 13.2273 8.75234 13.1461 8.73399C13.0648 8.71565 12.9807 8.71373 12.8987 8.72835C12.8167 8.74298 12.7385 8.77385 12.6686 8.81914C12.5987 8.86444 12.5385 8.92326 12.4917 8.99214L9.795 12.7671L8.44167 11.4138C8.32319 11.3034 8.16648 11.2433 8.00456 11.2462C7.84265 11.249 7.68816 11.3146 7.57365 11.4291C7.45914 11.5436 7.39354 11.6981 7.39069 11.86C7.38783 12.022 7.44793 12.1787 7.55833 12.2971L9.43333 14.1721C9.49749 14.2362 9.57483 14.2856 9.65999 14.3168C9.74515 14.3481 9.83608 14.3604 9.92647 14.3529C10.0169 14.3455 10.1045 14.3184 10.1834 14.2737C10.2623 14.2289 10.3305 14.1676 10.3833 14.0938L13.5083 9.7188Z" fill="#4386FC"></path>
					</svg>
                    Enhance privacy and security
                </div>
                <div class="inline-flex gap-3 items-center px-4 py-2 bg-blue-50 text-primary rounded-full text-base font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M2.375 11.2305C2.375 6.74297 6.0125 3.10547 10.5 3.10547C14.9875 3.10547 18.625 6.74297 18.625 11.2305C18.625 15.718 14.9875 19.3555 10.5 19.3555C6.0125 19.3555 2.375 15.718 2.375 11.2305ZM13.5083 9.7188C13.5583 9.65218 13.5945 9.57623 13.6147 9.49543C13.635 9.41462 13.6388 9.33059 13.6261 9.24826C13.6134 9.16594 13.5844 9.08699 13.5407 9.01605C13.4971 8.94511 13.4396 8.88362 13.3719 8.83518C13.3041 8.78674 13.2273 8.75234 13.1461 8.73399C13.0648 8.71565 12.9807 8.71373 12.8987 8.72835C12.8167 8.74298 12.7385 8.77385 12.6686 8.81914C12.5987 8.86444 12.5385 8.92326 12.4917 8.99214L9.795 12.7671L8.44167 11.4138C8.32319 11.3034 8.16648 11.2433 8.00456 11.2462C7.84265 11.249 7.68816 11.3146 7.57365 11.4291C7.45914 11.5436 7.39354 11.6981 7.39069 11.86C7.38783 12.022 7.44793 12.1787 7.55833 12.2971L9.43333 14.1721C9.49749 14.2362 9.57483 14.2856 9.65999 14.3168C9.74515 14.3481 9.83608 14.3604 9.92647 14.3529C10.0169 14.3455 10.1045 14.3184 10.1834 14.2737C10.2623 14.2289 10.3305 14.1676 10.3833 14.0938L13.5083 9.7188Z" fill="#4386FC"></path>
					</svg>
                    Save time and reduce costs
                </div>
                <div class="inline-flex gap-3 items-center px-4 py-2 bg-blue-50 text-primary rounded-full text-base font-medium">
                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M2.375 11.2305C2.375 6.74297 6.0125 3.10547 10.5 3.10547C14.9875 3.10547 18.625 6.74297 18.625 11.2305C18.625 15.718 14.9875 19.3555 10.5 19.3555C6.0125 19.3555 2.375 15.718 2.375 11.2305ZM13.5083 9.7188C13.5583 9.65218 13.5945 9.57623 13.6147 9.49543C13.635 9.41462 13.6388 9.33059 13.6261 9.24826C13.6134 9.16594 13.5844 9.08699 13.5407 9.01605C13.4971 8.94511 13.4396 8.88362 13.3719 8.83518C13.3041 8.78674 13.2273 8.75234 13.1461 8.73399C13.0648 8.71565 12.9807 8.71373 12.8987 8.72835C12.8167 8.74298 12.7385 8.77385 12.6686 8.81914C12.5987 8.86444 12.5385 8.92326 12.4917 8.99214L9.795 12.7671L8.44167 11.4138C8.32319 11.3034 8.16648 11.2433 8.00456 11.2462C7.84265 11.249 7.68816 11.3146 7.57365 11.4291C7.45914 11.5436 7.39354 11.6981 7.39069 11.86C7.38783 12.022 7.44793 12.1787 7.55833 12.2971L9.43333 14.1721C9.49749 14.2362 9.57483 14.2856 9.65999 14.3168C9.74515 14.3481 9.83608 14.3604 9.92647 14.3529C10.0169 14.3455 10.1045 14.3184 10.1834 14.2737C10.2623 14.2289 10.3305 14.1676 10.3833 14.0938L13.5083 9.7188Z" fill="#4386FC"></path>
					</svg>
                    Always free check deposits
                </div>
            </div>

            <!-- Billing Toggle -->
            <div class="flex justify-center mb-12">
                <div class="flex items-center space-x-4">
                    <span class="text-sm font-medium text-gray-700">Billed Monthly</span>

                    <!-- Toggle Switch -->
                    <div class="relative">
                        <button @click="billingCycle = billingCycle === 'monthly' ? 'annually' : 'monthly'"
                            :class="billingCycle === 'monthly' ? 'bg-gray-200' : 'bg-blue-600'"
                            class="relative w-12 h-6 rounded-full transition-colors duration-200 focus:outline-none focus:ring-none">
                            <!-- White thumb -->
                            <div :class="billingCycle === 'monthly' ? 'translate-x-1' : 'translate-x-6'"
                                class="absolute top-0.5 size-5 bg-white rounded-full shadow-md transition-transform duration-200 ease-in-out">
                            </div>
                        </button>
                    </div>

                    <div class="flex items-center space-x-2">
                        <span class="text-sm font-medium text-gray-700">Billed Annually</span>
                        <template x-if="billingCycle === 'monthly'">
                            <span class="bg-yellow-400 text-gray-800 text-xs font-semibold px-2 py-1 rounded-full">
                                Save up 30%
                            </span>
                        </template>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pricing Plans Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Essentials Plan -->
                <x-pricing.plan-card title="Essentials" subtitle="Expats, Solopreneurs, Digital Nomads"
                    monthly-price="19.95" annual-price="13.97" monthly-value="75" annual-value="52.50"
                    description="Reliable mail management with core features you need." :features="[
                        'Professional business address',
                        'Unlimited exterior mail scans',
                        '25 pages mail scans included/mo',
                        '5 recipients (individuals + companies)',
                        '30 day free mail storage',
                        'Same-day mail scanning',
                        'Free check deposits forever!',
                    ]"
                    button-color="blue" />

                <!-- Virtual Teams Plan -->
                <x-pricing.plan-card title="Virtual Teams" subtitle="Remote-first Companies" monthly-price="45"
                    annual-price="31.50" monthly-value="180" annual-value="126"
                    description="Our most popular plan for complete, hassle-free mail management." :features="[
                        'Professional US business address',
                        'Unlimited exterior mail scans',
                        '30 envelopes scanned/mo',
                        '5 recipients (individuals + companies)',
                        '60 day free mail storage',
                        '4-6 hour mail scans',
                        'Free Check Deposits Forever!',
                    ]"
                    button-color="orange" :popular="true"
                    additional-note="Includes 30 pcs of mail opened and scanned each month!" />

                <!-- Enterprise Plan -->
                <x-pricing.plan-card title="Enterprise" subtitle="Operations & Compliance Teams" monthly-price="85"
                    annual-price="59.50" monthly-value="400" annual-value="280"
                    description="Advanced mail solutions with premium integrations and dedicated support." :features="[
                        'Professional US business address',
                        'Unlimited exterior mail scans',
                        '100 envelopes opened and contents scanned',
                        '10 recipients (individuals + companies)',
                        '60 day free mail storage',
                        '2-4 hour mail scans',
                        'Free check deposits forever!',
                        'Automations to scan and forward mail',
                        'Collaborative mail notes & data exports',
                        'User roles & permissions',
                        'Dedicated account manager',
                    ]"
                    button-color="blue" />
            </div>

            <!-- Bottom Select Plan Button -->
            <div class="text-center mt-12">
                <button
                    class="bg-primary hover:bg-blue-700 text-white font-semibold px-8 py-3 rounded-lg shadow-lg text-lg">
                    Select Plan
                </button>
            </div>
        </div>

        @include('components.pricing.partner-section')
        @include('components.pricing.plan-feature')
        @include('components.landing.cta-section')
        @include('components.pricing.testimonial-section')
        @include('components.pricing.more-service')
        {{-- @include('components.pricing.award-section') --}}
        @include('components.pricing.faq-section')
    </div>
@endsection
