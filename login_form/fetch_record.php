<?php
include("connection.php");

$id = $_GET['id'];
$query = "SELECT * FROM login WHERE id_no='$id'";
$result = mysqli_query($conn, $query);

if ($result) {
    $row = mysqli_fetch_assoc($result);
    echo json_encode([
        'username' => $row['Username'],
        'email' => $row['email'],
        'password' => $row['Password']
    ]);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Failed to fetch record']);
}

mysqli_close($conn);
?>
