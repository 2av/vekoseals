# Deployment Guide for Vako Seals Website

## Server Configuration

The website is configured to work with the `public` directory as the document root.

### For IIS (Windows Server)

1. **Set Document Root**: Point your IIS website to the `public` directory
   - Physical Path: `C:\Inetpub\vhosts\ayodhyakashiyatra.com\vakoseals.ayodhyakashiyatra.com\public`

2. **Default Document**: Ensure `index.php` is set as the default document
   - The `web.config` file in `public` directory handles this automatically

3. **URL Rewrite**: Install URL Rewrite module for IIS if not already installed
   - Download from: https://www.iis.net/downloads/microsoft/url-rewrite
   - The `web.config` file includes rewrite rules

4. **PHP Configuration**: Ensure PHP is installed and configured in IIS

### File Structure on Server

```
vakoseals.ayodhyakashiyatra.com/
├── public/              (Document Root)
│   ├── index.php        (Entry point)
│   ├── web.config       (IIS configuration)
│   ├── .htaccess        (Apache configuration)
│   ├── css/
│   ├── js/
│   └── images/
├── app/
│   ├── Controllers/
│   ├── helpers.php
│   ├── mail.php
│   └── config.php
├── views/
└── (other files)
```

### Upload Instructions

1. Upload all files to the server maintaining the directory structure
2. Ensure the `public` directory is set as the document root
3. Set proper file permissions (755 for directories, 644 for files)
4. Ensure PHP sessions directory is writable

### Testing

After deployment, test:
- Home page: `http://vakoseals.ayodhyakashiyatra.com/`
- About page: `http://vakoseals.ayodhyakashiyatra.com/about`
- Contact page: `http://vakoseals.ayodhyakashiyatra.com/contact`
- Inquiry form: `http://vakoseals.ayodhyakashiyatra.com/inquiry`

### Troubleshooting

**403.14 Error**: 
- Ensure `index.php` exists in the `public` directory
- Check that `index.php` is in the default documents list
- Verify `web.config` is present and correct

**404 Errors**:
- Check URL Rewrite module is installed (IIS)
- Verify `.htaccess` is working (Apache)
- Check file permissions

**CSS/JS not loading**:
- Verify asset paths are correct
- Check file permissions on `public/css`, `public/js`, `public/images`
- Clear browser cache
