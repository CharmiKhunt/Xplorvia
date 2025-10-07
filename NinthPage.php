<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - Xplorvia Adventure</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --primary: #1e323a;
      --secondary: #2a9d8f;
      --accent: #e76f51;
      --light: #ebf4fd;
      --dark: #264653;
      --success: #2a9d8f;
      --warning: #e9c46a;
      --danger: #e76f51;
    }
    
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    
    body {
      background:#f0f8ff;
      background-attachment: fixed;
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
      position: sticky;
      top: 0;
      z-index: 100;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }
    
    .navbar a {
      color: white;
      margin: 0 8px;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.3s;
      position: relative;
      padding: 5px 0;
    }
    
    .navbar a:after {
      content: '';
      position: absolute;
      width: 0;
      height: 2px;
      bottom: 0;
      left: 0;
      background-color: var(--accent);
      transition: width 0.3s;
    }
    
    .navbar a:hover {
      color: #ffcc00;
    }
    
    .navbar a:hover:after {
      width: 100%;
    }
    
    .logo {
      font-size: 24px;
      font-weight: 500;
      color: white;
      display: flex;
      align-items: center;
    }
    
    .logo i {
      margin-right: 10px;
      font-size: 28px;
    }
    
    .hero {
      background: url('https://images.unsplash.com/photo-1539635278303-d4002c07eae3?ixlib=rb-4.0.3&auto=format&fit=crop&w=1500&q=80') no-repeat center center;
      background-size: cover;
      height: 350px;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      color: white;
      text-align: center;
    }
    
    .hero:before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 0.5);
    }
    
    .hero-content {
      position: relative;
      z-index: 1;
      max-width: 800px;
      padding: 0 20px;
    }
    
    .hero h1 {
      font-size: 3.5rem;
      margin-bottom: 15px;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
    
    .hero p {
      font-size: 1.2rem;
      margin-bottom: 20px;
    }
    
    .container {
      display: flex;
      flex-wrap: wrap;
      max-width: 1200px;
      margin: 40px auto;
      gap: 30px;
      padding: 0 20px;
    }
    
    .contact-form {
      flex: 1;
      min-width: 300px;
      background: white;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    }
    
    .contact-info {
      flex: 1;
      min-width: 300px;
    }
    
    .form-title {
      color: var(--primary);
      margin-bottom: 25px;
      text-align: center;
      font-size: 1.8rem;
    }
    
    .form-group {
      margin-bottom: 20px;
    }
    
    .form-group label {
      display: block;
      margin-bottom: 8px;
      font-weight: 600;
      color: var(--dark);
      display: flex;
      align-items: center;
    }
    
    .form-group label i {
      margin-right: 10px;
      color: var(--secondary);
    }
    
    .form-control {
      width: 100%;
      padding: 14px;
      border: 2px solid #e1e5eb;
      border-radius: 10px;
      font-size: 16px;
      transition: all 0.3s;
    }
    
    .form-control:focus {
      border-color: var(--secondary);
      box-shadow: 0 0 0 3px rgba(42, 157, 143, 0.2);
      outline: none;
    }
    
    textarea.form-control {
      min-height: 150px;
      resize: vertical;
    }
    
    .btn {
      display: inline-block;
      padding: 15px 35px;
      background: var(--success);
      color: white;
      border: none;
      border-radius: 50px;
      font-size: 18px;
      font-weight: 600;
      cursor: pointer;
      transition: all 0.3s;
      box-shadow: 0 4px 15px rgba(42, 157, 143, 0.4);
      margin-right: 15px;
    }
    
    .btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 7px 20px rgba(42, 157, 143, 0.6);
      background: #238f83;
    }
    
    .btn-reset {
      background: #95a5a6;
      box-shadow: 0 4px 15px rgba(149, 165, 166, 0.4);
    }
    
    .btn-reset:hover {
      background: #7f8c8d;
      box-shadow: 0 7px 20px rgba(149, 165, 166, 0.6);
    }
    
    .btn-center {
      text-align: center;
      margin-top: 20px;
    }
    
    .info-card {
      background: white;
      border-radius: 15px;
      padding: 25px;
      margin-bottom: 25px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s;
    }
    
    .info-card:hover {
      transform: translateY(-5px);
    }
    
    .info-card h3 {
      color: var(--primary);
      margin-bottom: 15px;
      display: flex;
      align-items: center;
    }
    
    .info-card h3 i {
      margin-right: 10px;
      color: var(--accent);
    }
    
    .info-card p {
      margin-bottom: 10px;
      display: flex;
      align-items: center;
    }
    
    .info-card p i {
      margin-right: 10px;
      color: var(--secondary);
      width: 20px;
    }
    
    .social-links {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }
    
    .social-links a {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      background: var(--primary);
      color: white;
      margin: 0 10px;
      font-size: 20px;
      transition: all 0.3s;
    }
    
    .social-links a:hover {
      background: var(--accent);
      transform: translateY(-5px);
    }
    
    .map {
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      margin-top: 30px;
    }
    
    .map iframe {
      width: 100%;
      height: 300px;
      border: none;
    }
    
    .footer {
      background: var(--primary);
      color: white;
      text-align: center;
      padding: 30px 0;
      margin-top: 60px;
    }
    
    .footer a {
      color: var(--accent);
      text-decoration: none;
    }
    
    .footer a:hover {
      text-decoration: underline;
    }
    
    .error-message {
      color: var(--danger);
      font-size: 14px;
      margin-top: 5px;
      display: none;
    }
    
    .form-control.error {
      border-color: var(--danger);
    }
    
    .success-message {
      display: none;
      background: var(--success);
      color: white;
      padding: 20px;
      border-radius: 10px;
      text-align: center;
      margin: 20px 0;
    }
    
    @media (max-width: 768px) {
      .navbar {
        flex-direction: column;
        padding: 15px;
      }
      
      .navbar > div {
        margin: 10px 0;
      }
      
      .hero h1 {
        font-size: 2.5rem;
      }
      
      .container {
        flex-direction: column;
      }
    }
    
    .contact-methods {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      margin-top: 40px;
    }
    
    .method-card {
      flex: 1;
      min-width: 200px;
      background: white;
      border-radius: 15px;
      padding: 25px;
      text-align: center;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s;
    }
    
    .method-card:hover {
      transform: translateY(-5px);
    }
    
    .method-card i {
      font-size: 2.5rem;
      color: var(--accent);
      margin-bottom: 15px;
    }
    
    .method-card h3 {
      color: var(--primary);
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  <div class="navbar">
    <div class="logo"> Xplorvia</div>
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

  <div class="hero">
    <div class="hero-content">
      <h1>Get in Touch With Us</h1>
      <p>Have questions about your next adventure? We're here to help and guide you every step of the way.</p>
    </div>
  </div>

  <div class="container">
    <div class="contact-form">
      <h2 class="form-title"><i class="fas fa-envelope-open-text"></i> Send us a Message</h2>
      
      <div class="success-message" id="successMessage">
        <i class="fas fa-check-circle" style="font-size: 3rem; margin-bottom: 15px;"></i>
        <h2>Message Sent Successfully!</h2>
        <p>Thank you for contacting us. We'll get back to you within 24 hours.</p>
      </div>
      
      <form id="contactForm">
        <div class="form-group">
          <label for="name"><i class="fas fa-user"></i> Full Name</label>
          <input type="text" id="name" name="name" class="form-control" placeholder="Your full name" required>
          <div class="error-message" id="nameError">Please enter a valid name (letters and spaces only)</div>
        </div>
        
        <div class="form-group">
          <label for="email"><i class="fas fa-envelope"></i> Email Address</label>
          <input type="email" id="email" name="email" class="form-control" placeholder="your.email@example.com" required>
          <div class="error-message" id="emailError">Please enter a valid email address</div>
        </div>
        
        <div class="form-group">
          <label for="subject"><i class="fas fa-tag"></i> Subject</label>
          <input type="text" id="subject" name="subject" class="form-control" placeholder="What is this regarding?" required>
          <div class="error-message" id="subjectError">Please enter a subject</div>
        </div>
        
        <div class="form-group">
          <label for="message"><i class="fas fa-comment-dots"></i> Your Message</label>
          <textarea id="message" name="message" class="form-control" placeholder="Tell us how we can help you..." required></textarea>
          <div class="error-message" id="messageError">Please enter a message with at least 10 characters</div>
        </div>
        
        <div class="btn-center">
          <button type="submit" class="btn"><i class="fas fa-paper-plane"></i> Send Message</button>
          <button type="reset" class="btn btn-reset"><i class="fas fa-redo"></i> Clear Form</button>
        </div>
      </form>
    </div>
    
    <div class="contact-info">
      <div class="info-card">
        <h3><i class="fas fa-map-marker-alt"></i> Our Location</h3>
        <p><i class="fas fa-building"></i> 123 Adventure Street</p>
        <p><i class="fas fa-city"></i> Explorer City, India 560001</p>
      </div>
      
      <div class="info-card">
        <h3><i class="fas fa-address-book"></i> Contact Information</h3>
        <p><i class="fas fa-envelope"></i> info@xplorvia.com</p>
        <p><i class="fas fa-phone"></i> +91 98765 43210</p>
        <p><i class="fas fa-clock"></i> Mon-Sat: 9AM - 6PM</p>
      </div>
      
      <div class="info-card">
        <h3><i class="fas fa-share-alt"></i> Follow Us</h3>
        <div class="social-links">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
      
      <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.986315728598!2d77.5945143148212!3d12.90869099090088!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae151f2d0bffa5%3A0x6f07f7c66a5d432!2sBangalore%20Palace!5e0!3m2!1sen!2sin!4v1657790332541!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </div>
  
  <div class="container">
    <h2 style="width: 100%; text-align: center; margin-bottom: 30px; color: var(--primary);">Other Ways to Reach Us</h2>
    
    <div class="contact-methods">
      <div class="method-card">
        <i class="fas fa-phone-volume"></i>
        <h3>Call Us</h3>
        <p>Speak directly with our adventure experts</p>
        <p><strong>+91 98765 43210</strong></p>
      </div>
      
      <div class="method-card">
        <i class="fas fa-comments"></i>
        <h3>Live Chat</h3>
        <p>Get instant answers to your questions</p>
        <p><strong>Available 24/7</strong></p>
      </div>
      
      <div class="method-card">
        <i class="fas fa-envelope"></i>
        <h3>Email Us</h3>
        <p>Send us a detailed message</p>
        <p><strong>info@xplorvia.com</strong></p>
      </div>
      
      <div class="method-card">
        <i class="fas fa-video"></i>
        <h3>Video Call</h3>
        <p>Schedule a virtual meeting</p>
        <p><strong>By appointment</strong></p>
      </div>
    </div>
  </div>

  <div class="footer">
    <p>© 2025 Xplorvia Adventure. All rights reserved. | Designed with <i class="fas fa-heart" style="color: var(--accent);"></i> for Explorers</p>
    <p><a href="EighthPage.html">Privacy Policy</a> </p>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const form = document.getElementById('contactForm');
      const successMessage = document.getElementById('successMessage');
      
      // Form validation and submission
      form.addEventListener('submit', function(event) {
        event.preventDefault();
        
        if (validateForm()) {
          // In a real application, you would submit the form data to a server here
          // For demonstration, we're just showing the success message
          form.style.display = 'none';
          successMessage.style.display = 'block';
          
          // You could also send the form data via email or to a server here
          console.log('Form submitted with the following data:');
          console.log('Name:', document.getElementById('name').value);
          console.log('Email:', document.getElementById('email').value);
          console.log('Subject:', document.getElementById('subject').value);
          console.log('Message:', document.getElementById('message').value);
        }
      });
      
      // Real-time validation
      const inputs = form.querySelectorAll('input, textarea');
      inputs.forEach(input => {
        input.addEventListener('blur', function() {
          validateField(this);
        });
        
        input.addEventListener('input', function() {
          const errorElement = document.getElementById(this.id + 'Error');
          if (errorElement) {
            errorElement.style.display = 'none';
            this.classList.remove('error');
          }
        });
      });
      
      // Reset form button functionality
      form.addEventListener('reset', function() {
        inputs.forEach(input => {
          const errorElement = document.getElementById(input.id + 'Error');
          if (errorElement) {
            errorElement.style.display = 'none';
            input.classList.remove('error');
          }
        });
      });
      
      function validateForm() {
        let isValid = true;
        
        inputs.forEach(input => {
          if (!validateField(input)) {
            isValid = false;
          }
        });
        
        return isValid;
      }
      
      function validateField(field) {
        const value = field.value.trim();
        const errorElement = document.getElementById(field.id + 'Error');
        
        // Reset error state
        if (errorElement) {
          errorElement.style.display = 'none';
          field.classList.remove('error');
        }
        
        // Required field validation
        if (field.hasAttribute('required') && !value) {
          showError(field, errorElement, 'This field is required');
          return false;
        }
        
        // Name validation
        if (field.id === 'name' && value) {
          const namePattern = /^[a-zA-Z\s]+$/;
          if (!namePattern.test(value)) {
            showError(field, errorElement, 'Please enter a valid name (letters and spaces only)');
            return false;
          }
        }
        
        // Email validation
        if (field.id === 'email' && value) {
          const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          if (!emailPattern.test(value)) {
            showError(field, errorElement, 'Please enter a valid email address');
            return false;
          }
        }
        
        // Message validation
        if (field.id === 'message' && value) {
          if (value.length < 10) {
            showError(field, errorElement, 'Please enter a more detailed message (at least 10 characters)');
            return false;
          }
        }
        
        return true;
      }
      
      function showError(field, errorElement, message) {
        if (errorElement) {
          errorElement.textContent = message;
          errorElement.style.display = 'block';
          field.classList.add('error');
          field.focus();
        }
      }
      
      // Add animation to elements when they come into view
      const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
      };
      
      const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.style.opacity = 1;
            entry.target.style.transform = 'translateY(0)';
          }
        });
      }, observerOptions);
      
      // Observe elements for animation
      const animatedElements = document.querySelectorAll('.info-card, .contact-form, .method-card');
      animatedElements.forEach(el => {
        el.style.opacity = 0;
        el.style.transform = 'translateY(20px)';
        el.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
        observer.observe(el);
      });
    });
  </script>
</body>
</html>