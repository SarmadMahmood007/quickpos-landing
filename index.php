<?php // index.php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>QuickPOS - The Last POS System You'll Ever Need</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet"/>
    <link href="assets/css/style.css" rel="stylesheet"/>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm">
    <div class="container">
        <a class="navbar-brand fw-bold text-primary" href="#">QuickPOS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#features">Features</a></li>
                <li class="nav-item"><a class="nav-link" href="#pricing">Pricing</a></li>
                <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
                <li class="nav-item ms-3">
                    <a href="#" class="btn btn-primary text-white px-4">Sign Up</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero text-center text-white">
    <div class="container pt-5">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-12">
                <h1 class="display-3 fw-bold">The Last POS System<br>You'll Ever Need</h1>
                <p class="lead my-4">Modern, fast, and built for businesses that want to grow without limits.</p>
                <a href="#contact" class="btn btn-lg btn-light px-5 py-3 shadow">Get Started for Free</a>
            </div>
        </div>
    </div>
</section>

<!-- Features -->
<section id="features" class="py-5">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col">
                <h2 class="section-title">Powerful Features</h2>
                <p class="section-subtitle">Everything you need to run your business smoothly</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="feature-card">
                    <i class="fas fa-warehouse"></i>
                    <h4>Inventory Management</h4>
                    <p>Track stock levels in real-time across all locations.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="feature-card">
                    <i class="fas fa-chart-line"></i>
                    <h4>Sales Analytics</h4>
                    <p>Beautiful dashboards and reports to make better decisions.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="feature-card">
                    <i class="fas fa-plug"></i>
                    <h4>Easy Integration</h4>
                    <p>Connect with your favorite payment gateways and tools.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing -->
<section id="pricing" class="py-5">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col">
                <h2 class="section-title">Simple, Transparent Pricing</h2>
                <p class="section-subtitle">Choose the plan that fits your business</p>
            </div>
        </div>
        <div class="row g-4">
            <!-- Basic -->
            <div class="col-md-6 col-lg-4">
                <div class="card pricing-card h-100 shadow border-0">
                    <div class="card-body text-center">
                        <h5>Basic</h5>
                        <h2>$29<span class="text-muted fs-5">/month</span></h2>
                        <ul>
                            <li>✓ 1 Store</li>
                            <li>✓ Basic Analytics</li>
                            <li class="text-muted">✗ Multi-location</li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary w-100">Choose Basic</a>
                    </div>
                </div>
            </div>
            <!-- Pro -->
            <div class="col-md-6 col-lg-4">
                <div class="card pricing-card popular h-100 shadow border-0 position-relative">
                    <div class="badge bg-primary text-white position-absolute top-0 start-50 translate-middle-x">Most Popular</div>
                    <div class="card-body text-center">
                        <h5>Pro</h5>
                        <h2>$79<span class="text-muted fs-5">/month</span></h2>
                        <ul>
                            <li>✓ Unlimited Stores</li>
                            <li>✓ Advanced Analytics</li>
                            <li>✓ Priority Support</li>
                        </ul>
                        <a href="#" class="btn btn-primary w-100">Choose Pro</a>
                    </div>
                </div>
            </div>
            <!-- Enterprise -->
            <div class="col-md-6 col-lg-4">
                <div class="card pricing-card h-100 shadow border-0">
                    <div class="card-body text-center">
                        <h5>Enterprise</h5>
                        <h2>Custom</h2>
                        <p class="text-muted">Dedicated support & infrastructure</p>
                        <a href="#contact" class="btn btn-outline-primary w-100">Contact Sales</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h2 class="text-center mb-5 fw-bold">Get In Touch</h2>
                <form action="contact.php" method="POST" class="contact-form">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" required/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" required/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Message</label>
                        <textarea name="message" rows="5" class="form-control" required></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary px-5">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>&copy; 2025 QuickPOS. All rights reserved.</p>
            </div>
            <div class="col-md-6 text-md-end">
                <a href="#" class="text-white mx-2"><i class="fab fa-facebook"></i></a>
                <a href="#" class="text-white mx-2"><i class="fab fa-twitter"></i></a>
                <a href="#" class="text-white mx-2"><i class="fab fa-linkedin"></i></a>
            </div>
        </div>
    </div>
</footer>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
