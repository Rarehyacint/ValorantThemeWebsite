<?php
    include("connection.php"); // Include database connection code
    session_start(); // Start the session

    // Check if the form is submitted
    if (isset($_POST['submit'])) {
        $username = $_POST['user'];
        $password = $_POST['pass'];
        $message = $_POST['message']; // Get the message from the form
        
        // Perform SQL query to check login credentials
        $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $sql);

        // Check if a matching user is found
        if (mysqli_num_rows($result) == 1) {
            // Set username in session variable
            $_SESSION['username'] = $username;
            
            // Redirect to index.php with message in the URL upon successful login
            $message = urlencode($message); // Encode message for URL
            header("Location: index.php?message=$message");
            exit(); // Exit to prevent further execution
        } else {
            // Display error message and stay on the login page
            echo '<script>
                alert("Login failed. Invalid username or password, please try again!!");
                window.location.href = "login.php";
            </script>';
        }
    }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN FORM</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="form">
        <h1>Login Form</h1> 
        <form name="form" action="login.php" method="POST">
            <label> Username: </label>
            <input type="text" id="user" name="user" required> <br> <br>
            <label> Password: </label>
            <input type="password" id="pass" name="pass" required>   <br> <br>
            <!-- <label> Message: </label>
            <input type="text" id="message" name="message"> <br> <br> Add input field for message -->
            <input type="submit" id="btn" value="Login" name="submit"/>
        </form>
    </div>
</body>
</html>
