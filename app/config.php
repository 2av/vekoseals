<?php

/**
 * Application Configuration
 */

return [
    // Email Configuration
    'mail' => [
        'enabled' => true,
        'to' => 'vako@vakoseals.com', // Site owner email
        'from' => 'noreply@vakoseals.com', // From email address
        'from_name' => 'Vako Seals Website',
        'subject_prefix' => '[Vako Seals Inquiry]',
        
        // SMTP Configuration (optional - if not set, uses PHP mail())
        'smtp' => [
            'enabled' => false, // Set to true to use SMTP
            'host' => 'smtp.gmail.com',
            'port' => 587,
            'username' => '',
            'password' => '',
            'encryption' => 'tls', // 'tls' or 'ssl'
        ],
    ],
];
