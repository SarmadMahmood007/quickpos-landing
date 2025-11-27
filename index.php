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
            <div class="col-lg-6">
                <h1 class="display-3 fw-bold">The Last POS System<br>You'll Ever Need</h1>
                <p class="lead my-4">Modern, fast, and built for businesses that want to grow without limits.</p>
                <a href="#contact" class="btn btn-lg btn-light px-5 py-3 shadow">Get Started for Free</a>
            </div>
            <div class="col-lg-6 text-lg-end mt-5 mt-lg-0">
                <img src="assets/img/hero-mockup.png" alt="QuickPOS Dashboard" class="img-fluid rounded shadow-lg"/>
            </div>
        </div>
    </div>
</section>

<!-- Features -->
<section id="features" class="py-5">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col">
                <h2 class="display-5 fw-bold">Powerful Features</h2>
                <p class="lead text-muted">Everything you need to run your business smoothly</p>
            </div>
        </div>
        <div class="row g-5">
            <div class="col-md-4">
                <div class="text-center">
                    <i class="fas fa-warehouse fa-3x text-primary mb-3"></i>
                    <h4>Inventory Management</h4>
                    <p class="text-muted">Track stock levels in real-time across all locations.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <i class="fas fa-chart-line fa-3x text-primary mb-3"></i>
                    <h4>Sales Analytics</h4>
                    <p class="text-muted">Beautiful dashboards and reports to make better decisions.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="text-center">
                    <i class="fas fa-plug fa-3x text-primary mb-3"></i>
                    <h4>Easy Integration</h4>
                    <p class="text-muted">Connect with your favorite payment gateways and tools.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing -->
<section id="pricing" class="py-5 bg-light">
    <div class="container">
        <div class="row text-center mb-5">
            <div class="col">
                <h2 class="display-5 fw-bold">Simple, Transparent Pricing</h2>
                <p class="lead text-muted">Choose the plan that fits your business</p>
            </div>
        </div>
        <div class="row g-4">
            <!-- Basic -->
            <div class="col-lg-4">
                <div class="card h-100 shadow border-0">
                    <div class="card-body text-center p-5">
                        <h5 class="text-muted">Basic</h5>
                        <h2 class="my-3">$29<span class="text-muted fs-5">/month</span></h2>
                        <ul class="list-unstyled my-4">
                            <li class="py-2">✓ 1 Store</li>
                            <li class="py-2">✓ Basic Analytics</li>
                            <li class="py-2 text-muted">✗ Multi-location</li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary w-100">Choose Basic</a>
                    </div>
                </div>
            </div>
            <!-- Pro -->
            <div class="col-lg-4">
                <div class="card h-100 shadow border-0 border-primary border-3 position-relative">
                    <div class="badge bg-primary text-white position-absolute top-0 start-50 translate-middle-x">Most Popular</div>
                    <div class="card-body text-center p-5">
                        <h5 class="text-muted">Pro</h5>
                        <h2 class="my-3">$79<span class="text-muted fs-5">/month</span></h2>
                        <ul class="list-unstyled my-4">
                            <li class="py-2">✓ Unlimited Stores</li>
                            <li class="py-2">✓ Advanced Analytics</li>
                            <li class="py-2">✓ Priority Support</li>
                        </ul>
                        <a href="#" class="btn btn-primary w-100">Choose Pro</a>
                    </div>
                </div>
            </div>
            <!-- Enterprise -->
            <div class="col-lg-4">
                <div class="card h-100 shadow border-0">
                    <div class="card-body text-center p-5">
                        <h5 class="text-muted">Enterprise</h5>
                        <h2 class="my-3">Custom</h2>
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
                <form action="contact.php" method="POST" class="shadow p-5 rounded bg-white">
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
