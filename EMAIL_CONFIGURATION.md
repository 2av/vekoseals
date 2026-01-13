# Email Configuration Guide

## Overview
The inquiry form sends emails to the site owner when a form is submitted. The email functionality is configured in `app/config.php`.

## Configuration File
Edit `app/config.php` to configure email settings:

### Basic Configuration
```php
'mail' => [
    'enabled' => true,  // Set to false to disable email sending
    'to' => 'vako@vakoseals.com',  // Site owner email (where inquiries are sent)
    'from' => 'noreply@vakoseals.com',  // From email address
    'from_name' => 'Vako Seals Website',
    'subject_prefix' => '[Vako Seals Inquiry]',
],
```

### Using PHP mail() Function (Default)
By default, the system uses PHP's built-in `mail()` function. This works on most servers but may have limitations:

- **Pros**: No additional configuration needed
- **Cons**: May go to spam, limited control

### Using SMTP (Recommended for Production)
For better deliverability, configure SMTP:

```php
'smtp' => [
    'enabled' => true,  // Enable SMTP
    'host' => 'smtp.gmail.com',  // SMTP server
    'port' => 587,  // Port (587 for TLS, 465 for SSL)
    'username' => 'your-email@gmail.com',  // SMTP username
    'password' => 'your-app-password',  // SMTP password or app password
    'encryption' => 'tls',  // 'tls' or 'ssl'
],
```

### Common SMTP Providers

#### Gmail
```
host: smtp.gmail.com
port: 587
encryption: tls
Note: You need to use an "App Password" instead of your regular password
```

#### Outlook/Hotmail
```
host: smtp-mail.outlook.com
port: 587
encryption: tls
```

#### Custom SMTP Server
```
host: mail.yourdomain.com
port: 587 (or 465 for SSL)
encryption: tls (or ssl)
```

## Testing Email
1. Submit the inquiry form
2. Check the recipient email inbox
3. Check spam folder if email is not received
4. Check server error logs if email fails

## Troubleshooting

### Email Not Sending
1. Check `app/config.php` - ensure `enabled` is `true`
2. Check server error logs
3. Verify email addresses are correct
4. Test with a simple email first

### Email Going to Spam
1. Use SMTP instead of PHP mail()
2. Ensure "from" email matches your domain
3. Add SPF/DKIM records to your domain DNS
4. Use a professional email service

### SMTP Connection Issues
1. Verify SMTP credentials
2. Check firewall settings
3. Ensure correct port and encryption
4. For Gmail, enable "Less secure app access" or use App Password

## Security Notes
- Never commit `app/config.php` with real passwords to version control
- Use environment variables for sensitive data in production
- Consider using a dedicated email service (SendGrid, Mailgun, etc.) for high-volume sites
