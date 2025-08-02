@extends('layouts.app')

@section('content')
    <div class="bg-white min-h-screen" x-data="{ billingCycle: 'annually' }">
        <!-- Header Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-12 pb-8">
            <div class="text-center">
                <h1 class="text-4xl font-bold text-gray-900 mb-4">
                    Virtual mailbox plans for any need
                </h1>
                <p class="text-xl text-gray-600 mb-8">
                    from expats to enterprises
                </p>
            </div>

            <!-- Benefits Section -->
            <div class="flex flex-wrap justify-center gap-3 mb-12">
                <div class="inline-flex items-center px-4 py-2 bg-blue-50 text-blue-700 rounded-full text-sm font-medium">
                    <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                    Stay connected from anywhere
                </div>
                <div class="inline-flex items-center px-4 py-2 bg-blue-50 text-blue-700 rounded-full text-sm font-medium">
                    <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                    Unlimited exterior mail scans
                </div>
                <div class="inline-flex items-center px-4 py-2 bg-blue-50 text-blue-700 rounded-full text-sm font-medium">
                    <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                    Enhance privacy and security
                </div>
                <div class="inline-flex items-center px-4 py-2 bg-blue-50 text-blue-700 rounded-full text-sm font-medium">
                    <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                    Save time and reduce costs
                </div>
                <div class="inline-flex items-center px-4 py-2 bg-blue-50 text-blue-700 rounded-full text-sm font-medium">
                    <svg class="w-4 h-4 mr-2 text-green-500" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
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
                            class="relative w-16 h-8 bg-gray-200 rounded-full transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                            <!-- White thumb -->
                            <div :class="billingCycle === 'monthly' ? 'translate-x-1' : 'translate-x-9'"
                                class="absolute top-1 w-6 h-6 bg-white rounded-full shadow-md transition-transform duration-200 ease-in-out">
                            </div>
                        </button>
                    </div>

                    <div class="flex items-center space-x-2">
                        <span class="text-sm font-medium text-gray-700">Billed Annually</span>
                        <span class="bg-yellow-400 text-gray-800 text-xs font-semibold px-2 py-1 rounded-full">
                            Save up 30%
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pricing Plans Section -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pb-16">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Essentials Plan -->
                <x-pricing.plan-card title="Essentials" subtitle="Expats, Solopreneurs, Digital Nomads"
                    monthly-price="19.95" annual-price="19.95" monthly-value="75" annual-value="75"
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
                    annual-price="45" monthly-value="180" annual-value="180"
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
                    annual-price="85" monthly-value="400" annual-value="400"
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
        @include('components.pricing.award-section')
        @include('components.pricing.faq-section')
    </div>
@endsection
