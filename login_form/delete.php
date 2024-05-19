<?php
include("connection.php"); // Include database connection code

// Check if ID is set and not empty
if(isset($_POST['id'])) {
    // Retrieve ID from the POST request
    $id = $_POST['id'];

    // Delete the record from the database
    $query = "DELETE FROM login WHERE id_no = '$id'";
    mysqli_query($conn, $query);
    // Return success message or handle errors
}
?>
