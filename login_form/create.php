<?php
include("connection.php"); // Include database connection code

// Check if form is submitted
if(isset($_POST['submit'])) {
    // Retrieve form data
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Insert data into the database
    $query = "INSERT INTO login (Username, email, Password) VALUES ('$username', '$email', '$password')";
    mysqli_query($conn, $query);
    // Redirect to the dashboard or display a success message
}
?>
