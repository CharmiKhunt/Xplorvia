<html>
<head>
  <title>Adventure Activities</title>
  <style>
    body {
      margin: 0;
      font-family: sans-serif;
      background-color: #f0f8ff;
      background-size: cover;
      background-attachment: fixed;
      background-repeat: no-repeat;
      color: #333;
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

    .hero {
      position: relative;
      height: 60vh;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      overflow: hidden;
      background: linear-gradient(rgba(0,0,0,0.3), rgba(0,0,0,0.5)), 
                  url('https://images.unsplash.com/photo-1501555088652-021faa106b9b?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;
    }

    .hero-content {
      max-width: 800px;
      padding: 2rem;
      color: white;
    }

    .hero h1 {
      font-size: 3.5rem;
      margin-bottom: 1rem;
      color: white;
      text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
      animation: fadeInDown 1s ease;
    }

    .hero p {
      font-size: 1.3rem;
      margin-bottom: 2rem;
      text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
      animation: fadeInUp 1s ease;
    }

    .section-title {
      text-align: center;
      margin-bottom: 0.5rem;
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

    h1 {
      font-size: 40px;
      margin-top: 40px;
      color: #1e2a3a;
      text-shadow: 1px 1px 3px #aaa;
    }

    h3 {
      font-style: italic;
      color: #444;
      margin-bottom: 30px;
    }

    .activities-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 40px;
      padding: 30px;
    }

    .activity-card {
      background-color: white;
      width: 400px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.2);
      overflow: hidden;
      transition: transform 0.3s;
    }

    .activity-card:hover {
      transform: translateY(-10px);
    }

    .activity-card img {
      width: 100%;
      height: 240px;
      object-fit: cover;
    }

    .activity-content {
      padding: 20px;
      text-align: center;
    }

    .activity-content h2 {
      margin-top: 0;
      color: #374d72;
    }

    .activity-content p {
      color: #555;
      margin-bottom: 20px;
    }

    .activity-buttons {
      display: flex;
      justify-content: center;
      gap: 10px;
    }

    .btn {
      display: inline-block;
      padding: 8px 20px;
      border-radius: 6px;
      text-decoration: none;
      transition: all 0.3s;
      font-weight: bold;
    }

    .btn-primary {
      background-color: #1a80ab;
      color: white;
    }

    .btn-primary:hover {
      background-color: #0c5f6b;
      transform: translateY(-2px);
    }

    .btn-secondary {
      background-color: #3b61a4;
      color: white;
    }

    .btn-secondary:hover {
      background-color: #1565c0;
      transform: translateY(-2px);
    }

    footer {
      margin-top: 50px;
      padding: 20px;
      background-color: rgba(30, 50, 58, 0.9);
      color: white;
      text-align: center;
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

  <!-- Hero Section -->
  <section class="hero">
    <div class="hero-content">
      <h1>Discover Thrilling Adventures</h1>
      <p>Experience the rush of outdoor activities that will leave you with unforgettable memories</p>
    </div>
  </section>

  <div class="section-title">
    <h2>Our Adventure Activities</h2>
  </div>

  <hr>
  
  <div class="activities-container">

    <div class="activity-card">
      <img src="https://t3.ftcdn.net/jpg/01/96/01/82/360_F_196018299_moUD9nFRL1OWaVTUG7YgsdCk3gCQVzj7.jpg" alt="Trekking">
      <div class="activity-content">
        <h2>Trekking</h2>
        <p>Climb peaks, walk trails, and embrace nature.</p>
        <div class="activity-buttons">
          <a href="FourthPage.html" class="btn btn-primary">Learn More</a>
          <a href="FifthPage.html" class="btn btn-secondary">Book Now</a>
        </div>
      </div>
    </div>

    <div class="activity-card">
      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e9/Rafting_in_rishikesh.jpg/1200px-Rafting_in_rishikesh.jpg" alt="Rafting">
      <div class="activity-content">
        <h2>River Rafting</h2>
        <p>Ride the wild rivers — adrenaline guaranteed!</p>
        <div class="activity-buttons">
          <a href="FourthPage.html" class="btn btn-primary">Learn More</a>
          <a href="FifthPage.html" class="btn btn-secondary">Book Now</a>
        </div>
      </div>
    </div>

    <div class="activity-card">
      <img src="https://t4.ftcdn.net/jpg/05/87/27/23/360_F_587272320_xWOb5JcK9MwPFBMUP2AUqdXF0Ps9puie.jpg" alt="Ziplining">
      <div class="activity-content">
        <h2>Ziplining</h2>
        <p>Fly over forests and feel the rush.</p>
        <div class="activity-buttons">
          <a href="FourthPage.html" class="btn btn-primary">Learn More</a>
          <a href="FifthPage.html" class="btn btn-secondary">Book Now</a>
        </div>
      </div>
    </div>

    <div class="activity-card">
      <img src="https://media.istockphoto.com/id/522078473/photo/paraglider-flying-over-mountains.jpg?s=612x612&w=0&k=20&c=fsoxFDnN_rfISUIBb65xLprBiqv60rdYRa3q_4DQAsI=" alt="Paragliding">
      <div class="activity-content">
        <h2>Paragliding</h2>
        <p>Soar like a bird with a view from the top.</p>
        <div class="activity-buttons">
          <a href="FourthPage.html" class="btn btn-primary">Learn More</a>
          <a href="FifthPage.html" class="btn btn-secondary">Book Now</a>
        </div>
      </div>
    </div>

    <div class="activity-card">
      <img src="https://t3.ftcdn.net/jpg/02/31/52/76/360_F_231527669_vGrmJn49eDhIPTa0Bod5DamhjGNKLCR7.jpg" alt="Camping">
      <div class="activity-content">
        <h2>Camping</h2>
        <p>Sleep under the stars, wake up to adventure.</p>
        <div class="activity-buttons">
          <a href="FourthPage.html" class="btn btn-primary">Learn More</a>
          <a href="FifthPage.html" class="btn btn-secondary">Book Now</a>
        </div>
      </div>
    </div>

    <div class="activity-card">
      <img src="https://media.istockphoto.com/id/598247070/photo/scuba-diving-underwater-scuba-diver-in-blue-lagoon.jpg?s=612x612&w=0&k=20&c=HBcyp2tj5XW2ZI-ujFOEP9rbO6MMiX4Ml-IQBW8z6vo=" alt="Scuba Diving">
      <div class="activity-content">
        <h2>Scuba Diving</h2>
        <p>Dive deep into a world of wonder beneath the waves.</p>
        <div class="activity-buttons">
          <a href="FourthPage.html" class="btn btn-primary">Learn More</a>
          <a href="FifthPage.html" class="btn btn-secondary">Book Now</a>
        </div>
      </div>
    </div>

  </div>

  <footer>
    📧 Contact us: info@xplorvia.com<br>
    © 2025 xplorvia. All rights reserved.
  </footer>
</body>
</html>