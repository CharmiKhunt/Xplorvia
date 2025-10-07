<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adventure Gallery - Xplorvia</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --primary: #1e323a;
      --secondary: #ffcc00;
      --accent: #1f3b57;
      --light: #ebf4fd;
      --dark: #2c3e50;
    }
    
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
    body {
      background: linear-gradient(135deg, #f5f9ff 0%, #e6f0ff 100%);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: var(--dark);
      overflow-x: hidden;
    }
    
    .navbar {
      background: linear-gradient(to right, var(--primary) 0%, #2a4b5a 100%);
      color: white;
      padding: 15px 5%;
      display: flex;
      justify-content: space-between;
      align-items: center;
      position: sticky;
      top: 0;
      z-index: 100;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }
    
    .logo {
      font-size: 28px;
      font-weight: 500;
      background: white;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      display: flex;
      align-items: center;
      gap: 8px;
    }
    
    .logo i {
      font-size: 32px;
    }
    
    .nav-links {
      display: flex;
      gap: 15px;
    }
    
    .navbar a {
      color: white;
      text-decoration: none;
      font-weight: 600;
      padding: 8px 12px;
      border-radius: 4px;
      transition: all 0.3s ease;
      position: relative;
    }
    
    .navbar a:hover {
      color: var(--secondary);
      transform: translateY(-2px);
    }
    
    .navbar a::after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      bottom: 0;
      left: 0;
      background-color: var(--secondary);
      transition: width 0.3s ease;
    }
    
    .navbar a:hover::after {
      width: 100%;
    }
    
    .hero {
      background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
                  url('https://images.unsplash.com/photo-1501555088652-021faa106b9b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
      background-size: cover;
      background-position: center;
      height: 300px;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      color: white;
      margin-bottom: 40px;
    }
    
    .hero h1 {
      font-size: 3.5rem;
      margin-bottom: 15px;
      text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
      animation: fadeInDown 1s ease;
    }
    
    .hero p {
      font-size: 1.2rem;
      max-width: 700px;
      margin: 0 auto;
      text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.5);
      animation: fadeInUp 1s ease;
    }
    
    .gallery-container {
      padding: 0 5%;
      margin-bottom: 50px;
    }
    
    .activity-section {
      margin-bottom: 50px;
    }
    
    .section-title {
      text-align: center;
      margin-bottom: 30px;
      position: relative;
    }
    
    .section-title h2 {
      font-size: 2.2rem;
      color: var(--accent);
      display: inline-block;
      background: linear-gradient(to right, var(--primary), var(--accent));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      padding-bottom: 10px;
    }
    
    .section-title h2::after {
      content: '';
      position: absolute;
      width: 100px;
      height: 3px;
      background: linear-gradient(to right, var(--secondary), var(--primary));
      bottom: 0;
      left: 50%;
      transform: translateX(-50%);
    }
    
    .gallery-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
      gap: 25px;
      padding: 0 20px;
    }
    
    .gallery-item {
      position: relative;
      border-radius: 12px;
      overflow: hidden;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
      transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
      height: 250px;
    }
    
    .gallery-item:hover {
      transform: translateY(-10px) scale(1.02);
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }
    
    .gallery-img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.5s ease;
    }
    
    .gallery-item:hover .gallery-img {
      transform: scale(1.1);
    }
    
    .img-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(to top, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.3) 50%, transparent 100%);
      display: flex;
      flex-direction: column;
      justify-content: flex-end;
      padding: 20px;
      color: white;
      opacity: 0;
      transition: opacity 0.3s ease;
    }
    
    .gallery-item:hover .img-overlay {
      opacity: 1;
    }
    
    .img-overlay h3 {
      font-size: 1.5rem;
      margin-bottom: 8px;
      transform: translateY(20px);
      transition: transform 0.3s ease;
    }
    
    .img-overlay p {
      font-size: 0.9rem;
      transform: translateY(20px);
      transition: transform 0.3s ease 0.1s;
    }
    
    .gallery-item:hover .img-overlay h3,
    .gallery-item:hover .img-overlay p {
      transform: translateY(0);
    }
    
    .cta-section {
      background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
      padding: 60px 5%;
      text-align: center;
      color: white;
      margin: 60px 0;
      position: relative;
      overflow: hidden;
    }
    
    .cta-section::before {
      content: '';
      position: absolute;
      top: -50px;
      left: 0;
      width: 100%;
      height: 100px;
      background-color: var(--light);
      transform: rotate(-2deg);
      transform-origin: bottom left;
    }
    
    .cta-section::after {
      content: '';
      position: absolute;
      bottom: -50px;
      left: 0;
      width: 100%;
      height: 100px;
      background-color: var(--light);
      transform: rotate(2deg);
      transform-origin: top left;
    }
    
    .cta-content {
      max-width: 800px;
      margin: 0 auto;
      position: relative;
      z-index: 1;
    }
    
    .cta-content h2 {
      font-size: 2.5rem;
      margin-bottom: 20px;
    }
    
    .cta-content p {
      font-size: 1.1rem;
      margin-bottom: 30px;
      line-height: 1.6;
    }
    
    .cta-btn {
      display: inline-block;
      background-color: var(--secondary);
      color: var(--dark);
      padding: 12px 30px;
      border-radius: 50px;
      text-decoration: none;
      font-weight: 700;
      font-size: 1.1rem;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }
    
    .cta-btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
      background-color: #ffd633;
    }
    
    footer {
      background-color: var(--primary);
      color: white;
      padding: 40px 5%;
      text-align: center;
    }
    
    .footer-content {
      max-width: 1200px;
      margin: 0 auto;
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
      text-align: left;
    }
    
    .footer-column h3 {
      font-size: 1.3rem;
      margin-bottom: 20px;
      color: var(--secondary);
    }
    
    .footer-column p, .footer-column a {
      color: #d1d1d1;
      margin-bottom: 10px;
      display: block;
      text-decoration: none;
      transition: color 0.3s ease;
    }
    
    .footer-column a:hover {
      color: var(--secondary);
    }
    
    .social-links {
      display: flex;
      gap: 15px;
      margin-top: 15px;
    }
    
    .social-links a {
      display: flex;
      align-items: center;
      justify-content: center;
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background-color: rgba(255, 255, 255, 0.1);
      color: white;
      transition: all 0.3s ease;
    }
    
    .social-links a:hover {
      background-color: var(--secondary);
      color: var(--dark);
      transform: translateY(-3px);
    }
    
    .copyright {
      margin-top: 40px;
      padding-top: 20px;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
      font-size: 0.9rem;
      color: #aaa;
    }
    
    @keyframes fadeInDown {
      from {
        opacity: 0;
        transform: translateY(-30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    
    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    
    /* Responsive adjustments */
    @media (max-width: 1024px) {
      .navbar {
        flex-direction: column;
        padding: 15px;
      }
      
      .nav-links {
        margin-top: 15px;
        flex-wrap: wrap;
        justify-content: center;
      }
      
      .hero h1 {
        font-size: 2.5rem;
      }
    }
    
    @media (max-width: 768px) {
      .gallery-grid {
        grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
      }
      
      .hero {
        height: 250px;
      }
      
      .hero h1 {
        font-size: 2rem;
      }
      
      .hero p {
        font-size: 1rem;
      }
    }
  </style>
</head>

<body>
  <nav class="navbar">
    <div class="logo">
      <span>Xplorvia</span>
    </div>
    <div class="nav-links">
      <a href="firstPage.html">Home</a>
      <a href="SecondPage.html">Destinations</a>
      <a href="ThirdPage.html">Activities</a>
      <a href="FourthPage.html">Packages</a>
      <a href="FifthPage.html">Book Now</a>
      <a href="SixthPage.html">Gallery</a>
      <a href="SeventhPage.html">About</a>
      <a href="EighthPage.html">Terms</a>
      <a href="NinthPage.html">Contact</a>
      <a href="TenthPage.html">Feedback</a>
      <a href="elevenPage.html">FAQ's</a>
    </div>
  </nav>

  <section class="hero">
    <h1>Adventure Gallery</h1>
    <p>Experience the thrill through the eyes of our adventurers</p>
  </section>

  <div class="gallery-container">
    <section class="activity-section">
      <div class="section-title">
        <h2>Trekking Adventures</h2>
      </div>
      <div class="gallery-grid">
        <div class="gallery-item">
          <img src="https://media1.thrillophilia.com/filestore/8c4endyet4gv16wx0d1otkevk90l_pexels-saikat-ghosh-914128.jpg?w=400&dpr=2" alt="Mountain trekking" class="gallery-img">
          <div class="img-overlay">
            <h3>Himalayan Trails</h3>
            <p>Conquer the majestic peaks with our expert guides</p>
          </div>
        </div>
        <div class="gallery-item">
          <img src="https://www.indiatourism.guide/wp-content/uploads/2023/04/Trek-at-Dzongri.jpg" alt="Forest trekking" class="gallery-img">
          <div class="img-overlay">
            <h3>Forest Expeditions</h3>
            <p>Explore lush green trails through ancient forests</p>
          </div>
        </div>
        <div class="gallery-item">
          <img src="https://www.farouttrek.com/wp-content/uploads/2023/12/20231022_092058-copy.jpg" alt="Group trekking" class="gallery-img">
          <div class="img-overlay">
            <h3>Group Adventures</h3>
            <p>Make new friends while exploring nature's wonders</p>
          </div>
        </div>
      </div>
    </section>

    <section class="activity-section">
      <div class="section-title">
        <h2>White Water Rafting</h2>
      </div>
      <div class="gallery-grid">
        <div class="gallery-item">
          <img src="https://media1.thrillophilia.com/filestore/l1stgsdtm1wlcgkfhkg49pers7qj_WDEFRGTYH.png?w=305&h=230&dpr" alt="Rafting in rapids" class="gallery-img">
          <div class="img-overlay">
            <h3>Grade IV Rapids</h3>
            <p>Challenge yourself with our most thrilling routes</p>
          </div>
        </div>
        <div class="gallery-item">
          <img src="https://adventureguru.in/wp-content/themes/AdventureGuru/assets/img/rafting-in-rishikesh.jpg" alt="Rafting team" class="gallery-img">
          <div class="img-overlay">
            <h3>Team Adventure</h3>
            <p>Work together to navigate the wild waters</p>
          </div>
        </div>
        <div class="gallery-item">
          <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/1c/2c/f1/81/caption.jpg?w=500&h=400&s=1" alt="Scenic rafting" class="gallery-img">
          <div class="img-overlay">
            <h3>Scenic Routes</h3>
            <p>Enjoy breathtaking views while rafting</p>
          </div>
        </div>
      </div>
    </section>

    <section class="activity-section">
      <div class="section-title">
        <h2>Zip Lining</h2>
      </div>
      <div class="gallery-grid">
        <div class="gallery-item">
          <img src="https://media2.thrillophilia.com/images/photos/000/050/044/original/1613131084_shutterstock_531833986.jpg?w=753&h=450&dpr=1.5" alt="Zip line over valley" class="gallery-img">
          <div class="img-overlay">
            <h3>Valley Crossing</h3>
            <p>Fly over stunning gorges and valleys</p>
          </div>
        </div>
        <div class="gallery-item">
          <img src="https://plutotours.in/places/wp-content/uploads/2024/09/Zip-Lining-Rishikesh-1024x593.webp" alt="Forest zip line" class="gallery-img">
          <div class="img-overlay">
            <h3>Canopy Tours</h3>
            <p>Soar through the treetops like a bird</p>
          </div>
        </div>
        <div class="gallery-item">
          <img src="https://images.wanderon.in/blogs/new/2024/05/ziplining-rishikesh-min.jpg" alt="Night zip line" class="gallery-img">
          <div class="img-overlay">
            <h3>Night Adventures</h3>
            <p>Experience zip lining under the stars</p>
          </div>
        </div>
      </div>
    </section>

    <section class="activity-section">
      <div class="section-title">
        <h2>Paragliding</h2>
      </div>
      <div class="gallery-grid">
        <div class="gallery-item">
          <img src="https://xperienceadventure.com/wp-content/uploads/2025/02/Par-6-870x555.webp" alt="Paragliding over mountains" class="gallery-img">
          <div class="img-overlay">
            <h3>Mountain Soaring</h3>
            <p>Feel the freedom of flying above peaks</p>
          </div>
        </div>
        <div class="gallery-item">
          <img src="https://www.holidify.com/images/cmsuploads/compressed/shutterstock_1327775657_20190627190153.jpg" alt="Paragliding sunset" class="gallery-img">
          <div class="img-overlay">
            <h3>Sunset Flights</h3>
            <p>Witness breathtaking sunsets from the sky</p>
          </div>
        </div>
        <div class="gallery-item">
          <img src="https://travelogyindia.b-cdn.net/blog/wp-content/uploads/2017/04/Paragliding-in-Rishikesh.jpg" alt="Tandem paragliding" class="gallery-img">
          <div class="img-overlay">
            <h3>Tandem Flights</h3>
            <p>Perfect for first-time flyers</p>
          </div>
        </div>
      </div>
    </section>

    <section class="activity-section">
      <div class="section-title">
        <h2>Wilderness Camping</h2>
      </div>
      <div class="gallery-grid">
        <div class="gallery-item">
          <img src="https://i0.wp.com/www.tusktravel.com/blog/wp-content/uploads/2021/01/Camping-in-Rishikesh.jpg?fit=1081%2C717&ssl=1" alt="Riverside camping" class="gallery-img">
          <div class="img-overlay">
            <h3>Riverside Retreats</h3>
            <p>Fall asleep to the sound of flowing water</p>
          </div>
        </div>
        <div class="gallery-item">
          <img src="https://campinginrishikesh.in/wp-content/uploads/elementor/thumbs/Aspen_Camp1-qh8qfexsh0su5doef93y7bc93vhf8rdk4nq4tt05k8.jpg" alt="Mountain camping" class="gallery-img">
          <div class="img-overlay">
            <h3>Alpine Camps</h3>
            <p>High-altitude camping with stunning views</p>
          </div>
        </div>
        <div class="gallery-item">
          <img src="https://media1.thrillophilia.com/filestore/kgf0kclu6h08jia4ku52ij2l0upf_NVR1.jpg?w=753&h=450&dpr=2.0" alt="Luxury camping" class="gallery-img">
          <div class="img-overlay">
            <h3>Glamping</h3>
            <p>Camp in comfort with our luxury setups</p>
          </div>
        </div>
      </div>
    </section>

    <section class="activity-section">
      <div class="section-title">
        <h2>Scuba Diving</h2>
      </div>
      <div class="gallery-grid">
        <div class="gallery-item">
          <img src="https://static.toiimg.com/photo/msid-80685268,width-96,height-65.cms" alt="Coral reef diving" class="gallery-img">
          <div class="img-overlay">
            <h3>Reef Explorations</h3>
            <p>Discover vibrant marine ecosystems</p>
          </div>
        </div>
        <div class="gallery-item">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTaOLPtuktqGUpPurvaHFf77zPu4VimEXsZz-pSkUNrZV5wwEloyEzt-8ygllAP209gVfI&usqp=CAU" alt="Wreck diving" class="gallery-img">
          <div class="img-overlay">
            <h3>Wreck Adventures</h3>
            <p>Explore sunken ships and their mysteries</p>
          </div>
        </div>
        <div class="gallery-item">
          <img src="https://wallpapercrafter.com/desktop1/663938-cave-diver-diving-ocean-scuba-sea-underwater.jpg" alt="Cave diving" class="gallery-img">
          <div class="img-overlay">
            <h3>Cave Diving</h3>
            <p>For the most adventurous divers</p>
          </div>
        </div>
      </div>
    </section>
  </div>

  <section class="cta-section">
    <div class="cta-content">
      <h2>Ready for Your Adventure?</h2>
      <p>Browse our exciting packages and start planning your next adrenaline-filled journey with Xplorvia. Our expert guides will ensure you have a safe and unforgettable experience.</p>
      <a href="FourthPage.html" class="cta-btn">Explore Packages</a>
    </div>
  </section>

  <footer>
    <div class="footer-content">
      <div class="footer-column">
        <h3>Xplorvia</h3>
        <p>Your gateway to unforgettable adventures and breathtaking experiences around the world.</p>
        <div class="social-links">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
      <div class="footer-column">
        <h3>Quick Links</h3>
        <a href="firstPage.html">Home</a>
        <a href="SecondPage.html">Destinations</a>
        <a href="ThirdPage.html">Activities</a>
        <a href="FourthPage.html">Packages</a>
        <a href="FifthPage.html">Book Now</a>
      </div>
      <div class="footer-column">
        <h3>Support</h3>
        <a href="SeventhPage.html">About Us</a>
        <a href="NinthPage.html">Contact</a>
        <a href="TenthPage.html">Feedback</a>
        <a href="elevenPage.html">FAQ's</a>
        <a href="EighthPage.html">Terms & Conditions</a>
      </div>
      <div class="footer-column">
        <h3>Contact Us</h3>
        <p><i class="fas fa-map-marker-alt"></i> 123 Adventure St, Mountain View, CA</p>
        <p><i class="fas fa-phone"></i> +91 98765 43210</p>
        <p><i class="fas fa-envelope"></i> info@xplorvia.com</p>
      </div>
    </div>
    <div class="copyright">
      <p>© 2025 Xplorvia. All rights reserved. | Designed with <i class="fas fa-heart" style="color: #ff4757;"></i> for adventurers</p>
    </div>
  </footer>
</body>
</html>