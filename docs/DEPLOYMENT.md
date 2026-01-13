# Production Deployment Guide

## For Domain: vakiseals.com

### Option 1: Apache Configuration (Recommended)

Configure Apache to point directly to the `public` folder as the document root.

#### Steps:

1. **Edit Apache Virtual Host Configuration**

   On your server, edit the Apache virtual host file (usually in `/etc/apache2/sites-available/` or `/etc/httpd/conf.d/`):

   ```apache
   <VirtualHost *:80>
       ServerName vakiseals.com
       ServerAlias www.vakiseals.com
       
       # Point DocumentRoot to the public folder
       DocumentRoot /var/www/vekoseals/public
       
       <Directory /var/www/vekoseals/public>
           AllowOverride All
           Require all granted
       </Directory>
       
       # Optional: Log files
       ErrorLog ${APACHE_LOG_DIR}/vekoseals_error.log
       CustomLog ${APACHE_LOG_DIR}/vekoseals_access.log combined
   </VirtualHost>
   ```

2. **Enable the site and restart Apache:**
   ```bash
   sudo a2ensite vakiseals.com
   sudo systemctl restart apache2
   ```

3. **Result:** 
   - ✅ `http://vakiseals.com` will work directly
   - ✅ No `/public/` in the URL needed
   - ✅ All routes work: `/about`, `/products`, etc.

---

### Option 2: Nginx Configuration

If using Nginx:

```nginx
server {
    listen 80;
    server_name vakiseals.com www.vakiseals.com;
    root /var/www/vekoseals/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    index index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

---

### Option 3: Using .htaccess (Not Recommended for Production)

If you can't change Apache configuration, you can use the root `.htaccess` file, but this is less secure and slower.

**Keep the current `.htaccess` in the root:**
```apache
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteRule ^(.*)$ public/$1 [L]
</IfModule>
```

**But this means:**
- ⚠️ The entire project folder is accessible (security risk)
- ⚠️ Slightly slower performance
- ✅ Works without server configuration changes

---

## Current Setup (Development)

Right now you're accessing: `http://localhost/vekoseals/public/`

This is because:
- XAMPP's document root is `C:\xampp\htdocs\`
- Your project is in `C:\xampp\htdocs\vekoseals\`
- So you need `/vekoseals/public/` to reach the Laravel entry point

---

## For Production Server

### Recommended Setup:

1. **Upload files to server:**
   ```
   /var/www/vekoseals/          (or your server path)
   ├── app/
   ├── bootstrap/
   ├── config/
   ├── public/          ← This becomes the document root
   ├── resources/
   ├── routes/
   └── ...
   ```

2. **Set Apache DocumentRoot to:**
   ```
   /var/www/vekoseals/public
   ```

3. **Result:**
   - Domain: `vakiseals.com` → Works directly ✅
   - No `/public/` in URL ✅
   - Clean URLs: `vakiseals.com/about`, `vakiseals.com/products` ✅

---

## Important Production Steps

1. **Set proper permissions:**
   ```bash
   sudo chown -R www-data:www-data /var/www/vekoseals
   sudo chmod -R 755 /var/www/vekoseals
   sudo chmod -R 775 /var/www/vekoseals/storage
   sudo chmod -R 775 /var/www/vekoseals/bootstrap/cache
   ```

2. **Update .env file:**
   ```env
   APP_ENV=production
   APP_DEBUG=false
   APP_URL=https://vakiseals.com
   ```

3. **Optimize Laravel:**
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   ```

4. **Set up SSL (HTTPS):**
   - Use Let's Encrypt for free SSL certificate
   - Update `APP_URL` to `https://vakiseals.com`

---

## Summary

- ❌ **NOT mandatory** to have `/public/` in URL
- ✅ **Best practice:** Configure server to point to `public/` folder
- ✅ **Result:** Clean URLs like `vakiseals.com` instead of `vakiseals.com/public/`

