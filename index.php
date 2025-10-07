<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>🏔️ Xplorvia - Your Gateway to Adventure</title>
    <style>
        /* Modern Color Palette */
        :root {
            --primary: #1a3a5f;
            --secondary: #ff7e5f;
            --accent: #4ecdc4;
            --light: #f8f9fa;
            --dark: #2d3748;
            --text: #4a5568;
            --highlight: #f6ad55;
        }

        /* Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.6;
            color: var(--text);
            background: linear-gradient(135deg, #f5f7fa 0%, #e4e8ed 100%);
            min-height: 100vh;
        }

        /* Typography */
        h1, h2, h3, h4 {
            font-family: 'Montserrat', sans-serif;
            font-weight: 700;
            color: var(--dark);
            line-height: 1.2;
        }

        .navbar {
      background-color: rgba(30, 50, 58, 0.95);
      color: white;
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .navbar a {
      color: white;
      margin: 0 8px;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s;
    }

    .navbar a:hover {
      color: #ffcc00;
      text-decoration: underline;
    }

        

        /* Hero Section */
        .hero {
            position: relative;
            height: 80vh;
            display: flex;
            align-items: center;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.5)), 
                        url('https://static.vecteezy.com/system/resources/thumbnails/040/890/255/small_2x/ai-generated-empty-wooden-table-on-the-natural-background-for-product-display-free-photo.jpg') center/cover no-repeat;
            z-index: -1;
        }

        .hero-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
            color: white;
        }

        .hero h1 {
            font-size: 3.5rem;
            margin-bottom: 1rem;
            color: white;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }

        .hero p {
            font-size: 1.3rem;
            max-width: 600px;
            margin-bottom: 2rem;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
        }

        .cta-buttons {
            display: flex;
            gap: 1rem;
        }

        .btn {
            padding: 0.8rem 1.8rem;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-primary {
            background: var(--accent);
            color: var(--dark);
        }

        .btn-primary:hover {
            background: white;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .btn-secondary {
            background: transparent;
            color: white;
            border: 2px solid white;
        }

        .btn-secondary:hover {
            background: rgba(255,255,255,0.1);
            transform: translateY(-3px);
        }

        /* Features Section */
        .features {
            padding: 5rem 2rem;
            max-width: 1200px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            position: relative;
        }

        .section-title h2 {
            font-size: 2.5rem;
            display: inline-block;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--accent);
            border-radius: 2px;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .feature-card {
            background: white;
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
            text-align: center;
            border-top: 4px solid var(--accent);
        }

        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }

        .feature-icon {
            font-size: 3rem;
            margin-bottom: 1.5rem;
            color: var(--accent);
        }

        .feature-card h3 {
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        /* Adventure Types */
        .adventures {
            padding: 5rem 2rem;
            background: linear-gradient(135deg, #e6f0f5 0%, #d4e3ec 100%);
        }

        .adventures-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .adventure-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .adventure-card {
            background: white;
            border-radius: 1rem;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
            position: relative;
        }

        .adventure-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }

        .adventure-img {
            height: 200px;
            background-size: cover;
            background-position: center;
        }

        .adventure-content {
            padding: 1.5rem;
        }

        .adventure-card h3 {
            font-size: 1.3rem;
            margin-bottom: 0.5rem;
            color: var(--primary);
        }

        .adventure-card p {
            margin-bottom: 1rem;
            font-size: 0.9rem;
        }

        .adventure-meta {
            display: flex;
            justify-content: space-between;
            font-size: 0.8rem;
            color: var(--text);
            margin-bottom: 1rem;
        }

        .adventure-tag {
            display: inline-block;
            padding: 0.3rem 0.8rem;
            background: var(--accent);
            color: white;
            border-radius: 50px;
            font-size: 0.7rem;
            font-weight: 600;
            position: absolute;
            top: 1rem;
            right: 1rem;
        }

        /* Testimonials */
        .testimonials {
            padding: 5rem 2rem;
            background: white;
        }

        .testimonials-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .testimonial-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .testimonial-card {
            background: var(--light);
            border-radius: 1rem;
            padding: 2rem;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }

        .testimonial-text {
            font-style: italic;
            margin-bottom: 1.5rem;
            position: relative;
        }

        .testimonial-text::before {
            content: '"';
            font-size: 4rem;
            position: absolute;
            top: -1.5rem;
            left: -1rem;
            color: rgba(0,0,0,0.1);
            font-family: serif;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .author-img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            object-fit: cover;
        }

        .author-info h4 {
            font-size: 1rem;
            margin-bottom: 0.2rem;
        }

        .author-info p {
            font-size: 0.8rem;
            color: var(--text);
        }

        .rating {
            color: var(--highlight);
            margin-top: 0.3rem;
        }

        /* Newsletter */
        .newsletter {
            padding: 4rem 2rem;
            background: linear-gradient(135deg, var(--primary) 0%, #2c5282 100%);
            color: white;
            text-align: center;
        }

        .newsletter-container {
            max-width: 600px;
            margin: 0 auto;
        }

        .newsletter h2 {
            color: white;
            margin-bottom: 1rem;
        }

        .newsletter p {
            margin-bottom: 2rem;
        }

        .newsletter-form {
            display: flex;
            max-width: 500px;
            margin: 0 auto;
        }

        .newsletter-input {
            flex: 1;
            padding: 0.8rem 1rem;
            border: none;
            border-radius: 50px 0 0 50px;
            font-size: 1rem;
        }

        .newsletter-btn {
            padding: 0 1.5rem;
            background: var(--accent);
            color: var(--dark);
            border: none;
            border-radius: 0 50px 50px 0;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .newsletter-btn:hover {
            background: white;
        }

        /* Footer */
        .footer {
            background: var(--dark);
            color: white;
            padding: 3rem 2rem 1rem;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 2rem;
        }

        .footer-logo {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .footer-logo-icon {
            font-size: 1.8rem;
        }

        .footer-about p {
            margin-bottom: 1rem;
            opacity: 0.8;
        }

        .social-links {
            display: flex;
            gap: 1rem;
        }

        .social-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            background: var(--accent);
            color: var(--dark);
        }

        .footer-links h3 {
            font-size: 1.2rem;
            margin-bottom: 1.5rem;
            position: relative;
        }

        .footer-links h3::after {
            content: '';
            position: absolute;
            bottom: -8px;
            left: 0;
            width: 40px;
            height: 3px;
            background: var(--accent);
        }

        .footer-links ul {
            list-style: none;
        }

        .footer-links li {
            margin-bottom: 0.8rem;
        }

        .footer-links a {
            color: white;
            text-decoration: none;
            opacity: 0.8;
            transition: all 0.3s ease;
        }

        .footer-links a:hover {
            opacity: 1;
            padding-left: 5px;
        }

        .footer-contact p {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1rem;
            opacity: 0.8;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 2rem;
            margin-top: 2rem;
            border-top: 1px solid rgba(255,255,255,0.1);
            opacity: 0.7;
            font-size: 0.9rem;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                padding: 1rem;
            }

            .nav-links {
                margin-top: 1rem;
                flex-wrap: wrap;
                justify-content: center;
            }

            .hero h1 {
                font-size: 2.5rem;
            }

            .hero p {
                font-size: 1.1rem;
            }

            .cta-buttons {
                flex-direction: column;
            }

            .btn {
                width: 100%;
                justify-content: center;
            }
        }

        /* Animations */
        @keyframes float {
            0%, 100% {
                transform: translateY(0);
            }
            50% {
                transform: translateY(-10px);
            }
        }

        .floating {
            animation: float 3s ease-in-out infinite;
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    
    <div class="navbar">
        <div><b>Xplorvia</b></div>
        <div>
            <a href="firstPage.php">Home</a>
            <a href="SecondPage.php">Destination</a>
            <a href="ThirdPage.php">Activities</a>
            <a href="FourthPage.php">Packages</a>
            <a href="FifthPage.php">Book Now</a>
            <a href="SixthPage.php">Photo Gallery</a>
            <a href="SeventhPage.php">About Us</a>
            <a href="EighthPage.php">Terms</a>
            <a href="NinthPage.php">Contact</a>
            <a href="TenthPage.php">Feedback</a>
            <a href="elevenPage.php">FAQ's</a>
            <a href="logout.php">logout</a>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Discover Your Next Great Adventure</h1>
            <p>Experience the thrill of the outdoors with our expertly crafted adventure packages. From mountain peaks to river rapids, we've got your perfect escape.</p>
            <div class="cta-buttons">
                <a href="FifthPage.html" class="btn btn-primary">
                    <i class="fas fa-calendar-alt"></i> Book Now
                </a>
                <a href="SecondPage.html" class="btn btn-secondary">
                    <i class="fas fa-map-marked-alt"></i> Explore Destinations
                </a>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="section-title">
            <h2>Why Choose Xplorvia?</h2>
        </div>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-shield-alt"></i>
                </div>
                <h3>Safety First</h3>
                <p>Certified guides and top-quality equipment ensure your adventure is thrilling yet completely safe.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-leaf"></i>
                </div>
                <h3>Eco-Friendly</h3>
                <p>We're committed to sustainable tourism that preserves nature for future generations.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-tags"></i>
                </div>
                <h3>Flexible Packages</h3>
                <p>Customize your adventure with options for all skill levels and group sizes.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <i class="fas fa-award"></i>
                </div>
                <h3>Expert Guides</h3>
                <p>Our team of experienced professionals will make your adventure unforgettable.</p>
            </div>

            <div class="feature-card">
        <div class="feature-icon">
                    <i class="fas fa-award"></i>
                </div>
        <h3>Photo Memories</h3>
        <p>Professional photography included to capture your best adventure moments.</p>
    </div>

    <div class="feature-card">
        <div class="feature-icon">
                    <i class="fas fa-award"></i>
                </div>
        <h3>Family Friendly</h3>
        <p>Special activities and packages designed for families and kids.</p>
    </div>
        </div>
    </section>

    <!-- Adventure Types -->
    <section class="adventures">
        <div class="adventures-container">
            <div class="section-title">
                <h2>Popular Adventures</h2>
            </div>
            <div class="adventure-cards">
                <div class="adventure-card">
                    <div class="adventure-img" style="background-image: url('https://media.istockphoto.com/id/1971796553/photo/young-couple-is-standing-at-mountain-top-with-great-view.jpg?s=612x612&w=0&k=20&c=SRfYHbtg53JPuRiM9LP5bD5_BKB-V4z4ttLbZoaygjc=');">
                        <span class="adventure-tag">Most Popular</span>
                    </div>
                    <div class="adventure-content">
                        <h3>Himalayan Trekking</h3>
                        <div class="adventure-meta">
                            <span><i class="fas fa-clock"></i> 3-7 Days</span>
                            <span><i class="fas fa-mountain"></i> Moderate</span>
                        </div>
                        <p>Explore breathtaking mountain trails with our expert guides and comfortable campsites.</p>
                        <a href="#" class="btn btn-primary" style="padding: 0.5rem 1rem; font-size: 0.9rem;">
                            Learn More
                        </a>
                    </div>
                </div>
                <div class="adventure-card">
                    <div class="adventure-img" style="background-image: url('https://travelogyindia.b-cdn.net/storage/app/upload/adventure-sports-in-uttarakhand.jpg');">
                        <span class="adventure-tag">Thrilling</span>
                    </div>
                    <div class="adventure-content">
                        <h3>White Water Rafting</h3>
                        <div class="adventure-meta">
                            <span><i class="fas fa-clock"></i> 1 Day</span>
                            <span><i class="fas fa-tachometer-alt"></i> Advanced</span>
                        </div>
                        <p>Conquer wild rapids with our professional rafting team and safety kayakers.</p>
                        <a href="#" class="btn btn-primary" style="padding: 0.5rem 1rem; font-size: 0.9rem;">
                            Learn More
                        </a>
                    </div>
                </div>
                <div class="adventure-card">
                    <div class="adventure-img" style="background-image: url('https://images.unsplash.com/photo-1544551763-46a013bb70d5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');">
                        <span class="adventure-tag">New</span>
                    </div>
                    <div class="adventure-content">
                        <h3>scuba diving</h3>`
                        <div class="adventure-meta">
                            <span><i class="fas fa-clock"></i> 2-4 Hours</span>
                            <span><i class="fas fa-child"></i> Beginner</span>
                        </div>
                        <p>Fly through the treetops on our 1.5km zipline course with stunning views.</p>
                        <a href="#" class="btn btn-primary" style="padding: 0.5rem 1rem; font-size: 0.9rem;">
                            Learn More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
        <div class="testimonials-container">
            <div class="section-title">
                <h2>Adventurer Stories</h2>
            </div>
            <div class="testimonial-cards">
                <div class="testimonial-card">
                    <div class="testimonial-text">
                        The Himalayan trek with Xplorvia was the most incredible experience of my life. The guides were knowledgeable and made us feel safe throughout the journey.
                    </div>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sarah K." class="author-img">
                        <div class="author-info">
                            <h4>Sarah K.</h4>
                            <p>Himalayan Trekker</p>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-text">
                        As a first-time rafter, I was nervous, but the Xplorvia team made me feel completely at ease. The rapids were thrilling and the scenery was breathtaking!
                    </div>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Raj P." class="author-img">
                        <div class="author-info">
                            <h4>Raj P.</h4>
                            <p>White Water Enthusiast</p>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <div class="testimonial-text">
                        Our family camping trip was perfect. The kids loved the stargazing activities and we appreciated the comfortable tents and delicious meals.
                    </div>
                    <div class="testimonial-author">
                        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Priya M." class="author-img">
                        <div class="author-info">
                            <h4>Priya M.</h4>
                            <p>Family Adventurer</p>
                            <div class="rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="newsletter">
        <div class="newsletter-container">
            <h2>Join Our Adventure Community</h2>
            <p>Subscribe to get exclusive offers, adventure tips, and early access to new experiences.</p>
            <form class="newsletter-form">
                <input type="email" placeholder="Your email address" class="newsletter-input" required>
                <button type="submit" class="newsletter-btn">Subscribe</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-about">
                <div class="footer-logo">
                    <span class="footer-logo-icon">🏕️</span>
                    <span>Xplorvia</span>
                </div>
                <p>Making adventure accessible to everyone since 2010. Our mission is to connect people with nature through unforgettable experiences.</p>
                <div class="social-links">
                    <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
            <div class="footer-links">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="firstPage.html">Home</a></li>
                    <li><a href="SecondPage.html">Destinations</a></li>
                    <li><a href="ThirdPage.html">Activities</a></li>
                    <li><a href="FourthPage.html">Packages</a></li>
                    <li><a href="FifthPage.html">Book Now</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h3>Support</h3>
                <ul>
                    <li><a href="SeventhPage.html">About Us</a></li>
                    <li><a href="NinthPage.html">Contact</a></li>
                    <li><a href="EighthPage.html">Terms</a></li>
                    <li><a href="TenthPage.html">Feedback</a></li>
                    <li><a href="elevenPage.html">FAQs</a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <h3>Contact Us</h3>
                <p><i class="fas fa-map-marker-alt"></i> Adventure Street, Mountain View, India</p>
                <p><i class="fas fa-phone-alt"></i> +91 98765 43210</p>
                <p><i class="fas fa-envelope"></i> info@xplorvia.com</p>
                <p><i class="fas fa-clock"></i> Mon-Sun: 8AM - 8PM</p>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; 2025 Xplorvia Adventures. All rights reserved. | Designed with ❤️ for adventurers</p>
        </div>
    </footer>
</body>
</html>