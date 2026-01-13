# Vako Seals Website - Laravel Application

This is a Laravel-based website for Vako Seals Pvt. Ltd., converted from static HTML files.

## Requirements

- PHP >= 8.1
- Composer
- MySQL/MariaDB (or any supported database)
- Web server (Apache/Nginx) or PHP built-in server

## Installation

1. **Install Dependencies**
   ```bash
   composer install
   ```

2. **Environment Configuration**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

3. **Configure Database**
   Edit `.env` file and set your database credentials:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=vekoseals
   DB_USERNAME=root
   DB_PASSWORD=
   ```

4. **Run Migrations** (if you create database tables later)
   ```bash
   php artisan migrate
   ```

5. **Start Development Server**
   ```bash
   php artisan serve
   ```
   
   The application will be available at `http://localhost:8000`

## Project Structure

```
vekoseals/
├── app/
│   └── Http/
│       └── Controllers/     # Controllers for handling requests
├── bootstrap/
│   └── app.php              # Application bootstrap
├── public/                  # Public assets and entry point
│   ├── css/                 # Stylesheets
│   ├── js/                  # JavaScript files
│   ├── images/              # Image assets
│   └── index.php           # Entry point
├── resources/
│   └── views/               # Blade templates
│       ├── layouts/
│       │   └── app.blade.php    # Main layout
│       ├── home.blade.php
│       ├── about.blade.php
│       ├── capabilities.blade.php
│       ├── products.blade.php
│       ├── polymers.blade.php
│       ├── inquiry.blade.php
│       ├── contact.blade.php
│       └── thank-you.blade.php
├── routes/
│   └── web.php              # Web routes
└── oldbakup/                # Original HTML files (backup)
```

## Routes

- `/` - Home page
- `/about` - About Us page
- `/capabilities` - Manufacturing Capabilities
- `/products` - Products listing
- `/polymers` - Polymers information
- `/inquiry` - Inquiry form
- `/contact` - Contact information
- `/thank-you` - Thank you page (after inquiry submission)

## Features

- ✅ Responsive design
- ✅ Image sliders/carousels
- ✅ Mobile-friendly navigation
- ✅ Inquiry form with validation
- ✅ SEO-friendly URLs
- ✅ Blade templating engine
- ✅ Laravel validation

## Next Steps (Optional Enhancements)

1. **Database Integration**: Create models and migrations for storing inquiries
2. **Email Notifications**: Configure email sending for inquiry submissions
3. **Admin Panel**: Add admin functionality to manage inquiries
4. **Image Optimization**: Optimize images for better performance
5. **Caching**: Implement caching for better performance

## Notes

- All original HTML files are preserved in the `oldbakup` folder
- Assets (CSS, JS, images) have been moved to the `public` directory
- The inquiry form currently redirects to a thank you page. To store inquiries, you'll need to:
  - Create a migration for an `inquiries` table
  - Create an `Inquiry` model
  - Update the `InquiryController@store` method to save data

## Support

For Laravel documentation, visit [https://laravel.com/docs](https://laravel.com/docs)

