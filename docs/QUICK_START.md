# Quick Start Guide - Vako Seals Laravel Application

## Step-by-Step Instructions to Run the Application

### Step 1: Install Composer Dependencies
Open PowerShell or Command Prompt in the project directory and run:
```bash
composer install
```
This will download all Laravel framework files and dependencies.

### Step 2: Create Environment File
Copy the example environment file:
```bash
copy .env.example .env
```

### Step 3: Generate Application Key
Generate a unique application encryption key:
```bash
php artisan key:generate
```

### Step 4: Start the Development Server
Run the Laravel development server:
```bash
php artisan serve
```

The application will be available at: **http://localhost:8000**

---

## Alternative: Using XAMPP Apache Server

If you prefer to use XAMPP's Apache server instead:

1. **Point XAMPP to the public folder:**
   - Edit `C:\xampp\apache\conf\httpd.conf`
   - Find `DocumentRoot` and change it to:
     ```
     DocumentRoot "C:/xampp/htdocs/vekoseals/public"
     ```
   - Also update the `<Directory>` section to match

2. **Restart Apache** from XAMPP Control Panel

3. **Access the site** at: **http://localhost**

---

## Troubleshooting

### If you get "Class not found" errors:
- Make sure you ran `composer install`
- Check that `vendor/autoload.php` exists

### If you get "No application encryption key" error:
- Run `php artisan key:generate`

### If port 8000 is already in use:
- Use a different port: `php artisan serve --port=8001`
- Then access at: `http://localhost:8001`

### If you see "Route not found" errors:
- Make sure all routes are defined in `routes/web.php`
- Clear route cache: `php artisan route:clear`

---

## Available Routes

Once running, you can access:
- Home: http://localhost:8000/
- About: http://localhost:8000/about
- Capabilities: http://localhost:8000/capabilities
- Products: http://localhost:8000/products
- Polymers: http://localhost:8000/polymers
- Inquiry: http://localhost:8000/inquiry
- Contact: http://localhost:8000/contact

