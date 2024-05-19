<?php
include("connection.php"); // Include database connection code

$action = $_POST['action'];

if ($action == 'create') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO login (Username, email, Password) VALUES ('$username', '$email', '$password')";
    if (mysqli_query($conn, $query)) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to create record']);
    }
} elseif ($action == 'update') {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "UPDATE login SET Username='$username', email='$email', Password='$password' WHERE id_no='$id'";
    if (mysqli_query($conn, $query)) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to update record']);
    }
} elseif ($action == 'delete') {
    $id = $_POST['id'];

    $query = "DELETE FROM login WHERE id_no='$id'";
    if (mysqli_query($conn, $query)) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Failed to delete record']);
    }
}

mysqli_close($conn);
?>
