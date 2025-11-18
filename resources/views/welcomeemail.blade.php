<!DOCTYPE html>
<section class="bg-gray-100 text-gray-800">

    <html lang="en">
    <div class="max-w-lg mx-auto bg-white border border-gray-200 rounded-lg shadow-md p-6">

        <head> <!-- Header -->

            <meta charset="UTF-8">
            <div class="text-center mb-6">

                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <h2 class="text-xl font-bold text-gray-900">🚗 Dear {{ $name }},<br> Welcome to Rently Car Rental
                    System!</h2>

                <title>Welcome to Rently</title>
            </div>

            <style>
                * {
                    < !-- Content -->margin: 0;
                    <div class="space-y-4">padding: 0;
                    <p>We're excited to have you on board. Whether you' re commuting,
                    exploring,
                    or heading on a road trip,
                    Rently is here to make your journey smooth and enjoyable.</p>box-sizing: border-box;

                }

                <p>At <strong>Rently</strong>,
                we offer a wide range of well-maintained vehicles,
                affordable pricing,
                and seamless booking to ensure a top-notch car rental experience.</p>body {

                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                    <h3 class="font-semibold text-lg mt-4">Here’s what you can do next: </h3> background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                    <ul class="list-disc pl-5 space-y-2">min-height: 100vh;
                    <li>🚘 <a href="" class="text-blue-500 underline">Browse Available Cars</a></li>padding: 40px 20px;
                    <li>📅 <a href="" class="text-blue-500 underline">Make Your First Booking</a></li>
                }

                <li>📱 Follow us on social media for updates,
                discounts,
                and travel tips.</li>.email-container {
                    </ul>max-width: 600px;

                    margin: 0 auto;
                    <p>If you have any questions,
                    our support team is ready to assist you anytime.</p>background: #ffffff;
                    <p class="font-bold text-center">Happy Driving ! 🛣️</p>border-radius: 20px;
                    </div>overflow: hidden;

                    box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
                    < !-- Footer -->
                }

                <div class="text-center text-sm text-gray-500 mt-6 border-t pt-4">.header {
                    &copy;
                    Rently Car Rental System. All rights reserved. background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                    </div>padding: 40px 30px;
                    </div>text-align: center;
                    </section>color: white;

                }

                .header-icon {
                    font-size: 60px;
                    margin-bottom: 15px;
                    animation: bounce 2s infinite;
                }

                @keyframes bounce {

                    0%,
                    100% {
                        transform: translateY(0);
                    }

                    50% {
                        transform: translateY(-10px);
                    }
                }

                .header h1 {
                    font-size: 28px;
                    font-weight: 700;
                    margin-bottom: 10px;
                    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
                }

                .header .name {
                    font-size: 32px;
                    font-weight: 800;
                    color: #ffd700;
                    margin: 10px 0;
                }

                .content {
                    padding: 40px 35px;
                }

                .welcome-text {
                    font-size: 18px;
                    line-height: 1.8;
                    color: #333;
                    margin-bottom: 25px;
                    text-align: center;
                }

                .highlight-box {
                    background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
                    padding: 25px;
                    border-radius: 15px;
                    margin: 30px 0;
                    color: white;
                    text-align: center;
                }

                .highlight-box p {
                    font-size: 16px;
                    line-height: 1.6;
                }

                .section-title {
                    font-size: 22px;
                    font-weight: 700;
                    color: #667eea;
                    margin: 30px 0 20px;
                    text-align: center;
                    position: relative;
                }

                .section-title::after {
                    content: '';
                    display: block;
                    width: 60px;
                    height: 4px;
                    background: linear-gradient(to right, #667eea, #764ba2);
                    margin: 10px auto 0;
                    border-radius: 2px;
                }

                .action-cards {
                    display: grid;
                    gap: 15px;
                    margin: 25px 0;
                }

                .action-card {
                    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
                    padding: 20px;
                    border-radius: 12px;
                    display: flex;
                    align-items: center;
                    text-decoration: none;
                    color: #333;
                    transition: transform 0.3s ease, box-shadow 0.3s ease;
                    border: 2px solid transparent;
                }

                .action-card:hover {
                    transform: translateY(-5px);
                    box-shadow: 0 10px 25px rgba(102, 126, 234, 0.3);
                    border-color: #667eea;
                }

                .action-card-icon {
                    font-size: 40px;
                    margin-right: 20px;
                    min-width: 50px;
                }

                .action-card-content h3 {
                    font-size: 18px;
                    font-weight: 600;
                    margin-bottom: 5px;
                    color: #667eea;
                }

                .action-card-content p {
                    font-size: 14px;
                    color: #666;
                    line-height: 1.4;
                }

                .cta-button {
                    display: inline-block;
                    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                    color: white;
                    padding: 15px 40px;
                    border-radius: 30px;
                    text-decoration: none;
                    font-weight: 600;
                    font-size: 16px;
                    margin: 30px auto;
                    display: block;
                    text-align: center;
                    max-width: 300px;
                    transition: transform 0.3s ease, box-shadow 0.3s ease;
                    box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
                }

                .cta-button:hover {
                    transform: translateY(-3px);
                    box-shadow: 0 12px 30px rgba(102, 126, 234, 0.6);
                }

                .features-grid {
                    display: grid;
                    grid-template-columns: repeat(2, 1fr);
                    gap: 20px;
                    margin: 20px 0;
                }

                .feature-item {
                    text-align: center;
                    padding: 15px;
                }

                .feature-icon {
                    font-size: 40px;
                    margin-bottom: 10px;
                }

                .feature-title {
                    color: #667eea;
                    font-weight: 600;
                    margin-bottom: 5px;
                }

                .feature-desc {
                    font-size: 13px;
                    color: #666;
                    margin-top: 5px;
                }

                .support-section {
                    background: #f8f9fa;
                    padding: 20px;
                    border-radius: 12px;
                    text-align: center;
                    margin: 30px 0;
                }

                .support-section p {
                    color: #666;
                    font-size: 15px;
                    margin-bottom: 10px;
                }

                .support-section strong {
                    color: #667eea;
                    font-size: 18px;
                }

                .footer {
                    background: #2d3748;
                    padding: 30px;
                    text-align: center;
                    color: #a0aec0;
                }

                .footer-message {
                    font-size: 20px;
                    font-weight: 600;
                    color: #ffd700;
                    margin-bottom: 20px;
                }

                .social-links {
                    margin: 20px 0;
                }

                .social-links a {
                    display: inline-block;
                    margin: 0 10px;
                    font-size: 30px;
                    text-decoration: none;
                    transition: transform 0.3s ease;
                }

                .social-links a:hover {
                    transform: scale(1.2);
                }

                .footer-text {
                    font-size: 13px;
                    color: #718096;
                    margin-top: 20px;
                }

                .divider {
                    height: 2px;
                    background: linear-gradient(to right, transparent, #667eea, transparent);
                    margin: 30px 0;
                }
            </style>
        </head>

        <body>
            <div class="email-container">
                <!-- Header -->
                <div class="header">
                    <div class="header-icon">🚗</div>
                    <h1>Welcome to Rently!</h1>
                    <div class="name">Hello, {{ $name }}!</div>
                </div>

                <!-- Content -->
                <div class="content">
                    <p class="welcome-text">
                        We're thrilled to have you join the <strong>Rently</strong> family! 🎉<br>
                        Your journey to hassle-free car rentals starts here.
                    </p>

                    <div class="highlight-box">
                        <p>
                            <strong>🌟 Experience the Freedom of the Road</strong><br>
                            Whether you're planning a business trip, family vacation, or weekend adventure,
                            we've got the perfect vehicle waiting for you!
                        </p>
                    </div>

                    <h2 class="section-title">🚀 Get Started Today</h2>

                    <div class="action-cards">
                        <a href="{{ route('Cars') }}" class="action-card">
                            <div class="action-card-icon">🚘</div>
                            <div class="action-card-content">
                                <h3>Browse Our Fleet</h3>
                                <p>Explore our wide range of premium vehicles from economy to luxury</p>
                            </div>
                        </a>

                        <a href="{{ route('Cars') }}" class="action-card">
                            <div class="action-card-icon">📅</div>
                            <div class="action-card-content">
                                <h3>Book Your Ride</h3>
                                <p>Quick and easy booking process with instant confirmation</p>
                            </div>
                        </a>

                        <a href="{{ route('userprofile.edit') }}" class="action-card">
                            <div class="action-card-icon">👤</div>
                            <div class="action-card-content">
                                <h3>Complete Your Profile</h3>
                                <p>Add your details for faster checkout and exclusive offers</p>
                            </div>
                        </a>
                    </div>

                    <a href="{{ route('Cars') }}" class="cta-button">
                        Explore Vehicles Now →
                    </a>

                    <div class="divider"></div>

                    <h2 class="section-title">✨ Why Choose Rently?</h2>

                    <div class="features-grid">
                        <div class="feature-item">
                            <div class="feature-icon">💰</div>
                            <div class="feature-title">Best Prices</div>
                            <div class="feature-desc">Competitive rates & special discounts</div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">🔧</div>
                            <div class="feature-title">Well-Maintained</div>
                            <div class="feature-desc">Regular service & safety checks</div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">⚡</div>
                            <div class="feature-title">Instant Booking</div>
                            <div class="feature-desc">Book in seconds, drive in minutes</div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">🛡️</div>
                            <div class="feature-title">24/7 Support</div>
                            <div class="feature-desc">We're always here to help you</div>
                        </div>
                    </div>

                    <div class="support-section">
                        <p>Need help? Our support team is ready to assist!</p>
                        <strong>📧 support@rently.com | 📞 +1 (555) 123-4567</strong>
                    </div>
                </div>

                <!-- Footer -->
                <div class="footer">
                    <div class="footer-message">Happy Driving! 🛣️</div>

                    <div class="social-links">
                        <a href="#" title="Facebook">📘</a>
                        <a href="#" title="Twitter">🐦</a>
                        <a href="#" title="Instagram">📷</a>
                        <a href="#" title="LinkedIn">💼</a>
                    </div>

                    <div class="footer-text">
                        © {{ date('Y') }} Rently Car Rental System. All rights reserved.<br>
                        This email was sent to you as a registered member of Rently.
                    </div>
                </div>
            </div>
        </body>

    </html>
