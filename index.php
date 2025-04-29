<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NidusCart - Coming Soon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #F86120;
            --secondary-color: #F86120;
            --accent-color: #f59e0b;
            --text-primary: #1f2937;
            --text-secondary: #4b5563;
            --background-light: #f3f4f6;
        }

        .bg-orange {
            background-color:rgb(248, 161, 121);
        }

        .text-orange{
            color: #F86120;
        }

        body {
            background: var(--background-light);
            color: var(--text-primary);
            font-family: 'Inter', system-ui, sans-serif;
            overflow-x: hidden;
        }

        .navbar {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-weight: 700;
            color: var(--primary-color);
        }

        .nav-link {
            font-weight: 500;
            color: var(--text-secondary);
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: var(--primary-color);
        }

        .hero-section {
            background: linear-gradient(135deg, rgba(255,255,255,0.9), rgba(248,97,32,0.2));
            padding: 120px 0 80px;
            position: relative;
            overflow: hidden;
        }

        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="50" cy="50" r="40" fill="none" stroke="rgba(255,255,255,0.1)" stroke-width="0.5"/></svg>') repeat;
            opacity: 0.4;
        }

        .countdown-timer {
            font-size: 2.5rem;
            font-weight: 700;
            color: #F86120;
        }

        .countdown-box {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(10px);
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .countdown-box:hover {
            transform: translateY(-5px);
        }

        .feature-card {
            background: white;
            border-radius: 16px;
            padding: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 12px rgba(0, 0, 0, 0.1);
        }

        .feature-icon {
            font-size: 2.5rem;
            color: var(--primary-color);
            margin-bottom: 1rem;
        }

        .contact-card {
            background: white;
            border-radius: 24px;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
            overflow: hidden;
            transition: all 0.3s ease;
        }
        
        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
        }

        .form-control, .form-select {
            border: 2px solid #e5e7eb;
            border-radius: 8px;
            padding: 0.75rem 1rem;
            height: calc(2.25rem + 14px);
            transition: all 0.3s ease;
        }
        
        textarea.form-control {
            min-height: 120px;
        }

        .form-control:focus {
            border-color: var(--primary-color);
            box-shadow: 0 0 0 4px rgba(37, 99, 235, 0.1);
        }

        .btn-primary {
            background: var(--primary-color);
            border: none;
            padding: 0.75rem 2rem;
            font-weight: 600;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: var(--secondary-color);
            transform: translateY(-2px);
        }

        .social-link {
            color: var(--text-secondary);
            transition: all 0.3s ease;
        }

        .social-link:hover {
            color: var(--primary-color);
            transform: translateY(-3px);
        }

        @media (max-width: 768px) {
            .hero-section {
                padding: 80px 0 60px;
            }
            .countdown-timer {
                font-size: 2rem;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="src/image/niduscart-logo.png" alt="Niduscart Logo" style="height: 40px;"> 
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item ms-lg-3">
                        <a class="btn btn-primary" href="#contact">
                            <i class="bi bi-bell me-2"></i>Get Notified
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <section class="text-center hero-section">
            <div class="container">
                <div class="mb-4">
                    <i class="text-[#F86120] bi bi-shop display-1"></i>
                </div>
                <h1 class="mb-3 text-[#F86120] display-md-5 fw-bold">Bangladesh’s First AI-Integrated Multi-Vendor <br>E-commerce Platform Is Almost Here!</h1>
                <p class="mb-4 text-[#F86120] opacity-90 lead">Join NidusCart and be among the first to redefine online retail!</p>

                <div class="mb-5 countdown-timer d-none d-md-block" id="countdown">
                    <div class="gap-4 d-flex justify-content-center">
                        <div class="countdown-box">
                            <div id="days" class="mb-2">00</div>
                            <small class="text-[#F86120] opacity-75">Days</small>
                        </div>
                        <div class="countdown-box">
                            <div id="hours" class="mb-2">00</div>
                            <small class="text-[#F86120] opacity-75">Hours</small>
                        </div>
                        <div class="countdown-box">
                            <div id="minutes" class="mb-2">00</div>
                            <small class="text-[#F86120] opacity-75">Minutes</small>
                        </div>
                        <div class="countdown-box">
                            <div id="seconds" class="mb-2">00</div>
                            <small class="text-[#F86120] opacity-75">Seconds</small>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5" id="features">
            <div class="container">
                <h2 class="mb-5 text-center fw-bold">Why Sell on Niduscart?</h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="feature-card">
                            <i class="bi bi-robot feature-icon"></i>
                            <h3 class="mb-3 h5">AI-Powered Onboarding</h3>
                            <p class="mb-0 text-secondary">Automated verification with AI document scanning and facial recognition for quick vendor setup.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-card">
                            <i class="bi bi-bar-chart-line feature-icon"></i>
                            <h3 class="mb-3 h5">Smart Inventory</h3>
                            <p class="mb-0 text-secondary">AI-driven demand forecasting and automatic reordering to optimize your stock levels.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-card">
                            <i class="bi bi-tags feature-icon"></i>
                            <h3 class="mb-3 h5">Dynamic Pricing</h3>
                            <p class="mb-0 text-secondary">Real-time price adjustments based on demand, competition and inventory age.</p>
                        </div>
                    </div>
                </div>
                <div class="mt-4 row g-4">
                    <div class="col-md-4">
                        <div class="feature-card">
                            <i class="bi bi-box-seam feature-icon"></i>
                            <h3 class="mb-3 h5">AR Product Previews</h3>
                            <p class="mb-0 text-secondary">Immersive AR showcases for products with 3D models and 360° views.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-card">
                            <i class="bi bi-graph-up-arrow feature-icon"></i>
                            <h3 class="mb-3 h5">Advanced Analytics</h3>
                            <p class="mb-0 text-secondary">Real-time insights into sales, customer demographics and market trends.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-card">
                            <i class="bi bi-truck feature-icon"></i>
                            <h3 class="mb-3 h5">Smart Logistics</h3>
                            <p class="mb-0 text-secondary">AI-driven automation to optimize delivery routes and reduce shipping costs.</p>
                        </div>
                    </div>
                </div>

                <div class="mt-4 row g-4">
                    <div class="col-md-4">
                        <div class="feature-card">
                            <i class="bi bi-phone feature-icon"></i>
                            <h3 class="mb-3 h5">Global Reach</h3>
                            <p class="mb-0 text-secondary">Access millions of customers worldwide and grow your business with our marketplace platform.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-card">
                            <i class="bi bi-shield-check feature-icon"></i>
                            <h3 class="mb-3 h5">Secure Payments</h3>
                            <p class="mb-0 text-secondary">Get paid securely and on time with our integrated payment system and automated settlements.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-card">
                            <i class="bi bi-headset feature-icon"></i>
                            <h3 class="mb-3 h5">24/7 Support</h3>
                            <p class="mb-0 text-secondary">Get dedicated vendor support and access to our knowledge base to help you succeed.</p>
                        </div>
                    </div>
                </div>
                        
                    </div>
                </div>
            </div>
        </section>

        <section class="py-5 py-lg-6 bg-white position-relative overflow-hidden" id="contact">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="contact-card shadow-lg rounded-4 overflow-hidden">
                            <div class="row g-0">
                                <div class="p-5 text-light col-md-5 bg-gradient d-flex flex-column justify-content-center" style="background-color: rgb(130 130 130);">
                                    <h2 class="mb-4 display-6 fw-bold">Be the First to Know</h2>
                                    <p class="mb-4 fs-5">Join our exclusive early access list and unlock:</p>
                                    <ul class="mb-0 list-unstyled fs-6">
                                        <li class="mb-3"><i class="bi bi-robot me-2"></i>Exclusive AI-powered vendor tools</li>
                                        <li class="mb-3"><i class="bi bi-graph-up-arrow me-2"></i>Advanced analytics dashboard</li>
                                        <li class="mb-3"><i class="bi bi-percent me-2"></i>Special commission rates</li>
                                        <li class="mb-3"><i class="bi bi-stars me-2"></i>Featured placement on launch</li>
                                        <li class="mb-3"><i class="bi bi-headset me-2"></i>Dedicated account manager</li>
                                        <li class="mb-3"><i class="bi bi-lightning-charge me-2"></i>Early access to beta features</li>
                                        <li class="mb-3"><i class="bi bi-person-check me-2"></i>Priority support queue</li>
                                        <li class="mb-3"><i class="bi bi-file-earmark-text me-2"></i>Exclusive vendor resources</li>
                                        <li class="mb-3"><i class="bi bi-gift me-2"></i>Launch day bonuses</li>
                                        <li class="mb-3"><i class="bi bi-people me-2"></i>Invitation to vendor community</li>
                                    </ul>
                                </div>
                                <div class="p-5 col-md-7">
                                    <h3 class="mb-3 display-8 fw-bold">Preregister Your Business Today</h3>
                                    <form id="contactForm" class="needs-validation" novalidate>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');
    const businessType = document.getElementById('businessType');
    const otherBusinessTypeContainer = document.getElementById('otherBusinessTypeContainer');
    
    // Show/hide other business type field
    businessType.addEventListener('change', function() {
        otherBusinessTypeContainer.style.display = this.value === 'Other' ? 'block' : 'none';
        if (this.value === 'Other') {
            document.getElementById('otherBusinessType').setAttribute('required', 'required');
        } else {
            document.getElementById('otherBusinessType').removeAttribute('required');
        }
    });
    
    // Phone number validation
    const phoneInput = document.getElementById('phone');
    phoneInput.addEventListener('input', function() {
        const phoneRegex = /^[0-9+\-\s]+$/;
        if (!phoneRegex.test(this.value)) {
            this.setCustomValidity('Please enter a valid phone number');
        } else {
            this.setCustomValidity('');
        }
    });
    
    // Form submission
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        if (form.checkValidity()) {
            // Form is valid, proceed with submission
            alert('Form submitted successfully!');
            form.reset();
        } else {
            // Form is invalid, show validation errors
            e.stopPropagation();
        }
        form.classList.add('was-validated');
    }, false);
});
</script>
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="businessName" class="form-label">Business Name</label>
                                                    <input type="text" class="form-control" id="businessName" placeholder="Enter your business name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="businessType" class="form-label">Business Type</label>
                                                    <select class="form-select" id="businessType" required>
                                                        <option value="">Select business type</option>
                                                        <option value="Fashion">Fashion</option>
                                                        <option value="Electronics">Electronics</option>
                                                        <option value="Home & Garden">Home & Garden</option>
                                                        <option value="Beauty">Beauty</option>
                                                        <option value="Sports">Sports</option>
                                                        <option value="Grocery">Grocery</option>
                                                        <option value="Pharmacy">Pharmacy</option>
                                                        <option value="Books">Books</option>
                                                        <option value="Toys">Toys</option>
                                                        <option value="Jewelry">Jewelry</option>
                                                        <option value="Automotive">Automotive</option>
                                                        <option value="Furniture">Furniture</option>
                                                        <option value="Pet Supplies">Pet Supplies</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6" id="otherBusinessTypeContainer" style="display: none;">
                                                <div class="mb-3">
                                                    <label for="otherBusinessType" class="form-label">Specify Business Type</label>
                                                    <input type="text" class="form-control" id="otherBusinessType">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="name" class="form-label">Contact Person Name</label>
                                                    <input type="text" class="form-control" id="name" placeholder="Your full name" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="city" class="form-label">City</label>
                                                    <select class="form-select" id="city" required>
                                                        <option value="">Select your city</option>
                                                        <option value="Dhaka">Dhaka</option>
                                                        <option value="Chittagong">Chittagong</option>
                                                        <option value="Khulna">Khulna</option>
                                                        <option value="Rajshahi">Rajshahi</option>
                                                        <option value="Sylhet">Sylhet</option>
                                                        <option value="Barisal">Barisal</option>
                                                        <option value="Rangpur">Rangpur</option>
                                                        <option value="Mymensingh">Mymensingh</option>
                                                        <option value="Comilla">Comilla</option>
                                                        <option value="Narayanganj">Narayanganj</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="phone" class="form-label">Phone Number</label>
                                                    <input type="tel" class="form-control" id="phone" placeholder="Phone number" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="email" class="form-label">Email Address</label>
                                                    <input type="email" class="form-control" id="email" required>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-4">
                                                    <label for="message" class="form-label">Short Message (Optional)</label>
                                                    <textarea class="form-control" id="message" rows="3"></textarea>
                                                </div>
                                            </div>
                                        <button type="submit" class="btn btn-primary w-100 py-3 fs-6 fw-bold">
                                            <i class="bi bi-bell-fill me-2"></i>Notify Me When We Launch
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

        <footer class="py-4 bg-white border-top">
            <div class="container">
                <div class="row align-items-center">
                    <div class="mb-3 text-center col-md-4 text-md-start mb-md-0">
                        <a class="navbar-brand" href="#">
                            <img src="src/image/niduscart-logo.png" alt="Niduscart Logo" style="height: 40px;"> 
                        </a>
                    </div>
                    <div class="mb-3 text-center col-md-4 mb-md-0">
                        <div class="gap-3 d-flex justify-content-center">
                            <a href="https://www.facebook.com/niduslab/" target="_blank" class="social-link"><i class="bi bi-facebook fs-4"></i></a>
                            <a href="https://www.x.com/niduslab/" target="_blank" class="social-link"><i class="bi bi-twitter-x fs-4"></i></a>
                            <a href="https://www.instagram.com/niduslabusa/" target="_blank" class="social-link"><i class="bi bi-instagram fs-4"></i></a>
                            <a href="https://www.linkedin.com/company/niduslab-usa" target="_blank" class="social-link"><i class="bi bi-linkedin fs-4"></i></a>
                        </div>
                    </div>
                    <div class="text-center col-md-4 text-md-end">
                        <p class="mb-0 text-secondary">&copy; 2025 Niduscart. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
    <script>
        (function() {
            emailjs.init("YOUR_PUBLIC_KEY");
        })();

        // Set countdown date (30 days from now)
        const countDownDate = new Date().getTime() + (210 * 24 * 60 * 60 * 1000);

        function updateCountdown() {
            const now = new Date().getTime();
            const distance = countDownDate - now;

            const days = Math.floor(distance / (1000 * 60 * 60 * 24));
            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);

            document.getElementById('days').innerHTML = days.toString().padStart(2, '0');
            document.getElementById('hours').innerHTML = hours.toString().padStart(2, '0');
            document.getElementById('minutes').innerHTML = minutes.toString().padStart(2, '0');
            document.getElementById('seconds').innerHTML = seconds.toString().padStart(2, '0');

            if (distance < 0) {
                clearInterval(countdownInterval);
                document.getElementById('countdown').innerHTML = "<div class='h4'>Niduscart has launched!</div>";
            }
        }

        // Update countdown every second
        const countdownInterval = setInterval(updateCountdown, 1000);
        updateCountdown();
        
        // Handle business type dropdown change
        document.getElementById('businessType').addEventListener('change', function() {
            const otherContainer = document.getElementById('otherBusinessTypeContainer');
            if (this.value === 'Other') {
                otherContainer.style.display = 'block';
            } else {
                otherContainer.style.display = 'none';
            }
        });

        // Form submission handling
        document.getElementById('contactForm').addEventListener('submit', async (e) => {
            e.preventDefault();
            const submitBtn = e.target.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="bi bi-hourglass-split me-2"></i>Sending...';
            submitBtn.disabled = true;

            const businessType = document.getElementById('businessType').value === 'Other' 
                ? document.getElementById('otherBusinessType').value 
                : document.getElementById('businessType').value;
                
            const formData = {
                businessName: document.getElementById('businessName').value,
                businessType: businessType,
                name: document.getElementById('name').value,
                phone: document.getElementById('phone').value,
                email: document.getElementById('email').value,
                message: document.getElementById('message').value
            };

            try {
                const response = await fetch('send_email.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                    },
                    body: JSON.stringify(formData)
                });

                const result = await response.json();
                if (!result.success) {
                    throw new Error(result.message);
                }

                document.getElementById('contactForm').reset();
                submitBtn.classList.remove('btn-primary');
                submitBtn.classList.add('btn-success');
                submitBtn.innerHTML = '<i class="bi bi-check-circle me-2"></i>Message Sent!';

                setTimeout(() => {
                    submitBtn.classList.remove('btn-success');
                    submitBtn.classList.add('btn-primary');
                    submitBtn.innerHTML = originalBtnText;
                    submitBtn.disabled = false;
                }, 3000);
            } catch (error) {
                console.error('Error sending email:', error);
                submitBtn.classList.remove('btn-primary');
                submitBtn.classList.add('btn-danger');
                submitBtn.innerHTML = '<i class="bi bi-exclamation-circle me-2"></i>Failed to Send';

                setTimeout(() => {
                    submitBtn.classList.remove('btn-danger');
                    submitBtn.classList.add('btn-primary');
                    submitBtn.innerHTML = originalBtnText;
                    submitBtn.disabled = false;
                }, 3000);
            }
        });
    </script>
</body>
</html>