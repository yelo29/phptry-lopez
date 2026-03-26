# Quick Setup Instructions

## 1. XAMPP Configuration

### Set DocumentRoot
1. Open XAMPP Control Panel
2. Click Apache "Config" → "Apache (httpd.conf)"
3. Find `DocumentRoot` line and change to:
   ```
   DocumentRoot "C:/Projects/php/public"
   ```
4. Find `<Directory>` line below and change to:
   ```
   <Directory "C:/Projects/php/public">
   ```

### Enable mod_rewrite
In same httpd.conf file, uncomment:
```
LoadModule rewrite_module modules/mod_rewrite.so
```

**How to uncomment:**
1. Press `Ctrl + F` and search for: `mod_rewrite.so`
2. Find the line: `#LoadModule rewrite_module modules/mod_rewrite.so`
3. Remove the `#` symbol at the beginning
4. Result should be: `LoadModule rewrite_module modules/mod_rewrite.so`
5. Press `Ctrl + S` to save

The `#` symbol is a comment - removing it enables the module.

### Restart Apache
Save changes and restart Apache in XAMPP Control Panel.

## 2. Database Setup
1. Start MySQL in XAMPP
2. Go to http://localhost/phpmyadmin
3. Create new database: `your_database`
4. Update `src/config/database.php` with your database name

## 3. Test Application
1. Open browser: http://localhost/
2. You should see the Bootstrap homepage
3. Test AJAX button to verify functionality

## 4. Composer (Optional)
```bash
# In project root
composer install
```

## 5. Verify Everything Works
- ✅ Homepage loads with Bootstrap styling
- ✅ AJAX button works and shows response
- ✅ Navigation links work
- ✅ No PHP errors in browser console
- ✅ No PHP errors in Apache logs

Your PHP development environment is now ready!
