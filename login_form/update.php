<?php
include("connection.php"); // Include database connection code

// Check if form is submitted
if(isset($_POST['submit'])) {
    // Retrieve form data
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Update the record in the database
    $query = "UPDATE login SET Username = '$username', email = '$email', Password = '$password' WHERE id_no = '$id'";
    mysqli_query($conn, $query);
    // Redirect to the dashboard or display a success message
}
?>
