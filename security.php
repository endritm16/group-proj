<?php
// Security helper functions for the application

/**
 * Sanitize input data to prevent XSS attacks
 */
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
    return $data;
}

/**
 * Validate email format
 */
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

/**
 * Validate password strength
 */
function validatePassword($password) {
    // At least 6 characters long
    if (strlen($password) < 6) {
        return "Password must be at least 6 characters long.";
    }
    return true;
}

/**
 * Generate CSRF token
 */
function generateCSRFToken() {
    if (!isset($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

/**
 * Verify CSRF token
 */
function verifyCSRFToken($token) {
    return isset($_SESSION['csrf_token']) && hash_equals($_SESSION['csrf_token'], $token);
}

/**
 * Rate limiting for login attempts
 */
function checkRateLimit($username) {
    if (!isset($_SESSION['login_attempts'])) {
        $_SESSION['login_attempts'] = [];
    }
    
    $current_time = time();
    $attempts = $_SESSION['login_attempts'];
    
    // Clean old attempts (older than 15 minutes)
    foreach ($attempts as $key => $attempt) {
        if ($current_time - $attempt['time'] > 900) { // 15 minutes
            unset($_SESSION['login_attempts'][$key]);
        }
    }
    
    // Count recent attempts for this username
    $recent_attempts = 0;
    foreach ($_SESSION['login_attempts'] as $attempt) {
        if ($attempt['username'] === $username && $current_time - $attempt['time'] <= 900) {
            $recent_attempts++;
        }
    }
    
    return $recent_attempts < 5; // Allow 5 attempts per 15 minutes
}

/**
 * Record failed login attempt
 */
function recordFailedLogin($username) {
    if (!isset($_SESSION['login_attempts'])) {
        $_SESSION['login_attempts'] = [];
    }
    
    $_SESSION['login_attempts'][] = [
        'username' => $username,
        'time' => time()
    ];
}

/**
 * Clear login attempts for successful login
 */
function clearLoginAttempts($username) {
    if (isset($_SESSION['login_attempts'])) {
        foreach ($_SESSION['login_attempts'] as $key => $attempt) {
            if ($attempt['username'] === $username) {
                unset($_SESSION['login_attempts'][$key]);
            }
        }
    }
}
?>
