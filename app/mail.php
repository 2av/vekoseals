<?php

/**
 * Mail Helper Functions
 */

if (!function_exists('send_mail')) {
    /**
     * Send email
     */
    function send_mail($to, $subject, $message, $headers = [])
    {
        $config = require APP_PATH . '/config.php';
        $mailConfig = $config['mail'];
        
        if (!$mailConfig['enabled']) {
            error_log('Mail is disabled in configuration');
            return false;
        }
        
        // Default headers
        $defaultHeaders = [
            'From' => $mailConfig['from_name'] . ' <' . $mailConfig['from'] . '>',
            'Reply-To' => $mailConfig['from'],
            'X-Mailer' => 'PHP/' . phpversion(),
            'MIME-Version' => '1.0',
            'Content-Type' => 'text/html; charset=UTF-8',
        ];
        
        $headers = array_merge($defaultHeaders, $headers);
        
        // Format headers
        $headerString = '';
        foreach ($headers as $key => $value) {
            $headerString .= $key . ': ' . $value . "\r\n";
        }
        
        // Send email
        $result = mail($to, $subject, $message, $headerString);
        
        if (!$result) {
            error_log('Failed to send email to: ' . $to);
        }
        
        return $result;
    }
}

if (!function_exists('send_inquiry_email')) {
    /**
     * Send inquiry email to site owner
     */
    function send_inquiry_email($data)
    {
        $config = require APP_PATH . '/config.php';
        $mailConfig = $config['mail'];
        
        $to = $mailConfig['to'];
        $subject = $mailConfig['subject_prefix'] . ' ' . ($data['subject'] ?? 'New Inquiry');
        $customerEmail = $data['email'] ?? '';
        
        // Build email message
        $message = '<html><body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">';
        $message .= '<div style="max-width: 600px; margin: 0 auto; padding: 20px; background-color: #f9f9f9;">';
        $message .= '<h2 style="color: #e67e22; border-bottom: 2px solid #e67e22; padding-bottom: 10px;">New Product Inquiry</h2>';
        $message .= '<table style="width: 100%; margin-top: 20px; background-color: white; padding: 15px; border-radius: 5px;">';
        
        $fields = [
            'Company Name' => $data['Companyname'] ?? '',
            'Contact Person' => $data['Contactperson'] ?? '',
            'Email' => $data['email'] ?? '',
            'Subject' => $data['subject'] ?? '',
            'Address' => $data['address'] ?? 'Not provided',
            'Country' => $data['country'] ?? 'Not provided',
            'Telephone' => $data['telephone'] ?? 'Not provided',
            'Fax' => $data['fax'] ?? 'Not provided',
            'Inquiry' => $data['inquiry'] ?? 'Not provided',
        ];
        
        foreach ($fields as $label => $value) {
            $message .= '<tr>';
            $message .= '<td style="padding: 8px; font-weight: bold; width: 150px; vertical-align: top;">' . htmlspecialchars($label) . ':</td>';
            $message .= '<td style="padding: 8px;">' . nl2br(htmlspecialchars($value)) . '</td>';
            $message .= '</tr>';
        }
        
        $message .= '</table>';
        $message .= '<p style="margin-top: 20px; font-size: 12px; color: #666;">This email was sent from the Vako Seals website contact form.</p>';
        $message .= '</div></body></html>';
        
        // Set Reply-To header to customer's email
        $headers = [];
        if ($customerEmail) {
            $headers['Reply-To'] = $customerEmail;
        }
        
        return send_mail($to, $subject, $message, $headers);
    }
}
