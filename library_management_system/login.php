<?php
session_start();
include 'db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$password'");

if (mysqli_num_rows($result) > 0) {
    $_SESSION['email'] = $email;
    header("Location: dashboard.php");
} else {
    echo "Invalid login!";
}
?>