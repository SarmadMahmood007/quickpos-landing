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


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
