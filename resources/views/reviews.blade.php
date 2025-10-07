@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<section class="bg-gradient-to-br from-blue-50 to-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <div class="inline-block mb-6">
                <div class="flex items-center bg-white rounded-full px-6 py-3 shadow-sm">
                    <span class="text-3xl font-bold text-gray-900 mr-2">4.8</span>
                    <div class="flex">
                        @for($i = 0; $i < 5; $i++)
                        <svg class="w-6 h-6 text-yellow-400" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                        @endfor
                    </div>
                </div>
            </div>
            <h1 class="text-5xl font-bold text-gray-900 mb-4">Customer Reviews</h1>
            <p class="text-xl text-gray-600 mb-8">Based on 1000+ reviews from verified customers</p>
            <div class="flex justify-center gap-4 text-sm text-gray-600">
                <span class="flex items-center"><svg class="w-5 h-5 text-green-500 mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>Verified Customers</span>
                <span class="flex items-center"><svg class="w-5 h-5 text-green-500 mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/></svg>100% Authentic</span>
            </div>
        </div>
    </div>
</section>

<!-- Review Source Tabs -->
<section class="bg-white py-8 border-b">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-center gap-4 flex-wrap">
            <button class="review-tab active px-6 py-3 rounded-lg font-medium transition" data-source="google">
                <span class="flex items-center gap-2">
                    <span>Google Reviews</span>
                </span>
            </button>
            <button class="review-tab px-6 py-3 rounded-lg font-medium transition" data-source="bbb">
                <span class="flex items-center gap-2">
                    <span>BBB</span>
                </span>
            </button>
            <button class="review-tab px-6 py-3 rounded-lg font-medium transition" data-source="sitejabber">
                <span class="flex items-center gap-2">
                    <span>Site Jabber</span>
                </span>
            </button>
        </div>
    </div>
</section>

<!-- Reviews Grid -->
<section class="bg-gray-50 py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div id="reviews-container" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Review Cards Will Be Populated Here -->
        </div>

        <!-- Load More Button -->
        <div class="flex justify-center mt-12">
            <button class="px-8 py-4 bg-primary text-white font-semibold rounded-lg shadow hover:bg-blue-700 transition-colors">
                Read More Reviews
            </button>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="bg-primary py-16">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl font-bold text-white mb-4">Still unsure?</h2>
        <p class="text-xl text-blue-100 mb-8">Step inside and see how virtual mailboxes are the future of mail.</p>
        <div class="flex justify-center gap-4 flex-wrap">
            <a href="{{ route('select-virtual-address') }}" class="px-8 py-4 bg-white text-primary font-semibold rounded-lg shadow hover:bg-gray-100 transition">Sign up now</a>
            <a href="{{ route('contact-us') }}" class="px-8 py-4 border-2 border-white text-white font-semibold rounded-lg hover:bg-blue-700 transition">Contact us</a>
        </div>
    </div>
</section>

<script>
const reviewsData = {
    google: [
        {name: "Ramaa K", role: "Customer for 5 years", rating: 5, text: "I have been using iMailVault for over 5 years now. Very satisfied with their services. I have recently started using the option of all my packages stored & shipped from their facility in Houston, TX. We surely recommend this company to anyone looking to use their service for personal or business use."},
        {name: "Nanette", role: "Customer for 2 years", rating: 5, text: "Their customer service is excellent. I love the scan feature which allows me to be able to view mail online without the expense of having it delivered. Good work!"},
        {name: "Dean", role: "Customer for 2 years", rating: 5, text: "We HIGHLY recommend iMailVault! Since moving abroad we have been mailing items we can not do without and even sending all our vendors our new address some still arrived to iMailVault with an incomplete address, or wrong address. The professional staff at iMailVault have always been extremely helpful and proficient in coming to a solution. Keep up the great work and THANK YOU!"},
        {name: "Mary Stone", role: "Google review", rating: 5, text: "Absolutely the best service I've ever used. Should've done it years ago. Every interaction and every service has been carried out in a world class manner."},
        {name: "Phil Marsh", role: "Customer for 6 years", rating: 5, text: "I have had an account with these guys for several years. I used to buy stuff and then ask they repackage everything to save weight and volume for forward shipping. I now trust these guys. I just tick the box to repack and they do an excellent job. Very professional."},
        {name: "Dean Woods", role: "Google Review", rating: 5, text: "These guys help me keep track of my mail no matter where my job sends me. Its awesome to get an email letting you know what you get and the services they do for you when you get mail are top notch. If you get thrown around like a bird in a hurricane, at least you'll know where your mail is when you land."}
    ],
    bbb: [
        {name: "Rodney Lax", role: "BBB Verified", rating: 5, text: "After living in the US for 20 years, I moved back to Europe. iMailVault is the ideal solution. I can review, scan, discard, download, save or forward from the other side of the world, and it is super-fast and affordable."},
        {name: "James R", role: "BBB Verified", rating: 5, text: "I like being able to review my mail and pitch most of it, which is what I would do if I still had a home address. When I need to see something, the scans are almost always available sooner than promised."},
        {name: "John F", role: "BBB Verified", rating: 5, text: "I've even had them scan in paper checks that I've then printed and deposited with my bank's mobile app."}
    ],
    sitejabber: [
        {name: "Cheryl A", role: "Site Jabber Verified", rating: 5, text: "I can also request a scan of just the first page of opened mail, the scans are sent within two hours."},
        {name: "Randy G", role: "Site Jabber Verified", rating: 5, text: "Prices are way lower than retail shipping and even most competitors. Go with them, you will be glad."}
    ]
};

function renderReviews(source) {
    const container = document.getElementById('reviews-container');
    const reviews = reviewsData[source];

    container.innerHTML = reviews.map(review => `
        <div class="bg-white rounded-xl p-6 shadow-sm hover:shadow-md transition-shadow">
            <div class="flex items-start mb-4">
                <div class="w-12 h-12 rounded-full bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center text-white font-bold text-lg mr-3">
                    ${review.name.charAt(0)}
                </div>
                <div>
                    <h3 class="font-semibold text-gray-900">${review.name}</h3>
                    <p class="text-sm text-gray-600">${review.role}</p>
                </div>
            </div>
            <div class="flex mb-3">
                ${Array(review.rating).fill('<svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>').join('')}
            </div>
            <p class="text-gray-700 leading-relaxed">${review.text}</p>
        </div>
    `).join('');
}

document.addEventListener('DOMContentLoaded', function() {
    renderReviews('google');

    const tabs = document.querySelectorAll('.review-tab');
    tabs.forEach(tab => {
        tab.addEventListener('click', function() {
            tabs.forEach(t => {
                t.classList.remove('active', 'bg-primary', 'text-white');
                t.classList.add('bg-gray-100', 'text-gray-600');
            });
            this.classList.add('active', 'bg-primary', 'text-white');
            this.classList.remove('bg-gray-100', 'text-gray-600');
            renderReviews(this.dataset.source);
        });
    });

    tabs[0].classList.add('bg-primary', 'text-white');
    tabs.forEach((t, i) => {
        if (i > 0) t.classList.add('bg-gray-100', 'text-gray-600');
    });
});
</script>

<style>
.review-tab {
    transition: all 0.3s ease;
}
.review-tab:hover {
    transform: translateY(-2px);
}
</style>
@endsection
