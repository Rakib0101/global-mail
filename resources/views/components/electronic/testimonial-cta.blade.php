@props([
    'title' => 'Our customers love us',
    'subtitle' => 'We lead the industry in customer satisfaction with a net promoter score of over 70',
])

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        background-color: #faf9f6;
        color: #333;
        line-height: 1.6;
    }

    .header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem 2rem;
        background-color: white;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .logo {
        display: flex;
        align-items: center;
        font-size: 1.5rem;
        font-weight: bold;
        color: #2563eb;
    }

    .logo-icon {
        width: 24px;
        height: 24px;
        background-color: #2563eb;
        border-radius: 4px;
        margin-right: 8px;
        position: relative;
    }

    .logo-icon::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 12px;
        height: 8px;
        background-color: white;
        clip-path: polygon(0 100%, 50% 0, 100% 100%);
    }

    .nav {
        display: flex;
        gap: 2rem;
        align-items: center;
    }

    .nav-link {
        color: #333;
        text-decoration: none;
        display: flex;
        align-items: center;
        gap: 4px;
        font-size: 0.9rem;
    }

    .nav-link::after {
        content: '▼';
        font-size: 0.7rem;
    }

    .header-buttons {
        display: flex;
        gap: 1rem;
        align-items: center;
    }

    .btn {
        padding: 0.5rem 1rem;
        border-radius: 6px;
        text-decoration: none;
        font-size: 0.9rem;
        font-weight: 500;
        transition: all 0.2s;
    }

    .btn-secondary {
        background-color: white;
        color: #2563eb;
        border: 1px solid #e5e7eb;
    }

    .btn-primary {
        background-color: #2563eb;
        color: white;
        border: none;
    }

    .btn-primary:hover {
        background-color: #1d4ed8;
    }

    .main-content {
        max-width: 1200px;
        margin: 0 auto;
        padding: 4rem 2rem;
    }

    .testimonials-section {
        text-align: center;
        margin-bottom: 4rem;
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 1rem;
        color: #1f2937;
    }

    .section-subtitle {
        font-size: 1.1rem;
        color: #6b7280;
        margin-bottom: 3rem;
    }

    .testimonials-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 2rem;
        margin-bottom: 4rem;
    }

    .testimonial-card {
        background-color: #f8f7f4;
        padding: 2rem;
        border-radius: 12px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
        text-align: left;
    }

    .testimonial-text {
        font-size: 1rem;
        line-height: 1.7;
        margin-bottom: 1.5rem;
        color: #374151;
    }

    .case-study-link {
        color: #2563eb;
        text-decoration: none;
        font-weight: 500;
        display: inline-flex;
        align-items: center;
        gap: 4px;
        margin-bottom: 1.5rem;
    }

    .profile {
        display: flex;
        align-items: center;
        gap: 1rem;
    }

    .profile-image {
        width: 48px;
        height: 48px;
        border-radius: 50%;
        background-color: #e5e7eb;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: bold;
        color: #6b7280;
    }

    .profile-info h4 {
        font-weight: bold;
        color: #1f2937;
        margin-bottom: 0.25rem;
    }

    .profile-info p {
        color: #6b7280;
        font-size: 0.9rem;
    }

    .cta-section {
        background: linear-gradient(135deg, #4f46e5 0%, #7c3aed 100%);
        padding: 4rem 2rem;
        border-radius: 12px;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .cta-section::before {
        content: '';
        position: absolute;
        top: 0;
        right: 0;
        width: 300px;
        height: 100%;
        background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200"><defs><linearGradient id="a" x1="0%" y1="0%" x2="100%" y2="100%"><stop offset="0%" stop-color="rgba(255,255,255,0.1)"/><stop offset="100%" stop-color="rgba(255,255,255,0.05)"/></linearGradient></defs><path d="M0 50 Q50 0 100 50 T200 50 V150 Q150 200 100 150 T0 150 Z" fill="url(%23a)"/></svg>') no-repeat;
        background-size: contain;
        opacity: 0.3;
    }

    .cta-content {
        position: relative;
        z-index: 1;
    }

    .cta-title {
        font-size: 2rem;
        font-weight: bold;
        color: white;
        margin-bottom: 1rem;
    }

    .cta-subtitle {
        font-size: 1.1rem;
        color: rgba(255, 255, 255, 0.9);
        margin-bottom: 2rem;
    }

    .btn-white {
        background-color: white;
        color: #4f46e5;
        padding: 0.75rem 2rem;
        border-radius: 8px;
        font-weight: 600;
        display: inline-block;
    }

    .footer {
        text-align: center;
        padding: 2rem;
        color: #9ca3af;
        font-size: 0.8rem;
        line-height: 1.5;
    }

    .footer a {
        color: #2563eb;
        text-decoration: none;
    }

    @media (max-width: 768px) {
        .header {
            flex-direction: column;
            gap: 1rem;
        }

        .nav {
            flex-wrap: wrap;
            justify-content: center;
        }

        .testimonials-grid {
            grid-template-columns: 1fr;
        }

        .section-title {
            font-size: 2rem;
        }

        .cta-title {
            font-size: 1.5rem;
        }
    }
</style>

<!-- Main Content -->
<main class="main-content">
    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <h1 class="section-title">{{ $title }}</h1>
        <p class="section-subtitle">{{ $subtitle }}</p>

        <div class="testimonials-grid">
            <!-- Testimonial Card 1 -->
            <div class="testimonial-card">
                <p class="testimonial-text">
                    "We have loved utilizing electronic check deposits with Stable. Their interface makes the
                    deposits so simple and it's easy to track what has been deposited. It saves me multiple steps
                    with each check and has been really quick and reliable."
                </p>
                <div class="profile">
                    <div class="profile-image">TR</div>
                    <div class="profile-info">
                        <h4>Trisha Robertson</h4>
                        <p>Controller, Havenwood Academy</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial Card 2 -->
            <div class="testimonial-card">
                <p class="testimonial-text">
                    "The last thing you want to worry about as a founder is physical mail and package logistics.
                    Stable takes that completely off your plate, so you can worry about everything else on it. We
                    couldn't live without it."
                </p>
                <div class="profile">
                    <div class="profile-image">BM</div>
                    <div class="profile-info">
                        <h4>Barry McCardel</h4>
                        <p>CEO, Hex Technologies</p>
                    </div>
                </div>
            </div>

            <!-- Testimonial Card 3 -->
            <div class="testimonial-card">
                <p class="testimonial-text">
                    "Stable has helped us increase accountability and reduce the constant back and forth between
                    departments over mail. They also feel like a partner rather than a vendor – everyone we've
                    interacted with has been so attentive, so kind and just willing to help."
                </p>
                <a href="#" class="case-study-link">View Case Study →</a>
                <div class="profile">
                    <div class="profile-image">JW</div>
                    <div class="profile-info">
                        <h4>Jaiden Williams</h4>
                        <p>HR, Verbit</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="cta-content">
            <h2 class="cta-title">Want to maintain your current business address? We can help.</h2>
            <p class="cta-subtitle">We can set up mail forwarding from your current office address to Stable for
                mail digitization.</p>
            <a href="#" class="btn btn-white">Talk to sales</a>
        </div>
    </section>
</main>

<!-- Footer -->
<div class="footer">
    <p>
        Stable partners with <a href="#">Stripe Payments Company</a> for money transmission services and
        account services with funds held at Fifth Third Bank N.A., Member FDIC and Evolve Bank and Trust, Member
        FDIC.
    </p>
</div>
