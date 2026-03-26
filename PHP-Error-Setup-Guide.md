# PHP Error Detection Setup in Windsurf

## Step-by-Step Guide

### Step 1: Install PHP
- Downloaded and installed XAMPP from https://www.apachefriends.org/
- PHP installed at: `C:\xampp\php\php.exe`
- Verified PHP version: 8.2.12

### Step 2: Configure Windsurf Settings
1. Press `Ctrl+Shift+P`
2. Type: `Preferences: Open Settings (JSON)`
3. Added PHP configuration to `settings.json`:

```json
{
    "terminal.integrated.showCommandHint": false,
    "files.autoSave": "afterDelay",
    "php.executablePath": "C:\\xampp\\php\\php.exe",
    "php.validate.executablePath": "C:\\xampp\\php\\php.exe",
    "intelephense.environment.phpVersion": "8.2"
}
```

### Step 3: Install PHP Extension
1. Press `Ctrl+Shift+X` to open Extensions
2. Search for "Intelephense"
3. Click Install

### Step 4: Restart Windsurf
- Closed and reopened Windsurf to apply settings

### Step 5: Test Error Detection
1. Created test file `tetfile.php` with intentional syntax error:
```php
<?php
echo "Hello World"ss // missing semicolon
?>
```

2. Verified errors appear in Problems section (`Ctrl+Shift+M`)

### Step 6: Terminal Commands for Error Analysis

#### Single File Check:
```powershell
C:\xampp\php\php.exe -l filename.php
```

#### Directory-Wide Check:
```powershell
Get-ChildItem -Filter "*.php" | ForEach-Object { C:\xampp\php\php.exe -l $_.Name }
```

#### Recursive Directory Check:
```powershell
Get-ChildItem -Recurse -Filter "*.php" | ForEach-Object {
    Write-Host "Checking: $($_.FullName)"
    C:\xampp\php\php.exe -l $_.FullName
}
```

## Key Settings Explained

- `php.executablePath`: Path to PHP executable for general operations
- `php.validate.executablePath`: Path specifically for PHP syntax validation
- `intelephense.environment.phpVersion`: PHP version for IntelliSense

## Troubleshooting

- **"PHP installation could not be found"**: Add `php.validate.executablePath` setting
- **No errors showing**: Ensure Intelephense extension is installed and Windsurf restarted
- **Wrong PHP path**: Update both `php.executablePath` and `php.validate.executablePath`

## Result

✅ PHP syntax errors now appear in Windsurf Problems section in real-time
✅ Terminal commands available for batch error analysis
✅ Full PHP development environment configured
