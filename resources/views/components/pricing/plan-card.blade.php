@props([
    'title',
    'subtitle',
    'monthlyPrice',
    'annualPrice',
    'monthlyValue',
    'annualValue',
    'description',
    'features' => [],
    'buttonColor' => 'blue',
    'popular' => false,
    'additionalNote' => null,
])

<div class="relative bg-white rounded-xl border border-gray-200 p-8 shadow-sm hover:shadow-md transition-shadow">
    @if ($popular)
        <div class="absolute -top-3 right-6">
            <span class="bg-orange-500 text-white text-xs font-semibold px-3 py-1 rounded-full">
                Popular
            </span>
        </div>
    @endif

    <!-- Plan Icon -->
    <div class="flex justify-center mb-6">
        <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-orange-500 rounded-lg flex items-center justify-center">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
            </svg>
        </div>
    </div>

    <!-- Plan Title and Subtitle -->
    <div class="text-center mb-6">
        <h3 class="text-2xl font-bold text-gray-900 mb-2">{{ $title }}</h3>
        <p class="text-primary text-sm font-medium">{{ $subtitle }}</p>
    </div>

    <!-- Price -->
    <div class="text-center mb-6">
        <div class="text-4xl font-bold text-gray-900">
            $<span
                x-text="$parent.billingCycle === 'annually' ? '{{ $annualPrice }}' : '{{ $monthlyPrice }}'"></span>/mo
        </div>
        <div class="text-sm text-gray-500">
            ($<span x-text="$parent.billingCycle === 'annually' ? '{{ $annualValue }}' : '{{ $monthlyValue }}'"></span>
            value)
        </div>
    </div>

    <!-- Description -->
    <p class="text-gray-600 text-center mb-8">{{ $description }}</p>

    <!-- Select Plan Button -->
    <div class="mb-8">
        @if ($buttonColor === 'orange')
            <button
                class="w-full py-3 px-6 rounded-lg font-semibold text-white bg-orange-500 hover:bg-orange-600 transition-colors">
                Select Plan
            </button>
        @else
            <button
                class="w-full py-3 px-6 rounded-lg font-semibold text-white bg-primary hover:bg-blue-700 transition-colors">
                Select Plan
            </button>
        @endif
    </div>

    <!-- Features List -->
    <div class="space-y-4">
        @foreach ($features as $feature)
            <div class="flex items-start">
                <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor"
                    stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                </svg>
                <span class="text-gray-700 text-sm">{{ $feature }}</span>
            </div>
        @endforeach
    </div>

    <!-- Additional Note (for Virtual Teams plan) -->
    @if ($additionalNote)
        <div class="mt-6 p-3 bg-orange-50 rounded-lg">
            <div class="flex items-center">
                <svg class="w-4 h-4 text-orange-500 mr-2" fill="none" stroke="currentColor" stroke-width="2"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 11l5-5m0 0l5 5m-5-5v12" />
                </svg>
                <span class="text-orange-700 text-sm italic font-medium">{{ $additionalNote }}</span>
            </div>
        </div>
    @endif
</div>
