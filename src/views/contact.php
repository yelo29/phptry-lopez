<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - PHP Project</title>
    
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
                        <a class="nav-link" href="/about"><i class="fas fa-info-circle"></i> About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/contact"><i class="fas fa-envelope"></i> Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4" style="padding-bottom: 100px;">
        <div class="row">
            <div class="col-md-8">
                <h1><i class="fas fa-envelope"></i> Contact Us</h1>
                <p class="lead">Get in touch with us for any inquiries, collaborations, or just to say hello!</p>
                
                <!-- Contact Form -->
                <div class="card mt-4">
                    <div class="card-header">
                        <h5><i class="fas fa-paper-plane"></i> Send Message</h5>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" novalidate>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="firstName" class="form-label">
                                        <i class="fas fa-user"></i> First Name
                                    </label>
                                    <input type="text" class="form-control" id="firstName" name="firstName" required>
                                    <div class="invalid-feedback">
                                        Please provide your first name.
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="lastName" class="form-label">
                                        <i class="fas fa-user"></i> Last Name
                                    </label>
                                    <input type="text" class="form-control" id="lastName" name="lastName" required>
                                    <div class="invalid-feedback">
                                        Please provide your last name.
                                    </div>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="email" class="form-label">
                                    <i class="fas fa-envelope"></i> Email Address
                                </label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="your.email@example.com" required>
                                <div class="invalid-feedback">
                                    Please provide a valid email address.
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="subject" class="form-label">
                                    <i class="fas fa-tag"></i> Subject
                                </label>
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="What's this about?" required>
                                <div class="invalid-feedback">
                                    Please provide a subject.
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="message" class="form-label">
                                    <i class="fas fa-comment"></i> Message
                                </label>
                                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Tell us more..." required></textarea>
                                <div class="invalid-feedback">
                                    Please provide a message.
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="priority" class="form-label">
                                    <i class="fas fa-flag"></i> Priority
                                </label>
                                <select class="form-select" id="priority" name="priority">
                                    <option value="low">Low - General Inquiry</option>
                                    <option value="medium" selected>Medium - Business Inquiry</option>
                                    <option value="high">High - Urgent Matter</option>
                                </select>
                            </div>
                            
                            <div class="mb-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="copyToMe" name="copyToMe">
                                    <label class="form-check-label" for="copyToMe">
                                        <i class="fas fa-copy"></i> Send a copy to my email
                                    </label>
                                </div>
                            </div>
                            
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fas fa-paper-plane"></i> Send Message
                                </button>
                                <button type="reset" class="btn btn-outline-secondary">
                                    <i class="fas fa-redo"></i> Reset Form
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="card mt-4">
                    <div class="card-header">
                        <h5><i class="fas fa-info-circle"></i> Other Ways to Reach Us</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h6><i class="fas fa-envelope"></i> Email</h6>
                                <p>
                                    <strong>General:</strong> [contact@yourcompany.com]<br>
                                    <strong>Support:</strong> [support@yourcompany.com]<br>
                                    <strong>Business:</strong> [business@yourcompany.com]
                                </p>
                                
                                <h6><i class="fas fa-phone"></i> Phone</h6>
                                <p>
                                    <strong>Main:</strong> [+1] [XXX-XXX-XXXX]<br>
                                    <strong>Support:</strong> [+1] [XXX-XXX-XXXX]<br>
                                    <strong>Fax:</strong> [+1] [XXX-XXX-XXXX]
                                </p>
                            </div>
                            <div class="col-md-6">
                                <h6><i class="fas fa-map-marker-alt"></i> Address</h6>
                                <p>
                                    [Your Company Name]<br>
                                    [Street Address]<br>
                                    [City, State ZIP Code]<br>
                                    [Country]
                                </p>
                                
                                <h6><i class="fas fa-clock"></i> Business Hours</h6>
                                <p>
                                    <strong>Monday - Friday:</strong> [9:00 AM - 6:00 PM]<br>
                                    <strong>Saturday:</strong> [10:00 AM - 4:00 PM]<br>
                                    <strong>Sunday:</strong> [Closed]
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Response Time -->
                <div class="card mt-4">
                    <div class="card-header">
                        <h5><i class="fas fa-hourglass-half"></i> Response Times</h5>
                    </div>
                    <div class="card-body">
                        <div class="row text-center">
                            <div class="col-md-4">
                                <i class="fas fa-envelope fa-2x text-primary mb-2"></i>
                                <h6>Email Inquiries</h6>
                                <p class="small">Within 24-48 hours</p>
                            </div>
                            <div class="col-md-4">
                                <i class="fas fa-phone fa-2x text-success mb-2"></i>
                                <h6>Phone Calls</h6>
                                <p class="small">During business hours</p>
                            </div>
                            <div class="col-md-4">
                                <i class="fas fa-briefcase fa-2x text-warning mb-2"></i>
                                <h6>Business Proposals</h6>
                                <p class="small">Within 3-5 business days</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <!-- Quick Contact Card -->
                <div class="card">
                    <div class="card-header">
                        <h5><i class="fas fa-bolt"></i> Quick Contact</h5>
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <i class="fas fa-comments fa-3x text-primary"></i>
                        </div>
                        <h6 class="text-center">Need Quick Help?</h6>
                        <p class="text-center">Use our quick contact options for immediate assistance.</p>
                        
                        <div class="d-grid gap-2">
                            <button class="btn btn-success w-100">
                                <i class="fas fa-phone"></i> Call Now
                            </button>
                            <button class="btn btn-info w-100">
                                <i class="fas fa-comments"></i> Live Chat
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Social Media Card -->
                <div class="card mt-3">
                    <div class="card-header">
                        <h5><i class="fas fa-share-alt"></i> Follow Us</h5>
                    </div>
                    <div class="card-body">
                        <p class="text-center mb-3">Stay connected for updates and news!</p>
                        
                        <div class="row text-center">
                            <div class="col-3">
                                <a href="[Your Facebook URL]" class="btn btn-outline-primary btn-sm">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="[Your Twitter URL]" class="btn btn-outline-info btn-sm">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="[Your LinkedIn URL]" class="btn btn-outline-primary btn-sm">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                            <div class="col-3">
                                <a href="[Your Instagram URL]" class="btn btn-outline-danger btn-sm">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Office Locations Card -->
                <div class="card mt-3">
                    <div class="card-header">
                        <h5><i class="fas fa-map"></i> Office Locations</h5>
                    </div>
                    <div class="card-body">
                        <h6><i class="fas fa-building"></i> Headquarters</h6>
                        <p class="small">
                            [Your HQ Address]<br>
                            [City, State ZIP]<br>
                            <a href="#" class="text-decoration-none">Get Directions <i class="fas fa-external-link-alt"></i></a>
                        </p>
                        
                        <h6><i class="fas fa-building"></i> Branch Office</h6>
                        <p class="small">
                            [Your Branch Address]<br>
                            [City, State ZIP]<br>
                            <a href="#" class="text-decoration-none">Get Directions <i class="fas fa-external-link-alt"></i></a>
                        </p>
                    </div>
                </div>

                <!-- FAQ Card -->
                <div class="card mt-3">
                    <div class="card-header">
                        <h5><i class="fas fa-question-circle"></i> Frequently Asked Questions</h5>
                    </div>
                    <div class="card-body">
                        <div class="accordion" id="faqAccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faq1">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1Content">
                                        <i class="fas fa-clock"></i> What are your business hours?
                                    </button>
                                </h2>
                                <div id="faq1Content" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        [Your business hours information - e.g., Monday-Friday 9AM-6PM, Saturday 10AM-4PM, Sunday Closed]
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faq2">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2Content">
                                        <i class="fas fa-truck"></i> Do you offer international shipping?
                                    </button>
                                </h2>
                                <div id="faq2Content" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        [Your shipping policy information - e.g., Yes, we ship worldwide with standard and express options]
                                    </div>
                                </div>
                            </div>
                            
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="faq3">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3Content">
                                        <i class="fas fa-undo"></i> What is your return policy?
                                    </button>
                                </h2>
                                <div id="faq3Content" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                                    <div class="accordion-body">
                                        [Your return policy information - e.g., 30-day return policy for unused items in original condition]
                                    </div>
                                </div>
                            </div>
                        </div>
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
                <i class="fas fa-envelope"></i> 
                <a href="mailto:[your.email@example.com]" class="text-decoration-none">[your.email@example.com]</a> | 
                <i class="fas fa-phone"></i> 
                [+1] [XXX-XXX-XXXX]
            </p>
        </div>
    </footer>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom JS -->
    <script src="assets/js/main.js"></script>
</body>
</html>
