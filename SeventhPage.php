<html>
<head>
<title>About Us - Adventure Explorers</title>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Montserrat:wght@400;700&display=swap');

  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }
  
  body {
    font-family: 'Poppins', sans-serif;
    background: #f8f9fa;
    color: #333;
    line-height: 1.6;
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

  .hero-section {
    background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), 
                url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1600&q=80');
    background-size: cover;
    background-position: center;
    height: 60vh;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
    padding: 0 20px;
  }

  .hero-content {
    max-width: 800px;
  }

  .hero-content h1 {
    font-family: 'Montserrat', sans-serif;
    font-size: 3.5rem;
    margin-bottom: 20px;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
  }

  .hero-content p {
    font-size: 1.2rem;
    margin-bottom: 30px;
  }

  .main-content {
    padding: 80px 5%;
  }

  .about-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin-bottom: 60px;
  }

  .about-card {
    background: white;
    border-radius: 10px;
    padding: 30px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
    overflow: hidden;
  }

  .about-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.1);
  }

  .about-card h3 {
    color: #144552;
    font-size: 1.5rem;
    margin-bottom: 15px;
    position: relative;
    display: inline-block;
  }

  .about-card h3::after {
    content: '';
    position: absolute;
    bottom: -5px;
    left: 0;
    width: 50px;
    height: 3px;
    background: #ffcc00;
  }

  .about-card p, .about-card ul {
    color: #555;
    font-size: 1rem;
  }

  .about-card ul {
    padding-left: 20px;
  }

  .about-card li {
    margin-bottom: 8px;
    position: relative;
    padding-left: 15px;
  }

  .about-card li::before {
    content: '•';
    color: #ffcc00;
    font-weight: bold;
    position: absolute;
    left: 0;
  }

  .team-section {
    margin-top: 80px;
    position: relative;
  }

  .section-title {
    text-align: center;
    margin-bottom: 50px;
  }

  .section-title h2 {
    font-family: 'Montserrat', sans-serif;
    font-size: 2.5rem;
    color: #144552;
    position: relative;
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
    background: #ffcc00;
  }

  .team-carousel-container {
    position: relative;
    max-width: 600px;
    margin: 0 auto;
    overflow: hidden;
  }

  .team-carousel {
    display: flex;
    transition: transform 0.5s ease-in-out;
    width: 100%;
  }

  .team-card {
    min-width: 100%;
    background: white;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
    text-align: center;
    padding: 20px;
  }

  .team-img {
    width: 200px;
    height: 200px;
    border-radius: 50%;
    margin: 0 auto 20px;
    background: #eee;
    background-size: cover;
    background-position: center;
    border: 5px solid #ffcc00;
  }

  .team-info {
    padding: 20px;
  }

  .team-info h4 {
    color: #144552;
    font-size: 1.5rem;
    margin-bottom: 5px;
  }

  .team-info p {
    color: #ff9900;
    font-weight: 500;
    font-size: 1.1rem;
  }

  .carousel-btn {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(255,255,255,0.8);
    color: #144552;
    border: none;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    font-size: 1.5rem;
    cursor: pointer;
    z-index: 10;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
  }

  .carousel-btn:hover {
    background: white;
    transform: translateY(-50%) scale(1.1);
  }

  .prev-btn {
    left: 10px;
  }

  .next-btn {
    right: 10px;
  }

  .carousel-indicators {
    display: flex;
    justify-content: center;
    margin-top: 20px;
    gap: 10px;
  }

  .indicator {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background: #ccc;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .indicator.active {
    background: #144552;
    transform: scale(1.2);
  }

  .cta-section {
    background: linear-gradient(135deg, #144552 0%, #1e323a 100%);
    color: white;
    padding: 80px 5%;
    text-align: center;
    margin-top: 80px;
    border-radius: 15px;
  }

  .cta-section h2 {
    font-family: 'Montserrat', sans-serif;
    font-size: 2.5rem;
    margin-bottom: 20px;
  }

  .cta-section p {
    max-width: 700px;
    margin: 0 auto 40px;
    font-size: 1.1rem;
  }

  .btn-join {
    display: inline-block;
    padding: 15px 40px;
    background: #ffcc00;
    color: #144552;
    font-weight: 700;
    text-decoration: none;
    font-size: 1.1rem;
    border-radius: 50px;
    transition: all 0.3s ease;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
  }

  .btn-join:hover {
    background: white;
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.2);
  }

  footer {
    background: #1e323a;
    color: white;
    padding: 40px 5%;
    text-align: center;
  }

  .footer-content {
    max-width: 1200px;
    margin: 0 auto;
  }

  .footer-content p {
    margin-bottom: 20px;
  }

  .social-links {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-bottom: 30px;
  }

  .social-links a {
    color: white;
    font-size: 1.5rem;
    transition: color 0.3s ease;
  }

  .social-links a:hover {
    color: #ffcc00;
  }

  .copyright {
    font-size: 0.9rem;
    color: rgba(255,255,255,0.7);
  }

  @media (max-width: 768px) {
    .navbar {
      flex-direction: column;
      padding: 15px;
    }
    
    .nav-links {
      margin-top: 15px;
      flex-wrap: wrap;
      justify-content: center;
    }
    
    .hero-content h1 {
      font-size: 2.5rem;
    }
    
    .section-title h2 {
      font-size: 2rem;
    }

    .carousel-btn {
      width: 40px;
      height: 40px;
      font-size: 1.2rem;
    }

    .team-img {
      width: 150px;
      height: 150px;
    }
  }
</style>
</head>

<body>

<div class="navbar">
    <div style="font-size: 24px;"><b>Xplorvia</b></div>
    <div>
      <a href="firstPage.html">Home</a>
      <a href="SecondPage.html">Destination</a>
      <a href="ThirdPage.html">Activities</a>
      <a href="FourthPage.html">Packages</a>
      <a href="FifthPage.html">Book Now</a>
      <a href="SixthPage.html">Photo Gallery</a>
      <a href="SeventhPage.html">About Us</a>
      <a href="EighthPage.html">Terms</a>
      <a href="NinthPage.html">Contact</a>
      <a href="TenthPage.html">Feedback</a>
      <a href="elevenPage.html">FAQ's</a>
    </div>
  </div>

  <section class="hero-section">
    <div class="hero-content">
      <h1>Discover Adventure Explorers</h1>
      <p>We are a passionate team dedicated to connecting thrill seekers with nature's most exciting and safe outdoor experiences. Since 2018, we've empowered thousands of adventurers to explore, challenge themselves, and create lifelong memories.</p>
    </div>
  </section>

  <section class="main-content">
    <div class="about-grid">
      <div class="about-card">
        <h3>Who We Are</h3>
        <p>A close-knit team of certified guides and nature enthusiasts focused on safety, fun, and respect for the environment.</p>
      </div>

      <div class="about-card">
        <h3>Our Mission</h3>
        <p>To inspire, empower, and guide adventurers of all levels through exciting, sustainable outdoor activities.</p>
      </div>

      <div class="about-card">
        <h3>What We Offer</h3>
        <ul>
          <li>Trekking & Hiking</li>
          <li>Whitewater Rafting</li>
          <li>Paragliding</li>
          <li>Zip-lining</li>
          <li>Camping Under Stars</li>
          <li>Scuba Diving</li>
        </ul>
      </div>

      <div class="about-card">
        <h3>Why Choose Us?</h3>
        <ul>
          <li>Certified & Experienced Guides</li>
          <li>High Safety Standards</li>
          <li>Flexible & Affordable Packages</li>
          <li>Eco-Friendly Practices</li>
          <li>1000+ Happy Adventurers</li>
        </ul>
      </div>
    </div>

    <div class="team-section">
      <div class="section-title">
        <h2>Meet Our Team</h2>
      </div>
      <div class="team-carousel-container">
        <button class="carousel-btn prev-btn">&lt;</button>
        <div class="team-carousel">
          <div class="team-card">
            <div class="team-img" style="background-image: url('https://img.freepik.com/free-photo/woman-with-crossed-arms_23-2147574177.jpg?t=st=1738567740~exp=1738571340~hmac=42585d506a3231c85e4d42dd79c0b5c2f53a39450cb3caa35954b3715038c067');"></div>
            <div class="team-info">
              <h4>Krisha Mangukiya</h4>
              <p>Lead Guide</p>
            </div>
          </div>
          <div class="team-card">
            <div class="team-img" style="background-image: url('https://www.shutterstock.com/image-photo/smiling-businesswoman-posing-modern-office-260nw-2336336245.jpg');"></div>
            <div class="team-info">
              <h4>Bristi Gopani</h4>
              <p>Safety Manager</p>
            </div>
          </div>
          <div class="team-card">
            <div class="team-img" style="background-image: url('https://randomuser.me/api/portraits/men/32.jpg');"></div>
            <div class="team-info">
              <h4>Raj Mehta</h4>
              <p>Trekking Expert</p>
            </div>
          </div>
          <div class="team-card">
            <div class="team-img" style="background-image: url('https://randomuser.me/api/portraits/men/22.jpg');"></div>
            <div class="team-info">
              <h4>Aarav Patel</h4>
              <p>Rafting Expert</p>
            </div>
          </div>
          <div class="team-card">
            <div class="team-img" style="background-image: url('https://randomuser.me/api/portraits/women/28.jpg');"></div>
            <div class="team-info">
              <h4>Isha Nair</h4>
              <p>Zip-lining Expert</p>
            </div>
          </div>
          <div class="team-card">
            <div class="team-img" style="background-image: url('https://static.vecteezy.com/system/resources/thumbnails/035/314/037/small_2x/ai-generated-professional-man-in-suit-standing-confidently-in-office-generative-ai-free-photo.jpg');"></div>
            <div class="team-info">
              <h4>Vijay Sharma</h4>
              <p>Paragliding Expert</p>
            </div>
          </div>
          <div class="team-card">
            <div class="team-img" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQSS7D3HV4WGZkpjePVVoBEoEROtXiEtyr9Fu0AOrQo_CLTX-J1QmmzYz-K6GtJ6FQ_e9c&usqp=CAU');"></div>
            <div class="team-info">
              <h4>Priya Deshmukh</h4>
              <p>Camping Expert</p>
            </div>
          </div>
          <div class="team-card">
            <div class="team-img" style="background-image: url('https://static.vecteezy.com/system/resources/thumbnails/037/098/807/small/ai-generated-a-happy-smiling-professional-man-light-blurry-office-background-closeup-view-photo.jpg');"></div>
            <div class="team-info">
              <h4>Karthik Shukla</h4>
              <p>Scuba Diving Expert</p>
            </div>
          </div>
        </div>
        <button class="carousel-btn next-btn">&gt;</button>
        <div class="carousel-indicators"></div>
      </div>
    </div>
  </section>

  <section class="cta-section">
    <h2>Ready for Your Next Adventure?</h2>
    <p>Join thousands of happy adventurers who have experienced the thrill of nature with our expert guides and unforgettable activities.</p>
    <a href="Fifthpage.html" class="btn-join">Join the Adventure</a>
  </section>

  <footer>
    <div class="footer-content">
      <div class="social-links">
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
        <a href="#"><i class="fab fa-youtube"></i></a>
      </div>
      <p>&copy; 2025 Adventure Explorers. All rights reserved.</p>
      <p class="copyright">Creating unforgettable adventures since 2018</p>
    </div>
  </footer>

  <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const carousel = document.querySelector('.team-carousel');
      const cards = document.querySelectorAll('.team-card');
      const prevBtn = document.querySelector('.prev-btn');
      const nextBtn = document.querySelector('.next-btn');
      const indicatorsContainer = document.querySelector('.carousel-indicators');
      
      let currentIndex = 0;
      const totalCards = cards.length;
      
      // Create indicators
      for (let i = 0; i < totalCards; i++) {
        const indicator = document.createElement('div');
        indicator.classList.add('indicator');
        if (i === 0) indicator.classList.add('active');
        indicator.addEventListener('click', () => {
          goToSlide(i);
        });
        indicatorsContainer.appendChild(indicator);
      }
      
      const indicators = document.querySelectorAll('.indicator');
      
      function updateCarousel() {
        carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
        
        // Update active indicator
        indicators.forEach((indicator, index) => {
          indicator.classList.toggle('active', index === currentIndex);
        });
      }
      
      function goToSlide(index) {
        currentIndex = index;
        updateCarousel();
      }
      
      function nextSlide() {
        currentIndex = (currentIndex + 1) % totalCards;
        updateCarousel();
      }
      
      function prevSlide() {
        currentIndex = (currentIndex - 1 + totalCards) % totalCards;
        updateCarousel();
      }
      
      // Button event listeners
      nextBtn.addEventListener('click', nextSlide);
      prevBtn.addEventListener('click', prevSlide);
      
      // Keyboard navigation
      document.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowRight') {
          nextSlide();
        } else if (e.key === 'ArrowLeft') {
          prevSlide();
        }
      });
      
      // Auto-advance (optional)
      // setInterval(nextSlide, 5000);
      
      // Initialize
      updateCarousel();
    });
  </script>
</body>
</html>