<div class="award-section-container overflow-hidden bg-white py-8">
    <div class="award-scroll-container">
        <!-- First set of awards -->
        <div class="award-item flex-shrink-0">
            <div class="award-content">
                <div class="award-badge">
                    <div class="us-news-badge">
                        <div class="badge-shield">
                            <div class="badge-top">BEST</div>
                            <div class="badge-banner">USNews</div>
                            <div class="badge-bottom">RANKINGS</div>
                        </div>
                    </div>
                    <div class="award-text">
                        <h3 class="award-title">Best Virtual Mailbox Services</h3>
                        <p class="award-subtitle">[US News Top Pick] 2023, 2025</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="award-item flex-shrink-0">
            <div class="award-content">
                <div class="award-badge">
                    <div class="g2-badge">
                        <div class="g2-logo">
                            <span class="g2-text">G2</span>
                        </div>
                    </div>
                    <div class="award-text">
                        <h3 class="award-title">Best for Small Business</h3>
                        <p class="award-subtitle">[G2] 2023, 2025</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="award-item flex-shrink-0">
            <div class="award-content">
                <div class="award-badge">
                    <div class="excellence-badge">
                        <span class="excellence-text">Excellence</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Duplicate set for seamless loop -->
        <div class="award-item flex-shrink-0">
            <div class="award-content">
                <div class="award-badge">
                    <div class="us-news-badge">
                        <div class="badge-shield">
                            <div class="badge-top">BEST</div>
                            <div class="badge-banner">USNews</div>
                            <div class="badge-bottom">RANKINGS</div>
                        </div>
                    </div>
                    <div class="award-text">
                        <h3 class="award-title">Best Virtual Mailbox Services</h3>
                        <p class="award-subtitle">[US News Top Pick] 2023, 2025</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="award-item flex-shrink-0">
            <div class="award-content">
                <div class="award-badge">
                    <div class="g2-badge">
                        <div class="g2-logo">
                            <span class="g2-text">G2</span>
                        </div>
                    </div>
                    <div class="award-text">
                        <h3 class="award-title">Best for Small Business</h3>
                        <p class="award-subtitle">[G2] 2023, 2025</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="award-item flex-shrink-0">
            <div class="award-content">
                <div class="award-badge">
                    <div class="excellence-badge">
                        <span class="excellence-text">Excellence</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        @keyframes scroll-left {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-50%);
            }
        }

        .award-scroll-container {
            display: flex;
            align-items: center;
            gap: 3rem;
            padding: 0 2rem;
            animation: scroll-left 20s linear infinite;
            will-change: transform;
        }

        .award-item {
            min-width: 300px;
        }

        .award-content {
            display: flex;
            align-items: center;
            gap: 1rem;
            padding: 1rem;
            background: white;
        }

        .award-badge {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        /* US News Badge Styles */
        .us-news-badge {
            flex-shrink: 0;
        }

        .badge-shield {
            width: 80px;
            height: 100px;
            background: linear-gradient(135deg, #FFD700, #FFA500);
            border-radius: 8px 8px 0 0;
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .badge-top {
            font-weight: bold;
            font-size: 12px;
            color: #000;
            margin-bottom: 2px;
        }

        .badge-banner {
            background: #0066CC;
            color: white;
            font-size: 10px;
            font-weight: bold;
            padding: 2px 6px;
            border-radius: 2px;
            margin: 2px 0;
        }

        .badge-bottom {
            font-size: 10px;
            color: #000;
            margin-top: 2px;
        }

        /* G2 Badge Styles */
        .g2-badge {
            flex-shrink: 0;
        }

        .g2-logo {
            width: 60px;
            height: 60px;
            background: #FF4444;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        .g2-text {
            color: white;
            font-weight: bold;
            font-size: 18px;
        }

        /* Excellence Badge Styles */
        .excellence-badge {
            flex-shrink: 0;
        }

        .excellence-text {
            color: #666;
            font-size: 16px;
            font-weight: 500;
        }

        .award-text {
            flex: 1;
        }

        .award-title {
            font-size: 16px;
            font-weight: bold;
            color: #000;
            margin: 0 0 4px 0;
            line-height: 1.2;
        }

        .award-subtitle {
            font-size: 12px;
            color: #666;
            margin: 0;
            line-height: 1.2;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .award-scroll-container {
                gap: 2rem;
                padding: 0 1rem;
            }

            .award-item {
                min-width: 250px;
            }

            .award-content {
                padding: 0.75rem;
                gap: 0.75rem;
            }

            .badge-shield {
                width: 60px;
                height: 75px;
            }

            .g2-logo {
                width: 50px;
                height: 50px;
            }

            .award-title {
                font-size: 14px;
            }

            .award-subtitle {
                font-size: 11px;
            }
        }

        @media (max-width: 480px) {
            .award-scroll-container {
                gap: 1.5rem;
            }

            .award-item {
                min-width: 200px;
            }

            .badge-shield {
                width: 50px;
                height: 65px;
            }

            .g2-logo {
                width: 40px;
                height: 40px;
            }

            .g2-text {
                font-size: 14px;
            }
        }
    </style>
</div>
