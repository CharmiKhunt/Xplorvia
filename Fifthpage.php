<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Adventure Activity Registration | Xplorvia</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --primary: #1e323a;
      --secondary: #405d75;
      --accent: #e76f51;
      --light: #ebf4fd;
      --dark: #355764;
      --success: #515d93;
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
      background:  #f0f8ff;
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
      display: flex;
      align-items: center;
    }
    
    .logo i {
      margin-right: 10px;
      font-size: 28px;
    }
    
    .container {
      width: 85%;
      max-width: 1000px;
      margin: 30px auto;
      background: white;
      border-radius: 20px;
      overflow: hidden;
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
    }
    
    .header {
      background: linear-gradient(to right, var(--primary), var(--dark));
      color: white;
      padding: 30px;
      text-align: center;
      position: relative;
      overflow: hidden;
    }
    
    .header:before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M0,0 L100,0 L100,100 Z" fill="rgba(255,255,255,0.1)"/></svg>');
      background-size: 100% 100%;
    }
    
    .header h1 {
      font-size: 2.5rem;
      margin-bottom: 10px;
      position: relative;
    }
    
    .header p {
      font-size: 1.1rem;
      opacity: 0.9;
      max-width: 600px;
      margin: 0 auto;
      position: relative;
    }
    
    .form-container {
      padding: 30px;
    }
    
    .form-section {
      margin-bottom: 30px;
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
      border: 1px solid #e0e0e0;
    }
    
    .section-header {
      background: linear-gradient(to right, var(--secondary), var(--primary));
      color: white;
      padding: 15px 20px;
      display: flex;
      align-items: center;
    }
    
    .section-header i {
      margin-right: 10px;
      font-size: 1.2rem;
    }
    
    .section-content {
      padding: 25px;
      background: white;
    }
    
    .form-group {
      margin-bottom: 20px;
      position: relative;
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
      min-height: 100px;
      resize: vertical;
    }
    
    .form-row {
      display: flex;
      flex-wrap: wrap;
      margin: 0 -10px;
    }
    
    .form-col {
      flex: 1;
      padding: 0 10px;
      min-width: 250px;
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
    
    .footer {
      text-align: center;
      padding: 30px;
      background: var(--primary);
      color: white;
      margin-top: 30px;
    }
    
    .footer a {
      color: var(--accent);
      text-decoration: none;
    }
    
    .footer a:hover {
      text-decoration: underline;
    }
    
    .progress-bar {
      display: flex;
      justify-content: space-between;
      margin: 30px 0;
      position: relative;
    }
    
    .progress-step {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      background: #e1e5eb;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      color: #7a7a7a;
      position: relative;
      z-index: 2;
    }
    
    .progress-step.active {
      background: var(--secondary);
      color: white;
    }
    
    .progress-step.completed {
      background: var(--success);
      color: white;
    }
    
    .progress-bar:before {
      content: '';
      position: absolute;
      top: 50%;
      left: 0;
      right: 0;
      height: 4px;
      background: #e1e5eb;
      transform: translateY(-50%);
      z-index: 1;
    }
    
    .progress-bar .progress {
      position: absolute;
      top: 50%;
      left: 0;
      height: 4px;
      background: var(--secondary);
      transform: translateY(-50%);
      z-index: 1;
      transition: width 0.5s;
      width: 0%;
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
      
      .container {
        width: 95%;
      }
      
      .form-col {
        flex: 100%;
      }
    }
    
    .adventure-icon {
      font-size: 1.5rem;
      margin-right: 15px;
      color: var(--accent);
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
<form action="FifthPagetext.php"  method="post">
  <div class="container">
    <div class="header">
      <h1><i class="fas fa-mountain"></i> Adventure Registration</h1>
      <p>Begin your journey of a lifetime. Fill out the form below to reserve your spot on an unforgettable adventure!</p>
    </div>
    
    <div class="progress-bar">
      <div class="progress-step completed">1</div>
      <div class="progress-step completed">2</div>
      <div class="progress-step active">3</div>
      <div class="progress-step">4</div>
      <div class="progress"></div>
    </div>

    <div class="form-container">
      <div class="success-message" id="successMessage">
        <i class="fas fa-check-circle" style="font-size: 3rem; margin-bottom: 15px;"></i>
        <h2>Registration Successful!</h2>
        <p>Thank you for registering for your adventure. We've sent a confirmation email with all the details.</p>
      </div>
      
      <form id="adventureForm">
        <div class="form-section">
          <div class="section-header">
            <i class="fas fa-user"></i>
            <h3>Personal Details</h3>
          </div>
          <div class="section-content">
            <div class="form-row">
              <div class="form-col">
                <div class="form-group">
                  <label for="fullname"><i class="fas fa-signature"></i> Full Name</label>
                  <input type="text" id="fullname" name="fullname" class="form-control" placeholder="Enter your full name" required>
                  <div class="error-message" id="nameError">Please enter your full name</div>
                </div>
              </div>
              <div class="form-col">
                <div class="form-group">
                  <label for="email"><i class="fas fa-envelope"></i> Email</label>
                  <input type="email" id="email" name="email" class="form-control" placeholder="your.email@example.com" required>
                  <div class="error-message" id="emailError">Please enter a valid email address</div>
                </div>
              </div>
            </div>
            
            <div class="form-row">
              <div class="form-col">
                <div class="form-group">
                  <label for="phone"><i class="fas fa-phone"></i> Phone Number</label>
                  <input type="tel" id="phone" name="phone" class="form-control" placeholder="+91 12345 67890" required>
                  <div class="error-message" id="phoneError">Please enter a valid 10-digit phone number</div>
                </div>
              </div>
              <div class="form-col">
                <div class="form-group">
                  <label for="age"><i class="fas fa-birthday-cake"></i> Age</label>
                  <input type="number" id="age" name="age" class="form-control" placeholder="18" min="12" max="65" required>
                  <div class="error-message" id="ageError">Age must be between 12 and 65</div>
                </div>
              </div>
            </div>
            
            <div class="form-group">
              <label for="gender"><i class="fas fa-venus-mars"></i> Gender</label>
              <select id="gender" name="gender" class="form-control" required>
                <option value="">-- Select Gender --</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
                <option value="prefer-not-to-say">Prefer not to say</option>
              </select>
              <div class="error-message" id="genderError">Please select your gender</div>
            </div>
          </div>
        </div>
        
        <div class="form-section">
          <div class="section-header">
            <i class="fas fa-mountain"></i>
            <h3>Adventure Details</h3>
          </div>
          <div class="section-content">
            <div class="form-row">
              <div class="form-col">
                <div class="form-group">
                  <label for="activity"><i class="fas fa-hiking"></i> Choose Activity</label>
                  <select id="activity" name="activity" class="form-control" required>
                    <option value="">-- Choose Activity --</option>
                    <option value="Trekking">Trekking</option>
                    <option value="Rafting">Rafting</option>
                    <option value="Paragliding">Paragliding</option>
                    <option value="Ziplining">Ziplining</option>
                    <option value="Camping">Camping</option>
                    <option value="Scuba">Scuba Diving</option>
                  </select>
                  <div class="error-message" id="activityError">Please select an activity</div>
                </div>
              </div>
              <div class="form-col">
                <div class="form-group">
                  <label for="destination"><i class="fas fa-map-marker-alt"></i> Destination</label>
                  <select id="destination" name="destination" class="form-control" required>
                    <option value="">-- Choose Destination --</option>
                    <option value="Manali">Manali</option>
                    <option value="Rishikesh">Rishikesh</option>
                    <option value="Kashmir">Kashmir</option>
                    <option value="Sikkim">Sikkim</option>
                  </select>
                  <div class="error-message" id="destinationError">Please select a destination</div>
                </div>
              </div>
            </div>
            
            <div class="form-row">
              <div class="form-col">
                <div class="form-group">
                  <label for="date"><i class="fas fa-calendar-alt"></i> Preferred Date</label>
                  <input type="date" id="date" name="date" class="form-control" required>
                  <div class="error-message" id="dateError">Please select a date</div>
                </div>
              </div>
              <div class="form-col">
                <div class="form-group">
                  <label for="participants"><i class="fas fa-users"></i> Number of Participants</label>
                  <input type="number" id="participants" name="participants" class="form-control" min="1" max="10" value="1" required>
                  <div class="error-message" id="participantsError">Please enter number of participants</div>
                </div>
              </div>
            </div>
            
            <div class="form-group">
              <label for="health"><i class="fas fa-heartbeat"></i> Health Concerns</label>
              <textarea id="health" name="health" class="form-control" placeholder="Mention any medical conditions, allergies, or health concerns we should know about..."></textarea>
            </div>
          </div>
        </div>
        
        <div class="form-section">
          <div class="section-header">
            <i class="fas fa-credit-card"></i>
            <h3>Payment Details</h3>
          </div>
          <div class="section-content">
            <div class="form-group">
              <label for="payment_method"><i class="fas fa-money-check-alt"></i> Payment Method</label>
              <select id="payment_method" name="payment_method" class="form-control" required>
                <option value="">-- Select Payment Method --</option>
                <option value="UPI">UPI</option>
                <option value="Card">Credit/Debit Card</option>
                <option value="NetBanking">Net Banking</option>
              </select>
              <div class="error-message" id="paymentMethodError">Please select a payment method</div>
            </div>
            
            <div class="form-group" id="upiField">
              <label for="upi_id"><i class="fas fa-mobile-alt"></i> UPI ID</label>
              <input type="text" id="upi_id" name="upi_id" class="form-control" placeholder="name@upi">
              <div class="error-message" id="upiError">Please enter a valid UPI ID</div>
            </div>
            
            <div id="cardFields" style="display: none;">
              <div class="form-row">
                <div class="form-col">
                  <div class="form-group">
                    <label for="card_number"><i class="fas fa-credit-card"></i> Card Number</label>
                    <input type="text" id="card_number" name="card_number" class="form-control" placeholder="1234 5678 9012 3456">
                    <div class="error-message" id="cardError">Please enter a valid card number</div>
                  </div>
                </div>
                <div class="form-col">
                  <div class="form-group">
                    <label for="card_cvv"><i class="fas fa-lock"></i> CVV</label>
                    <input type="text" id="card_cvv" name="card_cvv" class="form-control" placeholder="123" maxlength="3">
                    <div class="error-message" id="cvvError">Please enter a valid CVV</div>
                  </div>
                </div>
              </div>
              
              <div class="form-row">
                <div class="form-col">
                  <div class="form-group">
                    <label for="card_expiry"><i class="fas fa-calendar"></i> Expiry Date</label>
                    <input type="month" id="card_expiry" name="card_expiry" class="form-control">
                    <div class="error-message" id="expiryError">Please enter a valid expiry date</div>
                  </div>
                </div>
                <div class="form-col">
                  <div class="form-group">
                    <label for="card_name"><i class="fas fa-signature"></i> Name on Card</label>
                    <input type="text" id="card_name" name="card_name" class="form-control" placeholder="John Doe">
                    <div class="error-message" id="cardNameError">Please enter the name on card</div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="form-row">
              <div class="form-col">
                <div class="form-group">
                  <label for="amount"><i class="fas fa-rupee-sign"></i> Amount (INR)</label>
                  <input type="number" id="amount" name="amount" class="form-control" placeholder="5000" required>
                  <div class="error-message" id="amountError">Please enter a valid amount</div>
                </div>
              </div>
              <div class="form-col">
                <div class="form-group">
                  <label for="transaction_id"><i class="fas fa-receipt"></i> Transaction ID</label>
                  <input type="text" id="transaction_id" name="transaction_id" class="form-control" placeholder="TXN123456789">
                  <div class="error-message" id="transactionError">Please enter a transaction ID</div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="form-section">
          <div class="section-header">
            <i class="fas fa-file-signature"></i>
            <h3>Consent & Agreement</h3>
          </div>
          <div class="section-content">
            <div class="form-group">
              <div style="display: flex; align-items: flex-start;">
                <input type="checkbox" id="terms" name="terms" style="margin: 5px 10px 0 0;" required>
                <label for="terms" style="font-weight: normal;">I agree to the <a href="EighthPage.html" target="_blank">terms and conditions</a> and understand the risks involved in adventure activities. I confirm that all information provided is accurate.</label>
              </div>
              <div class="error-message" id="termsError">You must agree to the terms and conditions</div>
            </div>
            
            <div class="form-group">
              <div style="display: flex; align-items: flex-start;">
                <input type="checkbox" id="newsletter" name="newsletter" style="margin: 5px 10px 0 0;">
                <label for="newsletter" style="font-weight: normal;">I would like to receive newsletters and updates about upcoming adventures and promotions.</label>
              </div>
            </div>
          </div>
        </div>
        
        <div class="btn-center">
          <button type="submit" class="btn"><i class="fas fa-paper-plane"></i> Submit Registration</button>
        </div>
      
    </div>
  </div>
  </form>
  
  <div class="footer">
    <p>📧 info@xplorvia.com | ☎ +91 98765 43210</p>
    <p>© 2025 xplorvia. All rights reserved. | <a href="EighthPage.html">Privacy Policy</a> | </p>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const form = document.getElementById('adventureForm');
      const successMessage = document.getElementById('successMessage');
      const progressBar = document.querySelector('.progress');
      const paymentMethod = document.getElementById('payment_method');
      const upiField = document.getElementById('upiField');
      const cardFields = document.getElementById('cardFields');
      
      // Update progress bar
      progressBar.style.width = '60%';
      
      // Handle payment method selection
      paymentMethod.addEventListener('change', function() {
        if (this.value === 'UPI') {
          upiField.style.display = 'block';
          cardFields.style.display = 'none';
        } else if (this.value === 'Card') {
          upiField.style.display = 'none';
          cardFields.style.display = 'block';
        } else {
          upiField.style.display = 'none';
          cardFields.style.display = 'none';
        }
      });
      
      // Form validation and submission
      form.addEventListener('submit', function(event) {
        event.preventDefault();
        
        if (validateForm()) {
          // In a real application, you would submit the form data to a server here
          // For demonstration, we're just showing the success message
          form.style.display = 'none';
          successMessage.style.display = 'block';
          progressBar.style.width = '100%';
          document.querySelectorAll('.progress-step').forEach(step => {
            step.classList.add('completed');
          });
        }
      });
      
      // Real-time validation
      const inputs = form.querySelectorAll('input, select');
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
        
        // Email validation
        if (field.type === 'email' && value) {
          const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
          if (!emailPattern.test(value)) {
            showError(field, errorElement, 'Please enter a valid email address');
            return false;
          }
        }
        
        // Phone validation
        if (field.id === 'phone' && value) {
          const phonePattern = /^[6-9]\d{9}$/;
          if (!phonePattern.test(value)) {
            showError(field, errorElement, 'Please enter a valid 10-digit phone number starting with 6-9');
            return false;
          }
        }
        
        // Age validation
        if (field.id === 'age' && value) {
          const age = parseInt(value, 10);
          if (isNaN(age) || age < 12 || age > 65) {
            showError(field, errorElement, 'Age must be between 12 and 65 years');
            return false;
          }
        }
        
        // Amount validation
        if (field.id === 'amount' && value) {
          const amount = parseFloat(value);
          if (isNaN(amount) || amount <= 0) {
            showError(field, errorElement, 'Amount must be greater than 0');
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
      
      // Set minimum date to today
      const today = new Date().toISOString().split('T')[0];
      document.getElementById('date').setAttribute('min', today);
    });
  </script>
  
</body>
</html>