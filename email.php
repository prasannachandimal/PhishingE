<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the form input values
    $phone = $_POST["phone"];
    $name = $_POST["name"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Process the input values as needed
    // For demonstration purposes, we'll just print them out
    echo "Phone Number: " . $phone . "<br>";
    echo "Name: " . $name . "<br>";
    echo "Username: " . $username . "<br>";
    echo "Password: " . $password . "<br>";
}
?>
