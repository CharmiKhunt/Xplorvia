<html>
<head>
  <title>Adventure Activities | Xplorvia</title>
  <style>
    :root {
      --primary: #1e3d59;
      --secondary: #ff6b6b;
      --accent: #4ecdc4;
      --light: #f7fff7;
      --dark: #292f36;
    }
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: #f2f4f8;
      color: var(--dark);
      overflow-x: hidden;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .navbar {
      background: #1e3d59;
      color: white;
      padding: 15px 20px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }

    .navbar a {
      color: white;
      margin: 0 10px;
      text-decoration: none;
      font-weight: bold;
    }

    .navbar a:hover {
      color: #ffd166;
    }

    .logo {
      font-size: 28px;
      font-weight: 500;
      background: white;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      display: inline-block;
    }

    .header {
  text-align: center;
  padding: 60px 15px;
  background: url('https://static.vecteezy.com/system/resources/thumbnails/039/655/318/small/group-of-adventurer-tents-during-overnight-camping-site-at-the-beautiful-scenic-sunset-view-point-over-layer-of-mountain-for-outdoor-adventure-vacation-travel-concept-photo.jpg') center/cover;
  color: white;
  position: relative;
  overflow: hidden;
}

.header-content {
  position: relative;
  z-index: 1;
  max-width: 1200px;
  margin: 0 auto;
}

.header h1 {
  font-size: 2.8rem;
  margin: 0;
  text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

.header-description {
  font-size: 1.2rem;
  margin: 0 auto;
  max-width: 800px;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}

.header-spacer {
  height: 30px;
}

.activity-nav {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
  gap: 10px;
  margin-top: 20px;
}

.activity-nav a {
  display: inline-block;
  padding: 10px 20px;
  background: rgba(255,255,255,0.2);
  color: white;
  border-radius: 50px;
  text-decoration: none;
  font-weight: 600;
  transition: all 0.3s ease;
  border: 2px solid transparent;
  white-space: nowrap;
}

.activity-nav a:hover {
  background: var(--accent);
  transform: translateY(-3px);
  box-shadow: 0 5px 15px rgba(0,0,0,0.2);
  border-color: white;
}


    marquee {
      
      color: rgb(71, 83, 103);
      font-weight: bold;
      padding: 15px;
      font-size: 1.1rem;
      box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }

    .grid-container {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: 30px;
      padding: 5% 5%;
      max-width: 1400px;
      margin: auto;
    }

    .section {
      position: relative;
      color: white;
      border-radius: 15px;
      padding: 30px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.15);
      transition: all 0.4s ease;
      overflow: hidden;
      z-index: 1;
      animation: fadeIn 0.6s ease forwards;
    }

    .section::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.3);
      z-index: -1;
    }

    .section:hover {
      transform: translateY(-10px) scale(1.02);
      box-shadow: 0 15px 35px rgba(0,0,0,0.25);
    }

    .section h2 {
      font-size: 26px;
      margin-bottom: 15px;
      text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
    }

    .section p {
      font-style: italic;
      margin-bottom: 15px;
      font-size: 1.1rem;
    }

    .section ul, .section ol {
      margin-left: 20px;
      margin-bottom: 20px;
    }

    .section li {
      margin-bottom: 8px;
      position: relative;
      padding-left: 20px;
    }

    .section li::before {
      content: '→';
      position: absolute;
      left: 0;
      color: var(--accent);
      font-weight: bold;
    }

    .badge {
      position: absolute;
      top: 20px;
      right: -35px;
      background: var(--secondary);
      color: white;
      padding: 8px 40px;
      font-size: 14px;
      font-weight: bold;
      transform: rotate(45deg);
      box-shadow: 2px 2px 10px rgba(0,0,0,0.3);
      z-index: 2;
    }

    #trekking    { background: url('https://media.istockphoto.com/id/1742824589/photo/landscape-summer-view-of-a-mountain-peak-reflecting-in-a-stream-at-sunset.jpg?s=612x612&w=0&k=20&c=KwS7tLeFCiDAJ1CZK3iP9g1aNxk1bX5m82wQlwjkCnE=') center/cover; } 
    #rafting     { background: url('https://thumbs.dreamstime.com/z/adventure-enthusiasts-enjoying-exciting-white-water-rafting-experience-ganges-river-rishikesh-india-team-rafters-370681602.jpg') center/cover; } 
    #ziplining   { background: url('https://ashevilletreetopsadventurepark.com/wp-content/themes/yootheme/cache/29/20180511_145249-scaled-2904f02f.jpeg') center/cover; } 
    #paragliding { background: url('https://images.unsplash.com/photo-1551632811-561732d1e306?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') center/cover; } 
    #camping     { background: url('https://images.unsplash.com/photo-1504280390367-361c6d9f38f4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') center/cover; } 
    #scuba       { background: url('https://images.unsplash.com/photo-1544551763-46a013bb70d5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') center/cover; }

    .activity-btn {
      display: inline-block;
      padding: 10px 25px;
      background: var(--accent);
      color: white;
      border-radius: 50px;
      text-decoration: none;
      font-weight: 600;
      transition: all 0.3s ease;
      border: none;
      cursor: pointer;
      margin-top: 15px;
      box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }

    .activity-btn:hover {
      background: white;
      color: var(--accent);
      transform: translateY(-3px);
      box-shadow: 0 8px 15px rgba(0,0,0,0.3);
    }

    table {
      width: 90%;
      margin: 50px auto;
      border-collapse: separate;
      border-spacing: 0;
      background: white;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }

    th, td {
      border: none;
      padding: 15px;
      text-align: center;
      border-bottom: 1px solid #f0f0f0;
    }

    th {
      background: var(--primary);
      color: white;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    tr:nth-child(even) {
      background-color: #f9f9f9;
    }

    tr:hover {
      background-color: #f0f0f0;
    }

    .price-cell {
      font-weight: bold;
      color: var(--secondary);
    }

    .footer {
      background: var(--primary);
      color: white;
      text-align: center;
      padding: 40px 20px;
      margin-top: 60px;
      position: relative;
    }

    .footer::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 10px;
      background: linear-gradient(to right, var(--accent), var(--secondary));
    }

    .social-links {
      margin: 20px 0;
    }

    .social-links a {
      display: inline-block;
      width: 40px;
      height: 40px;
      background: rgba(255,255,255,0.1);
      border-radius: 50%;
      margin: 0 10px;
      color: white;
      line-height: 40px;
      transition: all 0.3s ease;
    }

    .social-links a:hover {
      background: var(--accent);
      transform: translateY(-5px);
    }

    /* Floating action button */
    .fab {
      position: fixed;
      bottom: 30px;
      right: 30px;
      width: 60px;
      height: 60px;
      background: var(--secondary);
      color: white;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 24px;
      box-shadow: 0 5px 20px rgba(0,0,0,0.3);
      z-index: 100;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .fab:hover {
      transform: scale(1.1) rotate(15deg);
      background: var(--accent);
    }

    /* Weather widget */
    .weather-widget {
      position: fixed;
      top: 100px;
      right: 20px;
      background: white;
      padding: 15px;
      border-radius: 10px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
      z-index: 99;
      display: none;
    }

    .weather-widget.show {
      display: block;
      animation: fadeIn 0.5s ease;
    }

    /* Testimonials slider */
    .testimonials {
      background: white;
      padding: 60px 5%;
      margin: 60px 0;
    }

    .testimonial-slider {
      max-width: 800px;
      margin: 0 auto;
      position: relative;
    }

    .testimonial {
      background: #f9f9f9;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.05);
      text-align: center;
      display: none;
    }

    .testimonial.active {
      display: block;
      animation: fadeIn 0.8s ease;
    }

    .testimonial img {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      object-fit: cover;
      margin: 0 auto 20px;
      border: 3px solid var(--accent);
    }

    .testimonial-rating {
      color: #ffc107;
      font-size: 20px;
      margin: 10px 0;
    }

    .slider-nav {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    .slider-dot {
      width: 12px;
      height: 12px;
      background: #ddd;
      border-radius: 50%;
      margin: 0 5px;
      cursor: pointer;
    }

    .slider-dot.active {
      background: var(--accent);
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
      .navbar {
        flex-direction: column;
        padding: 15px;
      }
      
      .navbar div {
        margin-top: 15px;
      }
      
      .header h1 {
        font-size: 2rem;
      }
      
      .grid-container {
        padding: 30px 15px;
      }
      
      table {
        width: 95%;
      }
    }
  </style>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

  <div class="navbar">
        <div class="logo">Xplorvia</div>
        <nav>
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
        </nav>
        
    </div>

  >
  <div class="header">
  <div class="header-content">
    <!-- First heading with space -->
    <h1>🌍 Discover Thrilling Adventure Activities!</h1>
    
    <!-- Space between heading and one-line description -->
    <div class="header-spacer"></div>
    
    <!-- One-line description -->
    <p class="header-description">Push your limits and create unforgettable memories with our expert-guided adventures</p>
    
    <!-- Space between description and activity links -->
    <div class="header-spacer"></div>
    
    <!-- Activity links in one line -->
    <div class="activity-nav">
      <a href="#trekking"><i class="fas fa-mountain"></i> Trekking</a>
      <a href="#rafting"><i class="fas fa-water"></i> Rafting</a>
      <a href="#ziplining"><i class="fas fa-bolt"></i> Ziplining</a>
      <a href="#paragliding"><i class="fas fa-parachute-box"></i> Paragliding</a>
      <a href="#camping"><i class="fas fa-campground"></i> Camping</a>
      <a href="#scuba"><i class="fas fa-water"></i> Scuba Diving</a>
    </div>
  </div>
</div>

  <marquee>🎉 Special Offer: Book 2 Activities & Get 15% Off! Limited Time Only! 🎉</marquee>

  <div class="grid-container">

    <div class="section" id="trekking">
      <div class="badge">Most Popular</div>
      <h2><i class="fas fa-mountain"></i> Himalayan Trekking</h2>
      <p>"The mountains are calling and I must go." - John Muir</p>
      <ul>
        <li>Expert Mountain Guides</li>
        <li>Multiple Difficulty Levels</li>
        <li>Scenic Camping Sites</li>
        <li>All Safety Equipment</li>
        <li>Completion Certificate</li>
      </ul>
      <a href="#" class="activity-btn">Explore Treks</a>
    </div>

    <div class="section" id="rafting">
      <h2><i class="fas fa-water"></i> White Water Rafting</h2>
      <p>"Feel the rush of conquering wild rivers"</p>
      <ul>
        <li>Grade III-V Rapids</li>
        <li>Professional River Guides</li>
        <li>Safety Kayak Support</li>
        <li>Action Photos Included</li>
      </ul>
      <a href="#" class="activity-btn">Ride the Rapids</a>
    </div>

    <div class="section" id="ziplining">
      <div class="badge">New</div>
      <h2><i class="fas fa-bolt"></i> Jungle Ziplining</h2>
      <p>"Fly through the canopy like a jungle adventurer"</p>
      <ul>
        <li>1.5km Total Cable Length</li>
        <li>Night Ziplining Available</li>
        <li>GoPro Footage Option</li>
        <li>Eco-Friendly Operation</li>
      </ul>
      <a href="#" class="activity-btn">Take Flight</a>
    </div>

    <div class="section" id="paragliding">
      <h2><i class="fas fa-parachute-box"></i> Paragliding</h2>
      <p>"Soar like an eagle over breathtaking landscapes"</p>
      <ul>
        <li>Tandem Flights with Experts</li>
        <li>15-25 Minute Flights</li>
        <li>HD Video Package</li>
        <li>Perfect for Beginners</li>
      </ul>
      <a href="#" class="activity-btn">Book Your Flight</a>
    </div>

    <div class="section" id="camping">
      <div class="badge">Family Favorite</div>
      <h2><i class="fas fa-campground"></i> Luxury Camping</h2>
      <p>"Under the stars with all the comforts"</p>
      <ul>
        <li>Premium Tents with Beds</li>
        <li>Gourmet Meals Included</li>
        <li>Guided Stargazing</li>
        <li>Morning Yoga Sessions</li>
      </ul>
      <h4>Sample Itinerary</h4>
      <ol>
        <li>Day 1: Sunset Welcome & Campfire</li>
        <li>Night: Telescope Stargazing</li>
        <li>Day 2: Sunrise Hike & Breakfast</li>
      </ol>
      <a href="#" class="activity-btn">Plan Your Retreat</a>
    </div>

    <div class="section" id="scuba">
      <h2><i class="fas fa-water"></i> Scuba Diving</h2>
      <p>"Discover a whole new world beneath the waves"</p>
      <ul>
        <li>PADI Certified Instructors</li>
        <li>Coral Reef Exploration</li>
        <li>Underwater Photography</li>
        <li>Beginner to Advanced</li>
      </ul>
      <a href="#" class="activity-btn">Dive In</a>
    </div>

  </div>

  <div class="testimonials">
    <h2 style="text-align: center; margin-bottom: 40px;">What Our Adventurers Say</h2>
    <div class="testimonial-slider">
      <div class="testimonial active">
        <img src="https://randomuser.me/api/portraits/women/32.jpg" alt="Sarah J.">
        <h3>Sarah J.</h3>
        <div class="testimonial-rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <p>"The Himalayan trek was life-changing! Our guide was knowledgeable and made sure we were safe while pushing our limits. Can't wait for my next adventure with Xplorvia!"</p>
      </div>
      <div class="testimonial">
        <img src="https://randomuser.me/api/portraits/men/45.jpg" alt="Michael T.">
        <h3>Michael T.</h3>
        <div class="testimonial-rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star-half-alt"></i>
        </div>
        <p>"The white water rafting experience was exhilarating! The team was professional and made sure we had an unforgettable time while maintaining top safety standards."</p>
      </div>
      <div class="testimonial">
        <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Priya K.">
        <h3>Priya K.</h3>
        <div class="testimonial-rating">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <p>"First time paragliding and it was absolutely magical! The instructors were patient and professional. The views were breathtaking - worth every penny!"</p>
      </div>
      <div class="slider-nav">
        <div class="slider-dot active" onclick="showTestimonial(0)"></div>
        <div class="slider-dot" onclick="showTestimonial(1)"></div>
        <div class="slider-dot" onclick="showTestimonial(2)"></div>
      </div>
    </div>
  </div>

  <table>
    <tr>
      <th>Activity</th>
      <th>Duration</th>
      <th>Difficulty</th>
      <th>Best Season</th>
      <th>Price Range</th>
    </tr>
    <tr>
      <td><i class="fas fa-mountain"></i> Trekking</td>
      <td>1–5 days</td>
      <td>Moderate to Challenging</td>
      <td>Mar-Jun, Sep-Nov</td>
      <td class="price-cell">₹1,500–5,000/day</td>
    </tr>
    <tr>
      <td><i class="fas fa-water"></i> Rafting</td>
      <td>2–6 hours</td>
      <td>Moderate to Extreme</td>
      <td>Sep–Dec</td>
      <td class="price-cell">₹1,200–3,500</td>
    </tr>
    <tr>
      <td><i class="fas fa-bolt"></i> Ziplining</td>
      <td>30–90 min</td>
      <td>Easy to Moderate</td>
      <td>Year Round</td>
      <td class="price-cell">₹800–2,500</td>
    </tr>
    <tr>
      <td><i class="fas fa-parachute-box"></i> Paragliding</td>
      <td>15–30 min</td>
      <td>Easy</td>
      <td>Oct–Mar</td>
      <td class="price-cell">₹2,500–5,000</td>
    </tr>
    <tr>
      <td><i class="fas fa-campground"></i> Camping</td>
      <td>1–3 nights</td>
      <td>Easy</td>
      <td>Year Round</td>
      <td class="price-cell">₹2,000–6,000</td>
    </tr>
    <tr>
      <td><i class="fas fa-water"></i> Scuba Diving</td>
      <td>30–60 min</td>
      <td>Beginner to Advanced</td>
      <td>Nov–Apr</td>
      <td class="price-cell">₹3,500–8,000</td>
    </tr>
  </table>

  <div class="footer">
    <div class="social-links">
      <a href="#"><i class="fab fa-facebook-f"></i></a>
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-youtube"></i></a>
      <a href="#"><i class="fab fa-google"></i></a>
    </div>
    <p>📧 info@xplorvia.com | 📞 +91 9876543210</p>
    <p>© 2025 Xplorvia Adventures. All Rights Reserved.</p>
    <p>Adventure Awaits - Are You Ready?</p>
  </div>

  <!-- Floating Action Button -->
  <div class="fab" onclick="toggleWeather()">
    <i class="fas fa-cloud-sun"></i>
  </div>

  <!-- Weather Widget -->
  <div class="weather-widget" id="weatherWidget">
    <h3>Weather Conditions</h3>
    <p><i class="fas fa-map-marker-alt"></i> Current Location</p>
    <p><i class="fas fa-temperature-high"></i> 28°C | Mostly Sunny</p>
    <p>Best Activities Today:</p>
    <ul>
      <li>Trekking</li>
      <li>Ziplining</li>
      <li>Camping</li>
    </ul>
  </div>

  <script>
    // Testimonial slider functionality
    let currentTestimonial = 0;
    const testimonials = document.querySelectorAll('.testimonial');
    const dots = document.querySelectorAll('.slider-dot');
    
    function showTestimonial(index) {
      testimonials.forEach(testimonial => testimonial.classList.remove('active'));
      dots.forEach(dot => dot.classList.remove('active'));
      
      testimonials[index].classList.add('active');
      dots[index].classList.add('active');
      currentTestimonial = index;
    }
    
    // Auto-rotate testimonials
    setInterval(() => {
      currentTestimonial = (currentTestimonial + 1) % testimonials.length;
      showTestimonial(currentTestimonial);
    }, 5000);
    
    // Weather widget toggle
    function toggleWeather() {
      document.getElementById('weatherWidget').classList.toggle('show');
    }
    
    // Animate sections on scroll
    document.addEventListener('DOMContentLoaded', () => {
      const sections = document.querySelectorAll('.section');
      
      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.style.animation = 'fadeIn 0.6s ease forwards';
          }
        });
      }, { threshold: 0.1 });
      
      sections.forEach(section => {
        observer.observe(section);
      });
    });
  </script>
</body>
</html>