<?php
// Database connection settings
$servername = "localhost";
$username = "mahaba";
$password = "AIU22102235..";
$dbname = "php";

// Initialize variables
$publisherName = $companyName = $bookType = $locationStr = $selectedBook = $publisherCode = $comments = "";
$errors = [];

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate Publisher Name
    if (empty($_POST['txtpubname'])) {
        $errors['txtpubname'] = "Publisher Name is required.";
    } else {
        $publisherName = htmlspecialchars(trim($_POST['txtpubname']));
    }

    // Validate Company Name
    if (empty($_POST['txtCompany'])) {
        $errors['txtCompany'] = "Company Name is required.";
    } else {
        $companyName = htmlspecialchars(trim($_POST['txtCompany']));
    }

    // Validate Type of Book
    if (empty($_POST['optbook'])) {
        $errors['optbook'] = "Please select a Type of Book.";
    } else {
        $bookType = htmlspecialchars($_POST['optbook']);
    }

    // Validate Location
    if (empty($_POST['chkbook'])) {
        $errors['chkbook'] = "Please select at least one Location.";
    } else {
        $location = $_POST['chkbook']; // Array of selected locations
    }

    // Validate Select A Book
    if (empty($_POST['selectbook'])) {
        $errors['selectbook'] = "Please select a book.";
    } else {
        $selectedBook = htmlspecialchars($_POST['selectbook']);
    }

    // Validate Publisher Code
    if (empty($_POST['pwdpub'])) {
        $errors['pwdpub'] = "Publisher Code is required.";
    } else {
        $publisherCode = htmlspecialchars($_POST['pwdpub']);
    }

    // Validate Comments
    if (!empty($_POST['comment'])) {
        $comments = htmlspecialchars(trim($_POST['comment']));
    }

    // If no errors, insert the data into the database
    if (empty($errors)) {
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Convert the location array into a comma-separated string
        $locationStr = implode(',', $location);

        // Prepare and bind
        $stmt = $conn->prepare("INSERT INTO publishers (publisher_name, company_name, book_type, location, selected_book, publisher_code, comments) VALUES (?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssss", $publisherName, $companyName, $bookType, $locationStr, $selectedBook, $publisherCode, $comments);

        // Execute the statement
        if ($stmt->execute()) {
            echo "<h3>Form Submitted Successfully!</h3>";
            echo "<p>Publisher Name: " . htmlspecialchars($publisherName) . "</p>";
            echo "<p>Company Name: " . htmlspecialchars($companyName) . "</p>";
            echo "<p>Type of Book: " . htmlspecialchars($bookType) . "</p>";
            echo "<p>Location: " . htmlspecialchars($locationStr) . "</p>";
            echo "<p>Selected Book: " . htmlspecialchars($selectedBook) . "</p>";
            echo "<p>Publisher Code: " . htmlspecialchars($publisherCode) . "</p>";
            echo "<p>Comments: " . htmlspecialchars($comments) . "</p>";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close connections
        $stmt->close();
        $conn->close();
    } else {
        // Display errors if validation failed
        echo '<ul style="color: red;">';
        foreach ($errors as $error) {
            echo "<li>" . htmlspecialchars($error) . "</li>";
        }
        echo '</ul>';
    }
}
?>
