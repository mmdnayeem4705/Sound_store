<?php
require("includes/common.php");
session_start();

// Sanitize and hash the email and password
$email = mysqli_real_escape_string($con, $_POST['lemail']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$password = md5($password); // Ensure the password stored in the database is also hashed

// Modify the query to remove the phone number
$query = "SELECT id, email_id, password FROM users WHERE email_id='$email' AND password='$password'";
$result = mysqli_query($con, $query);
$num = mysqli_num_rows($result);

if ($num == 0) {
    $m = "Please enter correct E-mail id and Password";
    header('location: index.php?errorl=' . $m);
} else {
    $row = mysqli_fetch_array($result);
    // Store email and user ID in the session (remove phone number)
    $_SESSION['email'] = $row['email_id'];
    $_SESSION['user_id'] = $row['id'];
    // $_SESSION['phone_number'] = $row['phone_number']; // Remove this line
    header('location: products.php');
}
?>

