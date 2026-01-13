# XAMPP Setup Instructions

## Quick Setup for XAMPP

### Step 1: Install Composer Dependencies
Open PowerShell/CMD in the project folder and run:
```bash
composer install
```
**This is required and may take 2-5 minutes.**

### Step 2: Create .env File
Create a file named `.env` in the root directory with this content:

```
APP_NAME=VakoSeals
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost/vekoseals

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=vekoseals
DB_USERNAME=root
DB_PASSWORD=

SESSION_DRIVER=file
CACHE_STORE=file
```

### Step 3: Generate Application Key
After composer install completes, run:
```bash
php artisan key:generate
```

### Step 4: Access the Site
Open your browser and go to:
**http://localhost/vekoseals/**

The root `.htaccess` file will automatically redirect to the `public` folder.

---

## Important Notes

1. **Make sure XAMPP Apache is running** (check XAMPP Control Panel)

2. **If you see "500 Internal Server Error":**
   - Check that `composer install` completed successfully
   - Make sure `.env` file exists and has `APP_KEY` generated
   - Check Apache error logs in `C:\xampp\apache\logs\error.log`

3. **If you see "Class not found" errors:**
   - Run `composer install` again
   - Make sure `vendor` folder exists

4. **If mod_rewrite is not enabled:**
   - Edit `C:\xampp\apache\conf\httpd.conf`
   - Find and uncomment: `LoadModule rewrite_module modules/mod_rewrite.so`
   - Restart Apache

---

## Alternative: Direct Public Access

If the redirect doesn't work, you can access directly:
**http://localhost/vekoseals/public/**

