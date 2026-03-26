<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project - Modern Web Development Environment</title>
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="assets/css/custom.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">
                <i class="fas fa-code"></i> PHP Project
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="/"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about"><i class="fas fa-info-circle"></i> About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact"><i class="fas fa-envelope"></i> Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <h1><i class="fas fa-rocket"></i> Welcome to PHP Project</h1>
                <p class="lead">Your modern PHP development environment with Bootstrap 5</p>
                
                <!-- AJAX Test Section -->
                <div class="card mt-4">
                    <div class="card-header">
                        <h5><i class="fas fa-sync"></i> AJAX Test</h5>
                    </div>
                    <div class="card-body">
                        <button id="ajaxBtn" class="btn btn-primary">
                            <i class="fas fa-paper-plane"></i> Test AJAX
                        </button>
                        <div id="ajaxResult" class="mt-3"></div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h5><i class="fas fa-info"></i> Technology Stack</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li><i class="fab fa-php text-primary"></i> PHP 8.2</li>
                            <li><i class="fas fa-database text-success"></i> MySQL</li>
                            <li><i class="fab fa-bootstrap text-info"></i> Bootstrap 5</li>
                            <li><i class="fab fa-font-awesome text-warning"></i> Font Awesome</li>
                            <li><i class="fas fa-exchange-alt text-danger"></i> AJAX</li>
                            <li><i class="fab fa-apache text-secondary"></i> Apache</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white mt-5 py-3">
        <div class="container text-center">
            <p>&copy; 2026 PHP Project. Using PHP & Bootstrap 5</p>
        </div>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/main.js"></script>
</body>
</html>
