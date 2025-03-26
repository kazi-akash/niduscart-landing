<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Niduscart - Coming Soon</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2563eb;
            --secondary-color: #1e40af;
            --accent-color: #f59e0b;
            --text-primary: #1f2937;
            --text-secondary: #4b5563;
            --background-light: #f3f4f6;
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
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
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
            color: white;
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
            border-radius: 20px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .form-control {
            border: 2px solid #e5e7eb;
            border-radius: 8px;
            padding: 0.75rem 1rem;
            transition: all 0.3s ease;
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
                <i class="bi bi-bag-heart-fill me-2"></i>Niduscart
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
                    <i class="text-white bi bi-shop display-1"></i>
                </div>
                <h1 class="mb-3 text-white display-4 fw-bold">The Future of Multi-Vendor <br>E-commerce is Here</h1>
                <p class="mb-4 text-white opacity-90 lead">Join thousands of vendors and grow your business with Niduscart Marketplace</p>

                <div class="mb-5 countdown-timer" id="countdown">
                    <div class="gap-4 d-flex justify-content-center">
                        <div class="countdown-box">
                            <div id="days" class="mb-2">00</div>
                            <small class="text-white opacity-75">Days</small>
                        </div>
                        <div class="countdown-box">
                            <div id="hours" class="mb-2">00</div>
                            <small class="text-white opacity-75">Hours</small>
                        </div>
                        <div class="countdown-box">
                            <div id="minutes" class="mb-2">00</div>
                            <small class="text-white opacity-75">Minutes</small>
                        </div>
                        <div class="countdown-box">
                            <div id="seconds" class="mb-2">00</div>
                            <small class="text-white opacity-75">Seconds</small>
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
                            <i class="bi bi-shop feature-icon"></i>
                            <h3 class="mb-3 h5">Easy Store Setup</h3>
                            <p class="mb-0 text-secondary">Launch your online store in minutes with our intuitive vendor dashboard and powerful management tools.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-card">
                            <i class="bi bi-graph-up feature-icon"></i>
                            <h3 class="mb-3 h5">Low Commission Rates</h3>
                            <p class="mb-0 text-secondary">Enjoy competitive commission rates and maximize your profits with our seller-friendly pricing.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-card">
                            <i class="bi bi-phone feature-icon"></i>
                            <h3 class="mb-3 h5">Global Reach</h3>
                            <p class="mb-0 text-secondary">Access millions of customers worldwide and grow your business with our marketplace platform.</p>
                        </div>
                    </div>
                </div>
                <div class="mt-4 row g-4">
                    <div class="col-md-4">
                        <div class="feature-card">
                            <i class="bi bi-shield-check feature-icon"></i>
                            <h3 class="mb-3 h5">Secure Payments</h3>
                            <p class="mb-0 text-secondary">Get paid securely and on time with our integrated payment system and automated settlements.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-card">
                            <i class="bi bi-truck feature-icon"></i>
                            <h3 class="mb-3 h5">Flexible Shipping</h3>
                            <p class="mb-0 text-secondary">Choose your preferred shipping methods and set your own delivery rates and policies.</p>
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
        </section>

        <section class="py-5 bg-white" id="contact">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="contact-card">
                            <div class="row g-0">
                                <div class="p-4 text-white col-md-5 bg-primary d-flex flex-column justify-content-center">
                                    <h2 class="mb-4 h3">Be the First to Know</h2>
                                    <p class="mb-4">Join our exclusive early access list and get:</p>
                                    <ul class="mb-0 list-unstyled">
                                        <li class="mb-3"><i class="bi bi-check2-circle me-2"></i>Early bird discounts</li>
                                        <li class="mb-3"><i class="bi bi-check2-circle me-2"></i>Premium features access</li>
                                        <li class="mb-3"><i class="bi bi-check2-circle me-2"></i>Priority support</li>
                                    </ul>
                                </div>
                                <div class="p-4 col-md-7">
                                    <h3 class="mb-4 h4">Get Early Access</h3>
                                    <form id="contactForm">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Full Name</label>
                                            <input type="text" class="form-control" id="name" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email Address</label>
                                            <input type="email" class="form-control" id="email" required>
                                        </div>
                                        <div class="mb-4">
                                            <label for="message" class="form-label">Your Message (Optional)</label>
                                            <textarea class="form-control" id="message" rows="3"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary w-100">
                                            <i class="bi bi-bell me-2"></i>Notify Me When We Launch
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
                            <i class="bi bi-bag-heart-fill me-2"></i>Niduscart
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
        const countDownDate = new Date().getTime() + (90 * 24 * 60 * 60 * 1000);

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

        // Form submission handling
        document.getElementById('contactForm').addEventListener('submit', async (e) => {
            e.preventDefault();
            const submitBtn = e.target.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="bi bi-hourglass-split me-2"></i>Sending...';
            submitBtn.disabled = true;

            const formData = {
                name: document.getElementById('name').value,
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