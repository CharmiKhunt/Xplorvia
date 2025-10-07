<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Share Your Adventure Experience - Xplorvia</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
      --star-active: #FFD700;
      --star-inactive: #DDD;
    }
    
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }
    
    body {
      background: #f0f8ff;
      background-attachment: fixed;
      color: #333;
      line-height: 1.6;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
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
      background: url('https://images.unsplash.com/photo-1501555088652-021faa106b9b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1500&q=80') no-repeat center center;
      background-size: cover;
      height: 300px;
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
      font-size: 2.8rem;
      margin-bottom: 15px;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }
    
    .hero p {
      font-size: 1.2rem;
      margin-bottom: 20px;
    }
    
    .container {
      max-width: 800px;
      margin: 40px auto;
      padding: 0 20px;
      flex: 1;
    }
    
    .feedback-form {
      background: white;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
      margin-bottom: 40px;
    }
    
    .form-title {
      color: var(--primary);
      margin-bottom: 25px;
      text-align: center;
      font-size: 3rem;
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
    
    .rating-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      margin: 20px 0;
    }
    
    .rating-title {
      font-weight: 600;
      margin-bottom: 10px;
      color: var(--dark);
    }
    
    .star-rating {
      display: flex;
      flex-direction: row-reverse;
      justify-content: center;
    }
    
    .star-rating input {
      display: none;
    }
    
    .star-rating label {
      cursor: pointer;
      width: 40px;
      height: 40px;
      margin: 0 5px;
      background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3e%3cpath d='M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z' fill='%23ddd'/%3e%3c/svg%3e");
      background-repeat: no-repeat;
      background-position: center;
      background-size: 40px;
      transition: all 0.2s;
    }
    
    .star-rating input:checked ~ label,
    .star-rating label:hover,
    .star-rating label:hover ~ label {
      background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' viewBox='0 0 24 24'%3e%3cpath d='M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21z' fill='%23FFD700'/%3e%3c/svg%3e");
    }
    
    .rating-labels {
      display: flex;
      justify-content: space-between;
      width: 100%;
      max-width: 400px;
      margin-top: 10px;
      font-size: 12px;
      color: #777;
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
    }
    
    .btn:hover {
      transform: translateY(-3px);
      box-shadow: 0 7px 20px rgba(42, 157, 143, 0.6);
      background: #238f83;
    }
    
    .btn-center {
      text-align: center;
      margin-top: 20px;
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
    
    
    
    .footer {
      background: var(--primary);
      color: white;
      text-align: center;
      padding: 30px 0;
      margin-top: auto;
    }
    
    .footer a {
      color: var(--accent);
      text-decoration: none;
    }
    
    .footer a:hover {
      text-decoration: underline;
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
        font-size: 2rem;
      }
      
      .container {
        width: 95%;
      }
    }
    
    .character-count {
      text-align: right;
      font-size: 14px;
      color: #777;
      margin-top: 5px;
    }
    
    .confetti {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      z-index: 1000;
      display: none;
    }
    
    .confetti-piece {
      position: absolute;
      width: 10px;
      height: 10px;
      background: var(--accent);
      opacity: 0;
    }
    
    @keyframes confettiFall {
      0% {
        opacity: 1;
        transform: translateY(-100px) rotate(0deg);
      }
      100% {
        opacity: 0;
        transform: translateY(100vh) rotate(720deg);
      }
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
      <h1>Share Your Adventure Experience</h1>
      <p>Your feedback helps us create better adventures for everyone</p>
    </div>
  </div>

  <div class="container">
    <div class="feedback-form">
      <h2 class="form-title"><i class="fas fa-comment-dots"></i> Tell Us About Your Adventure</h2>
      
      <div class="success-message" id="successMessage">
        <i class="fas fa-check-circle" style="font-size: 3rem; margin-bottom: 15px;"></i>
        <h2>Thank You for Your Feedback!</h2>
        <p>We appreciate you taking the time to share your experience with us.</p>
      </div>
      
      <form id="feedbackForm">
        <div class="form-group">
          <label for="name"><i class="fas fa-user"></i> Your Name</label>
          <input type="text" id="name" name="name" class="form-control" placeholder="Enter your full name" required>
          <div class="error-message" id="nameError">Please enter a valid name (letters and spaces only)</div>
        </div>
        
        <div class="form-group">
          <label for="email"><i class="fas fa-envelope"></i> Email Address</label>
          <input type="email" id="email" name="email" class="form-control" placeholder="your.email@example.com">
          <div class="error-message" id="emailError">Please enter a valid email address</div>
        </div>
        
        <div class="form-group">
          <label for="activity"><i class="fas fa-hiking"></i> Adventure Activity</label>
          <select id="activity" name="activity" class="form-control" required>
            <option value="">-- Select Activity --</option>
            <option value="Trekking">Trekking</option>
            <option value="Rafting">Rafting</option>
            <option value="Zip Lining">Zip Lining</option>
            <option value="Paragliding">Paragliding</option>
            <option value="Camping">Camping</option>
            <option value="Scuba Diving">Scuba Diving</option>
          </select>
          <div class="error-message" id="activityError">Please select an activity</div>
        </div>
        
        <div class="rating-container">
          <div class="rating-title">How would you rate your experience?</div>
          <div class="star-rating">
            <input type="radio" id="star5" name="rating" value="5">
            <label for="star5" title="Excellent"></label>
            <input type="radio" id="star4" name="rating" value="4">
            <label for="star4" title="Good"></label>
            <input type="radio" id="star3" name="rating" value="3">
            <label for="star3" title="Average"></label>
            <input type="radio" id="star2" name="rating" value="2">
            <label for="star2" title="Poor"></label>
            <input type="radio" id="star1" name="rating" value="1">
            <label for="star1" title="Terrible"></label>
          </div>
          <div class="rating-labels">
            <span>Terrible</span>
            <span>Excellent</span>
          </div>
          <div class="error-message" id="ratingError">Please provide a rating</div>
        </div>
        
        <div class="form-group">
          <label for="feedback"><i class="fas fa-edit"></i> Your Feedback</label>
          <textarea id="feedback" name="feedback" class="form-control" placeholder="Tell us about your experience, what you enjoyed, and how we can improve..." required></textarea>
          <div class="character-count"><span id="charCount">0</span>/500 characters</div>
          <div class="error-message" id="feedbackError">Please enter at least 10 characters in your feedback</div>
        </div>
        
        <div class="form-group">
          <label><i class="fas fa-camera"></i> Share a Photo (Optional)</label>
          <div style="border: 2px dashed #e1e5eb; border-radius: 10px; padding: 20px; text-align: center; cursor: pointer;" id="uploadArea">
            <i class="fas fa-cloud-upload-alt" style="font-size: 2rem; color: #ccc; margin-bottom: 10px;"></i>
            <p>Click or drag to upload a photo from your adventure</p>
            <input type="file" id="photo" name="photo" accept="image/*" style="display: none;">
          </div>
          <div id="previewContainer" style="display: none; margin-top: 15px; text-align: center;">
            <img id="preview" style="max-width: 100%; max-height: 200px; border-radius: 8px;">
            <button type="button" id="removeImage" style="background: var(--danger); color: white; border: none; padding: 5px 10px; border-radius: 5px; margin-top: 10px; cursor: pointer;">Remove Image</button>
          </div>
        </div>
        
        <div class="btn-center">
          <button type="submit" class="btn"><i class="fas fa-paper-plane"></i> Submit Feedback</button>
        </div>
      </form>
    </div>
    
  
  </div>

  <div class="footer">
    <p>Contact us: info@xplorvia.com | +91 98765 43210</p>
    <p>© 2025 Xplorvia Adventure. All rights reserved.</p>
  </div>

  <div class="confetti" id="confetti"></div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const form = document.getElementById('feedbackForm');
      const successMessage = document.getElementById('successMessage');
      const charCount = document.getElementById('charCount');
      const feedbackText = document.getElementById('feedback');
      const uploadArea = document.getElementById('uploadArea');
      const photoInput = document.getElementById('photo');
      const previewContainer = document.getElementById('previewContainer');
      const preview = document.getElementById('preview');
      const removeImageBtn = document.getElementById('removeImage');
      const confettiContainer = document.getElementById('confetti');
      
      // Character count for feedback textarea
      feedbackText.addEventListener('input', function() {
        const length = this.value.length;
        charCount.textContent = length;
        
        if (length > 500) {
          charCount.style.color = 'var(--danger)';
        } else {
          charCount.style.color = '#777';
        }
      });
      
      // Image upload functionality
      uploadArea.addEventListener('click', function() {
        photoInput.click();
      });
      
      uploadArea.addEventListener('dragover', function(e) {
        e.preventDefault();
        this.style.borderColor = 'var(--secondary)';
        this.style.backgroundColor = 'rgba(42, 157, 143, 0.1)';
      });
      
      uploadArea.addEventListener('dragleave', function() {
        this.style.borderColor = '#e1e5eb';
        this.style.backgroundColor = 'transparent';
      });
      
      uploadArea.addEventListener('drop', function(e) {
        e.preventDefault();
        this.style.borderColor = '#e1e5eb';
        this.style.backgroundColor = 'transparent';
        
        if (e.dataTransfer.files.length) {
          photoInput.files = e.dataTransfer.files;
          handleImageUpload(e.dataTransfer.files[0]);
        }
      });
      
      photoInput.addEventListener('change', function() {
        if (this.files.length) {
          handleImageUpload(this.files[0]);
        }
      });
      
      function handleImageUpload(file) {
        if (!file.type.match('image.*')) {
          alert('Please select an image file');
          return;
        }
        
        const reader = new FileReader();
        reader.onload = function(e) {
          preview.src = e.target.result;
          previewContainer.style.display = 'block';
          uploadArea.style.display = 'none';
        };
        reader.readAsDataURL(file);
      }
      
      removeImageBtn.addEventListener('click', function() {
        photoInput.value = '';
        previewContainer.style.display = 'none';
        uploadArea.style.display = 'block';
      });
      
      // Form validation and submission
      form.addEventListener('submit', function(event) {
        event.preventDefault();
        
        if (validateForm()) {
          // In a real application, you would submit the form data to a server here
          // For demonstration, we're just showing the success message
          form.style.display = 'none';
          successMessage.style.display = 'block';
          createConfetti();
        }
      });
      
      // Real-time validation
      const inputs = form.querySelectorAll('input, select, textarea');
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
      
      function validateForm() {
        let isValid = true;
        
        // Check all fields
        inputs.forEach(input => {
          if (!validateField(input)) {
            isValid = false;
          }
        });
        
        // Check rating
        const rating = document.querySelector('input[name="rating"]:checked');
        if (!rating) {
          document.getElementById('ratingError').style.display = 'block';
          isValid = false;
        }
        
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
        
        // Feedback validation
        if (field.id === 'feedback' && value) {
          if (value.length < 10) {
            showError(field, errorElement, 'Please enter at least 10 characters');
            return false;
          }
          
          if (value.length > 500) {
            showError(field, errorElement, 'Please limit your feedback to 500 characters');
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
      
      // Confetti animation
      function createConfetti() {
        confettiContainer.style.display = 'block';
        const colors = ['#e76f51', '#2a9d8f', '#e9c46a', '#264653', '#1e323a'];
        
        for (let i = 0; i < 100; i++) {
          const piece = document.createElement('div');
          piece.className = 'confetti-piece';
          piece.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
          piece.style.left = Math.random() * 100 + 'vw';
          piece.style.animation = `confettiFall ${Math.random() * 3 + 2}s linear forwards`;
          piece.style.animationDelay = Math.random() * 2 + 's';
          confettiContainer.appendChild(piece);
        }
        
        setTimeout(() => {
          confettiContainer.style.display = 'none';
          confettiContainer.innerHTML = '';
        }, 5000);
      }
    });
  </script>
</body>
</html>