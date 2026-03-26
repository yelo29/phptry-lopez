# XAMPP Configuration Guide

This document details the XAMPP configuration changes required for the PHP Project.

## 📋 Required XAMPP Modifications

### 1. Apache Configuration (`httpd.conf`)

**File Location**: `C:\xampp\apache\conf\httpd.conf`

**Changes Made:**

#### A. DocumentRoot Update
**Find (around line 247):**
```apache
DocumentRoot "C:/xampp/htdocs"
```

**Replace with:**
```apache
DocumentRoot "C:/Projects/php/public"
```

#### B. Directory Configuration
**Find (around line 248):**
```apache
<Directory "C:/xampp/htdocs">
```

**Replace with:**
```apache
<Directory "C:/Projects/php/public">
```

#### C. Enable mod_rewrite
**Find (around line 185):**
```apache
#LoadModule rewrite_module modules/mod_rewrite.so
```

**Replace with:**
```apache
LoadModule rewrite_module modules/mod_rewrite.so
```

#### D. Directory Permissions
**Find the Directory section and ensure it has:**
```apache
<Directory "C:/Projects/php/public">
    Options Indexes FollowSymLinks Includes ExecCGI
    AllowOverride All
    Require all granted
</Directory>
```

### 2. PHP Configuration (Optional)

**File Location**: `C:\xampp\php\php.ini`

**Recommended Changes for Development:**

#### A. Error Display
```ini
display_errors = On
error_reporting = E_ALL
```

#### B. Extensions (ensure enabled)
```ini
extension=pdo_mysql
extension=mysqli
extension=openssl
extension=curl
```

### 3. MySQL Configuration

**No changes required** - Use default XAMPP MySQL settings.

## 🔄 Setup Process

### Step 1: Backup Original Files
```bash
# Backup Apache config
copy "C:\xampp\apache\conf\httpd.conf" "C:\xampp\apache\conf\httpd.conf.backup"

# Backup PHP config (if modifying)
copy "C:\xampp\php\php.ini" "C:\xampp\php\php.ini.backup"
```

### Step 2: Apply Changes
1. Open `C:\xampp\apache\conf\httpd.conf` in text editor
2. Make the DocumentRoot and Directory changes
3. Enable mod_rewrite module
4. Save the file

### Step 3: Restart Apache
1. Open XAMPP Control Panel
2. Stop Apache service
3. Start Apache service
4. Verify no error messages

### Step 4: Test Configuration
1. Open browser: http://localhost/
2. Should see the PHP Project homepage
3. Test AJAX button functionality
4. Verify clean URLs work

## 🧪 Verification Commands

### Test Apache Configuration
```bash
# Test Apache syntax
"C:\xampp\apache\bin\httpd.exe" -t

# Expected output: Syntax OK
```

### Test PHP Configuration
```bash
# Check PHP version
"C:\xampp\php\php.exe" -v

# Check loaded modules
"C:\xampp\php\php.exe" -m
```

### Test Database Connection
```bash
# Connect to MySQL
"C:\xampp\mysql\bin\mysql.exe" -u root -p

# Create database (if needed)
CREATE DATABASE zepol;
```

## 🔧 Troubleshooting

### Common Issues

#### Issue 1: Apache Won't Start
**Symptoms**: XAMPP Apache service fails to start
**Causes**: Syntax error in httpd.conf
**Solution**: 
1. Check Apache error log: `C:\xampp\apache\logs\error.log`
2. Verify all changes in httpd.conf
3. Restore from backup and reapply changes

#### Issue 2: 403 Forbidden Error
**Symptoms**: Access denied when visiting http://localhost/
**Causes**: Directory permissions issue
**Solution**:
1. Verify `Require all granted` in Directory section
2. Check file permissions on `C:\Projects\php\public`
3. Ensure Apache has read access to project folder

#### Issue 3: 404 Not Found Error
**Symptoms**: Page not found for specific routes
**Causes**: .htaccess not working or mod_rewrite disabled
**Solution**:
1. Verify `LoadModule rewrite_module` is uncommented
2. Check `AllowOverride All` is set in Directory section
3. Verify .htaccess exists in `public/` folder

#### Issue 4: PHP Errors Not Showing
**Symptoms**: White screen or HTTP 500 with no error details
**Causes**: PHP error reporting disabled
**Solution**:
1. Enable `display_errors = On` in php.ini
2. Set `error_reporting = E_ALL` in php.ini
3. Restart Apache after changes

## 🔄 Reset Instructions

### To Restore Original XAMPP Configuration
```bash
# Restore Apache config
copy "C:\xampp\apache\conf\httpd.conf.backup" "C:\xampp\apache\conf\httpd.conf"

# Restore PHP config (if modified)
copy "C:\xampp\php\php.ini.backup" "C:\xampp\php\php.ini"

# Restart Apache
# Use XAMPP Control Panel to stop and start Apache
```

## 📝 Notes

### Why Not Commit XAMPP Files to Git?

1. **System-Specific Paths**: Contains absolute paths to your local system
2. **Security**: Configuration files may contain sensitive information
3. **Portability**: Other developers will have different XAMPP installation paths
4. **XAMPP Updates**: Configuration files are overwritten during XAMPP updates

### Alternative Approaches

#### For Teams
- Share this configuration guide with team members
- Each developer applies changes to their local XAMPP
- Use environment variables for paths (advanced)

#### For Deployment
- Use web server configuration files (Apache .conf, Nginx .conf)
- Deploy to production servers with proper configuration
- Different from development XAMPP setup

## ✅ Checklist

- [ ] Backup original configuration files
- [ ] Update DocumentRoot in httpd.conf
- [ ] Update Directory path in httpd.conf
- [ ] Enable mod_rewrite module
- [ ] Set proper directory permissions
- [ ] Restart Apache service
- [ ] Test http://localhost/ loads correctly
- [ ] Test AJAX functionality works
- [ ] Test clean URLs work
- [ ] Verify no Apache errors in log file

---

**Last Updated**: March 2026  
**XAMPP Version**: Compatible with XAMPP 8.2.12 and later  
**Project**: PHP Development Environment
