<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About - PHP Project</title>
    
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
                        <a class="nav-link" href="/"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/about"><i class="fas fa-info-circle"></i> About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact"><i class="fas fa-envelope"></i> Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4" style="padding-bottom: 100px;">
        <div class="row">
            <div class="col-md-8">
                <h1><i class="fas fa-info-circle"></i> About PHP Project</h1>
                <p class="lead">A modern, professional web development environment built with PHP and Bootstrap 5.</p>
                
                <!-- About Section -->
                <div class="card mt-4">
                    <div class="card-header">
                        <h5><i class="fas fa-rocket"></i> Project Overview</h5>
                    </div>
                    <div class="card-body">
                        <p>This project demonstrates a complete PHP development environment with modern web technologies. It serves as both a learning platform and a foundation for building robust web applications.</p>
                        
                        <h6 class="mt-3"><i class="fas fa-bullseye"></i> Key Features</h6>
                        <ul>
                            <li>Real-time PHP error detection in Windsurf</li>
                            <li>Responsive Bootstrap 5 interface</li>
                            <li>AJAX-powered dynamic content</li>
                            <li>MySQL database integration</li>
                            <li>Clean URLs with Apache mod_rewrite</li>
                            <li>Professional MVC architecture</li>
                        </ul>
                    </div>
                </div>

                <!-- Technology Stack -->
                <div class="card mt-4">
                    <div class="card-header">
                        <h5><i class="fas fa-layer-group"></i> Technology Stack</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h6><i class="fab fa-php text-primary"></i> Backend</h6>
                                <p>PHP 8.2.12 with modern error handling and security features.</p>
                                
                                <h6><i class="fas fa-database text-success"></i> Database</h6>
                                <p>MySQL with PDO for secure database operations.</p>
                            </div>
                            <div class="col-md-6">
                                <h6><i class="fab fa-bootstrap text-info"></i> Frontend</h6>
                                <p>Bootstrap 5.3.0 for responsive, mobile-first design.</p>
                                
                                <h6><i class="fas fa-exchange-alt text-warning"></i> Communication</h6>
                                <p>AJAX with Fetch API for dynamic user experiences.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Development Philosophy -->
                <div class="card mt-4">
                    <div class="card-header">
                        <h5><i class="fas fa-lightbulb"></i> Development Approach</h5>
                    </div>
                    <div class="card-body">
                        <p>This project follows modern web development best practices:</p>
                        <div class="row">
                            <div class="col-md-4 text-center">
                                <i class="fas fa-shield-alt fa-3x text-success mb-3"></i>
                                <h6>Security First</h6>
                                <p>PDO prepared statements and input validation protect against common vulnerabilities.</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <i class="fas fa-tachometer-alt fa-3x text-primary mb-3"></i>
                                <h6>Performance Optimized</h6>
                                <p>Efficient database queries and optimized asset delivery.</p>
                            </div>
                            <div class="col-md-4 text-center">
                                <i class="fas fa-mobile-alt fa-3x text-info mb-3"></i>
                                <h6>Mobile Ready</h6>
                                <p>Responsive design ensures great experience on all devices.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <!-- Project Info Card -->
                <div class="card">
                    <div class="card-header">
                        <h5><i class="fas fa-info"></i> Project Info</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li><i class="fas fa-code-branch"></i> <strong>Version:</strong> 1.0.0</li>
                            <li><i class="fas fa-calendar"></i> <strong>Created:</strong> March 2026</li>
                            <li><i class="fab fa-php"></i> <strong>PHP Version:</strong> 8.2.12</li>
                            <li><i class="fas fa-server"></i> <strong>Server:</strong> Apache 2.4</li>
                            <li><i class="fas fa-database"></i> <strong>Database:</strong> MySQL 8.0</li>
                        </ul>
                    </div>
                </div>

                <!-- Developer Info Card -->
                <div class="card mt-3">
                    <div class="card-header">
                        <h5><i class="fas fa-user"></i> Developer</h5>
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <img src="https://via.placeholder.com/100" alt="Developer Avatar" class="rounded-circle" style="width: 100px; height: 100px; object-fit: cover;">
                        </div>
                        <h6 class="text-center">[Your Name]</h6>
                        <p class="text-center text-muted">[Your Title/Role]</p>
                        <p class="text-center small">[Your Bio - Brief description of your background and expertise]</p>
                        
                        <hr>
                        
                        <div class="row text-center">
                            <div class="col-6">
                                <a href="[Your GitHub Profile]" class="btn btn-outline-primary btn-sm">
                                    <i class="fab fa-github"></i> GitHub
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="[Your LinkedIn Profile]" class="btn btn-outline-info btn-sm">
                                    <i class="fab fa-linkedin"></i> LinkedIn
                                </a>
                            </div>
                        </div>
                        
                        <div class="mt-3">
                            <h6><i class="fas fa-envelope"></i> Contact</h6>
                            <p class="small"><strong>Email:</strong> [your.email@example.com]</p>
                            <p class="small"><strong>Location:</strong> [Your City, Country]</p>
                            <p class="small"><strong>Available:</strong> [Freelance/Full-time status]</p>
                        </div>
                    </div>
                </div>

                <!-- Skills Card -->
                <div class="card mt-3">
                    <div class="card-header">
                        <h5><i class="fas fa-tools"></i> Skills & Expertise</h5>
                    </div>
                    <div class="card-body">
                        <h6><i class="fas fa-code"></i> Technical Skills</h6>
                        <div class="mb-3">
                            <span class="badge bg-primary me-1">PHP</span>
                            <span class="badge bg-success me-1">MySQL</span>
                            <span class="badge bg-info me-1">JavaScript</span>
                            <span class="badge bg-warning me-1">Bootstrap</span>
                            <span class="badge bg-secondary me-1">Apache</span>
                        </div>
                        
                        <h6><i class="fas fa-palette"></i> Design Skills</h6>
                        <div class="mb-3">
                            <span class="badge bg-outline-primary me-1">HTML5</span>
                            <span class="badge bg-outline-success me-1">CSS3</span>
                            <span class="badge bg-outline-info me-1">UI/UX</span>
                            <span class="badge bg-outline-warning me-1">Responsive Design</span>
                        </div>
                        
                        <h6><i class="fas fa-cogs"></i> Tools & Technologies</h6>
                        <ul class="small">
                            <li>Version Control (Git)</li>
                            <li>API Development (REST, SOAP)</li>
                            <li>Testing (PHPUnit, Jest)</li>
                            <li>Deployment (Docker, CI/CD)</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white">
        <div class="container text-center">
            <p>&copy; 2026 PHP Project. Using PHP & Bootstrap 5</p>
            <p class="small mb-0">
                <i class="fas fa-code"></i> 
                Developed by <a href="#" class="text-decoration-none">[Your Name]</a> | 
                <i class="fas fa-envelope"></i> 
                <a href="mailto:[your.email@example.com]" class="text-decoration-none">Contact</a>
            </p>
        </div>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/main.js"></script>
</body>
</html>
