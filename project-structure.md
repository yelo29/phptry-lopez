# PHP Project Structure Setup

## Technology Stack
- **Language**: PHP 8.2.12
- **Database**: MySQL (via XAMPP)
- **UI Framework**: Bootstrap 5
- **Icons**: Font Awesome
- **Communication**: AJAX (JavaScript Fetch API)
- **Web Server**: Apache (via XAMPP)

## Recommended Project Structure
```
c:\Projects\php\
├── public/                 # Web root (Apache DocumentRoot)
│   ├── index.php          # Main entry point
│   ├── assets/            # Static assets
│   │   ├── css/
│   │   │   └── custom.css
│   │   ├── js/
│   │   │   └── main.js
│   │   └── images/
│   └── .htaccess          # Apache configuration
├── src/                   # PHP source code
│   ├── config/
│   │   └── database.php   # Database configuration
│   ├── controllers/
│   ├── models/
│   └── views/
├── vendor/                # Composer dependencies
├── composer.json          # Dependency management
└── README.md
```

## Next Steps
1. Create project structure
2. Setup Composer
3. Install Bootstrap 5
4. Configure database connection
5. Create .htaccess for pretty URLs
6. Setup AJAX handlers
