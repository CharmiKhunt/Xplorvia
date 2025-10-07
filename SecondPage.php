<html>
<head>
  <title>Adventure Awaits 🌍</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family:sans-serif;
      background:  #f0f8ff;
      color: #2c3e50;
    }

    header {
      background: url('https://images.unsplash.com/photo-1507525428034-b723cf961d3e') no-repeat center center/cover;
      height: 90vh;
      color: white;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      position: relative;
    }

    header::before {
      content: '';
      position: absolute;
      top: 0; left: 0;
      width: 100%; height: 100%;
      background: rgba(0, 0, 0, 0.4);
    }

    header h1 {
      font-size: 3.5rem;
      z-index: 1;
    }

    header p {
      font-size: 1.4rem;
      margin-top: 10px;
      z-index: 1;
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

    .container {
      max-width: 1200px;
      margin: 40px auto;
      padding: 20px;
    }

    .section-title {
      text-align: center;
      font-size: 2.5rem;
      margin-bottom: 30px;
      color: #0d47a1;
    }

    .cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
    }

    .card {
      background: rgba(255, 255, 255, 0.75);
      backdrop-filter: blur(8px);
      border-radius: 16px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      overflow: hidden;
      transition: transform 0.3s;
      display: flex;
      flex-direction: column;
    }

    .card:hover {
      transform: translateY(-10px);
    }

    .card img {
      width: 100%;
      height: 200px;
      object-fit: cover;
    }

    .card-content {
      padding: 20px;
      flex-grow: 1;
    }

    .card h3 {
      margin-bottom: 10px;
      color: #1565c0;
    }

    .card p {
      font-size: 0.95rem;
      color: #444;
      margin-bottom: 15px;
    }

    .activity-btn {
      display: inline-block;
      background-color: #2e3f59;
      color: white;
      padding: 8px 15px;
      border-radius: 5px;
      text-decoration: none;
      font-weight: bold;
      transition: background-color 0.3s;
     text-align: center;
    }

    .activity-btn:hover {
      background-color: #0d283d;
    }

    footer {
      background-color: rgba(30, 50, 58, 0.95);
      color: rgb(244, 233, 233);
      padding: 20px 0;
      text-align: center;
      margin-top: 50px;
    }

    footer p {
      margin: 5px 0;
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

  <header>
    <h1>Adventure Awaits</h1>
    <p>Discover thrilling destinations across India</p>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="section-title">Top Adventure Destinations</div>
    <div class="cards">
      
      <!-- MANALI -->
      <div class="card">
        <img src="https://res.cloudinary.com/dyiffrkzh/image/upload/c_fill,f_auto,fl_progressive.strip_profile,g_center,h_400,q_auto,w_700/v1702707415/bbj/mgkwu95yaijycle9mmvx.jpg" alt="Manali">
        <div class="card-content">
          <h3>Manali</h3>
          <p>Paragliding, camping, and snow trekking in the lap of the Himalayas.</p>
          <a href="ThirdPage.html" class="activity-btn">View Activities</a>
        </div>
      </div>

      <!-- RISHIKESH -->
      <div class="card">
        <img src="https://assets.traveltriangle.com/blog/wp-content/uploads/2016/06/Rafting-in-Rishikesh.jpg" alt="Rishikesh">
        <div class="card-content">
          <h3>Rishikesh</h3>
          <p>White-water rafting, camping, and scuba Diving by the Ganges.</p>
          <a href="ThirdPage.html" class="activity-btn">View Activities</a>
        </div>
      </div>

      <!-- KASHMIR -->
      <div class="card">
        <img src="https://static-blog.treebo.com/wp-content/uploads/2023/08/Patnitop-Jammu-and-Kashmir--1024x675.jpg" alt="Kashmir">
        <div class="card-content">
          <h3>Kashmir</h3>
          <p> trekking, zip-lining, and unforgettable scenery.</p>
          <a href="ThirdPage.html" class="activity-btn">View Activities</a>
        </div>
      </div>

      <!-- SIKKIM -->
      <div class="card">
        <img src="https://www.esikkimtourism.in/wp-content/uploads/2019/05/adventorus-tour.jpg" alt="Sikkim">
        <div class="card-content">
          <h3>Sikkim</h3>
          <p>High-altitude adventures including rafting, paragliding, and zip-lining.</p>
          <a href="ThirdPage.html" class="activity-btn">View Activities</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <p>📧 Email us: info@xplorvia.com</p>
    <p>🌐 Explore India's most thrilling destinations with us</p>
    <p>© 2025 xplorvia</p>
  </footer>

</body>
</html>