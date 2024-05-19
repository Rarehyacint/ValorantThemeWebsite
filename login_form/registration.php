<?php
    include("connection.php");

    if (isset($_POST['submit'])) {
        $username = $_POST['user'];
        $password = $_POST['pass'];
        $email = $_POST['email'];
        
        $sql = "INSERT INTO login (username, password, email) VALUES ('$username', '$password', '$email')";
        
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            header("Location: Login.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTER FORM</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div id="form">
        <h1>Register Form</h1> 
        <form name="form" action="registration.php" method="POST">
            <label> Username: </label>
            <input type="text" id="user" name="user" required> <br> <br>
            <label> Email: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>      
            <input type="email" id="email" name="email" required> <br> <br>
            <label> Password: </label>
            <input type="password" id="pass" name="pass" required>   <br> <br>
            <input type="submit" id="btn" value="Register" name="submit"/>
        </form>
    </div>
</body>
</html>
