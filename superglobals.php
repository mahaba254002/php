<?php
// Superglobals are variables that are readily available throughout the program.
// No need for declaration. They can simply be accessed anywhere in the script.

// 1. $_GET: Collects data sent in the URL query string
// Used when processing script has no lasting effect
// used to request data from a server.
$id = $_GET['id'];
echo "ID: $id\n";

// 2. $_POST: Collects data sent by an HTML form using POST method
// Commonly used for form submissions
// used to send data to a server to be processed.
$username = $_POST['username'];
echo "Username: $username\n";

// 3. $_REQUEST: Collects data from $_GET, $_POST, and $_COOKIE
// Used to retrieve request data without worrying about the method used
$name = $_REQUEST['name'];
echo "Name: $name\n";

// 4. $_SERVER: Holds/provide information about headers, paths, and script locations
// Often used to get information about the server environment and request details
echo "PHP Self: " . $_SERVER['PHP_SELF'] . "\n";
echo "Server Name: " . $_SERVER['SERVER_NAME'] . "\n";
echo "Request Method: " . $_SERVER['REQUEST_METHOD'] . "\n";

// 5. $_FILES: Manages file uploads
// Used to handle files uploaded via an HTML form
// Assuming a file was uploaded with an input name of "upload"
$file = $_FILES['upload']['name'];
echo "Uploaded File: $file\n";

// 6. $_ENV: Stores environment variables
// Used to retrieve variables set in the environment
echo "Path: " . $_ENV['PATH'] . "\n";

// 7. $_COOKIE: Stores data sent to the server by the client's cookies
// Used to retrieve or set cookies
$cookie = $_COOKIE['user'];
echo "User Cookie: $cookie\n";

// 8. $_SESSION: Stores session variables
// Used to maintain data across different pages during a user's visit
session_start();
$_SESSION['username'] = 'mahaba';
echo "Session Username: " . $_SESSION['username'] . "\n";

// 9. $_GLOBALS: References all global variables available in the script
// Used to access global variables from anywhere in the script
$x = 5;
$y = 10;
function sum() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
sum();
echo "Sum of x and y: " . $GLOBALS['z'] . "\n";
?>
