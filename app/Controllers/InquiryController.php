<?php

class InquiryController {
    public function create() {
        view('inquiry', ['errors' => $_SESSION['errors'] ?? []]);
    }

    public function store() {
        // Validate CSRF token
        if (!isset($_POST['_token']) || $_POST['_token'] !== csrf_token()) {
            die('Invalid CSRF token');
        }

        $errors = [];
        
        // Validation
        if (empty($_POST['Companyname']) || strlen($_POST['Companyname']) > 30) {
            $errors['Companyname'] = 'Company name is required and must be max 30 characters';
        }
        if (empty($_POST['Contactperson']) || strlen($_POST['Contactperson']) > 30) {
            $errors['Contactperson'] = 'Contact person is required and must be max 30 characters';
        }
        if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) || strlen($_POST['email']) > 50) {
            $errors['email'] = 'Valid email is required and must be max 50 characters';
        }
        if (empty($_POST['subject']) || strlen($_POST['subject']) > 50) {
            $errors['subject'] = 'Subject is required and must be max 50 characters';
        }
        if (isset($_POST['telephone']) && strlen($_POST['telephone']) > 15) {
            $errors['telephone'] = 'Telephone must be max 15 characters';
        }
        if (isset($_POST['fax']) && strlen($_POST['fax']) > 15) {
            $errors['fax'] = 'Fax must be max 15 characters';
        }

        if (!empty($errors)) {
            $_SESSION['errors'] = $errors;
            $_SESSION['_old_input'] = $_POST;
            redirect(route('inquiry.create'));
        }

        // Send email to site owner
        require_once APP_PATH . '/mail.php';
        $emailSent = send_inquiry_email($_POST);
        
        // Log if email failed (but don't show error to user)
        if (!$emailSent) {
            error_log('Failed to send inquiry email for: ' . ($_POST['email'] ?? 'unknown'));
        }

        // Store old input for success message
        $_SESSION['_old_input'] = [];
        $_SESSION['success'] = 'Your inquiry has been submitted successfully! We will get back to you soon.';
        
        redirect(route('thank-you'));
    }

    public function thankYou() {
        $success = $_SESSION['success'] ?? null;
        if (isset($_SESSION['success'])) {
            unset($_SESSION['success']);
        }
        view('thank-you', ['success' => $success]);
    }
}
