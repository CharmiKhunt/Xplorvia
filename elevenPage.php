<html>
<head>
  <title>FAQs - Adventure Zone</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Segoe UI', sans-serif;
      background: #f0f8ff;
      color: #333;
    }

    /* Navbar */
    .navbar {
      background-color: rgba(30, 50, 58, 0.95);
      color: white;
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
    }

    .navbar div:first-child {
      font-size: 24px;
      font-weight: bold;
    }

    .navbar a {
      color: white;
      margin: 0 10px;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s;
    }

    .navbar a:hover {
      color: #ffcc00;
      text-decoration: underline;
    }

    /* FAQ Section */
    .faq-container {
      max-width: 850px;
      margin: 60px auto;
      background: #ffffff;
      border-radius: 16px;
      padding: 40px 30px;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }

    h1 {
      text-align: center;
      color: #2c3e50;
      font-size: 2.5rem;
      margin-bottom: 40px;
      position: relative;
    }

    h1::after {
      content: "";
      width: 80px;
      height: 4px;
      background: linear-gradient(90deg, #4079ab, #67b2d0);
      display: block;
      margin: 10px auto 0;
      border-radius: 2px;
    }

    .faq-item {
      margin-bottom: 20px;
      border: 1px solid #c7e0f4;
      border-radius: 12px;
      background-color: #f7fcfe;
      transition: all 0.3s ease-in-out;
    }

    .faq-question {
      padding: 18px 20px;
      font-weight: 600;
      font-size: 1.1rem;
      cursor: pointer;
      position: relative;
      color: #4079ab;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .faq-question::after {
      content: "+";
      font-size: 22px;
      transition: transform 0.3s ease;
    }

    .faq-item.active .faq-question::after {
      content: "-";
    }

    .faq-item.active {
      background-color: #eaf6ff;
      border-color: #67b2d0;
    }

    .faq-answer {
      padding: 0 20px;
      max-height: 0;
      overflow: hidden;
      transition: max-height 0.3s ease, padding 0.3s ease;
      color: #444;
      font-size: 0.98rem;
    }

    .faq-item.active .faq-answer {
      padding: 0 20px 20px;
      max-height: 500px;
    }

    a {
      color: #00796b;
      text-decoration: underline;
      font-weight: 500;
    }
  </style>
</head>
<body>

  <div class="navbar">
    <div>Xplorvia</div>
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

  <div class="faq-container">
    <h1>Frequently Asked Questions</h1>

    <div class="faq-item">
      <div class="faq-question">1. Do I need prior experience?</div>
      <div class="faq-answer">
        <p>No experience needed! Our certified guides make every activity safe and enjoyable even for beginners.</p>
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-question">2. Is it safe?</div>
      <div class="faq-answer">
        <p>Absolutely. We use premium safety gear and follow international safety standards. All activities are supervised by trained experts.</p>
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-question">3. What if it rains?</div>
      <div class="faq-answer">
        <p>In most cases, we continue in light rain. For severe weather, we reschedule or refund your activity depending on conditions.</p>
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-question">4. What should I wear?</div>
      <div class="faq-answer">
        <p>Wear breathable clothing, good shoes, and bring a water bottle. Some activities may require jackets or swimwear — check the activity details.</p>
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-question">5. Are there age restrictions?</div>
      <div class="faq-answer">
        <p>Most activities are for ages 10+. Some may require specific health conditions — read each activity's instructions carefully.</p>
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-question">6. How do I book?</div>
      <div class="faq-answer">
        <p>Just head over to our <a href="fifthpage.html">Booking Page</a>, choose your adventure, date, and pay securely online.</p>
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-question">7. Can I cancel?</div>
      <div class="faq-answer">
        <p>Yes! Free cancellation up to 48 hours before. Late cancellations may incur a fee — read our <a href="cancellation.html">Cancellation Policy</a>.</p>
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-question">8. Do you offer group packages?</div>
      <div class="faq-answer">
        <p>Yes, we organize custom adventures for schools, colleges, and corporates. Contact us for bulk deals.</p>
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-question">9. Is food included?</div>
      <div class="faq-answer">
        <p>Half-day activities don't include food, but full-day and overnight adventures often include meals and stay — see activity page for details.</p>
      </div>
    </div>

    <div class="faq-item">
      <div class="faq-question">10. How do I reach you?</div>
      <div class="faq-answer">
        <p>Visit our <a href="Ninthpage.html">Contact Page</a>, or reach out via WhatsApp, Email, or our customer care number.</p>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const faqItems = document.querySelectorAll('.faq-item');
      
      faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        question.addEventListener('click', () => {
          // Close all other items
          faqItems.forEach(otherItem => {
            if (otherItem !== item && otherItem.classList.contains('active')) {
              otherItem.classList.remove('active');
            }
          });
          
          // Toggle current item
          item.classList.toggle('active');
        });
      });

    });
  </script>

</body>
</html>