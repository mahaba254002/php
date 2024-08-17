<?php
// empty(): Used to check if a given variable has an empty value
// A variable is considered empty if it is "" as string, 0 as integer, 0.0 as float, empty array [], NULL, or FALSE

$var = 0;     
$var = 0.0;
$var = " "; 
$var = " Hello";

if (empty($var)) {
    print("The variable is empty");
} else {
    print("The variable is not empty");
}

function validateRequired($field) {
    return !empty(trim($field));// trim():Remove characters from both sides of a string
}

function validateEmail($email){
    return filter_var($email,FILTER_VALIDATE_EMAIL)!==FALSE;//filter_var — Filters a variable with a specified filter
}
function validateURL($url) {
    return filter_var($url, FILTER_VALIDATE_URL) !== false;
}
function validateInteger($int) {
    return filter_var($int, FILTER_VALIDATE_INT) !== false;
}
function validateFloat($float) {
    return filter_var($float, FILTER_VALIDATE_FLOAT) !== false;
}
function validatePassword($password) {
    $containsLetter  = preg_match('/[a-zA-Z]/', $password);
    $containsDigit   = preg_match('/\d/', $password);
    $containsSpecial = preg_match('/[^a-zA-Z\d]/', $password);
    $length          = strlen($password) == 8;

    return $containsLetter && $containsDigit && $containsSpecial && $length;
}
function validateMatch($field1, $field2) {
    return $field1 === $field2;
}
function validatePhoneNumber($phone) {
    return preg_match('/^\+?[0-9]{10,15}$/', $phone);
}
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    // Required field validation
    if (!validateRequired($name)) {
        $errors['name'] = "Name is required.";
    }

    // Email validation
    if (!validateEmail($email)) {
        $errors['email'] = "Invalid email address.";
    }

    // Password validation
    if (!validatePassword($password)) {
        $errors['password'] = "Password must contain at least 8 characters, including letters, numbers, and special characters.";
    }

    // Confirm password validation
    if (!validateMatch($password, $confirmPassword)) {
        $errors['confirm_password'] = "Passwords do not match.";
    }

    // If no errors, proceed to process the form
    if (empty($errors)) {
        // Form processing code here
    }
}

?>
