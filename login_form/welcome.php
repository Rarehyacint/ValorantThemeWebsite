<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LANDINGPAGE</title>
    <style>
        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url('catmeme.jpg'); /* Specify the path to your background image */
            background-size: cover;
            background-repeat: no-repeat;
            z-index: 1; /* Set z-index behind other content */
        }
        .container {
            position: relative; /* Set position to relative */
            z-index: 10; /* Set a higher z-index than the body background */
            max-width: 800px; /* Set a maximum width for the content */
            margin: 0 auto; /* Center the content horizontally */
            text-align: center; /* Center the text */
            padding-top: 100px; /* Add some padding to the top */
            color: black; /* Set text color to white for better readability on the background image */
            font-family: Arial, sans-serif; /* Specify a fallback font */
        }
    </style>
</head>
<body>
    <div class="background"></div> <!-- Background image div -->
    <div class="container">
        <?php
            // Check if the username parameter exists in the URL
            if(isset($_GET['username'])) {
                // Retrieve the username from the URL parameter
                $username = $_GET['username'];
                echo "<h1>Welcome, $username!</h1>";
            } else {
                echo "<h1>Welcome!</h1>";
            }

            // Check if the message parameter exists in the URL
            if(isset($_GET['message'])) {
                // Retrieve the message from the URL parameter
                $message = urldecode($_GET['message']);
                echo "<p>$message</p>";
            }
        ?>
    </div>
</body>
</html>
