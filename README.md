# Vako Seals Website - Laravel Application

This is a Laravel-based website for Vako Seals Pvt. Ltd., converted from static HTML files.

## Quick Start

1. Install dependencies: `composer install`
2. Create `.env` file (copy from `.env.example` if available)
3. Generate key: `php artisan key:generate`
4. Start server: `php artisan serve` or use XAMPP

## Documentation

All documentation files are located in the `docs/` folder:

- **[README.md](docs/README.md)** - Full project documentation
- **[QUICK_START.md](docs/QUICK_START.md)** - Quick start guide
- **[XAMPP_SETUP.md](docs/XAMPP_SETUP.md)** - XAMPP setup instructions
- **[XAMPP_LOCAL_SETUP.md](docs/XAMPP_LOCAL_SETUP.md)** - Local development setup
- **[DEPLOYMENT.md](docs/DEPLOYMENT.md)** - Production deployment guide

## Requirements

- PHP >= 8.1
- Composer
- MySQL/MariaDB (optional, for storing inquiries)
- Web server (Apache/Nginx) or PHP built-in server

## Project Structure

```
vekoseals/
├── app/              # Application code
├── public/           # Public assets and entry point
├── resources/        # Views and assets
├── routes/           # Route definitions
├── docs/             # Documentation files
└── oldbakup/         # Original HTML files (backup)
```

## Access Routes

- Home: `/`
- About: `/about`
- Capabilities: `/capabilities`
- Products: `/products`
- Polymers: `/polymers`
- Inquiry: `/inquiry`
- Contact: `/contact`

For detailed information, see the [documentation folder](docs/).

