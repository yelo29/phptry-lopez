<?php
// Pure PHP version of home.php
// Much harder to read and maintain!

echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>PHP Project - Modern Web Development Environment</title>';
echo '<!-- Bootstrap 5 CSS -->';
echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">';
echo '<!-- Font Awesome -->';
echo '<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">';
echo '<!-- Custom CSS -->';
echo '<link href="assets/css/custom.css" rel="stylesheet">';
echo '</head>';
echo '<body>';

// Navigation
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">';
echo '<div class="container">';
echo '<a class="navbar-brand" href="/"><i class="fas fa-code"></i> PHP Project</a>';
echo '<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">';
echo '<span class="navbar-toggler-icon"></span>';
echo '</button>';
echo '<div class="collapse navbar-collapse" id="navbarNav">';
echo '<ul class="navbar-nav ms-auto">';
echo '<li class="nav-item">';
echo '<a class="nav-link active" href="/"><i class="fas fa-home"></i> Home</a>';
echo '</li>';
echo '<li class="nav-item">';
echo '<a class="nav-link" href="/about"><i class="fas fa-info-circle"></i> About</a>';
echo '</li>';
echo '<li class="nav-item">';
echo '<a class="nav-link" href="/contact"><i class="fas fa-envelope"></i> Contact</a>';
echo '</li>';
echo '</ul>';
echo '</div>';
echo '</div>';
echo '</nav>';

// Main Content
echo '<div class="container mt-4" style="padding-bottom: 100px;">';
echo '<div class="row">';
echo '<div class="col-md-8">';

// Welcome Section
echo '<h1><i class="fas fa-rocket"></i> Welcome to PHP Project</h1>';
echo '<p class="lead">Your modern PHP development environment with Bootstrap 5</p>';

// AJAX Test Section
echo '<div class="card mt-4">';
echo '<div class="card-header">';
echo '<h5><i class="fas fa-sync"></i> AJAX Test</h5>';
echo '</div>';
echo '<div class="card-body">';
echo '<button id="ajaxBtn" class="btn btn-primary">';
echo '<i class="fas fa-paper-plane"></i> Test AJAX';
echo '</button>';
echo '<div id="ajaxResult" class="mt-3"></div>';
echo '</div>';
echo '</div>';

// Technology Stack
echo '<div class="card mt-4">';
echo '<div class="card-header">';
echo '<h5><i class="fas fa-layer-group"></i> Technology Stack</h5>';
echo '</div>';
echo '<div class="card-body">';
echo '<div class="row">';
echo '<div class="col-md-6">';
echo '<h6><i class="fab fa-php text-primary"></i> Backend</h6>';
echo '<p>PHP 8.2.12 with modern error handling and security features.</p>';
echo '<h6><i class="fas fa-database text-success"></i> Database</h6>';
echo '<p>MySQL with PDO for secure database operations.</p>';
echo '</div>';
echo '<div class="col-md-6">';
echo '<h6><i class="fab fa-bootstrap text-info"></i> Frontend</h6>';
echo '<p>Bootstrap 5.3.0 for responsive, mobile-first design.</p>';
echo '<h6><i class="fas fa-exchange-alt text-warning"></i> Communication</h6>';
echo '<p>AJAX with Fetch API for dynamic user experiences.</p>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';

echo '</div>';

// Sidebar
echo '<div class="col-md-4">';
echo '<div class="card">';
echo '<div class="card-header">';
echo '<h5><i class="fas fa-rocket"></i> Quick Start</h5>';
echo '</div>';
echo '<div class="card-body">';
echo '<h6><i class="fas fa-check-circle text-success"></i> Working Features</h6>';
echo '<ul class="list-unstyled">';
echo '<li><i class="fas fa-check text-success"></i> PHP Error Detection</li>';
echo '<li><i class="fas fa-check text-success"></i> Bootstrap 5 Interface</li>';
echo '<li><i class="fas fa-check text-success"></i> AJAX Functionality</li>';
echo '<li><i class="fas fa-check text-success"></i> Database Connection</li>';
echo '<li><i class="fas fa-check text-success"></i> Clean URLs</li>';
echo '</ul>';
echo '</div>';
echo '</div>';
echo '</div>';

echo '</div>';
echo '</div>';

// Footer
echo '<footer class="bg-dark text-white">';
echo '<div class="container text-center">';
echo '<p>&copy; 2026 PHP Project. Using PHP & Bootstrap 5</p>';
echo '</div>';
echo '</footer>';

echo '<!-- Bootstrap 5 JS -->';
echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>';
echo '<!-- Custom JS -->';
echo '<script src="assets/js/main.js"></script>';
echo '</body>';
echo '</html>';
?>
