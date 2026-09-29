<?php
if (isset($_POST['b1'])) {

    $name = trim($_POST['name']);
    $age = trim($_POST['age']);
    $address = trim($_POST['address']);
    $phone = trim($_POST['phone']);
    $email = trim($_POST['email']);
    $card = trim($_POST['card']);
    $password = trim($_POST['password']);
    $valid = true;
    // Name validation
    if (empty($name)) {
        echo "Name is required.<br>";
        $valid = false;
    } elseif (!preg_match("/^[a-zA-Z ]+$/", $name)) {
        echo "Name should contain only letters.<br>";
        $valid = false;
    }
    // Age validation
    if (empty($age)) {
        echo "Age is required.<br>";
        $valid = false;
    } elseif (!is_numeric($age) || $age < 1 || $age > 100) {
        echo "Enter a valid age.<br>";
        $valid = false;
    }
    // Address validation
    if (empty($address)) {
        echo "Address is required.<br>";
        $valid = false;
    }
    // Phone validation
    if (empty($phone)) {
        echo "Phone number is required.<br>";
        $valid = false;
    } elseif (!preg_match("/^[0-9]{10}$/", $phone)) {
        echo "Phone number must contain 10 digits.<br>";
        $valid = false;
    }
    // Email validation
    if (empty($email)) {
        echo "Email is required.<br>";
        $valid = false;
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Enter a valid email address.<br>";
        $valid = false;
    }
    // Credit card validation
    if (empty($card)) {
        echo "Credit card number is required.<br>";
        $valid = false;
    } elseif (!preg_match("/^[0-9]{16}$/", $card)) {
        echo "Credit card number must contain 16 digits.<br>";
        $valid = false;
    }
    // Password validation
    if (empty($password)) {
        echo "Password is required.<br>";
        $valid = false;
    } elseif (strlen($password) < 6) {
        echo "Password must contain at least 6 characters.<br>";
        $valid = false;
    }
    // Final result
    if ($valid) {
        echo "<h3>Form submitted successfully!</h3>";
        echo "Name: " . htmlspecialchars($name) . "<br>";
        echo "Age: " . htmlspecialchars($age) . "<br>";
        echo "Address: " . htmlspecialchars($address) . "<br>";
        echo "Phone: " . htmlspecialchars($phone) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Credit Card: Valid<br>";
        echo "Password: Valid<br>";
    }
}
?>
