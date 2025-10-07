<!-- Address Selection Section -->
<div class="bg-gray-50 py-12">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Search Bar -->
        <div class="mb-8">
            <div class="relative max-w-2xl mx-auto">
                <div class="flex items-center bg-white rounded-lg border border-gray-300 shadow-sm">
                    <div class="pl-4 pr-2">
                        <div class="w-6 h-6 bg-blue-100 rounded-full flex items-center justify-center">
                            <svg class="w-4 h-4 text-green-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                    <input type="text"
                        class="flex-1 px-4 py-4 text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-0"
                        placeholder="Search by city, state or ZIP code (e.g. Chicago, IL)">
                    <button class="px-6 py-4 text-blue-600 font-medium hover:bg-blue-50 transition-colors">
                        <svg class="w-5 h-5 inline mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Near Me
                    </button>
                </div>
            </div>
        </div>

        <!-- Address Selection Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            <!-- Address Cards -->
            <div class="space-y-6">
                <!-- Houston, TX Card -->
                <div
                    class="bg-white rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-shadow cursor-pointer">
                    <div class="relative">
                        <div
                            class="w-full h-32 bg-gradient-to-br from-blue-400 to-blue-600 rounded-t-lg flex items-center justify-center">
                            <span class="text-white font-semibold text-lg">Houston</span>
                        </div>
                        <div class="absolute top-3 right-3">
                            <div class="w-6 h-6 bg-blue-600 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-lg font-semibold text-gray-900">Houston, TX</h3>
                            <span
                                class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Recommended</span>
                        </div>
                        <p class="text-gray-600 mb-4">1321 Upland Dr., Houston, Texas, 77043, US</p>
                        <button
                            class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors font-medium">
                            Select
                        </button>
                    </div>
                </div>

                <!-- Concord, CA Card -->
                <div
                    class="bg-white rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-shadow cursor-pointer">
                    <div class="relative">
                        <div
                            class="w-full h-32 bg-gradient-to-br from-green-400 to-green-600 rounded-t-lg flex items-center justify-center">
                            <span class="text-white font-semibold text-lg">California</span>
                        </div>
                        <div class="absolute top-3 right-3">
                            <div class="w-6 h-6 bg-blue-600 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-lg font-semibold text-gray-900">Concord, CA</h3>
                            <span
                                class="bg-green-100 text-green-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Recommended</span>
                        </div>
                        <p class="text-gray-600 mb-4">2041 East St, Concord, California, 94520, US</p>
                        <button
                            class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors font-medium">
                            Select
                        </button>
                    </div>
                </div>

                <!-- Nevada Card -->
                <div
                    class="bg-white rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-shadow cursor-pointer">
                    <div class="relative">
                        <div
                            class="w-full h-32 bg-gradient-to-br from-purple-400 to-purple-600 rounded-t-lg flex items-center justify-center">
                            <span class="text-white font-semibold text-lg">Nevada</span>
                        </div>
                        <div class="absolute top-3 right-3">
                            <div class="w-6 h-6 bg-blue-600 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-lg font-semibold text-gray-900">NEVADA</h3>
                            <span
                                class="bg-orange-100 text-orange-800 text-xs font-medium px-2.5 py-0.5 rounded-full">Free
                                Month</span>
                        </div>
                        <p class="text-gray-600 mb-4">620 S 7th St, Las Vegas, Nevada, 89101, United States</p>
                        <button
                            class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors font-medium">
                            Select
                        </button>
                    </div>
                </div>

                <!-- New York, NY Card -->
                <div
                    class="bg-white rounded-lg border border-gray-200 shadow-sm hover:shadow-md transition-shadow cursor-pointer">
                    <div class="relative">
                        <div
                            class="w-full h-32 bg-gradient-to-br from-orange-400 to-orange-600 rounded-t-lg flex items-center justify-center">
                            <span class="text-white font-semibold text-lg">New York</span>
                        </div>
                        <div class="absolute top-3 right-3">
                            <div class="w-6 h-6 bg-blue-600 rounded-full flex items-center justify-center">
                                <svg class="w-4 h-4 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <h3 class="text-lg font-semibold text-gray-900">New York, NY</h3>
                        </div>
                        <p class="text-gray-600 mb-4">3229 Greenpoint Ave, Long Island City, NY, 11101, US</p>
                        <button
                            class="w-full bg-blue-600 text-white py-2 px-4 rounded-lg hover:bg-blue-700 transition-colors font-medium">
                            Select
                        </button>
                    </div>
                </div>
            </div>

            <!-- Map Section -->
            <div class="bg-white rounded-lg border border-gray-200 shadow-sm">
                <div class="h-96 flex items-center justify-center bg-gray-100 rounded-lg">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-gray-300 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="text-lg font-semibold text-gray-700 mb-2">Oops! Something went wrong.</h3>
                        <p class="text-gray-500 text-sm">This page didn't load Google Maps correctly. See the
                            JavaScript console for technical details.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Information Text -->
        <div class="mt-8 text-center">
            <p class="text-gray-600 max-w-4xl mx-auto">
                iMailVault is expanding & updating address availability every week. We prioritize the cities based
                on your needs & recommendations. If you don't see a state/city where you would you like an address in,
                please
                <a href="{{ route('contact-us') }}" class="text-blue-600 hover:text-blue-800 underline">let us know</a>.
            </p>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Address selection functionality
        const addressCards = document.querySelectorAll('.bg-white.rounded-lg.border.border-gray-200');
        const selectButtons = document.querySelectorAll('button[class*="bg-blue-600"]');

        addressCards.forEach(card => {
            card.addEventListener('click', function(e) {
                // Don't trigger if clicking the select button
                if (e.target.tagName === 'BUTTON') return;

                // Remove previous selection
                addressCards.forEach(c => c.classList.remove('ring-2', 'ring-blue-500'));

                // Add selection to current card
                this.classList.add('ring-2', 'ring-blue-500');
            });
        });

        // Select button functionality
        selectButtons.forEach(button => {
            button.addEventListener('click', function(e) {
                e.stopPropagation();

                // Get the address details
                const card = this.closest('.bg-white.rounded-lg');
                const title = card.querySelector('h3').textContent;
                const address = card.querySelector('p').textContent;

                // Store selected address (you can modify this to send to backend)
                localStorage.setItem('selectedAddress', JSON.stringify({
                    title: title,
                    address: address,
                    timestamp: new Date().toISOString()
                }));

                // Show success message
                this.textContent = 'Selected!';
                this.classList.remove('bg-blue-600', 'hover:bg-blue-700');
                this.classList.add('bg-green-600', 'hover:bg-green-700');

                // Disable other buttons
                selectButtons.forEach(btn => {
                    if (btn !== this) {
                        btn.disabled = true;
                        btn.classList.add('opacity-50', 'cursor-not-allowed');
                    }
                });
            });
        });

        // Search functionality
        const searchInput = document.querySelector('input[placeholder*="Search by city"]');
        if (searchInput) {
            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();
                const cards = document.querySelectorAll('.bg-white.rounded-lg.border.border-gray-200');

                cards.forEach(card => {
                    const title = card.querySelector('h3').textContent.toLowerCase();
                    const address = card.querySelector('p').textContent.toLowerCase();

                    if (title.includes(searchTerm) || address.includes(searchTerm)) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        }

        // Near Me button functionality
        const nearMeButton = document.querySelector('button[class*="Near Me"]');
        if (nearMeButton) {
            nearMeButton.addEventListener('click', function() {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        console.log('User location:', position.coords.latitude, position.coords
                            .longitude);
                        alert(
                            'Location detected! This feature would filter addresses by proximity.');
                    }, function(error) {
                        alert('Unable to get your location. Please search manually.');
                    });
                } else {
                    alert('Geolocation is not supported by this browser.');
                }
            });
        }
    });
</script>
